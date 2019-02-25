@extends('frontend.layout.search')

@section('DataTableFooter')
 <script type="text/javascript" src="{{asset('admin/js/plugins/jquery.dataTables.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('admin/js/plugins/dataTables.bootstrap.min.js')}}"></script>
 <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection

@section('content')
    	 <div class="section-title">
            <h2 class="title"> {{Auth::user()->name }} YOUR FAVOURITE POST LIST</h2>
        </div>
						<!-- ARTICLE POST -->
						<article class="article article-post">

						<div class="article-body">
							<ul class="article-info">
								<li class="article-category"><a href="">HOME</a></li>
								<li class="article-category"><a href="">FAVOURITE</a></li>
								<li class="article-category"><a href="">POST</a></li>
								<li class="article-type"><i class="fa fa-file-text"></i></li>
							</ul>	
						</div>
							
          <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Created Time</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
              @foreach ($likeposts as $element)
               
            
               <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$element->title}}</td>
                    <td>{{$element->created_at->diffForHumans()}}</td>
                    <td><img src="/{{$element->image}}" width="50px;" height="50px;"></td>

                   <td><a href="{{ route('post',$element->slug) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                </tr>  
              @endforeach      
                </tbody>
              </table>

		</article>
						<!-- /ARTICLE POST -->
						
				
@endsection