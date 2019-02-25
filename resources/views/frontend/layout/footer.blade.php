	
		<!-- FOOTER -->
		<footer id="footer">
			<!-- Top Footer -->
			<div id="top-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- Column 1 -->
						<div class="col-md-4">
							<!-- footer about -->
							<div class="footer-widget about-widget">
								<div class="footer-logo">
									  <a href="{{URL::to('/')}}" style="font-family: impact; font-size: 40px;">LARAMUST.COM</a>
                                    <p>Any fool can write code that a computer can understand. Good programmers write code that humans can understand.” – Martin Fowler</p>
								</div>
							</div>
							<!-- /footer about -->
							
							<!-- footer social -->
							<div class="footer-widget social-widget">
								<div class="widget-title">
									<h3 class="title">Follow Us</h3>
								</div>
								<ul>
   <li><a href="https://www.facebook.com/aamrablogger" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
    <li><a href="https://twitter.com/metacentric_sr" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
    <li><a href="https://plus.google.com/u/0/112168511279465682583" class="google" target="_blank"><i class="fa fa-google"></i></a></li>
    <li><a href="https://github.com/techmahedy" class="instagram" target="_blank"><i class="fa fa-github"></i></a></li>
    <li><a href="https://www.youtube.com/channel/UCzmJ_0Ef9EE-NS7w82zez_A?view_as=subscriber" class="youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>
    <li><a href="https://www.pinterest.com/mahedyjr/" class="rss" target="_blank"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
							<!-- /footer social -->
							
							<!-- footer subscribe -->
						  <div class="footer-widget subscribe-widget">
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
							<!-- /footer subscribe -->
						</div>
						<!-- /Column 1 -->
						
						<!-- Column 2 -->
						<div class="col-md-4">
							<!-- footer article -->
							<div class="footer-widget">
								<div class="widget-title">
									<h2 class="title">POPULAR POST</h2>
								</div>

								<!-- ARTICLE -->
							
							   @foreach($footerPost as $item)
                                
                                 <article class="article widget-article">
                                    <div class="article-img">
                                        <a href="{{ route('post',$item->slug) }}">
                                            <img src="/{{$item->image}}" alt="">
                                        </a>
                                    </div>
                                    <div class="article-body">
                                        <h4 class="article-title"><a href="{{ route('post',$item->slug) }}">{{$item->title}}</a></h4>
                                        <ul class="article-meta">
                                            <li><i class="fa fa-clock-o"></i>   {{ date('F j , Y' , strtotime($item->created_at)) }} </li>
                                            <li><i class="fa fa-signal"></i> {{$item->view_count}}</li>
                                        </ul>
                                    </div>
                                </article>

                                @endforeach
                          
								<!-- /ARTICLE -->

							</div>
							<!-- /footer article -->
						</div>
						<!-- /Column 2 -->
						
						<!-- Column 3 -->
						<div class="col-md-4">
							<!-- footer galery -->
							<div class="footer-widget galery-widget">
								<div class="widget-title">
									<h2 class="title">Flickr Photos</h2>
								</div>
								<ul>
								 @foreach($posts as $item)
                                    <li><a href="{{ route('post',$item->slug) }}">
                                            <img src="/{{$item->image}}" alt="">
                                        </a></li>
                                  @endforeach
								</ul>
							</div>
							<!-- /footer galery -->
							
							<!-- footer tweets -->
							<div class="footer-widget tweets-widget">
								<div class="widget-title">
                                    <h2 class="title">ABOUT DEVELOPER</h2>
                                </div>
                                    <ul>
                                    <li class="tweet">
                                       <img src="{{asset('frontend/img/me.jpg')}}" width="50px;" height="50px;" class="img-circle">
                                        <div class="tweet-body">
                                            <ul style="color:#FFF; font-weight:bold; margin-top: 10px;">
                                            <li>PORTFOLIO : <a href="www.dev.techmahedy.com">dev.techmahedy.com</a></li>
                                    
                           <div class="footer-widget subscribe-widget">
                                <div class="widget-title">
                                    <h2 class="title">HIRE ME FOR YOUR PROJECT</h2> 
                                 </div>
                               <a href="{{ route('contact.create') }}"><button class="input-btn" type="submit">GET IN TOUCH</button></a>
                            </div>

    
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
							</div>
							<!-- /footer tweets -->
						</div>
						<!-- /Column 3 -->
					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Top Footer -->
			
			<!-- Bottom Footer -->
			<div id="bottom-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- footer links -->
						<div class="col-md-6 col-md-push-6">
							<ul class="footer-links">
								<li><a href="www.dev.techmahedy.com">About us</a></li>
								<li><a href="{{ route('contact.create') }}">Contact</a></li>
								<li><a href="">FAQ</a></li>
							</ul>
						</div>
						<!-- /footer links -->
						
						<!-- footer copyright -->
						<div class="col-md-6 col-md-pull-6">
							<div class="footer-copyright">
								<span>
COPYRIGHT &copy; ALL RIGHTS RESERVED BY <a href="www.laramust.com">LARAMUST.COM</a> &copy;<script>document.write(new Date().getFullYear());</script>
</span>
							</div>
						</div>
						<!-- /footer copyright -->
					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Bottom Footer -->
		</footer>
		<!-- /FOOTER -->
		
		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->
		
		<!-- jQuery Plugins -->
		<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
		<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('frontend/js/main.js')}}"></script>
         @section('selectBoxFooter')
         @show
         @section('ckEditor')
         @show
         @section('DataTableFooter')
         @show
         @section('jQuery-UI-footer') 
         @show
      
         @section('prismfooter')
         @show
	</body>
</html>
