@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="row">
		<table class="table table-bordered table-sm" style="margin-top: 50px">	
			<thead>
				<tr>
					<th>Item</th>
					<th>User</th>
					<th>Status</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@forelse($advertisements as $advertisement)
				<tr>
					<td style="width: 30%">
						{{$advertisement->condition}}
						{{$advertisement->item->brand.' '.$advertisement->item->model}}
						for {{$advertisement->price}}
						<br>
						{{$advertisement->description}}
					</td>
					<td style="width: 30%">
						{{$advertisement->user->name}}
						{{$advertisement->tel_no}}<br>
						{{$advertisement->location}}
					</td>
					<td style="width: 20%">
						@if($advertisement->status == 1)
							Approved
						@else
							Not approved
						@endif
					</td>
					<td style="width: 20%">
						<a href="{{route('approve-ads',[$advertisement->id, 1])}}" class="btn btn-small btn-info">Approve</a>
						<a href="{{route('approve-ads',[$advertisement->id, 0])}}" class="btn btn-small btn-danger">Reject</a>
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="3" class="text-center">No Advertisements available.</td>
				</tr>
			@endforelse
			</tbody>
		</table>
		{{ $advertisements->links()}}
	</div>	
</div>
@endsection