<?php include_once("av-control.php");
$read = "";
?>
<html>
<head>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<meta http-equiv="refresh" content="60">
<title>A/V Control</title>
<style>
@font-face {
    font-family: 'Patua One';
    src: url('/fonts/PatuaOne-Regular.ttf');
}
@font-face {
		font-family: 'Roboto';
		src: url('/fonts/Roboto-Regular.ttf');
}
</style>
</head>
<body style="background-image:url(tree.jpg);background-position:center;background-repeat:no-repeat;background-size:cover;">
<form method="post">
		<div style="text-align: center; font-family: 'Patua One', cursive;font-size:36pt;color:#fff;margin-bottom:25px">
			City Hall Conference Room AV Control<?php echo $read ?>
			</div>
<table style="width:98%;background-image:url(logo.png);background-repeat:no-repeat;background-position:center;z-index:5;margin-left:1%;margin-right:1%font-family: 'Roboto', 'Ubuntu', sans-serif;">
<tr>
		<td>
				<button name="vol-max"class="btn btn-primary" style="width:235; height: 45; font-size: 24pt; font-weight:400; margin-bottom: 5pt; vertical-align: middle;" >Volume Max</button>
<br>
				<button name="vol-5"class="btn btn-primary" style="width:235; height: 45; font-size: 24pt; font-weight:400; margin-bottom: 5pt; vertical-align: middle;" >5</button>
<br>
				<button name="vol-4"class="btn btn-primary" style="width:235; height: 45; font-size: 24pt; font-weight:400; margin-bottom: 5pt; vertical-align: middle;" >4</button>
<br>
				<button name="vol-3"class="btn btn-primary" style="width:235; height: 45; font-size: 24pt; font-weight:400; margin-bottom: 5pt; vertical-align: middle;" >3</button>
<br>
				<button name="vol-2"class="btn btn-primary" style="width:235; height: 45; font-size: 24pt; font-weight:400; margin-bottom: 5pt; vertical-align: middle;" >2</button>
<br>
				<button name="vol-1"class="btn btn-primary" style="width:235; height: 45; font-size: 24pt; font-weight:400; margin-bottom: 5pt; vertical-align: middle;" >1</button>
<br>
				<button name="vol-mute"class="btn btn-primary" style="width:235; height: 45; font-size: 24pt; font-weight:400;" >Volume Mute</button>
		</td>
		<td>
		</td>
		<td style="text-align: right;">
		<button name="sys-on"class="btn btn-success" style="width:235; height:200; font-size: 32pt;" >SYSTEM<br>ON</button>
		<br>
		<br>
		<button name="sys-off"class="btn btn-danger" style="width:235; height:200; font-size: 32pt;" >SYSTEM OFF</button>
		</td>

</tr>
<tr style="height:80px;>"
<td></td>
<td></td>
<td></td>
</tr>
<tr>
	<td>
	</td>
	<td style="text-align:center;">
		<button name="source-table-vga" style="width:235; height: 103; font-size: 18pt; font-weight:400;padding-left:0pt;padding-right:5pt; background: transparent; border: none;"><img src="table-vga.png" width="225" height="98"></button>
		<button name="source-dvd-bluray"style="width:235; height: 103; font-size: 18pt; font-weight:400;padding-left:5pt;padding-right:5pt;background: transparent; border: none;"><img src="dvd-bluray.png"width="225" height="98"></button>
		<button name="source-clickshare"style="width:235; height: 103; font-size: 18pt; font-weight:400;padding-left:5pt;padding-right:0pt; background: transparent; border: none;"><img src="clickshare.png"width="225" height="98"></button>
	</td>
</tr>
</table>
</form>
</body>
</html>
