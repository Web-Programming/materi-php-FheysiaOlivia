<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\support\Facades\DB;
class ProductController extends Controller
{

    public function index()
    {
        $title = "Daftar Produk";

        // $products = [
        //     ['id' => 1, 'name' => 'Laptop', 'price' => 7500000],
        //     ['id' => 2, 'name' => 'Mouse', 'price' => 150000],
        //     ['id' => 3, 'name' => 'Keyboard', 'price' => 300000],
        //     ['id' => 4, 'name' => 'Monitor', 'price' => 2500000],
        // ];
        $products= product::all(); //cara 1
        $products = DB::select('SELECT * FROM products'); //cara 2
        $products = DB::table('products')->get(); //cara 3

        return view('app.produk.index', compact('title', 'products'));
        // return view (product.index, [
        //     'products' => $products,
        //     'title' => $title
        // ]);
    }

    public function create()
    {
        return view('produk.create');
    }
    public function show (string $id){
    $title = "Detail produk";
    $product =  ['id' => 4, 'name' => 'Monitor', 'price' => 2500000];
    return view('produk.detail', compact('id', 'product', 'title'));
}
}
