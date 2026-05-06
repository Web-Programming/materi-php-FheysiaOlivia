<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public function index()
    {
        $title = "Daftar Supplier";

        $suppliers = Supplier::all();

        return view('supplier.index', compact('title', 'suppliers'));
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function show(string $id)
    {
        $title = "Detail Supplier";


        $supplier = [
            'id' => $id,
            'name' => 'PT Maju Jaya',
            'phone' => '08987654321',
            'address' => 'Jakarta'
        ];

        return view('supplier.detail', compact('supplier', 'title'));
    }
}