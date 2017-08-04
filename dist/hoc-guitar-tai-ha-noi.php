<?php session_start(); ?>
<?php $_SESSION['subject'] = ''; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tìm giáo viên Guitar tại nhà hoặc tại lớp | Học Gì Đây?</title>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5SQR968');</script>
	<!-- End Google Tag Manager -->

	<!-- Font Awesome CDN -->
	<script src="https://use.fontawesome.com/d5eddf6cb3.js"></script>

	<!-- Bootstrap CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<!-- JQuery UI -->
	<link rel="stylesheet" type="text/css" href="dist/js/jquery-ui.smoothness/jquery-ui.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dist/css/style.css">

	<style type="text/css" media="screen">

	</style>
	<!-- Hotjar Tracking Code for https://hocgiday.com -->
	<script>
		(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:569211,hjsv:5};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
	</script>


	<!-- Google Analytics tracking code -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-85357957-3', 'auto');
		ga('send', 'pageview');

	</script>
		
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SQR968"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="container-fluid sticky" id="contact">
	<div class="row">
		<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 col-md-offset-1 contact">
			<i class="fa fa-phone fa-2x"></i>&nbsp;&nbsp;&nbsp;
			<span class="hgd-heading-highlight">Giải đáp thắc mắc: <a href="tel:0944852366">094 485 23 66</a></span>
		</div>
		
	</div>
</div>

<div class="container-fluid hgd-header">
	<div class="text-center hgd-header">
		<h1 id="h1">BẠN MUỐN HỌC GUITAR?</h1>
		<h3 id="h3">LỰA CHỌN GIỮA HÀNG CHỤC GIÁO VIÊN GUITAR TẠI HÀ NỘI</h3>
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


