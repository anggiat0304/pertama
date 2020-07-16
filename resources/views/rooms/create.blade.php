@extends('layout/main')
@section('title','tambah room')

@section('container')
	<div class="container">
    <a href="/rooms"><input type="button" class="btn btn-danger" value="kembali"></a>
    <form method="post" action="/rooms"> 
    @csrf()
  <div class="form-group">
    <label>No Room</label>
    <input type="number" class="form-control col-md-1" name="noroom" >
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="tambah">
</form>
	</div>
@endsection
