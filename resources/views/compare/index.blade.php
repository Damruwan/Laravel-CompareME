@extends('layouts.user')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      
    </div>
    <div class="col-md-6">
      <form action="{{route('item-compare')}}" method="get" accept-charset="utf-8">
          <input type="hidden" name="cur_item" value="{{$item->id}}">
          <div class="form-row">
              <div class="form-group col-sm">
                <select id="select-item" class="movies {{ $errors->has('item_id') ? ' is-invalid' : '' }}" name="item_id" placeholder="Compare With" style="width: 420px"></select>
                      @if ($errors->has('item_id'))
                          <div class="invalid-feedback">
                              {{ $errors->first('item_id') }}
                          </div>
                      @endif      
              </div>
              <div class="form-group col-sm">
                <button type="submit" class="btn btn-primary">compare</button>
              </div>
          </div>    
      </form>
    </div>
  </div>  
	<div class="row justify-content-center">
		<div class="col-md-6">
      <img src="{{url($item->image_link)}}" class="img-thumbnail rounded" style="min-height: 250px; max-height: 250px;">
      <h5 class="card-title">{{$item->brand}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$item->model}}</h6>
      <h6 class="card-title">{{$item->body}}</h6>
      <h6 class="card-title">{{$item->primary}}</h6>
      <h6 class="card-title">{{$item->battery}}</h6>
		</div>
    <div class="col-md-6">
      @if(!is_null($compare_item))
      <img src="{{url($compare_item->image_link)}}" class="img-thumbnail rounded" style="min-height: 250px; max-height: 250px;">
      <h5 class="card-title">{{$compare_item->brand}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$compare_item->model}}</h6>
      <h6 class="card-title">{{$compare_item->body}}</h6>
      <h6 class="card-title">{{$compare_item->primary}}</h6>
      <h6 class="card-title">{{$compare_item->battery}}</h6>
      @endif
    </div>
	</div>
  <div class="row">
