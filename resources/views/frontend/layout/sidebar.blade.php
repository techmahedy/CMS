<div class="col-md-4">
						<!-- Ad widget -->

					<div class="widget-title">
								<h2 class="title" style="font-family: impact; margin-left: 50px;">LET'S SOCIALITE</h2>
					</div>

						<div class="widget center-block hidden-xs">
							<div class="fb-page" data-href="https://www.facebook.com/aamrablogger/" data-width="300" data-height="580" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/aamrablogger/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/aamrablogger/">Aamrablogger</a></blockquote></div>
						</div>
						<!-- /Ad widget -->

				<!-- Ad widget -->
						<div class="widget center-block hidden-xs">
							<img class="center-block" src="{{asset('frontend/img/ad-1.jpg')}}" alt=""> 
						</div>
						<!-- /Ad widget -->

						<!-- social widget -->
						<div class="widget social-widget">
							<div class="widget-title">
								<h2 class="title" style="font-family: impact; color: black; font-size: 20px;">FOLLOW US ON SOCIALITE</h2>
							</div>
							<ul>
<li><a href="https://www.facebook.com/aamrablogger" target="_blank" class="facebook"><i class="fa fa-facebook"></i><br><span>Facebook</span></a></li>
<li><a href="https://twitter.com/metacentric_sr" target="_blank" class="twitter"><i class="fa fa-twitter"></i><br><span>Twitter</span></a></li>
<li><a href="https://plus.google.com/u/0/112168511279465682583" target="_blank" class="google"><i class="fa fa-google"></i><br><span>Google+</span></a></li>
<li><a href="https://github.com/techmahedy" target="_blank" class="instagram"><i class="fa fa-github"></i><br><span>Instagram</span></a></li>
<li><a href="https://www.youtube.com/channel/UCzmJ_0Ef9EE-NS7w82zez_A?view_as=subscriber" target="_blank" class="youtube"><i class="fa fa-youtube"></i><br><span>Youtube</span></a></li>
<li><a href="https://www.pinterest.com/mahedyjr/" target="_blank" class="rss"><i class="fa fa-pinterest"></i><br><span>Pinterest</span></a></li>
							</ul>
						</div>
						<!-- /social widget -->
						
						<!-- subscribe widget -->
		<div class="widget subscribe-widget">
			<div class="widget-title">
                <h2 class="title">Subscribe to Newslatter</h2> 
                 @include('admin.errors.success')
             </div>
            <form action="{{ route('subscribe.store') }}" method="post">
                {{csrf_field()}}
                <input class="input" type="email" placeholder="Enter Your Email" name="email" required="">
                <button class="input-btn" type="submit">Subscribe</button>
            </form>
		</div>
						<!-- /subscribe widget -->
						
						<!-- article widget -->
						<div class="widget">
							<div class="widget-title">
								<h2 class="title" style="font-family: impact; color: black; font-size: 20px;">YOUTUBE VIDEO YOU MAY LIKE </h2>
							</div>
							
							<!-- owl carousel 3 -->
							<div id="owl-carousel-3" class="owl-carousel owl-theme center-owl-nav">
								<!-- ARTICLE -->
								@foreach($youtube as $item)
								<article class="article">
									<div class="article-img">
										<div class="article-img">
                                            {!! $item->body !!}
                                        </div>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="{{ route('youtube',$item->slug) }}">{{$item->title}}</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o" style="color:black;"></i>
                                        {{ date('F j , Y' , strtotime($item->created_at)) }}
											</li>
										</ul>
									</div>
								</article>
							 @endforeach
								<!-- /ARTICLE -->
								
							</div>
							<!-- /owl carousel 3 -->
							
						</div>
						<!-- /article widget -->
						
						<!-- article widget -->
						<div class="widget">
							<div class="widget-title">
								<h2 class="title" style="font-family: impact; color: black; font-size: 20px;">POPULAR POST </h2>
							</div>

					@foreach($popular as $item)
							<!-- ARTICLE -->
							<article class="article widget-article">
								<div class="article-img">
									<a href="{{ route('post',$item->slug) }}">
										<img src="/{{$item->image}}" alt="">
									</a>
								</div>
								<div class="article-body">
									<h4 class="article-title"><a href="{{ route('post',$item->slug) }}">{{$item->title}}</a></h4>
									<ul class="article-meta">
										<li style="color: black;"><i class="fa fa-clock-o"></i>
                                        {{ date('F j , Y' , strtotime($item->created_at)) }}
										</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
					@endforeach		
						</div>
					

						<!-- tweets widget -->
						<div class="widget tweets-widget">
							<div class="widget-title">
								<h2 class="title" style="font-family: impact; color: black; font-size: 20px;">Recent Tweets</h2>
							</div>
							<ul>
								<li class="tweet">
									<i class="fa fa-twitter"></i>
									<div class="tweet-body">
										<p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
									</div>
								</li>
							
							</ul>
						</div>
						<!-- /tweets widget -->
				
                     <div class="widget tweets-widget">
							<div class="widget-title">
								<h2 class="title" style="font-family: impact; color: black; font-size: 20px;">ARCHIVES</h2>
							</div>
							<ul>
								
							   @foreach ($archives as $month)
								 <li style="text-transform: uppercase;">
                                     <a href="/?month={{ $month['month'] }}&year={{$month['year']}}" class="post-headline">
                                               {{ $month['month'].' '.$month['year']}}
                                    </a>
                                  </li>
                                @endforeach

							</ul>
						</div>
						<!-- /tweets widget -->
				

					</div>