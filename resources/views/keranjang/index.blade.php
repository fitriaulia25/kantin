<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja Anda</title>
</head>
<body>
    <h1>Keranjang Belanja Anda</h1>

    @if(!empty($cart_products) && count($cart_products) > 0)
        <ul>
            @foreach($cart_products as $product)
                <li>
                    Produk: {{ $product['name'] }} <br>
                    Harga: Rp. {{ number_format($product['price'], 0, ',', '.') }} <br>
                    Jumlah: {{ $product['quantity'] }} <br>
                    Total: Rp. {{ number_format($product['total_price'], 0, ',', '.') }}
                </li>
            @endforeach
        </ul>
        <p>Total Keranjang: Rp. {{ number_format($cart_total, 0, ',', '.') }}</p>
        <form action="{{ route('checkout') }}" method="get">
            <button type="submit">Pembayaran</button>
        </form>
    @else
        <p>Keranjang Anda kosong.</p>
    @endif

    <a href="{{ route('menus.index') }}">Kembali ke Daftar Makanan</a>
</body>
</html>
