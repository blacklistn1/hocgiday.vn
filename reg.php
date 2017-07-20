<?php
header('Content-type: text/html; charset=utf-8');
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
if (isset($_POST['register'])) 
{
  $to = 'ndwuong@hocgiday.vn';
  $email_subject = 'Thông tin người dùng ';
  $subject = $_POST['subject'];
  $fullname = $_POST['fullname'];
  $email_subject .= $fullname;
  $tel = $_POST['tel'];
  // $city = $_POST['city'];
  $email_body = 
    "Yêu cầu giáo viên:<br>".
    "Môn học: $subject <br>".
    "Tên: $fullname <br>".
    "Số điện thoại: $tel <br>";
    // "Sống tại: $city <br>";
  if (isset($_POST['learn-at']))
  {
    $email_body .= "Nơi học: ";
    $learnat = array();
    for ($i=0; $i < count($_POST['learn-at']); $i++) { 
      $learnat[$i] = $_POST['learn-at'][$i];
      $email_body .= $learnat[$i]."&nbsp;&nbsp;&nbsp;";
    }
    $email_body .= "<br>";
  }
  if (isset($_POST['time']))
  {
    $time = array();
    $email_body .= "Đăng ký học vào: ";
    for ($k=0; $k < count($_POST['time']); $k++) { 
      $time[$k] = $_POST['time'][$k];
      $email_body .= $time[$k]."&nbsp;&nbsp;&nbsp;";
      
    }
    $email_body .= "<br>";
  }
  if (isset($_POST['price-hidden']))
  {
    $price = $_POST['price-hidden'];
    $email_body .= "Khoảng giá: $price<br>";
  }
  if (isset($_POST['gender']))
  {
    $gender = array();
    $email_body .= "Giới tính giáo viên: ";
    for ($l=0; $l < count($_POST['gender']); $l++) { 
      $gender[$l] = $_POST['gender'][$l];
      $email_body .= $gender[$l]."&nbsp;&nbsp;&nbsp;";
      
    }
    $email_body .= "<br>";    
  }
  if (isset($_POST['level']))
  {
    $level = array();
    $email_body .= "Giáo viên có trình độ: ";
    for ($m=0; $m < count($_POST['level']); $m++) { 
      $level[$m] = $_POST['level'][$m];
      $email_body .= $level[$m]."&nbsp;&nbsp;&nbsp;";

    }
    $email_body .= "<br>";    
  }
  
  $header = "Content-type: text/html; charset=utf-8\r\n";
  $header .= "From: no-reply@anonymous.customer";
  mail($to,$email_subject,$email_body,$header);?>
  <center><h1>Cảm ơn bạn đã đăng ký</h1></center>
  <center><h3>Chúng tôi sẽ liên lạc lại với bạn sau 24h</h3></center>
  <center><a href="http://hocgiday.vn/hoc-piano-tai-ha-noi.php" style="font-size: 130%">Tiếp tục tìm kiếm</a></center>
<?php } ?>