<table class="table table-sm">
  <thead>
    <tr>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="width: 20%"><b>NETWORK</b></td>
      <td style="width: 20%">Technology</td>
      <td style="width: 30%">{{$item->technology}}</td>
      @if(!is_null($compare_item))
      <td style="width: 30%">{{$compare_item->technology}}</td>
      @endif
    </tr>
    <tr>
      <td rowspan="2" style="width: 20%"><b>Launch</b></td>
      <td style="width: 20%">Announced</td>
      <td style="width: 30%">{{$item->announced}}</td>
      @if(!is_null($compare_item))
      <td style="width: 30%">{{$compare_item->announced}}</td>
      @endif
    </tr>     
    <tr>
      <td style="width: 20%">Status</td>
      <td style="width: 30%">{{$item->status}}</td>
      @if(!is_null($compare_item))
      <td style="width: 30%">{{$compare_item->status}}</td>
      @endif
    </tr>   
    <!-- body -->
    <tr>
      <td rowspan="3" style="width: 20%"><b>BODY</b></td>
      <td style="width: 20%">Dimensions</td>
      <td style="width: 30%">{{$item->dimensions}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->dimensions}}</td>
      @endif
    </tr>  
    <tr>
      <td style="width: 20%">Weight</td>
      <td style="width: 30%">{{$item->weight}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->weight}}</td>
      @endif
    </tr>    
    <tr>
      <td style="width: 20%">SIM</td>
      <td style="width: 30%">{{$item->sim}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->sim}}</td>
      @endif
    </tr>   
    <!-- Display       -->
    <tr>
      <td rowspan="4" style="width: 20%"><b>DISPLAY</b></td>
      <td style="width: 20%">Type</td>
      <td style="width: 30%">{{$item->type}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->type}}</td>
      @endif
    </tr>  
    <tr>
      <td style="width: 20%">Size</td>
      <td style="width: 30%">{{$item->size}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->size}}</td>
      @endif
    </tr>    
    <tr>
      <td style="width: 20%">Resolution</td>
      <td style="width: 30%">{{$item->resolution}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->resolution}}</td>
      @endif
    </tr> 
    <tr>
      <td style="width: 20%">Multitouch</td>
      <td style="width: 30%">{{$item->multitouch}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->multitouch}}</td>
      @endif
    </tr> 
    <!-- Platform      -->
    <tr>
      <td rowspan="4" style="width: 20%"><b>PLATFORM</b></td>
      <td style="width: 20%">OS</td>
      <td style="width: 30%">{{$item->os}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->os}}</td>
      @endif
    </tr>  
    <tr>
      <td style="width: 20%">Chipset</td>
      <td style="width: 30%">{{$item->chipset}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->chipset}}</td>
      @endif
    </tr>    
    <tr>
      <td style="width: 20%">CPU</td>
      <td style="width: 30%">{{$item->cpu}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->cpu}}</td>
      @endif
    </tr> 
    <tr>
      <td style="width: 20%">GPU</td>
      <td style="width: 30%">{{$item->gpu}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->gpu}}</td>
      @endif
    </tr>    
    <!-- Memory      -->
    <tr>
      <td rowspan="2" style="width: 20%"><b>MEMORY</b></td>
      <td style="width: 20%">Card slot</td>
      <td style="width: 30%">{{$item->card_slot}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->card_slot}}</td>
      @endif
    </tr>  
    <tr>
      <td style="width: 20%">Internal</td>
      <td style="width: 30%">{{$item->internal}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->internal}}</td>
      @endif
    </tr>  
    <!-- Camera      -->
    <tr>
      <td rowspan="4" style="width: 20%"><b>CAMERA</b></td>
      <td style="width: 20%">Primary</td>
      <td style="width: 30%">{{$item->primary}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->primary}}</td>
      @endif
    </tr>  
    <tr>
      <td style="width: 20%">Features</td>
      <td style="width: 30%">{{$item->features}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->features}}</td>
      @endif
    </tr>    
    <tr>
      <td style="width: 20%">Video</td>
      <td style="width: 30%">{{$item->video}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->video}}</td>
      @endif
    </tr> 
    <tr>
      <td style="width: 20%">Secondory</td>
      <td style="width: 30%">{{$item->secondary}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->secondary}}</td>
      @endif
    </tr>   
    <!-- Sound       -->
    <tr>
      <td rowspan="3" style="width: 20%"><b>SOUND</b></td>
      <td style="width: 20%">Alert types</td>
      <td style="width: 30%">{{$item->alert_types}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->alert_types}}</td>
      @endif
    </tr>  
    <tr>
      <td style="width: 20%">Loudspeaker</td>
      <td style="width: 30%">{{$item->loudspeaker}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->loudspeaker}}</td>
      @endif
    </tr>    
    <tr>
      <td style="width: 20%">Audio jack</td>
      <td style="width: 30%">{{$item->audio_jack}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->audio_jack}}</td>
      @endif
    </tr>   
    <!-- COMMS       -->
    <tr>
      <td rowspan="6" style="width: 20%"><b>COMMS</b></td>
      <td style="width: 20%">WLAN</td>
      <td style="width: 30%">{{$item->wlan}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->wlan}}</td>
      @endif
    </tr>  
    <tr>
      <td style="width: 20%">Bluetooth</td>
      <td style="width: 30%">{{$item->bluetooth}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->bluetooth}}</td>
      @endif
    </tr>    
    <tr>
      <td style="width: 20%">GPS</td>
      <td style="width: 30%">{{$item->gps}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->gps}}</td>
      @endif
    </tr>       
    <tr>
      <td style="width: 20%">NFC</td>
      <td style="width: 30%">{{$item->nfc}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->nfc}}</td>
      @endif
    </tr>
    <tr>
      <td style="width: 20%">Radio</td>
      <td style="width: 30%">{{$item->radio}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->radio}}</td>
      @endif
    </tr>
    <tr>
      <td style="width: 20%">USB</td>
      <td style="width: 30%">{{$item->usb}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->compare_item}}</td>
      @endif
    </tr>  
    <!-- Features      -->
    <tr>
      <td rowspan="3" style="width: 20%"><b>FEATURES</b></td>
      <td style="width: 20%">Sensors</td>
      <td style="width: 30%">{{$item->sensors}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->sensors}}</td>
      @endif
    </tr>  
    <tr>
      <td style="width: 20%">Messanging</td>
      <td style="width: 30%">{{$item->messaging}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->messaging}}</td>
      @endif
    </tr>    
    <tr>
      <td style="width: 20%">Browser</td>
      <td style="width: 30%">{{$item->browser}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->browser}}</td>
      @endif
    </tr>
    <!-- Battery       -->
    <tr>
      <td style="width: 20%"><b>Battery</b></td>
      <td style="width: 20%"></td>
      <td style="width: 30%">{{$item->battery}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->battery}}</td>
      @endif
    </tr>   
    <!-- MISC      -->
    <tr>
      <td rowspan="2" style="width: 20%"><b>MISC</b></td>
      <td style="width: 20%">Color</td>
      <td style="width: 30%">{{$item->colors}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->colors}}</td>
      @endif
    </tr>  
    <tr>
      <td style="width: 20%">Price</td>
      <td style="width: 30%">{{$item->price}}</td>
      @if(!is_null($compare_item))
        <td style="width:30%">{{$compare_item->price}}</td>
      @endif
    </tr>                                               
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr> 
  </tbody>
</table>    
  </div>
</div>
@endsection