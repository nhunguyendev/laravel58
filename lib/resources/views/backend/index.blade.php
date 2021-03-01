@extends('backend.master')

@section('title', 'Admin | Dashboard')
    



@section('main')
<!--main-container-part-->
<div id="content">
  <!--breadcrumbs-->
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
  <!--End-breadcrumbs-->

  <!--Action boxes-->
    <div class="container-fluid">
      <div class="quick-actions_homepage">
        <ul class="quick-actions">
          <li class="bg_lb span3"> <a href="{{asset('admin/home')}}"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
          <li class="bg_lg"> <a href="{{asset('admin/category')}}"> <i class="icon-signal"></i> Category</a> </li>
          <li class="bg_lo"> <a href="{{asset('admin/product')}}"> <i class="icon-th"></i> Product</a> </li>
          <li class="bg_ls"> <a href="setting.html"> <i class="icon-fullscreen"></i> Setting</a> </li>        

        </ul>
      </div>
      <!--End-Action boxes-->    


      <hr/>
      <div class="row-fluid">
        <div class="span12">
          <h1>Welcome to Admin page!</h1>
        </div>
      </div>
    </div>
</div>

<!--end-main-container-part-->
@endsection
