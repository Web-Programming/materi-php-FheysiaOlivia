@extends('app.master')
@section('title', 'Produk')
    @section('sidebar')
        @parent
        @section('submenu-produk')
            <a href="/produk/create" class="list-group-item list-group-item-action ps-4">Tambah Produk</a>
            <a href="/produk/search" class="list-group-item list-group-item-action ps-4">Cari Produk</a>
        @endsection
    @endsection
@section('content')
    <h1 class="h-3 mb-3">Produk Index</h1>
    <p class="text-muted">Halaman daftar produk menggunakan layout master</p>

    <div class="card">
        <div class="card-body">
            Konten produk bisa di tampilkan disini
        </div>
    </div>
@endsection
