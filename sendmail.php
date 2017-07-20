<?php
header('Content-type: text/html; charset=utf-8');
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
if (isset($_POST['send'])) 
{
  $fullname = $_POST['fullname'];
  $tel = $_POST['tel'];
  $chosen = $_POST['teacher'];
  $subject = $_POST['subject'];
  $to = 'ndwuong@hocgiday.vn';
  $email_subject = 'Thông tin người dùng'.$fullname;
  $email_body = "Thông tin người dùng đăng ký: ".
    "<br>Tên: $fullname".
    "<br>Số điện thoại: $tel".
    "<br>Đăng ký học với giáo viên: $chosen".
    "<br>Tại trang: 'Học ".$subject."'";
  $header = "Content-type: text/html; charset=utf-8\r\n";
  $header .= "From: no-reply@customer.com";
  mail($to,$email_subject,$email_body,$header);
  $href = '';
  if ($_POST['subject'] == 'guitar')
  {
    $href = 'hoc-guitar-tai-ha-noi.php';
  }
  else
  {
    $href = 'hoc-piano-tai-ha-noi.php';
  }
  ?>
  <center><h1>Cảm ơn bạn đã đăng ký với giáo viên <?php echo $chosen; ?></h1></center>
  <center><h3>Chúng tôi sẽ liên lạc lại với bạn sau 24h</h3></center>
  <center><a href="<?php echo $href ?>" style="font-size: 130%">Tiếp tục tìm kiếm</a></center>
<?php } ?>
