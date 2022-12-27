@extends('layouts.mainlayout')

@section('title','students')

@section('konten')

<h4>ini adalaha halaman detail siswa yang bernama : {{$student->nama}}</h4>
<div class=mt-5>
<table class="table">
    <tr>
    <th>NIS</th>
    <th>Gender</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Home Room Teacher</th>
    </tr>
    <tr>
    <td>{{$student->nis}}</td>
    <td> @if ($student->gender =="P")
        Perempuan
        @else
        Laki - Laki
    @endif </td>
    <td>{{$student->nama}}</td>
    <td>{{$student->kelas->nama}}</td>
    <td>{{$student->kelas->homeroomteachers->nama}}</td>
    </tr>
</table>
</div>


<div>
    <strong>List Ekstrakulikuler yang diikuti : </strong>
    <ol>
    @foreach ($student->ekstrakulikulers as $item)
        <li>{{$item->name}}</li>
    @endforeach
    </ol>
</div>
<style>
    th {
        width: 20%
    }
</style>
@endsection