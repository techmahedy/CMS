@extends('frontend.layout.master2')


@section('content')
    	<div class="section-title">
            <h2 class="title">SHOW YOUTUBE VIDEO</h2>
        </div>
						<!-- ARTICLE POST -->
						<article class="article article-post">

							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="">HOME</a></li>
									<li class="article-category"><a href="">POST</a></li>
									<li class="article-category"><a href="">YOUTUBE</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h1 class="article-title">{{$youtube->title}}</h1>
								<ul class="article-meta">

									 <li style="color: black"><i class="fa fa-clock-o"></i>
                                         {{ date('F j , Y' , strtotime($youtube->created_at)) }} 
                                     </li>		

								</ul>
								<p> {!! htmlspecialchars_decode($youtube->body) !!} </p>
							</div>
						</article>
						<!-- /ARTICLE POST -->
						
						<!-- article comments -->
						<div class="article-comments">
							<div class="section-title">
								<h2 class="title">Comments</h2>
							</div>
								
							
						</div>
						<!-- /article comments -->

@endsection