<?php
  session_start();
  header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Khám phá du lịch Quy Nhơn: địa điểm nổi bật, khách sạn, phương tiện di chuyển, thời điểm lý tưởng để ghé thăm.">
  <title>Khám Phá Du Lịch Quy Nhơn</title>
  <link rel="stylesheet" href="CTT_CNTT46A/TrangChu/css/thietketrangchu.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
  <header>  
    <div class="logo"><strong>CTT-CNTT46A</strong></div>
    <nav>
      <a href="CTT_CNTT46A/KhachSan/public/KhachSan_Form.php">Khách sạn</a>
      <a href="CTT_CNTT46A/VeMayBay/main page/timvemaybay-form1.php">Vé máy bay</a>
      <a href="CTT_CNTT46A/trangwebduadonsanbaycuanhat/trangchuduadonsanbay.php">Đưa đón sân bay</a>
      <a href="CTT_CNTT46A/thue_xe/thuexe.php">Cho thuê xe</a>
      <a href="#lienhe">Liên hệ hỗ trợ</a>
    </nav>
    <div class="auth-buttons">
      <?php if (isset($_SESSION['fullname']) && !empty($_SESSION['fullname'])): ?> 
        <span style="font-weight: bold; color:#e6b478; padding: 8px; background-color:white; border: 2px solid transparent; border-radius: 8px;">
          <a href="CTT_CNTT46A/TrangChu/main page/profile_edit.php" style="color: #e6b478; text-decoration: none;">
          <i class="fa-solid fa-user" style="color: #55abf7;"></i>
          <?= htmlspecialchars($_SESSION['fullname']) ?></span> 
       <a href="CTT_CNTT46A/TrangChu/main page/logout.php" class="dangxuat">Đăng xuất</a>
      <?php else: ?>
        <a href="CTT_CNTT46A/TrangChu/main page/formDangKy.php" class="dangky"> <i class="fa-solid fa-user" style="color: white;"></i> Đăng ký</a>
        <a href="CTT_CNTT46A/TrangChu/main page/formDangNhap.php" class="dangnhap"><i class="fa-solid fa-user" style="color: black;"></i>Đăng nhập</a>
      <?php endif; ?>
    </div>
  </header>

  <div class="container">
    <div class="content">
      <h1>Chào mừng đến với trang hỗ trợ khách du lịch tại Quy Nhơn năm 2025-2026</h1>
        <div style="text-align: center;">
          <img class="anhdautien" src="https://cdn.xanhsm.com/2024/12/fc11ee11-quy-nhon-ve-dem-thumbnail.jpg" alt="Quy Nhơn biển đẹp">
        </div>

      <section class="section-gioithieu" id="gioithieu">
        <h2>✨ Giới thiệu về thành phố quy nhơn</h2>
        <h3>🌆 Khám Phá Thành Phố Biển Quy Nhơn:</h3>
        <p><strong>Quy Nhơn</strong> – viên ngọc xanh của miền Trung, là thành phố biển tuyệt đẹp thuộc tỉnh Bình Định. Với vẻ đẹp hoang sơ, nước biển xanh biếc, bãi cát trắng mịn và nhịp sống thanh bình, nơi đây đang dần trở thành điểm đến yêu thích của du khách trong và ngoài nước.</p>
        <p>Tọa lạc tại vị trí lý tưởng giữa miền Trung, Quy Nhơn cách Hà Nội khoảng 1.065 km, cách TP. Hồ Chí Minh 650 km, Đà Nẵng 323 km và chỉ 165 km từ thành phố Pleiku. Dù bạn đến từ đâu, hành trình khám phá Quy Nhơn luôn đáng giá từng khoảnh khắc.</p>
        <p>Với bề dày lịch sử, Quy Nhơn từng là vùng đất của vương quốc Champa cổ đại. Ngày nay, dấu ấn văn hóa Chăm vẫn hiện diện qua những đền tháp, di tích cổ kính. Sau năm 1975, Quy Nhơn được nâng cấp thành thành phố vào năm 1986, và đến năm 2010 chính thức trở thành đô thị loại I. Năm 2015, tạp chí Rough Guides (Anh) bình chọn Quy Nhơn là điểm đến hàng đầu Đông Nam Á, và năm 2020 tiếp tục góp mặt trong top 20 điểm đến hấp dẫn nhất thế giới do Hostelworld bình chọn.</p>
        <div style="text-align: center;">
          <img class="anhthuhai" src="https://www.chudu24.com/wp-content/uploads/2019/10/70639846_1371816146316322_4117002564426268672_n.jpg" alt="Quy Nhơn biển đẹp">
        </div>
        <h3>🌤️ Địa Hình & Khí Hậu – Món Quà Từ Thiên Nhiên:</h3>
        <p>Quy Nhơn sở hữu địa hình đa dạng với sự kết hợp hài hòa giữa núi, đồi, đồng bằng, biển cả và các đảo nhỏ. Bạn có thể khám phá <strong>núi Đen</strong> hùng vĩ, <strong>rừng nguyên sinh đèo Cù Mông</strong>, <strong>Đầm Thị Nại</strong> thơ mộng, <strong>Hồ Sinh Thái</strong> hay <strong>bán đảo Phương Mai</strong> nổi bật bên biển xanh. Đặc biệt, <strong>đảo Nhơn Châu (Cù lao Xanh)</strong> như một bức tranh thiên nhiên kỳ vĩ, là điểm đến không thể bỏ lỡ.</p>
        <p>Với đường bờ biển dài hơn 70km và hệ sinh thái biển phong phú, Quy Nhơn không chỉ nổi tiếng về cảnh quan mà còn là nơi phát triển mạnh về nuôi trồng, đánh bắt thủy sản và du lịch sinh thái biển.</p>
        <p>Khí hậu nơi đây chia làm hai mùa rõ rệt: <strong>mùa khô</strong> từ tháng 3 đến tháng 9, lý tưởng cho các hoạt động du lịch, và <strong>mùa mưa</strong> từ tháng 10 đến tháng 2 năm sau. Nhiệt độ trung bình quanh năm khoảng 28°C, thời tiết dễ chịu, nắng vàng rực rỡ – lý tưởng cho chuyến đi nghỉ dưỡng hoặc khám phá.</p>  
       </section>

       <section class="section-thoidiem" id="thoidiem">
        <h2>🕒Thời điểm lý tưởng để bạn đi du lịch tại Quy Nhơn</h2>
        <p>Khí hậu Quy Nhơn được phân hoá thành 2 mùa rõ rệt và mùa mưa và mùa nắng. Trong đó, mùa nắng kéo dài từ tháng 3 – tháng 9 hàng năm, tiết trời khô ráo và không quá oi bức. Mùa mưa rơi vào 2 – 3 tháng cuối năm, nhiệt độ giảm, trời âm u và kèm theo các đợt sóng lớn. Đặc biệt, thành phố biển xinh đẹp này lại rất ít bị ảnh hưởng trực tiếp bởi mưa bão.</p>
        <div style="text-align: center;">
          <img class="anhthuhai" src="https://sacotravel.com/wp-content/uploads/2022/06/flc-quy-nhon.jpg" alt="Quy Nhơn biển đẹp">
        </div>
        <p>Theo kinh nghiệm du lịch Quy Nhơn thì thời điểm lý tưởng nhất để ghé thăm nơi này là vào mùa nắng, từ tháng 3 đến tháng 9. Lúc này, trời trong xanh, nhiều nắng và gần như không có mưa, du khách có thể thỏa sức tắm biển hoặc tham gia các hoạt động vui chơi, giải trí ngoài trời.</p>
       </section>

       <section class="section-phuongtienvacachdi" id="phuongtienvacachdi">
         <h2>Phương tiện và cách đi đến Quy Nhơn</h2>
         <p>Là một trong những điểm đến du lịch nổi tiếng của nước ta, bạn có thể đến thành phố biển Quy Nhơn bằng các loại phương tiện dưới đây:</p>
         <i style="font-weight :bold">✈️ Máy bay</i>
         <p>Máy bay là phương tiện nhanh nhất đưa bạn đến Quy Nhơn xinh đẹp. Chuyến bay đến Quy Nhơn hiện đang được khai thác bởi các hãng hàng không nổi tiếng như Vietnam Airlines, Vietjet Air, Bamboo Airways… Điểm xuất là các thành phố lớn của Việt Nam như Sài Gòn, Hà Nội và điểm hạ cánh là Sân bay Phù Cát.</p>
         <div style="text-align: center;">
          <img class="anhthuba" src="https://anhdephd.vn/wp-content/uploads/2022/05/hinh-anh-may-bay-1.jpg" alt="Quy Nhơn biển đẹp">
        </div>
         <i style="font-weight :bold">🚆Tàu lửa</i>
         <p>Tàu hoả cũng là phương tiện được nhiều người lựa chọn để đi du lịch Quy Nhơn. Vé tàu từ Hà Nội đến Quy Nhơn có giá từ 480.000 – 730.000 VND/ người, tuỳ theo loại ghế. Ngược lại, vì khoảng cách gần nên giá vé tàu từ Sài Gòn đến Quy Nhơn sẽ có mức giá thấp hơn, chỉ từ 280.000 – 440.000 VND/ người.</p>
         <i style="font-weight :bold">🚐 Xe Khách</i>
         <p>Xe khách cũng là phương tiện giá rẻ và tiện lợi đưa bạn đến Quy Nhơn. Thời gian di chuyển từ Hà Nội đến Quy Nhơn khoảng 1 ngày 1 đêm, giá vé từ 560.000 VND/ người. Các nhà xe Hà Nội – Quy Nhơn cho bạn tham khảo là Phượng Hoàng, Hiền Phương, Hoàng Long…</p>
         <div style="text-align: center;">
          <img class="anhthutu" src="https://assets2.htv.com.vn/Images/1/News/117127/pt11210.jpg" alt="Quy Nhơn biển đẹp">
        </div>
         <p>Xe khách Sài Gòn – Quy Nhơn hiện đang được vận hành bởi các nhà xe uy tín như Phương Trang, Cẩm Vân và Hoàng Dũng, giá vé dao động từ 250.000 VND/ người.</p>
       </section>

       <section class="section-phuongtiendichuyenquynhon" id="phuongtiendichuyenquynhon">
          <h2>🚌 Phương tiện di chuyển tại Quy Nhơn</h2>
          <p><strong>Ở Quy Nhơn du khách có thể lựa chọn cho mình 2 loại phương tiện bao gồm: </strong> xe máy thuê tại khách sạn, taxi.</p>
          <p><i style="font-weight :bold">Xe máy: </i>Bạn có thể thuê xe máy để tự do di chuyển theo lịch trình cá nhân với mức giá từ 100.000 – 150.000 VND/ ngày. Hầu hết các nhà nghỉ, khách sạn ở Quy Nhơn đều có dịch vụ này, bạn chỉ cần có chứng minh thư và tiền đặt cọc là thuê được xe.</p>
          <div style="text-align: center;">
              <img style="max-width: 100%; border-radius: 12px; margin-bottom: 20px;" src="https://quynhontourist.vn/wp-content/uploads/2018/05/cho-thue-xe-may-uy-tin-tai-quy-nhon-quynhontourist.jpg" alt="thuexemay">
          </div>
          <p><i style="font-weight :bold">Taxi: </i>đối với taxi là sự lựa chọn phù hợp với mọi khách tham quan khi đến Quy Nhơn với các mức giá phù hợp không lo sợ bị chặt chém</p>
          <div style="text-align: center;">
              <img style="max-width: 100%; border-radius: 12px; margin-bottom: 20px;" src="https://ik.imagekit.io/tvlk/blog/2024/07/taxi-quy-nhon-11.jpg?tr=q-70,c-at_max,w-500,h-300,dpr-2" alt="taxi">
          </div>
        </section>

       <section class="section-diadiemluutru" id="diadiemluutru">
            <h2>🏨 Địa điểm lưu trú nổi bật ở Quy Nhơn</h2>
            <h3>1. FLC Luxury Hotel & Resort Quy Nhơn</h3>
            <div style="text-align: center;">
              <img style="max-width: 70%; border-radius: 12px; margin-bottom: 20px;" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/fa/78/a8/flc-luxury-hotel-quy.jpg?w=900&h=-1&s=1" alt="khachsanflc">
            </div>
            <p>Nằm bên bờ biển Nhơn Lý, khu nghỉ dưỡng 5 sao này nổi tiếng với kiến trúc hiện đại, sân golf 36 lỗ và bãi biển riêng. FLC Quy Nhơn là lựa chọn lý tưởng cho những ai mong muốn kỳ nghỉ sang trọng, tiện nghi và gần gũi thiên nhiên.</p>
            <h3>2. Anya Premier Hotel Quy Nhơn</h3>
            <div style="text-align: center;">
              <img style="max-width: 70%; border-radius: 12px; margin-bottom: 20px;" src="https://hotlinedatphong.com/wp-content/uploads/2021/05/Anya-hotel-quy-nhon.jpg" alt="khachsanap">
            </div>
            <p>Toạ lạc ngay trên đường biển trung tâm, khách sạn Anya Premier nổi bật với thiết kế tinh tế, phòng nghỉ hiện đại và nhà hàng view biển tuyệt đẹp. Phù hợp với cả khách công tác và khách du lịch.</p>
            <h3>3. Mira Bãi Xép Homestay</h3>
            <div style="text-align: center;">
              <img style="max-width: 70%; border-radius: 12px; margin-bottom: 20px;" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/229830104.jpg?k=ae226414d1e14ecc95c9a02df2d72d4fc4956c32d601dee3acdb65575d8b0cf3&o=&hp=1" alt="khachsanmr">
            </div>
            <p>Ẩn mình giữa làng chài Bãi Xép, Mira mang phong cách homestay mộc mạc, gần gũi và thân thiện. Du khách có thể trải nghiệm cuộc sống địa phương, ngắm hoàng hôn trên biển và tận hưởng không gian yên bình.</p>
            <h3>4. Khách sạn Hương Việt</h3>
            <div style="text-align: center;">
              <img style="max-width: 120%; border-radius: 12px; margin-bottom: 20px;" src="https://q-xx.bstatic.com/xdata/images/hotel/max500/399766357.jpg?k=88a4dd016b3a40c58bcca31dab4ca366859e02794ff8596038d358f56c1220d8&o=" alt="khachsanhv">
            </div>
            <p>Khách sạn 4 sao nằm ngay mặt biển đường Xuân Diệu, có vị trí thuận tiện để khám phá thành phố. Với thiết kế hiện đại và đội ngũ nhân viên chuyên nghiệp, Hương Việt là lựa chọn quen thuộc của nhiều du khách trong và ngoài nước.</p>
            <h3>5. Casa Marina Resort</h3>
            <div style="text-align: center;">
              <img style="max-width: 60%; border-radius: 12px; margin-bottom: 20px;" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/219494123.jpg?k=8221aed5c060c10b688e26af721eecd5398a1689db8a1a3bfa0feb9778023e78&o=&hp=1" alt="khachsancm">
            </div>
            <p>Nằm trên bãi biển hoang sơ thuộc Ghềnh Ráng, Casa Marina Resort mang đến trải nghiệm nghỉ dưỡng yên tĩnh và đẳng cấp. Các bungalow hướng biển, hồ bơi vô cực và khu spa thư giãn là điểm cộng nổi bật tại đây.</p>
            <h3>6. LaRose Homestay</h3>
            <div style="text-align: center;">
              <img style="max-width: 120%; border-radius: 12px; margin-bottom: 20px;" src="https://quynhontourist.vn/wp-content/uploads/2017/05/5-homestay-quy-nhon-tourist.jpg" alt="khachsanlr">
            </div>
            <p>LaRose thu hút du khách trẻ bởi thiết kế mang hơi hướng Đông Dương kết hợp hiện đại, không gian sạch sẽ và các góc check-in cực đẹp. Đây là nơi lý tưởng cho những ai tìm kiếm homestay đẹp, giá hợp lý ngay trung tâm.</p>
        </section>


        <section class="section-diadiemnoibat" id="diadiemnoibat">
        <h2>🗺️Những điểm đến nổi bật ở Quy Nhơn</h2>
            <h3>🏝️1. Kỳ Co – Thiên đường biển đảo</h3>
            <div style="text-align: center;">
              <img class="anhthunam" src="https://vietnamgo.vn/wp-content/uploads/2020/08/tour-ky-co-eo-gio-trong-ngay-tron-goi-viet-nam-go.jpg" alt="Quy Nhơn biển đẹp">
            </div>
            <p><strong>&bull;</strong> Được mệnh danh là “Maldives của Việt Nam”, bãi Kỳ Co với làn nước xanh ngọc, bãi cát trắng mịn và những rạn san hô rực rỡ là điểm check-in hàng đầu khi đến Quy Nhơn.</p>
            <p><strong>&bull;</strong> Kỳ Co nằm cách trung tâm thành phố Quy Nhơn khoảng 25km, thuộc xã Nhơn Lý, là một trong những bãi biển đẹp nhất miền Trung. Với nước biển trong xanh hai màu rõ rệt, cát trắng mịn và những ghềnh đá kỳ vĩ, Kỳ Co được ví như “Maldives của Việt Nam”.</p>
            <h4><strong>🌊 Điều gì khiến Kỳ Co trở thành điểm đến không thể bỏ lỡ?</strong></h4>
            <p><strong>&bull; Bãi biển hoang sơ tuyệt đẹp </strong>với màu nước chuyển từ xanh ngọc đến xanh đậm.</p>
            <p><strong>&bull; Những hồ nước tự nhiên</strong> giữa các ghềnh đá độc đáo.</p>
            <p><strong>&bull; Thích hợp cho các hoạt động như:</strong> tắm biển, lặn ngắm san hô, chèo kayak, flycam, check-in sống ảo.</p>
            <p><strong>&bull; Nhiều tour kết hợp Eo Gió – Kỳ Co</strong> trong ngày, có cả đi ca nô hoặc đường bộ</p>
            <h4><strong>🚤 Cách đi Kỳ Co:</strong></h4>
            <p><strong>&bull; Từ TP. Quy Nhơn → đến bến Nhơn Lý → đi ca nô ra đảo (15 phút)</strong> hoặc đi đường bộ bằng xe trung chuyển qua đèo Eo Gió (đường mới, đẹp)</p>
            <p><strong>&bull;</strong> Nên đi từ sáng sớm để tận hưởng trọn vẹn vẻ đẹp trong lành của biển.</p>

            <h3>🌅 2. Eo Gió – Nơi ngắm hoàng hôn đẹp nhất</h3>
            <div style="text-align: center;">
              <img class="anhthusau" src="https://media-cdn.tripadvisor.com/media/photo-m/1280/13/91/22/64/eo-gio-noi-ng-m-hoang.jpg" alt="Quy Nhơn biển đẹp">
            </div>
            <p><strong>&bull;</strong> Cách trung tâm khoảng 20 km, Eo Gió nổi bật với vách đá uốn lượn ven biển, sóng vỗ quanh năm. Đây là nơi lý tưởng để ngắm bình minh và hoàng hôn lãng mạn.</p>
            <p><strong>&bull; Eo Gió</strong> thuộc xã Nhơn Lý, là một trong những điểm check-in nổi bật nhất tại Bình Định. Cái tên “Eo Gió” bắt nguồn từ hình dáng địa lý uốn cong như yên ngựa, nơi gió biển hội tụ quanh năm.</p>
            <h4><strong>✨Điều làm nên sức hút của Eo Gió:</strong></h4>
            <p><strong>&bull; View ngắm hoàng hôn đỉnh cao:</strong> từ mỏm đá cao, du khách có thể ngắm mặt trời từ từ lặn xuống biển – một khung cảnh lãng mạn và huyền bí.</p>
            <p><strong>&bull; Lối đi ven biển độc đáo:</strong> được lát đá và có lan can đỏ rực, uốn lượn theo sườn núi, cực kỳ nổi bật trên nền biển xanh.</p>
            <p><strong>&bull; Thiên nhiên hoang sơ: </strong> với những ghềnh đá kỳ vĩ, bãi đá trứng, nước biển trong xanh, tạo nên bức tranh sống động của đại dương.</p>

            <h3>🏛️ 3. Tháp Đôi – Di tích văn hóa Champa</h3>
            <div style="text-align: center;">
              <img class="anhthubay" src="https://letsflytravel.vn/wp-content/uploads/2024/11/thap-doi-quy-nhon-1-1024x768.webp" alt="Quy Nhơn biển đẹp">
            </div>
            <p>Tọa lạc ngay trung tâm thành phố, Tháp Đôi là công trình kiến trúc cổ kính của người Chăm, mang đậm nét văn hóa và tín ngưỡng cổ xưa.</p>
            <p>Tháp Đôi (còn gọi là Tháp Hưng Thạnh) là một trong những công trình kiến trúc độc đáo còn sót lại của người Chăm Pa cổ ở Quy Nhơn, tỉnh Bình Định</p>
            <p><strong>📍Vị trí:</strong></p>
            <p>&bull; Địa chỉ: Đường Trần Hưng Đạo, phường Đống Đa, thành phố Quy Nhơn, tỉnh Bình Định</p>
            <p>&bull; Cách trung tâm thành phố chỉ khoảng 3 km</p>
            <p><strong>🕰️ Lịch sử:</strong></p>
            <p><strong>&bull;</strong> Được xây dựng vào <strong>thế kỷ XII</strong> dưới thời vương quốc Champa.</p>
            <p><strong>&bull;</strong> Đây là một trong số ít cụm tháp đôi còn tồn tại nguyên vẹn đến ngày nay.</p>
            <p><strong>🧭 Ý nghĩa văn hóa:</strong></p>
            <p><strong>&bull;</strong> Là biểu tượng của nền văn minh Champa từng phát triển rực rỡ ở miền Trung.</p>
            <p><strong>&bull;</strong> Tháp được xây dựng bằng gạch nung đỏ, chạm trổ tinh xảo với hình tượng thần linh, rồng, chim thần Garuda, và các họa tiết hoa văn độc đáo.</p>
            <p><strong>&bull;</strong> Là nơi thường tổ chức các lễ hội, sự kiện văn hóa truyền thống liên quan đến nghệ thuật Chăm như múa Apsara, lễ cúng Tháp,…</p>

            <h3>🌊4. Ghềnh Ráng Tiên Sa – Thơ mộng và huyền thoại</h3>
            <div style="text-align: center;">
              <img class="anhthutam" src="https://i2.ex-cdn.com/crystalbay.com/files/content/2024/08/07/ghenh-rang-tien-sa-2-0910.jpg" alt="Quy Nhơn biển đẹp">
            </div>
            <p>Nơi gắn liền với nhà thơ Hàn Mặc Tử, Ghềnh Ráng mang vẻ đẹp hoang sơ, có bãi đá trứng độc đáo và ngọn đồi Thi Nhân yên bình.</p>
            <p>Nơi đây nổi tiếng với chuỗi bãi đá nằm liền kề nhau chạy dọc theo núi Xuân Vân. Không chỉ có thiên nhiên, Ghềnh Ráng Tiên Sa còn “chiêu đãi” bạn bằng một loạt tọa độ hấp dẫn khác nằm trong khu du lịch cùng tên như bãi tắm Hoàng Hậu (hay bãi Đá Trứng), mộ thi sĩ Hàn Mặc Tử, nhà thờ Ghềnh Ráng…</p>
            <p><strong>&bull; Ghềnh Ráng Tiên Sa</strong> là một quần thể thắng cảnh thiên nhiên tuyệt đẹp nằm ngay sát trung tâm thành phố Quy Nhơn, nơi núi đá, biển cả và truyền thuyết giao hòa tạo nên một khung cảnh nên thơ, huyền bí.</p>
            <h4><strong>🌄Cảnh quan nổi bật:</strong></h4>
            <p><strong>&bull; Ghềnh đá tự nhiên</strong> uốn lượn dọc theo bờ biển, tạo nên cảnh tượng kỳ vĩ.</p>
            <p><strong>&bull; Bãi đá Trứng (bãi tắm Hoàng Hậu)</strong> với những viên đá tròn như trứng xếp chồng lên nhau, gắn với truyền thuyết Nam Phương hoàng hậu.</p>
            <p><strong>&bull; Bãi Tiên Sa</strong> – nơi truyền thuyết kể rằng các nàng tiên từng xuống trần tắm mát.</p>
            <p><strong>&bull; Đồi Thi Nhân</strong> – nơi yên nghỉ và tưởng niệm nhà thơ <strong>Hàn Mặc Tử</strong>, với khu mộ và phòng trưng bày thơ văn, thư pháp.</p>
            <h4>📍 Vị trí:</h4>
            <p><strong>&bull;</strong> Địa chỉ: Số 3 Hàn Mặc Tử, phường Ghềnh Ráng, TP. Quy Nhơn, tỉnh Bình Định</p>
            <p><strong>&bull;</strong>  Cách trung tâm thành phố chỉ khoảng 2 km về phía Đông Nam</p>
            <p><strong>📜 Huyền thoại & văn hóa:</strong></p>
            <p><strong>&bull;</strong> Tên gọi “Tiên Sa” bắt nguồn từ truyền thuyết các nàng tiên giáng trần ngắm cảnh và tắm biển tại đây.</p>
            <p><strong>&bull;</strong> Gắn liền với những vần thơ đầy bi thương và lãng mạn của thi sĩ Hàn Mặc Tử.</p>
            <p><strong>&bull;</strong> Là nơi truyền cảm hứng cho nhiều tác phẩm nghệ thuật, thơ ca và nhiếp ảnh.</p>

            <h3>🏜️5. Đồi cát Phương Mai – Tiểu sa mạc thu nhỏ</h3>
            <div style="text-align: center;">
              <img class="anhthuchin" src="https://i2.ex-cdn.com/crystalbay.com/files/content/2024/08/16/doi-cat-phuong-mai-2-1502.jpg" alt="Quy Nhơn biển đẹp">
            </div>
            <p>Đồi cát cao và thoáng rộng nằm gần bãi biển Nhơn Lý, là địa điểm lý tưởng để chụp ảnh, trượt cát và ngắm toàn cảnh biển từ trên cao.</p>
            <h4><strong>✨ Điểm nổi bật:</strong></h4>
            <p><strong>&bull;</strong> 🌬️ Cát vàng mịn trải dài như một tiểu sa mạc, với những đồi cát cao 20–30m, có nơi đến 100m.</p>
            <p><strong>&bull;</strong> 🌄 Phong cảnh thay đổi theo gió, tạo ra những đường cong cát tuyệt đẹp.</p>
            <p><strong>&bull;</strong> 🏂 Trượt cát là hoạt động được du khách yêu thích, phù hợp cho cả người lớn và trẻ em.</p>
            <p><strong>&bull;</strong> 📸 Chụp ảnh check-in cực đẹp với ánh sáng tự nhiên và khung cảnh hoang sơ.</p>
            <p><strong>📍Vị trí:</strong></p>
            <p><strong>&bull;</strong> Đồi cát Phương Mai nằm gần khu vực Khu kinh tế Nhơn Hội, thuộc xã Nhơn Lý, cách trung tâm thành phố Quy Nhơn khoảng 20 km.</p>


            <h3>🏝️6. Cù Lao Xanh – Viên ngọc giữa biển</h3>
            <div style="text-align: center;">
              <img class="anhthumuoi" src="https://motogo.vn/wp-content/uploads/2023/05/cu-lao-xanh-14.jpg" alt="Quy Nhơn biển đẹp">
            </div>
            <p>Nằm cách đất liền khoảng 24 km, Cù Lao Xanh sở hữu làn nước trong vắt, rặng san hô tuyệt đẹp và cuộc sống ngư dân mộc mạc, hoang sơ.</p>
            <p><strong>📍Vị trí:</strong></p>
            <p><strong>&bull;</strong> Cù Lao Xanh (hay còn gọi là đảo Vân Phi) thuộc xã Nhơn Châu, cách thành phố Quy Nhơn khoảng 24 km về phía Đông Nam, di chuyển bằng tàu khoảng 30–60 phút.</p>
            <h4><strong>✨ Điểm nổi bật:</strong></h4>
            <p>💎 <strong>Biển xanh – cát trắng – nắng vàng</strong> hòa quyện tạo nên khung cảnh hoang sơ và quyến rũ.</p>
            <p>🏖️ <strong>Bãi biển sạch và yên bình</strong>, rất phù hợp để thư giãn, tắm biển hoặc cắm trại.</p>
            <p>🌊 <strong>Lặn ngắm san hô</strong> với hệ sinh thái đa dạng và rực rỡ.</p>
            <p>🌅 <strong>Ngọn hải đăng Cù Lao Xanh</strong> – một trong những ngọn hải đăng cổ nhất Việt Nam, là điểm check-in lý tưởng với tầm nhìn toàn đảo.</p>
            <p>🐚 <strong>Đời sống ngư dân thân thiện</strong>, có thể trải nghiệm câu cá, kéo lưới cùng người dân địa phương.</p>

            <h3>🏖️7. Bãi Xép – Nơi yên bình bên làng chài</h3>
            <div style="text-align: center;">
              <img class="anhthu11" src="https://quynhontourist.vn/wp-content/uploads/2017/12/bai-xep-quy-nhon-quynhontourist.jpg" alt="Quy Nhơn biển đẹp">
            </div>
            <p>Là bối cảnh trong bộ phim “Tôi thấy hoa vàng trên cỏ xanh”, Bãi Xép có vẻ đẹp thơ mộng, phù hợp với những ai thích nghỉ dưỡng và tránh xa phố thị ồn ào.</p>
            <p><strong>📍Vị trí:</strong></p>
            <p><strong>&bull;</strong> Nằm cách trung tâm thành phố Quy Nhơn khoảng 10 km về phía Nam, thuộc phường Ghềnh Ráng.</p>
            <h4><strong>✨ Điểm nổi bật:</strong></h4>
            <p>🌊 <strong>Biển xanh, cát vàng mịn</strong>, cùng những bãi đá đen tạo nên vẻ đẹp nguyên sơ và hoang dã.</p>
            <p>🏞️ <strong>Khung cảnh thiên nhiên hòa quyện</strong>, với một bên là biển cả, một bên là đồi cỏ lau mênh mông, từng được chọn làm bối cảnh cho phim "Tôi thấy hoa vàng trên cỏ xanh".</p>
            <p>🐟 <strong>Làng chài Bãi Xép nhỏ xinh</strong>, yên ả – nơi bạn có thể tìm hiểu cuộc sống giản dị của ngư dân</p>
            <p>🍽️ <strong>Thưởng thức hải sản tươi sống</strong>, giá bình dân ngay tại các quán nhỏ ven biển.</p>
            <p>📸 <strong>Điểm đến yêu thích</strong> của các bạn trẻ mê chụp ảnh sống ảo hoặc muốn tìm nơi thư giãn, tránh xa đô thị ồn ào.</p>

        </section>

        <h2><strong>Lời Kết</strong></h2>
        <p>✨ Hãy để hành trình khám phá Bình Định của bạn trở nên dễ dàng và trọn vẹn hơn với sự hỗ trợ từ chúng tôi.
            Từ việc tìm kiếm thông tin điểm đến, đặt vé máy bay, lựa chọn nơi lưu trú đến các gợi ý ẩm thực và trải nghiệm văn hóa – chúng tôi luôn đồng hành cùng bạn trên mọi bước đường du lịch.
            Bình Định không chỉ là điểm đến, mà còn là nơi lưu giữ những khoảnh khắc đáng nhớ.</p>
            <p>👉 Liên hệ ngay để được tư vấn và hỗ trợ tốt nhất cho chuyến đi của bạn đến vùng đất võ trời văn đầy quyến rũ này!</p>
        <p>Trên đây là top 8 địa điểm du lịch Bình Định bạn không thể bỏ qua trong chuyến vi vu. Không chỉ có biển xanh, cát trắng, Bình Định còn nhiều điều tuyệt vời đang chờ bạn khám phá.</p>
        <p>Để chuyến đi du lịch càng thêm vui thì bạn đừng bỏ qua bí kíp du lịch Quy Nhơn tự túc được CTT_CNTT46A tổng hợp sẵn và sẽ hỗ trợ cho bạn ở phía trên đấy nhé!</p>
    </div>

    <div class="sidebar">
      <div class="sidebar-box">
        <h3>Trong bài viết này</h3>
        <ul>
          <li><a href="#gioithieu">1. Giới thiệu về thành phố biển Quy Nhơn</a></li>
          <li><a href="#thoidiem">2. Thời điểm lý tưởng để ghé thăm</a></li>
          <li><a href="#phuongtienvacachdi">3. Phương tiện và cách đi đến Quy Nhơn</a></li>
          <li><a href="#phuongtiendichuyenquynhon">4. Phương tiện di chuyển tại Quy Nhơn</a></li>
          <li><a href="#diadiemluutru">5. Địa điểm lưu trú nổi bật</a></li>
          <li><a href="#diadiemnoibat">6. Những điểm đến nổi bật ở Quy Nhơn</a></li>
        </ul>
      </div>
    </div>
  </div>
   
<footer id="lienhe">
  <p>Liên hệ: ctt-cntt46a@gmail.com | SĐT: 0812301905</p>
  <p>&copy; 2025 Du lịch Quy Nhơn. Thiết kế bởi CTT-CNTT46A.</p>
</footer>

</body>
</html>
