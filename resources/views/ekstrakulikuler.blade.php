@extends('layouts.mainlayout')

@section('title','Ekstrakulikuler')

@section('konten')

<h1>ini adalah ekstrakulikuler</h1>
    <table class="table">
        <tr>
            <th>Nomor</th> 
            <th>Nama</th>
            <th>Students</th>
</tr>
@foreach ($ekskullist as $data)
<tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $data->name }}</td>
        <td>
            @foreach ($data->studentsekskul as $item)
                - {{$item->nama}}<br>
            @endforeach
        </td>
</tr>
@endforeach

</tr>
</table>

@endsection