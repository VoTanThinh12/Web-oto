
<?php
// Kiểm tra kết nối cơ sở dữ liệu trước khi thực hiện truy vấn
if (!$conn) {
    die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Xử lý xóa xe nếu có
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM orderdetail WHERE carid='$id'";
    $car = $conn->query($query);

    if ($car && mysqli_num_rows($car) != 0) {
        $conn->query("UPDATE new_cars SET status = 0 WHERE id = '$id'");
    } else {
        $conn->query("DELETE FROM new_cars WHERE id = '$id'");
    }
}

// Lấy danh sách xe ô tô từ cơ sở dữ liệu
$query = "SELECT * FROM new_cars";
$result = $conn->query($query);

// Kiểm tra nếu truy vấn không thành công
if (!$result) {
    echo "<div class='text-danger text-center'>Lỗi khi truy vấn cơ sở dữ liệu: " . mysqli_error($conn) . "</div>";
    $result = [];
}
?>

<!-- Giao diện bảng danh sách xe ô tô -->
<div class="container mt-5">
    <h1 class="text-center mb-4">Danh Sách Xe Ô Tô</h1>
    <div class="text-center mb-3">
        <a href="?option=caradd" class="btn btn-success">Thêm Xe</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th class="align-middle" style="width: 5%;">STT</th>
                    <th class="align-middle" style="width: 5%;">ID</th>
                    <th class="align-middle" style="width: 15%;">Tên Xe</th>
                    <th class="align-middle" style="width: 10%;">Giá</th>
                    <th class="align-middle" style="width: 10%;">Ảnh</th>
                    <th class="align-middle" style="width: 10%;">Trạng Thái</th>
                    <th class="align-middle" style="width: 30%;">Mô Tả</th>
                    <th class="align-middle" style="width: 15%;">Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                <?php if ($result && mysqli_num_rows($result) > 0): ?>
                    <?php foreach ($result as $item): ?>
                        <tr>
                            <td><?= $count++ ?></td>
                            <td><?= $item['id'] ?></td>
                            <td><?= $item['name'] ?></td>
                            <td><?= number_format($item['price'], 0, ',', '.') ?>₫</td>
                            <td><img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>" class="img-thumbnail" style="max-width: 80px;"></td>
                            <td style="width: 10%;">
                                <span class="badge bg-<?= $item['status'] == 1 ? 'success' : 'secondary' ?>">
                                    <?= $item['status'] == 1 ? 'Active' : 'Inactive' ?>
                                </span>
                            </td>
                            <td class="text-start"><?= $item['description'] ?></td>
                            <td style="width: 15%;">
                                <a class="btn btn-info btn-sm" href="?option=carupdate&id=<?= $item['id'] ?>">Cập Nhật</a>
                                <a class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="?option=car&id=<?= $item['id'] ?>">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8">Không có xe nào trong danh sách.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
