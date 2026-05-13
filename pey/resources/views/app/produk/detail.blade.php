@extends('app.master')

@section('sidebar')
    @parent
@endsection

@section('submenu-produk')
@endsection

@section('content')

<div class="container-fluid">
    <h1 class="mb-4">{{ $title }}</h1>
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">
                Detail Produk
            </h4>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3 fw-bold">
                    ID Produk
                </div>
                <div class="col-md-9">
                    {{ $product->id }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 fw-bold">
                    Nama Produk
                </div>
                <div class="col-md-9">
                    {{ $product->name }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 fw-bold">
                    Harga
                </div>
                <div class="col-md-9">
                    Rp {{ number_format($product->price, 2, ',', '.') }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 fw-bold">
                    Deskripsi
                </div>
                <div class="col-md-9">
                    {{ $product->description ?? '-' }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 fw-bold">
                    Status
                </div>
                <div class="col-md-9">
                    @if($product->status == 'new')
                        <span class="badge bg-success">
                            Baru
                        </span>
                    @else
                        <span class="badge bg-warning text-dark">
                            Bekas
                        </span>
                    @endif
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 fw-bold">
                    Active
                </div>
                <div class="col-md-9">
                    @if($product->is_active)
                        <span class="badge bg-primary">
                            Active
                        </span>
                    @else
                        <span class="badge bg-danger">
                            Non Active
                        </span>
                    @endif
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 fw-bold">
                    Release Date
                </div>
                <div class="col-md-9">
                    {{ $product->release_date ?? '-' }}
                </div>
            </div>
        </div>
        <div class="card-footer bg-light">
            <a href="{{ route('produk.index') }}"
                class="btn btn-secondary">
                Kembali
            </a>
            <a href="{{ route('produk.edit', $product->id) }}"
                class="btn btn-warning">
                Edit Produk
            </a>
        </div>
    </div>
</div>
@endsection