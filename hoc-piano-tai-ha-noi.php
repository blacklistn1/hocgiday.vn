<?php session_start(); ?>
<?php $_SESSION['subject'] = ''; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tìm giáo viên Piano tại nhà hoặc tại lớp | Học Gì Đây?</title>

	<!-- Google Tag Manager -->
<!-- 	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KHS4KLP');</script> -->
	<!-- End Google Tag Manager -->

	<!-- Font Awesome CDN -->
	<script src="https://use.fontawesome.com/d5eddf6cb3.js"></script>

	<!-- Bootstrap CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<!-- JQuery UI -->
	<link rel="stylesheet" type="text/css" href="dist/js/jquery-ui.smoothness/jquery-ui.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

	<!-- MY style -->
	<link rel="stylesheet" type="text/css" href="dist/css/style.css">

	<style type="text/css" media="screen">

	</style>
	<!-- Hotjar Tracking Code for www.hocgiday.com/ -->
<!-- 	<script>
		(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:569211,hjsv:5};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
	</script> -->


	<!-- Google Analytics Tracking Code for Piano -->
<!-- 	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-85357957-2', 'auto');
		ga('send', 'pageview');
	</script> -->
		
</head>
<body>

	<!-- Google Tag Manager (noscript) -->
<!-- 	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHS4KLP"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
	<!-- End Google Tag Manager (noscript) -->

<div class="container-fluid sticky" id="contact">
	<div class="row">
		<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 col-md-offset-1 contact">
			<i class="fa fa-phone fa-2x"></i>&nbsp;&nbsp;&nbsp;
			<span class="hgd-contact-number ">Giải đáp thắc mắc: 0944852366</span>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-0 col-sm-offset-1 col-md-offset-2 yeucaugiaovien">
			<form action="yeu-cau-giao-vien.php" method="POST" accept-charset="utf-8">
				<input type="hidden" name="subject-hidden" value="piano">
				<button type="submit" target="_blank" name="yeucaugiaovien" class="btn btn-danger yeucaugiaovien"><span class="yeucaugiaovien-text">Yêu cầu giáo viên</span></button>
			</form>
		</div>
	</div>
</div>

<div class="container-fluid hgd-header ">
	<div class="text-center hgd-header">
		<h1 id="h1">BẠN MUỐN HỌC PIANO?</h1>
		<h3 id="h3">LỰA CHỌN GIỮA HÀNG CHỤC GIÁO VIÊN PIANO TẠI HÀ NỘI</h3>
	</div>
</div>

<!-- Slider filter -->
<div class="container-fluid slider-filter sticky">
	<div class="row">
		<div class="slider-container center-block" id="price-slider"></div>
	</div>
	<div class="row text-center slider-info">
		<label for="price">Khoảng học phí: </label>
		<input id="amount" type="text" name="price" value="" disabled="disabled" class="slider-amount"> đồng/h
	</div>
</div>

<!-- Profile list -->
<div class="container hgd-container">

	<!-- Profile row: Lê Trung Nam-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="500">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/ultimatemember/68/profile_photo-190.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="letrungnam">Lê Trung Nam</h3>
				<p>Địa chỉ: ngõ 127 Lạc Long Quân, Tây Hồ, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">500.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">9</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more letrungnam">
					<span class="read-more letrungnam">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao - Chuyên sâu</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Tôi là Lê Nam, hiện tại giảng dạy Piano cho nhiều học sinh tại nhà. Với nền tảng kiến thức vững chắc và học vị cao về bộ môn Piano (thạc sĩ Piano tại Học viện Âm nhạc Quốc gia Việt Nam), tôi chắc chắn có thể đem lại cho các bạn học sinh những trải nghiệm tuyệt vời với cây đàn Piano. Bởi vì khi ngồi xuống và chơi một cây Piano, bạn phải dồn cả tâm hồn vào nó, để từng lần cây búa gõ vào dây đàn vang ra âm thanh, là một lần bạn rung động.
Tôi chuyên giảng dạy về dòng cổ điển, và phương pháp dạy của tôi sẽ định hướng cho các bạn có thể tiến rất xa trên con đường học tập Piano sau này. Vì vậy tôi có thể luyện thi vào các trường nhạc cho các bạn học sinh định hướng học Piano lâu dài và chuyên nghiệp.
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp thạc sĩ Học viện âm nhạc quốc gia năm 2015</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/I49Jfh5vIaI" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>6km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>500.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>400.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="letrungnam">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Nguyễn Việt Anh-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="300">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/ultimatemember/66/profile_photo-190.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="nguyenvietanh">Nguyễn Việt Anh</h3>
				<p>Địa chỉ: ngõ 130 Đốc Ngữ, Ba Đình, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">300.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">6</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyenvietanh">
					<span class="read-more nguyenvietanh">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào các quý phụ huynh và các bạn học viên từ https://hocgiday.com/ mình là Nguyễn Việt Anh - giảng viên piano tốt nghiệp loại Giỏi Trường Cao đẳng Nghệ thuật Hà Nội khoa Nhạc Nhẹ với thế mạnh sở trường của mình là cổ điển, hòa tấu, ngoài ra là đệm hát, cover... do từ nhỏ mình đã có khoảng thời gian 4 năm học organ và cho tới giờ vẫn thường xuyên là nhạc công tại các quán cafe và khách sạn lớn của Hà Nội.
Mình tiếp xúc với âm nhạc từ năm 6 tuổi và bắt đầu làm quen với cây đàn piano từ năm 10 tuổi. Trong âm nhạc hàn lâm thì người ảnh hưởng và truyền nhiều đam mê nhiều nhất tới mình khi học cây đàn này là Beethoven do chủ yếu trong suốt quãng thời gian đi học mình rất hay chơi các tác phẩm của ông.
Mình đã và đang cộng tác và là giáo viên chính cho khá nhiều các trung tâm âm nhạc lớn nhỏ uy tín tại Hà Nội từ quãng thời gian còn là sinh viên do đó mình có khả năng giảng dạy được khá nhiều những giáo trình đa dạng khác nhau từ cơ bản đến nâng cao: John Thompson (Mỹ). methode rose, cho đến những giáo trình trong các trường âm nhạc đào tạo chính qui đồng thời đã được training những phương pháp sư phạm và giáo trình từ Kawaii Music (JPN) và đang theo học thi lấy chứng chỉ âm nhạc quốc tế LCM (London College of Music) với mục đích đối tượng học sinh hướng đến là trẻ nhỏ (5t trở lên) và tất nhiên cả người lớn với phương pháp dạy học khác nhau mình hoàn toàn tự tin với chuyên môn và kĩ năng sư phạm đã tích lũy được đến thời điểm này!
Khi dạy học sinh mình chú trọng nhiều hơn đến những kĩ năng cơ bản nhất từ ngón tay, thế tay, dáng ngồi sau đó mới đi vào trình bày bản nhạc và nguyên tắc hơn vẫn là : Sự luyện tập của học sinh ở nhà rất quan trọng tới tiến độ học và sự tiến bộ theo thời gian của học sinh đó và thầy giáo chỉ là người dẫn dắt và sửa và góp ý cho các bạn mỗi buổi tới lớp. Trong mỗi tiết dạy , mình khá hiền và hòa đồng với học sinh với mục đích cho học sinh có được sự thoải mái nhất khi học nghệ thuật tuy nhiên vẫn phải có những nguyên tắc và khuôn khổ nhất định để có được những tiết học chất lượng.
Hi vọng Việt Anh có cơ hội được hợp tác và được làm việc cùng các quý phụ huynh và các bạn học viên. Xin cảm ơn!
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp Cao Đẳng Nghệ thuật Hà Nội năm 2016</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/QqSc2ZeQ09I" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>5km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>300.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>250.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenvietanh">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Trần Tùng-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="250">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/19-HN-TranTung.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="trantung">Trần Tùng</h3>
				<p>Địa chỉ: Triều Khúc, Thanh Xuân, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">250.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">8</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more trantung">
					<span class="read-more trantung">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Xin chào các bạn!
