@extends('main')

@section('title','fakultas')

@section('content')
<h2>Data Fakultas</h2>
<table class ="table table-bordered table-hover">
    <tr>
        <th>nama fakultas</th>
        <th>singkatan</th>
        <th>dekan</th>
    </tr>
@foreach ($result as $item)
    <tr>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->singkatan }}</td>
        <td>{{ $item->dekan }}</td>
    </tr>
   
@endforeach
</table>
@endsection