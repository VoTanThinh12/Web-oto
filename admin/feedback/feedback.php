<?php
$query = "SELECT * FROM feedback";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Phản Hồi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .feedback-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .table thead th {
            background-color: #007bff;
            color: #fff;
            text-align: center;
        }
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
        .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="feedback-card">
            <h2 class="text-center mb-4">Danh Sách Phản Hồi</h2>
            <?php if ($result && $result->num_rows > 0): ?>
                <table class="table table-bordered table-hover align-middle">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>Nội dung</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        <?php foreach ($result as $item): ?>
                            <tr>
                                <td class="text-center"><?= $count++ ?></td>
                                <td><?= htmlspecialchars($item['name']) ?></td>
                                <td><?= htmlspecialchars($item['email']) ?></td>
                                <td><?= html_entity_decode($item['message']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="alert alert-info text-center">Không có phản hồi nào.</div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
