@extends('layouts.app')

@section('content')

<div class="container">

<h3>Daftar Artis
<a href="{{ url('/artist/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a></h3>

<table class="table table-bordered">
  <tr>
    <th>ID Artis</th>
    <th>Nama Artis</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
      <td>{{ $row->artist_id}}</td>
      <td>{{ $row->artist_name}}</td>
      </tr>
      @endforeach
      </table>
</div>
  @endsection
