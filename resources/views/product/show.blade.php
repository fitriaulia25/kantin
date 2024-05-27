<!DOCTYPE html>
<html>
<head>
    <title>Product Detail</title>
    <style>
        .product-container {
            width: 50%;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .product-container img {
            width: 100%;
            max-width: 300px;
            height: auto;
            margin-bottom: 20px;
        }
        .product-details {
            margin-bottom: 20px;
        }
        .product-details label {
            display: block;
            font-weight: bold;
        }
        .product-details span {
            display: block;
            margin-bottom: 10px;
        }
        .product-buy button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .product-buy button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<div class="product-container">
    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
    <div class="product-details">
        <label>Name:</label>
        <span>{{ $product->name }}</span>
        <label>Price:</label>
        <span>${{ number_format($product->price, 2) }}</span>
        <label>Stock:</label>
        <span>{{ $product->stock }}</span>
        <label>Information:</label>
        <span>{{ $product->information }}</span>
    </div>
    <div class="product-buy">
        <button type="button">Buy</button>
    </div>
</div>
</body>
</html>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>${{ number_format($product->price, 2) }}</td>
            <td>{{ $product->stock }}</td>
            <td>
                <a href="{{ route('product.show', $product->id) }}">View Details</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

