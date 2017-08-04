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

		<h3 id="h3">LỰA CHỌN GIỮA HÀNG CHỤC GIÁO VIÊN GUITAR TẠI THÀNH PHỐ HỒ CHÍ MINH?</h3>

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



	<!-- Profile row: Phan Hà Văn-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="100">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/1-SG-PhanHaVan.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="phanhanvan">Phan Hà Văn</h3>

				<p>Địa chỉ: Hẻm 81 bis Nguyễn Thị Minh Khai, Quận 1, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">100.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">2</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more phanhanvan">

					<span class="read-more phanhanvan">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Chào tất cả mọi người! Mình là Phan Hà Văn, rất vui được gặp gỡ mọi người trên Website Hocgiday.com. 

Xin phép được giới thiệu về bản thân đôi chút. Ngoài kinh nghiệm và tình yêu đối với âm nhạc, mình còn là một người có năng khiếu đặc biệt với việc giảng dạy. Mình là sinh viên năm 2 Nhạc viện Tp.HCM. Ngoài khả năng chơi Guitar, mình còn có thể chơi nhiều loại nhạc cụ khác như Saxophone, Violin, Guitar bass,… 

Trước khi đi dạy, mình đã trải từng chơi trong 1 ban nhạc Pop rock gồm có 5 thành viên và mình chơi Guitar. Mình cũng từng hướng dẫn nhiều trẻ em trong các trại hè âm nhạc và tham gia đệm hát cho 1 bạn trong chương trình Viet Nam Got Talent năm 2014.

Đến với lớp học của Hà Văn, Văn sẽ truyền đạt kiến thức một cách thú vị nhất. Mình hy vọng sau những bài dạy của mình, các bạn có thể thực hành và chơi nhạc được thường xuyên hơn. Phần quan trọng nhất trong quá trình chơi nhạc cụ hay hát hò chính là có được niềm vui và cảm thấy thoải mái. Vậy nên nếu bạn không cảm thấy enjoy những gì bạn đang làm, tại sao bạn lại làm nó. Hà Văn hy vọng sẽ truyền được lửa cho bạn và giúp bạn đạt được thành công. 

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Sinh viên năm 2 Nhạc viện TP.HCM</p>

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

						<p>100.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>800.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="phanhanvan">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Chu Văn Toàn-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="200">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/2-SG-ChuVanToan.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="chuvantoan">Chu Văn Toàn</h3>

				<p>Địa chỉ: Hẻm 48 Trần Đình Xu, Quận 1, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">200.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">4</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more chuvantoan">

					<span class="read-more chuvantoan">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Xin chào! Mình là Chu Văn Toàn. Hiện tại mình đang là sinh viên năm 3 Học viện âm nhạc Tp.HCM. Mình đã bắt đầu chơi và tập luyện Guitar từ năm cấp 3. Mình được tiếp xúc với âm nhạc cổ điển từ rất sớm nhưng phải đến năm cấp 3 mình mới có cơ hội để luyện tập Guitar. 

Mình có niềm đam mê mãnh liệt với âm nhạc và cây đàn Guitar, mình muốn truyền nó đến mọi người muốn tìm hiểu về âm nhạc và cây Guitar nói riêng. 

Mình tin rằng đối với mỗi người, chúng ta cần một phương pháp giảng dạy riêng và một cách truyền đạt riêng. Mặc dù chưa có nhiều kinh nghiệm giảng dạy, nhưng mình tin mình có thể bắt đầu truyền những bài học bổ ích cho các bạn.

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Sinh viên năm 3 Nhạc viện TP.HCM</p>

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

						<p>200.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>160.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="chuvantoan">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Nguyễn Hoàng Nam-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="400">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/03-SG-Nguyen-Hoang-Nam.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="nguyenhoangnam">Nguyễn Hoàng Nam</h3>

				<p>Địa chỉ: 237 Nguyễn Công Trứ, Nguyễn Thái Bình, Quận 1, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">400.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">5</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyenhoangnam">

					<span class="read-more nguyenhoangnam">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>“Âm nhạc là thứ cảm xúc từ tâm hồn” – Nguyễn Hoàng Nam