<!-- Profile List -->
<div class="container hgd-container">

	<!-- Profile row: Đinh Mạnh Hà-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="120">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Ha-Dinh.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="dinhmanhha">Đinh Mạnh Hà</h3>
				<p>Địa chỉ: Chùa Bộc, quận Đống Đa</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">120.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">3</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more dinhmanhha">
					<span class="read-more dinhmanhha">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Mình bắt đầu tiếp xúc với âm nhạc khoảng cuối năm 2014, mình đã tốt nghiệp Đại học Phương Đông chuyên ngành Kiến Trúc tuy nhiên âm nhạc đã trở thành một phần không thể thiếu, nên mình đã quyết tâm theo đuổi âm nhạc. Mình bắt đầu giảng dạy từ 2016. Thần tượng âm nhạc của mình là Frank Sinatra, Paul Gilbert. Dòng nhạc ưa thích và theo đuổi: Rock, Metal, Pop. Phương pháp giảng dạy của mình sẽ phù hợp với từng học sinh khác nhau, từ đó mình sẽ đưa ra giáo trình phù hợp nhất. Ngoài ra mình còn đang là thành viên của ban nhạc School of rock. Mình cũng chơi bass và đã tham gia biểu diễn tại các quán cafe và nhiều sự kiện lớn nhỏ khác nhau như Rock Fest FPT, biểu diễn tại Bar +84,...
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Đang học hệ Trung Cấp Đại học văn hóa nghệ thuật quân đội</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/wq_O0eTHqyk" frameborder="0" allowfullscreen></iframe>
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
						<p>120.000 đ/ 60 phút</p>
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
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td class="busy"></td>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="dinhmanhha">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Hoàng Tất Đạt-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="150">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Tat-Dat.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="hoangtatdat">Hoàng Tất Đạt</h3>
				<p>Địa chỉ: Tam Trinh, quận Hoàng Mai</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">150.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">10</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more hoangtatdat">
					<span class="read-more hoangtatdat">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Mình là Đạt. Nói về khoảng thời gian mình bắt đầu thực sự thích nhạc thì chắc là từ cấp 3. Mình chịu ảnh hưởng rất nhiều của ban nhạc Bức Tường. Vì vậy mình thi vào trường xây dựng. Và hiện tại cũng là chủ nhiệm clb Guitar Đại học xây dựng. Mình bắt đầu giảng dạy khoảng 2 năm trước, tức là khoảng năm 2 đại học. Dòng nhạc sở trường của mình có lẽ là Pop, Rock, Metal. Thần tượng thì chắc chắn là ban nhạc The wall rồi, và đặc biệt là anh Trần Tuấn Hùng. Mình rất thích những câu guitar và phong cách biểu diễn của anh. Ngoài ra, mình cũng nghe nhạc của My Chemical Romance, Slipknot,… Trong quá trình giảng dạy, mình sẽ cố gắng truyền đạt một cách dễ hiểu nhất để sau khi không có giáo viên học sinh có thể tự học được một cách dễ dàng. . Đến với lớp học của mình, học sinh chỉ cần chuẩn bị đàn và tâm trạng tốt. Mình ngoài công việc hiện tại là chủ nhiệm clb Guitar Xây dựng, mình còn là bassist của ban nhạc Silencer và cũng tham gia biểu diễn ở các quán café khá nhiều. Sở trường của mình là đệm hát.					</p>
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
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/NZ9GU6svtOI" frameborder="0" allowfullscreen></iframe>
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
						<p>150.000 đ/ 60 phút</p>
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
				<td></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="hoangtatdat">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Phan Thi Thu Phương-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="150">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Thu-Phuong.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="phanthithuphuong">Phan Thi Thu Phương</h3>
				<p>Địa chỉ: Thượng Thanh, quận Long Biên</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">150.000 đ/ 90 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">4</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more phanthithuphuong">
					<span class="read-more phanthithuphuong">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Chào các bạn học sinh của hocgiday.com. Mình là Phan Phương, bạn bè vẫn hay gọi là Phương Phan hay “cô giáo Phương Phan”. Mình tiếp xúc với âm nhạc từ khá sớm, đó là khoảng cấp 2, nhưng mình mới thực sự chơi đàn được 4 năm. Mình không học qua trường lớp nào, nhưng mình có theo học 1 năm tại S.O.R. Sau một khoảng thời gian cảm thấy tự tin với kiến thức, mình bắt đầu việc giảng dạy, đến nay đã khoảng 2 năm. Thần tượng âm nhạc của mình là Neil Zaza, MCR,… Mình yêu cầu với mỗi học sinh khá đơn giản là đàn và thái độ tự giác luyện tập. Thành tích của mình là 3 show của School Of Rock, 2 chương trình The Avengers, các chương trình nhỏ ở trường, câu lạc bộ và vài show nhỏ khác.					</p>
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
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/A5icBJpMyzc" frameborder="0" allowfullscreen></iframe>
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
						<p>150.000 đ/ 90 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>100.000 đ/ 90 phút</p>
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
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
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
				<td class="busy"></td>
			 </tr>
			</tbody>
		 </table>
 
 
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="phanthithuphuong">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Nguyễn Hải Minh-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="220">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Hai-Minh.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="nguyenhaiminh">Nguyễn Hải Minh</h3>
				<p>Địa chỉ: Lò Đúc, quận Hai Bà Trưng</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">220.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">7</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyenhaiminh">
					<span class="read-more nguyenhaiminh">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Cơ bản, Nâng cao, Chuyên sâu</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Mình là Minh, mọi người hay gọi là Minh Tốc. Mình Bắt đầu tiếp xúc với âm nhạc từ khá sớm, và tự tìm hiểu và học guitar đến nay đã gần 10 năm, rất tự tin về chuyên môn của bản thân, có thể dạy được đa dạng trình  độ từ cơ bản đến nâng cao và chuyên sâu. Mình vừa tốt nghiệp Cao đẳng nghệ thuật Hà Nội hệ trung cấp. Hiện đang học hệ đại học nhạc viện. Mình bắt đầu giảng dạy từ năm 2015. Dòng nhạc của mình là Jazz, Pop, Country, Blue, Rock, Metal,… Còn thần tượng thì có thể kể tới rất nhiều đó là Gurthie Govan, Dream Theater. Trong giờ học, mình muốn học sinh nghiêm túc và cần chuẩn bị đàn trước khi tới lớp. Nói về những hoạt động cá nhân, hiện mình thành viên ban nhạc Maybug và Sweepy, và mình đã có nhiều kinh nghiệm trong làm việc với VTV và công việc Studio, và việc sáng tác âm nhạc,…					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Đã tốt nghiệp hệ Trung Cấp Cao đẳng nghệ thuật Hà Nội</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/7b6QyJf324s" frameborder="0" allowfullscreen></iframe>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenhaiminh">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Vũ Hoàng-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="220">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Vu-Hoang.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="vuhoang">Vũ Hoàng</h3>
				<p>Địa chỉ: Thái Hà, quận Đống Đa</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">220.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">3</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more vuhoang">
					<span class="read-more vuhoang">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Cơ bản, Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Nick name của mình là Hoang Vu. Sở trường của mình là FingerStyle và đệm hát nâng cao. Thần tượng của mình là Tommy Emmanuel . Còn nói về dòng nhạc thì mình thích nhiều, kể cả EDM, nhưng hiện tại mình đang chơi có thể kể tới đó là Pop, Country, Blue,… Hoạt đọng thì nhiều lắm, mình tham gia biểu diễn nghệ thuật khá nhiều, có thể kể tới đó là Thành viên ban nhạc country Sweepy, chuyên gia hòa âm phối khí tại Katana Records. Đẫ đánh nhạc tại nhiều quán cafe và biểu diễn nhiều sự kiện lớn nhỏ như Moonsoon Streetshow Festival…. Đến với lớp học của mình, mình sẽ dạy các bạn từ cơ bản đến nâng cao và tư duy đệm hát dùng hòa âm đúng cách.					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Đang học hệ Trung Cấp Đại học văn hóa nghệ thuật quân đội</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/KzXEQhttYfk" frameborder="0" allowfullscreen></iframe>
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
				<td class="busy"></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td></td>
				<td class="busy"></td>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="vuhoang">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Nguyễn Trung Thành-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="220">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Trung-Thanh.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="nguyentrungthanh">Nguyễn Trung Thành</h3>
				<p>Địa chỉ: Trần Khát Chân, quận Hai Bà Trưng</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">220.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">2</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyentrungthanh">
					<span class="read-more nguyentrungthanh">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Cơ bản, Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Mình là Trung Thành. Hiện nay mình là nhóm trưởng của Vodka band!, mình cùng band đạt giải nhất trong chương trình TALENT STAR 2015, mình cũng đã cùng VodKa band được ban tổ chức VTV cuộc thi SV 2016 hỗ trợ chơi nhạc cho chương trình. Được cùng làm chương trình của vtv ý nghĩa điều ước thứ 7 số 88 về âm nhạc. Nói về quá trình mình tiếp xúc với âm nhạc thì dài lắm, đó quả là một quyết định bước ngoặt cuộc đời mình. Sau khi tốt nghiệp ĐH xây dựng, mình quyết định thi vào Cao đẳng nghệ thuật Hà Nội để theo đuổi âm nhạc. Và cho đến giờ mình vẫn coi đó là một quyết định đúng đắn. Kinh nghiệm thì mình đã dạy tại nhiều trung tâm, và có lớp riêng, tuy nhiên mình rất hài lòng về cách làm việc của hocgiday.com. Dòng nhạc sở trường là Pop và đệm hát. Đến với lớp học của mình, mình sẽ chỉ cho các bạn cách để đệm hát tốt và nâng cao chúng lên để phát triển tư duy.					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Đang học hệ Trung cấp Cao đẳng nghệ thuật Hà Nội</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/LfHtWQ0ZlUo" frameborder="0" allowfullscreen></iframe>
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
						<p>220.000 đ/ 60 phút</p>
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
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyentrungthanh">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Đỗ Đức Nhàn-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="220">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/ultimatemember/5/profile_photo-190.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="doducnhan">Đỗ Đức Nhàn</h3>
				<p>Địa chỉ: Nguyễn Trãi, quận Thanh Xuân</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">220.000 đ/ 90 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">7</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more doducnhan">
					<span class="read-more doducnhan">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Chào các bạn! Khi đã đọc đến những dòng này thì chắc giữa chúng ta cũng đã có một ấn tượng nào đó. Profile bên trên khá là cơ bản, những điều mình chia sẻ sau đây giúp cho các bạn dễ dàng hơn khi quyết định chúng ta có gặp nhau và làm việc với nhau hay không nhé! Trong khoảng 2 năm, mình đã từng dạy khá là nhiều bạn học sinh. Các bạn đến với môn học, đến với nhạc cụ với nhiều lí do khác nhau, nhưng phần lớn đến từ sở thích cá nhân. Có những bạn thích và rất có năng khiếu, học khá nhanh và tiếp thu rất tốt. Đương nhiên các bạn ấy sẽ nhanh chóng chơi được nhạc cụ mình học và có thể tự đệm hát hay đệm đàn cho người khác hát. Những trường hợp khác, qua nhiều lần tiếp xúc mình cũng đã đưa ra được phương pháp hợp lý giúp các bạn cơ bản nắm được các quy tắc và hiểu một phần cách chơi nhạc cụ. Mình cũng đã soạn được giáo trình guitar cơ bản cho riêng việc giảng dạy của bản thân, và đang áp dụng nó trong khi dạy cho học sinh. Chỉ là cơ bản thôi nhé, chúng ta học từ cơ bản, mà đối với nhạc cụ đặc biệt là guitar thì phần cơ bản đã chiếm rất nhiều rồi. Tùy từng độ tuổi và năng khiếu mà hiệu quả học sẽ khác nhau. Trên hết còn do nỗ lực và sự chăm chỉ đến từ phía người học. Mình khá là cố chấp trong việc không công nhận học sinh lười học, và chân thành khuyên các bạn, trước khi học một thứ gì đó hãy xác định mình sẽ chăm chỉ, với những gì đòi hỏi năng khiếu thì sự chăm chỉ ấy phải gấp vài chục lần bình thường. Cũng không quá nặng nề như ôn thi đâu, nhưng chăm chỉ là cần thiết nhé. Thật ra nếu như bạn thích, và chăm chỉ thì đàn guitar hay các loại nhạc cụ cũng không quá thách thức với bất cứ ai. Mình tin là giờ học nhạc sẽ khác và thú vị hơn nhiều so với học văn hóa. Đặc biệt là với những bạn nhỏ tuổi thì học nhạc là cách khá hữu hiệu giúp các em bớt căng thẳng với việc học trên lớp. Mình nhận thấy các em bộc lộ khá nhiều, rất dễ thương, khác so với bình thường. Chúng ta sẽ làm việc trên tinh thần thoải mái nhất có thể. Mong rằng mình có thể là người đem đến nhiều điều thú vị, và cùng đồng hành với các bạn. Chúng ta đến với âm nhạc không phải để biểu diễn, để thể hiện điều gì to tát, âm nhạc là để mọi người vui vẻ và thể hiện cảm xúc dễ dàng hơn. Chúc các bạn thành công, và hẹn gặp lại!					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Đang học hệ Đại học Đại học Sư phạm nghệ thuật Trung ương</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/7_5-ZlF7pNQ" frameborder="0" allowfullscreen></iframe>
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
						<p>220.000 đ/ 90 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>220.000 đ/ 90 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="doducnhan">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Lê Kinh Anh-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="250">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Kinh-Anh.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="lekinhanh">Lê Kinh Anh</h3>
				<p>Địa chỉ: Lý Nam Đế, quận Hoàn Kiếm</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">250.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">12</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more lekinhanh">
					<span class="read-more lekinhanh">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Cơ bản, Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào các bạn, mình là Lê Kinh Anh. Tâm sự chút, thì trước khi theo nhạc chuyên nghiệp, mình đã tốt nghiệp Đại Học Ngoại Thương. Nhưng mình đã lựa chọn âm nhạc là con đường mình sẽ đi. Với âm nhạc mình đã được tiếp xúc từ bé, tuy nhiên phải đến khi theo học S.O.R, mình mới thực sự nghiêm túc về âm nhạc và quyết tâm theo đuổi nó. Dòng nhạc yêu thích của mình phải kể đến là Metal. Metal đã đưa mình đến với âm nhạc. Tuy nhiên sau đó, mình có tìm hiểu và có thêm nhiều lựa chọn khác nữa, có thể kể tới là Jazz và Blue. Thần tượng thì có Eric Johnson, John Petrucci. Phương châm trong giảng dạy của mình thì :”Mình cho rằng đối với bất kể mục đích nào của học sinh thì đều cần có thái độ nghiêm túc đối với việc học. Mình nghĩ chỉ cần kiên trì và chăm chỉ là 2 yếu tố quan trọng sẽ gắn với phương pháp giảng dạy của mình”.Về các hoạt động thì mình đã tham gia 3 show của S.O.R và hiện đang biểu diễn tại bar +84, buctuong 1995 story,... và nhiều sự kiện lớn nhỏ khác.					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Đang học hệ Trung Cấp Đại học văn hóa nghệ thuật quân đội</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/B_tXNg6BfUE" frameborder="0" allowfullscreen></iframe>
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
				<td></td>
				<td></td>
				<td></td>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="lekinhanh">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Nguyễn Anh Đức-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="250">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Anh-Duc.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="nguyenanhduc">Nguyễn Anh Đức</h3>
				<p>Địa chỉ: Hồ Văn Quán, quận Hà Đông</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">250.000 đ/ 90 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">5</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyenanhduc">
					<span class="read-more nguyenanhduc">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Cơ bản, Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>					</p>
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
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/rlkLt-I1YJg" frameborder="0" allowfullscreen></iframe>
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
						<p>250.000 đ/ 90 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 90 phút</p>
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
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td class="busy"></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="busy"></td>
				<td></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenanhduc">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Nguyễn Hải Đức-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="250">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Hai-Duc.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="nguyenhaiduc">Nguyễn Hải Đức</h3>
				<p>Địa chỉ: Xuân Thủy, quận Cầu Giấy</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">250.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">9</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyenhaiduc">
					<span class="read-more nguyenhaiduc">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Cơ bản, Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Đang học hệ Trung Cấp Đại học văn hóa nghệ thuật quân đội</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/uDJ5UyUOiXQ" frameborder="0" allowfullscreen></iframe>
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
				<td class="busy"></td>
				<td></td>
				<td></td>
			 </tr>
			 <tr>
				<th>Chiều</th>
				<td></td>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenhaiduc">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Vũ Anh-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="250">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Vu-Anh.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="vuanh">Vũ Anh</h3>
				<p>Địa chỉ: Thạch Bàn, quận Long Biên</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">250.000 đ/ 90 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">2</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more vuanh">
					<span class="read-more vuanh">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Xin chào! Tôi là Vũ Anh, nhưng bạn bè tôi thường gọi tôi là Vũ, nên các bạn cũng gọi tôi như vậy cho thoải mái nhé. Trước đây tôi có theo học cả Đại học Văn hóa Hà Nội và Đại học Sư phạm Nghệ thuật Trung ương, tuy nhiên cả 2 trường đều không đem lại cho tôi những cảm hứng tôi mong muốn khi chơi guitar. Chỉ đến khi thực sự tiếp xúc với môi trường âm nhạc chuyên nghiệp của Học viện âm nhạc Quốc gia, tôi mới cảm thấy niềm hứng khởi âm nhạc lớn đến vậy. Và quá trình lựa chọn các cơ sở theo học của tôi cũng kết thúc từ đó, khi tôi chỉ học nhạc tại Học viện Âm nhạc quốc gia. Có lẽ tôi tìm ra được con đường của mình lâu hơn người khác.
