@extends('layout/main')
@section('title','Tambah properti')

@section('container')
	<div class="container">
       <div class="row">
			<div class="col-md-6 w3-card" style="padding:5px;">
			<h3>Jenis Inventory Hotel</h3>
				<table class="table table-striped">
					<?php $i=1;	?>
					<tr>
						<td>No</td>
						<td>Jenis</td>
					</tr>
					@foreach($property as $property)
					<tr>
						<td><?php echo ($i++); ?></td>
						<td>{{$property->prop}}</td>	
					</tr>
					@endforeach
				</table>
	   			</div>
	   		<div class="col-md-6"> 
				<form method="post" class="w3-card" action="/properties" style="padding:10px;"> 
    			@csrf()
				<div class="form-group">
    			<label>Nama item properti</label>
    			<input type="text"  name="name"  class="form-control">
    			<input type="submit" class="btn btn-primary" value="tambah" style="margin-top:10px;">
				</form>
	   			</div>
	   		</div>  
		</div>
@endsection