Mình là Trần Tùng năm nay 22 tuổi hiện đang là SV Năm 3 trường ĐH Sư Phạm Nghệ Thuật TƯ( NUAE) . Với nhiều kinh nghiệm tham gia nhiều chương trình nghệ thuật lớn nhỏ như : Khát Vọng Trẻ 8 . Hiến Dâng Cho Tổ quốc,… Cùng nhiều hoạt động khác liên quan đến âm nhạc cùng với đó là sự đào tạo bài bản về kỹ năng sư phạm tại trường NỦAE nên mình tham gia giảng dạy và gia sư piano , organ , từ cơ bản cho đến nâng cao ,đệm hát piano Tại nhiều trung tâm âm nhạc. Rất mong được cùng các bạn làm quen, học tập và phát triển với bộ môn piano nói riêng và các môn âm nhạc nói chung này.
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 4 Đại học SƯ phạm nghệ thuật trung ương</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/HMy1JV9ecp8" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>8km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>250.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="trantung">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Nguyễn Đức Thành-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="180">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Duc-Thanh.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="nguyenducthanh">Nguyễn Đức Thành</h3>
				<p>Địa chỉ: Triều Khúc, Thanh Xuân, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">180.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">2</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyenducthanh">
					<span class="read-more nguyenducthanh">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Mình tên là Nguyễn Đức Thành, sinh năm 1996, hiện đang là sinh viên năm 3 trường ĐH Sư phạm nghệ thuật Trung ương. Mình có thể dạy 2 môn là Thanh nhạc và Piano.
Thần tượng yêu thích của mình là Bằng Kiều.Mình đã tiếp xúc âm nhạc chính quy được 4 năm. Dù đang học và theo dòng nhạc chính thống nhưng mình rất yêu thích dòng nhạc thứ hai là nhạc nhẹ, trữ tình.
Về hoạt động nghệ thuật: Mình đã đạt giải ba dòng nhạc nhẹ tiếng hát sông Thương năm 2017 và đang lọt vào chung khảo liên hoan tiếng hát truyền hình Bắc Ninh 2017.
Rất hi vọng sẽ được làm việc với nhiều học sinh tại Học Gì Đây?
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 3 Đại học Sư phạm nghệ thuật trung ương</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/yFPGkkPcP4U" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>10km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>180.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>150.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			</tbody>
		 </table>
	
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenducthanh">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Đinh Thị Kim Anh-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="250">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Kim-Anh.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="dinhthikimanh">Đinh Thị Kim Anh</h3>
				<p>Địa chỉ: Tây Sơn, Đống Đa, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">250.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">2</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more dinhthikimanh">
					<span class="read-more dinhthikimanh">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào tất cả mọi người! Mình là Kim Anh, rất vui được gặp gỡ mọi người trên Website Hocgiday.com. Có lẽ là điều khiến mình gần gũi mọi người hơn chính là qua con đường âm nhạc. Rất vui được chia sẻ với mọi người là mình rất yêu bộ môn Piano - Piano giúp cho mình cảm nhận được ý nghĩa cuộc sống. Những lúc buồn có thể đánh lên những giai điệu rất nhẹ nhàng, hoặc lúc vui thì cây đàn cũng chia sẻ được những nhộn nhịp và thoải mái trong cuộc sống hơn. Hay những lúc cảm thấy bâng khuâng, nhớ nhung một ai đó, những giai điệu của bài Thư gửi Elise - Beethoven lại được cất lên trong căn phòng nhỏ của mình
Thần tượng âm nhạc của mình là Richard Clayderman, đây là tác giả mình nghe rất nhiều trong ngày, trước khi đi ngủ hoặc mỗi sáng thức dậy. Nó giúp cho tinh thần của mình phấn chấn hơn và làm việc hiệu quả hơn. Điều hạnh phúc lớn nhất trên con đường giảng dạy âm nhạc của mình chính là truyền đạt được trọn vẹn những gì mình cảm nhận được cho học sinh, giúp học sinh khám phá được thêm một tầng cảm xúc mới trong các tác phẩm kinh điển.
Trong mỗi một giờ học, học sinh sẽ được học trong một không khí vui vẻ thoải mái, giống như một buổi chia sẻ, bày tỏ cảm xúc giữa mình và học sinh. Đặc biệt là mình rất yêu thích các bạn nhỏ, vì các bạn như một tờ giấy trắng. Có những bạn hơi khó gần, có những bạn lại ít nói ít cười, hay ngại ngùng, nhưng sau khi qua một số buổi học, bằng nụ cười của những bản thân mình, nhưng hơn cả là nụ cười của âm nhạc đã giúp các bạn đó cởi mở hơn với mọi người xung quanh.
Mặc dù mình đang học ngành Sư Phạm âm nhạc, nhà trường dạy mình cách làm một cô giáo, nhưng mình nghĩ rằng, nếu chỉ cầm sách và đến trường thôi thì sẽ không hoàn thiện được người giáo viên bên trong mình. Mà chính các bạn sẽ là người dạy mình cách để trở thành một người giáo viên hoàn thiện nhất. Vì vậy hãy cho mình cơ hội giúp bạn khám phá một thế giới âm nhạc, mới lạ, nhẹ nhàng và nhiều điều thú vị nhé!
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 4 Đại học sư phạm nghệ thuật trung ương năm 2015</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/30LhkFO_aDU" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>5km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>250.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="dinhthikimanh">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Tạ Trang Dung-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="450">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Trang-Dung.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="tatrangdung">Tạ Trang Dung</h3>
				<p>Địa chỉ: ngõ 204D Đội Cấn, Ba Đình, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">450.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">9</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more tatrangdung">
					<span class="read-more tatrangdung">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào tất cả mọi người! Mình là Tạ Trang Dung, rất vui được gặp gỡ mọi người trên Website Hocgiday.com. Có lẽ là điều khiến mình gần gũi mọi người hơn chính là qua con đường âm nhạc. Rất vui được chia sẻ với mọi người là mình rất yêu bộ môn Piano - Piano giúp cho mình cảm nhận được ý nghĩa cuộc sống. Những lúc buồn có thể đánh lên những giai điệu rất nhẹ nhàng, hoặc lúc vui thì cây đàn cũng chia sẻ được những nhộn nhịp và thoải mái trong cuộc sống hơn. Hay những lúc cảm thấy bâng khuâng, nhớ nhung một ai đó, những giai điệu của bài Thư gửi Elise - Beethoven lại được cất lên trong căn phòng nhỏ của mình