Cũng chính vì tôi đã mất nhiều thời gian như vậy để tìm ra được âm thanh đúng nhất, tôi có thể rút ngắn quá trình của bạn để xác định được tiếng đàn của mình. Âm hanh chính là âm nhạc tự nhiên nhất trong cuộc sống, và bạn sẽ chỉ yêu âm nhạc khi bạn yêu từng âm thanh của cuộc sống quanh mình. Có thể là tiếng rao của người đi rong, tiếng lách cách của ly cafe buổi sớm,  hay tiếng lộp bộp mưa rơi trên mái hiên một chiều hè. Bạn sẽ được học theo từng bước cơ bản nhất, và bắt đầu khởi nguồn từ những điều tự nhiên nhất như vậy đó.
Tôi tin rằng xây dựng nền tảng lý thuyết cáng vững chắc thì người ta càng có thể tiến xa trên con đường âm nhạc. Vì vậy tôi sẽ đào tạo các bạn sâu về cơ bản trong âm thanh và âm nhạc, và từ đó bạn có thể tự tìm ra con đường phù hợp với mình chứ không phải theo khuôn phép nào cả. Tuy nhiên tôi cũng có thể tùy chỉnh đewẻ phù hợp với ntuwnfg người, và điều chỉnh đểviệc học đàn đúng với nhu cầu của bạn nhất, bằng việc giảm độ sâu trong lý thuyết cơ bản của bạn đi.					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Đang học hệ Trung cấp Học viện âm nhạc quốc gia</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/-EO-pXkv8w0" frameborder="0" allowfullscreen></iframe>
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
						<p>250.000 đ/ 90 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 đ/ 90 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="vuanh">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Lâm Hải Đăng-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="250">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Hai-Dang.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="lamhaidang">Lâm Hải Đăng</h3>
				<p>Địa chỉ: Đức Giang, quận Long Biên</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">250.000 đ/ 75 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">6</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more lamhaidang">
					<span class="read-more lamhaidang">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Đang học hệ Đại học Học viện âm nhạc quốc gia</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/WTbslVcfxz0" frameborder="0" allowfullscreen></iframe>
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
						<p>250.000 đ/ 75 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>150.000 đ/ 75 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="lamhaidang">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Phạm Huy Tùng-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="250">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/ultimatemember/63/profile_photo-190.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="phamhuytung">Phạm Huy Tùng</h3>
				<p>Địa chỉ: Thanh Xuân, quận Long Biên</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">250.000 đ/ 90 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">7</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more phamhuytung">
					<span class="read-more phamhuytung">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Xin chào các bạn ! Mình là Tùng ! Guitar là một nhạc cụ rất đặc biệt, với những kĩ thuật độc đáo, một cây đàn Guitar có thể tạo ra rất nhiều màu sắc, nhiều giai điệu. Cộng với sự nhỏ gọn, có thể mang đi mọi phương, Guitar đang dần được phổ biến trong xã hội Việt Nam, như một công cụ hữu ích cho mọi lứa tuổi, nhất là các bạn trẻ, giao lưu, học hỏi và thỏa mãn đam mê.Với vốn kiến thức tích cóp từ những lần "thực chiến", mình sẽ giúp các bạn có thể đạt được mục tiêu của mình khi chơi guitar một cách sớm nhất, cho dù bạn muốn chơi thể loại gì : Fingerstyle, Đệm hát,..Mình không muốn làm thầy của bạn, mình chỉ muốn giúp bạn tìm được hướng đi cho mình khi làm quen với chiếc đàn Guitar quen thuộc, bắt đầu từ những bài học căn bản nhất, những kĩ thuật căn bản nhất. Độ khó sẽ dần tăng lên, cũng như bạn sẽ thấy được thành quả của mình xuất hiện một cách đều đặn hơn. Mong sớm được gặp các bạn !					</p>
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
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/FHljVW1os4E" frameborder="0" allowfullscreen></iframe>
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
						<p>250.000 đ/ 90 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="phamhuytung">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Lý Trọng Hải-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="300">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Ly-hai.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="phamduy">Lý Trọng Hải</h3>
				<p>Địa chỉ: Hoa Lâm, quận Long Biên</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">300.000 đ/ 90 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">13</span>
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
					<p>Cơ bản, Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Anh em trong nghề vẫn thường gọi là Hải Dớ. Mình đã bắt đầu tập nhạc từ năm lớp 6, và bắt đầu nghiện đàn điện từ năm lớp 11. Thần tượng yêu thích của mình là Gurthie Govan. Dòng nhạc ưa thích là Pop, rock, jazz. Mình bắt đầu giảng dạy từ năm 2016, phương châm của mình là luôn bắt đầu từ những thứ đơn giản trước. Đến với lớp học của mình, mình sẽ dạy cho các bạn những món đòn kĩ thuật của đàn guitar và đặc biệt là guitar điện. Mình tự tin với phương pháp và trình độ chuyên môn của mình, sẽ giúp các bạn đạt được thành công dù mục tiêu của bạn là gì khi tiếp xúc với âm nhạc.					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Đã tốt nghiệp hệ Trung cấp Đại học văn hóa nghệ thuật quân đội</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/AJ7VgLVyvbQ" frameborder="0" allowfullscreen></iframe>
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
						<p>300.000 đ/ 90 phút</p>
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
				<td class="busy"></td>
				<td></td>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="phamduy">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Trịnh Thị Thùy Trang-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="300">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Thuy-Trang.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="trinhthithuytrang">Trịnh Thị Thùy Trang</h3>
				<p>Địa chỉ: Nguyễn Quý Đức, quận Thanh Xuân</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">300.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">5</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more trinhthithuytrang">
					<span class="read-more trinhthithuytrang">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Mình là Thùy Trang. Hiện tại mình đang theo học trường Học viện báo chí tuyên truyền, tuy nhiên, mình đang theo học ngành 2 là về guitar. Thực sự  mình rất yêu thích tiếng đàn guitar, và muốn theo đuổi âm nhạc trong tương lai. Đến với lớp học của Trang, Trang sẽ tùy vào tùy từng trình độ của học sinh mà đưa ra giáo trình phù hợp nhất cho người đó. Cô giáo hiền lành dễ thương nhưng trong việc học thì cực kì nghiêm khắc nghen. Mình thích nhiều thể loại nhạc lắm, nhưng chắc là fan trung thành nhất trong nhạc pop rồi. Rất vui được làm việc với những học sinh của hocgiday.com!					</p>
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
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/v8A4pfTCMus" frameborder="0" allowfullscreen></iframe>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="trinhthithuytrang">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Hồ Trọng Hà-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="300">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/07/Trong-Ha.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="hotrongha">Hồ Trọng Hà</h3>
				<p>Địa chỉ: đường Cốm Vòng, quận Cầu Giấy</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">300.000 đ/ 60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">4</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more hotrongha">
					<span class="read-more hotrongha">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Cơ bản, Nâng cao, Chuyên sâu</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Tiếp xúc với âm nhạc từ khá sớm khoảng năm 2010, mình đã tốt nghiệp đại học luật. Trong thời gian đó, mình thấy âm nhạc là thứ phù hợp với mình và sự nghiệp của mình. Còn việc giảng dạy thì khoảng từ năm 2012. Mình đã sáng lập ra lớp đào tạo âm nhạc School of Rock hay còn gọi là S.O.R. Thần tượng của mình thì nhiều lắm, vì mình chơi đa dạng thể loại từ Jazz, Rock, Metal,… Thế nên thần tượng có thể kể tới là Joe Satriani, Andy James,… Hoạt động thì mình đã có 1 studio riêng và là người sáng lập ban nhạc SOR, diễn tại nhiêu quán café khác nhau như Bar +84,… ngoài ra mình còn là thành viên Guitar lead của ban nhạc Cát. Đến với lớp học của mình, các bạn sẽ được giảng dạy theo cách riêng của mình, phù hợp với mỗi bạn. Mình rất thoải mái trong mọi vấn đề, nhưng riêng việc học mình yêu cầu các bạn nghiêm túc. Rất vui được làm việc với các bạn học sinh của hocgiday.com					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Đã tốt nghiệp hệ Trung cấp Đại học văn hóa nghệ thuật quân đội</p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="https://www.youtube.com/embed/8v4wg9_ym2M" frameborder="0" allowfullscreen></iframe>
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
						<p>300.000 đ/ 60 phút</p>
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
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
			 </tr>
			 <tr>
				<th>Tối</th>
				<td class="busy"></td>
				<td class="busy"></td>
				<td class="busy"></td>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="hotrongha">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Vương Trí Thiên-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="180">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/3-HN-NgoTuanTu.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="vuongtrithien">Vương Trí Thiên</h3>
				<p>Địa chỉ: 8 ngõ 31 Lương Ngọc Quyến, Văn Quán, Hà Đông, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">180.000 VNĐ/60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">3</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more vuongtrithien">
					<span class="read-more vuongtrithien">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Giống như một nghệ sỹ lãng du, từ ngoại hình đến phong cách trình diễn, ở Thiên luôn toát lên một chất vị riêng có rất đặc biệt. Một con người có vẻ bề ngoài đơn giản nhưng tài năng lại không hề giản đơn chút nào. Tốt nghiệp Học viện âm nhạc Quốc gia 2008 và Đại học Văn Hóa nghệ thuật trung ương 2013, Trí Thiên đã trải qua một quá trình đào tạo và rèn luyện hết sức chuyên nghiệp và bài bản từ một trong những trường nghệ thuật lớn nhất cả nước. Tài năng giống như một viên ngọc thô, nếu cứ để mãi trong tự nhiên, bào mòn bởi gió cát, sẽ không thể trở nên long lanh và tinh tế được. Nhưng nếu qua tay những người thợ chuyên nghiệp, nó sẽ trở nên vô cùng giá trị.
