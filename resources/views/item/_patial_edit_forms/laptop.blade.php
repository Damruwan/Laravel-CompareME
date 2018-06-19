<form action="{{ route('item-update', $item->id)}}" method="post" enctype="multipart/form-data" >
	@csrf
	<!-- Brand & Model -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="brand"><b>Brand{{$item->model}}</b></label>
				<input type="text" class="form-control{{ $errors->has('brand') ? ' is-invalid' : '' }}" name="brand" id="brand" placeholder="Brand" value="{{ old('brand',$item->brand)}}" >
	        @if ($errors->has('brand'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('brand') }}</strong>
                </span>
            @endif
		</div>
		<div class="form-group col-sm">
			<label for="model"><b>Model</b></label>
				<input type="text" class="form-control{{ $errors->has('model') ? ' is-invalid' : '' }}" name="model" id="model" placeholder="Model" value="{{ old('model',$item->model)}}" >
	        @if ($errors->has('model'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('model') }}</strong>
                </span>
            @endif
		</div>
	</div>
	<!-- Body -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="dimensions"><b>Body</b></label>
				<input type="text" class="form-control" name="dimensions" id="dimensions" placeholder="Dimensions" value="{{ old('dimensions',$item->dimensions)}}" >
		</div>
		<div class="form-group col-sm">
			<label for="weight">&nbsp</label>
				<input type="text" class="form-control" name="weight" id="weight" placeholder="Weight" value="{{ old('weight',$item->weight)}}" >
		</div>
	</div>
	<!-- Display -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="type"><b>Display</b></label>
				<input type="text" class="form-control" name="type" id="type" placeholder="Type" value="{{ old('type',$item->type)}}" >
		</div>
		<div class="form-group col-sm">
			<label for="size">&nbsp</label>
				<input type="text" class="form-control" name="size" id="size" placeholder="Size" value="{{ old('size',$item->size)}}" >
		</div>
		<div class="form-group col-sm">
			<label for="resolution">&nbsp</label>
				<input type="text" class="form-control" name="resolution" id="resolution" placeholder="Resolution" value="{{ old('resolution',$item->resolution)}}" >
		</div>
	</div>
	<!-- Platform -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="os"><b>Platform</b></label>
				<input type="text" class="form-control" name="os" id="os" placeholder="OS" value="{{ old('os',$item->os)}}" >
		</div>
		<div class="form-group col-sm">
			<label for="cpu">&nbsp</label>
				<input type="text" class="form-control" name="cpu" id="cpu" placeholder="CPU" value="{{ old('cpu',$item->cpu)}}" >
		</div>
		<div class="form-group col-sm">
			<label for="gpu">&nbsp</label>
				<input type="text" class="form-control" name="gpu" id="gpu" placeholder="GPU" value="{{ old('gpu',$item->gpu)}}" >
		</div>
	</div>
	<!-- Memory -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="card_slot"><b>Memory</b></label>
				<input type="text" class="form-control" name="card_slot" id="card_slot" placeholder="Card slot" value="{{ old('card_slot',$item->card_slot) }}" >
		</div>
		<div class="form-group col-sm">
			<label for="hard_drive">&nbsp</label>
				<input type="text" class="form-control" name="hard_drive" id="hard_drive" placeholder="Hard Drive" value="{{ old('hard_drive',$item->hard_drive) }}" >
		</div>
		<div class="form-group col-sm">
			<label for="optical_drive">&nbsp</label>
				<input type="text" class="form-control" name="optical_drive" id="optical_drive" placeholder="Optical Drive" value="{{ old('optical_drive',$item->optical_drive) }}">
		</div>
	</div>
		<!-- Camera -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="web_cam"><b>Web Cam</b></label>
				<input type="text" class="form-control" name="web_cam" id="web_cam" placeholder="Web Cam" value="{{ old('web_cam',$item->web_cam) }}">
		</div>
	</div>
	<!-- Sound -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="audio"><b>Sound</b></label>
				<input type="text" class="form-control" name="audio" id="audio" placeholder="Audio" value="{{ old('audio',$item->audio) }}">
		</div>
	</div>
	<!-- Comms -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="pointing_device"><b>Pointing Device</b></label>
				<input type="text" class="form-control" name="pointing_device" id="pointing_device" placeholder="Pointing Device" value="{{ old('pointing_device',$item->pointing_device) }}">
		</div>
	</div>
	<!-- Battery & MISC -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="battery"><b>Battery</b></label>
				<input type="text" class="form-control" name="battery" id="battery" placeholder="Battery" value="{{ old('battery',$item->battery) }}">
		</div>
		<div class="form-group col-sm">
			<label for="colors"><b>MISC</b></label>
				<input type="text" class="form-control" name="colors" id="colors" placeholder="Colors" value="{{ old('colors',$item->colors) }}" >
		</div>
		<div class="form-group col-sm">
			<label for="price">&nbsp</label>
				<input type="number" class="form-control {{ $errors->has('price',$item->price) ? ' is-invalid' : '' }}" name="price" id="price" placeholder="Price" value="{{ old('price',$item->price) }}">
				@if ($errors->has('price'))
	                <span class="invalid-feedback">
	                    <strong>{{ $errors->first('price') }}</strong>
	                </span>
            	@endif
		</div>
	</div>
	<!-- Image -->
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="item_image">Image</label>
			<input type="file" name="item_image" class="form-control {{ $errors->has('item_image') ? ' is-invalid' : '' }}">
			@if ($errors->has('item_image'))
			<span class="invalid-feedback">
			<strong>{{ $errors->first('item_image') }}</strong>
			</span>
			@endif
		</div>
		<div class="form-group col-md-6">
			<label for="item_image">Current Image</label>
			<img src="{{url($item->image_link)}}" class="img-thumbnail rounded" style="min-height: 250px; max-height: 250px;">
		</div>
	</div>
	<div class="form-row">
		<button type="submit" class="btn btn-primary" >Save</button>
	</div>
</form>