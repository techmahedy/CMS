@extends('frontend.layout.search')


@section('content')
    	 <div class="section-title">
            <h2 class="title">All TAG POST</h2>
        </div>
						<!-- ARTICLE POST -->
						<article class="article article-post">

							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="">HOME</a></li>
									<li class="article-category"><a href="">TAG</a></li>
									<li class="article-category"><a href="">POST</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								
							</div>
							  @foreach ($posts as $element)
                                <!-- ARTICLE -->
                                <article class="article">
                                    <h3 class="article-title"><a href="{{ route('post',$element->slug) }}">{{$element->title}}</a></h3>
                                    <div class="article-img">
                                        <a href="{{ route('post',$element->slug) }}">
                                            <img src="/{{$element->image}}" alt="">
                                        </a>
                                        <ul class="article-info">
                                            <li class="article-type"><i class="fa fa-camera"></i></li>
                                        </ul>
                                    </div>

                                <div class="article-body"> 
                                  <ul class="article-meta">
                                            <li style="color: black"><i class="fa fa-clock-o"></i>
                                                 {{ date('F j , Y' , strtotime($element->created_at)) }} 

                                            </li>
                                    <li style="color: black"><i class="fa fa-user"></i> 
                                        {{$element->posted}}
                                     </li>
                                </ul>
                        <p> {!! str_limit(strip_tags($element->body), $limit = 600, $end = '...') !!}
                            <a href="{{ route('post',$element->slug) }}" style="font-family: impact;">Read more</a>
                                    </div>
                                </article>
                             @endforeach    
                       {!! $posts->links() !!}
						</article>
						<!-- /ARTICLE POST -->
						
				
@endsection