Hơn nữa, bắt đầu sự nghiệp âm nhạc nghệ thuật từ mãi những năm 2000-2001, Trí Thiên gắn bó với những phím đàn như một người bạn đồng hành thân thiết, trải qua rất nhiều những sự kiện, tích lũy vô vàn những trải nghiệm bản thân. Cùng với hơn 2 năm kinh nghiệm giảng dạy bộ môn chuyên ngành, thầy cũng có được một số vốn kỹ năng sư phạm tốt để truyền tải kiến thức và cảm hứng cho các học viên.
Trong thời gian hoạt động nghệ thuật lâu dài của mình, Trần đạt từng là thành viên cốt cán của band nhạc New Song đình đám một thời. Ngoài ra, thầy cũng thường xuyên nhận được những lời mời biểu diễn tại những Nhà hàng, Khách sạn lớn, Rạp xiếc Trung ương, Triển lãm Giảng Võ, các chương trình, sự kiện trong Sài Gòn và nhiều tỉnh khác…
Những học viên từng được Trần đạt dẫn dắt đa số tìm đến Piano như một niềm đam mê sẵn có, thầy giáo cũng chia sẻ thầy rất thích giảng dạy những học sinh như vậy, không gượng ép, không khô cứng, cả thầy và trò cùng hòa hợp chia sẻ một sở thích chung.
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 3 Đại học Sư phạm Nghệ thuật Trưng ương</p>
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
						<p>180.000 VNĐ/60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>150.000 VNĐ/60 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="vuongtrithien">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Đỗ Đức Nhàn-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="150">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/2-HN-DoDucNhan.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="doducnhan">Đỗ Đức Nhàn</h3>
				<p>Địa chỉ: Nguyễn Trãi, Khương Trung, Thanh Xuân, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">150.000 VNĐ/60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">10</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more doducnhan">
					<span class="read-more doducnhan">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Cơ bản, Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Thật ra nếu như bạn thích, và chăm chỉ thì đàn guitar hay các loại nhạc cụ cũng không quá thách thức với bất cứ ai. Mình tin là giờ học nhạc sẽ khác và thú vị hơn nhiều so với học văn hóa. Đặc biệt là với những bạn nhỏ tuổi thì học nhạc là cách khá hữu hiệu giúp các em bớt căng thẳng với việc học trên lớp. Mình nhận thấy các em bộc lộ khá nhiều, rất dễ thương, khác so với bình thường. Chúng ta sẽ làm việc trên tinh thần thoải mái nhất có thể. Mong rằng mình có thể là người đem đến nhiều điều thú vị, và cùng đồng hành với các bạn. Chúc các bạn thành công, và hẹn gặp lại!					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp Đại học Sư phạm Nghệ thuật Trung ương</p>
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
						<p>150.000 VNĐ/60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>150.000 VNĐ/60 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="doducnhan">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Hà Thị Xuân-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="150">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/4-HN-Nguyen-Thi-Tho.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="hathixuan">Hà Thị Xuân</h3>
				<p>Địa chỉ: ngõ 411 Lĩnh Nam, quận Hoàng Mai, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">150.000 VNĐ/60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">4</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more hathixuan">
					<span class="read-more hathixuan">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Là một trong những giảng viên sở hữu bộ hồ sơ thành tích xuất sắc tại Học Gì Đây?, thông minh, nhạy bén và yêu nghệ thuật sâu sắc, từ rất lâu Hà Thị Xuân đã xác định cho mình phương pháp tìm hiểu, học tập, khám phá và theo đuổi đam mê một cách nghiêm túc nhưng vẫn hết sức mới mẻ, hiện đại.