Thần tượng âm nhạc của mình là Richard Clayderman, đây là tác giả mình nghe rất nhiều trong ngày, trước khi đi ngủ hoặc mỗi sáng thức dậy. Nó giúp cho tinh thần của mình phấn chấn hơn và làm việc hiệu quả hơn. Điều hạnh phúc lớn nhất trên con đường giảng dạy âm nhạc của mình chính là truyền đạt được trọn vẹn những gì mình cảm nhận được cho học sinh, giúp học sinh khám phá được thêm một tầng cảm xúc mới trong các tác phẩm kinh điển.
Trong mỗi một giờ học, học sinh sẽ được học trong một không khí vui vẻ thoải mái, giống như một buổi chia sẻ, bày tỏ cảm xúc giữa mình và học sinh. Đặc biệt là mình rất yêu thích các bạn nhỏ, vì các bạn như một tờ giấy trắng. Có những bạn hơi khó gần, có những bạn lại ít nói ít cười, hay ngại ngùng, nhưng sau khi qua một số buổi học, bằng nụ cười của những bản thân mình, nhưng hơn cả là nụ cười của âm nhạc đã giúp các bạn đó cởi mở hơn với mọi người xung quanh.
Mặc dù mình đang học ngành Sư Phạm âm nhạc, nhà trường dạy mình cách làm một cô giáo, nhưng mình nghĩ rằng, nếu chỉ cầm sách và đến trường thôi thì sẽ không hoàn thiện được người giáo viên bên trong mình. Mà chính các bạn sẽ là người dạy mình cách để trở thành một người giáo viên hoàn thiện nhất. Vì vậy hãy cho mình cơ hội giúp bạn khám phá một thế giới âm nhạc, mới lạ, nhẹ nhàng và nhiều điều thú vị nhé!
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp Trung cấp Học viện âm nhạc quốc gia 2015</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/40Qpz3irCvQ" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>5km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>450.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>360.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="tatrangdung">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Hoàng Thị Thảo-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="200">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Hoang-Thi-Thao.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="hoangthithao">Hoàng Thị Thảo</h3>
				<p>Địa chỉ: ngõ 332 Nguyễn Trãi, Thanh Xuân, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">200.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">10</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more hoangthithao">
					<span class="read-more hoangthithao">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào các bạn, mình là Hoàng Thị Thảo. Mình tiếp xúc với Piano từ nhỏ. Dòng nhạc ưa thích của mình là nhạc nhẹ và nhạc thính phòng. 
Hiện mình đang theo học tại trường Đại học Sư phạm nghệ thuật trung ương và sẽ tốt nghiệp năm nay. Mình có thể dạy 2 môn Piano và Thanh nhạc.
Mình có thể dạy các bạn từ trình độ cơ bản đến nâng cao. Mình sẽ dạy lý thuyết song song thực hành luôn trong mỗi buổi dạy, mỗi buổi sẽ thêm một chút để bạn dần mở rộng ra khả năng của mình.
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 4 Đại học Sư phạm nghệ thuật trung ương</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/AuxB9SadFm8" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>4km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="hoangthithao">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Bùi Việt-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="300">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/1-HN-BuiViet.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="buiviet">Bùi Việt</h3>
				<p>Địa chỉ: Định Công Hạ, Hoàng Mai, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">300.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">2</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more buiviet">
					<span class="read-more buiviet">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào các bạn, mình tiếp xúc với Guitar từ 2008, Piano và thanh nhạc từ 2010. Dòng nhạc ưa thích của mình là nhạc nhẹ và nhạc thính phòng. Mình sẽ dạy các bạn từ trình độ cơ bản, hoặc từ những gì bạn đã biết. Mình sẽ dạy lý thuyết song song với thực hành luôn trong mỗi buổi dạy, mỗi buổi thêm một chút để bạn dần mở rộng khả năng của mình. 
Với học sinh học nhạc cổ điển: các bạn sẽ được học cách đọc nốt nhạc, đọc tiết tấu, học qua các bài tập luyện ngón để giúp ngón vững hơn và âm thanh được tròn trịa, tiếp xúc luôn với các tác phẩm từ mức dễ đến khó. Với học sinh học đệm hát các nhạc cụ: cấu tạo hợp âm, các gam, các giọng, các âm hình đệm cơ bản, và nâng cao với những học sinh có khả năng. Với học sinh học thanh nhạc: bạn sẽ được học về kiểm soát hơi thở, đặt vị trí âm thanh, xử lý bài, tiết chế cảm xúc, áp dụng vào bài hát. 
Các giáo trình có thể được sử dụng trong quá trình giảng dạy: 
Method Rose - Ernest Van de Velde
Phương pháp học guitar lý thuyết&thực hành - Lê Đức Sơn
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp Đại học sư phạm nghệ thuật trung ương</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/JIB0x3lv1pk" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>5km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>300.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>240.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="buiviet">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Phùng Kim Ngọc-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="200">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Kim-Ngoc.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="phungkimngoc">Phùng Kim Ngọc</h3>
				<p>Địa chỉ: Cầu Giấy, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">200.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">4</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more phungkimngoc">
					<span class="read-more phungkimngoc">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào các bạn, mình là Phùng Kim Ngọc. Mình có thể giảng dạy đàn piano hoặc organ ở nhà mình hoặc ngay tại nhà học viên. 
Mình bắt đầu chơi Piano từ khi bước vào cổng trường cấp 3, và đã bắt đầu đi dạy từ năm nhất đại học. Mình yêu thích các bản nhạc của Yiruma và J. S. Bach. Dòng nhạc sở trường mà mình hay chơi là nhạc cổ điển và pop.
Các bài học của mình được thiết kế từ đơn giản đến nâng cao. Học sinh học tại nhà sẽ cần chuẩn bị một cây đàn organ hoặc guitar điện. Với những bạn đến học tại studio của mình thì đã có sẵn cây piano điện. Rất vui được làm việc với các bạn!
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên Đại học Văn hóa nghệ thuật quân đội</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/mz1PS1LMpm4" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>8km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>180.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="phungkimngoc">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Nguyễn Việt Hùng-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Viet-Hung-1.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="nguyenviethung">Nguyễn Việt Hùng</h3>
				<p>Địa chỉ: Thái Hà, Đống Đa, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price"></p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">3</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyenviethung">
					<span class="read-more nguyenviethung">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Phỏng vấn với Học Gì Đây?: “Nếu là tiếp xúc thì là từ năm 3 tuổi em ạ.Hồi đó nhà làm karaoke nên anh biết hát từ trc khi biết đọc chữ =)) Anh bắt đầu đi dạy từ năm 2012. Thần tượng âm nhạc của anh là Paul Mauriat, Yanni, Michael Jackson, Cori Henry, Jacob Coller. Anh thích các thể loại pop, jazz, và cả blues nữa”.
