<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Total seluruh barang
        $totalBarang = Product::count();

        // Product tersedia
        $barangTersedia = Product::where('is_active', 1)->count();

        // Product habis
        $barangHabis = Product::where('is_active', 0)->count();

        // Total nilai stok
        $nilaiStok = 'Rp ' . number_format(
            Product::sum('price'),
            0,
            ',',
            '.'
        );

        // Ambil 5 barang terbaru
        $barangTerbaru = Product::latest()
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'totalBarang',
            'barangTersedia',
            'barangHabis',
            'nilaiStok',
            'barangTerbaru'
        ));
    }
}