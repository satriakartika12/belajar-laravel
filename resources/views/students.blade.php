@extends('layouts.mainlayout')

@section('title','students')

@section('konten')
    <h1>ini adalah Student</h1>
    <table class="table">
        <tr>
            <th>Nomor</th> 
            <th>NIS</th>
            <th>Nama</th>
            <th>gender</th>
            <th>Action</th>

</tr>
@foreach ($studentlist as $data)
<tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $data->nis }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->gender }}</td>
        <td><a href="student/{{ $data->id }}">Detail</a></td>
</tr>
@endforeach
</table>
    
@endsection