Phương pháp giảng dạy của anh là: “Truyền đạt các phương pháp học để học sinh có khả năng tự học và tiến bộ sau khoá học mà không cần có giáo viên hướng dẫn. Trước khi bắt đầu khoá học, học sinh cần tự trả lời được 3 câu hỏi (vì đến lớp thầy sẽ hỏi): học để làm gì (cho vui, học để thi vào trường nhạc, để trở thành producer, hay do tò mò muốn thử?), số tiền định đầu tư cho việc học là bao nhiêu (ngoài tiền học). Ví dụ: mua đàn, tự tìm mua tài liệu, sau khoá học thì có học thêm những người thầy giỏi hơn nữa không? v.v..., số thời gian tối thiểu chắc chắn dành cho việc tập nhạc mỗi ngày là bao nhiêu lâu?”.
Kinh nghiệm giảng dạy của anh: “Nếu các bạn không định mua đàn trước khi đi học mà chỉ muốn học xem thế nào rồi mới quyết định mua hay không mua, thì không nên đi học, vì điều đấy chứng tỏ các bạn hoặc không thực sự thích học, hoặc điều kiện tiền bạc chưa thực sự dư dả. Học nhạc vốn là công cuộc tốn kém, nên hãy chắc chắn là túi tiền của mình không bị quá tải”.
Về hoạt động nghệ thuật: “Thì anh đã có 14 năm kinh nghiệm biểu diễn các kiểu sân khấu khác nhau, từ hình thức đệm hát phong trào, chơi band nhạc, phối khí, ghi âm, sản xuất. Hiện tại đang là trùm cuối của Katana Records, nhưng vẫn muốn đi dạy đàn thêm, để nếu có gặp được bạn học sinh nào tiềm năng thì tuyển mộ vào Katana Records làm việc”.
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p></p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/pV4znnNh250" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>0km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p></p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>300.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenviethung">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Lê Hương-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="250">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/18-HN-LeHuong.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="lehuong">Lê Hương</h3>
				<p>Địa chỉ: Nguyễn Khuyến, Hà Đông, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">250.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">15</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more lehuong">
					<span class="read-more lehuong">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao - Chuyên sâu</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào các quý phụ huynh và các bạn học viên từ http://hocgiday.com/ tôi là Lê Hương, rất vui được giao lưu học hỏi và làm quen với tất cả các bạn trong Học gì đây. Có lẽ không cần phải nói nữa các bạn cũng đã biết về tác dụng của âm nhạc trong đời sống tinh thần của con người.
Là một giáo viên piano và organ, tôi rất mong có thể truyền cảm hứng cũng như giúp các bạn tiếp cận với bộ môn piano và organ. Nhạc sĩ yêu thích của tôi là Beethoven, với những bản Piano bất hủ, sống mãi qua các thời đại, và tôi cũng bị ảnh hưởng rất nhiều bởi nhạc sĩ lỗi lạc này.
Phương châm dậy học của tôi là: bằng cấp quan trọng nhưng k phải là tất cả. Cái quan trọng là trong quá trình học các bạn tiếp thu được gì, có gì thay đổi. Tôi không dám chắc có thể giúp bạn trở thành thiên tài. Nhưng tôi đảm bảo sau khi học 10 buổi các bạn sẽ thấy sự thay đổi về cách nhìn nhận bộ môn Piano. Có khả năng tập chung cao, dễ dàng áp dụng sang các bộ môn khác vì Piano là tổng hòa các giác quan, khả năng tập chung cao và rèn luyện tính kiên trì.
Với kinh nghiệm 8 năm giảng dậy, cho rất nhiều đối tượng và mọi lứa tuổi rất mong được hợp tác và hướng dẫn các bạn tiếp cận với bộ môn nghệ thuật quý tộc này. Thân chào các bạn học viên tương lai và quý phụ huynh tại Học Gì Đây?.
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp Đại học sư phạm nghệ thuật trung ương</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/qanjBGdsVu8" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>10km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>250.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="lehuong">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Dương Thị Tâm-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="200">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Tam.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="duongthitam">Dương Thị Tâm</h3>
				<p>Địa chỉ: ngõ 139 Yên Xá, Thanh Trì, Hà Đông, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">200.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">2</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more duongthitam">
					<span class="read-more duongthitam">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Kiên trì và đam mê! Đó là kim chỉ nam trong lớp học nhạc của mình. Những thứ bắt đầu bằng sự tò mò dần trở thành đam mê và nỗi ám ảnh. Và giấc mơ lớn nhất của mình là truyền giảng niềm đam mê đó lại cho người khác!
Mình thích chơi đàn piano từ nhỏ, nhưng đến cấp ba mới có khả năng đi học piano.
 Mình luôn tìm kiếm những cách mới và thú vị để dạy piano. Điểm mạnh của mình bao gồm sự kiên nhẫn, hài hước và đồng cảm với người khác. Bạn muốn học được gì từ Piano? Vào cuối buổi học nếu mình có thể chia sẻ một phần tình yêu âm nhạc cho bạn, nó sẽ mang lại cho mình niềm vui thật sự.					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp Đại học sư phạm nghệ thuật trung ương</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/sPjg_Z9gZxg" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>7km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>150.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="duongthitam">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Lê Thị Yến Linh-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="220">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Yen-Linh.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="lethiyenlinh">Lê Thị Yến Linh</h3>
				<p>Địa chỉ: Nguyễn Quý Đức, Thanh Xuân, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">220.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">5</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more lethiyenlinh">
					<span class="read-more lethiyenlinh">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào các bạn, mình là Yến Linh. Mình có thể giảng dạy piano ở nhà mình hoặc ngay tại nhà học viên. Các bài học sẽ hoàn toàn tập trung vào sở thích và mục tiêu của học viên. Mình đã có kinh nghiệm 3 năm dạy nhạc với mọi lứa tuổi, từ các bạn nhỏ đang học tiểu học đến người đã đi làm. 
Mình tiếp xúc với âm nhạc khi còn nhỏ, từ lúc học cấp 1 mình đã luôn yêu thích nhạc không lời, bán cổ điển và những bài thánh ca. Mình rất hứng thú trong việc giúp đỡ mọi người khai phá khả năng âm nhạc tiềm ẩn của họ, hoặc mang đến cho những người yêu nhạc một môi trường vui vẻ, sáng tạo để trải nghiệm cùng với nhạc cụ họ thích.
Hi vọng sẽ được gặp các bạn trong thời gian sớm nhất!
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 3 Đại học Sư phạm nghệ thuật trung ương</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>10km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>220.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>180.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="lethiyenlinh">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Phương Thị Huệ-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="500">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/7-HN-PhuongThiHue.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="phuongthihue">Phương Thị Huệ</h3>
				<p>Địa chỉ: Dịch Vọng, Cầu Giấy, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">500.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">1</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more phuongthihue">
					<span class="read-more phuongthihue">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao - Chuyên sâu</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Piano luôn chiếm trọn tâm trí của tôi từ khi lên 6, vì vậy tôi coi mình là một người giàu kinh nghiệm trong lĩnh vực âm nhạc. Tôi thực sự thích làm việc với các sinh viên có năng lực và chào đón các lứa tuổi và trình độ khác nhau. Tôi đã làm việc cả với các nhạc sĩ chuyên nghiệp và những người đam mê âm nhạc bậc cao.
