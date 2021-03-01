<!DOCTYPE html>
<html lang="en">

<head>
	<base href="{{asset('public/layout/frontend')}}/">
	<title>Thanh toán</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="main.css" />
</head>

<body>
	<div class="top-menu container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="top-menu-left">
						<ul class="top-menu-ul">
							<li class="top-menu-item hot-line"><i class="fa fa-phone"></i> Hotline: 0912 333 444</li>
						</ul>
					</div>
					<div class="top-menu-right">
						<ul class="top-menu-ul">
							<li class="top-menu-item">
								<!-- <a class="top-item-link" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a> -->
								  
								<a class="top-item-link" href="{{ asset('check-out') }}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
							</li>
							<li class="top-menu-item">
								<a class="top-item-link" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in"></i> Đăng nhập</a>
								<!-- <a class="top-item-link" href=""><i class="fa fa-sign-in"></i> Đăng nhập</a> -->
							</li>
							<li class="top-menu-item">
								<a class="top-item-link" href=""><i class="fa fa-key"></i> Đăng ký</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="container">
			<div class="banner text-center pt-5 pb-5">
				Shop điện tử Online
			</div>
		</div>
	</div>


	<nav class="nav-bar navbar navbar-expand-lg navbar-light bg-light">
		<div class="nav-bar-container container">
			<!-- <a class="navbar-brand" href="#">Navbar</a> -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{asset('/')}}">Trang chủ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{asset('/')}}">Giới thiệu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ asset('check-out') }}">Giỏ hàng</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{asset('/')}}">Tin tức</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{asset('/')}}">Liên hệ</a>
					</li>
					
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Nhập tên sản phẩm"/>
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">
						Tìm kiến
					</button>
				</form>
			</div>
		</div>
	</nav>

	<div class="main container">
		<div class="row mt-4 cart-wrap">
			@include('frontend.cart_sum')	
		</div>
	</div>

	<!-- Modal  -->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<form class="pl-4 pr-4"> 
					<div class="form-group row">						
					  <label for="inputUsername" class="col-sm-3 col-form-label">Tài khoản</label>
					  <div class="col-sm-9">
						<input type="text" class="form-control" id="inputUsername" value="">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="inputPassword" class="col-sm-3 col-form-label">Mật khẩu</label>
					  <div class="col-sm-9">
						<input type="password" class="form-control" id="inputPassword" placeholder="">
					  </div>
					</div>
				  </form>
			</div>
			<div class="modal-footer" style="justify-content: center;">
				<button type="button" class="btn btn-primary">Đăng nhập</button>
			  	<button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>			  
			</div>
		  </div>
		</div>
	  </div>
	  <!-- Modal  -->
	<div class="footer container-fluid text-center pt-5 pb-5 bg-light">
		Footer  -  &copy 2020
	</div>
<!-- --------------------------------- Javascript ------------------------------  -->
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="1.js"></script>
	<script>
		function updateQuantity(number){

			number = $('.quantity').val()
			let urlUpdate = $('.table').data('url')
			let id = $(this).data('id')
			let quantity = $(this).val()
			$.ajax({
				method: 'GET',
				url: urlUpdate,
				data: {
					id: id,
					quantity: quantity
				},
				success: function(data){
					if(data.code === 200){
						$('.cart-wrap').html(data.cartView)
					}
				}
			})
			
		}

		function cartDelete(event){
			event.preventDefault()

			let urlDelete = $('.cart').data('url')
			let id = $(this).data('id')
			
			$.ajax({
				method: 'GET',
				url: urlDelete,
				data: {
					id: id					
				},
				success: function(data){
					if(data.code === 200){
						$('.cart-wrap').html(data.cartView)
					}
				}
			})


		}

		$(function(){
			$(document).on('change', '.quantity', updateQuantity)
			$(document).on('click', '.cart-delete', cartDelete)
		})
	</script>
</body>

</html>