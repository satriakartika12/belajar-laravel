
@extends('layouts.mainlayout')

@section('title','Teachers')

@section('konten')
    <h1>ini adalah Teacher</h1>
    <table class="table">
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Action</th>

</tr>
@foreach ($teacherlist as $data)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td> {{$data->nama}}</td>
        <td><button type="button" class="btn btn-primary">Detail</button></td>
    </tr>
    
@endforeach


</table>

@endsection