Quãng thời gian giảng dạy của tôi đã cho những kết quả tuyệt vời, và tôi tự hào về những học viên của mình đã giành được giải thưởng cao trong các cuộc thi trong nước.
Phương pháp giảng dạy được xây dựng kĩ lưỡng của tôi dựa trên sự kết hợp tốt nhất của truyền thống Nga và châu Âu trong giáo dục âm nhạc. Nó nhằm mục đích xây dựng và nâng cao kỹ năng đọc, kỹ thuật và lý thuyết âm nhạc bằng cách khám phá các tác phẩm đa dạng về phong cách.					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp thạc sĩ Đại học sư phạm nghệ thuật trung ương</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>5km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>500.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>400.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
			 </tr>
			</tbody>
		 </table>
 
 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="phuongthihue">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Lê Khánh Linh-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="200">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Khanh-Linh.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="lekhanhlinh">Lê Khánh Linh</h3>
				<p>Địa chỉ: Thanh Trì, Hà Đông, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">200.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">2</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more lekhanhlinh">
					<span class="read-more lekhanhlinh">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Mình đã chơi piano từ nhỏ và có kinh nghiệm giảng dạy được 3 năm. Mình có thể giảng dạy nhiều phong cách và mình thích làm việc với những người mới tập chơi.
Mình có thể là cô giáo kiên nhẫn nhất mà bạn đã từng gặp! Năm nay đã là năm thứ 7 mình học ở nhạc viện, cùng với kinh nghiệm 3 năm đi dạy, mình tự tin có thể hướng dẫn cho các bạn mới tập chơi, và cả những bạn đã chơi piano được 2 - 3 năm tiến bộ nhanh chóng trong việc tập luyện và biểu diễn.
Rất mong sẽ có cơ hội được làm việc với các bạn!
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 3 hệ đại học Học viện âm nhạc Quốc gia Việt Nam</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>4km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p></p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="lekhanhlinh">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Kiều Văn Nhân-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="200">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Van-Nhan.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="kieuvannhan">Kiều Văn Nhân</h3>
				<p>Địa chỉ: ngõ 256 Bạch Đằng, Hai Bà Trưng, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">200.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">1</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more kieuvannhan">
					<span class="read-more kieuvannhan">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào mọi người, tôi là Kiều Văn Nhân. Tôi bắt đầu học nhạc từ năm 12 tuổi và đi dạy từ năm 2012. Tôi thích nhạc cổ điển, và thần tượng Mozart, Beethoven và Richard Clayderman.
Tôi thích giảng dạy ở mọi lứa tuổi và khả năng, từ những bé 6 tuổi mới bắt đầu đến học viên cao tuổi nhất là một bác đã 70 tuổi. Tôi có cách tiếp cận thư giãn và thoải mái khi khuyến khích bạn khai phá tiềm năng của học viên, tuy vậy, tôi cũng là một giáo viên nghiêm khắc khi thấy cần thiết. 
Cho dù bạn là người mới bắt đầu hay đã có kinh nghiệm, tôi sẽ đánh giá cẩn thận những điểm mạnh và điểm yếu của bạn và tạo ra một lộ trình học phù hợp với phong cách, sở thích và nhu cầu của từng cá nhân. Tôi sẽ thảo luận về mục tiêu của bạn với âm nhạc và tôi sẽ giúp bạn đạt được điều đó! 
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp Cao đẳng nghệ thuật Hà Nội</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>15km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>180.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="kieuvannhan">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Hoàng Phương-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="450">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/11-HN-HoangPhuong.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="hoangphuong">Hoàng Phương</h3>
				<p>Địa chỉ: ngõ Văn Chương, Tôn Đức Thắng, Đống Đa, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">450.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">4</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more hoangphuong">
					<span class="read-more hoangphuong">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao - Chuyên sâu</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Giống như một nghệ sỹ lãng du, từ ngoại hình đến phong cách trình diễn, ở Hoàng Phương luôn toát lên một chất vị riêng có rất đặc biệt. Một con người có vẻ bề ngoài đơn giản nhưng tài năng lại không hề giản đơn chút nào. Tốt nghiệp thạc sĩ học viện âm nhạc quốc gia năm 2015, Hoàng Phương đã trải qua một quá trình đào tạo và rèn luyện hết sức chuyên nghiệp và bài bản từ một trong những trường nghệ thuật lớn nhất cả nước. Tài năng giống như một viên ngọc thô, nếu cứ để mãi trong tự nhiên, bào mòn bởi gió cát, sẽ không thể trở nên long lanh và tinh tế được. Nhưng nếu qua tay những người thợ chuyên nghiệp, nó sẽ trở nên vô cùng giá trị.
Hơn nữa, bắt đầu sự nghiệp âm nhạc nghệ thuật từ mãi những năm 2004-2005, Hoàng Phương gắn bó với những phím đàn như một người bạn đồng hành thân thiết, trải qua rất nhiều những sự kiện, tích lũy vô vàn những trải nghiệm bản thân. Cùng với hơn 2 năm kinh nghiệm giảng dạy bộ môn chuyên ngành, thầy cũng có được một số vốn kỹ năng sư phạm tốt để truyền tải kiến thức và cảm hứng cho các học viên.
Trong thời gian hoạt động nghệ thuật lâu dài của mình, Hoàng Phương từng là thành viên cốt cán của band nhạc New Song đình đám một thời. Ngoài ra, thầy cũng thường xuyên nhận được những lời mời biểu diễn tại những Nhà hàng, Khách sạn lớn, các chương trình, sự kiện trong Sài Gòn và nhiều tỉnh khác…
Những học viên từng được Hoàng Phương dẫn dắt đa số tìm đến Piano như một niềm đam mê sẵn có, thầy giáo cũng chia sẻ thầy rất thích giảng dạy những học sinh như vậy, không gượng ép, không khô cứng, cả thầy và trò cùng hòa hợp chia sẻ một sở thích chung.
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp thạc sĩ học viện âm nhạc quốc gia năm 2015</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>3km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>450.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>360.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
			 </tr>
			</tbody>
		 </table>
 
 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="hoangphuong">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Phạm Thế-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="280">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/ultimatemember/60/profile_photo-190.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="phamthe">Phạm Thế</h3>
				<p>Địa chỉ: ngõ 166 Miếu Đầm, Mễ Trì Thượng, Nam Từ Liêm, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">280.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">6</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more phamthe">
					<span class="read-more phamthe">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào tất cả các bạn! Mình là Phạm Thế, rất vui được làm quen với các bạn trên Hocgiday.com.
