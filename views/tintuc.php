<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin Tức Ô Tô</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            background-color: #f9f9f9;
            margin: 0;
            
        }

        h2 {
            text-align: center;
            color: #ff5722;
            font-size: 2.5em;
            margin: 30px 0;
            font-weight: bold;
            margin-top: 30px;
        }

        .news-container {
            margin-top:100px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            /* margin: auto; */
            
        }

        article {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
        }

        article:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
        }

        .article-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
            transition: transform 0.3s;
        }

        article:hover .article-image {
            transform: scale(1.05);
        }

        .article-content {
            padding: 20px;
        }

        h3 {
            font-size: 1.3em;
            color: #333;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .article-date {
            font-size: 0.9em;
            color: #777;
            margin-bottom: 15px;
        }

        p {
            font-size: 1em;
            line-height: 1.6;
            color: #555;
        }

        .read-more {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #ff5722;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .read-more:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body>
    <h2>Tin Tức Mới Nhất</h2>

    <div class="news-container">
        <article>
            <img src="https://solution.com.vn/upload_images/images/2017-Bo-nhan-dien-thuong-hieu/24h/thiet-ke-logo-tin-tuc-24h-1.jpg" alt="Bài viết 1" class="article-image">
            <div class="article-content">
                <h3>Bài viết 1</h3>
                <p class="article-date">Ngày đăng: 01/11/2024</p>
                <p>Nội dung bài viết 1 ở đây. Đây là một mô tả ngắn gọn về bài viết này, thu hút người đọc.</p>
                <a href="https://baomoi.com/" class="read-more" target="_blank">Đọc thêm</a>
            </div>
        </article>

        <article>
            <img src="https://www.tayninh-toyota.com/images/xe%20cu/1_01.jpg.jpg" alt="Bài viết 2" class="article-image">
            <div class="article-content">
                <h3>Bài viết 2</h3>
                <p class="article-date">Ngày đăng: 02/11/2024</p>
                <p>Nội dung bài viết về cập nhật thông tin về xe ô tô.</p>
                <a href="https://baomoi.com/xe-co.epi" class="read-more" target="_blank">Đọc thêm</a>
            </div>
        </article>

        <article>
            <img src="https://media-cdn-v2.laodong.vn/storage/newsportal/2021/12/5/981282/The-Gioi-24H.jpg?w=800&h=496&crop=auto&scale=both" alt="Bài viết 3" class="article-image">
            <div class="article-content">
                <h3>Bài viết 3</h3>
                <p class="article-date">Ngày đăng: 03/11/2024</p>
                <p>Nội dung chính trị thế giới.</p>
                <a href="https://vnexpress.net/the-gioi" class="read-more" target="_blank">Đọc thêm</a>
            </div>
        </article>

        <article>
            <img src="https://www.danangtv.vn/Uploads/DichVu/CNM.JPG" alt="Bài viết 4" class="article-image">
            <div class="article-content">
                <h3>Bài viết 4</h3>
                <p class="article-date">Ngày đăng: 03/11/2024</p>
                <p>Nội dung tin tức trong ngày, cập nhật tin tức mới nhất cho hôm nay.</p>
                <a href="https://thanhnien.vn/" class="read-more" target="_blank">Đọc thêm</a>
            </div>
        </article>
        <article>
    <img src="https://www.carmudi.vn/_next/image/?url=https://static.carmudi.vn/wp-content/uploads/2024-09/Oypuf6IxGk.jpg&w=1200&q=75" alt="Bài viết 5" class="article-image">
    <div class="article-content">
        <h3>Bài viết 5</h3>
        <p class="article-date">Ngày đăng: 04/11/2024</p>
        <p>Tin tức về mẫu xe mới vừa ra mắt trên thị trường với công nghệ hiện đại.</p>
        <a href="https://vietbao.vn/nhung-mau-xe-o-to-sap-ra-mat-2025-xu-huong-moi-va-nhung-ten-tuoi-dang-chu-y-514813.html" class="read-more" target="_blank">Đọc thêm</a>
    </div>
    </article>

    <article>
        <img src="https://static.automotor.vn/w640/images/upload/2024/09/06/xe-hybrid-am-tham-chinh-phuc-khach-hang-viet-vneconomyautomotive-1.jpg" alt="Bài viết 6" class="article-image">
        <div class="article-content">
            <h3>Bài viết 6</h3>
            <p class="article-date">Ngày đăng: 05/11/2024</p>
            <p>Những xu hướng xe điện đang trở thành lựa chọn hàng đầu cho tương lai xanh.</p>
            <a href="https://vneconomy.vn/automotive/xe-hybrid-moi-o-at-ve-viet-nam-suc-ep-khong-nho-voi-xe-dien.htm" class="read-more" target="_blank">Đọc thêm</a>
        </div>
    </article>

    <article>
        <img src="https://logos-world.net/wp-content/uploads/2023/04/Car-Brands-and-the-Companies-they-Belong-to.png" alt="Bài viết 7" class="article-image">
        <div class="article-content">
            <h3>Bài viết 7</h3>
            <p class="article-date">Ngày đăng: 06/11/2024</p>
            <p>Tổng hợp những dòng xe bán chạy nhất tại Việt Nam năm 2024.</p>
            <a href="http://topgarage.vn/top-5-mau-xe-o-to-ban-chay-nhat-tai-viet-nam-nam-2024/" class="read-more" target="_blank">Đọc thêm</a>
        </div>
    </article>

    <article>
        <img src="https://media.tapchitaichinh.vn/w1480/images/upload/hoangthuviet/01302019/cafeauto_khachmuaxesangtaivietnamduocbaohanhbaoduongnhuthenaocafeautovn4-1459821344.jpg" alt="Bài viết 8" class="article-image">
        <div class="article-content">
            <h3>Bài viết 8</h3>
            <p class="article-date">Ngày đăng: 07/11/2024</p>
            <p>Đánh giá các dịch vụ hậu mãi của các hãng xe ô tô tại Việt Nam.</p>
            <a href="https://tapchitaichinh.vn/chi-so-hai-long-cua-khach-hang-ve-dich-vu-hau-mai-cua-cac-hang-xe-hoi-tai-viet-nam.html" class="read-more" target="_blank">Đọc thêm</a>
        </div>
    </article>

    <article>
        <img src="https://caodangbachkhoa.com.vn/wp-content/uploads/2023/04/Trien-vong-nganh-Cong-nghe-O-to-1536x1024.jpeg" alt="Bài viết 9" class="article-image">
        <div class="article-content">
            <h3>Bài viết 9</h3>
            <p class="article-date">Ngày đăng: 08/11/2024</p>
            <p>Thông tin về thị trường ô tô toàn cầu và những biến động trong thời gian tới.</p>
            <a href="https://caodangbachkhoa.com.vn/chuyen-gia-noi-gi-ve-nganh-cong-nghiep-o-to/" class="read-more" target="_blank">Đọc thêm</a>
        </div>
    </article>
    </div>
</body>
</html>
