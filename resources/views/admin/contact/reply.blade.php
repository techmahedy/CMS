@extends('admin.layout.app')

@section('DataTableFooter')
 <script type="text/javascript" src="{{asset('admin/js/plugins/jquery.dataTables.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('admin/js/plugins/dataTables.bootstrap.min.js')}}"></script>
 <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection

@section('main-content')
  
 <div class="app-title">
        <div>
          <h1 style="font-family: impact;"><i class="fa fa-envelope-o"></i> User Mail Reply</h1>
          <p>A Mailbox page sample</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Mailbox</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="tile p-0">
            <h4 class="tile-title folder-head">Folders</h4>
            <div class="tile-body">
              <ul class="nav nav-pills flex-column mail-nav">
                <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-inbox fa-fw"></i> Inbox<span class="badge badge-pill badge-primary float-right"></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-envelope-o fa-fw"></i> Sent</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-file-text-o fa-fw"></i> Drafts</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-filter fa-fw"></i> Junk <span class="badge badge-pill badge-primary float-right"></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-trash-o fa-fw"></i> Trash</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tile">
           
            <div class="table-responsive mailbox-messages">
              <table class="table table-hover">
                <tbody>

           
     
          <div class="tile">
            <h3 class="tile-title">REPLY VIA EMAIL</h3>
              @include('admin.errors.error')
              @include('admin.errors.success')
            <div class="tile-body">
              <form class="form-horizontal" method="post" action="{{ route('email.store') }}">
                {{csrf_field()}}
                <div class="form-group row">
                  <label class="control-label col-md-3">From</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="Enter full name" value="info@techmahedy.com" name="from">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">To</label>
                  <div class="col-md-8">
                    <input class="form-control " type="email" placeholder="Enter email address" value="{{$contact->email}}" readonly="" name="to">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Subject</label>
                  <div class="col-md-8">
                    <input class="form-control " type="text" placeholder="Enter email address" name="subject">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Message</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" placeholder="Enter your  address" name="text">
                    </textarea>
                  </div>
                </div>
            
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button type="submit" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Send Email</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="{{ route('email.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </div>
            </div>
          
              </form>
            </div>
          </div>
           
                </tbody>
              </table>
            </div>
         
          </div>
        </div>
      </div>
       
@endsection