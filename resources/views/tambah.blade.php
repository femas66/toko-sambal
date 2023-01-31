@extends('layout.master')
@section('content')

<div class="container">
   <h2>Tambah sambal</h2>
   <hr>
   <form action="/tambah" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
         <label for="formFile" class="form-label">Foto sambal</label>
         <input class="form-control" type="file" id="formFile" name="file">
      </div>
      <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Nama sambal</label>
         <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama sambal" name="nama-sambal">
      </div>
      <hr>
      <h6>Level sambal</h6>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="level-sambal" id="flexRadioDefault1" value="1">
         <label class="form-check-label" for="flexRadioDefault1">Level 1</label>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="level-sambal" id="flexRadioDefault2" value="2">
         <label class="form-check-label" for="flexRadioDefault2">Level 2</label>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="level-sambal" id="flexRadioDefault3" value="3">
         <label class="form-check-label" for="flexRadioDefault3">Level 3</label>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="level-sambal" id="flexRadioDefault4" value="4">
         <label class="form-check-label" for="flexRadioDefault4">Level 4</label>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="level-sambal" id="flexRadioDefault5" value="5">
         <label class="form-check-label" for="flexRadioDefault5">Level 5</label>
      </div>
      <hr>
      <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Stok sambal</label>
         <input type="number  " class="form-control" id="exampleFormControlInput1" placeholder="Stok sambal" name="stok">
      </div>
      <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Harga sambal</label>
         <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Harga sambal" name="harga">
      </div>
      <button type="submit" class="btn btn-primary">Tambah</button>       
   </form>
</div>
@endsection