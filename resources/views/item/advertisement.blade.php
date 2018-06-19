<div class="row justify-content-center" style="margin-top: 30px">
    <h5 style="width: 100%">Advertisements</h5>
    @forelse($item->advertisements as $advertisement)
        @if($advertisement->status == 1)
        <div class="col-sm-3" style="background-color: #f0f0f0; padding: 10px 0px 0px 10px; margin-bottom: 10px;" >  
            <img src="{{url($advertisement->image)}}" class="img-thumbnail rounded">
        </div>
        <div class="col-sm-9" style="background-color: #f0f0f0; padding: 10px 0px 0px 10px; margin-bottom: 10px" >
            <h5 class="card-subtitle mb-2 text-muted">{{$advertisement->condition.' '.$item->brand.' '.$item->model}} <small>{{$advertisement->location}}</small></h5>
            <span>{{$advertisement->user->name.' : '.$advertisement->tel_no}}</span>
            <div class="w-100"></div>
            <span>{{$advertisement->price}} LKR</span>
            <p>{{$advertisement->description}}
            </p>    
        </div>
        <div class="w-100"></div>
        @endif
    @empty
    No Advertisements
    @endforelse
</div>
@auth
<div class="row justify-content-center" style="margin-top: 10px">
	<div class="col-sm" style="background-color: #f0f0f0; padding: 10px 10px 0px 10px; margin-bottom: 10px" >
		<form action="{{route('advertisement', $item->id)}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				@csrf
            <div class="form-row">
                <div class="form-group col-sm">
                    <b>Advertise your {{$item->brand.' '.$item->model}} here.</b>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm">
                    <input type="file" name="image" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}">
                    @if ($errors->has('image'))
                    <span class="invalid-feedback">
                    <strong>{{ $errors->first('image') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group col-sm">
                    <input type="number" name="price" placeholder="Price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}">
                    @if ($errors->has('price'))
                    <span class="invalid-feedback">
                    <strong>{{ $errors->first('price') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group col-sm">
                    <input type="text" name="location" placeholder="location" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}">
                    @if ($errors->has('location'))
                    <span class="invalid-feedback">
                    <strong>{{ $errors->first('location') }}</strong>
                    </span>
                    @endif
                </div>                
            </div>
            <div class="form-row">
                <div class="form-group col-sm">
                    <input type="text" name="tel_no" placeholder="Telephone number" class="form-control{{ $errors->has('tel_no') ? ' is-invalid' : '' }}">
                    @if ($errors->has('tel_no'))
                    <span class="invalid-feedback">
                    <strong>{{ $errors->first('tel_no') }}</strong>
                    </span>
                    @endif
                </div> 
                <div class="form-group col-sm">
                    <select class="form-control" name="condition">
                        <option value="BrandNew">BrandNew</option>
                        <option value="Used">Used</option>
                    </select>
                </div>                 
                <div class="form-group col-sm" >
                    <textarea name="description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" cols="3" placeholder="Description"></textarea>
                    @if ($errors->has('description'))
                    <span class="invalid-feedback">
                    <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>                
            </div>
    		<div class="form-row">
    			<button type="submit" class="btn btn-sm btn-primary">Save</button>
    		</div>
		</form>
	</div>
</div>
@endauth