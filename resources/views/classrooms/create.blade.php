@extends('layout/main')
@section('title','tambah classroom')

@section('container')
	<div class="container">
    <h2>Tambah Classroom</h2>
    <a href="/classrooms"><input type="button" class="btn btn-danger" value="kembali"></a>
    <div class="w3-card" style="padding:20px; margin-right:100px;">
    <form method="post" action="/classrooms/store"> 
    @csrf()
  <div class="form-group">
    <label>Nama Classrooms</label>
    <input type="text" class="form-control col-md-4" name="name" >
  </div>
  <div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control col-md-4" name="foto" >
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="tambah">
</form>
</div>
    
	</div>
@endsection
