	@include('frontend.layout.header')
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">

					
					
					@section('content')


					@show
						
					
			
					
					</div>
					<!-- /Main Column -->
					
					<!-- Aside Column -->
					@include('frontend.layout.sidebar')
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<!-- AD SECTION -->
		<div class="visible-lg visible-md">
			<img class="center-block" src="./img/ad-3.jpg" alt="">
		</div>
		<!-- /AD SECTION -->
	
		
	
		<!-- /SECTION -->
	@include('frontend.layout.footer')