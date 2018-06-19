<table class="table table-sm">
	<thead>
		<tr>
		</tr>
	</thead>
	<tbody>
		<!-- body -->
		<tr>
			<td rowspan="2" style="width: 20%"><b>BODY</b></td>
			<td style="width: 20%">Dimensions</td>
			<td style="width: 60%">{{$item->dimensions}}</td>
		</tr>  
		<tr>
			<td style="width: 20%">Weight</td>
			<td style="width: 60%">{{$item->weight}}</td>
		</tr>    	
		<!-- Display			 -->
		<tr>
			<td rowspan="3" style="width: 20%"><b>DISPLAY</b></td>
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
		<!-- Platform			 -->
		<tr>
			<td rowspan="3" style="width: 20%"><b>PLATFORM</b></td>
			<td style="width: 20%">OS</td>
			<td style="width: 60%">{{$item->os}}</td>
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
			<td rowspan="3" style="width: 20%"><b>MEMORY</b></td>
			<td style="width: 20%">Card slot</td>
			<td style="width: 60%">{{$item->card_slot}}</td>
		</tr>  
		<tr>
			<td style="width: 20%">Hard Drive</td>
			<td style="width: 60%">{{$item->hard_drive}}</td>
		</tr>  
		<tr>
			<td style="width: 20%">Optical Drive</td>
			<td style="width: 60%">{{$item->optical_drive}}</td>
		</tr>  
		<!-- Camera			 -->
		<tr>
			<td style="width: 20%"><b>WEB CAM</b></td>
			<td style="width: 20%"></td>
			<td style="width: 60%">{{$item->web_cam}}</td>
		</tr>     
		<!-- Sound			 -->
		<tr>
			<td style="width: 20%"><b>SOUND</b></td>
			<td style="width: 20%"></td>
			<td style="width: 60%">{{$item->audio}}</td>
		</tr>  	
		<!-- Pointing device			 -->
		<tr>
			<td style="width: 20%"><b>POINTING DEVICE</b></td>
			<td style="width: 20%"></td>
			<td style="width: 60%">{{$item->pointing_device}}</td>
		</tr>  
		<!-- Battery			 -->
		<tr>
			<td style="width: 20%"><b>BATTERY</b></td>
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