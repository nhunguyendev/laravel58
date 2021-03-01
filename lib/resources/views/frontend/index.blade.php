@extends('frontend.master')

@section('title', 'Trang chủ')
    



@section('main')
	<div class="main-right">
		<div class="main-left-title text-center mb-4">
			Sản phẩm nổi bật
		</div>

		<div class="right-box row">
			@foreach ($featured as $item)
				
			
			<div class="col-md-4 col-12 mb-4">
				<div class="product-box">
					<a href="{{ asset('detail/' . $item->id . '/' . $item->slug . '.html')}}">
						<img src="{{ asset('lib/storage/app/product/' . $item->img1) }}" alt="" class="img-fluid">
					</a>
					<div class="product-title text-center">
						<a class="font-weight-bold" href="{{ asset('detail/' . $item->id . '/' . $item->slug . '.html')}}">{{ $item->name }}</a>
					</div>
					<div class="product-price text-center text-danger">{{ number_format($item->price, 0, ',', '.') }} VND</div>
					<div class="text-center mt-1">
						{{-- <button class="btn btn-primary btn-buy">Mua ngay</button> --}}
						<a href="#" class="btn btn-primary btn-buy" data-url="{{ asset('add-to-cart/' . $item->id) }}">Mua ngay</a>
					</div>
				</div>
			</div>

			@endforeach

		</div>
		<!-- end new product  -->

		<!-- feature product  -->
		<div class="main-left-title text-center mb-4">
			Sản phẩm mới
		</div>

		<div class="right-box row">
			@foreach ($new as $item)
				
			
			<div class="col-md-4 col-12 mb-4">
				<div class="product-box">
					<a href="{{ asset('detail/' . $item->id . '/' . $item->slug . '.html')}}"><img src="{{ asset('lib/storage/app/product/' . $item->img1) }}"
							alt="" class="img-fluid"></a>
					<div class="product-title text-center"><a class="font-weight-bold"
							href="{{ asset('detail/' . $item->id . '/' . $item->slug . '.html')}}">{{ $item->name }}</a></div>
					<div class="product-price text-center text-danger">{{ number_format($item->price, 0, ',', '.') }} VND</div>
					<div class="text-center mt-1">
						<a href="#" class="btn btn-primary btn-buy" data-url="{{ asset('add-to-cart/' . $item->id) }}">Mua ngay</a>
					</div>
				</div>
			</div>

			@endforeach

		</div>
		<!-- end feature product  -->
	</div>
	
@endsection		

@section('script')
<script>

	function addToCart(event){
		event.preventDefault()
		let url = $(this).data('url')
		

		$.ajax({
			method: 'GET',
			url: url,
			dataType: 'json',
			success: function(data){
				if(data.code === 200){
					alert('Đã thêm vào giỏ hàng thành công.')
					console.log(data)
				}
			},
			error: function(){

			}
		})

		
	}
	$(function(){
		$('.btn-buy').on('click', addToCart)
	})
</script>	
@endsection