Sinh viên năm 3 Cao đẳng nghệ thuật Hà Nội, cùng với những gì mà cô giáo thể hiện, có thể nói Hà Thị Xuân là một nhân tài được ưu ái cho tài năng thiên bẩm hơn người, coi đàn là bạn, chơi đàn bằng đôi tai cảm thụ nhạy bén, bằng tình yêu guitar chân thành, bằng trải nghiệm bản thân trong những lần va chạm thực tiễn.
Hơn 16 năm gắn bó với cây đàn guitar rèn luyện cho cô giáo một đôi tay linh hoạt và uyển chuyển. Cùng với đó là 5 năm kinh nghiệm biểu diễn tại vô số những sự kiện, khách sạn lớn trong và ngoài nước, sự từng trải của Hà Thị Xuân với Piano đủ để có thể nắm bắt và truyền giảng cho bất kỳ học viên nào.
Một vài hoạt động và thành tích nổi bật của Hà Thị Xuân:
• Giải Tài năng trẻ trường Cao đẳng Nghệ thuật Hà Nội.
• Giải Band nhạc triển vọng trường Cao đẳng Nghệ thuật Hà Nội.
• Tổ chức và biểu diễn show Âm nhạc đương đại Travelling Notes.
• Tham gia các worlshop âm nhạc tại Singapore, Thailand.
Theo đuổi phương pháp giảng dạy Dalcroze Eurhythmics (tiếp cận âm nhạc bằng ngôn ngữ cơ thể và ngẫu hứng), Hà Thị Xuân đã tham gia các khóa đào tạo tại Singapore dưới sự hướng dẫn của các giáo viên đầu ngành về Dalcroze tại Nhạc viên Geneva (Thụy Sỹ) và Học viện Dalcroze Australia.
Trở về Việt Nam, quyết định không đi theo những lối cũ truyền thống, Hà Thị Xuân muốn truyền tải những gì mới mẻ mình đã tìm hiểu và học hỏi được, phát triển rộng rãi mô hình giảng dạy mới.
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Sinh viên năm 3 Cao đẳng nghệ thuật Hà Nội</p>
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
						<p>150.000 VNĐ/60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>120.000 VNĐ/60 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="hathixuan">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Mai Kim Thảo-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="180">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/7-HN-PhuongThiHue.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="maikimthao">Mai Kim Thảo</h3>
				<p>Địa chỉ: số 6 Nguyễn Duy Trinh, Linh Đàm, quận Hoàng Mai, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">180.000 VNĐ/60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">7</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more maikimthao">
					<span class="read-more maikimthao">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Cơ bản, Nâng cao, Chuyên sâu</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Được mệnh danh là Nhạc sĩ lãng mạn bởi những ca khúc rất tình rất đượm lòng người, Mai Kim Thảo bắt đầu con đường nghệ thuật từ việc học guitar tại Cao đẳng Nghệ thuật Hà Nội sau đó cô tiếp tục theo học chuyên ngành và Tốt nghiệp Đại Học Văn Hóa nghệ thuật quân đội
