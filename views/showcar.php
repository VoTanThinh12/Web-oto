<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <style>
        body {
            margin-top: 140px;
            text-align: center;
            background-color: #000;
        }

        .car-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            justify-content: center;
            margin-top: 50px;
        }

        .car-item {
            background-color: rgba(255, 255, 255, 0.1);
            border: 3px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            height: 340px;
            color: white;
        }

        .car-item:hover {
            transform: translateY(-5px);
        }

        .car-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .car-details {
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 150px;
        }

        .car-title {
            font-size: 1em;
            margin: 0 0 5px;
            color: #ffeb3b;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            height: 2.4em;
        }

        .car-price {
            color: #ff9800;
            font-size: 1.2em;
            margin: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            height: 1.2em;
        }

        .car-description {
            font-size: 0.9em; /* Kích thước chữ cho mô tả */
            color: #ffffff; /* Màu chữ cho mô tả */
            margin: 5px 0; /* Khoảng cách trên và dưới cho mô tả */
            overflow: hidden;
            height: 3em; /* Đảm bảo không chiếm quá nhiều không gian */
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2; /* Giới hạn số dòng hiển thị */
        }

        .car-buy {
            background-color: #ff5722;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9em;
            width: 100%;
            height: 30px;
            margin-top: auto;
        }

    </style>
</head>
<body>

<h1 style ="color:white ;font-size:40px" >Chi tiết sản phẩm</h1>
<section class="car-list">
    <?php
    $query = "SELECT * FROM new_cars WHERE status = 1";
    if (isset($_GET['keyword'])) {
        $query .= " AND name LIKE '%" . $_GET['keyword'] . "%'";
    } elseif (isset($_GET['range'])) {
        $query .= " AND price <= " . $_GET['range'];
    }
    $result = $conn->query($query);

    foreach ($result as $item): ?>
        <div class="car-item">
            <a href="?option=cardetail&id=<?= $item['id'] ?>">
                <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
            </a>
            <div class="car-details">
                <h3 class="car-title"><?= $item['name'] ?></h3>
                <p class="car-description"><?= $item['description'] ?></p> <!-- Mô tả xe -->
                <p class="car-price"><?= number_format($item['price'], 0, ',', '.') ?> VNĐ</p>
                <input type="button" class="car-buy" value="Đặt mua" onclick="location='?option=cart&action=add&id=<?= $item['id'] ?>';">
            </div>
        </div>
    <?php endforeach; ?>
</section>

</body>
</html>
