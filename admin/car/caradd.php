<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $query = "SELECT * FROM new_cars WHERE name='$name'";
    if (mysqli_num_rows($conn->query($query)) != 0) {
        $alert = "Tên xe bạn vừa nhập đã tồn tại";
    } else {
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $description = $_POST['description'];
        $image = $_POST['image'];

        $query = "INSERT INTO new_cars(name, brand, price, image, status, description) 
                  VALUES('$name', '$brand', '$price', '$image', '$status', '$description')";
        $conn->query($query);
        header('location:?option=car');
    }
}

$brand = $conn->query("SELECT * FROM brand");
?>

<div class="container mt-5">
    <h1 class="text-center">Thêm Xe</h1>
    <section class="text-danger text-center"><?= isset($alert) ? $alert : "" ?></section>
    <section class="col-md-6 mx-auto">
        <form method="post">
            <div class="mb-3">
                <label>Hãng</label>
                <select name="brand" class="form-control" required>
                    <option hidden>--Chọn 1 hãng--</option>
                    <?php foreach ($brand as $item): ?>
                        <option value="<?= $item['name'] ?>"><?= $item['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label>Tên Xe</label>
                <input name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Giá</label>
                <input type="number" name="price" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Ảnh (URL)</label>
                <input name="image" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Mô Tả</label>
                <textarea name="description" class="form-control" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label>Trạng Thái</label><br>
                <input type="radio" name="status" value="1" checked> Active
                <input type="radio" name="status" value="0"> Unactive
            </div>
            <button type="submit" class="btn btn-primary">Thêm Xe</button>
            <a href="?option=car" class="btn btn-secondary">Quay Lại</a>
        </form>
    </section>
</div>
