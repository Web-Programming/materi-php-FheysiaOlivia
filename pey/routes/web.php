<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Haloo, nama saya Pei!";
    //return view('welcome');
});

Route::get('/alamat', function () {
    echo "Jalan Sematang Borang Toko Wijaya No.4 Palembang";
    //return view('welcome');
});

Route::get('/path1/path2/detail', function () {
    echo "Jalan Sematang Borang Toko Wijaya No.4 Palembang";
    echo "<br>";
    echo "Jalan Sematang Borang Toko Wijaya No.5 Palembang";
    echo "<br>";
    echo "Jalan Sematang Borang Toko Wijaya No.6 Palembang";
    //return view('welcome');
});

// route dinamis dengan parameter id
Route::get('/user/{id}', function ($id) {
    echo "User ID: ". $id;
});

// route dinamis dengan parameter nama
Route::get('/user2/{name}', function ($name) {
    echo "User Name: ". $name;
});

// route dinamis dengan opsional parameter nama
Route::get('/user3/{name?}', function ($name = 'Tamu') {
    echo "User Name: ". $name;
});

// route dinamis dengan opsional parameter nama dan id
Route::get('/user4/{id}/{name}', function ($id, $name) {
    echo "User Id: ". $id;
    echo "<br>";
    echo "User Name: ". $name;
});

// router dengan metode post
Route::post('/simpan', function(){
    echo "Data berhasil di simpan";
});
// router dengan metode put
Route::put('/update/{id}', function($id){
    echo "Data berhasil diperbarui dengan id: ".$id;
});
// router dengan metode patch
Route::patch('/update2/{id}', function($id){
    echo "Data berhasil diperbarui dengan id: ".$id;
});
// router dengan metode delete
Route::delete('/hapus/{id}', function($id){
    echo "Data berhasil diperbarui dengan id: ".$id;
});
//route untuk menampilkan halam test_method
Route::get('/test-method', function(){
    return view('test_method');
});

// menampilkan halaman profile
Route::get('/profile', function(){
    return view("profile");
});

Route::get('/aboutprofile', function(){
    return view("about");
});

// // dalam folder gunakan titik (folder produk file detail)
// Route::get('/detailproduk', function(){
//     return view("produk.detail");
// });

// mengirim data ke view
// Route::get('/detailproduk/{name}', function($name){
//     return view("produk.detail", 
//     ['product_name' => $name,
//     'id' => 101,
//     'color' => 'pink',
//     'stock' => 12
//     ]);
// });


route::get('/produk/', function(){
    return view('produk.index');
});
route::get('/produk/create', function(){
    return view('produk.create');
});
route::get('/produk/search', function(){
    return view('produk.search');
});
route::get('/produk/detail', function(){
    return view('produk.detail');
});
route::get('/supplier/', function(){
    return view('supplier.index');
});
route::get('/supplier/create', function(){
    return view('supplier.create');
});
route::get('/supplier/search', function(){
    return view('supplier.search');
});
route::get('/supplier/detail', function(){
    return view('supplier                                   .detail');
});