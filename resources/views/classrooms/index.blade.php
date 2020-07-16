@extends('layout/main')
@section('title','classrooms')

@section('container')
	<div class="container">
        <div class="row">
            <div class="col-md-8">
                    <div class="row">
                    @foreach($classroom as $cr)
                        <div class="col-md-4" style="margin-bottom:10px;">
                        <div class="w3-card" style="padding: 10px;">
                            <h2>{{$cr->classroom}}</h2>
                             <p>Rp.{{$cr->price}} / malam</p>
                             <a href="/classrooms/{{ $cr->id }}">
                             <input type="button" class="btn btn-info" value="detail">
                             </a>
                             </p>
                        </div>
                        </div>
                    @endforeach
                    </div>
               
            </div>
            <div class="col-md-4">
                <div class="w3-card" style="padding:20px;">
                    <form method="post" action="/classrooms/store"> 
                    @csrf()
                        <div class="form-group">
                            <label>Nama Classrooms</label>
                            <input type="text" class="form-control" name="name" >
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga" >
                        </div>
                            <input type="submit" name="submit" class="btn btn-primary" value="tambah">
                    </form>
                </div>
            </div>
        </div>
	</div>
@endsection
