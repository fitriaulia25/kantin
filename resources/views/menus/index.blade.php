<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F0EBE3;
            margin: 0;
        }

        .sidebar {
            background-color: #EADBC8;
            color: #000;
            padding: 20px;
            height: 100vh;
            width: 200px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .search-bar {
            width: 100%;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            position: relative;
        }

        .search-bar input {
            width: 80%;
            padding: 10px;
            border-radius: 20px;
            border: 1px solid #000;
        }

        .search-bar button {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
        }

        .main-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card {
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 200px;
        }

        .card img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .card button {
            background-color: #28a745;
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
    <div class="layout">
        <div class="sidebar">
            <h2>menu makanan</h2>
        </div>
        <div class="container">
            <div class="search-bar">
                <input type="text" placeholder="Ketik disini">
                <button><img src="https://img.icons8.com/ios-glyphs/30/000000/search.png" alt="search icon"/></button>
            </div>
            <div class="main-content">
                <div class="card">
                    <img src="{{ asset('images/dimsum.jpg') }}" alt="dimsum">
                    <p>dimsum</p>
                    <p>Harga : Rp.1.500</p>
                    <button>Tambah</button>
                </div>
                <div class="card">
                    <img src="{{ asset('images/hotdog.jpg') }}" alt="hotdog">
                    <p>Cireng Isi</p>
                    <p>Harga : Rp.2.500</p>
                    <button>Tambah</button>
                </div>                <div class="card">
                    <img src="{{ asset('images/hotdog.jpg') }}" alt="hotdog">
                    <p>Cireng Isi</p>
                    <p>Harga : Rp.2.500</p>
                    <button>Tambah</button>
                </div>
                <div class="card">
                    <img src="{{ asset('images/kebab.jpg') }}" alt="kebab">
                    <p>kebeb</p>
                    <p>Harga : Rp.2.000</p>
                    <button>Tambah</button>
                </div>
                <div class="card">
                    <img src="{{ asset('images/martabak mini.jpg') }}" alt="martabak mini">
                    <p>martabak mini</p>
                    <p>Harga : Rp.3.000</p>
                    <button>Tambah</button>
                </div>
                <div class="card">
                    <img src="{{ asset('images/onigiri.jpg') }}" alt="onigiri">
                    <p>Onigiri</p>
                    <p>Harga : Rp.3.000</p>
                    <button>Tambah</button>
                </div>
                <div class="card">        
                    <img src="{{ asset('images/putu ayu.jpg') }}" alt="putu ayu">
                    <p>putu ayu</p>
                    <p>Harga : Rp.1.000</p>
                    <button>Tambah</button>
                </div>
                <div class="card">
                    <img src="{{ asset('images/risol.jpg') }}" alt="risol">
                    <p>risol</p>
                    <p>Harga : Rp.3.000</p>
                    <button>Tambah</button>
                </div>
                <div class="card">
                    <img src="{{ asset('images/nasi ayam.jpg') }}" alt="nasi ayam">
                    <p>nasi ayam</p>
                    <p>Harga : Rp.10.000</p>
                    <button>Tambah</button>
                </div>
                <div class="card">
                    <img src="{{ asset('images/bala-bala.jpg') }}" alt="bala-bala">
                    <p>bala-bala</p>
                    <p>Harga : Rp.1.000</p>  
                    <button>Tambah</button> 
                </div>      
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>

    @if ($message = Session::get('success'))
    <div>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    </main>
    </body>
    </html>

