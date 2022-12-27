@extends('layouts.mainlayout')

@section('title','Kelas Detail')

@section('konten')

<h4>ini adalah halaman Wali Kelas {{$kelas->nama}} : {{$kelas->homeroomteachers->nama}}</h4>

<div class=mt-5>
<strong>Data Murid Kelas  {{$kelas->nama}} :</strong>
    <ol>
        @foreach ($kelas->students as $item)
       <li>
        {{$item->nama}}
       </li>
    @endforeach
        
</ol>

</div>

@endsection