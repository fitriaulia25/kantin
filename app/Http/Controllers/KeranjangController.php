<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class KeranjangController extends Controller
{
    public function index()
    {
        // Ambil item dari session keranjang
        $cart = session()->get('cart', []);

        // Buat array kosong untuk menampung item yang akan ditampilkan
        $cart_products = [];

        // Buat variabel untuk menyimpan total keranjang
        $cart_total = 0;

        // Looping setiap item di keranjang dan tambahkan ke array items
        foreach ($cart as $productId => $details) {
            $product = Product::find($productId);
            if ($product) {
                $total_price = $product->harga * $details['quantity'];
                $cart_products[] = [
                    'name' => $product->nama,
                    'price' => $product->harga,
                    'quantity' => $details['quantity'],
                    'total_price' => $total_price,
                ];
                $cart_total += $total_price;
            }
        }

        return view('keranjang.index', compact('cart_products', 'cart_total'));
    }

    public function addToCart(Request $request)
    {
        // Validasi request
        $validator = \Validator::make($request->all(), [
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Ambil informasi produk dari database
        $product = Product::findOrFail($productId);

        // Simpan produk ke dalam session keranjang
        $cart = session()->get('cart', []);

        // Jika produk sudah ada di keranjang, tambahkan jumlahnya
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            // Jika produk belum ada di keranjang, tambahkan ke keranjang
            $cart[$productId] = [
                'id' => $productId,
                'name' => $product->nama,
                'price' => $product->harga,
                'quantity' => $quantity,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }
}
