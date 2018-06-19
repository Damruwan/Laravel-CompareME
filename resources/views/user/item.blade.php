@extends('layouts.user')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
                  <h5 class="card-title">{{$item->brand}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$item->model}}</h6>
                  <h6 class="card-title">{{$item->body}}</h6>
                  <h6 class="card-title">{{$item->primary}}</h6>
                  <h6 class="card-title">{{$item->battery}}</h6>
      <a href="{{route('compare',$item->id)}}" class="btn btn-primary btn-sm" style="margin-top: 172px">Compare</a>

		</div>
		<div class="col-md-6">
			<img src="{{url($item->image_link)}}" class="img-thumbnail rounded" style="min-height: 250px; max-height: 250px;">
		</div>
	</div>
    <div class="row" style="margin-top: 30px">
    	@if($item->category->id == 1)
			@include('item._patial_details.phone_and_tablet')
    	@elseif($item->category->id == 2)
			@include('item._patial_details.laptop')
    	@else
			@include('item._patial_details.smart_watch')
    	@endif
    </div>
    	@include('item.comment')
    	@include('item.advertisement')
</div>
@endsection