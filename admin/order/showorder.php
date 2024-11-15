<head>
    <style>
        td img {
            max-width: 100px; /* Chiều rộng tối đa cho hình ảnh */
            border-radius: 5px; /* Bo tròn các góc cho hình ảnh */
        }
    </style>
</head>

<?php
// Kiểm tra và lấy giá trị `id` và `orderid`
if (isset($_GET['id']) && isset($_GET['orderid'])) {
    $id = intval($_GET['id']);
    $orderid = intval($_GET['orderid']);
    $conn->query("DELETE FROM orderdetail WHERE orderid = $orderid");
    $conn->query("DELETE FROM orders WHERE id = $id");
    header("Location: ?option=order&status=4");
    exit();
}

$status = isset($_GET['status']) ? intval($_GET['status']) : 1;

$query = "SELECT * FROM orders WHERE status = $status";
$result = $conn->query($query);

if (!$result) {
    echo "Lỗi trong truy vấn: " . $conn->error;
    exit();
}
?>

<h1>ĐƠN HÀNG <?= $status == 1 ? 'CHƯA XỬ LÝ' : ($status == 2 ? 'ĐANG XỬ LÝ' : ($status == 3 ? 'ĐÃ XỬ LÝ' : 'HỦY')) ?></h1>

<table class='table table-bordered'>
    <thead>
        <tr>
            <th>STT</th>
            <th>ID</th>
            <th>Ngày tạo</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $count = 1;
        if ($result->num_rows > 0):
            foreach ($result as $item): 
        ?>
            <tr>
                <td><?= $count++ ?></td>
                <td><?= $item['id'] ?></td>
                <td><?= $item['orderdate'] ?></td>
                <td>
                    <a class="btn btn-sm btn-info" href="?option=orderdetail&id=<?= $item['id'] ?>">Detail</a>
                    <a class="btn btn-sm btn-danger" style="display:<?= $status == 4 ? '' : 'none' ?>" 
                       onclick="return confirm('Are you sure?')" 
                       href="?option=order&id=<?= $item['id'] ?>&orderid=<?= $item['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php 
            endforeach; 
        else:
            echo "<tr><td colspan='4'>Không có đơn hàng nào.</td></tr>";
        endif;
        ?>
    </tbody>
</table>
