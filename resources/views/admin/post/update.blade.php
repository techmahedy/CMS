@extends('admin.layout.app')

@section('editor')
 <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
 
    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('main-content')
  

       <div class="app-title">
        <div>
          <h1 style="font-family: impact;"><i class="fa fa-edit"></i> Update Post </h1>
          <p>Sample post</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">post</li>
          <li class="breadcrumb-item"><a href="#">add post</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
           @include('admin.errors.error')
              @include('admin.errors.success')
            <div class="tile-body">

              <form  method="post" action="{{ route('post.update',$posts->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                   {{method_field('PUT')}}
                <div class="form-group">
                  <label class="control-label">Post Title</label>
                  <input class="form-control" type="text" name="title"  value="{{$posts->title}}">
                </div>          

                 <div class="form-group">
                  <label class="control-label">Post Meta-description</label>
                  <input class="form-control" type="text" name="meta"  value="{{$posts->meta}}">
                </div>
                
                <div class="form-group">
                  <label class="control-label">Post Body</label>
                    <textarea id="summernote" name="body" value="{{ old('body') }}">
                        {{$posts->body}}
                    </textarea>                 
                </div>
                 
                <div class="form-group">
                  <label class="control-label">Choose Post Image</label>
                  <input class="form-control" type="file" name="image">
                  <img src="/{{$posts->image}}" style="height: 50px;" width="50px;">
                </div>

           <div class="clearfix"></div>       
              <h4>Select Category</h4>
              <select class="form-control" id="demoSelect" multiple="" name="select_category[]">
                <optgroup label="Select Category">
                   @foreach ($categories as $category)
                     <option value="{{$category->id}}" 
                        @foreach ($posts->PostRelateToCategory as $PostCategory)
                          @if ($PostCategory->id == $category->id)
                          {{'selected="selected"'}}
                          @endif 
                        @endforeach >
                    {{ $category->category_name }} </option>               
                  @endforeach    
                </optgroup>
              </select>

               <div class="clearfix"></div>       
              <h4>Select Tag</h4>
              <select class="form-control" id="demoSelect2" multiple="" name="select_tag[]">
                <optgroup label="Select Tag">
                   @foreach ($tags as $tag)
                     <option value="{{$tag->id}}" 
                        @foreach ($posts->PostRelateToTag as $PostTag)
                          @if ($PostTag->id == $tag->id)
                          {{'selected="selected"'}}
                          @endif 
                        @endforeach >
                    {{ $tag->tag_name }} </option>               
                  @endforeach            
                </optgroup>
              </select>
        
               <div class="form-group">
                  <label class="control-label">Updated By</label>
                  <input class="form-control" type="text" name="posted" value="{{Auth::user()->name}}">
                </div>

                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" value="1" type="checkbox" name="status" @if ($posts->status == 1)
                    {{'checked'}}
                  @endif >
                  I accept the terms and conditions
                    </label>
                  </div>
                </div>

           <div class="tile-footer">
             <input type="submit" class="btn btn-primary" value="Update Post" class="fa fa-fw fa-lg fa-check-circle"> 
             | <a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>   
            </div>

              </form>

            </div>
          </div>
        </div>

 
      </div>
       
      

@endsection


@section('ckEditor')
 
<!-- Include external JS libs. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/js/froala_editor.pkgd.min.js"></script>
 
    <!-- Initialize the editor. -->
    <script> $(function() { $('textarea').froalaEditor() }); </script>
@endsection

@section('selectBoxFooter')
    <script type="text/javascript" src="{{asset('admin/js/plugins/select2.min.js')}}"></script>
    <script type="text/javascript">
      $('#demoSelect').select2();
      $('#demoSelect2').select2();
    </script>
@endsection
