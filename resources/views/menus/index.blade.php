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
            background-color: #DDDDDD;
            display: flex;
        }
        .dashboard {
            width: 25%;
            background-color: #BED7DC;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: -3px;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: calc(100vh - 10px); 
        }
        .dashboard h2 {
            margin-bottom: 20px;
        }
        .dashboard p {
            margin: 10px 0;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
            width: 75%; /* Adjust width to account for dashboard */
        }
        .search-bar {
            width: 80%;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
        }
        .search-bar input {
            width: 70%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #000;
        }
        .search-bar button {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #000;
            margin-left: 10px;
            cursor: pointer;
        }
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            width: 80%;
            margin-bottom: 20px;
        }
        .menu-item {
            background-color: white;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: box-shadow 0.3s ease;
        }
        .menu-item:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .menu-item img {
            max-width: 100%;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            object-fit: cover;
            height: 150px;
            margin-bottom: 10px;
        }
        .menu-item img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .menu-item h3 {
            margin: 10px 0;
        }
        .menu-item p {
            margin: 5px 0;
            font-size: 16px;
            color: #666;
        }
        .menu-item button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .cart-footer {
            margin-top: 20px;
            width: 80%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h2></h2>
        <p>menu makanan</p>
        <!-- Add more dashboard content as needed -->
    </div>
    <div class="container">
        <h1>Kantin wikrama</h1>
        <div class="search-bar">
            <input type="text" placeholder="Ketik disini">
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/search.png" alt="search icon"/></button>
        </div>
        <div class="menu-grid">
            @foreach ($menus as $menu)
            <div class="menu-item">
                <img src="{{ asset('img/risol.jpg') }}" alt="{{ risol }}">
                <h3>{{ risol }}</h3>
                <p>Rp.3000</p>
                <button>Tambah ke Keranjang</button>
                <img src="path_to_your_image.jpg" alt="Your Image" width="100" height="100">
            </div>
            @endforeach
        </div>
        <div class="cart-footer">
            <p>0 Item</p>
            <p>Total: Rp. 0,00</p>
        </div>
    </div>
</body>
</html>
