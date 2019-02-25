	<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">RECOMMENDED POST</h2>
						</div>
						<!-- /section title -->
						
						<!-- row -->
						<div class="row">
							<!-- Column 1 -->
					@foreach($random as $item)
							<div class="col-md-3 col-sm-6">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="{{ route('post',$item->slug) }}">
											<img src="/{{$item->image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
									<h4 class="article-title"><a href="{{ route('post',$item->slug) }}">{{$item->title}}</a></h4>
										<ul class="article-meta">
									<li style="color: black"><i class="fa fa-clock-o"></i>
                                         {{ date('F j , Y' , strtotime($post->created_at)) }} 
                                     </li>
											
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
						@endforeach
							
							
							
							
						
						</div>
						<!-- /row -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>