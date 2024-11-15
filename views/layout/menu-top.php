<!-- <div class = "menu-top"> -->

<a href="?option=home">Trang Chủ</a>  
    <a href="?option=news">Tin Tức</a>  
    <a href="?option=feedback">Phản Hồi</a>  
    <a href="?option=cart">Giỏ Hàng</a>  
    <?php if(empty($_SESSION['member'])): ?>  
        <a href="?option=signin">Đăng Nhập</a>  
        <a href="?option=register">Đăng Ký</a>  
    <?php else:?>  
        <a><span style ="color: rgb(192, 192,192);" ><?= $_SESSION['member'] ?></span></a><a href="?option=logout">Đăng xuất</a>
    <?php endif; ?>  
                <!-- </div> -->