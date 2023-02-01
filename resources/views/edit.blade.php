@extends('layout.master')
@section('content')

<div class="container">
   <h2>Edit sambal</h2>
   <hr>
   <form action="/edit/{{ $sambal->id }}" method="post">
      @csrf
      <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Nama sambal</label>
         <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama sambal" name="nama-sambal" value="{{ $sambal['nama-sambal'] }}">
      </div>
      <hr>
      <h6>Level sambal</h6>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="level-sambal" id="flexRadioDefault1" value="1" {{ $sambal['level-sambal'] == '1' ? "checked" : "" }}>
         <label class="form-check-label" for="flexRadioDefault1">Level 1</label>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="level-sambal" id="flexRadioDefault2" value="2" {{ $sambal['level-sambal'] == '2' ? "checked" : "" }}>
         <label class="form-check-label" for="flexRadioDefault2">Level 2</label>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="level-sambal" id="flexRadioDefault3" value="3" {{ $sambal['level-sambal'] == '3' ? "checked" : "" }}>
         <label class="form-check-label" for="flexRadioDefault3">Level 3</label>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="level-sambal" id="flexRadioDefault4" value="4" {{ $sambal['level-sambal'] == '4' ? "checked" : "" }}>
         <label class="form-check-label" for="flexRadioDefault4">Level 4</label>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="level-sambal" id="flexRadioDefault5" value="5" {{ $sambal['level-sambal'] == '5' ? "checked" : "" }}>
         <label class="form-check-label" for="flexRadioDefault5">Level 5</label>
      </div>
      <hr>
      <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Stok sambal</label>
         <input type="number  " class="form-control" id="exampleFormControlInput1" placeholder="Stok sambal" name="stok" value="{{ $sambal->stok }}">
      </div>
      <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Harga sambal</label>
         <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Harga sambal" name="harga" value="{{ $sambal->harga }}">
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>       
   </form>
</div>
@endsection