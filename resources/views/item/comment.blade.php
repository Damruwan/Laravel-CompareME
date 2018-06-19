<div class="row justify-content-center" style="margin-top: 30px">
	<h5 style="width: 100%">Comments</h5>
	@forelse($item->comments as $comment)
	<div class="col-sm" style="background-color: #f0f0f0; padding: 10px 0px 0px 10px; margin-bottom: 10px" >
		<h5 class="card-subtitle mb-2 text-muted">{{$comment->user->name}}</h5>
		<p>{{$comment->comment}}
		</p>	
	</div>
	<div class="w-100"></div>
	
	@empty
	No Comments
	@endforelse
</div>
@auth
<div class="row justify-content-center" style="margin-top: 10px">
	<div class="col-sm" style="background-color: #f0f0f0; padding: 10px 10px 0px 10px; margin-bottom: 10px" >
		<form action="{{route('comment', $item->id)}}" method="post" accept-charset="utf-8">
				@csrf
    		<div class="form-group">
    			<textarea name="comment" class="form-control {{ $errors->has('comment') ? ' is-invalid' : '' }}" cols="3" placeholder="Comment Here"></textarea>
			    @if ($errors->has('comment'))
                <span class="invalid-feedback">
                <strong>{{ $errors->first('comment') }}</strong>
                </span>
                @endif
    		</div>
    		<div class="form-group">
    			<button type="submit" class="btn btn-sm btn-primary">Save</button>
    		</div>
		</form>
	</div>
</div>
@endauth