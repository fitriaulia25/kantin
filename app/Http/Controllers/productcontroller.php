<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Pastikan model Anda bernama Produk

class ProductController extends Controller
{
    public function index()
    {
        $produks = Product::all(); // Ambil semua produk dari database
        return view('menus.index', compact('produks')); // Kirim data produk ke view
    }

    public function show($id)
{
    $produk = Product::findOrFail($id);
    return view('product.show', compact('produk'));
}

}
