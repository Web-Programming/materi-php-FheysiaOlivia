@extends('template')

@section('title', 'Ini Halaman Detial')
    
@section('navbar')
    @parent
    <b>Ini Bisa Diisi Navbar Tambahan</b>
@endsection

@section('content')
    

    <h2>ini halaman detail produk</h2>
    Nama Produk : <b> {{$product_name}}</b><br />
    ID : <b> {{$id}}</b> <br />
    Color : <b> {{$color}}</b><br />
    Stock : <b> {{$stock}}</b>

    <hr />
    @for ($i = 0; $i < 5; $i++)
        Data {{$i}} <br />
        
    @endfor

@endsection