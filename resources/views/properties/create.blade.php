@extends('layout/main')
@section('title','Tambah properti')

@section('container')
	<div class="container">
        <h2>Tambah jenis properti</h2>
        <div class="w3-card" style="padding:20px;">
<form method="post" action="/properties" style="padding:10px;"> 
    @csrf()
<div class="form-group">
    <label>Nama item properti</label>
    <input type="text"  name="name"  class="form-control col-md-4  ">
    
    <input type="submit" class="btn btn-primary" value="tambah" style="margin-top:10px;">
</div>
</div>
	</div>
@endsection
