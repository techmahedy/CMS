@extends('admin.layout.app')


@section('main-content')
  

       <div class="app-title">
        <div>
          <h1 style="font-family: impact;"><i class="fa fa-edit"></i> Add New Tag </h1>
          <p>Sample tag add</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">tag</li>
          <li class="breadcrumb-item"><a href="#">add tag</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
           @include('admin.errors.error')
              @include('admin.errors.success')
            <div class="tile-body">

              <form  method="post" action="{{ route('tag.store') }}">
                  {{ csrf_field() }}
                <div class="form-group">
                  <label class="control-label">Tag Title</label>
                  <input class="form-control" type="text" placeholder="Enter tag title" name="tag_name">
                </div>

                <div class="form-group">
                  <label class="control-label">Tag Slug</label>
                  <input class="form-control" type="text" placeholder="Enter tag slug" name="slug">
                </div>
         
                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="1" name="status">Do you want to publish it?
                    </label>
                  </div>
                </div>

            <div class="tile-footer">
              <input type="submit" class="btn btn-primary" value="Add Tag" class="fa fa-fw fa-lg fa-check-circle">        
            </div>

              </form>
            </div>        
          </div>
        </div>

 
      </div>
       
      

@endsection