Thầy Nguyễn Hoàng Nam tốt nghiệp thạc sĩ Học Viện Âm Nhạc Quốc Gia, với hơn 6 năm dạy trường nhạc và 8 năm dạy tại nhà. Hiện tại thầy chủ yếu dạy học sinh tại nhà trên địa bàn quận 1, Tp.HCM. 

Thầy Nguyễn Hoàng Nam đã có rất nhiều năm kinh nghiệm trong việc giảng dạy, vì vậy thầy có thể giảng dạy tốt cả cho những bạn từ không muốn theo chuyên nghiệp tới những bạn có mong muốn thi vào trường nhạc. 

Thầy đã từng tiến hành phối khí cho nhiều sinh viên thực hiện học phần tốt nghiệp trong trường và hợp tác sản xuất cho một vài ca sĩ khác. 

Đến với lớp học của thầy Nam, các bạn sẽ được trải nghiệm không khí học tập vui vẻ, có tính học thuật nhưng cũng không kém phần thú vị.

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Tốt nghiệp thạc sĩ Học Viện Âm Nhạc Quốc Gia Việt Nam</p>

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

						<p>400.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>320.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenhoangnam">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Kim Thị Mai-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="150">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/6-SG-KimThiMai.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="kimthimai">Kim Thị Mai</h3>

				<p>Địa chỉ: 208B Pasteur, phường 6, Quận 3, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">150.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">4</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more kimthimai">

					<span class="read-more kimthimai">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Mình là Kim Thị Mai. Hiện tại mình đang là sinh viên năm 3 Nhạc viện Tp.HCM. Được tiếp xúc với Guitar từ nhỏ, mặc dù không được trải qua bất kì trường lớp chuyên nghiệp nào, nhưng mình cũng đã tự trau dồi kiến thức và học các thầy cô ở ngoài trường nhạc. 

Mình đặc biệt yêu thích dòng nhạc nhẹ. Mình thích sử dụng những kiến thức hàn lâm vào ứng tấu và chuyển soạn các bài nhạc nhẹ sang theo ý mình thích. Mình tin rằng, mỗi người chơi Guitar sau một khoảng thời gian có thể tự trở thành những người nghệ sĩ, tự sáng tác và chơi Guitar theo cách mình thích. Chỉ cần họ có đam mê và sự miệt mài chăm chỉ. 

Đến với cách học của mình, mình sẽ truyền cho các bạn kinh nghiệm tự học của bản thân và cách thức có thể tự học được khi không có thầy cô giáo ở cạnh. Mình tin rằng tự học là nguồn gốc của mọi kĩ năng.

Rất vui được đặt hồ sơ của mình lên hocgiday.com

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Sinh viên năm 3 Nhạc viện TP.HCM</p>

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

						<p>150.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>120.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="kimthimai">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Lương Văn Tụy-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="200">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/8-SG-LuongVanTuy.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="luongvantuy">Lương Văn Tụy</h3>

				<p>Địa chỉ: 159/76 Trần Văn Đang, phường 11, Quận 3, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">200.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">2</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more luongvantuy">

					<span class="read-more luongvantuy">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Mình là Lương Văn Tụy. Hiện tại đang là sinh viên năm 4 Nhạc Viện Tp.HCM. 

Được tiếp xúc với cây đàn guitar từ năm lớp 11, đến nay đã được khoảng 4 năm tiếp xúc với và chơi cây đàn này. Mình tin rằng mình có thể truyền tải những thông điệp âm nhạc và những bài học âm nhạc thú vị nhất đến với tất cả các học sinh

Dòng nhạc yêu thích của mình là cổ điển, jazz, nhạc nhẹ,… với việc đa dạng phong cách âm nhạc như vậy, mình sẽ truyền được cảm hứng cho các bạn thuộc mọi độ tuổi muốn học bộ môn guitar một cách nhanh chóng.

