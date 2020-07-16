@extends('layout/main')
@section('title','Beranda')

@section('container')
	<div class="container">
		<h2 class="text-center">Selamat Datang</h2>
        <ul class="list-group list-group-flush" style="margin-right=120px;">
      @foreach($room as $room)
      <div class="card" style="width:400px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">{{$room->nama}}</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
        @endforeach  
    <a href="rooms/create" style="margin-top:20px;"><button class="btn btn-primary">Tambah</button></a>
</ul>
	</div>
@endsection