Quá trình hoạt động nghệ thuật thầy đã có nhiều gắn bó nổi bật và những cống hiến đáng ghi nhớ cho nền âm nhạc Việt Nam:
Tham gia ban nhạc Đồng hồ báo thức Năm 1999 – nay với vai trò (trưởng nhóm nhạc cụ)
Hội viên hội âm nhạc Hà nội, năm 2007
Hội viên hội nhạc sĩ Việt nam, năm 2013
Ngoài giảng dạy piano thầy còn dạy sáng tác 
Các tác phẩm tiêu biểu:
Tác phẩm khí nhạc “vó ngựa trên sa mạc” Khoa dây học viện quốc gia công diễn năm 2012
Tác phẩm “Tiều phu” tác phẩm tiêu biểu của hội âm nhạc Hà nội năm 2013
Tác phẩm “NGÀY GẶP GỠ” – NHẠC: ĐỖ HOÀNG LINH
LỜI: THƠ TRẦN TUẤN ANH
GIẢI THƯỞNG VĂN HỌC NGHỆ THUẬT THỦ ĐÔ NĂM 2014
TÁC PHẨM: CUỘC ĐỜI TỪNG PHÚT MONG ĐỢI TA
GIẢI 3 CHUNG KHẢO CUỘC VẬN DỘNG SÁNG TÁC ÂM NHẠC VỀ ĐỀ TÀI CÔNG AN NHÂN DÂN, GIAI ĐOẠN 2011 – 2015.
Những ca khúc được nhiều người yêu thích và biểu diễn:
Ca khúc:”Trái bóng – Trái tim” bài hát cổ vũ đội tuyển bóng đá.
Chiều hà nội, em đang tỏa nắng, đùa chơi mùa xuân đến..
Với tâm hồn của một người nghệ sĩ Kim Thảo luôn mang lại cho các học viên của mình những giờ học thú vị không đơn thuần chỉ là chơi piano mà là cả nghệ thuật chơi của bộ môn học
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp Đại Học Văn Hóa nghệ thuật quân đội</p>
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
						<p>180.000 VNĐ/60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>150.000 VNĐ/60 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="maikimthao">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Phạm Thành Thắng-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="250">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/5-HN-TranThanhTrung.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="phamthanhthang">Phạm Thành Thắng</h3>
				<p>Địa chỉ: ngõ 105 Doãn Kế Thiện, quận Cầu Giấy, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">250.000 VNĐ/60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">3</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more phamthanhthang">
					<span class="read-more phamthanhthang">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Cơ bản, Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào các bạn, mình là Phạm Thành Thắng. Mình tiếp xúc với Guitar từ 2004, Piano và thanh nhạc từ 2006. Dòng nhạc ưa thích của mình là nhạc nhẹ và nhạc thính phòng. Phạm Thành Thắng sẽ dạy các bạn từ trình độ cơ bản, và có thể từ trình độ bạn đã biết. Mình sẽ dạy lý thuyết song song thực hành luôn trong mỗi buổi dạy, mỗi buổi sẽ thêm một chút để bạn dần mở rộng ra khả năng của mình. 
Với học sinh học nhạc cụ: các bạn sẽ được học về đọc nốt nhạc, đọc tiết tấu, học qua các bài tập luyện ngón để giúp ngón vững hơn và âm thanh được tròn trịa, tiếp xúc luôn với các tác phẩm từ mức dễ đến khó. Với học sinh học đệm hát các nhạc cụ: cấu tạo hợp âm, các gam, các giọng, các âm hình đệm cơ bản, và nâng cao với những học sinh có khả năng. Với học sinh học thanh nhạc: bạn sẽ được học về kiểm soát hơi thở, đặt vị trí âm thanh, xử lý bài, tiết chế cảm xúc, áp dụng vào bài hát. 
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
						<p>Tốt nghiệp học viện âm nhạc quốc gia năm 2013</p>
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
						<p>250.000 VNĐ/60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>200.000 VNĐ/60 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="phamthanhthang">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Đặng Lê Thái-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="150">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/6-HN-LuongVanTuy.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="danglethai">Đặng Lê Thái</h3>
				<p>Địa chỉ: số 6, ngõ 24 Hoàng Quốc Việt, quận Cầu Giấy thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">150.000 VNĐ/60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">2</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more danglethai">
					<span class="read-more danglethai">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Cơ bản, Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Là một giảng viên đa tài, lại được trời ưu ái hơn người cho cái duyên giảng dạy, Đặng Lê Thái đã để lại rất nhiều ấn tượng sâu đậm với nhiều lớp học trò đã từng theo học.
Tốt nghiệp Cao Đẳng Nghệ thuật Hà Nội khoa Nhạc năm 2014, được trải qua một thời gian đào tạo chuyên nghiệp, nắm trong tay nhiều thành tích nổi bật, Đặng Lê Thái sở hữu một nền tảng chuyên môn vững chắc và bài bản. Yêu và gắn bó với cây đàn Piano từ 8 năm trước, với tất cả những gì mình có, và bằng niềm đam mê chân thành, Đặng Lê Thái quyết tâm theo đuổi con đường mình lựa chọn.
Với 2 năm dạy tại trường cấp 1
2 năm dạy tại nhà, vốn kinh nghiệm tích lũy theo đó cũng lớn dần theo thời gian và xuyên suốt những bài giảng. Các tiết học với Lương Văn Tụy luôn được đánh giá cao về mặt chất lượng, đồng thời cũng rất dễ tiếp thu. Thầy là người rất biết truyền cảm hứng cho học viên và có khả năng tạo ra những không gian buổi học thú vị. Học viên của thầy cũng hết sức đa dạng ở nhiều lứa tuổi, nhiều trình độ và nhiều mục đích khác nhau.
Một vài thành tích nổi bật của giảng viên Piano Lương Văn Tụy:
• Tham gia biểu diễn các chương trình Nghệ thuật âm nhạc sinh viên.
• Giải nhất cuộc thi Sinh viên âm nhạc, biểu diễn hòa tấu đàn Organ.
• Tham gia đội hợp xướng của trường Sư phạm Nghệ thuật Trung Ương.
Có thể nói, ở Lương Văn Tụy, tình yêu của thầy với những phím đàn đen trắng chắc chắn không thua kém bất kỳ người nghệ sĩ chuyên nghiệp nào. Ngoài ra, thầy còn là một con người hết sức đa tài, với khả năng chơi nhiều loại nhạc cụ khác ngoài Piano/Organ như Guitar, Sáo trúc, Đàn bầu, Hamornica, Ukulele…
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp Cao Đẳng Nghệ thuật Hà Nội khoa Nhạc năm 2014</p>
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
						<p>150.000 VNĐ/60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>120.000 VNĐ/60 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="danglethai">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Hoàng Trung-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="200">
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
					<p class="unit-price">200.000 VNĐ/60 phút</p>
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
					<p>Cơ bản, Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Là một giảng viên đa tài, lại được trời ưu ái hơn người cho cái duyên giảng dạy, Hoàng Trung đã để lại rất nhiều ấn tượng sâu đậm với nhiều lớp học trò đã từng theo học.
