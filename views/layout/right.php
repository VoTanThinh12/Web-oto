<head>
    <style>
       /* Bao toàn bộ trang */
       .main-container {
            /* background-color: #e0f7f7;  */
            background:                 rgb(79, 3, 20)                              ;

            padding: 20px;
            box-sizing: border-box;
        }

        .filter-container, .highlighted-cars, .latest-news, .promotions, .contact-us, .advertisement, .customer-reviews {
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 20px auto;
            width: 90%;
            max-width: 500px;
            box-sizing: border-box;
        }

        .xh {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #0066cc;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border: none;
            margin-top: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .xh:hover {
            background-color: #005bb5;
            transform: translateY(-2px);
        }

        input[type="range"] {
            width: 100%;
            margin: 10px 0;
            background-color: #f0f0f0;
            height: 8px;
            border-radius: 5px;
            outline: none;
            transition: background-color 0.3s ease;
        }

        input[type="range"]:focus {
            background-color: #e6f0ff;
        }

        span#max {
            font-weight: bold;
            font-size: 18px;
            color: #333;
        }

        input[type="submit"] {
            border-radius: 5px;
            font-size: 16px;
            padding: 10px 20px;
            background-color: #0066cc;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #005bb5;
        }

        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .submit-container {
            display: flex;
            justify-content: center;
        }

        h3 {
            color: #333;
            font-size: 18px;
            margin-bottom: 10px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            margin: 5px 0;
        }

        /* Hiệu ứng chữ nhấp nháy nhiều màu */
        ul li a {
            text-decoration: none;
            font-size: 16px;
            animation: colorChange 1s infinite alternate;
        }

        @keyframes colorChange {
            0% { color: #ff5733; }
            25% { color: #33ff57; }
            50% { color: #3357ff; }
            75% { color: #f39c12; }
            100% { color: #e74c3c; }
        }

        .customer-reviews blockquote {
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            line-height: 1.6;
            background-color: #f9f9f9;
            border-left: 5px solid #0066cc;
        }

        .customer-reviews footer {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="filter-container">
            <form>
                <input type="hidden" name="option" value="showcar">
                <label for="price-range">Giá xe (VND)</label>
                <input 
                    type="range" 
                    name="range" 
                    min="5000000000" 
                    max="30000000000" 
                    step="1000000000" 
                    value="<?= isset($_GET['range']) ? $_GET['range'] : '' ?>"
                    id="price-range"
                    oninput="updateRangeValue(this.value)"
                >
                <div>
                    <span id="max"><?= isset($_GET['range']) ? number_format($_GET['range'], 0, ',', '.') . ' VND' : "7.000.000 VND" ?></span>
                </div>
                <div class="submit-container">
                    <input class="xh" type="submit" name="search" value="Xác nhận">
                </div>
            </form>
        </div>

        <div class="highlighted-cars">
            <h3>Xe Nổi Bật</h3>
            <ul>
                <li><a href="https://giaxeoto.vn/vinfast/vf-e34">Xe vinfast - Giá: 500 triệu</a></li>
                <li><a href="https://www.mitsubishitrungthuong.org/mitsubishi-xpander/">MITSUBISHI XPANDER 2024 - Giá: 800 triệu</a></li>
                <li><a href="https://vnexpress.net/oto-xe-may/v-car/dong-xe/mazda-cx-5-100">Mazda CX-5 2023 - Giá: 1 tỷ</a></li>
                <li><a href="https://ford-suoitien.vn/ford-raptor/">FORD RANGER RAPTOR 2024 - Giá: 2 tỷ</a></li>
            </ul>
        </div>
        
        <div class="contact-us">
            <h3>Liên Hệ</h3>
            <form>
                <label for="name">Tên của bạn:</label>
                <input type="text" id="name" name="name" placeholder="Nhập tên của bạn" required>
                
                <label for="message">Lời nhắn:</label>
                <textarea id="message" name="message" placeholder="Viết lời nhắn của bạn..." required></textarea>

                <input type="submit" value="Gửi">
            </form>
        </div>
        
        <div class="customer-reviews">
            <h3>Đánh Giá Khách Hàng</h3>
            <blockquote>
                <p>"Xe này rất tuyệt vời, tôi rất hài lòng với trải nghiệm!"</p>
                <footer>- Anh Minh, khách hàng</footer>
            </blockquote>
            <blockquote>
                <p>"Dịch vụ tuyệt vời, sẽ quay lại mua thêm xe!"</p>
                <footer>- Chị Lan, khách hàng</footer>
            </blockquote>
        </div>
    </div>

    <script>
        function updateRangeValue(value) {
            const formattedValue = value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            document.getElementById('max').innerHTML = formattedValue + " VND";
        }

        document.addEventListener('DOMContentLoaded', function () {
            const rangeValue = document.getElementById('price-range').value;
            updateRangeValue(rangeValue);
        });
    </script>
</body>
