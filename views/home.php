
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ - Bán Ô Tô</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style>
    body {
    text-align: center; /* Căn giữa các phần tử theo chiều ngang */
    margin-top : 140px;
    }
.content {
  width: 100%; /* Chiều rộng tổng thể */
  /* margin: 20px auto; Tự động căn giữa theo chiều ngang */
   /* Khoảng cách trên của nội dung */
}
.swiper-container {
  /* padding-top: 150px;  */
  width: 100%; /* Chiều rộng đầy đủ cho slider */
  height: 350px; /* Chiều cao cho slider */
  position: relative; /* Để có thể đặt các phần tử khác bên trong */
  overflow: hidden; /* Prevent scrollbar */
}

.swiper-button-next,
.swiper-button-prev {
  width: 30px; /* Rút ngắn chiều rộng của mũi tên */
  height: 30px; /* Rút ngắn chiều cao của mũi tên */
}

.swiper-button-next {
  right: 10px; /* Đặt vị trí bên phải */
}

.swiper-button-prev {
  left: 10px; /* Đặt vị trí bên trái */
}

.swiper-pagination {
  position: absolute; /* Đặt vị trí tuyệt đối trong slider */
  bottom: 10px; /* Đặt ở dưới cùng */
  left: 0; /* Đặt ở trái */
  right: 0; /* Đặt ở phải */
  display: flex; /* Sử dụng flexbox */
  justify-content: center; /* Căn giữa các chấm */
}

.car-list {
  display: grid;
  grid-template-columns: repeat(
    auto-fill,
    minmax(200px, 1fr)
  ); /* Lưới tự động điều chỉnh số cột */
  gap: 20px; /* Khoảng cách giữa các thẻ xe */
}

.car-item {
  border: 3px solid #ccc; /* Đường viền cho mỗi thẻ xe */
  border-radius: 8px; /* Bo tròn các góc */
  overflow: hidden; /* Giấu phần thừa */
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Đổ bóng nhẹ cho thẻ xe */
  transition: transform 0.3s; /* Hiệu ứng chuyển động */
  height: 340px; /* Thiết lập chiều cao cố định cho mỗi thẻ xe */
}

.car-item:hover {
  transform: translateY(-5px); /* Hiệu ứng nhấn mạnh khi hover */
}

.car-item img {
  width: 100%; /* Đảm bảo hình ảnh rộng đầy đủ thẻ */
  height: 150px; /* Thiết lập chiều cao cố định cho hình ảnh */
  object-fit: cover; /* Đảm bảo hình ảnh không bị méo và lấp đầy vùng chứa */
}

.car-details {
  padding: 15px; /* Khoảng cách bên trong */
  display: flex;
  flex-direction: column;
  justify-content: space-between; /* Giữ các phần tử con đều nhau */
  height: 150px; /* Thiết lập chiều cao cố định cho chi tiết xe */
}

.car-title {
  font-size: 1em;
  margin: 0 0 5px;
  color: #ffeb3b;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2; /* Giới hạn tiêu đề trong 2 dòng */
  overflow: hidden;
  height: 2.4em;
}



.car-price {
  color: #ff9800;
  font-size: 1.2em;
  margin: 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  height: 1.2em;
}



.car-description {
  font-size: 0.85em;
  height: 1.2em;
  color: white;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2; /* Giới hạn mô tả trong 1 dòng */
  overflow: hidden;
  text-overflow: ellipsis;
}


.swiper-slide {
  display: flex;
  justify-content: center; /* Căn giữa hình ảnh */
  align-items: center;
}

.swiper-slide img {
  width: 100%; /* Hình ảnh rộng đầy đủ slider */
  height: 100%; /* Thiết lập chiều cao đầy đủ của slide */
  object-fit: cover; /* Đảm bảo hình ảnh không bị méo và lấp đầy vùng chứa */
}
.brand-section {
  margin-bottom: 60px; /* Khoảng cách dưới giữa các hãng xe */
  padding: 20px 0;
  border-bottom: 2px solid #ccc; /* Đường kẻ ngăn cách mỗi mục */
}
.brand-title {
  font-size: 2.5em;
  color: #ff9999; /* Màu đỏ nhạt */
  margin-bottom: 10px;
  text-align: left;
}

