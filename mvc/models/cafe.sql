-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 03:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idMenu` int(255) NOT NULL,
  `tenMenu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idMenu`, `tenMenu`) VALUES
(1, 'cafe'),
(2, 'Latte đá'),
(3, 'Latte nóng'),
(4, 'Đá xay'),
(5, 'Trà'),
(6, 'Sữa chua');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` smallint(3) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` int(255) NOT NULL,
  `mota` text NOT NULL,
  `hinh` text NOT NULL,
  `loai` varchar(255) NOT NULL,
  `idMenu` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `gia`, `mota`, `hinh`, `loai`, `idMenu`) VALUES
(1, 'Americano', 20000, 'Americano với hương vị cà phê dễ chịu, nhẹ nhàng không quá đậm đắng nhưng vẫn đầy đủ sự tinh tế để chinh phục người yêu cà phê trên toàn thế giới.', './public/images/sp/CAPHE_Americano.png', 'cafe', 1),
(2, 'Cà phê đen', 16000, 'Cà phê đen truyền thống, đúng điệu của người Việt được tuyển chọn, pha chế từ những hạt cà phê Robusta tốt nhất tại nông trường CADA với lịch sử gần 100 năm tuổi. Hương thơm mộc mạc của \"cà phê thật\" bao giờ cũng khiến chúng ta say đắm.', './public/images/sp/CAPHE_Cafe den da.png', 'cafe', 1),
(3, 'Sữa đá milk foam', 20000, 'Một sự kết hợp độc đáo mang đến trải nghiệm mới về cà phê sữa đá truyền thống. Với hương vị nhẹ nhàng hơn cùng lớp kem Milk foam sánh mịn thơm béo, sẽ khiến bạn yêu ngay từ lần đầu thưởng thức.', './public/images/sp/CAPHE_Cafe sua Milk Foam.png', 'cafe', 1),
(4, 'Cà phê sữa', 18000, 'Cà phê sữa đá Ông Bầu là sự kết hợp hòa quyện bởi những hạt cà phê CADA danh tiếng thêm chút ngọt béo của sữa đặc mang lại ly cà phê sữa đá đậm vị Việt Nam đã và đang chinh phục nhưng người yêu cà phê trên Thế Giới', './public/images/sp/CAPHE_Cafe sua da.png', 'cafe', 1),
(5, 'Chocolate trứng đá', 29000, 'To make the best tasting turkey gravy you need three things; well-seasoned fat, flour, and a good rich broth. For each cup of finished gravy you will need one tablespoon of fat, one tablespoon of flour and 1 cup of broth and a good rich broth', './public/images/sp/LATTEDA_Pandan Macchiato.png', 'Latte đá', 2),
(6, 'Mocha Macchiato', 26000, 'Vị đắng nhẹ, ngọt êm của sốt chocolate khi kết hợp cùng Macchiato truyền thống mang đến một ly thức uống đậm đà, tinh tế hơn bao giờ hết.', './public/images/sp/LATTEDA_Mocha Macchiato.png', 'Latte đá', 2),
(7, 'Hồng trà Latte', 26000, 'Latte truyền thống vốn được làm từ cà phê, sữa tươi và bọt sữa nay kết hợp với Hồng trà mang hương thơm thanh mát, ngọt nhẹ sẽ làm ngây ngất những ai yêu trà và thức uống latte.', './public/images/sp/LATTEDA_Hong tra latte.png', 'Latte đá', 2),
(8, 'Matcha Latte', 26000, 'Hương thơm thanh mát, vị đắng tinh tế của trà xanh hòa cùng sữa tươi thơm béo, sánh mịn chắc chắn sẽ khiến các tín đồ của latte thích thú với sự kết hợp này. Đây là món uống không có cà phê (caffein)', './public/images/sp/LATTEDA_Matcha Latte.png', 'Latte đá', 2),
(9, 'Caramel Cà phê', 35000, 'Cà phê Espresso CADA thơm ngon kết hợp với hương vị ngọt ngào của Caramel, thêm chút chút đá xay mịn không chỉ mát lạnh giải nhiệt mà còn nạp thêm năng lượng cho một ngày đầy hứng khởi.', './public/images/sp/SINHTO_Caramen Ca phe.png', 'Đá xay', 4),
(10, 'Sinh tố dền sữa', 35000, 'Thức uống lạ mắt trong \"từ điển sinh tố\" lại còn bổ dưỡng và ngon lành. Ly sinh tố dền sữa thơm ngon này không những rất tốt cho sức khỏe của chúng ta, nhất là hệ miễn dịch mà còn giúp giải nhiệt thanh mát cả ngày.', './public/images/sp/SINHTO_Sinh to Den sua.png', 'Đá xay', 4),
(11, 'Cà phê dừa', 35000, 'Một phiên bản sảng khoái hơn dừa đá xay với một chút đắng nhẹ tinh tế của cà phê bên trên mang đến một thức uống mát lạnh và thú vị.', './public/images/sp/SINHTO_Matcha dua.png', 'Đá xay', 4),
(12, 'Vải đá xay', 35000, 'Thức uống mát lạnh sảng khoái khiến bạn thích mê ngay ngụm đầu tiên. Sự hòa quyện của hương vị trái vải chua chua ngọt ngọt và chút ngọt béo của sữa cho ra một ly Vải đá xay thanh mát, đầy thú vị.', './public/images/sp/SINHTO_Vai da xay.png', 'Đá xay', 4),
(13, 'Trà việt quất boba - S', 26000, 'Với màu sắc trà đẹp mắt, vị chát nhẹ của trà đen cùng các hạt boba chua chua ngọt ngọt vỡ tan trong miệng, vị ngọt vị chua hòa cùng vị trà thanh mát rất dễ khiến bạn thích mê của thức uống này.', './public/images/sp/TRA_Tra viet quat boba.png', 'Trà', 5),
(14, 'Trà vải - S', 26000, 'Thức uống thanh mát giải nhiệt từ trái vải quen thuộc của vùng nhiệt đới kết hợp cùng trà đen đặc trưng thơm ngon.', './public/images/sp/TRA_Tra vai.png', 'Trà', 5),
(15, 'Hồng trà milk foam - S', 26000, 'Milk foam béo ngọt hoà quyện cùng vị chát nhẹ của trà sẽ khiến vị giác của bạn thêm kích thích, uống một ngụm sẽ lại muốn uống ngay ngụm thứ hai.', './public/images/sp/TRA_Hong Tra Milk Foam.png', 'Trà', 5),
(16, 'Trà đào - S', 26000, 'Sự hấp dẫn của trà đào đơn giản đến từ sự giản dị của thức uống này với sự kết hợp của hương vị trái đào tươi thanh ngọt trên nền trà đen chát nhẹ, kích thích vị giác của bạn ngay lần đầu thưởng thức.', './public/images/sp/TRA_Tra dao.png', 'Trà', 5),
(17, 'Sữa chua uống ổi hồng', 32000, 'Sữa chua uống là thức uống rất tốt cho sức khỏe, đặc biệt với hệ tiêu hóa và miễn dịch. Nay kết kết hợp cùng vị Ổi hồng thơm mát cho bạn một thức uống thơm ngon và bổ dưỡng.', './public/images/sp/TRA_Tra oi hong boba.png', 'Sữa chua', 6),
(18, 'Sữa chua cà phê', 32000, 'Sữa chua mịn màng chua chua ngọt ngọt thêm chút cà phê đắng nhẹ là sự kết hợp chưa bao giờ thôi làm người uống thương nhớ, bạn đã thử Sữa chua cà phê của Ông Bầu chưa?', './public/images/sp/SUACHUA_Sua chua ca phe.png', 'Sữa chua', 6),
(19, 'Sữa chua trân châu', 32000, 'Sự kết hợp mới mẻ của sữa chua mát lạnh và hạt trân châu giòn giòn sần sật, ngọt nhẹ vị caramel sẽ khiến bạn thấy thú vị đến ngụm cuối cùng khi thưởng thức đấy.', './public/images/sp/SUACHUA_Sua chua tran chau.png', 'Sữa chua', 6),
(20, 'Sữa chua uống vải', 32000, 'Sữa chua uống là thức uống rất tốt cho sức khỏe, đặc biệt với hệ tiêu hóa và miễn dịch. Nay kết kết hợp cùng vị Vải tươi thơm mát cho bạn một thức uống thơm ngon và bổ dưỡng.', './public/images/sp/SUACHUA_Sua chua uong vai.png', 'Sữa chua', 6),
(22, 'Cappuccino', 26000, 'Sự kết hợp của Espresso nồng nàn hòa quyện cùng sữa nóng thơm dịu, lớp bọt sữa bồng bềnh tạo nên tách Cappuccino truyền thống thơm ngon, sánh mịn.', './public/images/sp/MONNONG_Cappuccino.png', 'Latte nóng', 3),
(23, 'Cappuccino Trà xanh', 26000, 'Cappuccino trà xanh mang đậm hương vị tươi mát, đắng nhẹ của trà xanh hòa quyện cùng bọt sữa tươi sẽ mang đến cho bạn trải nghiệm vị giác hoàn hảo nhất. Đây là món uống không có cà phê (Caffeine).', './public/images/sp/MONNONG_Cappuccino Matcha.png', 'Latte nóng', 3),
(24, 'Cappuccino Hồng ngọc', 26000, 'Sự kết hợp mới lạ của hương vị thanh ngọt từ củ dền đỏ thêm chút béo béo của bọt sữa tươi mịn màng mang đến một ly Cappuccino hồng ngọc sáng tạo đầy khác biệt. Đây là món uống không có cà phê (Caffeine)', './public/images/sp/MONNONG_Cappuccino Hong Ngoc.png', 'Latte nóng', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `idUser` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idmenu` (`idMenu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `idMenu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_idmenu` FOREIGN KEY (`idMenu`) REFERENCES `menu` (`idMenu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
