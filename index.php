<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<meta name="charset" content="utf-8">
<style type="text/css" media="screen">
	.container {
		position: relative;
	}
	.img:hover {
		-webkit-filter: brightness(50%);
		filter: brightness(40%);
	}
	.text{
		position: absolute;
		top: 45%;
		left: 10%;
		color: white;
		text-align: center;
	}
</style>
<body>
<?php echo 'Hello World'; ?>
<div class="container">
	<img class="img" src="img/guitar-01.jpg" alt="" onmouseenter="show()" onmouseleave="hide()">
	<p class="text" id="01">This is the text when hover on the image</p>
</div>

<script>
document.getElementById("01").style.display = "none";
function show()
{
	document.getElementById("01").style.display = "block";
}
function hide()
{
	document.getElementById("01").style.display = "none";
}
</script>
</body>
</html>