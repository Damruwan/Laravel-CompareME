<table class="table table-sm">
	<thead>
		<tr>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="width: 20%"><b>NETWORK</b></td>
			<td style="width: 20%">Technology</td>
			<td style="width: 60%">{{$item->technology}}</td>
		</tr>
		<tr>
			<td rowspan="2" style="width: 20%"><b>Launch</b></td>
			<td style="width: 20%">Announced</td>
			<td style="width: 60%">{{$item->announced}}</td>
		</tr>    	
		<tr>
			<td style="width: 20%">Status</td>
			<td style="width: 60%">{{$item->status}}</td>
		</tr> 	
		<!-- body -->
		<tr>
			<td rowspan="3" style="width: 20%"><b>BODY</b></td>
			<td style="width: 20%">Dimensions</td>
			<td style="width: 60%">{{$item->dimensions}}</td>
		</tr>  
		<tr>
			<td style="width: 20%">Weight</td>
			<td style="width: 60%">{{$item->weight}}</td>
		</tr>    
		<tr>
			<td style="width: 20%">SIM</td>
			<td style="width: 60%">{{$item->sim}}</td>
		</tr> 	
		<!-- Display			 -->
		<tr>
			<td rowspan="4" style="width: 20%"><b>DISPLAY</b></td>
			<td style="width: 20%">Type</td>
			<td style="width: 60%">{{$item->type}}</td>
		</tr>  
		<tr>
			<td style="width: 20%">Size</td>
			<td style="width: 60%">{{$item->size}}</td>
		</tr>    
		<tr>
			<td style="width: 20%">Resolution</td>
			<td style="width: 60%">{{$item->resolution}}</td>
		</tr> 
		<tr>
			<td style="width: 20%">Multitouch</td>
			<td style="width: 60%">{{$item->multitouch}}</td>
		</tr> 
		<!-- Platform			 -->
		<tr>
			<td rowspan="4" style="width: 20%"><b>PLATFORM</b></td>
			<td style="width: 20%">OS</td>
			<td style="width: 60%">{{$item->os}}</td>
		</tr>  
		<tr>
			<td style="width: 20%">Chipset</td>
			<td style="width: 60%">{{$item->chipset}}</td>
		</tr>    
		<tr>
			<td style="width: 20%">CPU</td>
			<td style="width: 60%">{{$item->cpu}}</td>
		</tr> 
		<tr>
			<td style="width: 20%">GPU</td>
			<td style="width: 60%">{{$item->gpu}}</td>
		</tr>    
		<!-- Memory			 -->
		<tr>
			<td rowspan="2" style="width: 20%"><b>MEMORY</b></td>
			<td style="width: 20%">Card slot</td>
			<td style="width: 60%">{{$item->card_slot}}</td>
		</tr>  
		<tr>
			<td style="width: 20%">Internal</td>
			<td style="width: 60%">{{$item->internal}}</td>
		</tr>  
		<!-- Camera			 -->
		<tr>
			<td rowspan="4" style="width: 20%"><b>CAMERA</b></td>
			<td style="width: 20%">Primary</td>
			<td style="width: 60%">{{$item->primary}}</td>
		</tr>  
		<tr>
			<td style="width: 20%">Features</td>
			<td style="width: 60%">{{$item->features}}</td>
		</tr>    
		<tr>
			<td style="width: 20%">Video</td>
			<td style="width: 60%">{{$item->video}}</td>
		</tr> 
		<tr>
			<td style="width: 20%">Secondory</td>
			<td style="width: 60%">{{$item->secondary}}</td>
		</tr>   
		<!-- Sound			 -->
		<tr>
			<td rowspan="3" style="width: 20%"><b>SOUND</b></td>
			<td style="width: 20%">Alert types</td>
			<td style="width: 60%">{{$item->alert_types}}</td>
		</tr>  
		<tr>
			<td style="width: 20%">Loudspeaker</td>
			<td style="width: 60%">{{$item->loudspeaker}}</td>
		</tr>    
		<tr>
			<td style="width: 20%">Audio jack</td>
			<td style="width: 60%">{{$item->audio_jack}}</td>
		</tr>  	
		<!-- COMMS			 -->
		<tr>
			<td rowspan="6" style="width: 20%"><b>COMMS</b></td>
			<td style="width: 20%">WLAN</td>
			<td style="width: 60%">{{$item->wlan}}</td>
		</tr>  
		<tr>
			<td style="width: 20%">Bluetooth</td>
			<td style="width: 60%">{{$item->bluetooth}}</td>
		</tr>    
		<tr>
			<td style="width: 20%">GPS</td>
			<td style="width: 60%">{{$item->gps}}</td>
		</tr>    		
		<tr>
			<td style="width: 20%">NFC</td>
			<td style="width: 60%">{{$item->nfc}}</td>
		</tr>
		<tr>
			<td style="width: 20%">Radio</td>
			<td style="width: 60%">{{$item->radio}}</td>
		</tr>
		<tr>
			<td style="width: 20%">USB</td>
			<td style="width: 60%">{{$item->usb}}</td>
		</tr>  
		<!-- Features			 -->
		<tr>
			<td rowspan="3" style="width: 20%"><b>FEATURES</b></td>
			<td style="width: 20%">Sensors</td>
			<td style="width: 60%">{{$item->sensors}}</td>
		</tr>  
		<tr>
			<td style="width: 20%">Messanging</td>
			<td style="width: 60%">{{$item->messaging}}</td>
		</tr>    
		<tr>
			<td style="width: 20%">Browser</td>
			<td style="width: 60%">{{$item->browser}}</td>
		</tr>
		<!-- Battery			 -->
		<tr>
			<td style="width: 20%"><b>Battery</b></td>
			<td style="width: 20%"></td>
			<td style="width: 60%">{{$item->battery}}</td>
		</tr>   
		<!-- MISC			 -->
		<tr>
			<td rowspan="2" style="width: 20%"><b>MISC</b></td>
			<td style="width: 20%">Color</td>
			<td style="width: 60%">{{$item->colors}}</td>
		</tr>  
		<tr>
			<td style="width: 20%">Price</td>
			<td style="width: 60%">{{$item->price}}</td>
		</tr>      			     			     			  			    		
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>	
	</tbody>
</table>