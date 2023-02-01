@extends('layout.master')
@section('content')
<div class="container">
   <h2>Dashborad</h2>
   <hr>
   <style>
      .gmbar {
         transition: transform .2s;
      }
      .gmbar:hover {
         transform: scale(1.3);
      }
   </style>
   <a href="/tambah" class="btn btn-primary" title="Tambah">Tambah Sambal</a>
   <a href="/logout" class="btn btn-danger" title="Logout">Logout</a>
   <table class="table">
      <thead>
         <tr>
            <th scope="col">Gambar</th>
            <th scope="col">Nama</th>
            <th scope="col">Level</th>
            <th scope="col">Stok</th>
            <th scope="col">Harga</th>
            <th scope="col" colspan="2">Aksi</th>
         </tr>
      </thead>
      @if (count($data) == 0)
         <tr>
            <td rowspan="5">Tytyd</td>
         </tr>
      @else
      @foreach ($data as $item)
         <tr>
            <?php
               $gambar = '/img/' . $item->img;
            ?>
            <td><a href='/edit/img/{{ $item->id }}'><img src='{{ url($gambar) }}' width="50" height="50" class="gmbar"></a></td>
            <td>{{ $item['nama-sambal'] }}</td>
            <td>{{ $item['level-sambal'] }}</td>
            <td>{{ $item->stok }}</td>
            <td>{{ $item->harga }}</td>
            <td><a href="/edit/{{ $item->id }}">Edit</a></td>
            <td><a href="#" onclick="con({{ $item->id }}); return false;">Hapus</a></td>
         </tr>
      @endforeach
      @endif
   </table>
   {{$data->links()}}
</div>
@endsection
<script>
   function con(id) {
      let cek = confirm("Want to delete?")
      if (cek) {
         let id_data = id;
         window.location = '/hapus/' + id_data;
      }
   }
</script>