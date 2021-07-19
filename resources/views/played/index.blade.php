@extends('layouts.app')

@section('content')

<div class="container">

<h3>Daftar Artis</h3>

<table class="table table-bordered">
  <tr>
    <th>ID Album</th>
    <th>ID Artis</th>
    <th>ID Track</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
      <td>{{ $row->album_id}}</td>
      <td>{{ $row->artist_id}}</td>
      <td>{{ $row->track_id}}</td>
      </tr>
      @endforeach
      </table>
</div>
  @endsection
