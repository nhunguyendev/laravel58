@extends('backend.master')

@section('title', 'Admin | Product')

@section('main')  

<div id="content">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        
          <h1>All product</h1>      
        
        <hr>
        <a class="btn btn-success" href="{{asset('admin/product/add')}}">Add product</a>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
    
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Product list</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Category</th>
                  <th>Product ID</th>
                  <th>Product name</th>
                  <th>Price</th>
                  <th>Description(s)</th>
                  <th class="center">Image</th>
                  <th class="center">Actions</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($product_list as $item)
                
                  <tr class="even gradeC">
                    <td>{{$item->category_name}}</td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{ number_format($item->price, 0, ',', '.') }} VND</td>
                    <td class="td-description">{!!$item->description!!}</td>
                    <td style="text-align: center;">
                      <img src="{{ asset('lib/storage/app/product/' . $item->img1) }}" alt="" style="max-height: 100px;">  
                    </td>
                    <td style="text-align: center;">
                      <a href="{{ asset('admin/product/edit/' . $item->id )}}" class="btn btn-warning btn-mini">Edit</a>                
                      <a onclick="return confirm('Are you sure to DELETE this item?')" href="{{ asset('admin/product/delete/' . $item->id )}}" class="btn btn-danger btn-mini">Delete</a>
                    </td>
                  </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
    
      </div>
    </div>
  </div>
</div>

@endsection