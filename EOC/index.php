<?php
include "PhpSerial.php";
	error_reporting(E_ALL);
ini_set('display_errors', '1');
//System ON Button
if(isset($_POST['sys-on']))
{
	system("gpio mode 29 out");
	system("gpio write 29 0");
	system("gpio write 29 1");
}
//System OFF Button
if(isset($_POST['ssys-off']))
{	system("gpio mode 28 out");
	system("gpio write 28 0");
	system("gpio write 28 1");
}
//Volume MUTE Button
if(isset($_POST['vol-mute']))
{
$serial = new PhpSerial;
$serial->deviceSet("/dev/ttyUSB0");
$serial->confBaudRate(115200);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->deviceOpen();
$serial->sendMessage("Y 0 131 -100 \r");
$serial->deviceClose();
//echo "Volume set to -100 \n\r";
}

//Volume MAX Button
if(isset($_POST['vol-max']))
{
$serial = new PhpSerial;
$serial->deviceSet("/dev/ttyUSB0");
$serial->confBaudRate(115200);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->deviceOpen();
$serial->sendMessage("Y 0 131 2 \r");
$serial->deviceClose();

//echo "Volume set to 24 \n\r";
}
//Source Rack PC Button
if(isset($_POST['sauce-rack-pc']))
{
$serial = new PhpSerial;
$serial->deviceSet("/dev/ttyUSB0");
$serial->confBaudRate(115200);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->deviceOpen();
$serial->sendMessage("Y 0 30 6 \r");
$serial->deviceClose();

//echo "Sauce set to DP 1 \n\r";
}
//Source HDMI 1 Button
if(isset($_POST['sauce-hdmi-1']))
{
$serial = new PhpSerial;
$serial->deviceSet("/dev/ttyUSB0");
$serial->confBaudRate(115200);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->deviceOpen();
$serial->sendMessage("Y 0 30 2 \r");
$serial->deviceClose();

//echo "Sauce set to HDMI 1 \n\r";
}
//It worked once - might have hung the Serial Port, but I saw the switcher move after sending serials.
?>
<script type="text/javascript" src="http://172.24.30.19/BcUtil.js">
</script>
<html>
<head>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<title>EOC A/V Control</title>
</head>
<body>
<form method="post">
<table style="width:300;">
	<tr>
		<td>
			<p style="margin-bottom: 5px;">
			<button name="sys-on"class="btn btn-success" style="width:150; height:60;" >SYSTEM ON</button>
			</p>
			<p>
			<button name="sys-off"class="btn btn-danger" style="width:150; height:60;">SYSTEM OFF</button>
			</p>
			</form>
		</td>
		<td>
			<p  style="margin-bottom:5px;">
			<button name="sauce-rack-pc"class="btn btn-warning" style="width:150; height: 38;" >COMPUTER</button>
			</p>
			<p style="margin-bottom: 5px;">
			<button name="sauce-hdmi-1"class="btn btn-warning" style="width:150; height: 38;" >HDMI 1</button>
			</p>
			<p>
			<button name="sauce-vga-1"class="btn btn-warning" style="width:150; height: 38;" >FRONT VGA</button>
			</p>
		</td>
		<td>
			<p style="margin-bottom: 5px;">
			<button name="vol-up"class="btn btn-info" style="width:150; height:38;" >VOL UP</button>
			</p>
			<p style="margin-bottom: 5px;">
			<button name="vol-down"class="btn btn-info" style="width:150; height: 38;" >VOL DOWN</button>
			</p>
			<p>
			<button name="vol-mute"class="btn btn-primary" style="width:150; height: 38;" >MUTE</button>
			</p>
			</form>
		</td>
	</tr>
</table>
</body>
</html>