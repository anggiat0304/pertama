@extends('layout/main')
@section('title','classrooms')
@section('container')
<div class="container">
    <div class="row">    
        <div class="col-md-12">
            <div class="row">
            <div class="col-md-6">
            </div>
            </div>
        </div>
        <div class="col-md-6 w3-card" style="padding: 20px;">
            <table class="table table-striped"> 
                <tr>
                    <td>Kelas</td>
                    <td>{{$classroom->classroom}}</td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>{{$classroom->price}}</td>    
                </tr>
            </table>            
            <form action="{{url('upload')}}" method="POST" enctype="multipart/form-data" style="padding: 10px;">
                {{ csrf_field() }}
                <input type="file" name="image">
                Id:
                <input type="text" name="id_classroom" class="col-md-2" value="{{$classroom->id}}" readonly>
                <button type="submit" class="btn btn-success" style="margin-top:10px;">Upload File</button>
            </form>
            <a href="/classprops/{{$classroom->id}}">
                             <input type="button" class="btn btn-info" value="Lihat Property">
            </a>        
        </div>
    </div>
</div>
@endsection