Hãy đến với lớp học của mình nhé!!

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Sinh viên năm 4 Nhạc viện TP.HCM</p>

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

						<p>200.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>160.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="luongvantuy">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Vương Văn Bách-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="300">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/9-SG-VuongVanBach.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="vuongvanbach">Vương Văn Bách</h3>

				<p>Địa chỉ: 453KD/26 Lê Văn Sỹ, phường 12, Quận 3, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">300.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">5</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more vuongvanbach">

					<span class="read-more vuongvanbach">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Hiện tại mình vừa tốt nghiệp Nhạc viện Tp.HCM. Với gần 4 năm tại nhà, có thể truyền đạt những kiến thức từ cơ bản – nâng cao – chuyên sâu. 

Với nhiều kinh nghiệm tham gia các chương trình như Khát Vọng Trẻ 6, Cuộc thi Guitar điện của Roland, Cuộc thi các ban nhạc trẻ toàn quốc,… Cùng nhiều hoạt động khác liên quan đến âm nhạc, cùng sự đào tạo chuyên nghiệp từ trong trường.

Rất mong được cùng làm quen, học tập và phát triển với bộ môn guitar nói riêng và các môn âm nhạc nói chung này.

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Tốt nghiệp Nhạc viện TP.HCM</p>

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

						<p>300.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>240.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="vuongvanbach">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Nghiêm Cao Hậu-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="350">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/11-SG-NghiemCaoHau.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="nghiemcaohau">Nghiêm Cao Hậu</h3>

				<p>Địa chỉ: 80/96 Trần Quang Diệu, phường 14, Quận 3, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">350.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>

						<span class="num-of-rates">1</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nghiemcaohau">

					<span class="read-more nghiemcaohau">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Thầy Nghiêm Cao Hậu tốt nghiệp thạc sĩ Nhạc viện Tp.HCM năm 2013. Với bề dày kinh nghiệm 5 năm dạy tại trường nhạc và 6 năm dạy tại nhà. Thầy Nghiêm Cao Hậu là lựa chọn tốt cho những học sinh muốn thi đầu vào tại các trường nhạc và có mong muốn tiến sâu hơn trong việc theo đuổi bộ môn Guitar này.

Thầy Nghiêm Cao Hậu tiếp xúc với cây đàn Guitar từ năm 7 tuổi. Với gần 25 năm chơi cây đàn này, thầy chịu ảnh hưởng nhiều nhất bởi nhạc sĩ Beethoven. Theo thầy, âm nhạc của Beethoven xuất phát từ trái tim và có thể khiến con người chìm đắm vào những giai điệu tuyệt đẹp nhất

Khi dạy học sinh, thầy chú trọng nhiều vào những thứ từ cơ bản nhất từ ngón tay, thế tay, dáng ngồi sau đó mới đi vào những chi tiết học thuật. Hy vọng thầy sẽ có thể được cộng tác và được làm việc cùng các quý phụ huynh và các bạn học sinh!!

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Tốt nghiệp thạc sĩ Nhạc viện TP.HCM</p>

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

						<p>350.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>280.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nghiemcaohau">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Đặng Nguyên Khương-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="250">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/12-SG-DangNguyenKhuong.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="dangnguyenkhuong">Đặng Nguyên Khương</h3>

				<p>Địa chỉ: 512/53B Trân Não, phường An Lợi Đông, Quận 2, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">250.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>

						<span class="num-of-rates">2</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more dangnguyenkhuong">

					<span class="read-more dangnguyenkhuong">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Mình là Đặng Nguyên Khương. Sinh ra trong gia đình có truyền thống âm nhạc. Là một con người của đất Hà Thành, mình tiếp xúc với nhiều thể loại âm nhạc dân gian từ rất sớm, nhưng qua một thời gian, mình nhận thấy Guitar mới là niềm đam mê thực sự của mình. Mình tốt nghiệp Cao đẳng nghệ thuật Hà Nội và đã có một vài năm dạy học sinh tại nhà và tại các trung tâm như Adam Music.

Âm nhạc của mình thực sự rất đơn giản. Mình kết hợp những âm hưởng dân gian bằng cách sử dụng cây đàn Guitar một cách thuần thục và sáng tạo. Lợi thế lớn nhất của mình là sự sáng tạo. Mình biết cách để truyền cho mỗi người học một bài học riêng để họ có thể tiến xa trong con đường chinh phục thử thách về âm nhạc

