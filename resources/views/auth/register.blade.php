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
                        <h2>WELCOME TO LARAMUST.NET</h2>
                    
                        <div class="login-middle">
                             @include('admin.errors.error')
<form  method="POST" action="{{ route('register') }}">
     {{ csrf_field() }}
    <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>

    <input type="email" placeholder="email" name="email" value="{{ old('email') }}" required autofocus>

    <input type="password" placeholder="Password" name="password">

    <input type="password" placeholder="Password" name="password_confirmation">


                        </div>
                        <div class="login-bottom">
                            <div class="login-left">
                             <strong>Already a member ? </strong> <a href="{{ route('login') }}">Sign In Now!</a>
                            </div>
                            <div class="login-right">
                                <form>
                                <input type="submit" value="Register">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

