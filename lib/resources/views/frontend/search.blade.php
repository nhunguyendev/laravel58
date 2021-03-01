@extends('frontend.master')

@section('title', 'Kết quả tìm kiếm')
    



@section('main')
				<div class="main-right">
					<div class="main-left-title text-center mb-4">
						Tìm kiếm với từ khóa: {{$key}}
					</div>
					
					<div class="right-box row">

						@foreach ($items as $item)				
			
							<div class="col-md-4 col-12 mb-4">
								<div class="product-box">
									<a href="{{ asset('detail/' . $item->id . '/' . $item->slug . '.html')}}"><img src="{{ asset('lib/storage/app/product/' . $item->img1) }}"
											alt="" class="img-fluid"></a>
									<div class="product-title text-center"><a class="font-weight-bold"
											href="{{ asset('detail/' . $item->id . '/' . $item->slug . '.html')}}">{{ $item->name }}</a></div>
									<div class="product-price text-center text-danger">{{ number_format($item->price, 0, ',', '.') }} VND</div>
									<div class="text-center mt-1"><button class="btn btn-primary btn-buy">Mua ngay</button>
									</div>
								</div>
							</div>

						@endforeach

					</div>
					
					<div class="pagi text-center mb-4">
						{{-- {{$category->links()}} --}}
					</div>

				</div>
@endsection