Hy vọng Khương sẽ được hợp tác với các học sinh của Học Gì Đây!!

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

						<p>2km</p>

					</div>

				</div>

				<div class="row">

					<h4>Học phí</h4>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại nhà</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>250.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>200.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="dangnguyenkhuong">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Phạm Xuân Cường-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="200">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/09-SG-Pham-Xuan-Cuong.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="phamxuancuong">Phạm Xuân Cường</h3>

				<p>Địa chỉ: 680 Trân Ngọc Diện, Thảo Điên, Quận 2, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">200.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">4</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more phamxuancuong">

					<span class="read-more phamxuancuong">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Chào các bạn, mình là Phạm Xuân Cường, mình đã tốt nghiệp Đại học văn hóa nghệ thuật quân đội. Với 6 năm theo học bộ môn Guitar, mình đã tham gia nhiều cuộc thi lớn nhỏ một trong số đó là Liên hoan Guitar toàn quốc,.. và còn  nhiều chương trình khác nữa. 

Đến với những giờ dạy của Cường, học sinh sẽ cảm thấy thoải mái nhất nhưng cũng nghiêm khắc trong việc học tập để các bạn có thể làm quen với cây đàn Guitar một cách tốt hơn. 

Hy vọng với niềm đam mê và sự nhiệt huyết của mình, Cường có thể truyền đạt những kiến thức bổ ích nhất đến cho các bạn.

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

						<p>3km</p>

					</div>

				</div>

				<div class="row">

					<h4>Học phí</h4>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại nhà</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>200.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>160.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="phamxuancuong">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Trịnh Tấn Sang-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="250">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/14-SG-TrinhTanSang.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="trinhtansang">Trịnh Tấn Sang</h3>

				<p>Địa chỉ: 100 Bình Trưng, phường Bình Trưng Tây, Quận 2, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">250.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">6</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more trinhtansang">

					<span class="read-more trinhtansang">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Chào các bạn, mình là Trịnh Tấn Sang. Mình tiếp xúc với Guitar từ 2008, Piano và thanh nhạc từ 2010. Dòng nhạc ưa thích của mình là nhạc nhẹ và nhạc thính phòng. Mình sẽ dạy các bạn từ trình độ cơ bản, hoặc từ những gì bạn đã biết. 

Mình sẽ dạy lý thuyết song song với thực hành luôn trong mỗi buổi dạy, mỗi buổi thêm một chút để bạn dần mở rộng khả năng của mình. Với học sinh học nhạc cổ điển: các bạn sẽ được học cách đọc nốt nhạc, đọc tiết tấu, học qua các bài tập luyện ngón để giúp ngón vững hơn và âm thanh được tròn trịa, tiếp xúc luôn với các tác phẩm từ mức dễ đến khó. Với học sinh học đệm hát các nhạc cụ: cấu tạo hợp âm, các gam, các giọng, các âm hình đệm cơ bản, và nâng cao với những học sinh có khả năng. Với học sinh học thanh nhạc: bạn sẽ được học về kiểm soát hơi thở, đặt vị trí âm thanh, xử lý bài, tiết chế cảm xúc, áp dụng vào bài hát.

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Tốt nghiệp Nhạc viện TP.HCM</p>

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

						<p>250.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>200.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="trinhtansang">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Trần Đình Thịnh-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="150">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/16-SG-TranDinhThinh.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="trandinhthinh">Trần Đình Thịnh</h3>

				<p>Địa chỉ: 242/18 Tôn Đán, phường 8, Quận 4, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">150.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">7</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more trandinhthinh">

					<span class="read-more trandinhthinh">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Trần Đình Thịnh là một trong những giáo viên vui tính và nhiệt tình nhất Học Gì Đây? Khác với tính cách điềm đạm, ôn hòa của đa phần các giáo viên Piano khác, ở Trần Đình Thịnh có sự pha trộn những nét tính cách của cả một người dạy học nghiêm khắc, chuyên nghiệp và một người bạn thân thiết vui vẻ cùng học viên. 

Có sự bài bản chuyên nghiệp nhờ theo học Nhạc viện TP. Hồ Chí Minh, cùng với sự gắn bó, tìm hiểu và rèn luyện suốt hơn 10 năm bên cây đàn guitar, Trần Đình Thịnh đã tích lũy được một vốn kiến thức và kinh nghiệm dày dạn để truyền đạt cho học viên. Bên cạnh đó là hơn 3 năm giảng dạy guitar tại nhà, giúp kiến thức sư phạm của thầy cũng tiến bộ vượt bậc đáng kể. 

