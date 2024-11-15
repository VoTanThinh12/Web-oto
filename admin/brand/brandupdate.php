<?php
$name = $_GET['name'];
$query = "SELECT * FROM brand WHERE name='$name'";
$brand = mysqli_fetch_array($conn->query($query));

if (isset($_POST['name'])) {
    $newName = $_POST['name'];
    $checkQuery = "SELECT * FROM brand WHERE name='$newName' AND name != '" . $brand['name'] . "'";
    if (mysqli_num_rows($conn->query($checkQuery)) != 0) {
        $alert = "Tên hãng đã tồn tại!";
    } else {
        $status = $_POST['status'];
        $description = $_POST['description'];
        $updateQuery = "UPDATE brand SET name='$newName', status='$status', description='$description' WHERE name='" . $brand['name'] . "'";
        $conn->query($updateQuery);
        header('location:?option=brand');
    }
}
?>

<div class="container mt-5">
    <h1 class="text-center">Cập Nhật Hãng Sản Xuất</h1>
    <section class="text-danger text-center"><?= isset($alert) ? $alert : "" ?></section>
    <section class="col-md-6 mx-auto">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Tên Hãng</label>
                <input value="<?= $brand['name'] ?>" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mô Tả</label>
                <input value="<?= $brand['description'] ?>" name="description" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Trạng Thái</label><br>
                <input type="radio" name="status" value="1" <?= $brand['status'] == 1 ? 'checked' : '' ?>> Active
                <input type="radio" name="status" value="0" <?= $brand['status'] == 0 ? 'checked' : '' ?>> Inactive
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
            <a href="?option=brand" class="btn btn-secondary">Quay Lại</a>
        </form>
    </section>
</div>
