@extends('frontend.master')

@section('title', 'Chi tiết ' . $product->name)
    



@section('main')

	<div class="main-right">
		<div class="main-left-title text-center mb-4">
			Thông tin sản phẩm
		</div>
		
		<div class="right-box mb-5">
			<div class="row">
				<div class="col-md-6 col-12 mb-4">
					<div class="row">
						<div class="col-12 mb-5">
							<img id="productImg" class="img-fluid bordered" src="{{ asset('lib/storage/app/product/' . $product->img1) }}" alt="">
						</div>

						<div class="col-3">
							<img class="small-img-rol img-fluid bordered" src="{{ asset('lib/storage/app/product/' . $product->img1) }}">
						</div>
						
							@if( $product->img2)
								<div class="col-3">
									<img class="small-img-rol img-fluid bordered" src="{{ asset('lib/storage/app/product/' . $product->img2) }}">
								</div>
							@endif

							@if( $product->img3)
								<div class="col-3">
									<img class="small-img-rol img-fluid bordered" src="{{ asset('lib/storage/app/product/' . $product->img3) }}">
								</div>
							@endif

							@if( $product->img4)
								<div class="col-3">
									<img class="small-img-rol img-fluid bordered" src="{{ asset('lib/storage/app/product/' . $product->img4) }}">
								</div>
							@endif
						

						
					</div> 
				</div>

				<div class="col-12 col-md-6">
					<div class="row">
						<div class="col-12">
							<p class="text-primary"></p>
							<form class="form-group mb-5" action="">
								<h1 class="font-weight-bold">{{ $product->name }}</h1>
								<h4 class="font-weight-bold text-danger mb-4">{{ number_format($product->price, 0, ',', '.') }} VND</h4>
								<div class="input-group mb-3" style="width: 200px;">									
								</div>
								<div class="input-group mb-3" style="width: 200px;">
									<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Số lượng</span>
									</div>
									<input type="number" class="form-control quantity" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="1">
								</div>                                        
								<a class="btn btn-primary btn-buy" data-url="{{ asset('update-cart/' . $product->id) }}" data-id="{{ $product->id }}">Mua ngay</a>
							</form>
							<h4 class="font-weight-bold">Product Detail <i class="fa fa-indent"></i></h4>                                        
							<p> {!!$product->description!!}</p>
						</div>
					</div>
													
				</div>
			</div>
			
			
		</div>
		<!-- end new product  -->

		<!-- feature product  -->
		<div class="main-left-title text-center mb-4">
			Sản phẩm tương tự
		</div>
		
		<div class="right-box row">
			<div class="col-md-4 col-12 mb-4">
				<div class="product-box">
					<a href=""><img src="./img/samsung-galaxy-z-fold-2-vang-600x600-600x600.jpg" alt="" class="img-fluid"></a>
					<div class="product-title text-center"><a class="font-weight-bold title-link" href="">Galaxy z fold 2 Vàng</a></div>
					<div class="product-price text-center text-danger">49.000.000 VND</div>
					<div class="text-center mt-1"><button class="btn btn-primary btn-buy">Mua ngay</button></div>
				</div>
			</div>
			<div class="col-md-4 col-12 mb-4">
				<div class="product-box">
					<a href=""><img src="./img/samsung-galaxy-s21-plus-062321-112345-400x400.jpg" alt="" class="img-fluid"></a>
					<div class="product-title text-center"><a class="font-weight-bold" href="">Galaxy s21 plus</a></div>
					<div class="product-price text-center text-danger">23.500.000 VND</div>
					<div class="text-center mt-1"><button class="btn btn-primary btn-buy">Mua ngay</button></div>
				</div>
			</div>
			<div class="col-md-4 col-12 mb-4">
				<div class="product-box">
					<a href=""><img src="./img/samsung-galaxy-s20-plus-xanh-600x600-600x600.jpg" alt="" class="img-fluid"></a>
					<div class="product-title text-center"><a class="font-weight-bold" href="">Galaxy s20 Xanh</a></div>
					<div class="product-price text-center text-danger">12.500.000 VND</div>
					<div class="text-center mt-1"><button class="btn btn-primary btn-buy">Mua ngay</button></div>
				</div>
			</div>
			
		</div>
		<!-- end feature product  -->
	</div>
			
@endsection

@section('script')
<script>

	function addToCart(event){
		event.preventDefault()
		let url = $(this).data('url')
		
		let number = $('.quantity').val()
		let urlUpdate = $(this).data('url')
		let id = $(this).data('id')
		let quantity = $('.quantity').val()
		$.ajax({
			method: 'GET',
			url: urlUpdate,
			data: {
				id: id,
				quantity: quantity
			},
			success: function(data){
				if(data.code === 200){
					alert('Đã thêm vào giỏ hàng thành công.')
				}
			}
		})
	}

	$(function(){
		$('.btn-buy').on('click', addToCart)
	})


	//Show img khi click vao thumbnail
	var ProductImg = document.getElementById("productImg");
    var SmallImg = document.getElementsByClassName("small-img-rol");

    SmallImg[0].onclick = function()
    {       
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function()
    {
        ProductImg.src = SmallImg[1].src;
    }
    SmallImg[2].onclick = function()
    {
        ProductImg.src = SmallImg[2].src;
    }
    SmallImg[3].onclick = function()
    {       
        ProductImg.src = SmallImg[3].src;
    }

</script>
	
@endsection