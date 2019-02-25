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
                      


    <div class="login-middle">
        <p style="font-size: 25px; font-family: impact;">Enter your email here to get your password reset link</p>
         @include('admin.errors.error')
          @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
         @endif
        <form  method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
         <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
           
       
    </div>
    <div class="login-bottom">
        <div class="login-right">
          
            <input type="submit" value="Send Password Reset Link">
       </form>
        </div>
    </div>


                    </div>
                </div>
            </div>


@endsection