Ngoài khả năng chơi đàn guitar, Trần Đình Thịnh còn có tố chất về mảng Thanh nhạc, trải qua sự chủ động tìm hiểu, luyện tập, thầy có khả năng ca hát như một ca sĩ thực thụ. Vì vậy, khối kiến thức âm nhạc của thầy khá đa dạng, phong phú, có thể mang đến những hướng tiếp cận và nắm bắt mới mẻ cho học viên. 

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Sinh viên năm 3 Nhạc viện TP.HCM</p>

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

						<p>150.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>120.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="trandinhthinh">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Hà Cẩm Nhung-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="200">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/16-SG-HaCamNhung.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="hacamnhung">Hà Cẩm Nhung</h3>

				<p>Địa chỉ: 144/67A Nguyễn Khoái, phường 2, Quận 4, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">200.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">4</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more hacamnhung">

					<span class="read-more hacamnhung">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Chào các bạn, mình là Hà Cẩm Nhung. Mình có thể giảng dạy guitar hoặc thanh nhạc ở nhà mình hoặc ngay tại nhà học viên. Các bài học sẽ hoàn toàn tập trung vào sở thích và mục tiêu của học viên. 

Mình đã có kinh nghiệm 2 năm dạy nhạc với mọi lứa tuổi, từ các bạn nhỏ đang học tiểu học đến người đã đi làm. Mình luôn hứng thú trong việc giúp đỡ mọi người khai phá khả năng âm nhạc tiềm ẩn của họ, hoặc mang đến cho những người yêu nhạc một môi trường vui vẻ, sáng tạo để trải nghiệm cùng với nhạc cụ họ thích. 

Giáo trình mà mình sử dụng trong quá trình giảng dạy: Phương pháp học guitar lý thuyết & thực hành - Lê Đức Sơn.

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Sinh viên năm 4 Nhạc viện TP.HCM</p>

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

						<p>200.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>160.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="hacamnhung">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Lương Doãn Thắng-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="250">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/17-SG-LuongDoanThang.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="luongdoanthang">Lương Doãn Thắng</h3>

				<p>Địa chỉ: Trương Đình Hợi, phường 18, Quận 4, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">250.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>

						<span class="num-of-rates">7</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more luongdoanthang">

					<span class="read-more luongdoanthang">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Kiên trì và đam mê! Đó là kim chỉ nam trong lớp học nhạc của mình. Những thứ bắt đầu bằng sự tò mò dần trở thành đam mê và nỗi ám ảnh. Và giấc mơ lớn nhất của mình là truyền giảng niềm đam mê đó lại cho người khác! 

Mình bắt đầu chơi đàn guiar từ khi mới lên 6. Có thể nói khả năng sư phạm đã nằm trong gen của mình, khi cả cha mẹ mình cũng đều là giáo viên. Cha mình cũng là một người nghiện âm nhạc, ông đã chia sẻ niềm vui âm nhạc với mình và mình muốn phát triển nó xa hơn nữa! 

Mình luôn tìm kiếm những cách mới và thú vị để dạy guitar. Điểm mạnh của mình bao gồm sự kiên nhẫn, hài hước và đồng cảm với người khác. Bạn muốn học được gì từ guitar? Vào cuối buổi học nếu mình có thể chia sẻ một phần tình yêu âm nhạc cho bạn, nó sẽ mang lại cho mình niềm vui thật sự.

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Tốt nghiệp Nhạc viện TP.HCM</p>

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

						<p>1km</p>

					</div>

				</div>

				<div class="row">

					<h4>Học phí</h4>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại nhà</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>250.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>200.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="luongdoanthang">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Trương Hoàng Nhân-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="200">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/19-SG-TruongHoangNhan.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="truonghoangnhan">Trương Hoàng Nhân</h3>

				<p>Địa chỉ: 1 Mạc Thiên Tích, phường 11, Quận 5, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">200.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">5</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more truonghoangnhan">

					<span class="read-more truonghoangnhan">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Chào mọi người, tôi là Hoàng Nhân. Tôi thích giảng dạy ở mọi lứa tuổi và khả năng, từ những bé 5 tuổi mới bắt đầu đến những học viên trung cấp muốn cải thiện khả năng của mình. 

