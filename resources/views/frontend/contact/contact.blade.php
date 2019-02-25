@extends('frontend.layout.master2')


@section('content')

  <div class="article-reply-form">
	<div class="section-title">
		<h2 class="title">SEND YOUR TEXT </h2>
		 @include('admin.errors.error')
          @include('admin.errors.success')
	</div>
		
	<form action="{{ route('contact.store') }}" method="post">
		{{csrf_field()}}
		<input class="input" placeholder="Name" type="text" name="name">
		<input class="input" placeholder="Email" type="email" name="email">
		<input class="input" placeholder="Website" type="url" name="website">
		<textarea class="input" placeholder="Message" name="text"></textarea>
		<button class="input-btn" type="submit">Send Message</button>
	</form>
  </div>

@endsection