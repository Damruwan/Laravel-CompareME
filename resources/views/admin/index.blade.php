@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="row align-items-start">
		@foreach($categories as $category)
		<div class="col-sm">
			<a href="{{route('item-add',$category->id)}}" class="btn btn-primary">{{$category->name}}</a>	
		</div>
		@endforeach
	</div>
	<div class="row">
		<table class="table table-bordered table-sm" style="margin-top: 50px">	
			<thead>
				<tr>
					<th>Brand</th>
					<th>Model</th>
					<th	></th>
				</tr>
			</thead>
			<tbody>
				@forelse($items as $item)
				<tr>
					<td>{{$item->brand}}</td>
					<td>{{$item->model}}</td>
					<td>
						<a href="{{route('items-edit',[$item->category->id, $item->id])}}" title="">edit</a>
						<a href="{{route('items-delete',[$item->id])}}" title="">delete</a>
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="3" class="text-center">No Items available.</td>
				</tr>
			@endforelse
			</tbody>
		</table>
		{{ $items->links()}}
	</div>	
</div>
@endsection