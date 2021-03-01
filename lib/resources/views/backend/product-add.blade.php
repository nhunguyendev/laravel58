@extends('backend.master')

@section('title', 'Admin | Add Product')

@section('main') 
<div id="content">
  <div class="container-fluid">

    <div class="row-fluid">
      <div class="span12">
        
          <h1>Add product</h1>      
        
        <hr>
      </div>
    </div>


    <div class="row-fluid">
      <div class="span6">
        @include('errors.note')
        <div class="widget-box">
          <div class="widget-title">
            <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Add new product</h5>
            
          </div>
          <div class="widget-content nopadding">
            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
              @csrf
              <div class="control-group">
                <label class="control-label">Product name:</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Product name" name="name" required/>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Category:</label>
                <div class="controls">
                  <select name="category_id">
                    @foreach ($categories as $item)
                    <option value="{{$item->id}}">{{$item->category_name}}</option>
                    @endforeach
                    
                    
                  </select>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Price:</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Price" name="price" required/>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Featured:</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Featured" name="featured" required/>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Description:</label>
                <div class="controls">
                  <textarea id="ckeditor" class="span11" name="description" required></textarea>
                  <script>                    
                    CKEDITOR.replace('ckeditor', 
                    {
                        filebrowserBrowseUrl: '../../editor/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
                        filebrowserUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserWindowWidth : '200',
                        filebrowserWindowHeight : '200'
                    });

                    // CKEDITOR.replace('ckeditor')
                  </script>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Product image 1:</label>
                <div class="controls">
                  <input type="file" name="img1" required/>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Product image 2:</label>
                <div class="controls">
                  <input type="file" name="img2"/>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Product image 3:</label>
                <div class="controls">
                  <input type="file" name="img3"/>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Product image 4:</label>
                <div class="controls">
                  <input type="file" name="img4"/>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Active product:</label>
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

@endsection
