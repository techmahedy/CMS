@extends('frontend.layout.master2')
@section('login')
<link href="{{asset('frontend/login/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'></head>
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
@endsection

@section('content')

  
        <!---main--->
            <div class="main">
                <div class="main-section">
                    <div class="login-section"> 
                        <div class="login-top">
                        <p style="font-size: 25px; font-family: impact;">Login with socialite</p>
                            <ul>
                                <li><a class="face" href="{{ url('/login/facebook') }}"><span class="face"> </span>Login with Facebook</a></li>
                                <li><a class="twit" href="#"><span class="twit"> </span>Login with Twitter</a></li>
                            </ul>
                        </div>


    <div class="login-middle">
        <p style="font-size: 25px; font-family: impact;">Log in with your email and password</p>
         @include('admin.errors.error')
        <form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password">
       
    </div>
    <div class="login-bottom">
        <div class="login-left">
            <a class="btn btn-link" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
             <a class="btn btn-link" href="{{ route('register') }}">
               <strong>Don't yet register ?</strong>  Sign Up Now
            </a>
        </div>
        <div class="login-right">
          
            <input type="submit" value="Login">
            </form>
        </div>
    </div>


                    </div>
                </div>
            </div>

@endsection
