@extends('app.master')

@section('sidebar')
    @parent
@endsection

@section('submenu-produk')
@endsection

@section('content')
<div class="container-fluid">

    <h1 class="mb-4">{{ $title }}</h1>

    <p><strong>Nama Produk:</strong> {{ $product['name'] }}</p>
    <p><strong>ID Produk:</strong> {{ $product['id'] }}</p>
    <p><strong>Price:</strong> Rp {{ number_format($product['price'], 2, ',', '.') }}</p>

    <hr>

    <a href="{{ url('/produk') }}" class="btn btn-primary">
        Kembali
    </a>

</div>
@endsection