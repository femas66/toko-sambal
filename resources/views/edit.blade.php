@extends('layout.master')
@section('content')

   <h2>Edit Sambal</h2>
   <form action="/edit/{{ $sambal->id }}" method="post">
      @csrf
      <input type="text" name="nama-sambal" id="" placeholder="Nama" value="{{ $sambal['nama-sambal'] }}">
      <input type="number" name="level-sambal" id="" placeholder="Level" value="{{ $sambal['level-sambal'] }}">
      <input type="number" name="stok" id="" placeholder="Stok" value="{{ $sambal['stok'] }}">
      <input type="number" name="harga" id="" placeholder="Harga" value="{{ $sambal['harga'] }}">
      <button type="submit">Edit</button>
   </form>

@endsection