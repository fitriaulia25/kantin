<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Kantin</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <style>
.product-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.product-card {
    border: 1px solid #ccc;
    padding: 20px;
    width: 200px;
    text-align: center;
}

#product-detail {
    margin-top: 20px;
    padding: 20px;
    border: 1px solid #ccc;
}

#product-detail img {
    width: 100px;
    height: auto;
}
</style>
    <div class="sidebar">
        <!-- Menu Sidebar -->
        @include('partials.sidebar')
    </div>
    <div class="content">
        <!-- Daftar Produk -->
        <div class="product-list">
            @foreach ($products as $product)
            <div class="menu-item">
                <img src="{{ asset('images/dimsum.jpg') }}" alt="dimsum">
                <div class="details">
                    <h3>dimsum</h3>
                    <p>Rp 1.500</p>
                    <button class="detail-btn" onclick="showDetails('dimsum', 'Kue soes yang lembut dengan isian krim.','images/dimsum.jpg')">Detail</button>
                    <button onclick="addToCart('dimsum', 1500)">Tambah</button>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Detail Produk -->
        <div id="product-detail" style="display: none;">
            <h2 id="detail-name"></h2>
            <img id="detail-image" src="" alt="">
            <p id="detail-price"></p>
            <p id="detail-stock"></p>
            <p id="detail-information"></p>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.detail-btn').on('click', function() {
                var productId = $(this).data('id');
    
                $.ajax({
                    url: '/product/' + productId,
                    method: 'GET',
                    success: function(data) {
                        $('#detail-name').text(data.name);
                        $('#detail-image').attr('src', '/images/' + data.image);
                        $('#detail-price').text('Harga: Rp.' + data.price.toLocaleString());
                        $('#detail-stock').text('Stok: ' + data.stock);
                        $('#detail-information').text(data.information);
    
                        $('#product-detail').show();
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error: ' + status + error);
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>
</html>
