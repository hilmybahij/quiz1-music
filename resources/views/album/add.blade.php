@extends('layouts.app')

@section('content')

<div class="container">

<h3>Tambah Data Album</h3>
<form action="{{url('/album')}}" method="POST">
@csrf
<table>
  <tr>
    <td>Artist Id</td>
    <td><input type="text" name="artist_id"></td>
    </tr>
    <tr>
      <td>Nama Album</td>
      <td><input type="text" name="album_name"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="SIMPAN" class="btn btn-primary"></td>
        </tr>
            </table>
            </form>
            </div>
            @endsection
