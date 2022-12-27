@extends('layouts.mainlayout')

@section('title','Ekstrakulikuler')

@section('konten')

<h1>ini adalah ekstrakulikuler</h1>
    <table class="table">
        <tr>
            <th>Nomor</th> 
            <th>Nama</th>
            <th>Action</th>
</tr>
@foreach ($ekskullist as $data)
<tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $data->name }}</td>
        <td><button type="button" class="btn btn-primary">Detail</button></td>
</tr>
@endforeach

</tr>
</table>

@endsection