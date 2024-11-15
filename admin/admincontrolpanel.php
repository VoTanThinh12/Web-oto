<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
        }
        .sidebar-sticky {
            padding-top: 20px;
        }
        .nav-link {
            color: #ddd;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            background-color: #495057;
            color: #fff;
        }
        .main {
            padding-top: 20px;
        }
        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .badge {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
<?php
// Đếm số lượng đơn hàng theo trạng thái và phản hồi
$chuaxuly = mysqli_num_rows($conn->query("SELECT * FROM orders WHERE status = 1"));
$dangxuly = mysqli_num_rows($conn->query("SELECT * FROM orders WHERE status = 2"));
$daxuly = mysqli_num_rows($conn->query("SELECT * FROM orders WHERE status = 3"));
$huy = mysqli_num_rows($conn->query("SELECT * FROM orders WHERE status = 4"));
$phanhoi = mysqli_num_rows($conn->query("SELECT * FROM feedback"));
?>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
            <div class="sidebar-sticky">
                <h5 class="text-light p-3">Hello, <?= $_SESSION['admin'] ?></h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="?option=brand">Hãng sản xuất</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="?option=car">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="?option=order">Đơn hàng</a>
                        <ul class="nav flex-column ms-3">
                            <li><a class="nav-link text-white" href="?option=order&status=1">Chưa xử lý <span class="badge"><?= $chuaxuly ?></span></a></li>
                            <li><a class="nav-link text-white" href="?option=order&status=2">Đang xử lý <span class="badge"><?= $dangxuly ?></span></a></li>
                            <li><a class="nav-link text-white" href="?option=order&status=3">Đã xử lý <span class="badge"><?= $daxuly ?></span></a></li>
                            <li><a class="nav-link text-white" href="?option=order&status=4">Hủy <span class="badge"><?= $huy ?></span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="?option=feedback">Phản hồi <span class="badge"><?= $phanhoi ?></span></a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="btn btn-danger w-100" href="?option=logout">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main content area -->
        <main class="col-md-10 ms-sm-auto px-4">
            <h2 class="mt-4" align="center">Admin Control Panel</h2>
            <div class="content">
                <?php
                if (isset($_GET['option'])) {
                    switch ($_GET['option']) {
                        case 'logout':
                            unset($_SESSION['admin']);
                            header("Location: .");
                            break;
                        case 'brand':
                            include "brand/showbrand.php";
                            break;
                        case 'car':
                            include "car/showcar.php";
                            break;
                        case 'order':
                            include "order/showorder.php";
                            break;
                        case 'brandadd':
                            include "brand/brandadd.php";
                            break;
                        case 'caradd':
                            include "car/caradd.php";
                            break;
                        case 'brandupdate':
                            include "brand/brandupdate.php";
                            break;
                        case 'carupdate':
                            include "car/carupdate.php";
                            break;
                        case 'orderdetail':
                            include "order/orderdetail.php";
                            break;
                        case 'feedback':
                            include "feedback/feedback.php";
                            break;
                    }
                }
                ?>
            </div>
        </main>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
