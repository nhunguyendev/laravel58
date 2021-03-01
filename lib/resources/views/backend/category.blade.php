@extends('backend.master')

@section('title', 'Admin | Category')

@section('main')
<!--main-container-part-->
<div id="content">

  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        
          <h1>All categories</h1>      
        
        <hr>
        <a class="btn btn-success" href="{{asset('admin/category/add')}}">Add category</a>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span6">
  
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Category list</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Category ID</th>
                  <th>Category name</th>
                  <th>Slug</th>                  
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $item)
                  <tr class="even gradeC">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category_name }}</td>
                    <td>{{ $item->category_slug }}</td>                    
                    <td style="text-align: center;">
                      <a href="{{ asset('admin/category/edit/' . $item->id )}}" class="btn btn-warning btn-mini">Edit</a> 
                      <a onclick="return confirm('Are you sure to DELETE this item?')" href="{{ asset('admin/category/delete/' . $item->id )}}" class="btn btn-danger btn-mini">Delete</a>
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

<!--end-main-container-part-->
@endsection