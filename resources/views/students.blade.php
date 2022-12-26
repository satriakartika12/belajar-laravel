@extends('layouts.mainlayout')

@section('title','students')

@section('konten')
    <h1>ini adalah Student</h1>
    <table class="table">
        <tr>
            <th>Nomor</th> 
            <th>Nama</th>
            <th>gender</th>
            <th>Kelas</th>

</tr>
@foreach ($studentlist as $data)
<tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->gender }}</td>
        <td>{{ $data->kelas['nama'] }}</td>
</tr>
@endforeach
</table>
    
@endsection
