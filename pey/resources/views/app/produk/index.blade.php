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

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Daftar Produk</h1>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($products); $i++)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $products[$i]['name'] }}</td>
                        <td>Rp {{ number_format($products[$i]['price'], 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ url('/produk/' . $products[$i]['id']) }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="{{ url('/produk/' . $products[$i]['id']) . '/edit' }}" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection