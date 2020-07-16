@extends('layout/main')
@section('title','Tambah properti')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-10 w3-card">
            <h2>Masukkan Property kedalam classroom</h2>
                <form action="{{url('classprops')}}" method="post" style="margin-bottom: 5px;">
                    @csrf;
                    <div class="form-group">
                    Id classroom
                        <input type="text" value="{{$id}}" name="classroom" readonly >
                        <table>
                            <tr>
                                <td>Property</td>
                                <td>Id Property</td>
                                <td>Jumlah</td>
                            </tr>
                            @foreach($classprop as $prop)
                            <tr>
                                <td><input type="text" value="{{$prop->prop}}" name="prop" readonly></td>
                                <td><input type="text" value="{{$prop->id}}" name="id" readonly></td>
                                <td><input type="number" name="jlh"></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <input type="submit" class="btn btn-primary" name="save" value="simpan">
                </form>
            </div>
        </div>
    </div>
@endsection
