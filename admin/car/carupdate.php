<?php
$car = mysqli_fetch_array($conn->query("SELECT * FROM new_cars WHERE id=" . $_GET['id']));
$brand = $conn->query("SELECT * FROM brand");

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $query = "SELECT * FROM new_cars WHERE name='$name' AND id!=" . $car['id'];
    if (mysqli_num_rows($conn->query($query)) != 0) {
        $alert = "Tên xe bạn vừa nhập đã tồn tại";
    } else {
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $description = $_POST['description'];
        $image = $_POST['image'];

        $query = "UPDATE new_cars SET name='$name', brand='$brand', price='$price', image='$image', status='$status', description='$description' WHERE id=" . $car['id'];
        $conn->query($query);
        header('location:?option=car');
    }
}
?>

<div class="container mt-5">
    <h1 class="text-center">Cập Nhật Xe</h1>
    <section class="text-danger text-center"><?= isset($alert) ? $alert : "" ?></section>
    <section class="col-md-6 mx-auto">
        <form method="post">
            <div class="mb-3">
                <label>Hãng</label>
                <select name="brand" class="form-control">
                    <option hidden>--Chọn 1 hãng--</option>
                    <?php foreach ($brand as $item): ?>
                        <option value="<?= $item['name'] ?>" <?= $item['name'] == $car['brand'] ? 'selected' : '' ?>><?= $item['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label>Tên Xe</label>
                <input name="name" class="form-control" value="<?= $car['name'] ?>" required>
            </div>
            <div class="mb-3">
                <label>Giá</label>
                <input type="number" name="price" class="form-control" value="<?= $car['price'] ?>" required>
            </div>
            <div class="mb-3">
                <label>Ảnh (URL)</label>
                <img src="<?= $car['image'] ?>" alt="<?= $car['name'] ?>" class="img-thumbnail mb-3">
                <input name="image" class="form-control" value="<?= $car['image'] ?>" required>
            </div>
            <div class="mb-3">
                <label>Mô Tả</label>
                <textarea name="description" class="form-control" rows="5"><?= $car['description'] ?></textarea>
            </div>
            <div class="mb-3">
                <label>Trạng Thái</label><br>
                <input type="radio" name="status" value="1" <?= $car['status'] == 1 ? 'checked' : '' ?>> Active
                <input type="radio" name="status" value="0" <?= $car['status'] == 0 ? 'checked' : '' ?>> Unactive
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
            <a href="?option=car" class="btn btn-secondary">Quay Lại</a>
        </form>
    </section>
</div>
