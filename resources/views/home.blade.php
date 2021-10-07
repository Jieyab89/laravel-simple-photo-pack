@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="alert alert-success" role="alert">
            Welcome <b>{{ Auth::user()->name }}</b> have nice day!
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>
              <div class="card">
                <div class="card-header">{{ Auth::user()->name }}</div>
                <li class="list-group-item"><a class="text-default btn-block" href=""> <i class="fa fa-lock"></i> &nbsp; <b>Upgrade VIP</b></a></li>
                <li class="list-group-item"><a class="text-default btn-block" href=""> <i class="fa fa-home"></i> &nbsp; <b>Dashboard</b></a></li>
                <li class="list-group-item"><a class="text-default btn-block" href="{{ route('post') }}"> <i class="fa fa-lock"></i> &nbsp; <b>Posting</b></a></li>
                <li class="list-group-item"><a class="text-default btn-block" href=""> <i class="fa fa-user"></i> &nbsp; <b>Pricing</b></a></li>
                <li class="list-group-item"><a class="text-default btn-block" href="{{ route('logout') }}"> <i class="fa fa-sign-out"></i> &nbsp; <b>Logout</b></a></li>
              </div>
        </div>
    </div>
</div>
@endsection
