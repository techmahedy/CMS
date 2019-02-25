@extends('frontend.layout.master2')
@section('jQuery-UI')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
@endsection
@section('jQuery-UI-footer')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 

  <script>
    $( function() {
       $( "#accordion" ).accordion();
     } );
  </script>

@endsection


@section('content')

  <div class="article-reply-form">
	<div class="section-title">
		<h2 class="title">LARAVEL TODO LIST PROJECT</h2>
	</div>
		
	<div id="accordion">
  @foreach($all as $item)
  <h3><a href="{{ route('youtube',$item->slug) }}">{{$item->title}}</a></h3>
  <div>
    <p>
   {!! $item->body !!}
    </p>
  </div>
  @endforeach
</div>
  </div>

@endsection