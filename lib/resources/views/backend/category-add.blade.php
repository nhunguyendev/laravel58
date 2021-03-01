@extends('backend.master')

@section('title', 'Admin | Add Category')

@section('main')
<!--main-container-part-->
<div id="content">

  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        
          <h1>Add category</h1>      
        
        <hr>
      </div>
    </div>
  
  
    <div class="row-fluid">
      <div class="span6">
        @include('errors.note')
        <div class="widget-box">
          <div class="widget-title">
            <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Add new category</h5>
            
          </div>
          <div class="widget-content nopadding">
            <form action="" method="post" class="form-horizontal">
              @csrf
              <div class="control-group">
                <label class="control-label">Category name:</label>
                <div class="controls">
                  <input type="text" name="name" class="span11" placeholder="Category name" />
                </div>
              </div>
  
              <div class="control-group">
                <label class="control-label">Description field:</label>
                <div class="controls">
                  <input type="text" class="span11" />
                  <span class="help-block">Description field</span> </div>
              </div>
  
              <div class="control-group">
                <label class="control-label">Active category:</label>
                <div class="controls">
                  <select >
                    <option>On</option>
                    <option>Off</option>                
                  </select>
                </div>
              </div>
  
              <div class="form-actions">
                <button type="submit" class="btn btn-success">Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end-main-container-part-->
@endsection