Sinh viên năm 4 Học viện âm nhạc quốc gia, được trải qua một thời gian đào tạo chuyên nghiệp, nắm trong tay nhiều thành tích nổi bật, Hoàng Trung sở hữu một nền tảng chuyên môn vững chắc và bài bản. Yêu và gắn bó với cây đàn guitar từ 8 năm trước, với tất cả những gì mình có, và bằng niềm đam mê chân thành, Hoàng Trung quyết tâm theo đuổi con đường mình lựa chọn.
Với 3 năm dạy tại nhà, vốn kinh nghiệm tích lũy theo đó cũng lớn dần theo thời gian và xuyên suốt những bài giảng. Các tiết học với Hoàng Trung luôn được đánh giá cao về mặt chất lượng, đồng thời cũng rất dễ tiếp thu. Thầy là người rất biết truyền cảm hứng cho học viên và có khả năng tạo ra những không gian buổi học thú vị. Học viên của thầy cũng hết sức đa dạng ở nhiều lứa tuổi, nhiều trình độ và nhiều mục đích khác nhau.
Một vài thành tích nổi bật của giảng viên Piano Hoàng Trung:
• Tham gia biểu diễn các chương trình Nghệ thuật âm nhạc sinh viên.
• Giải nhất cuộc thi Sinh viên âm nhạc, biểu diễn hòa tấu đàn Organ.
• Tham gia đội hợp xướng của trường Sư phạm Nghệ thuật Trung Ương.
Có thể nói, ở Hoàng Trung, tình yêu của thầy với những phím đàn đen trắng chắc chắn không thua kém bất kỳ người nghệ sĩ chuyên nghiệp nào. Ngoài ra, thầy còn là một con người hết sức đa tài, với khả năng chơi nhiều loại nhạc cụ khác ngoài Piano/Organ như Guitar, Sáo trúc, Đàn bầu, Hamornica, Ukulele…
					</p>
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
						<p>200.000 VNĐ/60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>160.000 VNĐ/60 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="hoangtrung">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Nguyên Thắng-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="180">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/DN-8-Hoang-Thai-Hoa.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="nguyenthang">Nguyên Thắng</h3>
				<p>Địa chỉ: phố Nguyễn Trãi, phường Trung Văn, quận Thanh Xuân, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">180.000 VNĐ/60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">12</span>
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
					<p>Chào các bạn, mình là Nguyên Thắng. Mình tiếp xúc với Guitar từ 2004, Piano và thanh nhạc từ 2006. Dòng nhạc ưa thích của mình là nhạc nhẹ và nhạc thính phòng. Nguyên Thắng sẽ dạy các bạn từ trình độ cơ bản, và có thể từ trình độ bạn đã biết. Mình sẽ dạy lý thuyết song song thực hành luôn trong mỗi buổi dạy, mỗi buổi sẽ thêm một chút để bạn dần mở rộng ra khả năng của mình. 
Với học sinh học cổ điển nhạc cụ: các bạn sẽ được học về đọc nốt nhạc, đọc tiết tấu, học qua các bài tập luyện ngón để giúp ngón vững hơn và âm thanh được tròn trịa, tiếp xúc luôn với các tác phẩm từ mức dễ đến khó. Với học sinh học đệm hát các nhạc cụ: cấu tạo hợp âm, các gam, các giọng, các âm hình đệm cơ bản, và nâng cao với những học sinh có khả năng. Với học sinh học thanh nhạc: bạn sẽ được học về kiểm soát hơi thở, đặt vị trí âm thanh, xử lý bài, tiết chế cảm xúc, áp dụng vào bài hát. 
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
						<p>180.000 VNĐ/60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>150.000 VNĐ/60 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenthang">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Trần đạt-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="300">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/14-SG-TrinhTanSang.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="trandat">Trần đạt</h3>
				<p>Địa chỉ: phố Nhân Hòa, phường Nhân Chính, quận Thanh Xuân, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">300.000 VNĐ/60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
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
					<p>Cơ bản, Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Giống như một nghệ sỹ lãng du, từ ngoại hình đến phong cách trình diễn, ở Trần đạt luôn toát lên một chất vị riêng có rất đặc biệt. Một con người có vẻ bề ngoài đơn giản nhưng tài năng lại không hề giản đơn chút nào. Tốt nghiệp Học viện âm nhạc Quốc gia 2008 và Đại học Văn Hóa nghệ thuật trung ương 2013, Trần đạt đã trải qua một quá trình đào tạo và rèn luyện hết sức chuyên nghiệp và bài bản từ một trong những trường nghệ thuật lớn nhất cả nước. Tài năng giống như một viên ngọc thô, nếu cứ để mãi trong tự nhiên, bào mòn bởi gió cát, sẽ không thể trở nên long lanh và tinh tế được. Nhưng nếu qua tay những người thợ chuyên nghiệp, nó sẽ trở nên vô cùng giá trị.
Hơn nữa, bắt đầu sự nghiệp âm nhạc nghệ thuật từ mãi những năm 2000-2001, Trần đạt gắn bó với những phím đàn như một người bạn đồng hành thân thiết, trải qua rất nhiều những sự kiện, tích lũy vô vàn những trải nghiệm bản thân. Cùng với hơn 2 năm kinh nghiệm giảng dạy bộ môn chuyên ngành, thầy cũng có được một số vốn kỹ năng sư phạm tốt để truyền tải kiến thức và cảm hứng cho các học viên.
Trong thời gian hoạt động nghệ thuật lâu dài của mình, Trần đạt từng là thành viên cốt cán của band nhạc New Song đình đám một thời. Ngoài ra, thầy cũng thường xuyên nhận được những lời mời biểu diễn tại những Nhà hàng, Khách sạn lớn, Rạp xiếc Trung ương, Triển lãm Giảng Võ, các chương trình, sự kiện trong Sài Gòn và nhiều tỉnh khác…
Những học viên từng được Trần đạt dẫn dắt đa số tìm đến Piano như một niềm đam mê sẵn có, thầy giáo cũng chia sẻ thầy rất thích giảng dạy những học sinh như vậy, không gượng ép, không khô cứng, cả thầy và trò cùng hòa hợp chia sẻ một sở thích chung.
					</p>
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
						<p>300.000 VNĐ/60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>240.000 VNĐ/60 phút</p>
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
	<!-- Profile row: Chương Quốc Bảo-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="350">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/34-HN-ChuongQuocBao.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="chuongquocbao">Chương Quốc Bảo</h3>
				<p>Địa chỉ: số 40 Ngô Quyền, quận Hoàn Kiếm</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">350.000 VNĐ/60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">9</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more chuongquocbao">
					<span class="read-more chuongquocbao">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Cơ bản, Nâng cao, Chuyên sâu</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Được mệnh danh là Nhạc sĩ lãng mạn bởi những ca khúc rất tình rất đượm lòng người, Chương Quốc Bảo bắt đầu con đường nghệ thuật từ việc học guitar tại Cao đẳng Nghệ thuật Hà Nội sau đó thầy tiếp tục theo học chuyên ngành và Tốt nghiệp thạc sĩ ĐH văn hóa nghệ thuật quân đội
