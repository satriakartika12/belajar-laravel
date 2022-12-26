@extends ('layouts.mainlayout')
@section('title','home')

@section('konten')
<h1>ini adalah home</h1>
<h2>terimakasih</h2>
<table class="table">
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
</tr>
@foreach ($buah as $data)
<tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $data }}</td>
</tr>
@endforeach
</table>
@endsection
