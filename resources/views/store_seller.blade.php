@extends('layouts.main')

@section('body')

   <h2> Welcome logged in store seller </h2>

   <ul>

     <li>FIRST NAME : {{ Auth::user()->first_name }}</li>
     <li>LAST NAME : {{ Auth::user()->last_name }}</li>
     <li>EMAIL : {{ Auth::user()->email }}</li>
     <li><a href="{{ route('signout') }}">logout</a></li>

   </ul>


@endsection
