<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F0EBE3;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #FFFFFF;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }

        .card img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .card button {
            background-color: #C7B7A3;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="card">
            @if($produk->id === 2)
            <img src="{{ asset('images/dimsum.jpg') }}" alt="Dimsum">
            <h1>Dimsum</h1>
            <p>Harga: Rp.1.500</p>
            <p>Stok: 50</p>
            <p>Dimsum merupakan makanan berukuran kecil dimana memiliki kandungan gizi tinggi.</p>
            @elseif($produk->id === 1)
            <img src="{{ asset('images/hotdog.jpg') }}" alt="Hotdog">
            <h1>Hotdog</h1>
            <p>Harga: Rp.8.000</p>
            <p>Stok: 50</p>
            <p>Hotdog merupakan makanan cepat saji yang populer di seluruh dunia.</p>
            @elseif($produk->id === 3)
            <img src="{{ asset('images/kebab.jpg') }}" alt="Kebab">
            <h2>Kebab</h2>
            <p>Harga: Rp.2.000</p>
            <p>Stok: 50</p>
            <p>Kebab adalah makanan yang terbuat dari daging yang dipanggang dan dibungkus dalam roti.</p>
            @elseif($produk->id === 4)
            <img src="{{ asset('images/martabak mini.jpg') }}" alt="Martabak Mini">
            <h1>Martabak Mini</h1>
            <p>Harga: Rp.3.000</p>
            <p>Stok: 50</p>
            <p>Martabak mini adalah versi kecil dari martabak yang populer di Indonesia.</p>
            @elseif($produk->id === 5)
            <img src="{{ asset('images/onigiri.jpg') }}" alt="Onigiri">
            <h1>Onigiri</h1>
            <p>Harga: Rp.3.000</p>
            <p>Stok: 50</p>
            <p>Onigiri adalah nasi kepal khas Jepang yang biasanya dibungkus dengan rumput laut.</p>
            @elseif($produk->id === 6)
            <img src="{{ asset('images/putu ayu.jpg') }}" alt="Putu Ayu">
            <h1>Putu Ayu</h1>
            <p>Harga: Rp.1.000</p>
            <p>Stok: 50</p>
            <p>Putu Ayu adalah kue tradisional Indonesia yang terbuat dari tepung beras dan kelapa parut.</p>
            @elseif($produk->id === 7)
            <img src="{{ asset('images/risol.jpg') }}" alt="Risol">
            <h1>Risol</h1>
            <p>Harga: Rp.3.000</p>
            <p>Stok: 50</p>
            <p>Risol adalah makanan ringan yang berisi sayuran atau daging yang digulung dan digoreng.</p>
            @elseif($produk->id === 8)
            <img src="{{ asset('images/nasi ayam.jpg') }}" alt="Nasi Ayam">
            <h1>Nasi Ayam</h1>
            <p>Harga: Rp.10.000</p>
            <p>Stok: 50</p>
            <p>Nasi Ayam adalah hidangan nasi yang disajikan dengan potongan ayam dan saus spesial.</p>
            @elseif($produk->id === 9)
            <img src="{{ asset('images/bala-bala.jpg') }}" alt="Bala-bala">
            <h1>Bala-bala</h1>
            <p>Harga: Rp.1.000</p>
            <p>Stok: 50</p>
            <p>Bala-bala adalah gorengan sayuran yang populer di Indonesia.</p>
        @else
           
        @endif
        <button onclick="window.history.back()">Kembali</button>
    </div>
</body>
</html>
