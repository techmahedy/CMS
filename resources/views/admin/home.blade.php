@extends('admin.layout.app')

@section('DataTableFooter')
 <script type="text/javascript" src="{{asset('admin/js/plugins/jquery.dataTables.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('admin/js/plugins/dataTables.bootstrap.min.js')}}"></script>
 <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection

@section('main-content')
  

         <div class="app-title">
        <div>
          <h1 style="font-family: impact;"><i class="fa fa-th-list"></i> All Subscriber List</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">subscriber</li>
          <li class="breadcrumb-item active"><a href="#">subscriber data table</a></li>
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
                    <th>Email</th>
                    <th>Joined</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($subscriber as $item)     
                  <tr>
                    <td>{{ $loop->index + 1}}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->created_at->diffForHumans() }}</td>
                  <td>

                    <a href="" onclick="if(confirm('Are you sure to delete this?'))event.preventDefault(); document.getElementById('delete-{{$item->id}}').submit();"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                  <form id="delete-{{$item->id}}" method="post" action="{{ route('subscribe.destroy',$item->id) }}" style="display: none;">
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
     

     <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Subscribers</h4>
              <p><b>{{$SubscriberCounter}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>User</h4>
              <p><b>{{$CounterUser}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Posts</h4>
              <p><b>{{$CounterPost}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Stars</h4>
              <p><b>{{$star}}</b></p>
            </div>
          </div>
        </div>
      </div>
@endsection