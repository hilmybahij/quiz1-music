@extends('layouts.app')

@section('content')

<div class="container">

<h3>Tambah Data Artist</h3>
<form action="{{url('/artist')}}" method="POST">
@csrf
<table>
      <td>Nama Artist</td>
      <td><input type="text" name="artist_name"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="SIMPAN" class="btn btn-primary btn-sm"></td>
        </tr>
            </table>
            </form>
            </div>
            @endsection
