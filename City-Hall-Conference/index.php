<?php include_once("av-control.php");
$read = "";
?>
<html>
<head>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<meta http-equiv="refresh" content="60">
<title>A/V Control</title>
<link href="https://fonts.googleapis.com/css?family=Patua+One|Roboto|Roboto+Condensed|Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body style="background-image:url(tree.jpg);background-position:center;background-repeat:no-repeat;background-size:cover;">
<form method="post">
		<div style="text-align: center; font-family: 'Patua One', cursive;font-size:36pt;color:#fff;margin-bottom:25px">
			City Hall Conference Room AV Control<?php echo $read ?>
			</div>
<table style="width:98%;background-image:url(logo.png);background-repeat:no-repeat;background-position:center;z-index:5;margin-left:1%;margin-right:1%font-family: 'Roboto', sans-serif;">
<tr>
		<td>
				<button name="vol-100"class="btn btn-primary" style="width:235; height: 16; font-size: 12pt; font-weight:400;" >Volume 100%</button>
<br>
				<button name="vol-90"class="btn btn-primary" style="width:235; height: 16; font-size: 12pt; font-weight:400;" >Volume 90%</button>
<br>
				<button name="vol-80"class="btn btn-primary" style="width:235; height: 16; font-size: 12pt; font-weight:400;" >Volume 80%</button>
				<br>
				<button name="vol-70"class="btn btn-primary" style="width:235; height: 16; font-size: 12pt; font-weight:400;" >Volume 70%</button>
				<br>
				<button name="vol-60"class="btn btn-primary" style="width:235; height: 16; font-size: 12pt; font-weight:400;" >Volume 60%</button>
				<br>
				<button name="vol-50"class="btn btn-primary" style="width:235; height: 16; font-size: 12pt; font-weight:400;" >Volume 50%</button>
				<br>
				<button name="vol-40"class="btn btn-primary" style="width:235; height: 16; font-size: 12pt; font-weight:400;" >Volume 40%</button>
				<br>
				<button name="vol-30"class="btn btn-primary" style="width:235; height: 16; font-size: 12pt; font-weight:400;" >Volume 30%</button>
				<br>
				<button name="vol-20"class="btn btn-primary" style="width:235; height: 16; font-size: 12pt; font-weight:400;" >Volume 20%</button>
				<br>
				<button name="vol-10"class="btn btn-primary" style="width:235; height: 16; font-size: 12pt; font-weight:400;" >Volume 10%</button>
				<br>
				<button name="vol-0"class="btn btn-primary" style="width:235; height: 16; font-size: 12pt; font-weight:400;" >Volume 0%</button>
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
		<button name="source-table-hdmi"style="width:235; height: 103; font-size: 18pt; font-weight:400;padding-left:5pt;padding-right:5pt;background: transparent; border: none;"><img src="table-hdmi.png"width="225" height="98"></button>
		<button name="source-clickshare"style="width:235; height: 103; font-size: 18pt; font-weight:400;padding-left:5pt;padding-right:0pt; background: transparent; border: none;"><img src="clickshare.png"width="225" height="98"></button>
	</td>
</tr>
</table>
</form>
</body>
</html>
