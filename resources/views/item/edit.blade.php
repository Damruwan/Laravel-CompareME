@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="row align-items-start">
		<h3>Edit {{$category->name}}</h3>
	</div>
	@if($category->id == 1)
		@include('item._patial_edit_forms.phone_and_tablet')
	@elseif($category->id == 2)
		@include('item._patial_edit_forms.laptop')
	@else
		@include('item._patial_edit_forms.smart_watch')	
	@endif
</div>
@endsection