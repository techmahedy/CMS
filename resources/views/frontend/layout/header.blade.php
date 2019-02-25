<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">

	
		<title>
			
			@php if(isset($post->slug)){ @endphp

     {{$post->title}}

    @php } else { @endphp 
      {{'LARAMUST'}}
     @php  } @endphp 

		</title>

	<meta name=author content="mahedi hasan"/>
    <meta property="og:type" content= "website" />
    
    <meta property="og:url" content="@php if(isset($post->slug)){ @endphp

     {{route('post',$post->slug)}}

    @php } else { @endphp 
      {{'LARAMUST'}}
     @php  } @endphp"/>
     
     
    <meta property="og:site_name" content="laramust" />
    <meta property="og:description" content="@php if(isset($post->slug)){ @endphp

     {{$post->body}}

    @php } else { @endphp 
      {{'LARAMUST'}}
     @php  } @endphp" />
     
    <meta name=keywords content="@php if(isset($post->slug)){ @endphp
    
     @foreach ($post->PostRelateToTag as $tags)
      
        {{ $tags->tag_name }} 
      
     @endforeach
     
    @php } else { @endphp 
      {{'LARAMUST'}}
     @php  } @endphp"/>
    
    
    <meta name="description" content="@php if(isset($post->slug)){ @endphp

     {{$post->meta}}

    @php } else { @endphp 
      {{'LARAMUST'}}
     @php  } @endphp">
     
    <meta property="og:image" itemprop="image primaryImageOfPage" content="@php if(isset($post->slug)){ @endphp

     {{$post->image}}

    @php } else { @endphp 
      {{'LARAMUST'}}
     @php  } @endphp" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
      <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend/img/logo.jpeg')}}">


		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.css')}}" />
		
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/style.css')}}"/>

         @section('login')
         @show
         @section('jQuery-UI')
         @show
         @section('prismheader')
         @show

    </head>
	<body>

		<!-- Page Plugin -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=626577884403522&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<!-- Header -->
		<header id="header">
			<!-- Top Header -->
			<div id="top-header">
				<div class="container">
					<div class="header-links">
					
								
   <ul class="nav navbar-nav navbar-right">
        <li><a href="www.dev.techmahedy.com" target="_blank">ABOUT</a></li>
		<li><a href="{{ route('contact.create') }}">CONTACT</a></li>
		            
    @guest
        <li><a href="{{ route('login') }}"><i class="fa fa-user" style="padding: 5px; font-size: 15px;"></i>SIGN IN</a></li>
        <li><a href="{{ route('register') }}">REGISTER</a></li>
    @else

		
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
            	<li><a href="{{ URL::to('/favourite/postlist',Auth::user()->id) }}">FAVOURITE</a></li>
            	<li><a href="{{ route('contribute.create') }}">CONTRIBUTE</a></li>
            	<li><a href="{{ route('contribute.index') }}">CONTRIBUTED</a></li>
               
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        SIGN OUT
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
         @endguest
   </ul>





					
					</div>
					<div class="header-social">
						<ul>
							<li><a href="https://www.facebook.com/aamrablogger" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/metacentric_sr" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://plus.google.com/u/0/112168511279465682583" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="https://github.com/techmahedy" target="_blank"><i class="fa fa-github"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCzmJ_0Ef9EE-NS7w82zez_A?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Top Header -->
			
			<!-- Center Header -->
			<div id="center-header">
				<div class="container">
					<div class="header-logo">
						<a href="{{URL::to('/')}}" class="logo" style="color:#000; font-size: 35px; font-family: impact;">LARAMUST.COM</a>
						<p style="color:#000; font-size: 15px; font-family: impact;">Good programmers write code that humans can understand</p>
					</div>
					<div class="header-ads">
						<img class="center-block" src="{{asset('frontend/img/ad-2.jpg')}}" alt=""> 
					</div>
				</div>
			</div>
			<!-- /Center Header -->
	
			<!-- Nav Header -->
			<div id="nav-header">
				<div class="container">
					<nav id="main-nav">
						<ul class="main-nav nav navbar-nav"> 

						<li class="active"><a href="{{URL::to('/')}}"><i class="fa fa-home" style="font-size: 18px;"></i></a></li>  

                          @foreach ($categories as $element)
							<li><a href="{{ route('category',$element->slug) }}">{{$element->category_name}}</a></li>
						   @endforeach	

						  <li><a href="{{ route('youtube-video.index') }}">TUTORIAL</a></li> 

						</ul>
					</nav>
					<div class="button-nav">
						<button class="search-collapse-btn"><i class="fa fa-search"></i></button>
						<button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
						<div class="search-form">
							<form {{ URL::to('/search') }}>
								<input class="input" type="text" name="q" placeholder="Search">
								<input type="submit" name="">
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Nav Header -->
		</header>
		<!-- /Header -->