Âm nhạc là ngôn ngữ chung của nhân loại, là con đường gắn kết mọi người lại với nhau. Thiếu âm nhạc thì chúng ta sẽ mất đi một phần thú vị của cuộc sống. Mình rất yêu thích những tác phẩm cổ điển với các nhạc sĩ Mozart, Chopin, Bach, Beethoven, Kuhlau…; tác phẩm trữ tình lãng mạn của nhạc sĩ Richard Clayderman, Yiruma.
Với gần 8 năm học piano và 2 năm kinh nghiệm giảng dạy, học piano với Phạm Thế các bạn sẽ được đào tạo piano một cách bài bản, từ cơ bản đến nâng cao, từ dễ đến khó và có một nền tảng về âm nhạc vững chắc. Mục tiêu khi học piano với Phạm Thế là các bạn sẽ chơi được những tác phẩm piano và đệm hát được tác phẩm mà các bạn yêu thích.
Học piano với mình các bạn sẽ không thấy sự áp lực mà chúng ta sẽ học trên phương châm cùng trao đổi, cùng luyện tập và cùng tiến bộ. Với phương pháp giảng dạy dể hiểu, cô đọng kết hợp với sự nhiệt tình chắc chắn Phạm Thế sẽ mang lại cho các bạn những giờ học piano chất lượng ,đầy thù vị và bổ ích.
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp Đại học sư phạm nghệ thuật trung ương năm 2015</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>15km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>280.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>224.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
			 </tr>
			</tbody>
		 </table>
 
 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="phamthe">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Hoàng Trung-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="300">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/13-HN-HoangTrung.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="hoangtrung">Hoàng Trung</h3>
				<p>Địa chỉ: phố Trung Tựu, Bắc Từ Liêm, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">300.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">7</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more hoangtrung">
					<span class="read-more hoangtrung">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Nếu bạn muốn học cách bắt đầu chơi piano, tôi là lựa chọn tốt của bạn. Tôi tập trung vào âm giai và nhịp phách để giúp bạn tìm hiểu điểm bắt đầu của việc chơi piano. Tôi có thể đưa bạn qua bốn giai điệu đơn giản với bàn đạp, chơi từ một bản nhạc chính, và thậm chí một chút về chuyển giọng. Một lượng nhỏ lý thuyết âm nhạc sẽ được thêm vào bài học của bạn.
Tôi có thể cho bạn thấy những cách để trau dồi kỹ năng thông qua các chiến lược luyện tập. Ngoài ra, tôi có thể dạy cho bạn cách giữ cho nhạc cụ của mình hoạt động tốt nhất. Tôi muốn dạy cho bạn những gì bạn muốn biết và thêm một chút để mở rộng khả năng của bạn. Tôi mong sẽ nhận được hồi âm sớm từ các bạn.					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 4 Học viện âm nhạc quốc gia</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>5km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>300.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>240.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
			 </tr>
			</tbody>
		 </table>
 
 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="hoangtrung">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Vũ Nam-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="250">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/15-HN-VuNam.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="vunam">Vũ Nam</h3>
				<p>Địa chỉ: Đình Quán, Bắc Từ Liêm, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">250.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">7</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more vunam">
					<span class="read-more vunam">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Xin chào tất cả các bạn!
Mình là Vũ Văn Nam. Nhà soạn nhạc thiên tài người Đức Ludwig van Beethoven đã nói:” m nhạc làm trái tim của người nam sôi sục và khóe mắt của người nữ đẫm lệ”, đối với mình âm nhạc chính là tâm hồn, là cảm xúc, là tình yêu, là ước mơ và đã trở thành một phần của cuộc sống. Mình đặc biệt yêu thích bộ môn piano. Vì cây đàn piano có khả năng diễn tả rất phong phú sự chuẩn xác về cao độ, vẻ đẹp của âm thanh biểu hiện được nhiều loại sắc thái, sự tinh tế của phím đàn, sự thuận lợi trong việc kết hợp các chồng âm cùng lúc tạo nên màu sắc hòa âm có thể thay thế dàn nhạc. Thần tượng âm nhạc của mình là Mozart bởi âm nhạc của ông khiến mình cảm nhận được tất cả những tình cảm đẹp đẽ, tinh tế nhất. Điều hạnh phúc lớn nhất trên con đường giảng dạy âm nhạc của mình là truyền cho học sinh cảm hứng và tình yêu cũng như khơi dậy trong học sinh niềm đam mê đối với âm nhạc. Có câu nói:”Hãy mang lại cho bé niềm yêu thương ngọt ngào từ những giai điệu bất hủ, biết đâu bạn sẽ có một thiên tài âm nhạc trong tương lai. Trong mỗi một giờ học, học sinh sẽ được học trong một không khí vui vẻ, thoải mái giống như một buổi chia sẻ, bày tỏ cảm xúc giữa mình với học sinh. Mình đặc biệt yêu thích các bạn nhỏ. Có những bạn rụt rè, nhút nhát nhưng sau một số buổi học sức mạnh của âm nhạc đã giúp các bạn đó cởi mở, gần gũi với mọi người hơn. Hình ảnh các bạn nhỏ say sưa bên phím đàn đã trở thành nguồn động lực to lớn đối với mình. Trong quá trình giảng dạy chính các bạn, những học sinh yêu quý, các bạn nhỏ đã dạy mình cách để trở thành một giáo viên hoàn thiện hơn. Vì thế hãy cho mình cơ hội giúp các bạn khám phá thế giới âm nhạc rộng lớn, mới lạ và thú vị nhé!
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 2 Đại học sư phạm nghệ thuật trung ương</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>10km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>250.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p></p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="vunam">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Phạm Duy-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="300">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/6-HN-LuongVanTuy.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="phamduy">Phạm Duy</h3>
				<p>Địa chỉ: An Hòa, Hà Đông, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">300.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">3</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more phamduy">
					<span class="read-more phamduy">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Năm 2014, Duy thi đỗ với vị trí Á khoa trường ĐHSP nghệ thuật Trung Ương chuyên ngành Thanh Nhạc Biểu Diễn . Khi vào học được thầy dạy chuyên ngành Thanh Nhạc hướng cho đi theo học Thanh Nhạc chuyên nghiệp hơn . Năm 2015 thi đỗ hệ đại học HVANQGVN học lớp: PGS. TS Trần Ngọc Lan nguyên phó trưởng khoa thanh nhạc. Trong khi học tập tại HVANQGVN ngoài đi hát còn đi dạy thêm các trung tâm âm nhạc về bộ môn Thanh Nhạc & Piano. Hàng năm cũng nhận dạy và ôn luyện cho các em ôn thi vào các trường đại học, cao đẳng về âm nhạc tại thành phố Hà Nội và đạt kết quả cao.
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 4 Học viện âm nhạc Quốc gia</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>10km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>300.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>240.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="phamduy">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Nguyễn Hưng-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Duc-Hung.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="nguyenhung">Nguyễn Hưng</h3>
				<p>Địa chỉ: Huỳnh Thúc Kháng, Hà Đông, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price"></p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">5</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyenhung">
					<span class="read-more nguyenhung">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Nguyễn Đức Hưng học ở Đại Học VHNT Quân Đội, có kinh nghiệm giảng dạy trên 2 năm và đã từng đi thi các cuộc thi lớn nhỏ. Dòng nhạc sở trường của Hưng là thính phòng, trữ tình.
