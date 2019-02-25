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
          <h1 style="font-family: impact;"><i class="fa fa-edit"></i> Update User Role</h1>
          <p>Sample user</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">user</li>
          <li class="breadcrumb-item"><a href="#">add user</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
           @include('admin.errors.error')
              @include('admin.errors.success')
            <div class="tile-body">

              <form  method="post" action="{{ route('admin.update',$admins->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}

                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" value="1" type="checkbox" name="status" @if ($admins->status == 1)
                    {{'checked'}}
                  @endif> Do you wanna keep user active ?
                    </label>
                  </div>
                </div>

           <div class="tile-footer">
             <input type="submit" class="btn btn-primary" value="Deactive User" class="fa fa-fw fa-lg fa-check-circle"> 
             | <a href="{{ route('admin.index') }}" class="btn btn-primary">Back</a>   
            </div>

              </form>

            </div
          </div>
        </div>

 
      </div>
       
      

@endsection