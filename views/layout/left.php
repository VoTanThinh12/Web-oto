<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            
        }

        /* Thùng chứa bên trái */
        .left-sidebar {
            padding: 20px;
            /* background:#e0f7f7; */
            background:                 rgb(79, 3, 20)                              ;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            
        }

        /* Danh sách các thương hiệu */
        .brand-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }

        .brand-list a {
            color: #0066cc;
            text-decoration: none;
            font-size: 18px;
            padding: 8px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .brand-list a:hover {
            background-color: #0066cc;
            color: white;
        }

        /* Thanh tìm kiếm */
        .search-box {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }

        .search-box input {
            width: 100%; /* Tăng kích thước ô tìm kiếm */
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            transition: background-color 0.3s ease;
        }

        .search-box input:focus {
            background-color: #f0f8ff;
        }

        .search-box button {
            background-color: #0066cc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 12px 15px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .search-box button:hover {
            background-color: #005bb5;
        }

        /* Phần tin tức mới */
        .recent-news {
            margin-bottom: 20px;
        }

        .recent-news h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
        }

        .recent-news ul {
            padding-left: 0;
            list-style: none;
        }

        .recent-news li {
            margin-bottom: 10px;
        }

        .recent-news li a {
            color: #0066cc;
            text-decoration: none;
            font-size: 16px;
        }

        .recent-news li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
$query = "SELECT * FROM brand WHERE status = 1";
$result = $conn->query($query);
?>
<div class="left-sidebar">
    <!-- Danh sách thương hiệu -->
    <div class="brand-list">
        <?php foreach ($result as $item): ?>
            <a href="javascript:void(0);" onclick="scrollToBrand('<?=$item['name']?>')"><?=$item['name']?></a>
        <?php endforeach; ?>
    </div>

    <!-- Thanh tìm kiếm -->
    <div class="search-box">
        <input type="text" placeholder="Tìm kiếm...">
        <button>Tìm kiếm</button>
    </div>

   <!-- Tin tức mới -->
   <div class="recent-news">
        <h3>Thông tin mới nhất</h3>
        <ul>
            <li><a href="#">Khuyến mãi đặc biệt dịp cuối năm cho các mẫu xe hạng sang</a></li>
            <li><a href="#">Top 5 xe ô tô tiết kiệm nhiên liệu nhất năm 2024</a></li>
            <li><a href="#">Top 5 xe ô tô tiết kiệm nhiên liệu nhất năm 2024</a></li>
        </ul>
    </div>
</div>
</body>
</html>
