@extends('layouts.main')
@section('title')
   login page
@endsection

@section('body')

<div class="container">

 @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
 @endif

 @if( session()->has('message'))
   <div class="alert alert-success">
       {{ session()-> get('message') }}
   </div>
@endif

     <h2 class = "page-header">Login</h2>
    <form class="form-horizontal" method="post" action="{{ route('signin') }}">
       {{ csrf_field() }}
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-6">
          <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-6">
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
          <button type="submit" class="btn btn-default">Sign in</button>
        </div>
      </div>
 </form>
</div>

@endsection
