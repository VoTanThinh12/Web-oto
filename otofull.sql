-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2024 at 01:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otofull`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(22) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `status`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `name` varchar(20) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`name`, `status`, `description`) VALUES
('Ferrari', 1, 'Ferrari là biểu tượng của tốc độ và sự tinh tế từ Ý, kết hợp công nghệ đỉnh cao với thiết kế đẹp mắt. Những chiếc Ferrari mang lại cảm giác lái phấn khích và đẳng cấp với công nghệ động cơ tiên tiến, phù hợp với những ai đam mê hiệu suất.'),
('Lamborghini', 1, 'Lamborghini nổi bật với những siêu xe mạnh mẽ, gây ấn tượng bởi thiết kế táo bạo và khả năng tăng tốc cực kỳ ấn tượng. Được thiết kế dành riêng cho những người yêu thích tốc độ và phong cách, xe Lamborghini mang lại trải nghiệm hoàn toàn độc đáo.'),
('Lexus', 1, 'Lexus đại diện cho sự sang trọng, ổn định và công nghệ tiên tiến của Nhật Bản. Các mẫu xe Lexus không chỉ mang đến trải nghiệm lái mượt mà mà còn nổi tiếng với sự tiện nghi và dịch vụ khách hàng hàng đầu, lý tưởng cho các chuyến đi thoải mái và an toàn.'),
('Maybach', 1, 'Maybach là biểu tượng của sự xa hoa và tinh tế bậc nhất từ Mercedes-Benz, hướng đến những người tìm kiếm trải nghiệm đẳng cấp. Với nội thất rộng rãi, trang bị công nghệ tiên tiến, mỗi chiếc xe Maybach là một tác phẩm nghệ thuật di động.'),
('Rolls-Royce', 1, 'Rolls-Royce thể hiện đỉnh cao của sự sang trọng, với thiết kế mang tính cá nhân hóa và chi tiết thủ công tinh xảo. Những chiếc xe Rolls-Royce không chỉ là phương tiện di chuyển mà còn là biểu tượng của địa vị, sang trọng và phong cách vượt thời gian.'),
('Bentley', 0, 'Bentley đại diện cho sự sang trọng và đẳng cấp với những chiếc xe mang phong cách quý phái, cổ điển nhưng vẫn đầy sức mạnh. Các mẫu xe của Bentley thường có nội thất tinh xảo, được chế tác thủ công và chú trọng đến từng chi tiết, mang lại trải nghiệm lái thoải mái và đẳng cấp cho chủ nhân.'),
('Aston Martin', 0, 'Aston Martin là biểu tượng của sự thanh lịch và mạnh mẽ, với thiết kế đậm chất thể thao và khả năng vận hành ấn tượng. Hãng xe này nổi tiếng với các dòng xe thể thao hạng sang, kết hợp giữa tốc độ và phong cách quý phái, thường gắn liền với hình ảnh những điệp viên lịch lãm và bí ẩn.'),
('Bugatti', 0, 'Bugatti là đại diện cho những chiếc siêu xe tốc độ cao, được thiết kế với công nghệ tiên tiến và động cơ mạnh mẽ bậc nhất. Mỗi chiếc xe Bugatti là một kiệt tác về kỹ thuật và thiết kế, mang lại trải nghiệm vượt trội và là lựa chọn hàng đầu cho những người đam mê tốc độ và sự xa hoa.'),
('Pagani', 0, 'Pagani là thương hiệu siêu xe thủ công với thiết kế độc đáo và khả năng vận hành mạnh mẽ. Những chiếc xe của Pagani được sản xuất với số lượng giới hạn, mang đậm chất nghệ thuật và sự tỉ mỉ trong từng chi tiết, hướng đến những ai yêu thích sự khác biệt và đẳng cấp.'),
('Koenigsegg', 0, 'Koenigsegg nổi tiếng với những mẫu siêu xe có hiệu suất cực cao, phá vỡ nhiều kỷ lục về tốc độ. Hãng xe này ứng dụng công nghệ tiên tiến và các vật liệu nhẹ như sợi carbon để tối ưu hóa tốc độ và khả năng xử lý, là lựa chọn hàng đầu của những tín đồ tốc độ và sự sáng tạo.'),
('Porsche', 1, 'Porsche đại diện cho sự kết hợp hoàn hảo giữa thiết kế thể thao và khả năng vận hành linh hoạt. Các dòng xe Porsche mang lại trải nghiệm lái chính xác, mạnh mẽ, phù hợp với cả đường phố và đường đua, là lựa chọn phổ biến cho những ai tìm kiếm sự sang trọng và hiệu suất cao trong từng chuyến đi.'),
('Thịnh đẹp giai', 0, 'Đau đầu vì nhà giàu, mệt mỏi vì học giỏi, buồn phiền vì nhiều tiền, ngứa tai vì đẹp giai'),
('Mercedes-Benz', 0, ' Mercedes-Benz là biểu tượng của sự sang trọng, đẳng cấp và công nghệ tiên phong từ nước Đức. Các mẫu xe Mercedes-Benz không chỉ mang lại trải nghiệm lái vượt trội mà còn nổi bật với thiết kế tinh tế, kết hợp hoàn hảo giữa sự mạnh mẽ và thanh lịch. Với nội thất rộng rãi, trang bị công nghệ hiện đại và các tính năng an toàn hàng đầu, Mercedes-Benz hướng đến những khách hàng yêu thích sự hoàn mỹ và đẳng cấp trong từng chi tiết. ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `email` varchar(32) NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `message`) VALUES
('Võ Tấn Thịnh', 'thinhdeptrai@mail.com', '&lt;p&gt;Bố Thịnh Vĩ Đại&lt;/p&gt;\r\n'),
('thinhdeptrai', 'thinhverchai@gmail.com', '&lt;p&gt;Thằng cha n&amp;agrave;o l&amp;agrave;m c&amp;aacute;i web n&amp;agrave;y z&lt;br /&gt;\r\nbẩn mắt vcl&lt;/p&gt;\r\n'),
('thịnh đẹp trai ', 'thinhverchai@gmail.com', '&lt;p&gt;web như đấm người xem&lt;/p&gt;\r\n'),
('Võ Tấn Thịnh', 'thinhverchai@gmail.com', 'Thịnh đẹp trai ác quỷ phi phai'),
('Võ Tấn Thịnh', 'thinhverchai@gmail.com', 'Thịnh đẹp trai ác quỷ phi phai'),
('Võ Tấn Thịnh', 'thinh@gmail.com', 'ádáád'),
('Võ Tấn Thịnh', 'thinh@gmail.com', 'ádáád'),
('test', 'thinh@gmail.com', 'test1'),
('Thịnh đẹp trai', '1@gmail.com', 'Lol nào đẹp trai thiết kế web như l z\r\n'),
('Bố Thịnh vĩ đại ', '1@gmail.com', 'Bố thịnh vĩ đại muôn năm\r\nđộc lập tự do hạnh phúc'),
('thinhdeptrai', 'thinhverchai@gmail.com', 'Người làm web này hẳng rất đẹp trai mới ra cái web xịn xò như chó tin ');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `fullname`, `mobile`, `address`, `email`, `status`) VALUES
(123, '1', '1', 'Bố Thịnh Vĩ Đại', '0123456789', 'Phú Yên', 'thinh522004@gmail.com', 1),
(125, 'thinhdeptrai', '1', 'Vua Trò Chơi', '123123', '1123', '1@gmail.com', 1),
(130, '123', '123', '123213', '', '', '', 1),
(131, '123123123a', '1', '12', '1', '', '', 1),
(132, 'jhasdasd', '1', 'sfdsada', '', '', '', 1),
(133, '121áđâsd', '1', '1', '', '', '', 1),
(134, 'asd', 'asd', 'asd', '0912313211', 'Khanh Hoa', '1@gmail.com', 1),
(135, 'test', '1', 'test hafng', '0132132123', 'Ở nhà sang', '', 1),
(136, 'test1', '1', 'test1', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `new_cars`
--

CREATE TABLE `new_cars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `price` decimal(11,0) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `brand` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_cars`
--

INSERT INTO `new_cars` (`id`, `name`, `status`, `price`, `description`, `image`, `brand`) VALUES
(1, 'Ferrari 488', 1, 7000000000, 'Chiếc Ferrari 488 với thiết kế tuyệt đẹp.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Ferrari_488_GTB.jpg/2560px-Ferrari_488_GTB.jpg', 'Ferrari'),
(2, 'Ferrari F8 Tributo', 1, 8000000000, 'Mẫu xe thể thao hoàn hảo từ Ferrari.', 'https://cdn.ferrari.com/cms/network/media/img/resize/64a3cdc64f6e4300212d82c8-ferrari-genuine-banner-f8-tributo-page-split-mob?width=375&height=350', 'Ferrari'),
(3, 'Ferrari California', 1, 6000000000, 'Ferrari California mang lại cảm giác lái tuyệt vời.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1b48_dU6MfC2B_Rus4BxtGHRBRUViiPr2BQ&s', 'Ferrari'),
(4, 'Ferrari GTC4Lusso', 1, 9000000000, 'Chiếc xe 4 chỗ thể thao sang trọng.', 'https://autopro8.mediacdn.vn/zoom/700_438/2016/autopro-ferrari-gtc4lusso-1-1455009800258-crop1455009836117p.jpg', 'Ferrari'),
(5, 'Ferrari Portofino', 1, 8500000000, 'Mẫu convertible cao cấp với hiệu suất mạnh mẽ.', 'https://www.motortrend.com/uploads/2024/02/2024-Ferrari-Portofino-M-front-view-12.jpg', 'Ferrari'),
(6, 'Ferrari LaFerrari', 1, 20000000000, 'Mẫu xe hybrid mạnh mẽ và hiệu suất cao.', 'https://media.auto5.vn/files/quanganh/2021/08/03/2015-la-ferrari-giallo-triplo-strato-1-095832.jpg', 'Ferrari'),
(7, 'Ferrari 812 Superfast', 1, 15000000000, 'Siêu xe với sức mạnh vượt trội.', 'https://i.ytimg.com/vi/dsv3glaHLuA/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLAgDTyvfeDGv4qHdtvQIEkA3U1YbQ', 'Ferrari'),
(8, 'Ferrari SF90 Stradale', 1, 18000000000, 'Xe thể thao hybrid với công nghệ tiên tiến.', 'https://luxuo.vn/wp-content/uploads/2021/08/ferrari_sf90_stradale_assetto_fiorano_2021-1200x800-1.jpg', 'Ferrari'),
(9, 'Ferrari F40', 1, 12000000000, 'Một trong những mẫu xe biểu tượng của Ferrari.', 'https://en.wheelz.me/wp-content/uploads/2024/08/1991-Ferrari-F40-Minty-Forty-_1241181.webp', 'Ferrari'),
(10, 'Ferrari F50', 1, 11000000000, 'Mẫu xe huyền thoại với động cơ mạnh mẽ.', 'https://cdn.prod.website-files.com/662e6423ff88861916362956/6696f31c42f9cef97124a698_UkA2s40RgcxLAYZf3irCo9JpaV9pjmcGE5lBBOSGi0w.jpeg', 'Ferrari'),
(11, 'Ferrari 250 GTO', 1, 18000000000, 'Chiếc xe đắt giá nhất thế giới.', 'https://cdn.tuoitre.vn/zoom/700_525/471584752817336320/2023/11/14/1962-ferrari-250-gto-auction-16999744767941191239486-40-0-1045-1920-crop-16999745106051017132264.jpg', 'Ferrari'),
(12, 'Ferrari 512 TR', 1, 10000000000, 'Mẫu xe cổ điển với phong cách độc đáo.', 'https://fristartmuseum.org/wp-content/uploads/1962_Ferrari_GTO_front_3-4_Harholdt-601x450-1.jpg', 'Ferrari'),
(13, 'Ferrari 430 Scuderia', 1, 7000000000, 'Xe đua trên đường phố với hiệu suất cao.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Ferrari_F430_front_20080605.jpg/1200px-Ferrari_F430_front_20080605.jpg', 'Ferrari'),
(14, 'Ferrari Testarossa', 1, 9000000000, 'Mẫu xe biểu tượng với thiết kế đặc trưng.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk_GYWLC4uHgkRk58jiljtMOZiBHEVWXxENw&s', 'Ferrari'),
(15, 'Ferrari 288 GTO', 1, 13000000000, 'Mẫu xe thể thao độc quyền và hiếm có.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8u0_uutCXR9bvdeF7cToc0lw_6lKv-HwoPQ&s', 'Ferrari'),
(16, 'Ferrari 308 GTB', 1, 5000000000, 'Xe thể thao phong cách cổ điển.', 'https://www.gallery-aaldering.com/wp-content/uploads/2023/09/ferrari-308-gtb-quattrovalvole-1985.jpg', 'Ferrari'),
(17, 'Ferrari 355', 1, 6000000000, 'Mẫu xe nổi tiếng với thiết kế tinh tế.', 'https://matcu.vn/wp-content/uploads/2024/07/Ferrari-Evoluto-355.jpg', 'Ferrari'),
(18, 'Ferrari 360 Modena', 1, 8000000000, 'Một mẫu xe hoàn hảo cho trải nghiệm lái.', 'https://cdn.dealeraccelerate.com/autosport/1/2703/47260/790x1024/1999-ferrari-360-modena-coupe', 'Ferrari'),
(19, 'Ferrari 812 GTS', 1, 16000000000, 'Xe convertible mạnh mẽ và sang trọng.', 'https://hips.hearstapps.com/hmg-prod/images/2024-ferrari-812-gts-101-64caae4038b21.jpeg?crop=0.526xw:0.701xh;0.137xw,0.299xh&resize=768:*', 'Ferrari'),
(20, 'Ferrari Monza SP1', 1, 19000000000, 'Xe thể thao không mui với phong cách retro.', 'https://autopro8.mediacdn.vn/2018/9/19/ferrari-monza-sp1-and-sp2-1537299598890809010710.jpg', 'Ferrari'),
(21, 'Lamborghini Aventador', 1, 10000000000, 'Chiếc xe thể thao huyền thoại của Lamborghini.', 'https://cms-i.autodaily.vn/du-lieu/2019/03/04/lamborghini-aventador-svj-2.jpg', 'Lamborghini'),
(22, 'Lamborghini Huracán', 1, 8000000000, 'Mẫu xe với hiệu suất đáng kinh ngạc.', 'https://giaxeoto.vn/admin/upload/images/resize/640-lamborghini-huracan-sto-gia-bao-nhieu.jpg', 'Lamborghini'),
(23, 'Lamborghini Urus', 1, 9500000000, 'SUV sang trọng với sức mạnh vượt trội.', 'https://carpassion.vn/wp-content/uploads/2024/04/Lamborghini-Urus-SE-1.jpg', 'Lamborghini'),
(24, 'Lamborghini Gallardo', 1, 7000000000, 'Mẫu xe thể thao nhỏ gọn và linh hoạt.', 'https://cms-i.autodaily.vn/du-lieu/2020/04/12/lamborghini/2014-lamborghini-gallardo-squadra-corse-mecum-1.jpg', 'Lamborghini'),
(25, 'Lamborghini Centenario', 1, 15000000000, 'Mẫu xe kỷ niệm với công nghệ hiện đại.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgVpoOAPXQB4IfF9Fysgm-BCGA8c2YRJ6FOw&s', 'Lamborghini'),
(26, 'Lamborghini Sian', 1, 20000000000, 'Siêu xe hybrid với thiết kế ấn tượng.', 'https://photo.znews.vn/w660/Uploaded/aobhuua/2024_03_24/Lamborghini_Sian_1.jpg', 'Lamborghini'),
(27, 'Lamborghini Reventón', 1, 18000000000, 'Xe thể thao với thiết kế quân sự độc đáo.', 'https://photo.znews.vn/w660/Uploaded/aobhuua/2022_10_23/2008_Lamborghini_Reventon_35.jpg', 'Lamborghini'),
(28, 'Lamborghini Miura', 1, 12000000000, 'Chiếc xe thể thao cổ điển và biểu tượng.', 'https://res.cloudinary.com/kidston/image/upload/c_fill//PB_20230525_022.jpg', 'Lamborghini'),
(29, 'Lamborghini Veneno', 1, 20000000000, 'Mẫu xe thể thao cực hiếm và đắt giá.', 'https://image.tienphong.vn/w890/Uploaded/2024/Osgmky/c/1bb/c1bb8249ce8abc7542f023aaecc79997.jpg', 'Lamborghini'),
(30, 'Lamborghini Countach', 1, 14000000000, 'Một trong những mẫu xe nổi tiếng nhất của Lamborghini.', 'https://zestech.vn/wp-content/uploads/2024/01/1-7.jpg', 'Lamborghini'),
(31, 'Lamborghini Gallardo Spyder', 1, 7500000000, 'Phiên bản mui trần của Gallardo.', 'https://www.ilussopalmbeach.com/imagetag/2924/main/l/Used-2007-Lamborghini-Gallardo-Spyder-(Gated-Manual)-Spyder-1708710831.jpg', 'Lamborghini'),
(32, 'Lamborghini Huracán Performante', 1, 10000000000, 'Mẫu xe hiệu suất cao và tinh tế.', 'https://thanhnien.mediacdn.vn/uploaded/bahung/BaHung10/Lamborghini-Huracan-Performante/thanhnien-lamborghini-huracan-performante9_JERK.jpg?width=600', 'Lamborghini'),
(33, 'Lamborghini Asterion', 1, 16000000000, 'Mẫu xe hybrid độc đáo và sang trọng.', 'https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_detail/concept/asterion/header/header_Asterion.jpg', 'Lamborghini'),
(34, 'Lamborghini Estoque', 1, 11000000000, 'Sedan thể thao với thiết kế ấn tượng.', 'https://autopro8.mediacdn.vn/2021/9/12/estoque3-16314515042441814399183.jpg', 'Lamborghini'),
(35, 'Lamborghini Urus Performante', 1, 12000000000, 'Phiên bản hiệu suất cao của Urus.', 'https://otohoangkim-storage.sgp1.cdn.digitaloceanspaces.com/lamborghini-urus-performante-dau-tien-ve-viet-nam-lo-dien-gia-hon-1-2-900x900.webp', 'Lamborghini'),
(36, 'Lamborghini Terzo Millennio', 1, 20000000000, 'Xe thể thao tương lai với công nghệ tiên tiến.', 'https://img-cache.coccoc.com/image2?i=2&l=83/98764894', 'Lamborghini'),
(37, 'Lamborghini Diablo', 1, 11000000000, 'Mẫu xe biểu tượng của những năm 90.', 'https://www.autoblog.com/.image/ar_4:3%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MjA5MDg5NDExNDU1NjU3ODI4/1998-lamborghini-diablo-sv-roadster.jpg', 'Lamborghini'),
(38, 'Lamborghini Gallardo Superleggera', 1, 9000000000, 'Phiên bản nhẹ hơn và mạnh mẽ hơn của Gallardo.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT_bmpxolSHjQ9Pl8D3VCW_kAiKw0DspLw-w&s', 'Lamborghini'),
(39, 'Lamborghini Veneno Roadster', 1, 22000000000, 'Phiên bản mui trần của Veneno cực hiếm.', 'https://xehay.vn/uploads/images/2020/1/3/xehay-Roadster-240120-6.jpg', 'Lamborghini'),
(40, 'Lamborghini Urus S', 1, 10000000000, 'Phiên bản thể thao và mạnh mẽ hơn của Urus.', 'https://oto365.net/uploads/news/2024/05/03/15637/377f71ae33a66756f5bded646d53d48702.jpg', 'Lamborghini'),
(41, 'Lexus RX 350', 1, 7000000000, 'SUV sang trọng với thiết kế tinh tế.', 'https://lexusrx.com.vn/wp-content/uploads/2023/06/DSC07655-scaled.jpg', 'Lexus'),
(42, 'Lexus ES 300h', 1, 6000000000, 'Xe sedan tiết kiệm nhiên liệu và sang trọng.', 'https://www.lexus.com.vn/content/dam/lexus-v3-blueprint/models/sedan/es/es-300h/my22/overview/es-300h-overview.jpg', 'Lexus'),
(43, 'Lexus NX 300h', 1, 5500000000, 'Mẫu SUV nhỏ gọn và linh hoạt.', 'http://cms-i.autodaily.vn/du-lieu/2017/09/12/2018-lexus-nx-300h-7.jpg', 'Lexus'),
(44, 'Lexus LS 500h', 1, 9000000000, 'Xe sedan cao cấp với công nghệ tiên tiến.', 'https://www.lexus.com.vn/content/dam/lexus-v3-blueprint/models/sedan/ls/ls-500h/my21/overview-/ls500h-overview.jpg', 'Lexus'),
(45, 'Lexus GX 460', 1, 8000000000, 'SUV off-road mạnh mẽ và bền bỉ.', 'https://www.lexus.com.vn/content/dam/lexus-v3-vietnam/news-and-events/2024/lexus-gx-460/lexus-gx-460-9.jpg', 'Lexus'),
(46, 'Lexus RC 350', 1, 7000000000, 'Xe coupe thể thao với thiết kế quyến rũ.', 'https://thegioilexus.com.vn/wp-content/uploads/2022/01/lexus-rc-350-11.jpg', 'Lexus'),
(47, 'Lexus LC 500', 1, 10000000000, 'Mẫu coupe sang trọng với hiệu suất vượt trội.', 'https://xehay.vn/uploads/images/2022/9/02/xehay-lexus%20lc%20500-16092022-5.jpg', 'Lexus'),
(48, 'Lexus UX 250h', 1, 5000000000, 'Mẫu SUV nhỏ gọn với công nghệ hybrid.', 'https://hips.hearstapps.com/hmg-prod/images/2024-lexus-ux-250h-premium-228-65d8a8e1bca3c.jpg?crop=0.585xw:0.657xh;0.317xw,0.309xh&resize=768:*', 'Lexus'),
(49, 'Lexus IS 300', 1, 5500000000, 'Xe sedan thể thao với thiết kế mạnh mẽ.', 'https://cdn.gianhangvn.com/image/lexus-is-300-f-sport-1-90dktle.jpg', 'Lexus'),
(50, 'Lexus NX 350', 1, 6000000000, 'Mẫu SUV mới với phong cách hiện đại.', 'https://www.lexus.com.vn/content/dam/lexus-v3-blueprint/models/suv/nx/nx-350-fsport/my22/gallery/exterior/lexus-nx-350-fsport-gallery-ext-1-d.jpg', 'Lexus'),
(51, 'Lexus CT 200h', 1, 5000000000, 'Xe hatchback tiết kiệm nhiên liệu và thân thiện với môi trường.', 'https://media1.nguoiduatin.vn/media/bien-tap-vien/2022/03/04/lexus-ct200h-cherished-touring-edition-front-angle.jpg', 'Lexus'),
(52, 'Lexus RX 450h', 1, 7500000000, 'Mẫu SUV hybrid sang trọng và mạnh mẽ.', 'https://noithatotovietanh.com/admin/sanpham/lexus-rx450h-2019-viet-nam-tuvanmuaxe-2_3340_anh1.jpg', 'Lexus'),
(53, 'Lexus GS 350', 1, 7000000000, 'Xe sedan với hiệu suất mạnh mẽ và sang trọng.', 'https://cdnphoto.dantri.com.vn/EOH2KR73MzMVXD0Sb7V5AOLLgME=/zoom/1200_630/oEj8Djn5XzGK0De5Uol4/Image/2011/10/Tuan4/2013LexusGSFSport10_9fca4.jpg', 'Lexus'),
(54, 'Lexus LX 570', 1, 9000000000, 'SUV cao cấp với khả năng off-road vượt trội.', 'https://www.lexus.com.vn/content/dam/lexus-v3-blueprint/models/suv/lx/teaser-mlp/my22/features/lexus-lx-features-striking-looks.jpg', 'Lexus'),
(55, 'Lexus RC F', 1, 9500000000, 'Xe coupe thể thao với động cơ mạnh mẽ.', 'https://toyotacanada.scene7.com/is/image/toyotacanada/2020_Lexus_RCF_Track_f34_1_37EDA5C25164CA2B504B4635C2218546D0F26081?ts=1688791076212&$Media-Large$&dpr=off', 'Lexus'),
(56, 'Lexus IS 350 F Sport', 1, 6000000000, 'Phiên bản thể thao của Lexus IS.', 'https://cdn-ds.com/blogs-media/sites/214/2022/03/11092717/2022-Lexus-IS-350-A_o.jpg', 'Lexus'),
(57, 'Lexus ES 250', 1, 5500000000, 'Mẫu sedan với phong cách thanh lịch.', 'https://www.lexus.com.vn/content/dam/lexus-v3-blueprint/models/sedan/es/es-250/my22/features/comfort-and-design/es-250-comfort-and-design-bold-look.jpg', 'Lexus'),
(58, 'Lexus NX F Sport', 1, 6500000000, 'Mẫu SUV thể thao với thiết kế năng động.', 'https://lexus-usa.com.vn/wp-content/uploads/2022/04/nx350-f-sport-2022.jpg', 'Lexus'),
(59, 'Lexus RX F Sport', 1, 7000000000, 'Mẫu SUV sang trọng với phong cách thể thao.', 'https://showroom-lexus.vn/upload/tour/328226629683_lon.jpg', 'Lexus'),
(60, 'Lexus LC 500h', 1, 10000000000, 'Mẫu coupe hybrid cao cấp và mạnh mẽ.', 'https://www.lexus.co.nz/content/dam/lexus-v3-blueprint/models/coupe/lc/lc-500h/my19/overview/lexus-lc500h-overview.jpg', 'Lexus'),
(61, 'Maybach S-Class', 1, 15000000000, 'Chiếc sedan sang trọng hàng đầu thế giới.', 'https://xehay.vn/uploads/images/2022/8/F5151D6C-D86D-467A-B101-A499D3FE07A4.jpeg', 'Maybach'),
(62, 'Maybach GLS 600', 1, 13000000000, 'SUV siêu sang với không gian rộng rãi.', 'https://mercedeshanoi.com.vn/wp-content/uploads/Mercedes-maybach-gls-600-4matic-mercedeshanoi-com-vn_22.jpg', 'Maybach'),
(63, 'Maybach S 600', 1, 14000000000, 'Mẫu sedan cao cấp với thiết kế tinh tế.', 'https://tuvanmuaxe.vn/upload/mau-xe/237/800x450/mercedes-maybach-S-600-2016-237-1452395489.jpg', 'Maybach'),
(64, 'Maybach S 580', 1, 13000000000, 'Phiên bản mới với nhiều công nghệ hiện đại.', 'https://autopro8.mediacdn.vn/2021/12/10/s5801-16391204391021958357757.jpeg', 'Maybach'),
(65, 'Maybach S 650', 1, 16000000000, 'Xe sang với động cơ mạnh mẽ và sang trọng.', 'https://mercedesbenz.hanoi.vn/wp-content/uploads/2019/04/maybach-s650-anh1-1048623f26543-1.jpg', 'Maybach'),
(66, 'Maybach GLS 700', 1, 15000000000, 'Mẫu SUV với thiết kế hiện đại và sang trọng.', 'https://vcdn1-vnexpress.vnecdn.net/2024/07/03/Mercedes-GLS-2024-VnExpress-56-1719996042.jpg?w=460&h=0&q=100&dpr=2&fit=crop&s=o31f8DVhM1R8CV9edgOf1A', 'Maybach'),
(67, 'Maybach 57', 1, 12000000000, 'Mẫu xe biểu tượng của sự xa xỉ.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGqdKesK9oLIh2LW_Cw9TAO5GgtHe7kfRsLg&s', 'Maybach'),
(68, 'Maybach 62', 1, 14000000000, 'Mẫu xe dài và sang trọng nhất.', 'https://sohanews.sohacdn.com/thumb_w/640/160588918557773824/2021/5/26/photo1622048061565-1622048061687956960256.jpg', 'Maybach'),
(69, 'Maybach S 680', 1, 17000000000, 'Xe sang với nhiều trang bị tiện nghi.', 'https://static-images.vnncdn.net/files/publish/2022/12/1/danh-gia-mercedes-maybach-s680-vietnamnet-16-1919.jpg', 'Maybach'),
(70, 'Maybach S-Class 2023', 1, 18000000000, 'Mẫu xe mới nhất với phong cách hiện đại.', 'https://img.sm360.ca/images/article/dilawri-group-of-companies/115304//2023-maybach-s-class-now-in-richmond-1686061350886.jpg', 'Maybach'),
(71, 'Maybach 6', 1, 20000000000, 'Xe concept với thiết kế độc đáo.', 'https://cdn.tuoitrethudo.vn/stores/news_dataimages/tuoitrethudocomvn/082017/22/17/chiem-nguong-tac-pham-nghe-thuat-vision-mercedes-maybach-6-cabriolet-ngoai-doi-thuc-03-.1767.jpg', 'Maybach'),
(72, 'Maybach S-Class 2019', 1, 13000000000, 'Mẫu xe sang trọng với thiết kế cổ điển.', 'https://tapchigiaothong.qltns.mediacdn.vn/tapchigiaothong.vn/files/duc.anh/2018/02/14/xedoisong_mercedes_maybach_2018_1_jptl-0824.jpg', 'Maybach'),
(73, 'Maybach 57S', 1, 12000000000, 'Mẫu xe thể thao sang trọng và mạnh mẽ.', 'https://icdn.dantri.com.vn/Uploaded/2010/10/06/Xenatec-061010-5.jpg', 'Maybach'),
(74, 'Maybach S-Class Coupe', 1, 14000000000, 'Mẫu coupe với không gian sang trọng.', 'https://autopro8.mediacdn.vn/thumb_w/640/134505113543774208/2022/6/23/photo1655992560210-1655992560339217095645.jpg', 'Maybach'),
(75, 'Maybach S 560', 1, 13000000000, 'Xe sang với công nghệ tiên tiến.', 'https://mercedesbenz.hanoi.vn/wp-content/uploads/2019/04/maybach-s560-anh1-1048724f26543-1.jpg', 'Maybach'),
(76, 'Maybach GLS 580', 1, 12500000000, 'SUV sang trọng với không gian rộng rãi.', 'https://cms-i.autodaily.vn/du-lieu/2021/06/24/GLS%20580/adt-2593-copy.jpg', 'Maybach'),
(77, 'Maybach S-Class 2021', 1, 15000000000, 'Mẫu xe mới với thiết kế hiện đại.', 'https://icdn.24h.com.vn/upload/4-2020/images/2020-11-20/Mercedes-Maybach-S-Class-2021-trinh-lang-13-1605869581-976-width660height440.jpg', 'Maybach'),
(78, 'Maybach S 680 4MATIC', 1, 17000000000, 'Mẫu xe mạnh mẽ và sang trọng.', 'https://mercedesnhatrangvn.com/wp-content/uploads/2022/07/Mercedes-Maybach-S-680-4matic.jpg', 'Maybach'),
(79, 'Maybach S-Class 2022', 1, 16000000000, 'Mẫu xe sang trọng với nhiều trang bị hiện đại.', 'https://static-images.vnncdn.net/files/publish/2022/8/10/mercedes-maybach-s-class-2022-1-69.jpg', 'Maybach'),
(80, 'Maybach 57 S', 1, 11000000000, 'Chiếc xe sang trọng nhất thế giới.', 'https://autopro8.mediacdn.vn/uMbdTKTBZPDdnoC4c09dtgDXJPU9N/Image/2011/09/autopro-maybach-57-s-edition-125-2_9344c.jpg', 'Maybach'),
(81, 'Rolls-Royce Phantom', 1, 20000000000, 'Chiếc sedan sang trọng và biểu tượng của Rolls-Royce.', 'https://i.ytimg.com/vi/yijivf3YPXY/sddefault.jpg', 'Rolls-Royce'),
(82, 'Rolls-Royce Cullinan', 1, 18000000000, 'SUV sang trọng với thiết kế tinh tế.', 'https://winauto.vn/wp-content/uploads/2024/09/rolls-royce-cullinan.jpg', 'Rolls-Royce'),
(83, 'Rolls-Royce Ghost', 1, 15000000000, 'Mẫu xe sedan với công nghệ hiện đại và sang trọng.', 'https://cdn.tuoitre.vn/thumb_w/480/2022/1/20/logo-1ghost-16426572576851545568071.jpg', 'Rolls-Royce'),
(84, 'Rolls-Royce Dawn', 1, 17000000000, 'Mẫu convertible cao cấp với thiết kế quyến rũ.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNnDTbCyWtt30WmEFIbzTHfKYQltosOx1fbg&s', 'Rolls-Royce'),
(85, 'Rolls-Royce Wraith', 1, 16000000000, 'Xe coupe thể thao với phong cách sang trọng.', 'https://cdn.24h.com.vn/upload/3-2020/images/2020-08-11/Rolls-Royce-Wraith-1-1597137134-516-width660height502.jpg', 'Rolls-Royce'),
(86, 'Rolls-Royce Phantom Extended', 1, 22000000000, 'Mẫu xe dài sang trọng và đẳng cấp.', 'https://i.ytimg.com/vi/9fNxoAZa-xk/maxresdefault.jpg', 'Rolls-Royce'),
(87, 'Rolls-Royce Silver Cloud', 1, 12000000000, 'Mẫu xe cổ điển và biểu tượng của Rolls-Royce.', 'https://cdn.motor1.com/images/mgl/eoRNqW/s3/1961-rolls-royce-silver-cloud-ii-paramount-by-ringbrothers.jpg', 'Rolls-Royce'),
(88, 'Rolls-Royce Phantom II', 1, 13000000000, 'Chiếc xe cổ điển với thiết kế sang trọng.', 'https://hymanltd.com/wp-content/uploads/2018/11/6331.jpg', 'Rolls-Royce'),
(89, 'Rolls-Royce Ghost Extended', 1, 16000000000, 'Mẫu xe dài với không gian rộng rãi.', 'https://cms-i.autodaily.vn/du-lieu/2020/09/24/2021-rolls-royce-ghost-extended-4.jpg', 'Rolls-Royce'),
(90, 'Rolls-Royce Wraith Black Badge', 1, 17000000000, 'Mẫu xe thể thao mạnh mẽ và sang trọng.', 'https://i.ytimg.com/vi/aYV6LOKIsYo/maxresdefault.jpg', 'Rolls-Royce'),
(91, 'Rolls-Royce Cullinan Black Badge', 1, 20000000000, 'SUV mạnh mẽ với phong cách thể thao.', 'https://res.cloudinary.com/motortrak/t_base_vehicle_transformation/ims2/vehicle-media/undefined/jtblk9ncf9mbvkr3agl3', 'Rolls-Royce'),
(92, 'Rolls-Royce Phantom Drophead Coupe', 1, 21000000000, 'Mẫu convertible sang trọng với thiết kế quyến rũ.', 'https://media.vneconomy.vn/w800/images/upload/2021/04/20/1_8f3ac.jpg', 'Rolls-Royce'),
(93, 'Rolls-Royce Silver Shadow', 1, 10000000000, 'Mẫu xe cổ điển với thiết kế sang trọng.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSd0wyU9qx6K1a5lyD4mKnOYMqbofHgCpIUYg&s', 'Rolls-Royce'),
(94, 'Rolls-Royce Phantom Series II', 1, 19000000000, 'Mẫu xe cao cấp với nhiều trang bị hiện đại.', 'https://photo.znews.vn/w660/Uploaded/aobhuua/2024_01_30/Rolls_Royce_Phantom_Series_II_Malaysia_8.jpg', 'Rolls-Royce'),
(95, 'Rolls-Royce Ghost Series II', 1, 15000000000, 'Xe sedan sang trọng với hiệu suất cao.', 'https://cdn.caready.vn/data/news/11754/NgoaiThat_7bu.jpeg', 'Rolls-Royce'),
(96, 'Rolls-Royce Dawn Black Badge', 1, 20000000000, 'Mẫu convertible sang trọng với công nghệ tiên tiến.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeb1Q_3deRrwElPHhLS066CzXh3_wB3oMDUg&s', 'Rolls-Royce'),
(97, 'Rolls-Royce Wraith Series II', 1, 16000000000, 'Mẫu xe thể thao với thiết kế mạnh mẽ.', 'https://www.mansory.com/sites/default/files/styles/1920x800_fullwidth_car_slider/public/migrated/cars/Cars/rolls-royce/wraith/mansory_rolls_royce_wraith_25.jpg?itok=f5CcTOPO', 'Rolls-Royce'),
(98, 'Rolls-Royce Phantom Long Wheelbase', 1, 23000000000, 'Mẫu xe dài với không gian rộng rãi và sang trọng.', 'https://cdn.dealeraccelerate.com/fusion/1/628/25897/1920x1440/2015-rolls-royce-phantom-extended-wheel-base-4dr-sedan', 'Rolls-Royce'),
(99, 'Rolls-Royce Black Badge Cullinan', 1, 21000000000, 'SUV sang trọng và mạnh mẽ.', 'https://handh.blob.core.windows.net/stock/20055853-0-medium.jpg?v=63783483792130', 'Rolls-Royce'),
(100, 'Rolls-Royce Silver Spirit', 1, 12000000000, 'Mẫu xe cổ điển với thiết kế sang trọng.', 'https://images.pistonheads.com/nimg/44233/Rolls_07.jpg', 'Rolls-Royce'),
(101, 'Đẹp trai thì mới có người yêu', 1, 99999999999, 'Thịnh đẹp trai\r\n', 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Yasuo_0.jpg', 'Thịnh đẹp giai'),
(102, 'Thịnh Vistoroy', 1, 30000000000, 'Yole\r\n', 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Yone_1.jpg', 'Thịnh đẹp giai'),
(103, 'Ác quỷ Phi Phai', 1, 10000000000, 'Phi Phai có khả năng mê hoặc và điều khiển nạn nhân, khiến họ cảm thấy hoảng loạn, mất ý thức, hoặc lạc vào thế giới ảo ảnh do nó tạo ra. Nó thường lảng vảng xung quanh những người yếu đuối về mặt tinh thần hoặc những người đang gặp phải rắc rối trong cuộc sống, vì chúng dễ dàng bị nó thao túng và dẫn dụ vào bóng tối.\r\n', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0Tm7oSxek_qUnrlEtP08FuzzcY8tfe0o8xw&s', 'Thịnh đẹp giai'),
(106, 'Bé Ác Quẻ Phi Phai', 1, 15000000000, 'Top god sa đéc', 'https://scr.vn/wp-content/uploads/2024/02/Anh-ta-la-ac-quy-FF.jpg', 'Thịnh đẹp giai'),
(107, 'Mercedes-Maybach S 680 4MATIC', 1, 15000000000, 'Động cơ: V12 tăng áp kép, dung tích 6.0L, công suất cực đại 621 mã lực, mô-men xoắn 900 Nm.\r\nTốc độ tối đa: 250 km/h.\r\nKhả năng tăng tốc: Từ 0-100 km/h chỉ trong 4,5 giây.\r\nNội thất: Được thiết kế đẳng cấp với da Nappa cao cấp, ốp gỗ tự nhiên, ghế massage, hệ thống âm thanh Burmester High-End 4D Surround.\r\nCông nghệ: Hệ thống lái thông minh, tự động thích ứng, màn hình OLED, điều khiển bằng giọng nói MBUX.\r\nTiện nghi: Cửa sổ trời toàn cảnh, hệ thống chiếu sáng nội thất đa sắc màu, bàn làm việc và tủ lạnh mini ở hàng ghế sau.\r\nĐặc biệt: Xe được trang bị ghế thương gia có thể ngả gần như phẳng, tạo cảm giác như ngồi khoang hạng nhất trên máy bay.', 'https://tse1.mm.bing.net/th?id=OIP.FZqk6PT35xsVfyKJB8WlqgHaDS&w=210&h=210&c=7', 'Mercedes-Benz'),
(108, 'Mercedes-Benz SLR McLaren Stirling Moss', 1, 20000000000, 'Số lượng sản xuất: Chỉ 75 chiếc trên toàn thế giới.\r\nThiết kế: Không có kính chắn gió và mui xe, tạo cảm giác như một chiếc xe đua cổ điển.\r\nĐộng cơ: V8 siêu nạp 5.5L, công suất cực đại 650 mã lực.\r\nTốc độ tối đa: 350 km/h.\r\nKhả năng tăng tốc: Từ 0-100 km/h chỉ trong 3,5 giây.\r\nĐặc biệt: Được đặt theo tên huyền thoại đua xe người Anh - Stirling Moss.', 'https://tse4.mm.bing.net/th?id=OIP.r_fj6z8VIAZyBLO58DpsfwHaJN&w=474&h=474&c=7', 'Mercedes-Benz');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `carid` int(11) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `price` decimal(14,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`carid`, `orderid`, `number`, `price`) VALUES
(1, 7, 1, 7000000000),
(1, 9, 1, 7000000000);

-- --------------------------------------------------------

--
-- Table structure for table `ordermethod`
--

CREATE TABLE `ordermethod` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ordermethod`
--

