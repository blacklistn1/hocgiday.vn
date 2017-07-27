<?php
session_start();
header('Content-type: text/html; charset=utf-8');
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
if (isset($_POST['register'])) 
{
  $to = 'ndwuong@hocgiday.vn';
  $email_subject = 'Thông tin người dùng ';
  $subject = $_POST['subject'];
  $subject_session = $_SESSION['subject'];
  $fullname = $_POST['fullname'];
  $email_subject .= $fullname;
  $tel = $_POST['tel'];
  $email_body = 
    "Yêu cầu giáo viên:".
    "<br>Môn học: $subject ".
    "<br>Tên: $fullname ".
    "<br>Số điện thoại: $tel";
  if (isset($_POST['learn-at']))
  {
    $email_body .= "<br>Nơi học: ";
    $learnat = array();
    for ($i=0; $i < count($_POST['learn-at']); $i++) { 
      $learnat[$i] = $_POST['learn-at'][$i];
      $email_body .= $learnat[$i]."&nbsp;&nbsp;&nbsp;&nbsp;";
    }
  }
  if (isset($_POST['time']))
  {
    $time = array();
    $email_body .= "<br>Đăng ký học vào: ";
    for ($k=0; $k < count($_POST['time']); $k++) { 
      $time[$k] = $_POST['time'][$k];
      $email_body .= $time[$k]."&nbsp;&nbsp;&nbsp;&nbsp;";
    }
  }
  if (isset($_POST['price-hidden']))
  {
    $price = $_POST['price-hidden'];
    $email_body .= "<br>Khoảng giá: $price";
  }
  if (isset($_POST['gender']))
  {
    $gender = array();
    $email_body .= "<br>Giới tính giáo viên: ";
    for ($l=0; $l < count($_POST['gender']); $l++) { 
      $gender[$l] = $_POST['gender'][$l];
      $email_body .= $gender[$l]."&nbsp;&nbsp;&nbsp;&nbsp;";
      
    }  
  }
  if (isset($_POST['level']))
  {
    $level = array();
    $email_body .= "<br>Giáo viên có trình độ: ";
    for ($m=0; $m < count($_POST['level']); $m++) { 
      $level[$m] = $_POST['level'][$m];
      $email_body .= $level[$m]."&nbsp;&nbsp;&nbsp;&nbsp;";
    } 
  }
  $email_body .= "<br>Gửi yêu cầu tại trang : 'Học ".$subject_session." tại Hà Nội'";
  $header = "Content-type: text/html; charset=utf-8\r\n";
  $header .= "From: no-reply@anonymous.customer";
  mail($to,$email_subject,$email_body,$header);
  $subject_session = $_SESSION['subject'];
  $href = '';
  if ($_POST['subject'] == 'piano')
  {
    $href = 'hoc-piano-tai-ha-noi.php';
  }
  if ($_POST['subject'] == 'guitar')
  {
    $href = 'hoc-guitar-tai-ha-noi.php';
  }
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Cảm ơn</title>
</head>
<body>
<!-- Google Code for L&#7921;a ch&#7885;n gi&aacute;o vi&ecirc;n v&agrave; &#273;&#7875; l&#7841;i S&#272;T, T&ecirc;n Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 872148788;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "u_3DCKPrtnMQtN7vnwM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/872148788/?label=u_3DCKPrtnMQtN7vnwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</body>
</html>
  <center><h1>Cảm ơn bạn đã đăng ký</h1></center>
  <center><h3>Chúng tôi sẽ liên lạc lại với bạn sau 24h</h3></center>
  <center><a href="<?php echo $href ?>" style="font-size: 130%">Tiếp tục tìm kiếm</a></center>
<?php } ?>
