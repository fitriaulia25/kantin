<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        Menu::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imageName,
        ]);

        return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
    }


    public function addToCart(Request $request)
    {
        // Validasi request
        $validator = Validator::make($request->all(), [
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
                'name' => $product->nama, // Sesuaikan dengan field nama produk di model Product
                'price' => $product->harga, // Sesuaikan dengan field harga produk di model Product
                'quantity' => $quantity,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    public function edit(Menu $menu)
    {
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $menu->image = $imageName;
        }

        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->save();

        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully.');
    }
}
