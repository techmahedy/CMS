@extends('admin.layout.app')

@section('selectBoxFooter')
    <script type="text/javascript" src="{{asset('admin/js/plugins/select2.min.js')}}"></script>
    <script type="text/javascript">
      $('#demoSelect').select2();
      $('#demoSelect2').select2();
      $('#demoSelect3').select2();
    </script>
@endsection

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
          <h1 style="font-family: impact;"><i class="fa fa-edit"></i> Update video </h1>
          <p>Sample video</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">video</li>
          <li class="breadcrumb-item"><a href="#">update video</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
           @include('admin.errors.error')
              @include('admin.errors.success')
            <div class="tile-body">

              <form  method="post" action="{{ route('youtube.update',$videos->id) }}">
                    {{ csrf_field() }}
                   {{method_field('PUT')}}
                <div class="form-group">
                  <label class="control-label">Video Title</label>
                  <input class="form-control" type="text" name="title"  value="{{$videos->title}}">
                </div>          

                <div class="form-group">
                  <label class="control-label">Video Body</label>
                  <textarea id="editor1" class="ckeditor" name="body" value="{{ old('body') }}" >
                    
                   {{$videos->body}}

                  </textarea>          
                </div>

           <div class="tile-footer">
             <input type="submit" class="btn btn-primary" value="Update Video" class="fa fa-fw fa-lg fa-check-circle">
             | <a href="{{ route('youtube.index') }}"  class="btn btn-primary" class="fa fa-fw fa-lg fa-check-circle">Back</a>     
            </div>

              </form>

            </div>
          </div>
        </div>

 
      </div>
       
      

@endsection