<?php include_once("av-control.php") ?>
<html>
<head>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<meta http-equiv="refresh" content="60">
<title>A/V Control</title>
</head>
<body style="background-image:url(tree.jpg);background-position:center;background-repeat:no-repeat;background-size:cover;">
<form method="post">
		<div style="text-align: center; font-family: Arial;font-size:36pt;color:#fff;font-weight:600;margin-bottom:25px">
			City Hall Conference Room AV Control
			</div>
<table style="width:98%;background-image:url(logo.png);background-repeat:no-repeat;background-position:center;z-index:5;margin-left:1%;margin-right:1%">
<tr>
		<td>
			<button name="vol-up"class="btn btn-primary" style="width:235; height: 125; font-size: 18pt; font-weight:400;" >Volume Down</button>
			<br><br>
			<button name="vol-dn"class="btn btn-primary" style="width:235; height: 125; font-size: 18pt; font-weight:400;" >Volume Up</button>
			<br><br>
			<button name="vol-dn"class="btn btn-dark" style="width:235; height: 125; font-size: 18pt; font-weight:400;" >Volume Mute</button>
		</td>
		<td>
		</td>
		<td style="text-align: right;">
		<button name="sys-on"class="btn btn-success" style="width:235; height:200; font-size: 22pt;" >SYSTEM ON</button>
		<br>
		<br>
		<button name="sys-off"class="btn btn-danger" style="width:235; height:200; font-size: 22pt;" >SYSTEM OFF</button>
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
		<button name="source-rack-pc"class="btn btn-secondary" style="width:235; height: 103; font-size: 18pt; font-weight:400;padding-left:0pt;padding-right:10pt;" >IN-ROOM COMPUTER</button>
		<button name="source-vga-1"class="btn btn-secondary" style="width:235; height: 103; font-size: 18pt; font-weight: 400;padding-left:10pt;padding-right:10pt;" >COMPUTER INPUT</button>
		<button name="source-hdmi-1"class="btn btn-secondary" style="width:235; height: 103; font-size: 18pt; font-weight: 400;padding-left:10pt;padding-right:0pt;" >HDMI<br>INPUT</button>
	</td>
</tr>
</table>
</form>
</body>
</html>