<?php session_start(); ?>
<?php 
if (isset($_POST['yeucaugiaovien'])) {
	$_SESSION['subject'] = $_POST['subject-hidden'];
}?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Yêu cầu giáo viên</title>
	<meta content="text/html">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome CDN -->
	<script src="https://use.fontawesome.com/d5eddf6cb3.js"></script>

	<!-- Bootstrap CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<!-- JQuery UI -->
	<link rel="stylesheet" type="text/css" href="dist/js/jquery-ui.smoothness/jquery-ui.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

	<!-- Custom style -->
	<style type="text/css" media="screen">
		h1, h2, h3, h4, h5, h6 {
			font-family: 'Montserrat', sans-serif;
			font-weight: bold;
		}
		.reg-box {
			position: relative;
			border: 1px solid grey;
			border-radius: 7px;
			margin-bottom: 2%;
			margin-top: 1%;
			background-color: #eee;
		}
		.reg-form {
			padding-top: 10pt;
			padding-bottom: 10pt;
		}
		.optional {
			border-top: 1pt solid #888;
		}
		.slider-container {
			width: 80%;
		}
		.slider-amount {
			font-weight: bold;
			width: 50%;
		}
		.btn-reg {
			background-color: #f87311;
		}
		#amount {
			width: 100pt;
		}
	</style>

</head>
<body>

<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 reg-box">
	<form class="reg-form" action="register.php" method="POST" role="form">
		<legend>Đăng ký học tại Học Gì Đây</legend>
		<h3>Phần bắt buộc</h3>
		<div class="form-group">
			<label for="">Môn bạn muốn đăng ký: </label>
			<span class="radio">
				<label>
					<input type="radio" name="subject" value="piano" id="chosen-piano" required="required">
					Piano
				</label>
			</span>
			<span class="radio">
				<label>
					<input type="radio" name="subject" value="guitar" id="chosen-guitar" required="required">
					Guitar
				</label>
			</span>
		</div>

		<div class="form-group">
			<input name="fullname" type="text" class="form-control" placeholder="Họ và tên người học" required="required">
		</div>
		<div class="form-group">
			<input name="tel" type="number" class="form-control" placeholder="Số điện thoại liên lạc" required="required">
		</div>
		<hr>
		<div class="optional">
			<h3>Phần mở rộng</h3>
			<div class="form-group">
				<label for="learn-at" >Bạn muốn học tại: </label>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="learn-at[]" value="Tại nhà">
						Tại nhà
					</label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="learn-at[]" value="Tại lớp">
						Tại lớp
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="time">Vào thời gian: </label><br>
				<div class="checkbox">
					<label><input type="checkbox" name="time[]" value="Thứ 2"> Thứ 2</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="time[]" value="Thứ 3"> Thứ 3</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="time[]" value="Thứ 4"> Thứ 4</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="time[]" value="Thứ 5"> Thứ 5</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="time[]" value="Thứ 6"> Thứ 6</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="time[]" value="Thứ 7"> Thứ 7</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="time[]" value="Chủ nhật"> Chủ nhật</label>
				</div>
			</div>
			<div class="container-fluid slider-filter form-group">
				<label for="">Với mức học phí: </label>
				<div class="row">
					<div class="slider-container center-block" id="price-slider-reg"></div>
				</div>
				<div class="row text-center slider-info" id="slider-info">
					<input id="amount" type="text" name="price" value="" disabled="disabled" class="slider-amount"> đồng/h
					<input type="hidden" name="price-hidden" value="">
				</div>
			</div>
			<h4>Yêu cầu về giáo viên:</h4>
			<div class="form-group">
				<label for="gender">Giới tính: </label><br>
				<div class="checkbox">
					<label><input type="checkbox" name="gender[]" value="Nam"> Nam</label>&nbsp;&nbsp;
					<label><input type="checkbox" name="gender[]" value="Nữ"> Nữ</label>
				</div>
			</div>
			<div class="form-group">
				<label for="level">Trình độ:</label><br>
				<div class="checkbox">
					<label><input type="checkbox" name="level[]" value="Tiến sĩ"> Tiến sĩ</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="level[]" value="Thạc sĩ"> Thạc sĩ</label>				
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="level[]" value="Đại học"> Đại học</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="level[]" value="Trung cấp"> Trung cấp</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="level[]" value="Không chuyên"> Không chuyên</label>
				</div>
			</div>	
		</div>
		
		<button name="register" type="submit" class="btn btn-warning btn-reg">Đăng ký</button>
	</form>	
</div>


<!-- jQuery -->
<script src="http://code.jquery.com/jquery-3.2.1.js"></script>
<!-- JQuery UI -->
<script src="dist/js/jquery-ui.smoothness/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>	
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- MY script -->
<script src="dist/js/app.js" type="text/javascript" charset="utf-8"></script>

<!-- Custom script -->
<script type="text/javascript" charset="utf-8" async>
	$(function(){
		<?php if ($_SESSION['subject'] == 'guitar') {?>
			$('#chosen-guitar').prop("checked",true);
			$('#chosen-piano').prop("checked",false);
		<?php } ?>
		<?php if ($_SESSION['subject'] == 'piano') {?>
			$('#chosen-piano').prop("checked",true);
			$('#chosen-guitar').prop("checked",false);
		<?php } ?>
	});
</script>

</body>
</html>
