<form action="{{ route('item-add', $category->id)}}" method="post" enctype="multipart/form-data" >
	@csrf
	<!-- Brand & Model -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="brand"><b>Brand</b></label>
				<input type="text" class="form-control{{ $errors->has('brand') ? ' is-invalid' : '' }}" name="brand" id="brand" placeholder="Brand" value="{{ old('brand')}}" >
	        @if ($errors->has('brand'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('brand') }}</strong>
                </span>
            @endif
		</div>
		<div class="form-group col-sm">
			<label for="model"><b>Model</b></label>
				<input type="text" class="form-control{{ $errors->has('model') ? ' is-invalid' : '' }}" name="model" id="model" placeholder="Model" value="{{ old('model')}}" >
	        @if ($errors->has('model'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('model') }}</strong>
                </span>
            @endif
		</div>
	</div>
	<!-- Network & launch -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="technology"><b>Network</b></label>
				<input type="text" class="form-control" name="technology" id="technology" placeholder="Technology" value="{{ old('technology')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="announced"><b>Launch</b></label>
				<input type="text" class="form-control" name="announced" id="announced" placeholder="Announced" value="{{ old('announced')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="status">&nbsp</label>
				<input type="text" class="form-control" name="status" id="status" placeholder="Status" value="{{ old('status')}}" >
		</div>
	</div>
	<!-- Body -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="dimensions"><b>Body</b></label>
				<input type="text" class="form-control" name="dimensions" id="dimensions" placeholder="Dimensions" value="{{ old('dimensions')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="weight">&nbsp</label>
				<input type="text" class="form-control" name="weight" id="weight" placeholder="Weight" value="{{ old('weight')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="sim">&nbsp</label>
				<input type="text" class="form-control" name="sim" id="sim" placeholder="SIM" value="{{ old('sim')}}" >
		</div>
	</div>
	<!-- Display -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="type"><b>Display</b></label>
				<input type="text" class="form-control" name="type" id="type" placeholder="Type" value="{{ old('type')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="size">&nbsp</label>
				<input type="text" class="form-control" name="size" id="size" placeholder="Size" value="{{ old('size')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="resolution">&nbsp</label>
				<input type="text" class="form-control" name="resolution" id="resolution" placeholder="Resolution" value="{{ old('resolution')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="multitouch">&nbsp</label>
				<input type="text" class="form-control" name="multitouch" id="multitouch" placeholder="Multitouch" value="{{ old('multitouch')}}" >
		</div>
	</div>
	<!-- Platform -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="os"><b>Platform</b></label>
				<input type="text" class="form-control" name="os" id="os" placeholder="OS" value="{{ old('os')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="chipset">&nbsp</label>
				<input type="text" class="form-control" name="chipset" id="chipset" placeholder="Chipset" value="{{ old('chipset')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="cpu">&nbsp</label>
				<input type="text" class="form-control" name="cpu" id="cpu" placeholder="CPU" value="{{ old('cpu')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="gpu">&nbsp</label>
				<input type="text" class="form-control" name="gpu" id="gpu" placeholder="GPU" value="{{ old('gpu')}}" >
		</div>
	</div>
	<!-- Memory -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="card_slot"><b>Memory</b></label>
				<input type="text" class="form-control" name="card_slot" id="card_slot" placeholder="Card slot" value="{{ old('card_slot')}}">
		</div>
		<div class="form-group col-sm">
			<label for="internal">&nbsp</label>
				<input type="text" class="form-control" name="internal" id="internal" placeholder="Internal" value="{{ old('internal')}}" >
		</div>
	</div>
	<!-- Camera -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="primary"><b>Camera</b></label>
				<input type="text" class="form-control" name="primary" id="primary" placeholder="Primary" value="{{ old('primary')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="features">&nbsp</label>
				<input type="text" class="form-control" name="features" id="features" placeholder="Features" value="{{ old('features')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="video">&nbsp</label>
				<input type="text" class="form-control" name="video" id="video" placeholder="Video" value="{{ old('video')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="secondary">&nbsp</label>
				<input type="text" class="form-control" name="secondary" id="secondary" placeholder="Secondary" value="{{ old('secondary')}}" >
		</div>
	</div>
	<!-- Sound -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="alert_types"><b>Sound</b></label>
				<input type="text" class="form-control" name="alert_types" id="alert_types" placeholder="Alert Types" value="{{ old('alert_types')}}">
		</div>
		<div class="form-group col-sm">
			<label for="loudspeaker">&nbsp</label>
				<input type="text" class="form-control" name="loudspeaker" id="loudspeaker" placeholder="Loud speaker" value="{{ old('loudspeaker')}}">
		</div>
		<div class="form-group col-sm">
			<label for="audio_jack">&nbsp</label>
				<input type="text" class="form-control" name="audio_jack" id="audio_jack" placeholder="Audio jack" value="{{ old('audio_jack')}}">
		</div>
	</div>
	<!-- Comms -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="wlan"><b>COMMS</b></label>
				<input type="text" class="form-control" name="wlan" id="wlan" placeholder="WLAN" value="{{ old('wlan')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="bluetooth">&nbsp</label>
				<input type="text" class="form-control" name="bluetooth" id="bluetooth" placeholder="Bluetooth" value="{{ old('bluetooth')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="gps">&nbsp</label>
				<input type="text" class="form-control" name="gps" id="gps" placeholder="GPS" value="{{ old('gps')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="nfc">&nbsp</label>
				<input type="text" class="form-control" name="nfc" id="nfc" placeholder="NFC" value="{{ old('nfc')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="radio">&nbsp</label>
				<input type="text" class="form-control" name="radio" id="radio" placeholder="Radio" value="{{ old('radio')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="usb">&nbsp</label>
				<input type="text" class="form-control" name="usb" id="usb" placeholder="USB" value="{{ old('usb')}}" >
		</div>
	</div>
	<!-- Features -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="sensors"><b>Features</b></label>
				<input type="text" class="form-control" name="sensors" id="sensors" placeholder="Sensors" value="{{ old('sensors')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="messaging">&nbsp</label>
				<input type="text" class="form-control" name="messaging" id="messaging" placeholder="Messaging" value="{{ old('messaging')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="browser">&nbsp</label>
				<input type="text" class="form-control" name="browser" id="browser" placeholder="Browser" value="{{ old('browser')}}" >
		</div>
	</div>
	<!-- Battery & MISC -->
	<div class="form-row">
		<div class="form-group col-sm">
			<label for="battery"><b>Battery</b></label>
				<input type="text" class="form-control" name="battery" id="battery" placeholder="Battery" value="{{ old('battery')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="colors"><b>MISC</b></label>
				<input type="text" class="form-control" name="colors" id="colors" placeholder="Colors" value="{{ old('colors')}}" >
		</div>
		<div class="form-group col-sm">
			<label for="price">&nbsp</label>
				<input type="number" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" id="price" placeholder="Price" value="{{ old('price') }}">
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
	</div>
	<div class="form-row">
		<button type="submit" class="btn btn-primary" >Save</button>
	</div>
</form>