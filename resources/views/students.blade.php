@extends('layouts.mainlayout')

@section('title','students')

@section('konten')
    <h1>ini adalah Student</h1>
    <table class="table">
        <tr>
            <th>Nomor</th> 
            <th>Nama</th>
            <th>gender</th>
            <th>Action</th>

</tr>
@foreach ($studentlist as $data)
<tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->gender }}</td>
        <td><button type="button" class="btn btn-primary">Detail</button></td>
</tr>
@endforeach
</table>
    
@endsection
