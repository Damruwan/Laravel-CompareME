@extends('layouts.main')
@section('title')
   register page
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

    <h2 class = "page-header">Register</h2>
    <form class="form-horizontal" method="post" action=" {{ route('signup') }} ">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Choose Type of User</label>
        <div class="col-sm-6">
          <input type="radio" name="type" value="NS"> Normal Seller<br>
          <input type="radio" name="type" value="SS"> Store Seller
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="first name" name="f_name">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Last Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="last name" name="l_name">
        </div>
      </div>
      <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Email" name ="email">
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
          <button type="submit" class="btn btn-default">Sign up</button>
        </div>
      </div>
   </form>
</div>


@endsection
