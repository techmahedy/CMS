@extends('admin.layout.app')

@section('DataTableFooter')
 <script type="text/javascript" src="{{asset('admin/js/plugins/jquery.dataTables.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('admin/js/plugins/dataTables.bootstrap.min.js')}}"></script>
 <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection

@section('main-content')
  

         <div class="app-title">
        <div>
          <h1 style="font-family: impact;"><i class="fa fa-th-list"></i> All Category List</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Category</li>
          <li class="breadcrumb-item active"><a href="#">Category Table</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Category Title</th>
                    <th>Created</th>
                    <th>Publish</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $item)     
                  <tr>
                    <td>{{ $loop->index + 1}}</td>
                    <td>{{ $item->category_name }}</td>
                    <td>{{ $item->created_at->diffForHumans() }}</td>
                    <td>
                        @if($item->status == 1)
                          <i class="fa fa-check-square" aria-hidden="true"></i>
                        @else
                          <i class="fa fa-times" aria-hidden="true"></i>
                        @endif    
                    </td>
                    <td><a href="{{ route('category.edit',$item->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> | <a href="" onclick="if(confirm('Are you sure to delete this?'))event.preventDefault(); document.getElementById('delete-{{$item->id}}').submit();"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                  <form id="delete-{{$item->id}}" method="post" action="{{route('category.destroy',$item->id)}}" style="display: none;">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                  </form>
              
                </td>
                  </tr> 
                   @endforeach       
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

@endsection