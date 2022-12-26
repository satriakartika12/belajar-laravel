
@extends('layouts.mainlayout')

@section('title','Kelas')

@section('konten')
    <h1>ini adalah Kelas</h1>
    <table class="table">
        <tr>
            <th>Nomor</th>
            <th>kelas</th>
            <th>Nama</th>

</tr>
@foreach ($kelaslist as $data)
<tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $data->nama }}</td>
        <td> 
            @foreach ($data->students as $student)
            {{$student ['nama']}} |
            @endforeach 
        </td>

</tr>
@endforeach
</table>

@endsection

