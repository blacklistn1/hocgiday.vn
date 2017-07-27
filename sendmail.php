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
  $email_subject = 'Thông tin người dùng '.$fullname;
  $email_body = "Thông tin người dùng đăng ký: ".
    "<br>Tên: $fullname".
    "<br>Số điện thoại: $tel".
    "<br>Đăng ký học với giáo viên: $chosen".
    "<br>Tại trang: 'Học ".$subject." tại Hà Nội'";
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
  <center><h1>Cảm ơn bạn đã đăng ký với giáo viên <?php echo $chosen; ?></h1></center>
  <center><h3>Chúng tôi sẽ liên lạc lại với bạn sau 24h</h3></center>
  <center><a href="<?php echo $href ?>" style="font-size: 130%">Tiếp tục tìm kiếm</a></center>
</body>
</html>

<?php } ?>
