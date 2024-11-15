<head>
    <style>
        body {
            text-align: center;
            margin-top: 140px;
            background-color: #f4f4f4;
        }

        .car-item {
            width: 300px; /* Cố định chiều rộng cho car item */
            border: 3px solid #ccc; /* Đường viền cho mỗi thẻ xe */
            border-radius: 8px; /* Bo tròn các góc */
            overflow: hidden; /* Giấu phần thừa */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Đổ bóng nhẹ cho thẻ xe */
            transition: transform 0.3s; /* Hiệu ứng chuyển động */
            margin: 20px auto; /* Căn giữa */
        }

        .car-item:hover {
            transform: translateY(-5px); /* Hiệu ứng nhấn mạnh khi hover */
        }

        .car-item img {
            width: 100%; /* Đảm bảo hình ảnh rộng đầy đủ thẻ */
            height: 150px; /* Thiết lập chiều cao cố định cho hình ảnh */
            object-fit: cover; /* Đảm bảo hình ảnh không bị méo và lấp đầy vùng chứa */
        }

        .car-details {
            padding: 15px;
        }

        .car-title {
            font-size: 1.5em;
            margin: 0 0 10px;
            color: #ffeb3b;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        }

        .car-price {
            color: #ff9800;
            font-size: 1.2em;
            margin: 0;
        }

        .car-description {
            color: white;
            margin: 10px 0;
        }

        .buy-button {
            background-color: #ff5722;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            width: 100%;
            height: 35px;
            margin-top: 10px;
        }

        img {
            width: 100%;
            height: auto;
        }

    </style>
</head>
<body>
    <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM new_cars WHERE id = $id";
        $result = $conn->query($query);
        $item = mysqli_fetch_array($result);
    ?>

    <h1>Chi tiết sản phẩm</h1>
    <section class="car-item">
        <img src="<?=$item['image']?>" alt="<?=$item['name']?>">
        <section class="car-details">
            <div class="car-title"><?=$item['name']?></div>
            <div class="car-price"><?=number_format($item['price'], 0, ',', '.') ?> VND</div>
            <div class="car-description"><?=$item['description']?></div>
            <input type="button" class="buy-button" value="Đặt mua" onclick="location='?option=cart&action=add&id=<?=$item['id']?>';">
        </section>
    </section>    
</body>
