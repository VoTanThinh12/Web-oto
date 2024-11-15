<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $query = "SELECT * FROM brand WHERE name='$name'";
    if (mysqli_num_rows($conn->query($query)) != 0) {
        $alert = "Tên hãng đã tồn tại!";
    } else {
        $status = $_POST['status'];
        $description = $_POST['description'];
        $query = "INSERT INTO brand(name, status, description) VALUES('$name', '$status', '$description')";
        $conn->query($query);
        header('location:?option=brand');
    }
}
?>

<div class="container mt-5">
    <h1 class="text-center">Thêm Hãng Sản Xuất</h1>
    <section class="text-danger text-center"><?= isset($alert) ? $alert : "" ?></section>
    <section class="col-md-6 mx-auto">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Tên Hãng</label>
                <input name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mô Tả</label>
                <input name="description" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Trạng Thái</label><br>
                <input type="radio" name="status" value="1" checked> Active
                <input type="radio" name="status" value="0"> Inactive
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a href="?option=brand" class="btn btn-secondary">Quay Lại</a>
        </form>
    </section>
</div>
