<style type="text/css">
	
video {
  width: 100%;
  height: auto;
}

</style>

<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">MY YOUTUBE VIDEO YOU MAY LIKE </h2>
							<div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
						</div>
						<!-- /section title -->
						
						<!-- owl carousel 2 -->
						<div id="owl-carousel-2" class="owl-carousel owl-theme">
						@foreach ($youtube as $element)
							<article class="article thumb-article">
								<div class="article-img" class="responsive">
								 {!! $element->body !!}
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="{{ route('youtube',$element->slug) }}">Show Video</a></li>
                                        <li class="article-type"><i class="fa fa-video-camera"></i></li>
									</ul>
									 <h3 class="article-title"><a href="{{ route('youtube',$element->slug) }}">{{$element->title}}</a></h3>
                                    <ul class="article-meta">
                                        <li><i class="fa fa-clock-o"></i>
                                {{ date('F j , Y' , strtotime($element->created_at)) }} 
                                        </li> 
                                    </ul>									
								</div>
							</article>
						  @endforeach
                           
						
							
						
					
						</div>
						<!-- /owl carousel 2 -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>