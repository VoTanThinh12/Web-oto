<?php $id = $_GET['id'];?>
<?php 
    if(isset($_POST['status'])){
        $conn->query("UPDATE orders SET status = " . $_POST['status'] . " WHERE id = $id");

    }

?>



<?php

$query = "SELECT 
            a.fullname AS fullnamemember, 
            a.mobile AS mobilemember, 
            a.address AS addressmember, 
            a.email AS emailmember,
            b.id AS order_id, 
            b.name AS name, 
            b.mobile AS mobile, 
            b.address AS address, 
            b.email AS email, 
            b.note AS note,
            b.orderdate AS orderdate,
            b.status AS status,  /* Lấy trường `status` từ `orders` */
            c.name AS nameordermethod
          FROM member a
          LEFT JOIN orders b ON a.id = b.memberid  
          JOIN ordermethod c ON b.ordermethodid = c.id
          WHERE b.id = $id";

// Thực hiện truy vấn
$result = $conn->query($query);

// Kiểm tra kết quả và lấy dữ liệu
if ($result && $result->num_rows > 0) {
    $orders = $result->fetch_assoc(); // Lấy hàng kết quả dưới dạng mảng kết hợp
} else {
    echo "Không tìm thấy đơn hàng với mã ID: " . $id;
    exit;
}
?>

<h1>CHI TIẾT ĐƠN HÀNG<br>
(MÃ ĐƠN HÀNG: <?= $orders['order_id'] ?>)
</h1>

<h2>NGÀY TẠO ĐƠN</h2>
<p><?= $orders['orderdate'] ?></p>

<h2>THÔNG TIN NGƯỜI ĐẶT HÀNG</h2>
<table class="table">
    <tbody>
        <tr>
            <td>Họ và tên</td>
            <td><?= $orders['fullnamemember'] ?></td>
        </tr>
        <tr>
            <td>Điện thoại</td>
            <td><?= $orders['mobilemember'] ?></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><?= $orders['addressmember'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $orders['emailmember'] ?></td>
        </tr>
    </tbody>
</table>

<h2>THÔNG TIN NGƯỜI NHẬN HÀNG</h2>
<table class="table">
    <tbody>
        <tr>
            <td>Họ và tên</td>
            <td><?= $orders['name'] ?></td>
        </tr>
        <tr>
            <td>Điện thoại</td>
            <td><?= $orders['mobile'] ?></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><?= $orders['address'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $orders['email'] ?></td>
        </tr>
        <tr>
            <td>Note</td>
            <td><?= $orders['note'] ?></td>
        </tr>
    </tbody>
</table>

<h2>PHƯƠNG THỨC THANH TOÁN</h2>
<section><?= $orders['nameordermethod'] ?></section>

<?php
// Truy vấn chi tiết sản phẩm
$query = "SELECT 
            b.number, 
            b.price, 
            c.name AS product_name, 
            c.image 
          FROM orderdetail b 
          LEFT JOIN new_cars c ON c.id = b.carid 
          WHERE b.orderid = $id";
$orderdetail = $conn->query($query);

if (!$orderdetail || $orderdetail->num_rows == 0) {
    echo "<p>Không tìm thấy sản phẩm nào trong đơn hàng này.</p>";
}
?>

<form action="" method="POST">
<h2>CÁC SẢN PHẨM ĐẶT MUA</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Số lượng</th>
        </tr>
    </thead>
    <tbody>
        <?php $count = 1; ?>
        <?php while ($item = $orderdetail->fetch_assoc()): ?>
            <tr>
                <td><?= $count++ ?></td>
                <td><?= $item['product_name'] ?></td>
                <td><img src="<?= $item['image'] ?>" width="100" alt="<?= $item['product_name'] ?>"></td>
                <td><?= number_format($item['price'], 0, ',', '.') ?> VND</td>
                <td><?= $item['number'] ?></td>
            </tr>
        <?php endwhile; ?>            
    </tbody>
</table>

<h2>TRẠNG THÁI ĐƠN HÀNG</h2>
<p style="display:<?=$orders['status']==2||$orders['status']==3 ?'none':''?> "><input type="radio" name="status" value="1" <?= $orders['status'] == 1 ? "checked" : "" ?>> Chưa xử lý</p>
<p style="display:<?=$orders['status']==3 ?'none':''?> "><input type="radio" name="status" value="2" <?= $orders['status'] == 2 ? "checked" : "" ?>> Đang xử lý</p>
<p><input type="radio" name="status" value="3" <?= $orders['status'] == 3 ? "checked" : "" ?>> Đã xử lý</p>
<p style="display:<?=$orders['status']==3 ?'none':''?>"> <input type="radio" name="status" value="4" <?= $orders['status'] == 4 ? "checked" : "" ?>> Hủy</p>
<section>
    <input type="submit" value="Update đơn hàng" class="btn btn-primary" <?=$orders['status']==3?'disabled':''?>>
    <a class="btn btn-outline-secondary" href="?option=order&status=1">&lt;&lt;Back</a>
</section>
</form>
