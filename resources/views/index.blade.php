@extends('frontend.layout.master')

@section('syntexhighliter')
<link href="{{asset('templateEditor/ckeditor/plugins/codesnippet/lib/highlight/styles/monokai_sublime.css')}}" rel="stylesheet">
<script src="{{asset('templateEditor/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js')}}"></script>
 @endsection


@section('content')
 
<script>
  hljs.initHighlightingOnLoad();
</script>

    	   @if (session('status'))
             <div class="alert alert-success">
                {{ session('status') }}
             </div>
           @endif   

	<div class="col-md-12 col-sm-12">
		<!-- section title -->
		<div class="section-title">
			<h2 class="title">LATEST POST</h2>
		</div>
		<!-- /section title -->

@foreach ($posts as $element)	
	<div class="col-md-6 col-sm-6">
		<!-- ARTICLE -->
		<article class="article">
			<div class="article-img">
				<a href="{{ route('post',$element->slug) }}">
					<img src="/{{$element->image}}" alt="">
				</a>
				<ul class="article-info">
					<li class="article-type"><i class="fa fa-camera"></i></li>
				</ul>
			</div>
			<div class="article-body">
				<h3 class="article-title"><a href="{{ route('post',$element->slug) }}">{{$element->title}}</a></h3>
				<ul class="article-meta">

					<li style="color: black"><i class="fa fa-clock-o"></i> 
                       {{ date('F j , Y' , strtotime($element->created_at)) }} 
                    </li>

					<li style="color: black"><i class="fa fa-user"></i> 
                        {{$element->posted}}
                    </li>
				</ul>

				<p>
					{!! str_limit(strip_tags($element->body), $limit = 200, $end = '...') !!}
          <a href="{{ route('post',$element->slug) }}" style="font-family: impact;">Read more</a>
                </p>
			</div>
		</article>
		<!-- /ARTICLE -->		
    </div>		
     @endforeach    
 {!! $posts->links() !!}
	
</div>

@endsection