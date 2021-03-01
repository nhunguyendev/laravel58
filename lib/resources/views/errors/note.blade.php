@if (Session::has('error'))    
    <div class="control-group normal_text"> <p class="alert alert-danger">{{Session::get('error')}}</p> </div>    
@endif

@foreach ($errors-> all() as $error)
    <p class="alert alert-danger">{{$error}}</p>
@endforeach