<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
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
        $products = Product::all(); //cara 1
        // $products = DB::select('SELECT * FROM products'); //cara 2
        // $products = DB::table('products')->get(); //cara 3

        return view('app.produk.index', compact('title', 'products'));
        // return view (product.index, [
        //     'products' => $products,
        //     'title' => $title
        // ]);
    }

    public function create()
    {
        $title = "Tambah Produk";
        return view('app.produk.create', compact('title'));
    }
    public function show(string $id)
    {
        $title = "Detail Produk";
        $product = Product::findOrFail($id);
        return view('app.produk.detail',
            compact('product', 'title'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|string|max:100',
        'price' => 'required|numeric|min:0',
        'description' => 'nullable|string',
        'status' => 'required|in:new,used',
        'is_active' => 'nullable|boolean',
        'release_date' => 'nullable|date',
    ], [
        'name.required' => 'Nama produk wajib diisi.',
        'name.max' => 'Nama produk maksimal 100 karakter.',
        'price.required' => 'Harga produk wajib diisi.',
        'price.numeric' => 'Harga produk harus berupa angka.',
        'price.min' => 'Harga produk tidak boleh negatif.',
        'status.required' => 'Status produk wajib dipilih.',
        'status.in' => 'Status produk harus new atau used.',
        'release_date.date' => 'Format tanggal rilis tidak valid.',
    ]);
    $validated['is_active'] = $request->has('is_active') ? 1 : 0;

    Product::create($validated);

    return redirect()->route('produk.index')
        ->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $title = 'Edit Produk';
        $product = Product::findOrFail($id);
        return view('app.produk.edit', compact ('product', 'title'));
        }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $validated = $request->validate([
        'name' => 'required|string|max:100',
        'price' => 'required|numeric|min:0',
        'description' => 'nullable|string',
        'status' => 'required|in:new,used',
        'is_active' => 'nullable|boolean',
        'release_date' => 'nullable|date',
    ], [
        'name.required' => 'Nama produk wajib diisi.',
        'name.max' => 'Nama produk maksimal 100 karakter.',
        'price.required' => 'Harga produk wajib diisi.',
        'price.numeric' => 'Harga produk harus berupa angka.',
        'price.min' => 'Harga produk tidak boleh negatif.',
        'status.required' => 'Status produk wajib dipilih.',
        'status.in' => 'Status produk harus new atau used.',
        'release_date.date' => 'Format tanggal rilis tidak valid.',
    ]);
    $validated['is_active'] = $request->has('is_active') ? 1 : 0;
    $product->update($validated);
    return redirect()->route('produk.index')
        ->with('success', 'Produk berhasil ditambahkan.');
    }
}