Hưng nhận dạy thanh nhạc cho các bạn đam mê ca hát. Trình độ dạy từ cơ bản đến nâng cao theo phuơng pháp hiện đại được đúc kết từ cổ điển. Học sinh đến với lớp học của Hưng sẽ được điều chỉnh cách phát âm, nhấn nhá, luyến láy sao cho truyền tải cảm xúc bài hát một cách trọn vẹn nhất.
Các phương pháp tập chủ đạo trong cách dạy của Hưng
1 / điều chỉnh làn hơi , tập thở bụng và dùng hơi bụng áp dụng vào ca hát
2 / khẩu hình miệng phù hợp với các âm tự a, u, i, ê, ơ, o...
3 / điều chỉnh vị trí âm thanh đạt hiệu suất cao nhất
4 / tập điều khiển âm lượng giọng, phóng to, thu nhỏ, độ vang, phóng âm, nảy âm, rung...
5 / hướng dẫn tập giọng pha, phá quãng để hát những nốt cao hơn với sự cố gắng ít hơn.
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 2 Đại Học Văn Hóa nghệ thuật quân đội</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>0km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p></p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>150.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenhung">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Nguyễn Phương-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="300">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/3-HN-NgoTuanTu.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="nguyenphuong">Nguyễn Phương</h3>
				<p>Địa chỉ: Ngã Tư Sở, Thanh Xuân, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">300.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">8</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyenphuong">
					<span class="read-more nguyenphuong">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao - Chuyên sâu</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Với 5 năm kinh nghiệm giảng dạy âm nhạc tuyệt vời, tôi chia sẻ những món quà và tài năng của tôi với những người cũng muốn thể hiện mình qua âm nhạc. Tôi tin rằng âm nhạc là ngôn ngữ trên toàn thế giới và do đó không có ý định để dập tắt bất kỳ học sinh theo phong cách riêng biệt nào. Thay vào đó tôi cho phép học sinh học từ những bài học và kỹ thuật đã học và cùng nhau tìm ra cách để thích ứng với phong cách đó để nghe được âm thanh 'bức tranh âm nhạc' tốt nhất của họ.
Tôi mong muốn học viên thực hành bên ngoài lớp học để mỗi bài học là một quá trình xây dựng. Tôi khá thoải mái nhưng nghiêm túc về tiến độ. Tôi thích tận hưởng các bài học với bạn và xem bạn phát triển. Sau 3 hoặc 6 tháng học viên sẽ biết cách thở đúng cách và hiệu quả. Học sinh sẽ biết cách kiểm soát và sử dụng giọng điệu/cây đàn của họ - hiểu được các cấp độ khác nhau của tiếng nói, giọng nói...
Tôi thích làm việc với các học viên trẻ hơn ở trình độ bắt đầu hoặc trung cấp, hơn là học viên có chuyên môn cao.					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp Đại học sư phạm nghệ thuật trung ương</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>10km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>300.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>240.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			</tbody>
		 </table>
 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenphuong">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Nguyên Thắng-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="200">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Nguyen-Thang.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="nguyenthang">Nguyên Thắng</h3>
				<p>Địa chỉ: Nguyễn Trãi, Thanh Xuân, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">200.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">6</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyenthang">
					<span class="read-more nguyenthang">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào các bạn, mình là Nguyên Thắng. Mình tiếp xúc với Piano và thanh nhạc từ năm 2005. Các bài học của mình sẽ mang tính khuyến khích và hiệu quả. Chúng ta sẽ làm việc cùng nhau để giúp bạn đạt được mục tiêu và tiếp cận giáo dục âm nhạc trọn vẹn, bất kể tuổi tác hay nền tảng nhạc. 
Học sinh học piano với mình sẽ không chỉ học những bài hát mà họ thích chơi, mà còn học kỹ thuật thích hợp, đọc sách vở, lý thuyết âm nhạc, và đào tạo tai nghe nhạc. Mình chỉnh sửa từng bài học dựa trên sở thích và mục tiêu âm nhạc của học sinh. Mình muốn cung cấp cho học sinh một nền tảng vững chắc về kỹ thuật và lý thuyết để giúp học sinh cảm thấy thoải mái khi chơi piano và tiến bộ với tốc độ ổn định.					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 3 Đại học sư phạm nghệ thuật trung ương</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>10km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>160.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			</tbody>
		 </table> 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenthang">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Trần Đạt-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="300">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/ultimatemember/18/profile_photo-190.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="trandat">Trần Đạt</h3>
				<p>Địa chỉ: Nhân Hòa, Thanh Xuân, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">300.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">5</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more trandat">
					<span class="read-more trandat">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Tôi có đam mê chia sẻ kiến thức âm nhạc với người khác và tin rằng khía cạnh quan trọng nhất của việc dạy nhạc là tạo ra một môi trường khuyến khích, vui vẻ, và cá nhân hoá cho mỗi học sinh. Tôi có hơn 4 năm kinh nghiệm giảng dạy piano và thanh nhạc cho học sinh ở mọi lứa tuổi và nền nhạc.
Trên hết, bài học của chúng ta sẽ là về việc học những gì bạn muốn học, bất kể thể loại nào. Chương trình giảng dạy cho các bài học của chúng ta sẽ đúc kết từ nhiều phương pháp. Chúng bao gồm lý thuyết âm nhạc, đào tạo tai, bài tập đọc ký xướng âm, kỹ thuật, kỹ năng ứng tác và sáng tác.
Hãy gửi cho tôi một tin nhắn nếu bạn có bất kỳ câu hỏi nào hoặc nếu bạn không thấy một lịch học phù hợp với bạn! Lịch làm việc của tôi thay đổi thường xuyên và thường linh hoạt, vì vậy chúng ta có thể cùng nhau thống nhất.					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp Học viện âm nhạc Quốc gia 2008 và Đại học Văn Hóa nghệ thuật trung ương 2013</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>8km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>300.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>240.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
			 </tr>
			</tbody>
		 </table>
 
 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="trandat">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Nguyễn Huế-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="250">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/7-HN-PhuongThiHue.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="nguyenhue">Nguyễn Huế</h3>
				<p>Địa chỉ: ngõ 192 Lê Trọng Tấn, Thanh Xuân, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">250.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">7</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyenhue">
					<span class="read-more nguyenhue">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Xin chào, tôi là Nguyễn Huế. Học sinh của tôi có thể mong đợi để nâng cao kỹ năng của mình và bắt đầu thưởng thức âm nhạc nhiều hơn khi chúng tôi làm việc cùng nhau.