.brand-description {
  font-size: 1.2em;
  color: white;
  margin-bottom: 20px;
  text-align: left;
}
img {
  width: 100%;
  height: auto;
}
.car-buy {
  background-color: #ff5722;
  color: white;
  border: none;
  padding: 5px 10px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 0.9em;
  width: 100%;
  height: 30px;
  margin-top: auto;
}

    </style>
    
</head>
<body>


    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://cdn.tgdd.vn/Files/2017/10/08/1031215/hunter__citroen-survolt-concept-2010-photo-07_7065_800x450.jpg" alt="Banner 1">
                </div>
                <div class="swiper-slide">
                    <img src="http://cms-i.autodaily.vn/du-lieu/2017/08/16/aston-martin-vanquish-zagato-speedster-4.jpg" alt="Banner 2">
                </div>
                <div class="swiper-slide">
                    <img src="https://live.staticflickr.com/65535/49932989542_6a8a810569_b.jpg" alt="Banner 3">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>

                <div class="content">
                <?php
// Kết nối đến cơ sở dữ liệu (giả sử kết nối đã được thiết lập qua biến $conn)

// Lấy dữ liệu từ bảng brand
$query = "SELECT name, description FROM brand WHERE status = 1"; // Lọc chỉ những xe có status = 1 nếu cần
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $brandName = $row['name'];
        $brandDescription = $row['description'];
        
        echo "
            <section class='brand-section' id='$brandName'>
                <h2 class='brand-title'>$brandName</h2>
                <p class='brand-description'>$brandDescription</p>
        ";
        
        // Lấy dữ liệu từ bảng new_cars cho từng hãng xe
        $sql = "SELECT id, name, price, description, image FROM new_cars WHERE brand = '$brandName'";
        $carResult = $conn->query($sql);
    
        if ($carResult && $carResult->num_rows > 0) {
            echo '<div class="car-list">';
            while ($carRow = $carResult->fetch_assoc()) {
                ?>
                <div class='car-item'>
                    <a href='?option=cardetail&id=<?= $carRow['id'] ?>'>
                        <img src='<?= $carRow["image"] ?>' alt='<?= $carRow["name"] ?>'>
                    </a>
                    <div class='car-details'>
                        <h3 class='car-title'><?= $carRow["name"] ?></h3>
                        <p class='car-price'>Giá: <?= number_format($carRow["price"]) ?> VNĐ</p>
                        <p class='car-description'><?= $carRow["description"] ?></p>
                        <input type='button' class='car-buy' value='Đặt mua' onclick="location='?option=cart&action=add&id=<?= $carRow['id'] ?>';">
                    </div>
                </div>
                <?php
            }
            echo '</div>'; // Đóng div.car-list
        } else {
            echo "<p>Hiện không có xe nào thuộc hãng $brandName!</p>";
        }
        
        echo "</section>"; // Đóng section.brand-section
    }
} else {
    echo "Không có dữ liệu để hiển thị.";
}

$conn->close(); 
?>

</div>
</div>

<script>
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });

    function scrollToBrand(brand) {
        const brandSection = document.getElementById(brand);
        if (brandSection) {
            window.scrollTo({
                top: brandSection.offsetTop - 100, 
                behavior: 'smooth'
            });
        }

        const brandLinks = document.querySelectorAll('.brand-list a');
        brandLinks.forEach(link => link.classList.remove('highlight'));

        const selectedLink = document.querySelector(`.brand-list a[onclick="scrollToBrand('${brand}')"]`);
        if (selectedLink) {
            selectedLink.classList.add('highlight');
        }
    }

    window.addEventListener('scroll', () => {
        const sections = document.querySelectorAll('.brand-section');
        const brandLinks = document.querySelectorAll('.brand-list a');

        sections.forEach((section, index) => {
            const sectionTop = section.getBoundingClientRect().top;
            const sectionHeight = section.offsetHeight;

            if (sectionTop <= window.innerHeight / 2 && sectionTop + sectionHeight > window.innerHeight / 2) {
                brandLinks.forEach(link => link.classList.remove('highlight'));
                brandLinks[index].classList.add('highlight');
            }
        });
    }); 
</script>

    
</body>
</html>
