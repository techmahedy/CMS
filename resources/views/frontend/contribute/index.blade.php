@extends('frontend.layout.master2')

@section('DataTableFooter')
 <script type="text/javascript" src="{{asset('admin/js/plugins/jquery.dataTables.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('admin/js/plugins/dataTables.bootstrap.min.js')}}"></script>
 <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection

@section('content')
    	 <div class="section-title">
            <h2 class="title"> {{Auth::user()->name }} YOUR CONTRIBUTED POST LIST</h2>
        </div>
						<!-- ARTICLE POST -->
						<article class="article article-post">

						<div class="article-body">
							<ul class="article-info">
								<li class="article-category"><a href="">HOME</a></li>
								<li class="article-category"><a href="">CONTRIBUTE</a></li>
								<li class="article-category"><a href="">POST</a></li>
								<li class="article-type"><i class="fa fa-file-text"></i></li>
							</ul>	
						</div>
							
          <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Added Time</th>
                    <th>Status</th>
                    <th><i class="fa fa-signal" aria-hidden="true"></i></th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
              @foreach ($posts as $element)
               
            
               <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$element->title}}</td>
                    <td>{{$element->created_at->diffForHumans()}}</td>
                    <td>
                       @if($element->status == 1)
                          <i class="fa fa-check-square" aria-hidden="true"></i>
                        @else
                          <i class="fa fa-times" aria-hidden="true"></i>
                        @endif   
                    </td>
                    <td>{{$element->view_count}}</td>

                   <td><a href="{{ route('contribute.edit',$element->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> | <a href="" onclick="if(confirm('Are you sure to delete this?'))event.preventDefault(); document.getElementById('delete-{{$element->id}}').submit();"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                  <form id="delete-{{$element->id}}" method="post" action="{{route('contribute.destroy',$element->id)}}" style="display: none;">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                  </form> </td>
                </tr>  
              @endforeach      
                </tbody>
              </table>

		</article>
						<!-- /ARTICLE POST -->
						
				
@endsection