Đại đa số học viên của tôi là người mới bắt đầu. Tôi có cách tiếp cận thư giãn và thoải mái khi khuyến khích bạn khai phá tiềm năng của mình. Cho dù bạn là người mới bắt đầu hay đã có kinh nghiệm, tôi sẽ đánh giá cẩn thận những điểm mạnh và điểm yếu của bạn và tạo ra một lộ trình học phù hợp với phong cách, sở thích và nhu cầu của từng cá nhân. Tôi sẽ thảo luận về mục tiêu của bạn với âm nhạc và tôi sẽ giúp bạn đạt được điều đó! Sau 3 hoặc 6 tháng với tôi, bạn sẽ học được nền tảng âm nhạc về nhịp điệu, bài tập nghe, tư thế, kỹ thuật, lý thuyết âm nhạc, và một số bài hát yêu thích của bạn trên đàn guitar!

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Sinh viên năm 3 Nhạc viện TP.HCM</p>

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

						<p>200.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>160.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="truonghoangnhan">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Ngô Quang Đạo-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="250">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/20-SG-NgoQuangDao.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="ngoquangdao">Ngô Quang Đạo</h3>

				<p>Địa chỉ: 59 Tản Đà, phường 10, Quận 5, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">250.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">6</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more ngoquangdao">

					<span class="read-more ngoquangdao">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Chào tất cả các bạn! Mình là Quang Đạo, rất vui được làm quen với các bạn trên Hocgiday.com. Âm nhạc là ngôn ngữ chung của nhân loại, là con đường gắn kết mọi người lại với nhau. Thiếu âm nhạc thì chúng ta sẽ mất đi một phần thú vị của cuộc sống. Mình rất yêu thích những tác phẩm cổ điển với các nhạc sĩ Mozart, Chopin, Bach, Beethoven, Kuhlau…; tác phẩm trữ tình lãng mạn của nhạc sĩ Richard Clayderman, Yiruma. 

Với gần 8 năm học guitar và 4 năm kinh nghiệm giảng dạy, học guitar với mình các bạn sẽ được đào tạo guitar một cách bài bản, từ cơ bản đến nâng cao, từ dễ đến khó và có một nền tảng về âm nhạc vững chắc. Mục tiêu khi học guitar với Quang Đạo là các bạn sẽ chơi được những tác phẩm guitar và đệm hát được tác phẩm mà các bạn yêu thích. 

Học guitar với mình các bạn sẽ không thấy sự áp lực mà chúng ta sẽ học trên phương châm cùng trao đổi, cùng luyện tập và cùng tiến bộ. Với phương pháp giảng dạy dể hiểu, cô đọng kết hợp với sự nhiệt tình chắc chắn Ngô Quang Đạo sẽ mang lại cho các bạn những giờ học guitar chất lượng ,đầy thù vị và bổ ích.

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Sinh viên năm 4 Nhạc viện TP.HCM</p>

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

						<p>250.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>200.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="ngoquangdao">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Lê Kim Mai-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="300">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/21-SG-LeKimMai.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="lekimmai">Lê Kim Mai</h3>

				<p>Địa chỉ: 106 Nguyễn Trãi, phường 3, Quận 5, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">300.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>

						<span class="num-of-rates">8</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more lekimmai">

					<span class="read-more lekimmai">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Guitar luôn chiếm trọn tâm trí của tôi từ khi lên 6, vì vậy tôi coi mình là một người giàu kinh nghiệm trong lĩnh vực âm nhạc. 

Tôi thực sự thích làm việc với các học viên có năng lực và chào đón các lứa tuổi và trình độ khác nhau. Tôi đã làm việc cả với các nhạc sĩ chuyên nghiệp và những người đam mê âm nhạc bậc cao. Quãng thời gian giảng dạy của tôi đã cho những kết quả tuyệt vời, và tôi tự hào về những học viên của mình đã giành được giải thưởng cao trong các cuộc thi trong nước. 

