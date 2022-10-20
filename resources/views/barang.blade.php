@extends('layout.main')

@section('container')
<h1>Menu</h1>
<div class="row row-cols-1 row-cols-md-4 g-4">
    @foreach($barangs as $barang)
  <div class="col">
    <div class="card h-100">
      <img src="img/<?= $barang['gambar']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $barang['nama']; ?></h5>
        <p class="card-text"><?= $barang['harga']; ?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  @endforeach
</div>
  
@endsection
