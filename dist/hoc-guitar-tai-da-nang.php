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

		<h3 id="h3">LỰA CHỌN GIỮA HÀNG CHỤC GIÁO VIÊN GUITAR TẠI ĐÀ NẴNG</h3>

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



	<!-- Profile row: Nguyễn Việt Anh-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="100">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/DN-1-Nguyen-Viet-Anh.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="nguyenvietanh">Nguyễn Việt Anh</h3>

				<p>Địa chỉ: 24 Giang Văn Minh, quận Hải Châu, thành phố Đà Nẵng</p>

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

					<p>Cơ bản</p>

				</div>

			</div>

			<!-- Description -->

			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<h4>Vài nét về giáo viên</h4>

					<p>Học guitar để làm gì?

Chắc hẳn nếu bạn nói với một ai đó rằng bạn sẽ đi học guitar thì họ sẽ nghĩ rằng bạn học guitar để tán gái...:))) nhưng thật ra thì không chỉ đơn giản như vậy, tớ có thể khẳng định rằng mục đích CHÂN CHÍNH của những cậu trai học guitar không chỉ để tán gái, mà là để tán RẤT NHIỀU GÁI =))

Đùa vậy thôi chứ thực ra tớ đã tán được cô nào nhờ guitar đâu...

Ngày xưa ấy. Khi chưa biết chơi guitar, cuộc sống của tớ tẻ nhạt lắm, chỉ biết học rồi về nhà lại cắm đầu vào điện tử, đợt đấy lại còn bị cái tật sợ người lạ nên cũng ít bạn bè lắm, bạn gái thì càng không =(( lúc ấy tớ cũng chả biết làm gì để thay đổi cả, chỉ là một lần tình cờ đi sinh hoạt hè, nhìn thấy thằng bạn đánh guitar cho lũ trẻ con vây xung quanh, thấy thích lắm, thế là quyết tâm học từ đấy, tính đến nay thì cũng gần 5 năm rồi, trình độ đệm đàn thì cũng k quá kinh khủng nhưng cũng đủ lòe các em gái hihi :v “nhưng điều quan trọng nhất guitar mang lại cho tớ: là sự tự tin trươc đám đông, tư duy dám thể hiện mình, niềm vui trong cuộc sống, thêm nhiều bạn bè và nhiều cơ hội phát triển bản thân”. Đọc đến đây các cậu đã biết t học guitar để làm gì chưa? Còn các cậu? Các cậu học guitar để làm gì??? Còn chờ đợi chi mà không nhấc mày lên gọi cho tớ để chúng mình cùng học guitar nhỉ...im waiting for yaaaa :3

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Đại học Bách Khoa Đà Nẵng</p>

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

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right text-right">

						<p>2km</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenvietanh">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Ngô Chí Kiên-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="200">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/DN-2-Ngo-Chi-Kien.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="ngochikien">Ngô Chí Kiên</h3>

				<p>Địa chỉ: 7 Tiên Sơn 4, quận Hải Châu, thành phố Đà Nẵng</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">200.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>

						<span class="num-of-rates">4</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more ngochikien">

					<span class="read-more ngochikien">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Chào tất cả mọi người! Mình là Ngô Chí Kiên, rất vui được gặp gỡ mọi người trên Website Hocgiday.com. Có lẽ là điều khiến mình gần gũi mọi người hơn chính là qua con đường âm nhạc. Rất vui được chia sẻ với mọi người về bộ môn Guitar - Guitar giúp cho mình cảm nhận được ý nghĩa của cuộc sống. Những lúc buồn có thể đánh lên những giai điệu nhẹ nhàng, hoặc lúc vui thì cây đàn cũng chia sẻ được những nhộn nhịp và thoải mái trong cuộc sống. Hay những lúc cảm thấy bâng khuâng, nhớ nhung một ai đó, những giai điệu của bài Autumn Leaves - Eric Clapton lại được cất lên trong căn phòng nhỏ của mình.

Thần tượng âm nhạc của mình là Eric Clapton, đây là tác giả mình nghe rất nhiều trong ngày, trước khi đi ngủ hoặc mỗi sáng thức dậy. Nó giúp cho tinh thần của mình lắng đọng lại và bình tĩnh hơn. Mục tiêu trên con đường giảng dạy âm nhạc của mình chính là truyền đạt được trọn vẹn những gì mình cảm nhận được cho học sinh, giúp học sinh khám phá được thêm một tầng cảm xúc mới trong các tác phẩm do họ tự tay chơi.

Trong mỗi giờ học, học sinh sẽ được học trong một không khí vui vẻ thoải mái, giống như một buổi chia sẻ, bày tỏ cảm xúc giữa mình và học sinh. Đặc biệt mình rất yêu thích các bạn nhỏ, vì các bạn như một tờ giấy trắng. Có những bạn hơi khó gần, có những bạn lại ít nói ít cười, hay ngại ngùng, nhưng sau khi qua một số buổi học, bằng nụ cười của bản thân mình, nhưng hơn cả là nụ cười của âm nhạc, hi vọng sẽ giúp các bạn đó cởi mở hơn với mọi người xung quanh.

Hãy cho mình cơ hội giúp bạn khám phá một thế giới âm nhạc, mới lạ, nhẹ nhàng và nhiều điều thú vị nhé!

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

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right text-right">

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="ngochikien">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Phạm Trung Kiên-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="200">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/DN-3-Pham-Trung-Kien.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="phamtrungkien">Phạm Trung Kiên</h3>

				<p>Địa chỉ: 10 Xuân Diệu, quận Hải Châu, thành phố Đà Nẵng</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">200.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">3</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more phamtrungkien">

					<span class="read-more phamtrungkien">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Chào bạn!

Khi đã đọc đến những dòng này thì chắc giữa chúng ta cũng đã có một ấn tượng nào đó. Profile bên trên khá là cơ bản, những điều mình chia sẻ sau đây sẽ giúp cho các bạn dễ dàng hơn khi quyết định chúng ta có gặp nhau và làm việc với nhau hay không nhé!

Trong khoảng 2 năm, mình đã từng dạy khá là nhiều bạn học sinh. Các bạn đến với môn học, đến với nhạc cụ với nhiều lí do khác nhau, nhưng phần lớn đến từ sở thích cá nhân. Có những bạn thích và rất có năng khiếu, học khá nhanh và tiếp thu rất tốt. Đương nhiên các bạn ấy sẽ nhanh chóng chơi được nhạc cụ mình học và có thể tự đệm hát hay đệm đàn cho người khác hát. Những trường hợp khác, qua nhiều lần tiếp xúc mình cũng đã đưa ra được phương pháp hợp lý giúp các bạn cơ bản nắm được các quy tắc và hiểu một phần cách chơi nhạc cụ. Mình cũng đã soạn được giáo trình guitar cơ bản cho riêng việc giảng dạy của bản thân, và đang áp dụng nó trong khi dạy cho học sinh. Chỉ là cơ bản thôi nhé, chúng ta học từ cơ bản, mà đối với nhạc cụ đặc biệt là guitar thì phần cơ bản đã chiếm rất nhiều rồi. 

Tùy từng độ tuổi và năng khiếu mà hiệu quả học sẽ khác nhau. Trên hết còn do nỗ lực và sự chăm chỉ đến từ phía người học. Mình khá là cố chấp trong việc không công nhận học sinh lười học, và chân thành khuyên các bạn, trước khi học một thứ gì đó hãy xác định mình sẽ chăm chỉ, với những gì đòi hỏi năng khiếu thì sự chăm chỉ ấy phải gấp vài chục lần bình thường. Cũng không quá nặng nề như ôn thi đâu, nhưng chăm chỉ là cần thiết nhé. 

Thật ra nếu như bạn thích, và chăm chỉ thì đàn guitar hay các loại nhạc cụ cũng không quá thách thức với bất cứ ai. Mình tin là giờ học nhạc sẽ khác và thú vị hơn nhiều so với học văn hóa. Đặc biệt là với những bạn nhỏ tuổi thì học nhạc là cách khá hữu hiệu giúp các em bớt căng thẳng với việc học trên lớp. Mình nhận thấy các em bộc lộ khá nhiều, rất dễ thương, khác so với bình thường. Chúng ta sẽ làm việc trên tinh thần thoải mái nhất có thể.

Mong rằng mình có thể là người đem đến nhiều điều thú vị, và cùng đồng hành với các bạn. Chúng ta đến với âm nhạc không phải để biểu diễn, để thể hiện điều gì to tát, âm nhạc là để mọi người vui vẻ và thể hiện cảm xúc dễ dàng hơn. 

Chúc các bạn thành công, và hẹn gặp lại!

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Đại học sư phạm - Đại học Đà Nẵng</p>

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

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right text-right">

						<p>4km</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="phamtrungkien">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Đỗ Đức Việt-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="400">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/DN-4-Do-Duc-Viet.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="doducviet">Đỗ Đức Việt</h3>

				<p>Địa chỉ: 5 Lê Văn Long, quận Hải Châu, thành phố Đà Nẵng</p>

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

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more doducviet">

					<span class="read-more doducviet">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Đỗ Đức Việt, Tốt nghiệp thạc sĩ Học Viện Âm Nhạc Quốc Gia, có kinh nghiệm giảng dạy trên 4 năm dạy trường nhạc, 8 năm dạy tại nhà và đã từng đi thi các cuộc thi lớn nhỏ.

Việt nhận dạy thanh nhạc cho các bạn đam mê Guitar và ca hát. Trình độ dạy Cơ bản - Nâng cao - Chuyên sâu theo phuơng pháp hiện đại được đúc kết từ các phương pháp truyền thống.

"Trước hết, tôi rất say mê việc dạy nhạc theo cách để mỗi học sinh cảm nhận được niềm vui sáng tạo khi chơi nhạc. Bất kể độ tuổi, trình độ kỹ năng, hay nhạc cụ, tôi hoàn toàn tin tưởng rằng âm nhạc sẽ đáp ứng được dù bạn là ai và làm phong phú cuộc sống của bạn theo những cách đặc biệt. Tôi sẽ làm việc với bạn dựa trên những gì bạn muốn học, kết hợp kỹ năng, lý thuyết âm nhạc, sự khéo léo, kỹ thuật, và các cải tiến vào chương trình giảng dạy để truyền thật nhiều cảm hứng cho chúng ta ở mỗi bài học".

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Tốt nghiệp thạc sĩ Học Viện Âm Nhạc Quốc Gia</p>

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

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right text-right">

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="doducviet">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Phạm Thu Oanh-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="100">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/DN-5-Pham-Thu-Oanh.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="phamthuoanh">Phạm Thu Oanh</h3>

				<p>Địa chỉ: 2 Thái Thị Bội, quận Thanh Khê, thành phố Đà Nẵng</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">100.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">4</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more phamthuoanh">

					<span class="read-more phamthuoanh">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Chào các quý phụ huynh và các bạn học viên từ hocgiday.com tôi là Phạm Thu Oanh, rất vui được giao lưu học hỏi và làm quen với tất cả các bạn trong Học gì đây. Có lẽ không cần phải nói nữa các bạn cũng đã biết về tác dụng của âm nhạc trong đời sống tinh thần của con người.

Là một giáo viên Guitar, tôi rất mong có thể truyền cảm hứng cũng như giúp các bạn tiếp cận với bộ môn Guitar. Nhạc công yêu thích của tôi là B.B. King, với những bản Guitar bất hủ, sống mãi qua các thời đại, và tôi cũng bị ảnh hưởng rất nhiều bởi người nghệ sĩ lỗi lạc này.

Phương châm day học của tôi là: bằng cấp quan trọng nhưng k phải là tất cả. Cái quan trọng là trong quá trình học các bạn tiếp thu được gì, có gì thay đổi. Tôi không dám chắc có thể giúp bạn trở thành thiên tài. Nhưng tôi đảm bảo sau khi học 10 buổi các bạn sẽ thấy sự thay đổi về cách nhìn nhận bộ môn Guitar. Có khả năng tập trung cao, dễ dàng áp dụng sang các bộ môn khác vì Guitar là tổng hòa các giác quan, khả năng tập trung cao và rèn luyện tính kiên trì.

Với kinh nghiệm 1 năm dạy tại nhà, cho rất nhiều đối tượng và mọi lứa tuổi, rất mong được hợp tác và hướng dẫn các bạn tiếp cận với bộ môn nghệ thuật này. Thân chào các bạn học viên tương lai và quý phụ huynh tại Học Gì Đây!

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Đại học sư phạm - Đại học Đà Nẵng</p>

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

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right text-right">

						<p>3km</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="phamthuoanh">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Nguyễn Thanh Mơ-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="200">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/DN-6-Nguyen-Thanh-Mo.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="nguyenthanhmo">Nguyễn Thanh Mơ</h3>

				<p>Địa chỉ: Đỗ Ngọc Du, quận Thanh Khê, thành phố Đà Nẵng</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">200.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>

						<span class="num-of-rates">7</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyenthanhmo">

					<span class="read-more nguyenthanhmo">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Xin chào các bạn!

Mình là Nguyễn Thanh Mơ hiện đã Tốt nghiệp Đại Học Văn Hóa nghệ thuật quân đội. Với nhiều kinh nghiệm tham gia nhiều chương trình nghệ thuật lớn nhỏ như : Khát Vọng Trẻ 8 . Hiến Dâng Cho Tổ quốc,… Cùng nhiều hoạt động khác liên quan đến âm nhạc cùng với đó là sự đào tạo bài bản về kỹ năng sư phạm tại trường, mình tham gia giảng dạy và gia sư Guitar và Piano, trình độ Cơ bản - Nâng cao. 

Mình đã từng dạy tại nhiều trung tâm âm nhạc trong vòng 2 năm trở lại đây. Rất mong được làm quen, cùng học tập với các bạn và phát triển với bộ môn Guitar nói riêng và các môn âm nhạc nói chung này.

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

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right text-right">

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenthanhmo">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Nguyễn Hoàng Sơn-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="200">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/DN-7-Nguyen-Hoang-Son.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="nguyenhoangson">Nguyễn Hoàng Sơn</h3>

				<p>Địa chỉ: K323 Trường Chinh, quận Thanh Khê, thành phố Đà Nẵng</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">200.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">3</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyenhoangson">

					<span class="read-more nguyenhoangson">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Chào các quý phụ huynh và các bạn học viên từ https://hocgiday.com/ mình là Nguyễn Hoàng Sơn - giảng viên Guitar Tốt nghiệp học viện âm nhạc quốc gia năm 2013với thế mạnh sở trường của mình là cổ điển, hòa tấu, ngoài ra là đệm hát, cover... do từ nhỏ mình đã có khoảng thời gian 4 năm học Guitar và cho tới giờ vẫn thường xuyên là nhạc công tại các quán cafe và khách sạn lớn của Đà Nẵng.

Mình tiếp xúc với âm nhạc từ năm 6 tuổi và bắt đầu làm quen với cây đàn Guitar từ năm 10 tuổi. Trong âm nhạc hàn lâm thì người ảnh hưởng và truyền nhiều đam mê nhiều nhất tới mình khi học cây đàn này là Bach do chủ yếu trong suốt quãng thời gian đi học mình rất hay chơi các tác phẩm của ông.

Mình đã và đang cộng tác cho khá nhiều các trung tâm âm nhạc lớn nhỏ tại Đà Nẵng và đang theo học thi lấy chứng chỉ âm nhạc quốc tế LCM (London College of Music) với mục đích đối tượng học sinh hướng đến là trẻ nhỏ (5t trở lên) và tất nhiên cả người lớn với phương pháp dạy học khác nhau mình hoàn toàn tự tin với chuyên môn và kĩ năng sư phạm đã tích lũy được đến thời điểm này!

Khi dạy học sinh mình chú trọng nhiều hơn đến những kĩ năng cơ bản nhất từ ngón tay, thế tay, dáng ngồi sau đó mới đi vào trình bày bản nhạc và nguyên tắc hơn vẫn là : Sự luyện tập của học sinh ở nhà rất quan trọng tới tiến độ học và sự tiến bộ theo thời gian của học sinh đó và thầy giáo chỉ là người dẫn dắt và sửa và góp ý cho các bạn mỗi buổi tới lớp. Trong mỗi tiết dạy , mình khá hiền và hòa đồng với học sinh với mục đích cho học sinh có được sự thoải mái nhất khi học nghệ thuật tuy nhiên vẫn phải có những nguyên tắc và khuôn khổ nhất định để có được những tiết học chất lượng.

Hi vọng Nguyễn Hoàng Sơn có cơ hội được hợp tác và được làm việc cùng các quý phụ huynh và các bạn học viên. Xin cảm ơn!

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Tốt nghiệp hệ trung cấp học viện âm nhạc quốc gia năm 2013</p>

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

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right text-right">

						<p>2km</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenhoangson">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Hoàng Thái Hòa-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="250">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/DN-8-Hoang-Thai-Hoa.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="hoangthaihoa">Hoàng Thái Hòa</h3>

				<p>Địa chỉ: 21 Khúc Hạo, quận Sơn Trà, thành phố Đà Nẵng</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">250.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">2</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more hoangthaihoa">

					<span class="read-more hoangthaihoa">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Tôi rất yêu việc dạy nhạc! 

Tôi đã là một giảng viên guitar chuyên nghiệp trong hơn 4 năm. Thông qua các trải nghiệm gia sư 1vs1, tôi đã phát triển một chương trình để phù hợp với mục tiêu của người học. Tôi đề cao kỹ thuật với các buổi luyện tập được thiết kế để nâng cao kỹ năng của học sinh một cách đồng đều trên nhiều phạm trù khác nhau như pick, fret, âm giai, hợp âm, luyện nhịp, và luyện tai. 

Tôi có thể hướng dẫn người mới bắt đầu một cách hoàn chỉnh đến khi họ có thể chơi các bài hát và "have fun". Đối với học viên muốn luyện tập chuyên sâu hơn, tôi có một giáo trình đảm bảo sẽ làm cho bạn trở thành một nhạc công tốt.

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Tốt nghiệp Học Viện âm nhạc Huế</p>

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

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right text-right">

						<p>5km</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="hoangthaihoa">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Nguyễn Văn Thanh-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="200">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/DN-9-Nguyen-Van-Thanh.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="nguyenvanthanh">Nguyễn Văn Thanh</h3>

				<p>Địa chỉ: số 9 Tô Hiến Thành, quận Sơn Trà thành phố Đà Nẵng</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">200.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>

						<span class="num-of-rates">5</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more nguyenvanthanh">

					<span class="read-more nguyenvanthanh">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Chào các bạn! Mình bắt đầu chạm vào cây guitar lần đầu tiên từ hồi 12 tuổi, cũng khá là tình cờ một lần bố mình say rượu và mang một cây guitar về nhà. Đó cũng là bắt đầu hành trình khám phá âm nhạc của mình, khá là kì lạ.

 

Học guitar sẽ mệt lắm. Thời gian đầu ngày nào bạn cũng sẽ đau tay, nhất là đầu ngón tay trái khi mới tập ấn từng phím trên đàn, tay phải loằng ngoằng móc dây sao cho ra được tiếng. Bạn phải học cách cầm đàn cho đúng, học cách mặc kệ cơn đau mà tập tiếp, học cách chỉ nhìn vào bản nhạc dài dằng dặc các kí tự mà xướng được đúng thành một bài hát hoàn chỉnh. Nếu bạn không có người hướng dẫn mà tay trái bạn ấn đàn sai, có thể bạn sẽ phải nghỉ chơi một thời gian vì tay quá đau không chơi được.

 

Tuy nhiên học guitar cũng vui lắm. Những khi ngồi với những người bạn bên lò nướng thịt trong một buổi chiều cuối tuần đi picnic, bạn có thể đệm để cho tất cả mọi người cùng hòa chung tiếng hát vào một ca khúc nổi tiếng, vui nhộn trong khi đợi thịt chín. Hay khi buồn bạn đã lỡ có tình cảm với một người nhưng chẳng được đáp lại, bạn lại lấy cây đàn ra, chơi một bài solo, như một người bạn trong màn đêm, thấu hiểu và tâm sự.

 

Cho đến thời điểm này mình đã dạy guitar được 2 năm, và học sinh của mình khi đến lớp cần có ý thức làm bài về nhà. Cách dạy của mình điều chỉnh theo từng học sinh, và với mỗi học sinh yêu thích dòng nhạc khác nhau mình sẽ có những bài tập khác nhau trong dòng nhạc đó, với độ khó tăng dần, một phần tạo hứng thú cho quá trình học tập của bạn, một phần là để cho các bạn có được những tác phẩm có thể biểu diễn được sau này luôn.

 

Vậy nếu bạn muốn được học theo giáo trình được tùy chỉnh theo riêng bạn, học với sự phấn khích và tò mò một chút, để tập sang bài mới, để nghe những tiết tấu mới, chào mừng bạn đến với lớp học của mình!

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

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right text-right">

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="nguyenvanthanh">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Cao Văn Hậu-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="150">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/DN-10-Cao-Van-Hau.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="caovanhau">Cao Văn Hậu</h3>

				<p>Địa chỉ: số 2 Đặng Thái Thân, quận Ngũ Hành Sơn, thành phố Đà Nẵng</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">150.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>

						<span class="num-of-rates">6</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more caovanhau">

					<span class="read-more caovanhau">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Là một trong những giảng viên sở hữu bộ hồ sơ thành tích xuất sắc tại Học Gì Đây?, thông minh, nhạy bén và yêu nghệ thuật sâu sắc, từ rất lâu Cao Văn Hậu đã xác định cho mình phương pháp tìm hiểu, học tập, khám phá và theo đuổi đam mê một cách nghiêm túc nhưng vẫn hết sức mới mẻ, hiện đại.

Tốt nghiệp trung cấp Học Viện âm nhạc Huế, cùng với những gì mà thầy giáo thể hiện, có thể nói Cao Văn Hậu là một nghệ sĩ chơi đàn bằng đôi tai cảm thụ nhạy bén, bằng tình yêu Guitar chân thành, bằng trải nghiệm bản thân trong những lần va chạm thực tiễn.

Hơn 6 năm gắn bó với cây đàn Guitar rèn luyện cho thầy giáo một đôi tay linh hoạt và uyển chuyển, đủ để có thể nắm bắt và truyền giảng cho các học viên mới bắt đầu đến nâng cao.

					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Tốt nghiệp trung cấp Học Viện âm nhạc Huế</p>

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

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right text-right">

						<p>4km</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="caovanhau">Đăng ký ngay</button>

					</div>

				</div>

			</div>

		</div> <!-- End Profile detail -->

	</div> <!-- End Profile box --> 

<!-- Profile row: Hoàng Thái Tùng-->

	<!-- Profile box -->

	<div class="container-fluid hgd-profile-box hanoi" data-price="250">

		<div class="row hgd-profile ">

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">

					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="https://www.hocgiday.com/wp-content/uploads/2017/06/DN-11-Hoang-Thai-Tung.jpg" alt="teacher">

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">

				<h3 id="hoangthaitung">Hoàng Thái Tùng</h3>

				<p>Địa chỉ: Đại An 5, quận Ngũ Hành Sơn, thành phố Đà Nẵng</p>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">

					<h3 id="unit-price">Học phí</h3>

					<p class="unit-price">250.000/60 phút</p>

					<h3 id="rating">Đánh Giá</h3>

					<div class="rating-star-box">

						<span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>

						<span class="num-of-rates">1</span>

					</div>

				</div>

			</div>

			<div class="d-flex align-self-stretch profile-column">

				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more hoangthaitung">

					<span class="read-more hoangthaitung">&gt;&gt; Tìm hiểu thêm</span>

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

					<p>Tôi sẽ dạy bạn bắt đầu từ con số 0 và cho bạn thấy thế giới rộng lớn của âm nhạc. Các điểm đến là vô tận, nhưng tôi sẽ đưa bạn đến mục tiêu của chính bạn. Bạn sẽ được học về nốt nhạc, âm giai, hợp âm... làm sao cho chúng phù hợp và bổ trợ cho nhau? Tôi sẽ cho bạn thấy! 

Tôi sẽ đưa ra những bản nhạc với những mục tiêu cụ thể. Sự hiểu biết cộng hưởng với khả năng sẽ cho chúng ta sự tự do trong âm nhạc!

Gu âm nhạc của tôi được ảnh hưởng bởi các thần tượng nhạc Blues và Jazz, nhưng tôi có thể chơi nhiều thể loại nhạc khác nhau và linh hoạt thay đổi để phát triển khả năng của mỗi học viên dựa trên sở thích của họ.					</p>

				</div>

			</div>



			<!-- End description -->

			<!-- Left column at md and lg -->

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 

				<div class="row">

					<h4>Học vấn</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	

						<p>Tốt nghiệp trung cấp Học Viện âm nhạc quốc gia</p>

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

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right text-right">

						<p>5km</p>

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

						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="hoangthaitung">Đăng ký ngay</button>

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
							<input type="hidden" name="city" value="Đà Nẵng">
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