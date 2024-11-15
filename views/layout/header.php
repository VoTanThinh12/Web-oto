<head>
    <style>
        .form{
            display:flex;   
        }
.search-container {
    display: flex; /* Sử dụng Flexbox để căn chỉnh theo hàng ngang */
    align-items: center; /* Căn giữa theo chiều dọc */
    justify-content: center; /* Căn giữa theo chiều ngang */
}

input[type="search"] {
    padding: 10px; /* Khoảng cách bên trong */
    border: 2px solid #ccc; /* Đường viền */
    border-radius: 2px; /* Bo tròn góc */
    width: 250px; /* Đặt chiều rộng cho ô tìm kiếm */
    font-size: 16px; /* Kích thước chữ */
    margin-right: 1px; /* Khoảng cách bên phải giữa ô tìm kiếm và nút */
}

.search-button {
    background: none; /* Xóa nền */
    border: none; /* Xóa viền */
    cursor: pointer; /* Hiển thị con trỏ chuột */
    Height: 20px;
}

.search-button img {
    width: 40px; /* Kích thước của biểu tượng tìm kiếm */
    height: 42px; /* Kích thước của biểu tượng tìm kiếm */
    /* margin : 0 -20px 10px 50px; */
}


    </style>
</head>

<img src="https://mrwallpaper.com/images/hd/lexus-logo-with-blue-light-accent-tayliugxtwgvi8my.jpg" alt="Logo" onclick="window.location.href='index.php'"> <!-- Logo -->  
<h1 onclick="window.location.href='index.php'">LuxAuto Cars</h1>
            <nav>  
                <?php include"views/layout/menu-top.php"?>
            </nav>  
            <div class="search-container">  
                <form autocomplete class = "form">
                <input type="hidden" name="option" value="showcar">
                <input type="search" autocomplete="on" placeholder="Tìm kiếm xe " name="keyword" value="<?=$_GET['keyword'] ?? ''?>">

                <button class="search-button"> 
                    <img src="https://png.pngtree.com/element_our/20200702/ourlarge/pngtree-vector-magnifying-glass-illustration-material-image_2291362.jpg" alt="Tìm kiếm">  
                </button>  
                </form>
            </div>  