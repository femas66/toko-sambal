@extends('layout.master')
@section('content')
<div class="container">
<center>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/img/{{ $sambal->img }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{ $sambal->img }}</h5>
    <p class="card-text">Ganti gambar!!!</p>
    <div class="mb-3">
      <form action="/updateimg" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $sambal->id }}">
        <input class="form-control" type="file" id="avatar" name="avatar">
        <hr>
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
      </div>
  </div>
</div>
</center>
</div>
@endsection