Quá trình hoạt động nghệ thuật thầy đã có nhiều gắn bó nổi bật và những cống hiến đáng ghi nhớ cho nền âm nhạc Việt Nam:
Tham gia ban nhạc Đồng hồ báo thức Năm 1999 – nay với vai trò (trưởng nhóm nhạc cụ)
Hội viên hội âm nhạc Hà nội, năm 2007
Hội viên hội nhạc sĩ Việt nam, năm 2013					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp thạc sĩ ĐH văn hóa nghệ thuật quân đội</p>
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
						<p>350.000 VNĐ/60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>300.000 VNĐ/60 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="chuongquocbao">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Bùi Quang Việt-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="200">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/11-HN-BuiQuangViet.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="buiquangviet">Bùi Quang Việt</h3>
				<p>Địa chỉ: Định Công Hạ, Định Công, Hoàng Mai, Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">200.000 VNĐ/60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="num-of-rates">2</span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more buiquangviet">
					<span class="read-more buiquangviet">&gt;&gt; Tìm hiểu thêm</span>
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
					<p>Cơ bản, Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào các bạn, mình tiếp xúc với Guitar từ 2008, Piano và thanh nhạc từ 2010. Dòng nhạc ưa thích của mình là nhạc nhẹ và nhạc thính phòng. Mình sẽ dạy các bạn từ trình độ cơ bản, và có thể từ trình độ bạn đã biết. Mình sẽ dạy lý thuyết song song thực hành luôn trong mỗi buổi dạy, mỗi buổi sẽ thêm một chút để bạn dần mở rộng ra khả năng của mình. 
Với học sinh học cổ nhạc cụ: các bạn sẽ được học về đọc nốt nhạc, đọc tiết tấu, học qua các bài tập luyện ngón để giúp ngón vững hơn và âm thanh được tròn trịa, tiếp xúc luôn với các tác phẩm từ mức dễ đến khó. Với học sinh học đệm hát các nhạc cụ: cấu tạo hợp âm, các gam, các giọng, các âm hình đệm cơ bản, và nâng cao với những học sinh có khả năng. Với học sinh học thanh nhạc: bạn sẽ được học về kiểm soát hơi thở, đặt vị trí âm thanh, xử lý bài, tiết chế cảm xúc, áp dụng vào bài hát. 
					</p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p>Tốt nghiệp Đại học Sư phạm Nghệ thuật Trung ương</p>
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
						<p>200.000 VNĐ/60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>180.000 VNĐ/60 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="buiquangviet">Đăng ký ngay</button>
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
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/12-HN-PhamThe.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="phamthe">Phạm Thế</h3>
				<p>Địa chỉ: Ngách 37 Ngõ 166 Miếu Đầm - Mễ Trì Thượng - quận Nam Từ Liêm</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">280.000 VNĐ/60 phút</p>
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
					<p>Cơ bản, Nâng cao</p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p>Chào tất cả các bạn! Mình là Phạm Thế, rất vui được làm quen với các bạn trên Hocgiday.com. Nhạc là ngôn ngữ chung của nhân loại, là con đường gắn kết mọi người lại với nhau.Thiếu âm nhạc thì chúng ta sẽ mất đi một phần thú vị của cuộc sống. Mình rất yêu thích những tác phẩm cổ điển với các nhạc sĩ Mozart, Chopin, Bach, Beethoven, Kuhlau…; tác phẩm trữ tình lãng mạn của nhạc sĩ Richard Clayderman, Yiruma.
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
						<p>280.000 VNĐ/60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>220.000 VNĐ/60 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="phamthe">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile box --> 
	<!-- Profile row: Vũ Nam-->
	<!-- Profile box -->
	<div class="container-fluid hgd-profile-box hanoi" data-price="160">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/13-HN-VuNam.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="vunam">Vũ Nam</h3>
				<p>Địa chỉ: phố Đình Quán, phường Phú Diễn, quận Bắc Từ Liêm, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">160.000 VNĐ/60 phút</p>
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
					<p>Xin chào tất cả các bạn! Mình là Vũ Văn Nam. Nhà soạn nhạc thiên tài người Đức Ludwig van Beethoven đã nói:” âm nhạc làm trái tim của người nam sôi sục và khóe mắt của người nữ đẫm lệ”, đối với mình âm nhạc chính là tâm hồn, là cảm xúc, là tình yêu, là ước mơ và đã trở thành một phần của cuộc sống. Mình đặc biệt yêu thích bộ môn piano. Vì cây đàn guitar có khả năng diễn tả rất phong phú sự chuẩn xác về cao độ, vẻ đẹp của âm thanh biểu hiện được nhiều loại sắc thái, sự tinh tế của phím đàn, sự thuận lợi trong việc kết hợp các chồng âm cùng lúc tạo nên màu sắc hòa âm có thể thay thế dàn nhạc. Thần tượng âm nhạc của mình là Eric Clapton bởi âm nhạc của ông khiến mình cảm nhận được tất cả những tình cảm đẹp đẽ, tinh tế nhất. Điều hạnh phúc lớn nhất trên con đường giảng dạy âm nhạc của mình là truyền cho học sinh cảm hứng và tình yêu cũng như khơi dậy trong học sinh niềm đam mê đối với âm nhạc. Có câu nói:”Hãy mang lại cho bé niềm yêu thương ngọt ngào từ những giai điệu bất hủ, biết đâu bạn sẽ có một thiên tài âm nhạc trong tương lai. Trong mỗi một giờ học, học sinh sẽ được học trong một không khí vui vẻ, thoải mái giống như một buổi chia sẻ, bày tỏ cảm xúc giữa mình với học sinh. Mình đặc biệt yêu thích các bạn nhỏ. Có những bạn rụt rè, nhút nhát nhưng sau một số buổi học sức mạnh của âm nhạc đã giúp các bạn đó cởi mở, gần gũi với mọi người hơn. Hình ảnh các bạn nhỏ say sưa bên phím đàn đã trở thành nguồn động lực to lớn đối với mình. Trong quá trình giảng dạy chính các bạn, những học sinh yêu quý, các bạn nhỏ đã dạy mình cách để trở thành một giáo viên hoàn thiện hơn. Vì thế hãy cho mình cơ hội giúp các bạn khám phá thế giới âm nhạc rộng lớn, mới lạ và thú vị nhé!
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
						<p>160.000 VNĐ/60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>120.000 VNĐ/60 phút</p>
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
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/20-SG-NgoQuangDao.jpg" alt="teacher">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="phamduy">Phạm Duy</h3>
				<p>Địa chỉ: phố An Hòa, phường Mỗ Lão, quận Hà Đông, thành phố Hà Nội</p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price">300.000 VNĐ/60 phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
						<span class="num-of-rates">13</span>
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
						<p>300.000 VNĐ/60 phút</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p>240.000 VNĐ/60 phút</p>
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
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="phamduy">Đăng ký ngay</button>
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
							<input type="hidden" name="subject" value="guitar">
							<input type="hidden" name="city" value="Hà Nội">
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



</div> <!-- End Profile list -->


<!-- jQuery -->
<script
	src="https://code.jquery.com/jquery-3.2.1.js"
	integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	crossorigin="anonymous">
</script>
<!-- JQuery UI -->
<script src="dist/js/jquery-ui.smoothness/jquery-ui.js" type="text/javascript" charset="utf-8"></script>	
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- MY script -->
<script src="dist/js/app.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>