@extends('frontend.layout.master2')
@section('selectBoxFooter')
    <script type="text/javascript" src="{{asset('admin/js/plugins/select2.min.js')}}"></script>
    <script type="text/javascript">
      $('#demoSelect').select2();
      $('#demoSelect2').select2();
    </script>
@endsection


@section('ckEditor')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
    <script src="{{asset('templateEditor/ckeditor/ckeditor.js')}}"></script> 

  <script type="text/javascript">  
       CKEDITOR.replace( 'editor1' );  
    </script>

@endsection

@section('content')
    	 <div class="section-title">
            <h2 class="title">USER CONTRIBUTE POST</h2>
        </div>
						<!-- ARTICLE POST -->
						<article class="article article-post">

						<div class="article-body">
							<ul class="article-info">
								<li class="article-category"><a href="">HOME</a></li>
								<li class="article-category"><a href="">CONTRIBUTE</a></li>
								<li class="article-category"><a href="">POST</a></li>
								<li class="article-type"><i class="fa fa-file-text"></i></li>
							</ul>	
						</div>
							

              @include('admin.errors.error')
              @include('admin.errors.success')
            <div class="tile-body">

              <form  method="post" action="{{ route('contribute.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                <div class="form-group">
                  <label class="control-label">Post Title</label>
                  <input class="form-control" type="text" placeholder="Enter post title" name="title" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                  <label class="control-label">Post Slug</label>
                  <input class="form-control" type="text" placeholder="Enter post slug" name="slug" value="{{ old('slug') }}">
                </div>
               
               <div class="form-group">
                  <label class="control-label">Post Meta-description</label>
                  <input class="form-control" type="text" placeholder="Enter post Meta-description" name="meta" value="{{ old('meta') }}">
                </div>
  

                <div class="form-group">
                  <label class="control-label">Post Body</label>
                  <textarea id="editor1" class="ckeditor" name="body">
                    {{ old('body') }}
                  </textarea>          
                </div>
                 
                <div class="form-group">
                  <label class="control-label">Post Feature Image</label>
                  <input class="form-control" type="file" name="image">
                </div>

           <div class="clearfix"></div>       
              <h4>Select Category</h4>
             <select class="form-control" id="demoSelect" multiple="" name="select_category[]">
                <optgroup label="Select Category">
                    @foreach ($categories as $item)
                      <option value="{{$item->id}}">{{$item->category_name}}</option>
                    @endforeach
                </optgroup>
              </select>

               <div class="clearfix"></div>       
              <h4>Select Tag</h4>
              <select class="form-control" id="demoSelect2" multiple="" name="select_tag[]">
                <optgroup label="Select Subcategory">
                   @foreach ($tags as $item)
                      <option value="{{$item->id}}">{{$item->tag_name}}</option>
                    @endforeach           
                </optgroup>
              </select>

               <div class="form-group">
                  <label class="control-label">Posted By</label>
                  <input class="form-control" type="text" name="posted" value="{{Auth::user()->name}}">
                </div>

                 <div class="form-group">
                  <label class="control-label">Posted By</label>
                  <input class="form-control" type="hidden" name="posted" value="{{Auth::user()->id}}">
                </div>

             <div class="tile-footer">
              <input type="submit" class="btn btn-primary" value="Submit Your Post" class="fa fa-fw fa-lg fa-check-circle">    
            </div>

              </form>
            </div>

		</article>
						<!-- /ARTICLE POST -->
						
				
@endsection