INSERT INTO `ordermethod` (`id`, `name`, `status`) VALUES
(1, 'Trực tiếp cho người giao hàng', 1),
(2, 'Trực tiếp cho người giao hàng', 1),
(3, 'Chuyển khoản', 1),
(4, 'Thanh toán tại cửa hàng', 1),
(5, 'Paypal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `ordermethodid` int(11) DEFAULT NULL,
  `memberid` int(11) DEFAULT NULL,
  `orderdate` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1:Chưa xử lý;\r\n2: Đang xử lý;\r\n3: Đã xử lí;\r\n4: Hủy;',
  `name` varchar(25) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `note` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `ordermethodid`, `memberid`, `orderdate`, `status`, `name`, `address`, `mobile`, `email`, `note`) VALUES
(5, 3, 123, '2024-11-07 15:38:54', 3, 'Võ Tấn Thịnh', 'Phú Yên', '0123456789', 'thinh522004@gmail.com', ''),
(6, 1, 123, '2024-11-07 15:50:45', 3, 'Anh nho', 'Phú Yên zzzz', '0912313211', 'th@gmail.com', 'cách để đẹp trai'),
(7, 1, 123, '2024-11-07 16:59:06', 3, 'Bố Thịnh Vĩ Đại', 'Phú Yên', '0123456789', 'thinh522004@gmail.com', ''),
(8, 1, 135, '2024-11-08 16:56:55', 4, 'test hafng', 'Ở nhà sang', '0132132123', '', ''),
(9, 1, 135, '2024-11-08 17:00:00', 4, 'test hafng', 'Ở nhà sang', '0132132123', '', ''),
(10, 1, 136, '2024-11-08 17:08:20', 4, 'test1', 'qwqweqw', '123', 'oldthunobetty@gmail.com', 'qweqweqwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_cars`
--
ALTER TABLE `new_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `new_cars`
--
ALTER TABLE `new_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
