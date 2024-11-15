<style>
    .table th, .table td {
    vertical-align: middle !important;
    text-align: center;
}

.table td.text-start {
    text-align: left !important;
}

.table th {
    background-color: #343a40;
    color: #fff;
}

.table td a {
    margin-right: 5px;
}

</style>
<?php
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $carbrand = "SELECT * FROM new_cars WHERE brand='$name'";
    $car = $conn->query($carbrand);
    
    if (mysqli_num_rows($car) != 0) {
        // Nếu có xe thuộc hãng này, chỉ cập nhật trạng thái
        $conn->query("UPDATE brand SET status = 0 WHERE name = '$name'");
    } else {
        // Nếu không có xe, xóa hãng sản xuất
        $conn->query("DELETE FROM brand WHERE name = '$name'");
    }
}

$query = "SELECT * FROM brand";
$result = $conn->query($query);
?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Quản lý Hãng Sản Xuất</h1>
    <div class="text-center mb-3">
        <a href="?option=brandadd" class="btn btn-success">Thêm Hãng</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th style="width: 5%;">STT</th>
                    <th style="width: 15%;">Tên Hãng</th>
                    <th style="width: 10%;">Trạng Thái</th>
                    <th style="width: 50%;">Mô Tả</th>
                    <th style="width: 20%;">Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                <?php if ($result && mysqli_num_rows($result) > 0): ?>
                    <?php foreach ($result as $item): ?>
                        <tr>
                            <td><?= $count++ ?></td>
                            <td><?= $item['name'] ?></td>
                            <td>
                                <span class="badge bg-<?= $item['status'] == 1 ? 'success' : 'secondary' ?>">
                                    <?= $item['status'] == 1 ? 'Active' : 'Inactive' ?>
                                </span>
                            </td>
                            <td class="text-start"><?= $item['description'] ?></td>
                            <td>
                                <a class="btn btn-info btn-sm" href="?option=brandupdate&name=<?= $item['name'] ?>">Cập Nhật</a>
                                <a class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="?option=brand&name=<?= $item['name'] ?>">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">Không có hãng sản xuất nào.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
