@extends('admin.layout.app')

@section('ckEditor')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
    <script src="{{asset('templateEditor/ckeditor/ckeditor.js')}}"></script> 

  <script type="text/javascript">  
       CKEDITOR.replace( 'editor1' );  
    </script>

@endsection




@section('main-content')
  

       <div class="app-title">
        <div>
          <h1 style="font-family: impact;"><i class="fa fa-edit"></i> Add New Video </h1>
          <p>Sample post</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">video</li>
          <li class="breadcrumb-item"><a href="#">add video</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
           @include('admin.errors.error')
              @include('admin.errors.success')
            <div class="tile-body">

              <form  method="post" action="{{ route('youtube.store') }}" >
                    {{ csrf_field() }}
                <div class="form-group">
                  <label class="control-label">Video Title</label>
                  <input class="form-control" type="text" placeholder="Enter video title" name="title" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                  <label class="control-label">Video Slug</label>
                  <input class="form-control" type="text" placeholder="Enter video slug" name="slug" value="{{ old('slug') }}">
                </div>

                <div class="form-group">
                  <label class="control-label">Video Body</label>
                  <textarea id="editor1" class="ckeditor" name="body" value="{{ old('body') }}" ></textarea>          
                </div>
  

           <div class="tile-footer">
             <input type="submit" class="btn btn-primary" value="Add Video" class="fa fa-fw fa-lg fa-check-circle">    
            </div>

              </form>

            </div>
          </div>
        </div>

 
      </div>
       
      

@endsection