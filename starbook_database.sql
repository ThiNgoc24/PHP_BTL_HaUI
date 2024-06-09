-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 13, 2023 lúc 08:38 AM
-- Phiên bản máy phục vụ: 8.0.17
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `starbook_database`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `status`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `summary` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `article_cat_id` int(11) NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `youtube` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `audio` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `name`, `summary`, `content`, `article_cat_id`, `image`, `status`, `youtube`, `audio`) VALUES
(1, 'Cuộc đời và sự nghiệp của nhà văn, tác giả Nguyễn Nhật Ánh', 'Nhà văn Nguyễn Nhật Ánh là cái tên không còn xa lạ với những độc giả trẻ tuổi ở Việt Nam. Ông được xem là một trong những tác giả thành công nhất trong thể loại tiểu thuyết văn học lứa tuổi thanh thiếu niên, với hơn 100 tác phẩm đã xuất bản và một số đầu sách đã được chuyển thể thành phim.', '<p>Nhà văn Nguyễn Nhật Ánh được sinh ra tại làng Đo Đo, xã Bình Quế, huyện Thăng Bình, tỉnh Quảng Nam vào ngày 7 tháng 5 năm 1955. Đến năm 1973, ông theo học ngành Sư phạm và chuyển vào sinh sống tại Sài Gòn. Ông là giáo viên dạy môn Ngữ văn tại trường THCS Bình Tây (Quận 6) từ năm 1983 - 1985.</p><figure class=\"image\"><img src=\"https://simg.zalopay.com.vn/zlp-website/assets/nna_1_0326bcb452.jpg\" alt=\"Cuộc đời và sự nghiệp của nhà văn Nguyễn Nhật Ánh\"><figcaption>Nguồn: vnexpress.net</figcaption></figure><p>Năm 1984, ông cho ra mắt tập thơ đầu tiên in chung với tác giả Lê Thị Kim, có tựa đề là Thành phố tháng tư. Cũng trong năm đó, ông cho ra mắt truyện dài đầu tiên có tên Trước vòng chung kết và được phát hành bởi Nhà xuất bản Măng non.</p><p>Tên tuổi của ông được nhiều người biết đến hơn là nhờ vào tác phẩm Chú bé rắc rối được phát hành vào năm 1989. Năm 1990, tác phẩm này được trao tặng giải thưởng Văn học Trẻ hạng A bởi Trung ương Đoàn TNCS Hồ Chí Minh. Năm 1995, thông qua cuộc trưng cầu ý kiến độc giả của Thành đoàn Thành phố Hồ Chí Minh và báo Tuổi trẻ, nhà văn Nguyễn Nhật Ánh được bình chọn là nhà văn được yêu thích nhất trong 20 năm (1975 - 1995). Bên cạnh đó, ông cũng được Hội Nhà Văn Thành phố Hồ Chí Minh bầu chọn là một trong 20 nhà văn trẻ tiêu biểu trong 20 năm (1975 - 1995).</p><p>Năm 1998, nhà văn Nguyễn Nhật Ánh được trao tặng giải “Nhà văn có sách bán chạy nhất” bởi Nhà xuất bản Kim Đồng. Đến năm 2003, bộ truyện nổi tiếng Kính Vạn Hoa được Trung ương Đoàn TNCS Hồ Chí Minh trao tặng huy chương Vì thế hệ trẻ.&nbsp;</p><p>Tác phẩm mới nhất của nhà văn Nguyễn Nhật Ánh được ra mắt vào tháng 1 năm 2022, có tựa đề là Ra bờ suối ngắm hoa kèn hồng. Cuốn sách này được tác giả sáng tác trong khoảng thời gian Sài Gòn giãn cách do dịch COVID-19, có chủ đề nhẹ nhàng gần gũi với lời văn đầy màu sắc.<br>&nbsp;</p><figure class=\"image\"><img src=\"https://simg.zalopay.com.vn/zlp-website/assets/nna_2_a5efb2321e.jpg\" alt=\"Ra bờ suối ngắm hoa kèn hồng là sách mới nhất của nhà văn Nguyễn Nhật Ánh được ra mắt vào tháng 1/2022\"><figcaption>Nguồn: vneconomy.vn</figcaption></figure><p>Nhắc tới tác giả Nguyễn Nhật Ánh, người ta sẽ nghĩ ngay đến bộ truyện nổi tiếng đã được chuyển thể thành phim - Kính Vạn Hoa, một bộ phim quá quen thuộc với thế hệ 8x, 9x. Kính Vạn Hoa có nội dung xoay quanh cuộc sống hàng ngày của 3 nhân vật chính Quý ròm, Nhỏ Hạnh và Tiểu Long, kể về những trò nghịch ngợm, thú vị của tuổi học trò, những bài học sâu sắc và ý nghĩa. Tác phẩm được xem như là một cuốn sách tâm lý dành cho mọi lứa tuổi học trò.</p><figure class=\"image\"><img src=\"https://simg.zalopay.com.vn/zlp-website/assets/nna_3_b5db06f3ea.jpg\" alt=\"Nhắc tới nhà văn Nguyễn Nhật Ánh, người ta sẽ nghĩ ngay đến bộ truyện nổi tiếng Kính Vạn Hoa\"><figcaption>Nguồn: nhandan.vn</figcaption></figure><p>Một tác phẩm tiêu biểu khác của nhà văn Nguyễn Nhật Ánh đó là Cho Tôi Xin Một Vé Đi Tuổi Thơ, được xuất bản vào năm 2008. Năm 2009, tác phẩm này được trao tặng giải thưởng Sách hay của Hội Xuất bản Việt Nam và Giải thưởng văn học của Hội Nhà văn Việt Nam. Đến năm 2010, quyển sách này đã giúp nhà văn Nguyễn Nhật Ánh gặt hái được Giải thưởng Văn học Đông Nam Á, hay còn gọi là Giải thưởng Văn học ASEAN. Tác phẩm này hiện đã được tái bản 67 lần với số lượng ấn phẩm lên đến hơn 500.000 quyển. Ngoài ra, tác phẩm này còn được chuyển ngữ sang các ngôn ngữ như tiếng Anh, Hàn Quốc, Thái Lan.</p><p>Các tác phẩm tiêu biểu khác có thể kể đến như Nữ Sinh, Tôi là BêTô, Ngồi khóc trên cây… Một vài tác phẩm đã được chuyển thể thành phim bao gồm Mắt Biếc, Cô gái đến từ hôm qua, Tôi thấy hoa vàng trên cỏ xanh.&nbsp;</p>', 1, '1697792059_nguyennhatanh.jpg', 1, 'GNFLdFctqPc', 'nguyennhatanh.mp3'),
(2, '‘Tôi thấy hoa vàng trên cỏ xanh’ - bài ca êm đềm về thời ấu thơ', 'Tác phẩm do Victor Vũ chuyển thể từ truyện dài của Nguyễn Nhật Ánh dẫn người xem vào chuyến du lịch về miền ký ức xưa cũ bằng những khung hình bắt mắt.', '<p>Khi công bố trailer hồi tháng 5, <i><strong>Tôi thấy hoa vàng trên cỏ xanh</strong></i> lập tức trở thành hiện tượng được kỳ vọng bậc nhất của năm. Phim ra rạp trong sự ngóng đợi của hàng loạt người hâm mộ điện ảnh. Tác phẩm dệt nên câu chuyện tuổi thơ ấm áp ở miền quê nghèo khó của Việt Nam xa xưa bằng những khung hình mượt mà, sạch sẽ. Phim có diễn xuất ấn tượng của bộ ba diễn viên nhí và những lời thoại nhấn nhá dễ thương. Tuy nhiên, đây vẫn là một tác phẩm dành cho đại chúng với những yếu tố khiến cho mọi khán giả đều có thể hiểu và cảm nhận được, chứ không mang tính tác giả hay có những sáng tạo nghệ thuật đột phá.</p><figure class=\"image image-style-side\"><img src=\"https://i1-giaitri.vnecdn.net/2022/04/01/HVCX-poster-3364-1443661903-3677-1648784520.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=lGyKteFbwW8SwBcm3q5Xzg\" alt=\"Poster phim Tôi thấy hoa vàng trên cỏ xanh.\"></figure><p>Poster phim \"Tôi thấy hoa vàng trên cỏ xanh\".</p><p>Phiên bản điện ảnh thừa hưởng lối kể ý nhị, hòa nhiều mảng miếng vụn vặt thành một bức tranh tổng thể từ tiểu thuyết gốc. Toàn bộ tác phẩm là những mẩu chuyện rời rạc, không đầu không cuối về cuộc sống theo nhịp điệu chậm rãi của ba đứa nhỏ ở ngôi làng nghèo ven biển miền Trung Việt Nam cuối những năm 1980. Đặt câu chuyện vào bối cảnh quá khứ, phim tập hợp ký ức của người trưởng thành về ngày thơ bé xa xưa. Chúng hệt như những mảng miếng kỷ niệm tươi sáng về quá khứ u tối và nghèo khổ. Nơi ấy là những ngày cắp sách đến trường với khăn quàng đỏ bay phấp phới trong gió mùa thu. Nơi đó là những ngày thả diều trên sông, những hôm đi bắt ốc, những đợt lũ ngập trắng nhà, những mùa đói ăn cháo cầm hơi, những day dứt về tình anh em hay rung động giới tính đầu đời đầy trong trẻo.</p><p>Victor Vũ tỏ ra là một nhà làm phim có \"chất\" tâm lý tương hợp với nhà văn Nguyễn Nhật Ánh. Anh cụ thể hóa được những hình dung sinh động trong những dòng văn mô tả nhẹ nhàng của tác giả thành những hình ảnh mượt mà. Sự kết hợp giữa chất văn êm đềm của Nguyễn Nhật Ánh và màu phim sạch sẽ của đạo diễn Việt kiều dệt nên một câu chuyện điện ảnh ấm áp, một tổ kén tuổi thơ dung dị của thế hệ 7x và 8x ở Việt Nam.</p><p>Mạch phim không đi theo logic nguyên nhân - kết quả, hướng tới mục tiêu cuối cụ thể, cũng không tăng kịch tính lên đỉnh điểm như thông thường. Thay vào đó, tác phẩm dịu dàng dẫn dắt người xem bằng nhịp điệu của cảm xúc. Những khuôn hình chảy trôi nhẹ nhàng như nhấn khán giả vào chuyến du hành về miền quá khứ. Theo cách này, phim tận dụng yếu tố không gian nhiều hơn là thời gian. Nhịp dựng chậm rãi của phim hệt như nhịp sống dung dị của nhân vật.</p><figure class=\"image image-style-side\"><picture><source srcset=\"https://i1-giaitri.vnecdn.net/2022/04/01/3qB2ruoF2LRFfuZEktPMf0UF2ZuW7o-3193-8026-1648784520.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=5IyrckWhOdjjahxxeb_yFw\"><img src=\"https://i1-giaitri.vnecdn.net/2022/04/01/3qB2ruoF2LRFfuZEktPMf0UF2ZuW7o-3193-8026-1648784520.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=5IyrckWhOdjjahxxeb_yFw\" alt=\"Ba nhân vật chính trong phim là hai anh em Tường (trái) - Thiều và cô bé Mận.\"></picture></figure><p>Ba nhân vật chính trong phim là hai anh em Tường (trái) - Thiều và cô bé Mận.</p><p>Hàng loạt khung hình toàn cảnh lột tả vẻ đẹp miền quê Việt Nam gây choáng ngợp với số đông khán giả. Từ đầu tới cuối, các khung hình góc rộng xử lý bằng máy quay flycam (thiết bị ghi hình bay trên cao và điều khiển được từ xa) đưa đến những bức tranh đồng quê miền Trung ngập màu xanh thiên nhiên với đồng lúa rì rào, những con lạch, con suối có trâu bò lướt qua hoặc những ghềnh đá ven biển. Lối quay phim di chuyển máy quay liên tiếp khiến người xem có cảm giác như được ngồi trên trực thăng ngắm cảnh Việt Nam từ trên cao. Những hình ảnh đẹp giống như trong chuyến du lịch đồng quê thanh khiết.</p>', 2, 'tthvtcx.jpg', 1, 'wmjiCP6R-7I', 'tthvtcx.mp3'),
(6, 'Nỗi lưu luyến mùa hè của nhà văn Nguyễn Nhật Ánh', 'Sáng 19-9, nhà văn Nguyễn Nhật Ánh đã có buổi ra mắt cuốn sách \"Mùa hè không tên\", do Nhà xuất bản Trẻ phát hành, với số lượng in lần đầu là 80.000 bản.', '<p><br><img src=\"https://nld.mediacdn.vn/thumb_w/684/291774122806476800/2023/9/19/z470653109932541d76b2e3472f6dba3337be5a289d390-16950958160051839338317.jpg\" alt=\"Nỗi lưu luyến mùa hè của nhà văn Nguyễn Nhật Ánh - Ảnh 1.\"></p><p><i>Nhà văn </i><a href=\"https://nld.com.vn/nguyen-nhat-anh.html\"><i>Nguyễn Nhật Ánh</i></a><i> giới thiệu về cuốn sách mới của mình</i></p><p>Nhà văn <a href=\"https://nld.com.vn/nguyen-nhat-anh.html\">Nguyễn Nhật Ánh</a> có một niềm luyến lưu đặc biệt với mùa hè. Ông từng chia sẻ: “Những mùa hè tuổi thơ ngây ngô và nghịch ngợm đó đã đi vào các tác phẩm của tôi một cách tự nhiên. Vì trong ký ức của tôi, đã là học trò thì không thể không gắn với những ngày hè rong chơi thỏa thích. Những mùa hè hoa mộng đó thậm chí đã trở thành nhan đề hai cuốn sách tôi từng xuất bản: Hạ đỏ và Bảy bước tới mùa hè.”</p><p>Và lần này, không khí mùa hè một lần nữa rộn ràng trong tác phẩm mới nhất của nhà văn. Nhưng tại sao lại là \"mùa hè không tên\"?</p><p>\"Đó là mùa hè thật đặc biệt với tôi. Sau mùa hè đó, cuộc sống của tôi đã thay đổi mãi mãi. Vì vậy tôi muốn đặt cho nó một cái tên để nó không giống với những mùa hè khác trong đời tôi mỗi khi tôi nhớ về.</p><p>Tôi định gọi nó là mùa hè chia tay, mùa hè ưu tư, mùa hè định mệnh, hay sến sẩm một chút là mùa hè có mây tím bay nhưng rồi tôi thấy không cái tên nào thật sự phù hợp.</p><p>Cuối cùng, tôi nghĩ nếu cần phải có một cái tên thì tôi sẽ đặt tên cho nó là mùa hè không tên\" - nhà văn <a href=\"https://nld.com.vn/nguyen-nhat-anh.html\">Nguyễn Nhật Ánh</a> kể về tựa đề cuốn sách mới của ông.</p><p><img src=\"https://nld.mediacdn.vn/thumb_w/684/291774122806476800/2023/9/19/z4706530924859ef1e90e0a82ab7c9b1aeb76c919bbfc4-1695095815905877093949.jpg\" alt=\"Nỗi lưu luyến mùa hè của nhà văn Nguyễn Nhật Ánh - Ảnh 3.\"></p><p><i>Nhà văn Nguyễn Nhật Ánh ký tặng sách</i></p><p>\"Mùa hè không tên\" có những câu chuyện tuổi thơ với vô số trò tinh nghịch, những thoáng thinh thích hồi hộp cùng vô vàn kỷ niệm. Để rồi khi những tháng ngày trong sáng của tình bạn dần qua, bọn nhỏ trong mỗi gia đình bình dị lớn lên cùng chứng kiến những giây phút cảm động của câu chuyện tình thân, nỗi khát khao hạnh phúc êm đềm, cùng bỡ ngỡ bước vào tuổi lớn nhiều yêu thương mang cả màu va vấp.</p><p>Thùy Trang, ảnh: Trần Thắng</p>', 3, 'mhkt.webp', 1, '', 'mhkt.mp3'),
(7, 'Triệt phá đường dây sản xuất sách giả ở Hà Nội, thu giữ hơn 100 tấn sách', 'Nguyễn Tiến Đạt, Phan Thành Long, Đinh Văn Thịnh cấu kết, tổ chức in ấn sách giả. Công an đã triệt phá đường dây này, thu hơn 100 tấn sách giả.', '<figure class=\"image\"><img src=\"https://media-cdn-v2.laodong.vn/storage/newsportal/2023/1/4/1134478/Sach-Gia2-9367-4526.jpeg?w=660\" alt=\"Triệt phá đường dây sản xuất sách giả ở Hà Nội, thu giữ hơn 100 tấn sách\"></figure><p><i>Kho sản xuất sách giả của Đạt. Ảnh: Ý Hưng</i></p><p>Ngày 4.1, Cơ quan An ninh điều tra Công an Hà Nội thông tin vừa khởi tố, tạm giam các bị can Nguyễn Tiến Đạt (30 tuổi), Phan Thành Long (24 tuổi) và Đinh Văn Thịnh (31 tuổi) về tội \"Sản xuất, buôn bán hàng giả\".<br>&nbsp;</p><p>Trước đó, qua quá trình trinh sát, đơn vị phát hiện đối tượng Nguyễn Tiến Đạt trú tại khu đô thị Nam Trung Yên, phường Yên Hòa, quận Cầu Giấy, Hà Nội thuê nhiều địa điểm thuộc địa bàn huyện Quốc Oai, huyện Thạch Thất để sản xuất, buôn bán số lượng lớn các loại sách không có nguồn gốc xuất xứ.<br>&nbsp;</p><p>Ngày 20.12.2022, các tổ công tác của Phòng An ninh chính trị nội bộ, An ninh điều tra phối hợp với Công an các huyện Thạch Thất, Quốc Oai - Hà Nội và Công an các xã trên địa bàn đã đồng loạt ra quân kiểm tra 8 kho xưởng liên quan đến việc in ấn, kinh doanh <a href=\"https://laodong.vn/phap-luat/vu-32-trieu-sach-giao-khoa-gia-tiep-tuc-truy-to-ong-tran-hung-nhan-hoi-lo-1127850.ldo\">sách giả</a>.<br>&nbsp;</p><p>Tại đây, cơ quan công an thu giữ khoảng 100 tấn sách với hơn 400 đầu sách và gần 400.000 cuốn; 2 máy in 4 màu và 1 màu, 37 máy photocoppy, 6 máy cắt, 10 máy bìa, 1 máy ra kẽm, 2 hệ thống cắt gập (2 máy gấp, 2 máy cán) 200 bản kẽm.</p><p>Kết quả xác minh ban đầu xác định, sách do Đạt rao bán đều là sách giả, không phải của các nhà xuất bản in ấn, phát hành. Quá trình trinh sát phát hiện các đối tượng sử dụng ôtô tải vận chuyển sách từ xưởng photocoppy in ấn đến các kho sách.</p><p>Theo điều tra, năm 2018, Nguyễn Tiến Đạt mở cửa hàng bán sách cũ tại địa chỉ 676 đường Láng, quận Đống Đa, Hà Nội. Quá trình buôn bán sách cũ, bị can thấy nhu cầu của khách hàng nhiều mà nguồn sách không có.</p><p>Khoảng tháng 10-2020, Đạt nảy sinh ý định thuê kho xưởng, mua máy móc sản xuất, đóng gói sách giả để bán cho khách hàng có nhu cầu.<br>&nbsp;</p><p>Đạt rủ Phan Thành Long (cháu họ của Đạt) và Đinh Văn Thịnh góp vốn cùng làm. Long chịu trách nhiệm quản lý công việc tại xưởng in, photocopy. Đạt chịu trách nhiệm điều hành mọi hoạt động sản xuất, mua bán.</p><p>Tuy nhiên, trên thực tế, do Thịnh không có tiền nên chỉ được thuê quản lý xưởng photocoppy cùng Long và được trả lương 9 triệu đồng/tháng.</p><p>Nhóm Đạt, Thịnh, Long đã tổ chức sản xuất, in ấn, đóng gói và buôn bán số lượng lớn sách của nhiều nhà xuất bản khác nhau mà không có bản quyền xuất bản, không có hợp đồng liên kết xuất bản, in ấn và không có giấy phép hoạt động in ấn theo quy định.</p><p>Vụ án đang được mở rộng điều tra.</p>', 4, 'sachlau.jpeg', 1, 'WbBRJk5TVfI', 'sachlau.mp3'),
(8, 'Xôn xao bài thơ trong sách giáo khoa dạy trẻ nói dối, Bộ GD&ĐT nói gì?', 'Bộ GD&ĐT lên tiếng trước thông tin phản ánh một số bài thơ trong sách giáo khoa chương trình giáo dục phổ thông mới có nội dung dạy học sinh nói dối.', '<p>Bộ GD&amp;ĐT khẳng định một số ngữ liệu tiếng Việt gây tranh cãi trong các bài thơ như: \"Giã gạo thổi cơm\", \"Bắn tung tóe\", \"Bạn An dũng cảm\", \"Bé xách đỡ mẹ\", \"Vẽ gì khó\"... không có trong sách giáo khoa hiện hành đang được giảng dạy tại các nhà trường.</p><p>Hiện Bộ GD&amp;ĐT đã đề nghị các cơ quan chức năng vào cuộc điều tra nguồn gốc thông tin trên, đồng thời làm rõ trách nhiệm của các cá nhân, tổ chức đăng tải, xuyên tạc, ảnh hưởng uy tín.</p><p><br><img src=\"https://cdn-i.vtcnews.vn/resize/th/upload/2023/10/18/392810694724818496358152827704566299996247n-06410473.jpeg\" alt=\"Bộ GD&amp;ĐT khẳng định bài đồng dao &quot;Giã gạo thổi cơm&quot; không có sách giáo khoa (Ảnh: MOET).\"></p><p>Bộ GD&amp;ĐT khẳng định bài đồng dao \"Giã gạo thổi cơm\" không có sách giáo khoa (Ảnh: MOET).</p><p>Trước đó, mạng xã hội lan truyền hình ảnh chụp trang sách có in bài đồng dao \"Giã gạo thổi cơm\" có nội dung như sau: \"Giã gạo thổi cơm trưa/ Còn thừa để đến tối/ Ai vay thì nói dối/ Nhà tôi hết gạo rồi/ Chống cối lên\". Nhiều ý kiến bình luận cho rằng nội dung của bài mang ý nghĩa xấu khi dạy trẻ con nói dối, không phù hợp để đưa vào sách giáo khoa.</p><p>&nbsp;</p><p>Theo tìm hiểu, thực tế bài đồng dao này nằm trong cuốn \"Nựng nựng nà nà\" thuộc bộ sách \"Đồng dao cho bé\" của Nhà xuất bản Kim Đồng, in năm 2022.&nbsp;</p><p>Ngoài bài đồng dao này, nhiều ngữ liệu văn học khác cũng bị các trang mạng chia sẻ rầm rộ để phê phán sách giáo khoa hiện hành nhưng thực chất không còn được lưu hành.</p><p><img src=\"https://cdn-i.vtcnews.vn/resize/th/upload/2023/10/18/3927650607248187330247958557415715918106401n-06420016.jpeg\" alt=\"Xôn xao bài thơ trong sách giáo khoa dạy trẻ nói dối, Bộ GD&amp;ĐT nói gì? - 2\"></p><p><img src=\"https://cdn-i.vtcnews.vn/resize/th/upload/2023/10/18/3928190587248185163581507289027629785236862n-06420789.jpeg\" alt=\"Xôn xao bài thơ trong sách giáo khoa dạy trẻ nói dối, Bộ GD&amp;ĐT nói gì? - 3\"></p><p>Một số ngữ liệu gây xôn xao. (Ảnh: MOET)</p><p>Những ngữ liệu này từng có mặt trong sách giáo khoa Tiếng Việt 1 công nghệ&nbsp;giáo dục&nbsp;(bộ sách giáo khoa được biên soạn riêng theo công nghệ giáo dục của giáo sư Hồ Ngọc Đại), bộ sách \"Thực hành kỹ năng sống\" của Nhà xuất bản Giáo dục hoặc truyện Ehon...</p><p>Ngoài ra, hiện dư luận cũng đang tranh cãi về bài thơ \"Bắt nạt\" của tác giả Nguyễn Thế Hoàng Linh in trong sách giáo khoa ngữ văn 6 bộ \"Kết nối tri thức với cuộc sống\" bị phản ứng mạnh mẽ, bài thơ khác có tên \"Con chào mào\" của tác giả Mai Văn Phấn cũng bị cho là kém chất lượng. Hiện Bộ GD&amp;ĐT, các đơn vị biên soạn, nhà xuất bản chưa lên tiếng trước những phản ứng trái chiều từ dư luận.</p><p><strong>HÀ CƯỜNG</strong></p>', 4, 'baithobatnat.webp', 1, 'edPQVAaXtqA', 'batnat.mp3'),
(9, 'Bộ GD&ĐT kiểm tra việc biên soạn, đấu thầu, in và phát hành sách giáo khoa', 'Thủ tướng giao Bộ Giáo dục và Đào tạo thực hiện ngay kiểm tra, giám sát việc tổ chức biên soạn, đấu thầu, in và phát hành sách giáo khoa', '<p>Ngày 16/8, Thủ tướng Phạm Minh Chính ký công điện yêu cầu một số Bộ liên quan và UBND các tỉnh, thành phố bảo đảm sách giáo khoa và giáo viên kịp thời cho năm học 2023 - 2024.&nbsp;&nbsp;</p><p>Thủ tướng nhìn nhận, việc biên soạn, lựa chọn, in ấn, phát hành sách giáo khoa còn chậm; ở nhiều địa phương đội ngũ giáo viên còn thừa thiếu cục bộ, số lượng giáo viên chưa đáp ứng theo quy định, công tác tuyển dụng giáo viên còn gặp nhiều khó khăn; chế độ chính sách còn bất cập, cần điều chỉnh phù hợp, hiệu quả.</p><p><img src=\"https://cdn-i.vtcnews.vn/resize/th/upload/2023/08/16/sach-giao-khoa-16470184.jpg\" alt=\"Thủ tướng yêu cầu bảo đảm sách giáo khoa và giáo viên kịp thời cho năm học 2023 - 2024.\"></p><p>Thủ tướng yêu cầu bảo đảm sách giáo khoa và giáo viên kịp thời cho năm học 2023 - 2024.</p><p>Để đảm bảo điều kiện triển khai thực hiện nhiệm vụ năm học 2023 - 2024 hiệu quả, chất lượng đáp ứng yêu cầu Chương trình giáo dục phổ thông, giáo dục mầm non, Thủ tướng yêu cầu Bộ Giáo dục và Đào tạo chỉ đạo, đôn đốc các nhà xuất bản, tổ chức, cá nhân tham gia biên soạn sách giáo khoa thực hiện rà soát, công tác biên soạn quy trình thực hiện và đấu thầu rộng rãi, công khai, minh bạch về việc in, phát hành sách giáo khoa bảo đảm tăng chất lượng, giảm giá thành.</p><p>Đồng thời, Bộ Giáo dục và Đào tạo cần thực hiện ngay kiểm tra, giám sát việc tổ chức biên soạn, đấu thầu, in và phát hành sách giáo khoa.</p><p>Bộ Giáo dục và Đào tạo cũng được giao nhiệm vụ chỉ&nbsp;đạo các địa phương tăng cường trách nhiệm về việc rà soát công tác biên soạn lựa chọn, cung ứng, sử dụng sách giáo khoa, tài liệu giáo dục của địa phương, tài liệu tham khảo theo đúng quy định.</p><p>Bộ cần có phương án hỗ trợ sách giáo khoa cho các đối tượng học sinh hộ nghèo, cận nghèo, học sinh thuộc đối tượng chính sách, học sinh có hoàn cảnh khó khăn, yếu thế, vùng sâu, vùng xa, đồng bào dân tộc thiểu số, bảo đảm đầy đủ, thuận lợi trước thềm năm học mới.</p><p>Bên cạnh đó, Bộ Giáo dục và Đào tạo phối hợp với Bộ Nội vụ chỉ đạo tổ chức tuyển dụng giáo viên, thực hiện rà soát, cơ cấu lại, bố trí, sử dụng giáo viên bảo đảm đủ giáo viên dạy đúng, đủ các môn học theo quy định; thực hiện linh hoạt phương án điều chuyển, biệt phái giáo viên từ nơi thừa sang nơi thiếu; chủ động xây dựng các phương án để có nguồn tuyển dụng giáo viên kịp thời, phù hợp, hiệu quả với điều kiện cụ thể tại địa phương.</p><p>Người đứng đầu Chính phủ giao Bộ Nội vụ kiểm tra, đôn đốc các địa phương khẩn trương thực hiện việc cơ cấu lại, sắp xếp, tuyển dụng giáo viên theo chỉ tiêu biên chế được phân bổ theo Quyết định số 72 của Bộ Chính trị bảo đảm về số lượng và chất lượng.</p><p>Bộ Nội vụ hướng dẫn các địa phương thực hiện Nghị định số 111/2022 của Chính phủ trong trường hợp chưa thể bố trí đủ giáo viên theo định mức bảo đảm thực hiện chủ trương \"có học sinh, phải có giáo viên đứng lớp\" phù hợp, hiệu quả.</p><p>Bộ Nội vụ khẩn trương rà soát, kiểm tra, tổng hợp nhu cầu giáo viên năm học 2023-2024 còn thiếu của các địa phương, báo cáo Thủ tướng để trình cấp có thẩm quyền xem xét, quyết định.</p><p>Theo công điện của Thủ tướng,&nbsp;Bộ Tài chính có trách nhiệm kiểm tra địa phương thực hiện bảo đảm mức chi tối thiểu 20% ngân sách địa phương cho giáo dục theo quy định của Luật Giáo dục 2019 và Quyết định số 30/2021 của Thủ tướng.</p><p>Về phía UBND tỉnh, thành phố trực thuộc Trung ương, Thủ tướng giao rà soát, kiểm tra, đôn đốc đảm bảo đủ cơ sở vật chất, thiết bị giáo dục trước thềm năm học mới. Khẩn trương xây dựng kế hoạch, tuyển dụng số biên chế được giao theo Quyết định số 72 của Bộ Chính trị.</p><p>Khẩn trương khắc phục tình trạng cơ cấu đội ngũ giáo viên còn bất cập giữa các cấp học và các địa bàn của địa phương; thực hiện linh hoạt, bố trí, sắp xếp giáo viên bảo đảm đủ về số lượng, đồng bộ về cơ cấu; trong trường hợp chưa thể tuyển dụng đủ giáo viên theo định mức thì thực hiện các giải pháp hợp đồng giáo viên theo Nghị định số 111/2022 của Chính phủ.</p><p>Thủ tướng yêu cầu các địa phương phối&nbsp;hợp với các nhà xuất bản tổ chức việc cung ứng sách giáo khoa trên địa bàn, bảo đảm chất lượng; tuyệt đối không để xảy ra tình trạng chậm, thiếu sách giáo khoa hoặc tăng giá bất hợp lý trước khi khai giảng năm học mới.</p><p>Ngoài ra phải có phương án hỗ trợ sách giáo khoa cho các đối tượng học sinh hộ nghèo, cận nghèo, học sinh thuộc đối tượng chính sách, học sinh có hoàn cảnh khó khăn, yếu thế, vùng sâu, vùng xa, đồng bào dân tộc thiểu số, bảo đảm đầy đủ, thuận lợi trước thềm năm học mới.</p><p><strong>ANH VĂN</strong></p>', 4, 'bgddtkt.webp', 1, '', 'sgk.mp3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article_categories`
--

CREATE TABLE `article_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `article_categories`
--

INSERT INTO `article_categories` (`id`, `name`, `status`) VALUES
(1, 'Giới thiệu tác giả nổi tiếng', 1),
(2, 'Giới thiệu phim chuyển thể từ truyện', 1),
(3, 'Giới thiệu sách mới', 1),
(4, 'Tin tức chung', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article_comments`
--

CREATE TABLE `article_comments` (
  `id` int(11) NOT NULL,
  `memberId` int(11) NOT NULL,
  `articleId` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `authors`
--

INSERT INTO `authors` (`id`, `name`, `image`, `status`) VALUES
(1, 'Nguyễn Nhật Ánh', 'nguyennhatanh.jpg', 1),
(2, 'Nguyễn Duy Cần', '', 1),
(3, 'Giác Minh Luật', 'giacminhluat.png', 1),
(4, 'Vũ Trọng Phụng', '', 1),
(5, 'Thích Nhất Hạnh', 'thichnhathanh.webp', 1),
(7, 'Bát Nguyệt Trường An', 'batnguyettruongan.webp', 1),
(8, 'Nhiều Tác Giả', '', 1),
(9, 'Luis Sepulveda', '', 1),
(10, 'Đào Hải', 'daohai.jpg', 1),
(11, 'Lưu Hiểu Huy', '', 1),
(12, 'Higashino Keigo', '', 1),
(13, 'Richard Holloway', 'holloway.jpg', 1),
(14, 'Hemma', '', 1),
(15, 'Lê Thành Khôi', '', 1),
(16, 'Ben Wilson', '', 1),
(17, 'Phan Huy Xu', '', 1),
(18, 'Trần Quang Đức', 'tranquangduc.jpg', 1),
(19, 'Nguyễn Phong Việt', 'npv.jpg', 1),
(20, 'Tây Tử Tự', '', 1),
(21, 'Lưu Khánh Bang', '', 1),
(24, 'Giá Oản Trúc', '', 1),
(25, 'Nguyễn Quang Ngọc', '', 1),
(26, 'Hoàng Cao Khải', '', 1),
(27, 'Jennifer Moore - Mallinos', '', 1),
(28, 'Đào Thiên An', '', 1),
(29, 'Lý Kiệt', '', 1),
(30, 'Mèo Maverick', '', 1),
(31, 'Yuji Akaba', '', 1),
(32, 'Hidehiko Hamada', '', 1),
(33, 'Đại Minh', '', 1),
(34, 'Hàn Ni', '', 1),
(35, 'Tống Mặc', '', 1),
(36, 'Vex King', '', 1),
(37, 'T.J.Klune', '', 1),
(38, 'Henryk Sienkiewicz', '', 1),
(39, 'Nina George', '', 1),
(40, 'Toni Morrison', '', 1),
(41, 'Delia Owens', '', 1),
(42, 'Jeffrey Archer', '', 1),
(43, 'Ở Đây Zui Nè', '', 1),
(44, 'Miguel De Cervantes', '', 1),
(45, 'Annie Ernaux', '', 1),
(46, 'Neil Gaiman', '', 1),
(47, 'GUILLERMO DEL TORO', '', 1),
(48, 'Emily Bronte', '', 1),
(49, 'Rudyard Kipling', '', 1),
(50, 'Francis Scott Key Fitzgerald', '', 1),
(51, 'Ernest Hemingway', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `product_name`, `product_image`, `product_price`, `member_id`, `quantity`) VALUES
(85, 43, 'Mùa Hè Không Tên (Bìa Cứng)', 'mhkt.webp', 195000, 10, 1),
(86, 21, 'Vẻ Đẹp Của Sự Cô Đơn', 'vdcscd.webp', 95000, 10, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`) VALUES
(1, 'Sách Văn Học', 1),
(2, 'Sách Kỹ Năng', 1),
(3, 'Sách Thiếu Nhi', 1),
(4, 'Sách Nước Ngoài', 1),
(5, 'Truyện Tranh', 1),
(6, 'Sách Trinh Thám', 1),
(7, 'Sách Tôn Giáo', 1),
(8, 'Sách Tâm Lý - Giới tính', 1),
(9, 'Sách Lịch Sử', 1),
(10, 'Sách Văn Hóa - Du Lịch', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `memberId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `content` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `memberId`, `productId`, `date`, `content`, `status`) VALUES
(1, 1, 2, '2023-09-27 19:33:53', 'comment test 1', 0),
(2, 1, 5, '2023-09-27 19:34:37', 'comment test 2', 0),
(3, 1, 5, '2023-09-27 19:35:55', 'comment test 3', 0),
(4, 1, 5, '2023-09-27 19:36:03', 'comment test 3', 0),
(5, 1, 5, '2023-09-27 19:36:11', 'test 5', 0),
(17, 1, 2, '2023-09-27 22:30:57', 'alo', 0),
(18, 1, 5, '2023-09-28 17:49:17', 'áaa', 0),
(19, 1, 5, '2023-09-28 17:53:16', 'mmm', 0),
(20, 1, 5, '2023-09-28 18:05:14', 'abc', 0),
(21, 1, 5, '2023-09-28 18:09:15', 'abc', 0),
(22, 1, 5, '2023-09-28 18:09:27', 'abc', 0),
(23, 1, 2, '2023-09-28 18:12:09', 'mmmmm', 0),
(24, 1, 2, '2023-09-28 18:13:10', 'mmmmm', 0),
(25, 1, 16, '2023-09-30 20:25:22', '12', 0),
(26, 1, 28, '2023-09-30 20:42:00', 'alo', 0),
(27, 1, 28, '2023-09-30 20:43:00', 'alo', 0),
(28, 2, 20, '2023-09-30 22:26:10', 'xin chào', 0),
(29, 1, 16, '2023-10-13 15:27:20', 'alo', 0),
(30, 1, 16, '2023-10-13 15:27:53', 'sách hay', 0),
(31, 10, 16, '2023-10-29 20:07:24', 'xin chào', 0),
(32, 10, 45, '2023-10-29 20:12:46', 'ok nhá bạn', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `fullname`, `phonenumber`, `address`, `email`, `status`) VALUES
(1, 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Lương Minh Anh', '0357227222', 'Hà Nội', 'luongminhanh.thcstm@gmail.com', 1),
(2, 'user1', '16bc9ae9cd9b79843713fc4646981ba9', 'User 1', '01232323232', 'Hà Nội', 'luongminhanh.thcstm@gmail.com', 1),
(5, 'minhanh20', 'd41d8cd98f00b204e9800998ecf8427e', 'Lương Minh Anh', '0357227195', 'Đại học Công Nghiệp Hà Nội', 'luongminhanh.thcstm@gmail', 0),
(6, 'minh12', 'd41d8cd98f00b204e9800998ecf8427e', 'abcd', '0357227195', 'ha noi', 'minh@gmail.com', 1),
(7, 'user3', 'e10adc3949ba59abbe56e057f20f883e', 'minhanh', '0234567890', 'ggg', 'mk@GMAIL.COM', 0),
(8, 'minhanh12345', 'e10adc3949ba59abbe56e057f20f883e', 'minhanh', '0123456792', 'â', 'a@gmail.com', 1),
(9, 'mia', 'd41d8cd98f00b204e9800998ecf8427e', 'minh anh', '01657227195', 'hà nội', 'anh@gmail.com', 1),
(10, 'minh11', 'e10adc3949ba59abbe56e057f20f883e', 'minha nh', '0982837373', '32', 'a@gmail.com', 1),
(11, 'anh123', 'e10adc3949ba59abbe56e057f20f883e', 'mìdweh', '0345676564', 'mdowiud', 'a@gmail.com', 1),
(15, 'user22', 'e67c10a4c8fbfc0c400e047bb9a056a1', 'Anh Minh Lương', '22', 'Trường ĐH Công Nghiệp Hà Nội Khu A', 'luongminhanh.haui@gmail.com', 1),
(16, 'admin', '9cbf8a4dcb8e30682b927f352d6559a0', 'Anh Minh Lương', '16456', 'Trường ĐH Công Nghiệp Hà Nội Khu A', 'luongminhanh@auigmail.com', 1),
(17, 'user111', '9cbf8a4dcb8e30682b927f352d6559a0', 'ưdqwd', '015đư', 'dqwdwq', '111@gmail.com', 1),
(18, 'user122', '9cbf8a4dcb8e30682b927f352d6559a0', 'dựbe', '0379739', 'sfdf', 'abc@gmail.com', 1),
(19, 'tran', '9cbf8a4dcb8e30682b927f352d6559a0', 'Nguyễn Văn Trân', '0387658761', 'ĐH Công Nghiệp Hà Nội', 'tran@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_method_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1: Chưa xử lý; 2: Đang xử lý; 3: Đã xử lý; 4: Hủy',
  `receiver` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `order_method_id`, `member_id`, `order_date`, `status`, `receiver`, `address`, `phone`, `email`, `note`) VALUES
(55, 1, 10, '2023-11-13 14:28:16', 1, 'minha nh', '32', '982837373', 'a@gmail.com', ''),
(56, 5, 10, '2023-11-13 14:28:32', 1, 'minha nh', '32', '982837373', 'a@gmail.com', ''),
(57, 5, 10, '2023-11-13 14:29:03', 1, 'minha nh', '32', '982837373', 'a@gmail.com', ''),
(58, 1, 10, '2023-11-14 22:09:22', 1, 'minha nh', '32', '982837373', 'a@gmail.com', 'tặng quà cho tôi nhé :))'),
(59, 1, 10, '2023-11-14 22:09:29', 1, 'minha nh', '32', '982837373', 'a@gmail.com', 'tặng quà cho tôi nhé :))'),
(60, 1, 10, '2023-11-14 22:15:27', 1, 'minha nh', '32', '982837373', 'a@gmail.com', 'tặng quà cho tôi nhé :))'),
(61, 1, 10, '2023-11-14 22:17:53', 1, 'minha nh', '32', '982837373', 'a@gmail.com', ''),
(62, 1, 10, '2023-11-14 22:19:25', 1, 'minha nh', '32', '982837373', 'a@gmail.com', ''),
(63, 1, 10, '2023-11-14 22:21:10', 1, 'minha nh', '32', '982837373', 'a@gmail.com', ''),
(64, 1, 10, '2023-11-14 22:21:23', 1, 'minha nh', '32', '982837373', 'a@gmail.com', ''),
(65, 1, 10, '2023-11-14 22:25:09', 1, 'minha nh', '32', '982837373', 'a@gmail.com', ''),
(66, 1, 10, '2023-11-14 22:27:35', 1, 'minha nh', '32', '982837373', 'a@gmail.com', ''),
(67, 1, 1, '2023-11-18 20:22:39', 1, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(69, 1, 1, '2023-11-19 10:41:35', 1, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(70, 1, 1, '2023-11-19 10:43:40', 1, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(71, 1, 1, '2023-11-19 15:57:58', 1, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(73, 5, 1, '2023-11-20 10:02:40', 1, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(74, 5, 1, '2023-11-20 10:08:00', 1, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(75, 5, 1, '2023-11-20 10:10:04', 1, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(76, 5, 1, '2023-11-20 10:10:21', 1, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(77, 5, 1, '2023-11-20 10:11:07', 1, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(78, 1, 1, '2023-11-20 15:35:30', 2, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(79, 5, 1, '2023-11-20 15:48:32', 1, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(80, 5, 1, '2023-11-20 15:52:34', 1, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(81, 1, 1, '2023-11-20 15:58:19', 2, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(82, 1, 1, '2023-11-20 16:00:29', 3, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(83, 4, 1, '2023-11-20 20:31:22', 3, '', '', '', NULL, ''),
(85, 4, 1, '2023-11-20 21:03:23', 2, 'User Test', 'Hà Nội', '0357217213', 'user@gmail.com', ''),
(86, 5, 1, '2023-11-20 21:33:49', 4, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(87, 5, 1, '2023-11-20 21:36:39', 4, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(88, 4, 1, '2023-11-20 22:50:01', 1, 'User Test', 'Hà Nội', '0357217213', 'user@gmail.com', ''),
(89, 5, 18, '2023-11-28 11:32:54', 4, 'Lương Minh Anh', 'Trường ĐH Công Nghiệp HN cs1', '37568974', 'abc@gmail.com', 'ko'),
(90, 5, 18, '2023-11-28 11:44:44', 4, 'dựbe', 'sfdf', '379739', 'abc@gmail.com', ''),
(91, 1, 18, '2023-11-28 13:02:20', 1, 'dựbe', 'sfdf', '379739', 'abc@gmail.com', ''),
(92, 5, 18, '2023-11-28 13:05:20', 4, 'dựbe', 'sfdf', '379739', 'abc@gmail.com', ''),
(93, 1, 1, '2023-11-28 17:31:33', 1, 'User Test', 'Hà Nội', '357217213', 'user@gmail.com', ''),
(94, 1, 1, '2023-12-06 20:27:19', 1, 'User Test', 'Hà Nội', '357217213', 'luongminhanh@gmail.com', 'Giao trước 10/12 giúp tôi'),
(95, 1, 1, '2023-12-06 20:30:50', 1, 'User Test', 'Hà Nội', '357217213', 'luongminhanh.thcstm@gmail.com', 'Có tặng quà gì ko'),
(96, 1, 1, '2023-12-06 20:36:08', 1, 'User Test', 'Hà Nội', '357217213', 'luongminhanh.thcstm@gmail.com', ''),
(97, 3, 1, '2023-12-12 11:05:33', 1, 'User Test', 'Hà Nội', '0357217213', 'luongminhanh.thcstm@gmail.com', ''),
(98, 3, 1, '2023-12-12 11:07:35', 1, 'User Test', 'Hà Nội', '0357217213', 'luongminhanh.thcstm@gmail.com', ''),
(99, 3, 1, '2023-12-12 11:55:21', 1, 'User Test', 'Hà Nội', '0357217213', 'luongminhanh.thcstm@gmail.com', ''),
(100, 3, 1, '2023-12-12 17:47:38', 1, 'User Test', 'Hà Nội', '0357217213', 'luongminhanh.thcstm@gmail.com', ''),
(101, 4, 19, '2023-12-13 09:49:31', 1, 'Nguyễn Văn Trân', 'ĐH Công Nghiệp Hà Nội', '0387658761', 'tran@gmail.com', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `productId` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`productId`, `orderId`, `quantity`, `price`) VALUES
(2, 58, 1, 63000),
(2, 83, 1, 63000),
(2, 90, 1, 63000),
(2, 91, 1, 63000),
(5, 58, 1, 103000),
(5, 61, 1, 103000),
(5, 80, 2, 103000),
(5, 81, 2, 103000),
(5, 82, 1, 103000),
(5, 83, 1, 103000),
(13, 96, 1, 126000),
(13, 97, 1, 126000),
(15, 58, 2, 103000),
(15, 62, 1, 103000),
(15, 70, 1, 103000),
(16, 71, 2, 440000),
(18, 94, 1, 54000),
(18, 95, 1, 54000),
(19, 100, 1, 89000),
(19, 101, 1, 89000),
(21, 67, 1, 95000),
(21, 81, 1, 95000),
(21, 82, 1, 95000),
(22, 55, 1, 54000),
(22, 67, 1, 54000),
(22, 69, 1, 54000),
(22, 85, 1, 54000),
(22, 86, 1, 54000),
(22, 87, 1, 54000),
(22, 88, 2, 54000),
(24, 95, 1, 113500),
(24, 96, 1, 113500),
(25, 58, 1, 100000),
(26, 75, 1, 25000),
(27, 65, 1, 75000),
(27, 86, 1, 75000),
(27, 87, 1, 75000),
(27, 91, 1, 75000),
(27, 92, 1, 75000),
(28, 89, 1, 290000),
(28, 90, 1, 290000),
(28, 98, 1, 290000),
(28, 99, 1, 290000),
(29, 70, 1, 35000),
(29, 76, 1, 35000),
(29, 80, 1, 35000),
(29, 81, 1, 35000),
(29, 90, 1, 35000),
(29, 91, 1, 35000),
(30, 88, 1, 35000),
(30, 89, 1, 35000),
(31, 73, 1, 35000),
(31, 79, 1, 35000),
(31, 80, 1, 35000),
(31, 81, 1, 35000),
(31, 82, 1, 35000),
(31, 88, 1, 35000),
(31, 89, 2, 35000),
(32, 88, 1, 102000),
(32, 92, 1, 102000),
(32, 93, 1, 102000),
(34, 69, 2, 102000),
(37, 64, 1, 35000),
(37, 83, 1, 35000),
(37, 85, 1, 35000),
(38, 88, 1, 156000),
(38, 92, 1, 156000),
(38, 93, 1, 156000),
(39, 77, 1, 303000),
(41, 74, 1, 279500),
(41, 88, 1, 279500),
(42, 73, 1, 103500),
(44, 82, 1, 466000),
(44, 83, 1, 466000),
(44, 97, 1, 466000),
(44, 98, 1, 466000),
(45, 95, 1, 110000),
(45, 96, 1, 110000),
(47, 55, 1, 160000),
(47, 83, 1, 160000),
(48, 78, 1, 140000),
(48, 93, 1, 140000),
(48, 94, 1, 140000),
(49, 57, 1, 60000),
(55, 100, 1, 115000),
(55, 101, 1, 115000),
(58, 100, 1, 19000),
(58, 101, 1, 19000),
(61, 100, 1, 19000),
(61, 101, 1, 19000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_methods`
--

CREATE TABLE `order_methods` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_methods`
--

INSERT INTO `order_methods` (`id`, `name`, `status`) VALUES
(1, 'Thanh toán khi nhận hàng', 1),
(2, 'Chuyển khoản', 0),
(3, 'ONEPAY', 0),
(4, 'Paypal', 0),
(5, 'VNPAY', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `product_quantity` int(2) NOT NULL DEFAULT '10',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `author_id`, `cat_id`, `name`, `price`, `image`, `description`, `product_quantity`, `status`) VALUES
(2, 1, 1, 'Cho Tôi Xin 1 Vé Đi Tuổi Thơ', 63000, 'ctx1vdtt.webp', 'Truyện Cho tôi xin một vé đi tuổi thơ là sáng tác mới nhất của nhà văn Nguyễn Nhật Ánh. Nhà văn mời người đọc lên chuyến tàu quay ngược trở lại thăm tuổi thơ và tình bạn dễ thương của 4 bạn nhỏ. Những trò chơi dễ thương thời bé, tính cách thật thà, thẳng thắn một cách thông minh và dại dột, những ước mơ tự do trong lòng… khiến cuốn sách có thể làm các bậc phụ huynh lo lắng rồi thở phào. Không chỉ thích hợp với người đọc trẻ, cuốn sách còn có thể hấp dẫn và thực sự có ích cho người lớn trong quan hệ với con mình...', 17, 1),
(5, 1, 1, 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh', 103000, 'tthvtcx.webp', 'Ta bắt gặp trong Tôi Thấy Hoa Vàng Trên Cỏ Xanh một thế giới đấy bất ngờ và thi vị non trẻ với những suy ngẫm giản dị thôi nhưng gần gũi đến lạ. Câu chuyện của Tôi Thấy Hoa Vàng Trên Cỏ Xanh có chút này chút kia, để ai soi vào cũng thấy mình trong đó, kiểu như lá thư tình đầu đời của cu Thiều chẳng hạ ngây ngô và khờ khạo.\n\nNhưng Tôi Thấy Hoa Vàng Trên Cỏ Xanh hình như không còn trong trẻo, thuần khiết trọn vẹn của một thế giới tuổi thơ nữa. Cuốn sách nhỏ nhắn vẫn hồn hậu, dí dỏm, ngọt ngào nhưng lại phảng phất nỗi buồn, về một người cha bệnh tật trốn nhà vì không muốn làm khổ vợ con, về một người cha khác giả làm vua bởi đứa con tâm thầm của ông luôn nghĩ mình là công chúa, Những bài học về luân lý, về tình người trở đi trở lại trong day dứt và tiếc nuối.\n\nTôi Thấy Hoa Vàng Trên Cỏ Xanh lắng đọng nhẹ nhàng trong tâm tưởng để rồi ai đã lỡ đọc rồi mà muốn quên đi thì thật khó.\n\n“Tôi thấy hoa vàng trên cỏ xanh” truyện dài mới nhất của nhà văn vừa nhận giải văn chương ASEAN Nguyễn Nhật Ánh - đã được Nhà xuất bản Trẻ mua tác quyền và giới thiệu đến độc giả cả nước.\n\nCuốn sách viết về tuổi thơ nghèo khó ở một làng quê, bên cạnh đề tài tình yêu quen thuộc, lần đầu tiên Nguyễn Nhật Ánh đưa vào tác phẩm của mình những nhân vật phản diện và đặt ra vấn đề đạo đức như sự vô tâm, cái ác. 81 chương ngắn là 81 câu chuyện nhỏ của những đứa trẻ xảy ra ở một ngôi làng: chuyện về con cóc Cậu trời, chuyện ma, chuyện công chúa và hoàng tử, bên cạnh chuyện đói ăn, cháy nhà, lụt lội, “Tôi thấy hoa vàng trên cỏ xanh”hứa hẹn đem đến những điều thú vị với cả bạn đọc nhỏ tuổi và người lớn bằng giọng văn trong sáng, hồn nhiên, giản dị của trẻ con cùng nhiều tình tiết thú vị, bất ngờ và cảm động trong suốt hơn 300 trang sách. Cuốn sách, vì thế có sức ám ảnh, thu hút, hấp dẫn không thể bỏ qua.', 35, 1),
(13, 7, 1, 'Đã Nhiều Năm Như Thế (Tập 1)', 126000, 'dnnnt.webp', 'Kiến Hạ là một cô gái ngoại thành, lớn lên trong một gia đình mà cả bố và mẹ đều thiên vị em trai, cô chẳng có gì để níu lấy sự quan tâm của họ ngoài thành tích học tập. Nhiều đêm, khi mọi người trong nhà đều đã say giấc, Kiến Hạ vẫn cặm cụi bên chiếc bàn nhỏ luyện đề, bởi cô biết chỉ khi học thật giỏi thì cô mới có thể rời khỏi vùng quê này. Cuối cùng, những nỗ lực của Kiến Hạ đã được đền đáp khi cô đỗ thủ khoa trong kỳ thi chuyển cấp ở huyện và được Trung học Chấn Hoa đặc cách tuyển.\n\nNgày khai giảng, do nhịn ăn sáng mà Kiến Hạ bị ngất trong lúc học quân sự, rồi được lớp trưởng đưa tới phòng y tế. Cũng tại đây, cô đã gặp Lý Nhiên - cậu bạn có mái tóc hung đỏ và khuôn mặt bê bết máu.\n\nẤn tượng ban đầu về đối phương, chính là họ hoàn toàn thuộc về hai thế giới khác nhau. Trong mắt Kiến Hạ lúc ấy, Lý Nhiên là học sinh cá biệt, bề ngoài trông giống côn đồ, chẳng biết trên dưới, luôn cả gan làm loạn. Còn trong mắt Lý Nhiên, ban đầu Kiến Hạ giống với những học sinh giỏi khác, hay khóc, lúc nào cũng giả vờ yếu kém, giả vờ khiêm tốn, song sau khi trò chuyện thì cậu cũng thấy cô bạn này khá thú vị.\n\nKiến Hạ vốn tự tin với thành tích học tập hồi cấp 2 của mình, nhưng khi tới Chấn Hoa, được nghe kể về các học sinh xuất sắc khác, việc không hòa nhập được cộng thêm lo lắng về thành tích khiến cô thu m.ình lại, trở nên nhút nhát và tự ti. Song cũng nhờ gặp gỡ Lý Nhiên - cậu bạn tuy có thành tích học tập không nổi bật nhưng lại biết cách nói chuyện và an ủi người khác, mà những ngày tháng ở Chấn Hoa của Kiến Hạ trở nên vui vẻ hơn. Lý Nhiên cũng là người ở bên Kiến Hạ khi cô bất lực nhất, nhìn thấy cô lúc cô yếu đuối nhất...', 13, 1),
(14, 7, 1, 'Đã Nhiều Năm Như Thế (Tập 2)', 140000, 'dnnnt2.webp', 'Những ngày tháng tại trường Trung học Chấn Hoa cứ thế vội vã qua đi, cùng với đó là tình cảm của Kiến Hạ và Lý Nhiên ngày một lớn. Nhờ có Lý Nhiên, Kiến Hạ từ một cô bé nhút nhát đến từ ngoại thành dần trở nên tự tin, mạnh dạn. Nhờ có Lý Nhiên, Kiến Hạ đã mở lòng hơn, được đắm chìm trong cuộc sống nhiều trải nghiệm và ngập tràn màu sắc hơn.\r\n\r\nThế nhưng, những tháng ngày hạnh phúc trong trẻo ấy chẳng kéo dài lâu, khi chỉ còn nửa năm nữa là bước vào kì thi đại học, Lý Nhiên và Kiến Hạ bị cô chủ nhiệm và gia đình phát hiện yêu sớm.\r\n\r\nKiến Hạ bị mẹ bắt quay lại Trường Trung học Số 1 ở huyện, cương quyết không cho cô trở lại Chấn Hoa, dù kỳ thi đại học đang đến gần. Quay về nơi mình một lòng muốn rời đi, tâm trạng Kiến Hạ rối bời và vô cùng đau khổ. Cô bỏ bê bản thân, ăn uống cho có lệ, tóc tai cũng không buồn chăm chút, chỉ biết tựa đầu vào cửa khóc đến mệt lả.\r\n\r\nThế nhưng nhớ tới những ngày tháng hạnh phúc bên cạnh Lý Nhiên, nhớ không khí tại Chấn Hoa và cả tương lai phía trước, Kiến Hạ đã cố gắng xốc lại tinh thần, hạ quyết tâm thương lượng với bố, rằng nếu cô đứng nhất toàn trường trong kỳ thi tháng tới, thì phải cho cô quay lại học ở Chấn Hoa. Vì chỉ ở Chấn Hoa, cô mới nhìn thấy một Kiến Hạ quyết tâm theo đuổi ước mơ, một Kiến Hạ mạnh mẽ và dám bộc lộ cảm xúc thật của mình. Cũng ở Chấn Hoa, nơi đã chứng kiến lời hứa cùng nhau đến Nam Kinh học đại học của cô và Lý Nhiên...', 10, 1),
(15, 1, 1, 'Ngồi Khóc Trên Cây', 103000, 'nktc.webp', 'Mở đầu là kỳ nghỉ hè tại một ngôi làng thơ mộng ven sông với nhân vật là những đứa trẻ mới lớn có vô vàn trò chơi đơn sơ hấp dẫn ghi dấu mãi trong lòng.\n\nMối tình đầu trong veo của cô bé Rùa và chàng sinh viên quê học ở thành phố có giống tình đầu của bạn thời đi học? Và cái cách họ thương nhau giấu giếm, không dám làm nhau buồn, khát khao hạnh phúc đến nghẹt thở có phải là câu chuyện chính?\n\n“ Nồng nàn lên với\n\nCốc rượu trên tay\n\nXanh xanh lên với\n\nTrời cao ngàn ngày\n\nDài nhanh lên với\n\nTóc xõa ngang mày\n\nLớn nhanh lên với\n\nBé bỏng chiều nay”\n\nBạn sẽ được tác giả dẫn đi liền một mạch trong một thứ cảm xúc rưng rưng của tình yêu thương. Bạn sẽ thấy may mắn vì đang đuợc sống trong cuộc sống này, thấy yêu thế những tấm tình người… tất cả đều đẹp hồn hậu một cách giản dị.\n\nVới cuốn sách này, một lần nữa người đọc lại được Nguyễn Nhật Ánh tặng món quà quý giá: lòng tin vào điều tốt có thật trên đời.\n\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', 27, 1),
(16, 1, 1, 'Còn Chút Gì Để Nhớ - Bản Màu', 440000, 'ccgdn.webp', 'Đó là những kỷ niệm thời đi học của Chương, lúc mới bước chân vào Sài Gòn và làm quen với cuộc sống đô thị. Là những mối quan hệ bạn bè tưởng chừng hời hợt thoảng qua nhưng gắn bó suốt cuộc đời. Cuộc sống đầy biến động đã xô dạt mỗi người mỗi nơi, nhưng trải qua hàng mấy chục năm, những kỷ niệm ấy vẫn luôn níu kéo Chương về với một thời để nhớ.', 18, 1),
(17, 4, 1, 'Trúng Số Độc Đắc', 84000, 'tsdd.webp', 'Tiểu thuyết “Trúng số độc đắc” là tác phẩm lớn của Vũ Trọng Phụng cũng như của cả nền văn xuôi Việt Nam hiện đại. Với nghệ thuật trần thuật đặc sắc đầy khả năng biến hoá, với ngôn ngữ và giọng điệu hài hước, trào phúng, ông đã dựng lên hàng loạt nhân vật \"đồ vật hoá\", nhân vật \"kịch\", nhân vật trào phúng, chân dung biếm họa có ý nghĩa xã hội sâu sắc.\r\nVũ Trọng Phụng mượn nhân vật Phúc để kể về nhân tình thế thái, về thói đời, lòng người đổi trắng thay đen. Và cả chính Phúc, được dịp may đổi đời, rồi có cơ hội chứng kiến, hiểu và cười lòng người, cũng không tránh khỏi việc bản thân thay đổi theo hoàn cảnh, thời thế.', 10, 1),
(18, 4, 1, 'Số Đỏ', 54000, 'sd.webp', 'Văn học Việt Nam thời xưa có nhiều tác phẩm có giá trị to lớn về mặt nhân văn và nghệ thuật, đã được công nhận và chứng thực qua thời gian. Bộ sách Việt Nam danh tác bao gồm loạt tác phẩm đi cùng năm tháng như: Số đỏ (Vũ Trọng Phụng), Việc làng (Ngô Tất Tố), Gió đầu mùa, Hà Nội băm sáu phố phường (Thạch Lam), Miếng ngon Hà Nội (Vũ Bằng), Vang bóng một thời (Nguyễn Tuân). Hy vọng bộ sách sau khi tái bản sẽ giúp đông đảo tầng lớp độc giả thêm hiểu, tự hào và nâng niu kho tàng văn học nước nhà.\r\n\r\nTrích đoạn\r\n\r\n“- Tôi không muốn lấy cái người ấy, vì nếu tôi lấy hắn, chắc hắn sẽ mọc sừng. Thí dụ một người như ông mà hỏi tôi thì còn nói gì! Đằng này hắn lại nhà quê, không biết yêu vợ như những người văn minh. Buồn lắm anh ạ.\r\n\r\n- Tôi phải làm gì?- Phải giả vờ chim tô, chúng ta giả vờ chim nhau, mê Cho hắn bỏ tôi, mình hiểu chưa? Ta giả vờ với nhau thôi mà! Tôi cần mang tiếng hư hỏng lắm mới được.\r\n\r\n- Thế sao nữa ạ?\r\n\r\n- Anh thì anh cũng phải mang tiếng là làm hại một đời tôi mới xong!”', 9, 1),
(19, 2, 2, 'Tôi Tự Học', 89000, 'tth.webp', 'Sách “Tôi tự học” của tác giả Nguyễn Duy Cần đề cập đến khái niệm, mục đích của học vấn đối với con người đồng thời nêu lên một số phương pháp học tập đúng đắn và hiệu quả. Tác giả cho rằng giá trị của học vấn nằm ở sự lĩnh hội và mở mang tri thức của con người chứ không đơn thuần thể hiện trên bằng cấp. Trong xã hội ngày nay, không ít người quên đi ý nghĩa đích thực của học vấn, biến việc học của mình thành công cụ để kiếm tiền nhưng thực ra nó chỉ là phương tiện để đưa con người đến thành công mà thôi. Bởi vì học không phải để lấy bằng mà học còn để “biết mình” và để “đối nhân xử thế”.\r\nCuốn sách này tuy đã được xuất bản từ rất lâu nhưng giá trị của sách vẫn còn nguyên vẹn. Những tư tưởng, chủ đề của sách vẫn phù hợp và có thể áp dụng trong đời sống hiện nay. Thiết nghĩ, cuốn sách này rất cần cho mọi đối tượng bạn đọc vì không có giới hạn nào cho việc truy tầm kiến thức, việc học là sự nghiệp lâu dài của mỗi con người. Đặc biệt, cuốn sách là một tài liệu quý để các bạn học sinh – sinh viên tham khảo, tổ chức lại việc học của mình một cách hợp lý và khoa học. Các bậc phụ huynh cũng cần tham khảo sách này để định hướng và tư vấn cho con em mình trong quá trình học tập.', 9, 1),
(20, 2, 2, 'Một Nghệ Thuật Sống', 64000, 'nts.webp', 'Tác phẩm Một nghệ thuật sống nêu lên những quan niệm về cuộc sống và cách sống: sống là gì, lẽ sống của con người, nhận biết chân giá trị của sự vật, hành động để giải thoát…\r\n\r\nTác giả không tập trung khai thác, phân tích tâm lý con người như những sách nghệ thuật sống, rèn luyện nhân cách phổ biến hiện nay. Ông cũng không lên gân, dạy dỗ phải làm điều này điều nọ để có được hạnh phúc trong cuộc sống. Tác giả hướng người đọc đến việc nhận thức được giá trị sự vật như nó vốn có, hiểu được bản ngã của mình để hành động phù hợp với hoàn cảnh. Để trở nên một con người hoàn toàn, theo tác giả, con người cần phải làm hai điều: cải tạo cá nhân và cải tạo xã hội. Đây cũng là chủ đề xuyên suốt trong các chương của cuốn sách.', 10, 1),
(21, 3, 2, 'Vẻ Đẹp Của Sự Cô Đơn', 95000, 'vdcscd.webp', 'Đức Đạt Lai Lạt Ma đã sống một mình trong suốt 87 năm và ngài là một trong những người hạnh phúc nhất thế giới, hay Thiền sư Thích Nhất Hạnh đã sống tới 95 năm đầy tỉnh thức mà chẳng cần một tình yêu vị kỷ nào cả. Bởi các ngài đã đặt hạnh phúc của mình trong hạnh phúc đại đồng nhân loại. Hơn 200 trang sách “Vẻ đẹp của sự cô đơn”, người đọc nhận ra vạn vật trên thế gian này đều cần được đối xử dịu dàng, ngay cả bạn cũng vậy. Chỉ cần bạn đối xử với bản thân bằng một cái tâm thiện lành, yêu thương và ân cần thì từ đó ánh nhìn của bạn với mọi thứ cũng êm đềm hơn. Sống trên đời là đối diện với sự được và mất chỉ trong một cái chớp mắt, nhân sinh như mộng, bạn đừng quá dốc lòng vì một người không xứng để rồi khiến tim mình khổ đau. Sự cô đơn bạn có thừa, khi đã yêu mà chưa từng hạnh phúc.\r\n\r\nNhững góc nhìn về sự cô đơn của thầy Giác Minh Luật vô cùng vi tế và tràn đầy năng lượng tích cực. Chúng ta sinh ra vốn không đơn độc vì đã có chính mình, người duy nhất hiểu rõ bản thân đã phải trải qua ngày hôm nay đau khổ ra sao, và đặt niềm tin vào ngày sau không phải tận cùng bi ai như thế nào. Sống trong tâm thế bình thản đối mặt, mỉm cười nhìn chuyện đời, chuyện người, ấy mới chính là biết trân quý chữ duyên trong hiện tại. Vậy nên, bạn không cần tìm kiếm hạnh phúc từ bên ngoài nữa, hãy bắt đầu tìm nó trong chính mình.', 7, 1),
(22, 5, 2, 'Gieo Trồng Hạnh Phúc', 54000, 'gthp.webp', 'Chánh Niệm là nguồn năng lượng tỉnh thức đưa ta trở về với giây phút hiện tại và giúp ta tiếp xúc sâu sắc với sự sống trong mỗi phút giây của đời sống hằng ngày. Chúng ta không cần phải đi đâu xa để thực tập chánh niệm. Chúng ta có thể thực tập chánh niệm ngay trong phòng mình hoặc trên đường đi từ nơi này đến nơi khác. Ta vẫn có thể tiếp tục làm những công việc ta thường làm hằng ngày như đi, đứng, nằm, ngồi, làm việc, ăn, uống, giao tiếp, chuyện trò… nhưng với ý thức là mình đang làm những công việc ấy.\r\n\r\nHãy tưởng tượng ta đang ngắm mặt trời mọc với một số người. Trong khi những người khác đang thưởng thức khung cảnh đẹp đẽ ấy thì ta lại “bận rộn” với những thứ trong đầu mình. Ta bận rộn và lo lắng cho những kế hoạch của ta. Ta nghĩ về quá khứ hoặc tương lai mà không thực sự có mặt để trân quý cơ hội đó. Thay vì thưởng thức cảnh đẹp của buổi bình minh, ta lại để cho những khoảnh khắc quý giá ấy trôi qua oan uổng.\r\n\r\nNếu quả thực như vậy, ta có thể sử dụng một phương pháp khác. Mỗi khi tâm ta đi lang thang thì ta kéo tâm về và tập trung tâm ý vào hơi thở vào – ra. Thực tập hơi thở ý thức giúp ta trở về với giây phút hiện tại. Thân tâm hợp nhất, ta sẽ có mặt trọn vẹn để ngắm nhìn, quán chiếu và thưởng thức khung cảnh đẹp đẽ ấy. Bằng cách trở về với hơi thở, ta lấy lại được sự mầu nhiệm của buổi bình minh.', 5, 1),
(23, 5, 2, 'Không Diệt Không Sinh Đừng Sợ Hãi', 81000, 'kdksdsh.webp', 'Nhiều người trong chúng ta tin rằng cuộc đời của ta bắt đầu từ lúc chào đời và kết thúc khi ta chết. Chúng ta tin rằng chúng ta tới từ cái Không, nên khi chết chúng ta cũng không còn lại gì hết. Và chúng ta lo lắng vì sẽ trở thành hư vô.\r\n\r\nBụt có cái hiểu rất khác về cuộc đời. Ngài hiểu rằng sống và chết chỉ là những ý niệm không có thực. Coi đó là sự thực, chính là nguyên do gây cho chúng ta khổ não. Bụt dạy không có sinh, không có diệt, không tới cũng không đi, không giống nhau cũng không khác nhau, không có cái ngã thường hằng cũng không có hư vô. Chúng ta thì coi là Có hết mọi thứ. Khi chúng ta hiểu rằng mình không bị hủy diệt thì chúng ta không còn lo sợ. Đó là sự giải thoát. Chúng ta có thể an hưởng và thưởng thức đời sống một cách mới mẻ.\r\n\r\nKhông diệt Không sinh Đừng sợ hãi là tựa sách được Thiền sư Thích Nhất Hạnh viết nên dựa trên kinh nghiệm của chính mình. Ở đó, Thầy Nhất Hạnh đã đưa ra một thay thế đáng ngạc nhiên cho hai triết lý trái ngược nhau về vĩnh cửu và hư không: “Tự muôn đời tôi vẫn tự do. Tử sinh chỉ là cửa ngõ ra vào, tử sinh là trò chơi cút bắt. Tôi chưa bao giờ từng sinh cũng chưa bao giờ từng diệt” và “Nỗi khổ lớn nhất của chúng ta là ý niệm về đến-đi, lui-tới.”', 10, 1),
(24, 8, 3, '100 Bí Ẩn Đáng Kinh Ngạc', 113500, '100badkn.webp', '\"- Cá có mặc đồ ngủ không?\r\n\r\n- Âm thanh của một tảng băng đang tan chảy là gì? \r\n\r\n- Cần bao nhiêu con cừu để khởi động một chuyến tàu chở hàng của người Viking? \r\n\r\n- Cái nào nhanh hơn - sóng thần hay tàu cao tốc?\"\r\n\r\n \r\n\r\nHãy cùng tìm câu trả lời trong cuốn sách  ́ ̂̉ đ́ ̣ về các đại dương - cuốn sách sẽ giúp bạn khám phá lịch sử - khoa học - môi trường và nghệ thuật của các vùng biển và đại dương trên hành tinh của chúng ta. \r\n\r\n \r\n\r\nVới nội dung ngắn gọn, logic, được trình bày dưới dạng infographic sinh động, màu sắc bắt mắt, cuốn sách này sẽ là cuốn cẩm nang hoàn hảo giúp bạn mở rộng kiến thức về đại dương - một chủ đề vô cùng thiết yếu với cuộc sống của chúng ta.\r\n\r\n \r\n\r\nSách nằm trong series “ ́ ̂̉ đ́ ̣” của NXB Usborne được hàng triệu độc giả trên toàn thế giới yêu thích.\r\n\r\nSeries sách đã bán được 1,7 triệu bản và dịch ra 29 thứ tiếng trên thế giới.', 9, 1),
(25, 8, 3, 'Kiểm Soát Cơn Tức Giận', 100000, 'ksctg.webp', 'Cơn giận là một dạng cảm xúc thường gặp, cũng giống như niềm vui, nỗi buồn hay nỗi sợ.\r\n\r\nĐôi khi cơn giận khiến bạn mất kiểm soát, trở nên hách dịch và làm ảnh hưởng tới mọi người xung quanh. Nhưng may mắn là BẠN thông minh hơn cơn giận rất nhiều, và cuốn sách này sẽ hướng dẫn bạn cả tấn mẹo hay để kiểm soát cơn giận!\r\n\r\nXuyên suốt sách là những hoạt động tương tác thú vị giúp bạn hiểu thêm về bản thân và những cảm xúc của mình. Sách bày cả những trò chơi hấp dẫn dạy bạn những chiến lược ứng phó với cơn giận ở nhà, ở trường, với bạn bè hoặc người thân để sống hạnh phúc và hòa hợp với mọi người hơn.', 10, 1),
(26, 8, 3, 'Dạy Con Thói Quen Tốt', 25000, 'dctqt.webp', 'Một hành động đúng đắn sẽ dẫn tới một kết quả tốt đẹp. Một thái độ đúng ĐỘ TUỔI đắn sẽ được mọi người khen ngợi. Một thói quen tốt sẽ giúp đạt được hiệu quả như mong muốn. Nhiều thói quen tốt có thể mang đến một tương lai rộng mở.\r\n\r\n \r\n\r\nThấu hiểu điều đó, bộ sách đã ra đời với mong muốn giúp các bạn nhỏ có thêm một kênh thông tin để học hỏi, bồi dưỡng và rèn luyện bản thân trong quá trình trưởng thành. Qua các chủ đề gần gũi được viết dưới dạng những câu chuyện ngắn gọn và đáng yêu, tin rằng bộ sách sẽ mang đến cho các bạn nhỏ những bài học bổ ích, giúp các em biết kiểm soát cảm xúc, có thái độ, hành vi đúng đắn. Chắc chắn đây sẽ là người bạn đồng hành đáng tin cậy của các em và xứng đáng có mặt trong tủ sách của mọi gia đình.', 8, 1),
(27, 8, 3, 'Bộ Sách Bồi Dưỡng EQ Cho Trẻ', 75000, 'bseq.webp', 'Các bạn nhỏ sẽ cảm thấy thế nào khi có một ngày không vui, con làm gì khi trót thốt ra lời nó dối, hoặc phải làm sao khi nghĩ rằng cứ phải nhanh mới là tốt nhất?\r\n\r\nThông qua những tình huống rất gần gũi với cuộc sống ở nhà, ở trường học hay cả khi đi chơi trong bộ sách Những câu chuyện bồi dưỡng EQ cho trẻ, các bạn nhỏ sẽ biết cách kiểm soát xúc cảm của bản thân, nhận biết cảm xúc của người khác, học tập cách ứng xử phù hợp và hình thành thói quen tốt.', 7, 1),
(28, 9, 4, 'Story of a Seagull and the Cat', 290000, 'sac.webp', 'Caught up in an oil spill, a dying seagull scrambles ashore to lay her final egg and lands on a balcony, where she meets Zorba, a big black cat from the port of Hamburg. The cat promises the seagull to look after the egg, not to eat the chick once it’s hatched and – most difficult of all – to teach the baby gull to fly. Will Zorba and his feline friends honour the promise and give Lucky, the adopted little seagull, the strength to discover her true nature?\r\n\r\nA moving, uplifting and life-enhancing story with a strong environmental theme, Luis Sepúlveda’s instant children’s classic has been a worldwide best-seller and is presented here with new drawings by acclaimed illustrator Satoshi Kitamura.', 8, 1),
(29, 9, 4, 'Chuyện Con Mèo Dạy Hải Âu Bay', 35000, 'ccmdhab.webp', 'Cô hải âu Kengah bị nhấn chìm trong váng dầu – thứ chất thải nguy hiểm mà những con người xấu xa bí mật đổ ra đại dương. Với nỗ lực đầy tuyệt vọng, cô bay vào bến cảng Hamburg và rơi xuống ban công của con mèo mun, to đùng, mập ú Zorba. Trong phút cuối cuộc đời, cô sinh ra một quả trứng và con mèo mun hứa với cô sẽ thực hiện ba lời hứa chừng như không tưởng với loài mèo:\r\n\r\nKhông ăn quả trứng.\r\n\r\nChăm sóc cho tới khi nó nở.\r\n\r\nDạy cho con hải âu bay.\r\n\r\nLời hứa của một con mèo cũng là trách nhiệm của toàn bộ mèo trên bến cảng, bởi vậy bè bạn của Zorba bao gồm ngài mèo Đại Tá đầy uy tín, mèo Secretario nhanh nhảu, mèo Einstein uyên bác, mèo Bốn Biển đầy kinh nghiệm đã chung sức giúp nó hoàn thành trách nhiệm. Tuy nhiên, việc chăm sóc, dạy dỗ một con hải âu đâu phải chuyện đùa, sẽ có hàng trăm rắc rối nảy sinh và cần có những kế hoạch đầy linh hoạt được bàn bạc kỹ càng…\r\n\r\nChuyện con mèo dạy hải âu bay là kiệt tác dành cho thiếu nhi của nhà văn Chi Lê nổi tiếng Luis Sepúlveda – tác giả của cuốn Lão già mê đọc truyện tình đã bán được 18 triệu bản khắp thế giới. Tác phẩm không chỉ là một câu chuyện ấm áp, trong sáng, dễ thương về loài vật mà còn chuyển tải thông điệp về trách nhiệm với môi trường, về sự sẻ chia và yêu thương cũng như ý nghĩa của những nỗ lực – “Chỉ những kẻ dám mới có thể bay”.', 39, 1),
(30, 10, 5, 'Tý Quậy (Tập 3)', 35000, 'tq3.webp', 'Tý Quậy là bộ truyện tranh Việt Nam nổi tiếng đã gắn bó với tuổi thơ của nhiều thế hệ độc giả. Những câu chuyện dí dỏm, hài hước về cuộc sống nơi trường lớp và gia đình của hai người bạn \"hàng xóm\" Tý và Tèo đã đem lại bao tiếng cười vui và rất nhiều bài học sâu sắc, thấm thía cho các thế hệ học trò Việt Nam.\r\n\r\nChúng ta như tìm thấy chính mình trong hình ảnh của Tý và Tèo những lúc nghịch ngợm, bị điểm kém, bị bố mẹ mắng... hay những phút giây nhận ra lỗi lầm và thấy mình ngày một trưởng thành, lớn khôn hơn, biết yêu thương cha mẹ, kính trọng thầy cô và yêu quý bè bạn.\r\n\r\nCó lẽ vì vậy mà sức sống của bộ truyện Tý Quậy mới lâu bền và mạnh mẽ đến thế!', 9, 1),
(31, 10, 5, 'Tý Quậy (Tập 2)', 35000, 'tq2.webp', 'Tý Quậy là bộ truyện tranh Việt Nam nổi tiếng đã gắn bó với tuổi thơ của nhiều thế hệ độc giả. Những câu chuyện dí dỏm, hài hước về cuộc sống nơi trường lớp và gia đình của hai người bạn \"hàng xóm\" Tý và Tèo đã đem lại bao tiếng cười vui và rất nhiều bài học sâu sắc, thấm thía cho các thế hệ học trò Việt Nam.\r\n\r\nChúng ta như tìm thấy chính mình trong hình ảnh của Tý và Tèo những lúc nghịch ngợm, bị điểm kém, bị bố mẹ mắng... hay những phút giây nhận ra lỗi lầm và thấy mình ngày một trưởng thành, lớn khôn hơn, biết yêu thương cha mẹ, kính trọng thầy cô và yêu quý bè bạn.\r\n\r\nCó lẽ vì vậy mà sức sống của bộ truyện Tý Quậy mới lâu bền và mạnh mẽ đến thế!', 15, 1),
(32, 11, 6, 'Ghi Chép Pháp Y', 102000, 'gcpy.webp', 'Làm cách nào để một “xác chết lên tiếng”? - đó là công việc của bác sĩ pháp y.\r\n\r\n“Ghi chép pháp y - Những cái chết bí ẩn” là cuốn sách nằm trong hệ liệt với “Pháp y Tần Minh” - bộ tiểu thuyết nổi đình đám của xứ Trung đã được chuyển thể thành series phim. Cuốn sách tổng hợp những vụ án có thật, được viết bởi bác sĩ pháp y Lưu Hiểu Huy - người có 15 năm kinh nghiệm và từng mổ xẻ hơn 800 tử thi.\r\n\r\nTrải qua 15 câu chuyện kinh hoàng, cuốn sách sẽ đưa bạn bước vào hiện trường của những vụ án man rợ như: xác chết phi tang dưới cánh đồng ngô, thi thể thiếu nữ không lành lặn, xác chết nhầy nhụa đang bị giòi bọ đục khoét hay một thi thể co cứng trong màng bọc nilon…lần theo những dấu vết, ghép lại sự thật từ những mảnh vụn thi thể, nguyên nhân của cái chết sẽ dần được hé mở.\r\n\r\nMỗi vụ án đều là một ẩn số, hiện trường vụ án bao gồm cả xác chết chính là chiếc chìa khóa để truy tìm hung thủ ngay cả khi nó không còn nguyên vẹn. Vậy làm cách để các bác sĩ pháp y có thể xác định thương tật, các dấu hiệu cơ thể bị xâm hại? Cuốn sách này sẽ trình bày những kiến thức chuyên môn và quy trình xử lý vụ án, từ hiện trường vụ án đến đài giải phẫu, xét nghiệm nội tạng, phân tích chất độc… từng bước tìm ra bí mật ẩn giấu sau mỗi tử thi, phơi bày những manh mối liên quan đến tội ác con người và lỗ hổng của xã hội.', 9, 1),
(33, 12, 6, 'Phía Sau Nghi Can X', 75000, 'psncx.webp', '“Việc nghĩ ra một bài toán vô cùng khó và việc giải bài toán đó, việc nào khó hơn?”\r\n\r\nKhi nhấn chuông cửa nhà nghi can chính của một vụ án mới, điều tra viên Kusanagi không biết rằng anh sắp phải đương đầu với một thiên tài ẩn dật. Kusanagi càng không thể ngờ rằng, chỉ một câu nói vô thưởng vô phạt của anh đã kéo người bạn thân, Manabu Yukawa, một phó giáo sư vật lý tài năng, vào vụ án. Và điều làm sững sờ nhất, đó là vụ án kia chẳng qua cũng chỉ như một bài toán cấp ba đơn giản, tuy nhiên ấn số X khi được phơi bày ra lại không đem đến hạnh phúc cho bất cứ ai…\r\n\r\nVới một giọng văn tỉnh táo và dung dị, Higashino Keigo đã đem đến cho độc giả hơn cả một cuốn tiểu thuyết trinh thám. Mô tả tội ác không phải điều hấp dẫn nhất ở đây, mà còn là những giằng xé nội tâm thầm kín, những nhân vật bình dị, và sự quan tâm sâu sa tới con người. Tác phẩm đã đem lại cho Higashino Keigo Giải Naoki lần thứ 134, một giải thưởng văn học lâu đời sánh ngang giải Akutagawa tại Nhật.', 10, 1),
(34, 13, 7, 'Lược Sử Tôn Giáo', 102000, 'lstg.webp', 'Hơn bảy tỷ người trên thế giới có thể viết một thứ gì đó khác chữ “Không” vào mục Tôn giáo trong hồ sơ của mình. Một số sinh ra đã theo một tôn giáo được chọn sẵn; số khác có thể tự lựa chọn theo sở thích, theo định hướng, theo đám đô Thế rồi họ thực hành đức tin của mình hằng ngày, tự hào về nó và muốn truyền bá nó cho nhiều người khác nữa. Đó là con đường phát triển hết sức tự nhiên của tôn giáo suốt hàng nghìn năm qua, kết quả là vô số tín ngưỡng với cành nhánh xum xuê mà chúng ta thấy ngày nay.\r\n\r\nNhiều tôn giáo ra đời cách đây hàng nghìn năm với số lượng tín đồ hùng hậu, một số khác non trẻ hơn nhưng không kém phần đình đám vì những tín đồ ít ỏi nhưng nổi tiếng của mình. Thế nhưng, ai trong số họ dám chắc những gì mình đang làm là đúng nguyên bản và không khiến các vị khai sinh ra tôn giáo ấy lắc đầu, thất vọng?', 11, 1),
(35, 5, 7, 'Bồ Tát Tại Gia - Bồ Tát Xuất Gia', 108000, 'bttg.webp', 'Đạo Bụt không phải chỉ dành cho những người xuất gia, chán cõi đời này nên đi tìm sự an lạc Niết bàn cho cá nhân. Đạo Bụt là con đường mở ra cho tất cả nhân loại, cho tất cả các loài được hưởng.\r\n\r\nTrong kinh Duy Ma, ta thấy quan điểm về Tịnh độ và quan điểm về thế giới được trình bày một cách rất rõ rệt. Kinh Duy Ma chú trọng đến cuộc sống hiện thực chứ không nhắm tới sự trốn tránh khổ đau trong một cõi Niết bàn nào khác. Cõi Tịnh độ đẹp đẽ hay khổ đau; những hoàn cảnh đó, những y báo đó, đều do nhân cách của con người định đoạt. Tâm của mình như thế nào thì thế giới của mình như thế đó. Tất cả tùy thuộc vào cách sống của mình trong ngày hôm nay.\r\n\r\n“Chùa là nơi để chuyển hóa tâm tư chứ không phải là nơi để trốn tránh xã hội. Một ngôi chùa theo đúng nghĩa là một nơi giúp mình có cơ hội và khả năng trở về với xã hội, có thể sống an lạc trong xã hội, và có thể đóng góp vào sự chuyển hóa xã hội.” (Trích Phẩm Văn Thù Sư Lợi)\r\n\r\n', 10, 1),
(36, 14, 8, 'Giáo Dục Giới Tính Và Nhân Cách Dành Cho Bé Trai', 31500, 'gtbt.webp', 'Giáo dục giới tính và nhân cách dành cho bé trai là bộ sách rất bổ ích, giúp các bé trai có hành vi, ngôn ngữ, cử chỉ đúng mực; biết đoàn kết, yêu thương, chia sẻ, sống có trách nhiệm với mọi người.\r\n\r\nĐặc biệt, thông qua bộ sách này, các bé trai còn học được cách sống tự lập, luôn tỏa sáng và tự tin vào bản thân; đồng thời cũng học được cách nhận biết, thấu hiểu và bảo vệ các bộ phận trên cơ thể mình.\r\n\r\nBộ sách là món quà nhỏ tuyệt vời mà các bố mẹ và thầy cô gửi tặng các con, giúp các con cư xử đúng mực, thông minh trong mọi tình huống, mọi hoàn cảnh.', 10, 1),
(37, 14, 8, 'Giáo Dục Giới tính Và Nhân Cách Dành Cho Bé Gái', 35000, 'gtbg.webp', 'Giáo dục giới tính và nhân cách dành cho bé gái\r\n\r\nGiáo dục giới tính và nhân cách dành cho bé gái là bộ sách rất bổ ích, giúp các bé gái có hành vi, ngôn ngữ, cử chỉ đúng mực, biết đoàn kết yêu thương chia sẻ với mọi người. Đặc biệt, thông qua bộ sách này, các bé gái còn học được cách bảo vệ cơ thể mình, chống lại các hành vi xâm hại cơ thể, bảo vệ bản thân khi gặp kẻ xấu.\r\n\r\nBộ sách là món quà nhỏ tuyệt vời mà các bố mẹ và thầy cô gửi tặng các con, giúp các con cư xử đúng mực, thông minh trong mọi tình huống, mọi hoàn cảnh.', 7, 1),
(38, 15, 9, 'Lịch Sử Việt Nam Từ Nguồn Gốc Đến Giữa Thế Kỉ XX', 156000, 'lsvn.webp', 'Tác phẩm Lịch sử Việt Nam, từ nguồn gốc đến giữa thế kỷ XX này là sự kết hợp của hai chuyên khảo mang tính kinh điển về lịch sử và văn hóa Việt Nam của Giáo sư Lê Thành Khôi, người thuộc về số ít các sử gia Việt đương đại quan trọng nhất. Đó là cuốn Le Viêt-Nam, Histoire et Civilisation (Việt Nam, Lịch sử và Văn minh, Nxb Minuit, Paris, 1955) và Histoire du Viêt Nam, des origines à 1858 (Lịch sử Việt Nam, từ nguồn gốc đến năm 1858, Nxb Sud-Est Asie, Paris, 1982).\r\n\r\nCông trình từ lâu đã được các nhà Việt Nam coi như sách tham khảo căn bản khi nghiên cứu về lịch sử Việt Nam. Đây là lần đầu tiên tác phẩm được coi như kiệt tác sử học này được xuất bản bằng tiếng Việt.\r\n\r\nNhận định của chuyên gia\r\n\r\n“Cũng như nhiều người nghiên cứu Việt Nam, tôi đã sử dụng, trong gần ba mươi năm, quyển Le Việt Nam, Histoire et civilisation của Lê Thành Khôi do Editionds de Minuit xuất bản năm 1955. Nhưng sau đó tôi gần như hoàn toàn lệ thuộc vào kiệt tác của anh mà nhiều người đã ca ngợi: L’Histoire du Việt-Nam des origines à 1858, do Sud-Est Asie xuất bản năm 1982.”\r\n\r\n(Georges Condominas, nhà dân tộc học Pháp)', 9, 1),
(39, 16, 9, 'Metropolis', 303000, 'metro.webp', 'Chúng ta đang chứng kiến cuộc di dân vĩ đại nhất trong lịch sử, đỉnh điểm của một quá trình kéo dài 6.000 năm, một quá trình mà theo đó, đến cuối thế kỷ này, chúng ta sẽ trở thành một chủng loại được đô thị hóa.\r\n\r\nDưới sự dẫn dắt của nhà sử học Ben Wilson, chúng ta sẽ đi vào một hành trình đầy màu sắc xuyên suốt 6.000 năm và 26 thành phố trên thế giới để thấy cuộc sống đô thị đã trở thành động lực và ươm mầm cho những phát kiến vĩ đại nhất của loài người như thế nào.\r\n\r\nTrong suốt thời gian tồn tại của loài người, không có gì đã định hình chúng ta sâu sắc hơn đô thị. Ben Wilson đã kể câu chuyện vĩ đại và huy hoàng về cách mà cuộc sống đô thị cho phép nền văn hóa nhân loại phát triển. Ông cho chúng ta thấy rằng các đô thị không bao giờ là điều cần thiết nhưng một khi chúng tồn tại, mật độ của chúng đã tạo ra sự nở rộ nỗ lực của con người - sẳn xuất các ngành nghề mới, các loại hình nghệ thuật, thờ cúng và thương mại - mà chúng khởi đầu không kém gì nền văn minh.', 9, 1),
(40, 17, 10, 'Bàn Về Văn hóa Du Lịch Việt Nam', 84200, 'bvvhdl.webp', 'Đây là công trình đầu tiên nghiên cứu một cách hệ thống và sâu rộng về văn hóa du lịch ở Việt Nam. Cuốn sách cung cấp những tri thức cơ bản về văn hóa, các loại hình văn hóa, các khía cạnh khác nhau của văn hóa du lịch, các lĩnh vực khác nhau của du lịch văn hóa, những di sản, di tích, công trình đương đại, cảnh quan văn hóa có vai trò quan trọng trong du lịch, những đặc điểm của văn hóa quản lý và kinh doanh du lịch, cũng như những vấn đề liên quan đến bảo vệ văn hóa trong phát triển du lịch, vấn đề phát triển du lịch trong bối cảnh hội nhập quốc tế Những vấn đề cơ bản nhất của du lịch đã được đề cập tới trong cuốn sách này từ góc nhìn văn hóa.\r\n\r\nSách tập trung đi sâu phân tích những thực thể văn hóa được sử dụng trong du lịch, bao gồm các loại tài nguyên văn hóa được con người khai thác, sử dụng để tạo ra sản phẩm du lịch phục vụ nhu cầu của du khách, cùng với sự tham gia của môi trường văn hóa trong sự tương tác với môi trường tự nhiên. Đó là các tài nguyên văn hóa vật thể và phi vật thể, là các điều kiện chính trị - kinh tế - xã hội, là cơ sở vật chất kỹ thuật, các yếu tố an ninh, quốc phòng… làm nên những nguồn lực cho phát triển du lịch. Những thực thể văn hóa đó tồn tại khách quan, bên ngoài du lịch, không do du lịch tạo ra, được khai thác, sử dụng trong du lịch.', 9, 1),
(41, 18, 10, 'Ngàn Năm Áo Mũ', 279500, 'nnam.webp', 'Ngàn năm áo mũ là một nghiên cứu công phu và đầy tham vọng của Trần Quang Đức: dựng lại bức tranh trang phục Việt Nam trong cung đình và ngoài dân gian trong khoảng một nghìn năm từ thời Lý đến thời Nguyễn (1009-1945).\r\n\r\nTrang phục cung đình luôn được quy định nghiêm ngặt và có nhiều đổi thay qua các triều đại. Ngàn năm áo mũ lý giải nguyên do và phân tích mức độ mô phỏng trang phục Trung Hoa trong quy chế trang phục của các triều đại Việt Nam, mô tả chi tiết, tỉ mỉ nhiều dạng trang phục như bộ Tế phục Cổn Miện uy nghi của các vị hoàng đế, các bộ Triều phục, Thường phục Lương quan, Củng Thần, Ô Sa, Bổ phục trang trọng của bá quan, hay Lễ phục Vĩ Địch, Phượng quan lộng lẫy của hoàng hậu Trong khi đó trang phục dân gian không biến động nhiều, phổ biến là kiểu áo giao lĩnh, tứ thân, hay lối ăn mặc cởi trần đóng khố của đàn ông và yếm, váy giản tiện của đàn bà tồn tại qua hàng trăm năm lịch sử. Sự kiện vua Minh Mạng cấm “quần không đáy” là một biến cố lớn lao, để rồi chiếc áo dài năm thân đi vào đời sống dân gian và bây giờ trở thành trang phục quan trọng bậc nhất của người Việt.', 9, 1),
(42, 1, 1, 'Bảy Bước Tới Mùa Hè', 103500, 'bbtmh.webp', 'Bảy bước tới mùa hè là tác phẩm mới nhất của Nguyễn Nhật Ánh, được nhà văn đề tặng \"Những năm ấu thơ\", như một món quà dành tặng các bạn đọc thân thiết của mình nhân dịp đầu năm mới.\r\n\r\nCâu chuyện về một mùa hè ngọt ngào, những trò chơi nghịch ngợm và bâng khuâng tình cảm tuổi mới lớn. Chỉ vậy thôi nhưng chứng tỏ tác giả đúng là nhà kể chuyện hóm hỉnh, khiến độc giả cuốn hút từ trang đầu đến trang cuối cùng. Chúng ta sẽ bắt gặp giọng văn giản dị, trong trẻo của nhà văn Nguyễn Nhật Ánh và một kết thúc có hậu đầy thuyết phục ở cuối truyện. Câu chuyện về tuổi học trò đầy ắp những kỷ niệm thơ bé ngọt ngào với tình thầy trò, bè bạn, tình xóm giềng, họ hàng qua cách nhìn đời nhẹ nhàng, rộng lượng.\r\n\r\nNhà văn chia sẻ: \"Tôi thích sự vui tươi của câu chuyện và sự hồn nhiên của nhân vật. Có thể nói đây là tác phẩm đầy ắp tiếng cười. Tạm thời xa rời những trang văn chứa nhiều chiêm nghiệm của người lớn, qua tác phẩm này tôi muốn quay trở lại lối viết mà tác giả không cố ý để lại quá nhiều dấu tay trên bản thảo. Tác giả trong tác phẩm này cũng đang ở… tuổi mười lăm!\"\r\n\r\nNhận định\r\n\r\n“Có thể nói mỗi cuốn sách của Nguyễn Nhật Ánh như mỗi chuyến tàu về tuổi thơ. Ở đó có nhiều toa, mỗi toa là mỗi bất ngờ mỗi thú vị mỗi háo hức mỗi say mê, khi làm ta bật cười khi làm ta rưng rưng, hoặc ngồi lặng đi suy ngẫm. Khi đã theo con tàu của Nguyễn Nhật Ánh để đi về tuổi thơ một lần, tôi tin mỗi lần Nguyễn Nhật Ánh rung chuông, người ta khó lòng bỏ qua một tấm vé để lại được cùng anh háo hức lên tàu.”', 8, 1),
(43, 1, 1, 'Mùa Hè Không Tên (Bìa Cứng)', 195000, 'mhkt.webp', 'Mùa hè đã gần kết thúc, Mùa hè không tên sẽ kể cho bạn điều gì? Nỗi luyến tiếc vô số trò tinh nghịch chơi thỏa sức và những lần tề tựu bay nhảy trong tình thinh thích hồi hộp hoa phượng, hay mừng rỡ khi mùa thu - mùa tựu trường tới, bạn cũ nhớ, bạn mới ngỡ ngà\r\nMùa hè năm ấy của Khang không chỉ toàn chuyện leo cây hái trái và qua lại với con Nhàn hồn hậu đáng yêu ưa nuôi bọn cá dị tật, mà có Tí, có Chỉnh, rồi Túc, Đính… phải đối mặt với những thử thách của số phận. Những tháng ngày trong sáng của tình bạn dần qua, bọn nhỏ trong mỗi gia đình bình dị lớn lên cùng chứng kiến những giây phút cảm động của câu chuyện tình thân, nỗi khát khao hạnh phúc êm đềm, cùng bỡ ngỡ bước vào tuổi lớn nhiều yêu thương mang cả màu va vấp.\r\nKhi mở sách ra, thấy vườn cây xanh ngắt; được chứng kiến những giọt nắng chảy qua mái lá rơi trên bàn tay và đổ xuống sàn nhà, khuôn mặt hiền hậu của cô gái… và bạn sẽ tìm thấy câu trả lời.\r\nNhà văn Nguyễn Nhật Ánh vốn nổi tiếng qua nhiều thế hệ bạn đọc với nhiều tác phẩm đi vào lòng người. Với tác phẩm này, ông vẫn luôn giữ thông điệp khơi dậy khao khát sống đẹp, sống tử tế nơi người đọc.', 8, 1),
(44, 20, 6, 'Combo Bức Họa Múa Rối Xương', 466000, 'cbo4.webp', 'Trở về từ chuyến hành trình kinh hoàng ở nước Nga xa xôi, Lâm Bán Hạ và Tống Khinh La ngay lập tức phải đương đầu với một vụ án mới.\r\n\r\nBảy thiếu niên bốc đồng đã rủ nhau khám phá bí ẩn đằng sau những cái chết bất ngờ trên chuyến tàu lượn siêu tốc tại một công viên giải trí.\r\n\r\nThời khắc cánh cửa gỉ sét mở ra cũng là lúc họ vô tình bước qua ranh giới giữa thực và ảo. Sau lớp sương mù dày đặc, thứ đang lặng lẽ đón chờ họ chỉ có sự tuyệt vọng chết chóc.\r\n\r\nTàu lượn lao vun vút trên đường ray, giọng nói méo mó trong loa phát thanh thốt ra một câu thông báo đơn giản.\r\n\r\nCứ thế, trò chơi sinh tử điên rồ đã chính thức bắt đầu…', 8, 1),
(45, 20, 6, 'Kính Vạn Hoa Chết Chóc 1', 110000, 'kvhcc.webp', 'Con người ai cũng phải chết. Có người chết già, có người chết bất đắc kỳ tử: : Chết vì bệnh, chết vì tai nạn, bị sát hại, nhảy lầu tự tử… Liệu họ có còn cơ hội được sống? Có, mười hai cánh cửa được mở ra, mười hai thế giới. Đến với thế giới của cửa, bạn sẽ có cuộc đời mới. Nhưng cái giá phải trả không hề rẻ, thua cuộc là kết thúc cả trong cửa lẫn ngoài đời. Liệu Lâm Thu Thạch – một kiến trúc sư bình thường có vượt qua được không?\r\n“Chỉ có người nắm giữ chìa khóa, mới thoát khỏi cái chết đã định sẵn”…\r\n\r\nĐôi nét tác giả\r\n\r\nTây Tử Tử là tác giả nổi tiếng của mạng văn học Tấn Giang. Với bút pháp nhẹ nhàng, uyển chuyển, tình tiết bất ngờ thú vị, các tác phẩm của cô đã chiếm trọn trái tim độc giả.\r\n\r\nMột số tác phẩm: Nông trường kỳ ảo (tạm dịch), Ngũ hành của tôi thiếu em (tạm dịch)…', 9, 1),
(46, 20, 6, 'Kính Vạn Hoa Chết Chóc 2', 140000, 'kvhcc2.webp', 'Con người ai cũng phải chết. Có người chết già, có người chết bất đắc kỳ tử: : Chết vì bệnh, chết vì tai nạn, bị sát hại, nhảy lầu tự tử… Liệu họ có còn cơ hội được sống? Có, mười hai cánh cửa được mở ra, mười hai thế giới. Đến với thế giới của cửa, bạn sẽ có cuộc đời mới. Nhưng cái giá phải trả không hề rẻ, thua cuộc là kết thúc cả trong cửa lẫn ngoài đời. Liệu Lâm Thu Thạch – một kiến trúc sư bình thường có vượt qua được không?\r\n\r\n“Chỉ có người nắm giữ chìa khóa, mới thoát khỏi cái chết đã định sẵn”…\r\n\r\nĐôi nét tác giả\r\n\r\nTây Tử Tử là tác giả nổi tiếng của mạng văn học Tấn Giang. Với bút pháp nhẹ nhàng, uyển chuyển, tình tiết bất ngờ thú vị, các tác phẩm của cô đã chiếm trọn trái tim độc giả.\r\n\r\nMột số tác phẩm: Nông trường kỳ ảo (tạm dịch), Ngũ hành của tôi thiếu em (tạm dịch)…', 10, 1),
(47, 20, 6, 'Kính Vạn Hoa Chết Chóc 3', 160000, 'kvhcc3.webp', 'Con người ai cũng phải chết. Có người chết già, có người chết bất đắc kỳ tử: : Chết vì bệnh, chết vì tai nạn, bị sát hại, nhảy lầu tự tử… Liệu họ có còn cơ hội được sống? Có, mười hai cánh cửa được mở ra, mười hai thế giới. Đến với thế giới của cửa, bạn sẽ có cuộc đời mới. Nhưng cái giá phải trả không hề rẻ, thua cuộc là kết thúc cả trong cửa lẫn ngoài đời. Liệu Lâm Thu Thạch – một kiến trúc sư bình thường có vượt qua được không?\r\n\r\n“Chỉ có người nắm giữ chìa khóa, mới thoát khỏi cái chết đã định sẵn”…\r\n\r\nĐôi nét tác giả\r\n\r\nTây Tử Tử là tác giả nổi tiếng của mạng văn học Tấn Giang. Với bút pháp nhẹ nhàng, uyển chuyển, tình tiết bất ngờ thú vị, các tác phẩm của cô đã chiếm trọn trái tim độc giả.\r\n\r\nMột số tác phẩm: Nông trường kỳ ảo (tạm dịch), Ngũ hành của tôi thiếu em (tạm dịch)…', 9, 1),
(48, 20, 6, 'Kính Vạn Hoa Chết Chóc 4', 140000, 'kvhcc4.webp', 'Con người ai cũng phải chết. Có người chết già, có người chết bất đắc kỳ tử: : Chết vì bệnh, chết vì tai nạn, bị sát hại, nhảy lầu tự tử… Liệu họ có còn cơ hội được sống? Có, mười hai cánh cửa được mở ra, mười hai thế giới. Đến với thế giới của cửa, bạn sẽ có cuộc đời mới. Nhưng cái giá phải trả không hề rẻ, thua cuộc là kết thúc cả trong cửa lẫn ngoài đời. Liệu Lâm Thu Thạch – một kiến trúc sư bình thường có vượt qua được không?\r\n\r\n“Chỉ có người nắm giữ chìa khóa, mới thoát khỏi cái chết đã định sẵn”…\r\n\r\nĐôi nét tác giả\r\n\r\nTây Tử Tử là tác giả nổi tiếng của mạng văn học Tấn Giang. Với bút pháp nhẹ nhàng, uyển chuyển, tình tiết bất ngờ thú vị, các tác phẩm của cô đã chiếm trọn trái tim độc giả.\r\n\r\nMột số tác phẩm: Nông trường kỳ ảo (tạm dịch), Ngũ hành của tôi thiếu em (tạm dịch)…', 8, 1),
(49, 21, 6, 'Gỗ Thần', 60000, 'gothan.jpg', '“Than đương nhiên là có hồn. Trước đây nơi này không gọi than là than, cậu có biết gọi là gì không?”\r\n\r\n“Không biết.”\r\n\r\n“Gọi là gỗ thần.”\r\n\r\nNhiều tác phẩm của nhà văn Lưu Khánh Bang đều có chung một vùng ám ảnh: vùng mỏ. Từng sống và làm việc nơi đây suốt chín năm, ông đã viết: “Hiện thực của mỏ than chính là hiện thực của Trung Quốc.”\r\n\r\nGỗ thần được viết dựa trên sự kiện có thật: Năm 1998, nhiều vụ án lừa gạt giết người có tổ chức xảy ra tại các hầm mỏ ở Trung Quốc, với số nạn nhân lên đến hàng trăm người. Một bức tranh cuộc sống chân thực và sống động trải ra theo ngòi bút điêu luyện của tác giả: Mỏ than xa xôi hẻo lánh là nơi những con mồi cắn câu tìm đến, không biết rằng mình đã bước chân lên con đường không có lối về, nơi có giếng mỏ tối tăm ngột ngạt như một hố đen thiếu vắng luân thường và pháp luật, nơinhững con người vật lộn mưu sinh dưới đáy xã hội với những tâm tư, dục vọng phức tạp trải qua cuộc khảo nghiệm khắc nghiệt về nhân tính, nơi những bí mật đen tối và cay đắng của họ cuối cùng bị chôn vùi, nhưng độc giả thì không thể quên được.', 10, 1),
(51, 20, 1, 'Bức Họa Múa Rối Xương (Tâp 3 + 4) - Tặng Kèm 2 Bookmark', 210000, '1702354376_345993cbec8328324dd0c4ff8a4029fc.webp', '<p>Tàu hỏa xình xịch lăn bánh, xuyên qua màn mưa mịt mù dày đặc, đưa Lâm Bán Hạ và Tống Khinh La bước vào một thế giới kỳ ảo rùng rợn được tạo dựng bởi vật dị đoan số 47777. Nghiêm trọng hơn, cả hai đều mất toàn bộ trí nhớ về cuộc sống thực của mình.</p><p>Hóa ra vật dị đoan này tồn tại dưới dạng một giấc mơ có khả năng lây lan rất mạnh. Nó có rất nhiều tầng với vô vàn cạm bẫy luôn dụ dỗ con người ta đắm chìm trong ảo ảnh, không thể nào thoát ra, chỉ một chút sơ sẩy thôi cũng đủ sức khiến bản thân rơi vào mê loạn, cuối cùng bị các tầng giấc mơ nuốt chửng.</p><p>“Trong thế giới mà 47777 là bá chủ, bất kể cậu thấy được gì, ngửi được gì, đều là mùi của nó. Cậu mãi mãi không tài nào tỉnh lại được, điên cuồng chính là lời khen, còn tử vong lại chính là phần thưởng.”</p>', 10, 1),
(52, 24, 4, 'Sách - Sơn trà nở muộn - ( tặng: Bookmark bật lửa )', 209500, '1702354638_6ad0fad7864327dc1bd760529de648b3.webp', '<p>“Tiểu Sơn Trà.”</p><p>Chung Định nhìn ra tâm tư của cô, liền ôm lấy cô, vén lên phần tóc mái chấm mắt.</p><p>“Anh không phải một người đàn ông tốt, cư xử lạnh nhạt, không làm việc thiện. Sau này có thể tính khí cũng chẳng cải thiện được bao nhiêu.\"</p><p>Hứa Huệ Chanh ngẩn ngơ nhìn hắn.</p><p>“Nhưng những thứ anh đã hứa cho em thì sẽ không thiếu một món nào.”</p><p>Hắn nâng tay trái của cô lên, hôn lên ngón tay đeo nhẫn.</p><p>“Giàu nghèo chung bước, sống chết có nhau. Nếu nuốt lời, nhất định sẽ dùng cái chết để tạ tội.” Giọng điệu của Chung Định vẫn thản nhiên, tựa như đang nói chuyện phiếm, chẳng có thành ý gì.</p><p>Cô nghe rồi lại nghe, khóc rồi lại cười.</p>', 10, 1),
(53, 25, 9, 'Tiến trình lịch sử Việt Nam', 80000, '1702432697_fe0c8f0783aa009ea73835724b613015.webp', '<p>Cuốn sách được biên soạn bám sát đề cương “Tiến Trình Lịch Sử Việt Nam” đã được đại học Quốc gia thẩm định và thông qua, cung cấp cho sinh viên những kiến thức vừa cơ bản, vừa hệ thống liên tục về quá trình phát triển của lịch sử Việt Nam từ khi có con người xuất hiện trên nước ta.</p><p>Sách phản ánh những thành tựu mới nhất của khoa học lịch sử nước ta và trên thế giới cũng như những nghiên cứu chuyên sâu của mỗi tác giả được trình bày theo quan điểm chính thống, trên tinh thần chặt chẽ, hài hòa…</p><p>Sách được chia làm 2 phần chính:</p><p>Phần 1: Lịch sử VN cổ – trung đại (từ nguồn gốc đến năm 1858).</p><p>Phần 2: Lịch sử VN cận – hiện đại (từ năm 1858 đến nay).</p>', 10, 1),
(54, 8, 9, 'Giáo trình Lịch sử văn minh thế giới', 90000, '1702432829_b155838ae62e2eaecc846f25127bfd5e.webp', '<p>Một cuốn sách nói về lịch sử của nền văn minh thế giới</p>', 10, 1),
(55, 8, 9, 'Lịch sử văn minh Trung Hoa', 115000, '1702432952_f3c06054873ba923123b153837d18368.webp', '<p>Từ khi sách ra đời đã mấy thập kỉ, nhưng công trình nghiên cứu này ở ta vẫn chưa phổ biến nhiều; trong lúc đó hãy còn một số giờ dạy và một số tài liệu khác vẫn xem nền văn hóa châu Âu mở đầu với HI-LA là tột đỉnh, là khỏi nguyên của mọi nền văn hóa. Quan điểm này đã bị w. Durant phê phán ngay tại nơi nó được phát sinh, là giới sử gia phương Tây.</p><p>Trong phần văn minh phương Đông, w. Durant viết khá kĩ về Ấn Độ và Trung Hoa. Hai quốc gia này là nơi phát sinh hai nền văn minh lớn có tác dụng và ảnh hưởng đến hai phía cửa lục địa châu Á trong đó có Việt Nam. Sự phát triển của Ấn Độ và Trung Hoa trong thập kỉ này, tuy mỗi nước có một đặc điểm riêng, nhưng luôn luôn tập trung sự chú ý của cả loài người, đặc biệt của vùng Đông Nam Á, do sự chuyển mình vươn lên với cả quá trình sôi động và phức tạp của nó.</p><p>Những con rồng nhỏ chung quanh đang trên đà phát triển, con rồng lớn đang đứng trước sự thử thách lớn lao. Thử đi ngược lại những thời kì lịch sử trước đây của Trung Hoa, Ấn Độ để làm cơ sở, tìm hiểu xu hướng phát triển hiện nay của hai nước láng giềng Việt Nam. Đó là mục đích của chúng tôi khi xuất bản tập&nbsp;&nbsp;trong bộ sách của w. Durant.</p>', 9, 1),
(56, 8, 9, 'Lịch Sử Nông Thôn + Cách Mạng Ruộng Đất Ở Việt Nam', 452000, '1702433096_60ae372255f7bb16edc16389e75a29e2.webp', '<p>Combo 3 Cuốn: Lịch Sử Nông Thôn + Cách Mạng Ruộng Đất Ở Việt Nam</p><p>- Nông thôn Việt Nam trong lịch sử tập 1: 468 trang</p><p>- Nông thôn Việt Nam trong lịch sử tập 2: 644 trang</p><p>- Cách mạng ruộng đất ở Việt Nam: 438 trang</p>', 10, 1),
(57, 26, 9, 'Việt Sử Yếu', 220000, '1702433195_5838245694b28ee07bede54d881fe337.webp', '<p>Được hoàn thiện bằng chữ Hán năm 1914, rồi được chính tác giả chuyển soạn sang chữ quốc ngữ và đăng trên Đông Dương tạp chí năm 1915, VIỆT SỬ YẾU của Hoàng Cao Khải có thể xem là cuốn sách quốc ngữ đầu tiên mở ra lối viết hiện đại về lịch sử Việt Nam. Học tập cách viết sử từ phương Tây, sách tạo nên một bứt phá đáng kể trong cách tiếp cận và biên soạn lịch sử, khác hẳn lối chép sử biên niên truyền thống của các sử gia phong kiến.</p><p>Như một cuốn sử yếu, tác phẩm khái quát ngắn gọn nhưng tương đối đầy đủ về toàn bộ lịch sử Việt Nam, từ sự khởi đầu của nhà nước Văn Lang cho đến thời điểm cuốn sách được hoàn thiện năm Duy Tân thứ tám, 1914. Thay vì lần lượt ghi chép các sự kiện theo trình tự năm tháng và các đời vua chúa, Hoàng Cao Khải đưa ra cách phân kỳ lịch sử mới, hệ thống hóa và bố cục thành các chương, tiết rành mạch, chặt chẽ, đồng thời có những ý kiến phê bình, nhận xét tinh tế, sắc bén. Đó là điều mang lại cảm hứng cùng những gợi dẫn vô cùng quan trọng để các công trình sau đó kế thừa, phát huy, trong đó trực tiếp và đáng kể nhất là Việt Nam sử lược của Trần Trọng Kim. Cho đến nay, VIỆT SỬ YẾU vẫn là một công trình mang nhiều điểm độc đáo để chúng ta cùng suy ngẫm và đối thoại.</p>', 10, 1),
(58, 8, 3, 'Tranh Truyện Dân Gian Việt Nam - Chú Bé Thông Minh', 19000, '1702433265_d2644faa8ae4c4cb52df04732b0165f4.webp', '<p>Làng nọ một hôm được lệnh vua ban: Phải nuôi sao cho ba con trâu đực đẻ ra chín con rồi mang vào kinh thành nộp cho vua. Cả làng nao núng lo sợ không biết phải làm sao. Vậy mà chú bé chưa đầy 10 tuổi đã tìm được cách cứu dân làng. Chú bé ấy làm thế nào nhỉ? Mời các em cùng đọc truyện! Những câu chuyện dân gian giúp các em giàu thêm mơ ước, biết sống đẹp và trân trọng truyền thống cha ông.</p>', 9, 1),
(59, 8, 3, 'Cổ Tích Việt Nam', 136000, '1702433325_co-tich-viet-nam.webp', '<p>Truyện cổ tích luôn đóng một vai trò quan trọng đối với sự hình thành và phát triển nhân cách của trẻ. Những câu chuyện mang đậm giá trị nhân đạo, có ý nghĩa giáo dục sâu sắc giúp các em trưởng thành, phát triển tư duy một cách lành mạnh và trong sáng nhất. Không những thế, lời văn đẹp đẽ trong các câu chuyện cổ còn có tác dụng bồi dưỡng cho trẻ năng lực thẩm mỹ, khả năng cảm thụ văn học, giúp trẻ sử dụng ngôn ngữ một cách phong phú và hiệu quả.</p><p><strong>Cổ Tích Việt Nam </strong>chọn lọc những câu chuyện đặc sắc nhất trong kho tàng truyện cổ tích Việt Nam, bao gồm: Tấm Cám, Cái ang vàng, Ở ác gặp ác, Hai cây khế, Chú bé thông minh, Chàng rể cóc, Vua Lợn, Truyện Thạch Sanh, Lưỡi dao thần, Sơn Tinh Thủy Tinh, Nàng Ngón Út…</p>', 10, 1),
(60, 8, 3, 'Cổ Tích Việt Nam - Sự Tích Hồ Ba Bể', 15000, '1702433402_c58f76af251816778c6dc6f5c31c6d36.webp', '<p>Từ thở ấu thơ, các em nhỏ đã được biết đến những câu chuyện cổ tích qua lời kể của bà. của mẹ. Đó là một thế giới vô cùng hấp dẫn, lôi cuốn với biết bao tình tiết li kỳ, những bài học giáo dục nhẹ nhàng nhưng tác động mạnh mẽ trong việc bồi dưỡng tâm hồn trẻ thơ. Huy Hoàng Bookstore chào đón các bạn đọc nhỏ tuổi đến với bộ sách \"Cổ tích Việt Nam\" được minh họa bởi những nét vẽ tươi sáng, sinh động, mang đến cho các em những cảm xúc thẩm mỹ, giúp các em càng thêm yêu kho tàng cổ tích Việt Nam hơn.</p>', 10, 1),
(61, 8, 3, 'Cổ Tích Việt Nam (Song Ngữ): Sự Tích Cây Xấu Hổ', 19000, '1702433471_688045b5fe6d22793d20191da2afaa48.webp', '<p>Sự tích cây xấu hổ lí giải về nguồn gốc của cây xấu hổ - một loại cây dại rất phổ biến ở Việt Nam.&nbsp; Câu chuyện là lời nhắc nhở đến bố mẹ đừng bao bọc bé quá nhiều, hãy dạy cho bé tính tự lập, để bé học hỏi làm mọi thứ. Bởi sau này, khi bạn không còn bên con nữa, con sẽ rất khó khăn để tự đối diện với mọi thứ một mình. Các bé cũng không nên quá ỷ lại vào bố mẹ, cần phải biết chăm sóc và yêu thương bố mẹ nhiều hơn nữa.</p>', 9, 1),
(62, 19, 1, 'Đi qua thương nhớ', 74000, '1702433741_dqtn.webp', '<p>Cùng gặp lại <strong>“Đi qua thương nhớ”</strong>…Đã 5 năm trôi qua từ khi tập thơ <strong>“Đi qua thương nhớ”</strong> được ra mắt độc giả, và cũng gần 4 năm “Đi qua thương nhớ”có phiên bản đặc biệt đầu tiên. Mỗi cuốn sách với tác giả đều là một món quà cảm xúc gửi đến mọi người. Đó cũng chính là lý do Phong Việt chọn thời điểm mùa Giáng Sinh hằng năm – mùa của những gửi trao – để phát hành tập thơ của mình. Và dù 5 năm đã trôi qua, đối với rất nhiều bạn đọc yêu quý PhongViệt thì <strong>“Đi qua thương nhớ”</strong> vẫn là một trong những mối đồng cảm lớn nhất để chúng ta gặp nhau trong cuộc đời.</p>', 10, 1);
INSERT INTO `products` (`id`, `author_id`, `cat_id`, `name`, `price`, `image`, `description`, `product_quantity`, `status`) VALUES
(63, 19, 3, 'Chúc ngủ ngon', 79000, '1702448997_anh11.webp', '<p>\"Chúc ngủ ngon\" là tập thơ song ngữ Việt – Anh thứ ba của Nguyễn Phong Việt. Sau một thập niên viết thơ, Nguyễn Phong Việt muốn góp sức mình viết nên những vần thơ thiếu nhi bởi không muốn các bạn nhỏ thiệt thòi và không có cơ hội tiếp cận với các tác phẩm thiếu nhi Việt Nam, đặc biệt là thơ ca. Chính vì thế, đến nay anh đã xuất bản ba cuốn thơ thiếu nhi song ngữ gửi tặng các độc giả nhí gồm: \"Xin chào những buổi sang\" (2018) – Nguyễn Phong Việt &amp; dịch giả Hạ Nhiên; \"Những chiếc ghế trong căn bếp nhỏ\" (2021) – Nguyễn Phong Việt &amp; dịch giả Rosy Trang Trần; \"Chúc ngủ ngon\" (2023) - Nguyễn Phong Việt &amp; dịch giả Rosy Giang Trần.</p><p>Tập thơ \"Chúc ngủ ngon\" đã góp nhặt những tâm tư, trăn trở về đời sống, tình yêu vào từng trang viết, có thể nói với phong cách viết đầy khác biệt, các tác phẩm của Nguyễn Phong Việt vẫn luôn khiến bạn đọc nhỏ tuổi đón đọc và thấy yêu hơn những vần thơ, cả những âm thanh dạt dào xúc cảm của tiếng Việt, bên cạnh đó là bản dịch tiếng Anh rất công phu của dịch giả Rosy Giang Trần giúp cho các bạn nhỏ tiếp cận một sắc thái mới của tác phẩm.</p>', 10, 1),
(64, 19, 1, 'Chỉ Cần Tin Mình Là Duy Nhất', 87000, '1702433907_cctmldn.webp', '<p>Như là lời hẹn&nbsp;ước mỗi năm, nhà thơ Nguyễn Phong Việt sẽ trình làng một tập thơ tự sự dành cho tình yêu và cuộc sống. Tất cả 60 bài thơ trong tập thơ là lời nhắn nhủ dành cho mỗi người trưởng thành, dù cuộc sống có quá nhiều va vấp&nbsp;đắng cay nhưng nghị lực và bản năng của mỗi con người là vô hạn. Chỉ những khi&nbsp;đó chúng ta&nbsp;mới biết tự mình xoa dịu những vết thương, tự mình&nbsp;đứng lên sau mỗi cú ngã nhớ&nbsp;đời, biết ôm và ngăn tim mình phải ngừng&nbsp;đau sau khi kết thúc những ngày tháng yêu thương tưởng chừng như sắp&nbsp;đi&nbsp;đến&nbsp;đoạn kết happy – ending.</p><p>Nhà thơ Nguyễn Phong Việt từng thừa nhận tập thơ “Đi qua thương nhớ” là tập thơ gây cho anh sự thương nhớ dai dẳng nhất. Vậy thì tập thơ mới thứ bảy, <strong>CHỈ CẦN TIN MÌNH LÀ DUY NHẤT</strong> có gì đặc biệt mà anh lại thở một hơi dài&nbsp; khi đặt bút xuống những dòng cuối cùng của tác phẩm? Liệu có sức nặng nào trong tập thơ này chăng?</p>', 10, 1),
(65, 1, 1, 'Crying In Trees', 200000, '1702434222_882655c60b7f8df044df0ea7ddb80d7f.webp', '<p>Đây là bản tiếng Anh \"Ngồi khóc trên cây\" của nhà văn Nguyễn Nhật Ánh. Tác giả sẽ dẫn bạn đi liền một mạch trong một thứ cảm xúc rưng rưng của tình yêu thương. Bạn sẽ thấy may mắn vì đang được sống trong cuộc sống này, thấy yêu thế những tấm lòng.</p><p>I promise myself that this visit I will make it up to Turtle. I will go to her neighborhood and give this book to her, I will go and play with her everyday, and when there is no one else around, I will take her hand without her having to ask me.&nbsp;<br>This time I will tell her that I love her very much, such a big love, and the reason why the last time I didn’t dare express my love in a natural way is because I thought I was about to die. I will tell her the story of how the doctors misdiagnosed me, and that is why I didn’t return to the village. In this spot, I will lie to Turtle a bit. I am not yet ready to mention the real reason that kept me in Sài Gòn for three whole years. The story of her origin, I will tell her later so she knows.&nbsp;</p>', 10, 1),
(66, 1, 1, 'Have a good day', 161000, 'hagd.webp', 'Originally published in Vietnamese with the title \"Chúc một ngày tốt lành\". In Have a Good Day, a motley crew of cunning piglets, receptive chicks, an energetic puppy, their seasoned mothers, as well as Peepy, their master farm boy, begin experimenting with one another\'s languages, causing a media sensation and turning village life upside down. The book invites readers into worlds where communication and understanding across species is essential, and hopefully, possible. And because these deep relationships and understandings between human and animal characters bear the potent capacity to shake up a community\'s established order, this ability and the ones who possess it become subjects of both fascination and fear. In his delightful way of storytelling, the writer gently brings readers to questions of encountering difference and maintaining openness to the worlds around us which ceaselessly offer so much for us to learn.', 10, 1),
(67, 27, 2, 'Sách kỹ năng song ngữ - Ngỏ lời khi cần giúp', 44000, '1702444766_anh1.webp', '<p>Billy-Bắt-Nạt ngày nào cũng cướp đồ ăn trưa của tớ, xô đẩy tớ hoặc ngáng chân tớ ở hành lang và dọa dẫm tớ những điều đáng sợ. Tớ sợ đi học! Billy-Bắt-Nạt còn dọa rằng, nếu tớ tiết lộ những chuyện này với ai thì nó sẽ đón lõng tớ sau khi tan trường và dạy tớ một bài học.</p><p>Tớ sẽ ôm nỗi sợ này mãi, hay là nhờ ai đó giúp mình</p><p>Cuốn sách này dạy vượt qua rắc rối</p><p>Cả bộ có 4 cuốn</p>', 10, 1),
(68, 28, 2, 'Sách Kỹ Năng Sống và nuôi dưỡng tâm hồn- Combo 2 cuốn Vì mình là cô gái tuổi teen + Mẹ hãy buông tay', 145000, '1702444937_anh2.webp', '<p>️GỠ RỐI TÂM TƯ TUỔI TEEN DÀNH CHO CHA MẸ️</p><p>“Mẹ chẳng hiểu con gì cả, mẹ ra ngoài đi mà”<br>“Sao mẹ lúc nào cũng thế, con lớn rồi.”<br>“Con mệt lắm rồi, con không muốn nói chuyện với mẹ nữa”</p><p>️Đã bao lần rồi đứa con gái bé bỏng của bạn nói với bạn những câu như thế?<br>️Đã bao lâu rồi bạn và con gái không thể nói chuyện được với nhau quá 15 phút?<br>️Đã bao ngày rồi gia đình bạn mới không có những tiếng ồn ào cãi vã của hai mẹ con?</p><p>&nbsp;VẬY THÌ:</p><p>Thay vì giấu đi đôi cánh của con và làm cho nó tê liệt, cha mẹ hãy cho con cơ hội để con được cất cánh.<br>Thay vì bao bọc, che chở cha mẹ hãy cho con cơ hội để con được học cách tự đi<br>bằng đôi chân của mình.<br>Thay vì tự quyết định và áp đặt suy nghĩ của mình với con cha mẹ hãy cho con<br>được làm những gì con muốn và con thấy cần thiết.<br>Thay vì khắt khe, ngăn cản con, hãy rộng lòng đón nhận sự thay đổi của con một<br>cách tích cực.<br>à thay vì chỉ biết làm cha mẹ, hãy biết làm bạn cùng con.</p><p>Đó cũng là mong muốn của Việt An Books gửi đến bạn đọc trong cuốn cảm nang Nhật kí tuổi teen của tác giả Đào Thiên An.</p><p>Bằng lối viết chân thực và cách nhìn của “người trong cuộc”, tác giả đã chặt lọc đủ “chất” và “lượng” những nỗi niềm khó nói, khó tỏ của tuổi teen để gửi đến mẹ.</p><p>✓Các bậc phụ huynh có con đã và đang bước vào lứa tuổi teen không nên bỏ qua cuốn cẩm nang này và hãy xem nó như là một bí kíp gỡ rối những nghi hoặc, sự khó hiểu đeo bám mình bấy lâu nay về con. Từ đó cha mẹ sẽ hiểu con hơn, đồngcảm với con hơn và quan trọng là đồng hành cùng con vượt qua khúc quanh đầy bỡ ngỡ để tự tin bước vào tương lai bằng những bước đi vững chắc và hạn chế được những sai lầm đáng tiếc.</p>', 10, 1),
(69, 30, 2, 'Giới Hạn Của Bạn Chỉ Là Xuất Phát Điểm Của Tôi (Tái Bản)', 62500, '1702445234_anh4.webp', '<p>Giới hạn là gì?</p><p>Giới hạn liệu có phải ranh giới an toàn của mỗi người?</p><p>Có lẽ không, giới hạn là để phá bỏ.</p><p>Bởi giới hạn của bạn chỉ là xuất phát điểm của người khác.</p><p>Tôi tin rằng bạn có những ước mơ rất tuyệt vời, tôi cũng tin rằng bạn có thể thực hiện được nó. Nhưng ước mơ mà không hành động thì mãi mãi chỉ nằm trong mộng tưởng, hành trình dài mà không đi thì mãi mãi vẫn chẳng thể chạm đích. Giới hạn đặt ra để bứt phá, chứ không phải điểm tận cùng. Tôi hy vọng mỗi sáng đánh thức bạn dậy không phải là tiếng chuông đồng hồ mà là khát vọng lớn lao trong trái tim bạn.</p><p>Mỗi khi bạn cảm thấy những khó khăn hiện tại đã chạm đến giới hạn của mình… Hãy đọc cuốn sách này, nó sẽ giúp bạn biến giới hạn trở thành vạch xuất phát…</p>', 10, 1),
(70, 31, 2, 'Kỹ Năng Đọc Sách Hiệu Quả', 67320, '1702448353_anh5.webp', '<p>Mỗi cuốn sách hay là một cuộc đời, một kho kinh nghiệm, được viết không chỉ một lần mà còn được viết đi viết lại hàng trăm lần trong nhiều năm. Bạn có thể dễ dàng đọc xong một cuốn sách hay chỉ trong vài tiếng đồng hồ, nhưng để nắm bắt hết giá trị của nó có thể mất đến vài năm.</p><p>Việc đọc sách hiệu quả, sẽ đưa đến cho bạn một kho tri thức khổng lồ, giúp bạn khám phá thế giới. Để tận dụng được điều đó, bạn cần có những kỹ năng đọc sách hiệu quả dưới đây:</p><ul><li>Xác định mục tiêu đọc sách</li><li>Tăng khả năng tập trung</li><li>Cải thiện khả năng ghi nhớ</li><li>Tăng cường tư duy logic</li><li>Kích thích tư duy sáng tạo</li><li>Nâng cao kỹ năng giao tiếp</li></ul><p>Cẩm nang “Kỹ năng đọc sách hiệu quả” cung cấp những giải pháp tốt nhất khi đưa ra những kỹ năng cực kỳ đơn giản giúp bạn nâng cao khả năng đọc và phân tích tài liệu, qua đó bạn không chỉ học được thêm nhiều kiến thức, mà còn làm chủ được chúng để làm giàu cho cuộc sống cá nhân.</p>', 10, 1),
(71, 32, 2, 'Sách -Kỹ Năng Làm Việc Nhóm Của Người Nhật', 67320, '1702448448_anh6.webp', '<p>Nhà xuất bản: Nhà Xuất Bản Thế Giới&nbsp;</p><p>Tác giả: Hidehiko Hamada&nbsp;</p><p>Năm xuất bản: 062018&nbsp;</p><p>Kích thước: 13 20 cm&nbsp;</p><p>Loại bìa: Bìa mềm&nbsp;</p><p>Giới thiệu sản phẩm:&nbsp;</p><p>Kỹ Năng Làm Việc Nhóm Của Người Nhật&nbsp;</p><p>Tác phẩm \"Kỹ năng làm việc nhóm của người Nhật\" được viết để trợ giúp những người đi làm đang loay hoay với vấn đề hòa nhập, giao tiếp và làm việc ở môi trường chuyên nghiệp. Cuốn sách cung cấp đầy đủ cho bạn:&nbsp;</p><p>Kỹ năng truyền đạt thông tin dễ hiểu, không gây hiểu lầm&nbsp;</p><p>Kỹ năng giải quyết vấn đề đúng yêu cầu cấp trên&nbsp;</p><p>Kỹ năng lắng nghe chủ động</p>', 10, 1),
(72, 33, 2, '1001 Lời Hay Ý Đẹp', 18700, '1702448555_anh7.webp', '<p>Qua cuốn sách <strong>1001 Lời Hay Ý Đẹp</strong>, bạn sẽ đọc được những chiêm nghiệm, những lời ý đẹp đẽ đầy tính xúc cảm hay giàu triết lý về các lĩnh vực của cuộc sống như tình yêu, tình bạn, tính cách, thái độ, cách cư xử, đàn ông, phụ nữ... của những nhân vật nổi tiếng trên thế giới thuộc nhiều lĩnh vực, làm phong phú thêm tâm hồn và trí tuệ của mình.</p>', 10, 1),
(73, 27, 2, 'Lãnh Đạo Bằng Sức Mạnh Trí Tuệ Cảm Xúc', 135500, '1702448670_anh8.webp', '<p>Định kiến về sự phiền nhiễu của cảm xúc tại nơi làm việc đã cắm rễ quá sâu trong suy nghĩ của hầu hết chúng ta. Trên thực tế, mặc dù năng lực nhận thức thuần túy và năng lực chuyên môn là cần thiết cho công việc, nhưng chính các năng lực trí nhớ cảm xúc mới giúp phân định ra nhà lãnh đạo xuất chúng.<br>Những nghiên cứu mang tính đột phá về não bộ đã cho thấy sức mạnh của nhà lãnh đạo giàu trí tuệ cảm xúc trong việc truyền cảm hứng, khơi dậy cảm xúc tích cực và nhiệt tình cống hiến nơi nhân viên.<br>Tạp chí Time nhận xét về nội dung sách: “Cũng như cách mà cuốn sách đầu tiên của Goleman, Emotional Intelligence, mở rộng tầm nhìn của chúng ta về trí thông minh cảm xúc, Lãnh đạo bằng sức mạnh trí tuệ cảm xúc thay đổi gần như hoàn toàn các quan điểm trước nay về một nhà lãnh đạo tài ba.”<br>Tố chất lãnh đạo không phải tự nhiên mà có, nó là cộng hưởng giữa IQ (Trí tuệ) và EQ (Cảm xúc), việc rèn luyện và có tầm nhìn khám phá bản thân sao cho dung hòa được cả hai yếu tố trên là điều rất cần thiết của các nhà lãnh đạo hiện tại và tương lai.<br>Việc quản lý con người thông qua cảm xúc và trí tuệ không phải là việc đơn giản mà ai cũng có thể làm được. Tuy nhiên, nếu nhà lãnh đạo có sự cộng hưởng của Trí Tuệ và Cảm Xúc thì mọi khúc mắc, xung đột trong quá trình làm việc cùng nhau sẽ không khó giải quyết.<br>Ngoài Bốn phong cách đứng đầu gồm Tầm nhìn (visionary), Huấn luyện (coaching), Liên kết (affiliative), Dân chủ (democratic) giúp tạo sự cộng hưởng nhằm nâng cao hiệu suất làm việc, thì hai phong cách lãnh đạo còn lại là Yêu cầu cao độ (paceseting) và Mệnh lệnh (commanding) chỉ hữu ích trong một số trường hợp và nên được áp dụng một cách thận trọng. Đây là Sáu phong cách lãnh đạo, sự cộng hưởng không chỉ bắt nguồn từ tâm lý hay kỹ năng thuyết phục của nhà quản lý, nó còn đến từ việc phối hợp nhuần nhuyễn các phong cách lãnh đạo.<br>Cả ba tác giả Daniel Goleman, Richard Boyatzis và Anni McKee đều có nhiều năm kinh nghiệm trong việc giảng dạy, nghiên cứu, báo cáo về bộ não, hành vi tổ chức, Tâm lý học và Khoa học, nội dung với lối viết súc tích, các tác giả thể hiện những quá trình phức tạp và có phần trừu tượng một cách dễ hiểu, cuốn hút và khơi gợi cảm hứng nơi bạn đọc – (theo Tạp chí USA Today).<br>Đã đến lúc chúng ta phải nhìn nhận những lợi ích thiết thực của lãnh đạo bằng Trí Tuệ Cảm Xúc, đồng thời bồi dưỡng năng lực này nơi đội ngũ quản lý nhằm tạo sự cộng hưởng tích cực giúp thúc đẩy và truyền cảm hứng cho toàn doanh nghiệp, tổ chức.<br>Xây dựng tổ chức trên nền tảng Trí Tuệ Cảm Xúc không chỉ dành riêng cho các nhà lãnh đạo mà nó còn giúp các nhân tố cá nhân có định hướng phát triển sự nghiệp, nâng cao tầm nhìn để trở thành một nhà lãnh đạo tương lai. Những bài học đắt giá cùng kỹ năng thực tế còn giúp các bạn sinh viên chuyên ngành quản lý, quản trị thiết thực hơn, có tầm nhìn lý tưởng, tạo dựng sự thay đổi bền vững nhất.</p>', 10, 1),
(74, 34, 2, 'Muốn Nghèo Cũng Khó Lắm Chứ Bộ', 33000, '1702448756_anh9.webp', '<p>Công ty phát hành Nhân Văn<br>Tác giả Hàn Ni<br>Năm XB 2019<br>Nhà xuất bản Tổng Hợp TP.HCM</p><p>Trọng lượng(gr) 200<br>Kích thước 13 x 21</p><p>Hình thức Bìa Mềm<br>Số trang 240</p><p>--------------------</p><p>#GIỚI THIỆU SÁCH</p><p>Muốn Nghèo Cũng Khó Lắm Chứ Bộ</p><p>Cuốn sách Muốn Nghèo Cũng Khó Lắm Chứ Bộ của Nhà báo Hàn Ni đơn giản là những chia sẻ về lối sống, những trải nghiệm, những mẫu chuyện tản mạn nhưng rất gần gũi và thiết thực.</p><p>Tác giả luận về sự giàu, nghèo không chỉ về phương diện tiền của tài sản mà giàu nghèo về kiến thức, tâm hồn, ý chí và nhân cách:</p><p>Muốn giàu, phải có tư duy phục vụ. Vì doanh nghiệp càng phục vụ cho nhiều người bao nhiêu thì càng giàu bấy nhiêu.</p><p>Muốn giàu, đừng bao giờ kiếm lợi từ người thân. Gà què mới ăn quẩn cối xoay, kiếm lợi từ người thân sẽ bó hẹp cuộc đời mình nhỏ lại.</p><p>Hãy ra đời mà bơi, có thất bại cũng biết được thế nào là biển trời bao la.</p>', 10, 1),
(75, 35, 2, 'Nóng Giận Là Bản Năng, Tĩnh Lặng Là Bản Lĩnh (Bí Kíp Tu Dưỡng Một Trái Tim Trong Sáng)', 43000, '1702448932_anh10.webp', '<p>Sai lầm lớn nhất của chúng ta là đem những tật xấu, những cảm xúc tiêu cực trút bỏ lên những người xung quanh, càng là người thân càng dễ gây thương tổn.</p><p>Cái gì cũng nói toạc ra, cái gì cũng bộc lộ hết không phải là thẳng tính, mà là thiếu bản lĩnh. Suy cho cùng, tất cả những cảm xúc tiêu cực của con người đều là sự phẫn nộ dành cho bất lực của bản thân. Nếu bạn đúng, bạn không cần phải nổi giận. Nếu bạn sai, bạn không có tư cách nổi giận.</p><p>Đem một nắm muối bỏ vào cốc nước, cốc nước trở nên mặn chát. Đem một nắm muối bỏ vào hồ nước, hồ nước vẫn ngọt lành. Lòng người cũng vậy, càng nông cạn càng dễ biến chất, càng sâu sắc càng khó lung lay. Ý nghĩa của đời người không ngoài việc tu tâm dưỡng tính, để mở lòng ra bao la như biển hồ, trước những nắm muối thị phi của cuộc đời vẫn thản nhiên không xao động.</p><p>“Nóng giận là bản năng, tĩnh lặng là bản lĩnh” là từ bỏ “tam độc”, tu dưỡng một trái tim trong sáng:</p><ul><li>Từ bỏ “tham” – bớt một phần ham muốn, thêm một phần tự do.</li><li>Từ bỏ “sân” – bớt một phần tranh chấp, thêm một phần ung dung.</li><li>Từ bỏ “si” – bớt một phần mê muội, thêm một phần tĩnh tâm.</li></ul><p>Cuốn sách là tập hợp những bài học, lời tâm sự về nhân sinh, luận về cuộc đời của đại sư Hoằng Nhất – vị tài tử buông mọi trần tục để quy y cửa Phật, người được mệnh danh tinh thông kim cổ và cũng có tầm ảnh hưởng lớn trong Phật giáo.</p><p>Trưởng thành, hãy để lòng rộng mở, tiến gần đến chữ “Người”, học được cách bao dung, học được cách khống chế cảm xúc. Đừng để những xúc động nhất thời như ngọn lửa, tưởng thiêu rụi được kẻ thù mà thực ra lại làm bỏng tay ta trước.</p>', 10, 1),
(76, 36, 2, 'Yêu Mình Trước Đã, Yêu Đời Để Sau', 74700, '1702449943_anh12.webp', '<p>Tình yêu bản thân là sự cân bằng giữa việc chấp nhận con người thật của chính mình, song song với việc biết rằng mình xứng đáng với những điều tốt đẹp hon, và hành động theo kim chỉ nam đó.<br><br>Tác giả truyền cảm hứng<br><br><strong>Yêu mình trước đã, yêu đời để sau</strong> được chấp bút bởi Vex King - một nhà văn, một huấn luyện viên tinh thần và một doanh nhân – người đã trải qua vô vàn thử thách trong quá trình trưởng thành. Anh từng sống dưới đáy của cuộc đời khi cha anh qua đời từ khi anh còn là một đứa trẻ, từng trải qua thời gian sống vô gia cư và lớn lên trong một khu phố nhiều tệ nạn. Anh cũng thường xuyên bị bắt nạt do nạn phân biệt chủng tộc.</p><p>Tuy nhiên, Vex vẫn vươn lên mạnh mẽ và thành công trong cuộc sống. Tài khoản Instagram cá nhân của anh (@vexking) đã trở thành nguồn cảm hứng của hàng ngàn người trẻ. Anh là người bắt đầu phong trào \"Good Vibes Only #GVO\" để giúp người khác sử dụng sức mạnh của sự tích cực để biến đổi bản thân và cuộc sống của họ thành một điều gì đó vĩ đại hơn.</p><p>Cuốn sách cần một sự kết hợp qua lại giữa nội dung cuốn sách và cam kết của người đọc</p><p>\"Yêu mình trước đã, yêu đời để sau\" đòi hỏi bạn phải cam kết ngay bây giờ để trở thành phiên bản tốt hơn, vĩ đại hơn của chính mình. Mục tiêu của nó là giúp bạn trở nên tốt hơn so với chính bạn ngày hôm qua, mỗi ngày, trong mọi lĩnh vực, và trong suốt phần đời còn lại của bạn.</p><p>Sự vĩ đại không phải là khái niệm một chiều. Mặc dù xét về mặt chủ quan, hầu hết mọi người sẽ liên tưởng khái niệm này với việc có một khả năng đặc biệt, có nhiều tiền hoặc của cải vật chất, quyền lực hoặc địa vị, và những thành tựu to lớn mà họ đã đạt được qua nhiều quá trình nỗ lực, đấu tranh. Nhưng sự vĩ đại thực sự sâu sắc hơn như vậy rất nhiều. Sự vĩ đại không thể tồn tại nếu thiếu đi mục đích, tình yêu, lòng vị tha, sự khiêm tốn, sự trân trọng, lòng nhân hậu, và tất nhiên – đặc ân lớn nhất mà con người được ban tặng – niềm hạnh phúc.</p><p>Bạn xứng đáng với một cuộc sống tốt đẹp hơn và cuốn sách này sẽ giúp bạn tạo ra cuộc sống đó !</p>', 10, 1),
(77, 37, 4, 'Ngôi Nhà Bên Bờ Biển Xanh Thẳm', 135000, '1702450075_anh13.webp', '<p><strong>Ngôi Nhà Bên Bờ Biển Xanh Thẳm</strong></p><p>(The House in the Cerulean Sea – T.J.Klune)</p><p>Sách bán chạy của New York Times, USA Today và Washington Post.</p><p>Đoạt giải thưởng Alex Awards 2021 - Giải thưởng hàng năm tôn vinh 10 cuốn sách viết cho người lớn có sức hấp dẫn đặc biệt.</p><p>Đoạt giải thưởng RUSA Awards 2021 - Hạng mục tiểu thuyết giả tưởng.</p><p>Lọt danh sách \"Những cuốn sách được mong đợi nhất mùa xuân 2020\" của Publishers Weekly.</p><p>Lọt danh sách \"20 cuốn sách giả tưởng thú vị phải đọc\" của Book Riot.</p><p>Linus Baker là một nhân viên công tác xã hội làm việc tại Sở Phụ Trách Thanh Thiếu Niên Nhiệm Màu. Anh nhận nhiệm vụ xác định xem sáu đứa trẻ “trông có vẻ nguy hiểm” và đang sinh sống tại đảo Marsyas liệu có khả năng mang đến ngày tận thế hay không.</p><p>Arthur Parnassus là chủ trại trẻ mồ côi. Anh là người yêu thương, quan tâm và sẽ làm bất cứ điều gì để bọn trẻ được an toàn, ngay cả khi điều đó có nghĩa là thế giới sẽ bùng cháy và những bí mật anh muốn giấu kín bị phơi bày.</p><p>Ngôi nhà bên bờ biển xanh thẳm là một cuốn sách nhẹ nhàng và ngọt ngào, chứa đựng những bài học đời thường mà đôi khi con người quên mất. Rằng những điều bất ngờ nhất, phù hợp nhất sẽ vô tình xuất hiện khi bạn không mong chờ nhất.</p><p>“Nhà không phải lúc nào cũng là ngôi nhà nơi ta sống. Đó còn là những người chúng ta lựa chọn để ở bên…”</p><p><strong>GIỚI THIỆU TÁC GIẢ T.J.KLUNE</strong></p><p>T.J.Klune tên thật là Travis John Klune (sinh ngày 20 tháng 5 năm 1982 ở Roseburg, Oregon), là một tác giả người Mỹ với các tác phẩm thuộc thể loại tiểu thuyết giả tưởng và lãng mạn có các nhân vật đồng tính và LGBTQ.</p><p>Những trải nghiệm sống của T.J.Klune với người vô tính, người đa dạng tính dục và đa dạng thần kinh đã trở thành nguồn cảm hứng sáng tác của anh. Cuốn tiểu thuyết giả tưởng Ngôi nhà bên bờ biển xanh thẳm (The House in the Cerulean Sea) là sách bán chạy nhất của Thời báo New York và đã chiến thắng Giải thưởng Alex và Mythopoeic năm 2021.</p>', 10, 1),
(78, 38, 4, 'Tiểu Thuyết Kinh Điển: QUO VADIS (BÌA CỨNG)', 168500, '1702450178_anh14.webp', '<p><strong>Tiểu Thuyết Kinh Điển: QUO VADIS (BÌA CỨNG) - Top Sách Văn Học Nước Ngoài Bán Chạy Nhất Mọi Thời Đại / Tặng Kèm Bookmark Green Life</strong></p><p>&nbsp;</p><p><strong>Quo Vadis</strong> - cuốn tiểu thuyết giúp văn hào Henryk Sienkiewicz ( người Ba Lan) đoạt giải Nobel văn học năm 1905, đã được dịch ra hơn 50 ngôn ngữ.<br><br>Quo vadis thuật lại chuyện tình&nbsp; giữa một thiếu nữ cơ Đốc tên Ligia (hoặc Lygia, và Marcus Vinicus, một quý tộc la mã. Chuyện xảy ra tại thành Roma dưới thời hoàng đế Nero.<br><br>Cuốn sách phản ánh cuộc sống dưới triều đại của hoàng đế Nero thời cổ la mã thông qua câu chuyện tình đầy éo le ngang trái của chàng quý tộc Vinxius với nàng Ligia theo cơ Đốc giáo, hai nhân vật đại diện cho hai phe đối lập.<br><br>Tác phẩm còn truyền tải một thông điệp mạnh mẽ ủng hộ cơ Đốc giáo. Ngoài ra, tác phẩm cũng gián tiếp giải thích về nguồn gốc sâu xa của cơ Đốc giáo tại Ba Lan. Ligia, nhân vật nữ trong câu chuyện là công chúa của bộ tộc Ligia, tiền thân của người Ba Lan hiện nay.<br><br>Tác phẩm cũng rất nhiều lần được đưa lên sân khấu và màn ảnh ngay từ những năm xa xưa nhất, đông thời nó cũng trở thành đề tài của không ít công trình khảo cứu, không những chỉ ở Ba Lan mà trên phạm vi thế giới.</p>', 10, 1),
(79, 39, 4, 'Hiệu Sách Nhỏ Ở Paris', 103000, '1702450322_anh15.webp', '<p>New York Times Bestseller<br>A Barnes and Noble Best of 2015 Selection<br>A LibraryReads Favorite of the Favorites Selection<br><br>Cuốn sách là câu chuyện về Monsieur Perdu, chủ tiệm sách bên bờ sông Seine, người tự gọi mình là dược sĩ văn chương. Nhờ giác quan đặc biệt của mình, ông có thể kê đơn cho độc giả chính xác những cuốn sách giúp họ vượt qua khó khăn trong cuộc sống. Chữa lành vết thương, hàn gắn trái tim người khác, song Monsieur Perdu lại không thể chữa cho chính mình, và trái tim ông vẫn luôn rỉ máu từ khi người yêu ông bỏ ra đi để lại một bức thư mà ông chưa từng mở ra. Rồi đến một ngày, ông đọc lá thư và quyết định khám phá kết cục của câu chuyện đời mình. Cùng với một tác giả sách bán chạy nhưng bị cấm xuất bản, và một đầu bếp người Ý thất tình, Perdu du hành dọc theo những dòng sông nước Pháp, cho chúng ta thấy rằng thế giới văn chương có thể đưa tâm hồn con người lên một cuộc du hành hàn gắn và chữa lành như thế nào.<br><br>Hiệu sách nhỏ ở Paris là một lá thư tình gửi đến sách, đến tất cả những người tin rằng sức mạnh của những câu chuyện có thể định hình cuộc sống của chúng ta.</p>', 10, 1),
(80, 40, 4, 'Mắt Nào Xanh Nhất', 148500, '1702450411_anh16.webp', '<p><i>Cả đời Pecola chỉ ao ước một đôi mắt xanh. Mắt xanh xinh đẹp, mắt màu thiên thanh, mắt xanh như mắt Shirley Temple tóc vàng da trắng. Đôi mắt xanh là hi vọng duy nhất để con bé da đen nhìn cuộc sống khác đi, để thấy mình không xấu xí, không bị chà đạp, được tự do và được yêu thương. Nhưng tiếc thay, phép lạ không có thật…</i></p><p><i><strong>Mắt nào xanh nhất</strong></i><strong>&nbsp;</strong>là cuốn tiểu thuyết đầu tay của tác giả&nbsp;<strong>Toni Morrison</strong>&nbsp;(tên gốc: The Bluest Eye – 1970), kể về Pecola – một bé gái da đen lớn lên ở Lorain, Ohio (quê hương của tác giả) trong những năm sau cuộc Đại khủng hoảng. Pecola cầu nguyện cho đôi mắt của mình chuyển sang màu xanh, để con bé được yêu quý như tất cả những đứa trẻ da trắng, tóc vàng, mắt xanh ở Mĩ. Vào mùa thu năm 1941, năm cúc vạn thọ trong vườn của Breedloves không nở hoa, cuộc sống của Pecola thay đổi theo những cách đau đớn và tàn khốc.</p><p>Cuốn sách, với ngôn từ phong phú và tầm nhìn táo bạo, tái hiện lại sống động nỗi sợ hãi, sự cô đơn và bi kịch của một bé gái da đen, phơi bày hiện thực trần trụi về sự khác màu da nhức nhối trong lòng nước Mỹ. Cho tới thời điểm hiện tại, <i><strong>Mắt nào xanh nhất</strong></i>&nbsp;vẫn là một trong những tiểu thuyết có sức ảnh hưởng mạnh mẽ và khó quên nhất của Toni Morrison.</p><p>Toni Morrison là giáo sư ngành Nhân văn tại Đại học Princeton, từng nhận giải National Book Critics Circle, và giải Pulitzer với tiểu thuyết \"Beloved\". Bà là người phụ nữ Mỹ gốc Phi đầu tiên giành <strong>̉ ̛̛̉ Văn chương</strong>&nbsp;(1993).</p><p>Nữ nhà văn đã dày công tìm hiểu bản sắc người gốc Phi trên đất Mĩ, và đặc biệt là trải nghiệm của những người phụ nữ da đen.</p><p>\"Bà không ngần ngại phơi bày ra ánh sáng những trang sử tối tăm của người da đen, bị đối xử tàn tệ và giáng cấp, một quá khứ đau thương đến không tưởng của một thời đại thiếu vắng tình yêu thương.\"<br>Cựu Tổng thống Barack Obama từng nói về bà: \"Tác phẩm của Toni Morrison mang đến cho chúng ta loại sức mạnh của luân lý và cảm xúc mà ít nhà văn nào làm được\".</p><p>Toni Morrison qua đời năm 2019, để lại những áng văn chương ám ảnh, một bài học về lịch sử, niềm tin và sức mạnh con người.</p>', 10, 1),
(81, 41, 4, 'Xa Ngoài Kia Nơi Loài Tôm Hát - Where The Crawdads Sing', 112201, '1702450510_anh17.webp', '<p>Xa Ngoài Kia Nơi Loài Tôm Hát</p><p>Sáu triệu bản bán ra trên toàn thế giới<br>58 tuần trong danh sách bán chạy của New York Times<br>Dẫn đầu mục tiểu thuyết bán chạy của Amazon trong năm 2019</p><p>Trong nhiều năm, những tin đồn về \"Cô gái đầm lầy\" đã ám ảnh Barkley Cove, một thị trấn yên tĩnh trên bờ biển Bắc Carolina. Vì vậy, khi nơi này rúng động với cái chết đầy bí ẩn của Chase Andrew, người dân địa phương ngay lập tức đổ dồn nghi ngờ vào cô.<br>Nhưng Kya Clark – cô gái hoang dã ấy có phải là thủ phạm?<br>Thông minh và nhạy cảm, cô đã sống sót sau nhiều năm cô đơn trong đầm lầy, trú ẩn trong lòng mẹ thiên nhiên, kết bạn với mòng biển và học những bài học đắt giá trên bờ cát. Khi trái tim tuổi mới lớn mở ra, cô cũng chạm vào yêu thương với hai chàng trai, bắt đầu một cuộc sống mới cho đến khi điều bất ngờ xảy đến…</p><p>“Một tiểu thuyết lãng mạn đầy ắp hơi thở thiên nhiên với một cú ngoặt chết người.” — REFINERY29</p><p>“Đầy chất thơ… Sức hấp dẫn của cuốn sách đến từ sự liên kết sâu sắc giữa Kya với vùng đất đã là nhà cô, và với mọi sinh vật của vùng đất đó.” — BOOKLIST</p>', 10, 1),
(82, 42, 4, 'Sách Văn Học Nước Ngoài- Hai Số Phận (Tái Bản 2023)', 175500, '1702450610_anh18.webp', '<p><strong>Hai Số Phận</strong></p><p>Hai số phận” không chỉ đơn thuần là một cuốn tiểu thuyết, đây có thể xem là \"thánh kinh\" cho những người đọc và suy ngẫm, những ai không dễ dãi, không chấp nhận lối mòn.<br>“Hai số phận” làm rung động mọi trái tim quả cảm, nó có thể làm thay đổi cả cuộc đời bạn. Đọc cuốn sách này, bạn sẽ bị chi phối bởi cá tính của hai nhân vật chính, hoặc bạn là Kane, hoặc sẽ là Abel, không thể nào nhầm lẫn. Và điều đó sẽ khiến bạn thấy được chính mình.<br>Khi bạn yêu thích tác phẩm này, người ta sẽ nhìn ra cá tính và tâm hồn thú vị của bạn!<br>“Nếu có giải thưởng Nobel về khả năng kể chuyện, giải thưởng đó chắc chắn sẽ thuộc về Archer.”</p>', 10, 1),
(83, 43, 4, 'Một Cuốn Sách Buồn… Cười - Vui Vẻ Không Quạu Nha 2', 53000, '1702450741_anh19.webp', '<p>“Tôi lúc 6 tuổi: Mẹ ơi, 25 tuổi con sẽ mua cho mẹ một căn nhà lớn và chiếc xe hơi!</p><p>Tôi lúc 25 tuổi: Mẹ yêu, shipper đến rồi con còn thiếu 20k để nhận hàng.”</p><p>Đúng là tuổi trẻ chưa trải sự đời, lớn rồi mới biết hóa ra cuộc đời không chỉ có màu hồng, không phải cái gì mình thích, mình muốn là a lê hấp bạn sẽ có được ngay, mà trái lại - bạn phải vật lộn với đủ thứ, dù chỉ đơn giản là để sống một đời bình thường thôi.</p><p>Nhưng mà hỏi thật lòng nhé, cuộc đời thực sự “khó ở” và “buồn” tới vậy à?</p><p>Nếu mà có, thì xin mời bạn mở ngay cuốn sách mới tinh này của Skybooks, “Một cuốn sách buồn… cười” để thấy hóa ra đời cũng khá là buồn… cười! Tinh túy và mang siêu năng lực “hút hồn” khiến bạn không thể rời mắt, “Một cuốn sách buồn… cười” - tác phẩm thứ hai nối tiếp thành công của cuốn sách Bestseller “Vui vẻ không quạu nha” từ tác giả Ở Đây Zui Nè sẽ khiến bạn cười như chưa bao giờ được cười sau những giờ chiến đấu với cuộc đời đầy căng thẳng!</p><p>Mang đậm tính hài hước, tếu táo và trẻ trung của Gen Z, đây sẽ là một cuốn sách dễ dàng khiến nhiều người thích thú bởi như nhìn thấy chính bản thân trong từng trang sách:</p><p>“Có thể bạn thấy tôi bình tĩnh với mọi thứ. Nhưng thực ra trong đầu tôi đã bỏ cuộc 7749 lần”.</p><p>“Vì đây là cuộc sống, nên ngày trước bạn có thể khóc vì người yêu cũ, và tiếp theo bạn thả thính đu dây một lúc với bảy người!”</p><p>“Bạn có biết là con gái luôn đọc tin nhắn trong bảng xem trước. Nhưng họ chỉ trả lời khi họ thật sự muốn trả lời.”</p><p>Nhỏ nhắn, nhưng dí dỏm một cách đầy thông minh, tác giả Ở Đây Zui Nè sẽ biến đủ thứ rắc rối thường ngày vẫn làm bạn đau đầu như chuyện “sừng”, chuyện sắm đồ online, chuyện bạn bè, chuyện lương lậu, gia đì thành những chuyện dễ thở và bớt bực bội hơn rất nhiều.</p><p>“Một cuốn sách buồn… cười” hi vọng siêu phẩm độc đáo này sẽ giúp bạn “đắm mình” trong bể muối để mặn mòi từ da dẻ, thư giãn và điều chỉnh tâm trạng theo cách nghịch ngợm mà đơn giản nhưng hiệu nghiệm nhất!</p><p>Vì cuộc đời vốn không dễ dàng, sao chúng mình không sống nó theo một cách khác? Hạnh phúc hơn, theo một cách buồ cười nhỉ?</p>', 10, 1),
(84, 44, 4, 'Don Quixote Nhà quý tộc tài ba xứ Mancha - Tập 1', 121000, '1702450844_anh20.webp', '<p>“Don Quixote khởi đầu như một tỉnh lẻ, trở thành Tây Ban Nha, và cuối cùng như một vũ trụ.”<br>- V. S. Pritchell<br><br>“Có thể nói mọi tiểu thuyết văn xuôi đều là biến tấu trên chủ đề Don Quixote.”<br>- Lionell Trilling<br><br>“Cervantes là người sáng lập Thời Hiện đạ Tiểu thuyết gia không cần trả lời ai ngoài Cervantes. Thực sự không thể hình dung nổi Don Quixote như một con người bằng xương bằng thịt, nhưng trong tâm trí của chúng ta, còn có nhân vật nào sống động hơn?”<br>- Milan Kundera<br><br>Don Quixote, tiểu thuyết hay nhất mọi thời đại, được dịch ra nhiều thứ tiếng nhất và được tái bản nhiều nhất trong lịch sử nhân loại, chỉ sau Kinh Thánh.</p>', 10, 1),
(85, 45, 4, 'Một', 50000, '1702450992_anh21.webp', '<p>Một người cha không bao giờ bước chân vào viện bảo tàng, chỉ đọc báo địa phương, không dùng gì khác ngoài con dao Opinel của riêng mình để ăn. Một người cha xuất thân nông dân rồi trở thành công nhân và cuối cùng là chủ một tiệm cà phê kiêm cửa hàng tạp phẩm. Một người cha luôn lo lắng bị nhầm “vị trí”. Cũng người cha ấy lấy làm tự hào về cô con gái nhờ được học hành tử tế mà đã đặt chân được vào giới tiểu tư sản. Nhưng đằng sau đó là khoảng cách, là những đớn đau, giằn vặt giữa cha và con.</p><p>Một chỗ trong đời là câu chuyện về cuộc đời người cha ấy, được kể lại dưới ngòi bút của cô con gái, một cách lạnh lùng nhất có thể, với lối viết hờ hững, không cảm xúc, như những gì xảy đến tự nhiên. Chính lối viết tưởng như giản dị ấy đã mang lại cho Annie Ernaux giải Renaudot năm 1984.</p>', 10, 1),
(86, 46, 4, 'Những vị thần nước Mỹ (American Gods - Neil Gaiman)', 213500, '1702451260_anh22.webp', '<p>Tác giả: Neil Gaiman&nbsp;</p><p>Dịch giả: Lê Minh Đức&nbsp;</p><p>Nhà xuất bản: Phụ nữ&nbsp;</p><p>Số trang: 648&nbsp;</p><p>Kích thước: 15.524 cm&nbsp;</p><p>Ngày phát hành: 12-2021&nbsp;</p><p>“Độc đáo, cuốn hút, và sáng tạo bất tận.”&nbsp;</p><p>- George R. R. Martin, tác giả của Trò chơi vương quyền -&nbsp;</p><p>- Michael Chabon -&nbsp;</p><p>Shadow sắp sửa mãn hạn tù. Anh khấp khởi nghĩ về thời khắc phóng thích sắp đến, về một cuộc sống giản dị êm đềm bên cạnh người vợ mà anh yêu tha thiết. Nhưng ngày ra tù, anh biết tin vợ mình vừa qua đời trong một tai nạn giao thông, và trên máy bay anh gặp một ông già tự xưng là Wednesday đòi thuê anh làm vệ sĩ. Theo một lối dần dà nhưng chắc chắn, mềm mại nhưng khôn cưỡng, Shadow bị cuốn vào một trận chiến kinh thiên động địa của các vị thần giữa lòng nước Mỹ hiện đại.&nbsp;</p><p>Hiếm nhà văn nào có thể tạo ra được một thế giới hư cấu vừa chân thực lại vừa kỳ ảo, vừa phức tạp lại vừa cuốn hút được như Neil Gaiman. Một cách khéo léo và tinh vi, Neil Gaiman lồng vào bên dưới bề mặt thực tại vô cùng gần gụi và bình thường với chúng ta, một thế giới thăm thẳm và biến ảo khôn lường của các thánh thần.&nbsp;</p><p>TÁC GIẢ:&nbsp;</p><p>Neil Gaiman 10/11/1960 là nhà văn Anh gốc Do Thái, tác giả của nhiều tiểu thuyết, truyện ngắn, truyện tranh nổi tiếng. Ông là chủ nhân của nhiều giải thưởng danh giá, bao gồm giải thưởng Hugo, Nebula, và giải Bram Stoker, cùng với huân chương Newbery và Carnegie. Chịu ảnh hưởng sâu sắc từ các thần thoại cổ xưa, Neil Gaiman được coi là một cây bút có biệt tài sáng tạo ra những thế giới hư cấu huyền hoặc mà người đọc một khi đặt chân vào thì không thể nào dứt khỏi.&nbsp;</p><p>Những tác phẩm của Neil Gaiman đã được Nhã Nam xuất bản:&nbsp;</p><p>- Coraline&nbsp;</p><p>- Bụi sao&nbsp;</p><p>- Đại dương cuối đường làng&nbsp;</p><p>- Còn sữa là còn hy vọng&nbsp;</p><p>- Thần thoại Bắc Âu&nbsp;</p><p>- Câu chuyện nghĩa địa</p>', 10, 1),
(87, 48, 4, 'Đồi Gió Hú (Tái Bản)', 77300, '1702451463_anh24.webp', '<p><strong>Đồi Gió Hú (Tái Bản)</strong></p><p>Đồi gió hú, câu chuyện cổ điển về tình yêu ngang trái và tham vọng chiếm hữu, cuốn tiểu thuyết dữ dội và bí ẩn về Catherine Earnshaw, cô con gái nổi loạn của gia đình Earnshaw, với gã đàn ông thô ráp và điên rồ mà cha cô mang về nhà rồi đặt tên là Heathcliff, được trình diễn trên cái nền những đồng truông, quả đồi nước Anh cô quạnh và ban sơ không kém gì chính tình yêu của họ. Từ nhỏ đến lớn, sự gắn bó của họ ngày càng trở nên ám ảnh. Gia đình, địa vị xã hội, và cả số phận rắp tâm chống lại họ, bản tính dữ dội và ghen tuông tột độ cũng hủy diệt họ, vậy nên toàn bộ thời gian hai con người yêu nhau đó đã sống trong thù hận và tuyệt vọng, mà cái chết chỉ có ý nghĩa khởi đầu. Một khởi đầu mới để hai linh hồn mãnh liệt đó được tự do tái ngộ, khi những cơn gió hoang vắng và điên cuồng tràn về quanh các lâu đài trong Đồi gió hú</p><p>Cuốn tiểu thuyết duy nhất của Emily Brontë, là cuốn sách đã tới tay công chúng với nhiều lời bình trái ngược vào năm 1847, một năm trước khi nữ tác giả qua đời ở tuổi ba mươi. Thông qua mối tình giũa Cathy và Heathcliff, với bối cảnh là đồng quê Yorkshire hoang vu trống trải, Đồi gió hú đã tạo nên cả một thế giới riêng với xu hướng bỏ qua lề thói, vươn tới thi ca cũng như tới những chiều sâu tăm tối của lòng người, giúp tác phẩm trở thành một trong những tiểu thuyết vĩ đại nhất, bi thương nhất mà con người từng viết ra về nỗi đam mê cháy bỏng.</p><p>Nhận định</p><p>\"Tựa như Emily Brontë có thể mở toang những gì thuộc về con người, và lấp đầy những khoảng trống không thể nhìn ra được bằng một luồng gió mạnh của cuộc đời.”</p><p>- Virginia Woolt -</p><p>\"Đồi gió hú là tiểu thuyết duy nhất của Emily Brontë, người đã chết ngay sau khi tác phẩm được xuất bản, ở tuổi ba mươi. Một câu chuyện u sầu vùng Yorrkshire về một mối tình mạnh hơn cả cái chết, cũng là một cái nhìn dữ dội về dục vọng siêu hình mà theo đó, cả thiên đường, địa ngục, thiên nhiên và xã hội cùng gắn bó mãnh liệt. Độc nhất, huyền bí, với một văn phong phi thời, tiểu thuyết đã trở thành tác phẩm kinh điển của văn học Anh.”</p><p>- The Oxford University Press -</p>', 10, 1),
(88, 49, 4, 'Cuốn Tiểu Thuyết Lãng Mạn : Những Thuyền Trưởng Can Đảm ( Tác Phẩm Văn Học Nước Ngoài Hay)', 71500, '1702451551_anh25.webp', '<p><i><strong>Cuốn Tiểu Thuyết Lãng Mạn : Những Thuyền Trưởng Can Đảm ( Tác Phẩm Văn Học Nước Ngoài Hay)</strong></i></p><p>&nbsp;</p><p>Mặt biển không ngừng cuộn sóng, những con sóng dữ tợn nối tiếp nhau, xô quật vào mạn thuyền, con thuyền Có chúng tôi đây! chao đảo như thể có một bàn tay khổng lồ vô hình nào đó trồi lên giữa biển khơi, đang hào hứng rung lắc thật mạnh cột buồm chính. Nếu giờ này Harvey vẫn còn đang ở trên chiếc du thuyền sang trọng kia, hẳn cậu sẽ không bao giờ được trực tiếp cảm nhận sự hùng vĩ của đại dương cũng như sự can trường của những người đánh cá vẫn ngày ngày đối mặt với những hiểm nguy nơi biển cả, thậm chí không quản cái chết cận kề.</p><p>Sau khi ngã xuống biển vì say sóng rồi được thuyền đánh cá Có chúng tôi đây! cứu sống và cưu mang, nhận được bài học nhớ đời từ thuyền trưởng Troop, từ một cậu ấm đích thực, Harvey phút chốc trở thành một thiếu niên trưởng thành và gan dạ. Chỉ sau vài tuần, cậu thành thạo như thể từ lâu cậu đã là một phần của con thuyền này vậy. Harvey rất lấy làm tự hào về điều này và nhận định con thuyền Có chúng tôi đây! không chỉ cứu sống một mạng người, mà còn cứu rỗi cả một tâm hồn đang trực chờ đứng trước bờ vực thẳm!</p><p>Rudyard Kipling (1865 – 1936) là nhà văn và nhà thơ nổi tiếng người Anh, sinh ra ở Ấn Độ. Ông được xem là “Nhà cách tân lớn cho nghệ thuật truyện ngắn” và là tác giả của những tác phẩm văn học kinh điển dành cho thiếu nhi. Vào năm 1907, ông nhận giải Nobel Văn học, cho đến nay ông vẫn là người trẻ tuổi nhất đạt được giải thưởng này.</p><p>Tác phẩm chính:</p><p>- The Jungle Book (Câu chuyện rừng xanh, 1894)</p><p>- The Second Jungle Book (Câu chuyện rừng xanh 2, 1895)</p><p>- Captains Courageous (Những thuyền trưởng can đảm, 1897)</p><p>- Just So Srories (Tạm dịch: Chuyện là như thế, 1902)</p><p>- Puck of Pook’s Hill (Tạm dịch: Quả bóng từ đồi Pook, 1906)</p>', 10, 1),
(89, 50, 4, 'Đại Gia Gatsby', 60300, '1702451999_anh26.webp', '<p>Phất lên nhanh chóng từ chỗ \"hàn vi\", Gastby, nhân vật chính của câu chuyện, những tưởng sẽ có được tất cả - tiền bạc, quyền lực, và sau rốt là tình yêu -, nhưng rồi cái ảo tưởng tình yêu đó tan vỡ thật đau đớn, theo sau là một kết cục kinh hoàng của Gastby.<br>Là bức chân dung của \"Thời đại Jazz\" (Jazz Age, cái tên do chính Fitzgerald đặt cho thời kỳ 1918-1929), Đại gia Gatsby nắm bắt vô cùng sâu sắc tinh thần của thế hệ cùng thời ông: những nỗi ám ảnh thường trực về sự thành đạt, tiền bạc, sang trọng, dư dật, hào nhoáng; song đồng thời là nỗi lo âu trước thói sùng bái vật chất vô hạn độ và sự thiếu vắng đạo đức đang ngày một lên ngôi ở thời kỳ này.</p><p>Đại gia Gatsby đã được đưa vào giảng dạy ở trường phổ thông và đại học tại Mỹ cũng như nhiều nước trên thế giới. Cuốn tiểu thuyết \"khác thường, tuyệt đẹp, cấu trúc phức tạp song trên hết là giản dị\" (như lời chính nhà văn) từng được xếp thứ hai trong danh sách 100 Tiểu thuyết Hay nhất Thế kỷ 20 của Modern Library. Tạp chí Time thì đưa cuốn sách này vào danh sách 100 tiểu thuyết hay nhất bằng tiếng Anh từ 1923 đến 2005 do Timebình chọn.</p>', 10, 1),
(90, 51, 4, 'Ông Già Và Biển Cả & Hạnh Phúc Ngắn Ngủi Của Francis Macomber', 28000, '1702452127_anh27.webp', '<p>Thiên tiểu thuyết tuyệt vời này kể về cuộc vật lộn đầy kịch tính của lão ngư Santiago với con cá kiếm khổng lồ ngoài biển khơi. Những trang sách đầy cảm động, ngợi ca vẻ đẹp sức mạnh, trí tuệ và lòng khao khát chinh phục của con người trước thiên nhiên.</p>', 10, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vnpay`
--

CREATE TABLE `vnpay` (
  `id` int(11) NOT NULL,
  `vnp_Amount` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_BankCode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_BankTranNo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_CardType` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_OrderInfo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_PayDate` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_TmnCode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_TransactionNo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vnpay`
--

INSERT INTO `vnpay` (`id`, `vnp_Amount`, `vnp_BankCode`, `vnp_BankTranNo`, `vnp_CardType`, `vnp_OrderInfo`, `vnp_PayDate`, `vnp_TmnCode`, `vnp_TransactionNo`, `order_id`) VALUES
(2, '1000000', 'NCB', 'VNP14162865', '', 'Thanh toán đơn hàng tại web', '20231101155405', '9P7F376T', '14162865', 42),
(3, '14350000', 'NCB', 'VNP14162888', '', 'Thanh toán đơn hàng tại web', '20231101160522', '9P7F376T', '14162888', 48),
(4, '3000000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231118202307', '9P7F376T', '0', 68),
(6, '6500000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120101021', '9P7F376T', '0', 76),
(7, '30300000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120101107', '9P7F376T', '0', 77),
(8, '3000000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120101710', '9P7F376T', '0', 77),
(9, '9300000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120101731', '9P7F376T', '0', 77),
(10, '9300000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120102332', '9P7F376T', '0', 77),
(11, '9300000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120102332', '9P7F376T', '0', 77),
(12, '9300000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120102332', '9P7F376T', '0', 77),
(13, '9300000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120102332', '9P7F376T', '0', 77),
(14, '9300000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120102332', '9P7F376T', '0', 77),
(15, '9300000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120102332', '9P7F376T', '0', 77),
(16, '9300000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120102332', '9P7F376T', '0', 77),
(17, '30300000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120101107', '9P7F376T', '0', 77),
(18, '30300000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120101107', '9P7F376T', '0', 77),
(19, '30300000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120101107', '9P7F376T', '0', 77),
(20, '30300000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120101107', '9P7F376T', '0', 77),
(21, '9300000', 'VNPAY', '', '', 'Thanh toán đơn hàng tại web', '20231120115441', '9P7F376T', '0', 77),
(22, '9300000', 'NCB', 'VNP14188696', '', 'Thanh toán đơn hàng tại web', '20231120120318', '9P7F376T', '14188696', 77),
(23, '6500000', 'NCB', 'VNP14189059', '', 'Thanh toán đơn hàng tại web', '20231120154855', '9P7F376T', '14189059', 79),
(24, '6500000', 'NCB', 'VNP14189072', '', 'Thanh toán đơn hàng tại web', '20231120155304', '9P7F376T', '14189072', 80);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `wishlist`
--

INSERT INTO `wishlist` (`id`, `member_id`, `product_id`, `product_name`, `product_image`, `product_price`) VALUES
(4, 1, 26, 'Dạy Con Thói Quen Tốt', 'dctqt.webp', 25000),
(6, 8, 20, 'Một Nghệ Thuật Sống', 'nts.webp', 64000),
(7, 8, 22, 'Gieo Trồng Hạnh Phúc', 'gthp.webp', 54000),
(10, 10, 33, 'Phía Sau Nghi Can X', 'psncx.webp', 75000),
(11, 10, 42, 'Bảy Bước Tới Mùa Hè', 'bbtmh.webp', 103500),
(16, 1, 5, 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh', 'tthvtcx.webp', 103000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `article_comments`
--
ALTER TABLE `article_comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`productId`,`orderId`);

--
-- Chỉ mục cho bảng `order_methods`
--
ALTER TABLE `order_methods`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `article_comments`
--
ALTER TABLE `article_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `order_methods`
--
ALTER TABLE `order_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
