@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="row align-items-start">
		<h3>Add {{$category->name}}</h3>
	</div>
	@if($category->id == 1)
		@include('item._patial_forms.phone_and_tablet')
	@elseif($category->id == 2)
		@include('item._patial_forms.laptop')
	@else
		@include('item._patial_forms.smart_watch')	
	@endif
</div>
@endsection