Tôi tin rằng việc học nhạc là một trải nghiệm vui và thú vị. Tuy nhiên bạn cũng cần phải nghiệm túc và tập trung. Tôi có thể chỉ dạy các kỹ thuật, cách diễn đạt khác nhau và sẽ luôn hướng dẫn dựa trên tốc độ tiếp thu của bạn. Tuy nhiên, tôi cảm thấy điều quan trọng là học sinh tư duy một cách phản biện và tự mình thử giải quyết vấn đề trước. Học nhạc là sự hợp tác giữa giáo viên và học sinh. Tôi hy vọng rằng thông qua các bài học của tôi, học sinh sẽ trở nên tự tin hơn với tư cách một nhạc công.					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp Đại học sư phạm nghệ thuật trung ương năm 2011</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>7km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>250.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
			 </tr>
			</tbody>
		 </table>
 
 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenhue">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Vũ Nhàn-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="250">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/24-HN-VuNhan-1.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="vunhan">Vũ Nhàn</h3>
				<p>Địa chỉ: Thụy Khuê, Tây Hồ, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">250.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">8</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more vunhan">
					<span class="read-more vunhan">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản - Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào các học viên của Học gì đây! Tên tôi là Vũ Nhàn. Tôi đã dạy piano trong hơn 4 năm. Trong những bài học đầu tiên, bạn sẽ có thể đọc nhạc và chơi các bài hát đơn giản và theo thời gian bạn có thể chơi các bài hát theo bất kỳ thể loại và phong cách nào mà bạn chọn. Tôi chuyên dạy piano cổ điển, thường sử dụng sách Piano Adventures, nhưng tùy thuộc vào độ tuổi và độ khó của các tiết mục mà giáo trình sẽ được điều chỉnh! Tôi thích làm việc với học sinh ở mọi lứa tuổi và trình độ học vấn và tôi không thể đợi để gặp bạn!					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 4 Đại học văn hóa nghệ thuật quân đội</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>2km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>250.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			</tbody>
		 </table>
 
 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="vunhan">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Nguyễn Thu Phương-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="200">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/25-HN-NguyenThuPhuong.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="nguyenthuphuong">Nguyễn Thu Phương</h3>
				<p>Địa chỉ: ngõ 108 Nghi Tàm, Tây Hồ, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">200.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">1</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyenthuphuong">
					<span class="read-more nguyenthuphuong">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Đến với Thu Phương, học sinh sẽ được cung cấp một nền tảng vững chắc về kỹ thuật piano nhằm hướng tới việc biểu diễn - Tôi có thể chuẩn bị cho các trình độ đơn giản hoặc cho trình độ nâng cao. Học sinh sẽ thấy sự cải thiện kỹ năng và trình diễn âm nhạc rõ ràng với sự hướng dẫn của tôi. Tôi muốn học sinh của tôi có được mọi cơ hội để biểu diễn. Tôi cũng thường tổ chức các buổi biểu diễn và hòa nhạc cho mục đích này.					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 3 Đại học sư phạm nghệ thuật trung ương</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>3km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>160.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			</tbody>
		 </table>
 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenthuphuong">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Tạ Thị Anh-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="200">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/28-HN-TaThiAnh.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="tathianh">Tạ Thị Anh</h3>
				<p>Địa chỉ: Nguyễn Trường Tộ, Ba Đình, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">200.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">3</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more tathianh">
					<span class="read-more tathianh">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Tạ Thị Anh, tốt nghiệp Cao đẳng Nghệ thuật Hà Nội khoa Keyboard, sau đó tiếp tục Sinh viên năm 3 Đại học văn hóa nghệ thuật quân đội. Tạ Thị Anh đi vào hoạt động nghệ thuật, gắn bó với cây đàn Piano từ những năm 2007-2008, tìm hiểu, học tập, rèn luyện, biểu diễn thường xuyên để nâng cao năng lực và trình độ. 
Với 1 năm dạy tại nhà, những học viên của Tạ Thị Anh chủ yếu là những bạn nhỏ lần đầu tiếp xúc với cây đàn, học từ những điều cơ bản, sơ khai nhất. Thầy tỏ ra rất có duyên với những lớp học này, nhận được rất nhiều sự yêu quý của học sinh và phản hồi tích cực từ phụ huynh. Hiện tại, thầy cũng đang là giáo viên sở hữu những học sinh Piano tài năng nhất Học Gì Đây?.
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 3 Đại học văn hóa nghệ thuật quân đội</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>2km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>160.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
			 </tr>
			</tbody>
		 </table>
 
 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="tathianh">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Ngô Mai Phương-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="200">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/30-HN-NgoMaiPhuong.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="ngomaiphuong">Ngô Mai Phương</h3>
				<p>Địa chỉ: Kim Ngưu, Hai Bà Trưng, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">200.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">3</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more ngomaiphuong">
					<span class="read-more ngomaiphuong">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div> <!-- End Profile row -->

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p>Cơ bản</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Ngô Mai Phương, tốt nghiệp Cao đẳng Nghệ thuật Hà Nội khoa Keyboard, sau đó tiếp tục Sinh viên năm 3 Học viện âm nhạc Quốc gia Việt Nam. Ngô Mai Phương đi vào hoạt động nghệ thuật, gắn bó với cây đàn Piano từ những năm 2007-2008, tìm hiểu, học tập, rèn luyện, biểu diễn thường xuyên để nâng cao năng lực và trình độ. 
Với 2 năm dạy tại nhà, những học viên của Ngô Mai Phương chủ yếu là những bạn nhỏ lần đầu tiếp xúc với cây đàn, học từ những điều cơ bản, sơ khai nhất. Thầy tỏ ra rất có duyên với những lớp học này, nhận được rất nhiều sự yêu quý của học sinh và phản hồi tích cực từ phụ huynh. Hiện tại, thầy cũng đang là giáo viên sở hữu những học sinh Piano tài năng nhất Học Gì Đây?.
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 3 Học viện âm nhạc Quốc gia Việt Nam</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p>4km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>160.000 đ/ 60 phút</p>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
			<thead>
			 <tr>
				<th></th>
				<th>T2</th>
				<th>T3</th>
				<th>T4</th>
				<th>T5</th>
				<th>T6</th>
				<th>T7</th>
				<th>CN</th>
			 </tr>
			</thead>
			<tbody>
			 <tr>
				<th>Sáng</th>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			</tbody>
		 </table>
 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="ngomaiphuong">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 


<div class="container">
	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					
					<h3 class="modal-title" id="tName"></h3> 
				</div>
				<div class="modal-body">
					<form action="sendmail.php" method="POST" role="form">
						<div class="form-group">
							<input type="text" name="fullname" class="form-control mailing-info" placeholder="Tên đầy đủ của bạn" required="required">
						</div>
						<div class="form-group">
							<input type="text" name="tel" class="form-control mailing-info" placeholder="Số điện thoại" required="required">
						</div>
						<div class="form-group">
							<input type="hidden" name="teacher" id="chosen-teacher" class="form-control">
							<input type="hidden" name="subject" value="piano">
						</div>
						<div class="modal-footer">
							<button name="send" type="submit" class="btn btn-primary btn-submit">Gửi đi</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



</div> <!-- End container -->

<!-- jQuery -->
<script
	src="https://code.jquery.com/jquery-3.2.1.js"
	integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	crossorigin="anonymous">
</script>
<!-- JQuery UI -->
<script src="dist/js/jquery-ui.smoothness/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>	
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- MY script -->
<script src="dist/js/app.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>
