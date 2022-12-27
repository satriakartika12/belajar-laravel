
@extends('layouts.mainlayout')

@section('title','Kelas')

@section('konten')
    <h1>ini adalah Kelas</h1>
    <table class="table">
        <tr>
            <th>Nomor</th>
            <th>kelas</th>
            <th>Action</th>

</tr>
@foreach ($kelaslist as $data)
<tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $data->nama }}</td>
        <td><a href="kelas-detail/{{ $data->id }}">Detail</a></td>

</tr>
@endforeach
</table>

@endsection

