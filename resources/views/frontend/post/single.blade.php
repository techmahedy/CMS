@extends('frontend.layout.app')
@section('prismheader')
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/prism.css')}}">
@endsection

@section('content')

    	    @if (session('status'))
             <div class="alert alert-success">
                {{ session('status') }}
             </div>
            @endif  
						<!-- ARTICLE POST -->
						<article class="article article-post">

							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="">HOME</a></li>
									<li class="article-category"><a href="">POST</a></li>
									<li class="article-category"> 
										 @foreach ($post->PostRelateToCategory as $category)
                                                     <a href="{{ route('category',$category->slug) }}">    
                                                     {{ $category->category_name }}
                                          @endforeach
                                       </a>

									</li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
									
								</ul>
								   @include('admin.errors.success')
								<h1 class="article-title">{{$post->title}}</h1>
								<ul class="article-meta">

									 <li style="color: black"><i class="fa fa-clock-o"></i>
                                         {{ date('F j , Y' , strtotime($post->created_at)) }} 
                                     </li>

									<li style="color: black"><i class="fa fa-user"></i>
										{{$post->posted}}
									</li>

									<li style="color: black"><i class="fa fa-signal"></i>
										{{$post->view_count}}
									</li>
                             
									<li>
										<li style="color:black">Category</li>
										 @foreach ($post->PostRelateToCategory as $category)
                                                     <a href="{{ route('category',$category->slug) }}">    
                                                     {{ $category->category_name }}
                                          @endforeach
                                       </a>
									</li>
								

								</ul>
								<p> {!! htmlspecialchars_decode($post->body) !!} </p>

<div class="pull-right">
	<form action="{{ URL::to('/favourite/post', $post->id) }}" method="post">
	  {{csrf_field()}}
	 <button type="submit" style="background: #EF233C"><i class="fa fa-heart"></i></button>
	</form>
</div>			


<div>
  <button class=" dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #EF233C">
    SHARE
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a href="#">FACEBOOK</a></li>
    <li><a href="#">TWITTER</a></li>
    <li><a href="#">GOOGLE+</a></li>
  </ul>
</div>



					</div>
						</article>
						<!-- /ARTICLE POST -->
						
						<!-- widget tags -->
						<div class="widget-tags">
							<ul>
						<li><a href=""  style="color: black;">TAGS</a></li>
							 @foreach ($post->PostRelateToTag as $tag)
								<li>
                                  <a href="{{ route('tag',$tag->slug) }}">    
                                    {{ $tag->tag_name }}
                                  </a>
								</li>
							 @endforeach
							</ul>
						</div>
						<!-- /widget tags -->

	

						<!-- article comments -->
						<div class="article-comments">
							<div class="section-title">
								<h2 class="title">Comments</h2>
							</div>
								
							
						</div>
						<!-- /article comments -->
                       

                           <div class="footer-widget subscribe-widget">
                               <a href="{{ route('contact.create') }}"><button class="input-btn" type="submit">HIRE ME FOR YOUR PROJECT</button></a>
                            </div>



@endsection


@section('prismfooter')
<script type="text/javascript" src="{{asset('frontend/js/prism.js')}}"></script>
@endsection