Phương pháp giảng dạy được xây dựng kĩ lưỡng của tôi dựa trên sự kết hợp tốt nhất của truyền thống Nga và châu Âu trong giáo dục âm nhạc. Nó nhằm mục đích xây dựng và nâng cao kỹ năng đọc, kỹ thuật và lý thuyết âm nhạc bằng cách khám phá các tác phẩm đa dạng về phong cách.

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Tốt nghiệp Nhạc viện TP.HCM</p>

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

						<p>300.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>240.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="lekimmai">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Đăng Xuân Nguyên-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="300">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/23-SG-DangXuanNguyen.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="dangxuannguyen">Đăng Xuân Nguyên</h3>

				<p>Địa chỉ: Hẻm 187 Kinh Dương Vương, phường 12, Quận 6, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">300.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">12</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more dangxuannguyen">

					<span class="read-more dangxuannguyen">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Với 5 năm kinh nghiệm giảng dạy âm nhạc tuyệt vời, tôi chia sẻ những món quà và tài năng của tôi với những người cũng muốn thể hiện mình qua âm nhạc. Tôi tin rằng âm nhạc là ngôn ngữ trên toàn thế giới và do đó không có ý định để dập tắt bất kỳ học sinh theo phong cách riêng biệt nào. Thay vào đó tôi cho phép học sinh học từ những bài học và kỹ thuật đã học và cùng nhau tìm ra cách để thích ứng với phong cách đó để nghe được âm thanh 'bức tranh âm nhạc' tốt nhất của họ. 

Tôi mong muốn học viên thực hành bên ngoài lớp học để mỗi bài học là một quá trình xây dựng. Tôi khá thoải mái nhưng nghiêm túc về tiến độ. Tôi thích tận hưởng các bài học với bạn và xem bạn phát triển. Sau 3 hoặc 6 tháng học viên sẽ biết cách kiểm soát và sử dụng giọng điệu/cây đàn của họ - hiểu được các cấp độ khác nhau của tiếng nói, giọng nói... Tôi thích làm việc với các học viên trẻ hơn ở trình độ bắt đầu hoặc trung cấp, hơn là học viên có chuyên môn cao.

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Tốt nghiệp Học viện âm nhạc Quốc gia</p>

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

						<p>300.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>240.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="dangxuannguyen">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Đào Hồng Quyên-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="200">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/24-SG-DaoHongQuyen.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="daohongquyen">Đào Hồng Quyên</h3>

				<p>Địa chỉ: 65 Cao Văn Lầu, phường 1, Quận 6, TP. Hồ Chí Minh</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">200.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">5</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more daohongquyen">

					<span class="read-more daohongquyen">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Tôi có đam mê chia sẻ kiến thức âm nhạc với người khác và tin rằng khía cạnh quan trọng nhất của việc dạy nhạc là tạo ra một môi trường khuyến khích, vui vẻ, và cá nhân hoá cho mỗi học sinh. Tôi có hơn 3 năm kinh nghiệm giảng dạy guitar cho học sinh ở mọi lứa tuổi và nền nhạc. Trên hết, bài học của chúng ta sẽ là về việc học những gì bạn muốn học, bất kể thể loại nào. 

Chương trình giảng dạy cho các bài học của chúng ta sẽ đúc kết từ nhiều phương pháp. Chúng bao gồm lý thuyết âm nhạc, đào tạo tai, bài tập đọc ký xướng âm, kỹ thuật, kỹ năng ứng tác và sáng tác. Hãy gửi cho tôi một tin nhắn nếu bạn có bất kỳ câu hỏi nào hoặc nếu bạn không thấy một lịch học phù hợp với bạn! Lịch làm việc của tôi thay đổi thường xuyên và thường linh hoạt, vì vậy chúng ta có thể cùng nhau thống nhất.

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Sinh viên năm 4 Nhạc viện TP.HCM</p>

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

						<p>200.000/60 phút</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

						<p>Tại lớp</p>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">

						<p>160.000/60 phút</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="daohongquyen">Đăng ký ngay</button>

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
							<input type="hidden" name="city" value="TP. Hồ Chí Minh">
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