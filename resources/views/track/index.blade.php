@extends('layouts.app')

@section('content')

<div class="container">

<h3>Daftar Artis</h3>

<table class="table table-bordered">
  <tr>
    <th>ID Artis</th>
    <th>Nama Track</th>
    <th>ID Album</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
      <td>{{ $row->artist_id}}</td>
      <td>{{ $row->track_name}}</td>
      <td>{{ $row->album_id}}</td>
      </tr>
      @endforeach
      </table>
</div>
  @endsection
