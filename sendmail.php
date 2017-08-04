<?php
header('Content-type: text/html; charset=utf-8');
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
if (isset($_POST['send'])) 
{
  $full_name = $_POST['fullname'];
  $tel = $_POST['tel'];
  $chosen = $_POST['teacher'];
  $subject = $_POST['subject'];
  $city = $_POST['city'];
  $to = 'ndwuong@hocgiday.vn';
  $email_subject = 'Thông tin người dùng '.$full_name;
  $email_body = "Tên: $full_name".
    "<br>Số điện thoại: $tel".
    "<br>Đăng ký học với giáo viên: $chosen";
  $learn_at = array();
  if (isset($_POST['learn-at']))
  {
    $learn_at[0] = $_POST['learn-at'][0];
    $email_body .= "<br>Đăng ký học: $learn_at[0]";
    for ($i = 1; $i < count($_POST['learn-at']); $i++)
    {
      $learn_at[$i] = $_POST['learn-at'][$i];
      $email_body .= ", $learn_at[$i]";
    }
  }
  $learn_day = array();
  if (isset($_POST['learn-day']))
  {
    $learn_day[0] = $_POST['learn-day'][0];
    $email_body .= "<br>Vào: $learn_day[0]";
    for ($k = 1; $k < count($_POST['learn-day']); $k++)
    {
      $learn_day[$k] = $_POST['learn-day'][$k];
      $email_body .= ", $learn_day[$k]";
    }
  }
  $email_body .= "<br>Đăng ký tại trang: 'Học ".$subject." tại ".$city."'";
  $header = "Content-type: text/html; charset=utf-8\r\n";
  $header .= "From: no-reply@customer.com";
  mail($to,$email_subject,$email_body,$header);
  $href = '';
  if ($subject == 'guitar')
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
