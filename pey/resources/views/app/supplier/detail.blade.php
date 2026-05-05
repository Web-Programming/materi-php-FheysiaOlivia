@extends('app.master')

@section('title', 'Detail Supplier')

@section('sidebar')
    @parent
@endsection

@section('content')
<div class="container-fluid">

    <h1 class="mb-4">{{ $title }}</h1>

    <div class="card shadow-sm">
        <div class="card-body">

            <p><strong>ID Supplier :</strong> {{ $supplier['id'] }}</p>
            <p><strong>Nama Supplier :</strong> {{ $supplier['name'] }}</p>
            <p><strong>Alamat :</strong> {{ $supplier['address'] }}</p>
            <p><strong>Telepon :</strong> {{ $supplier['phone'] }}</p>

            <hr>

            <a href="{{ url('/supplier') }}" class="btn btn-secondary">
                Kembali
            </a>

        </div>
    </div>

</div>
@endsection