<?php
// COM Port for Projector is
// COM Port for Switcher is
// GPIO for Screen UP is
// GPIO for Screen DOWN is

include "PhpSerial.php";
	error_reporting(E_ALL);
ini_set('display_errors', '1');
//System ON Button
if(isset($_POST['sys-on']))
{
// lower screen
	system("gpio mode 29 out");
	system("gpio write 29 0");
	system("gpio write 29 1");
// set volume
//power projector on
	$serial = new PhpSerial;
	$serial->deviceSet("/dev/ttyUSB1");
	$serial->confBaudRate(9600);
	$serial->confParity("none");
	$serial->confCharacterLength(8);
	$serial->confStopBits(1);
	$serial->deviceOpen();
	$cmd = "PWR ON";
	//$cmd = pack("H*",$cmd);
	$serial->sendMessage($cmd);
	$cmd = "SOURCE 30";
	//$cmd = pack("H*",$cmd);
	$serial->sendMessage($cmd);
	$serial->deviceClose();
}
//System OFF Button

if(isset($_POST['sys-off']))
// raise screen
{	system("gpio mode 28 out");
	system("gpio write 28 0");
	system("gpio write 28 1");
//mute sound
//power off projector
	$serial = new PhpSerial;
	$serial->deviceSet("/dev/ttyUSB1");
	$serial->confBaudRate(9600);
	$serial->confParity("none");
	$serial->confCharacterLength(8);
	$serial->confStopBits(1);
	$serial->deviceOpen();
	$cmd = "PWR OFF";
//	$cmd = pack("H*",$cmd);
	$serial->sendMessage($cmd);
	$serial->deviceClose();
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
if(isset($_POST['vol-up']))
{
$serial = new PhpSerial;
$serial->deviceSet("/dev/ttyUSB0");
$serial->confBaudRate(115200);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->deviceOpen();
$serial->sendMessage("Y 0 131 -5 \r");
$serial->deviceClose();

//echo "Volume set to 24 \n\r";
}
//Source Rack PC Button
if(isset($_POST['source-rack-pc']))
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
}
//Source HDMI 1 Button
if(isset($_POST['source-hdmi-1']))
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
}
//Source VGA 1 Button
if(isset($_POST['source-hdmi-1']))
{
$serial = new PhpSerial;
$serial->deviceSet("/dev/ttyUSB0");
$serial->confBaudRate(115200);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->deviceOpen();
$serial->sendMessage("Y 0 30 0 \r");
$serial->deviceClose();
}
//VolumeUP
if(isset($_POST['source-hdmi-1']))
{
$serial = new PhpSerial;
$serial->deviceSet("/dev/ttyUSB0");
$serial->confBaudRate(115200);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->deviceOpen();
$serial->sendMessage("Y 0 4 \r");
$serial->deviceClose();
}
//VolumeUP
if(isset($_POST['source-hdmi-1']))
{
$serial = new PhpSerial;
$serial->deviceSet("/dev/ttyUSB0");
$serial->confBaudRate(115200);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->deviceOpen();
$serial->sendMessage("Y 0 3 \r");
$serial->deviceClose();
}
if(isset($_POST['reset-switcher']))
{
// switcher power cycle
	system("gpio mode 27 out");
	system("gpio write 27 0");
	usleep(500000);
	system("gpio write 27 1");
}
?>
<html>
<head>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<title>EOC A/V Control</title>
</head>
<body>
<form method="post">
<table style="width:100%;">
	<tr>
		<td>
			<p style="margin-bottom: 5px;">
			<button name="sys-on"class="btn btn-success" style="width:235; height:157; font-size: 22pt;" >SYSTEM ON</button>
			</p>
			<p>
			<button name="sys-off"class="btn btn-danger" style="width:235; height:157; font-size: 22pt;">SYSTEM OFF</button>
			</p>
			</form>
		</td>
		<td>
			<p  style="margin-bottom:5px;">
			<button name="source-rack-pc"class="btn btn-primary" style="width:235; height: 103; font-size: 18pt; font-weight:400;" >IN-ROOM COMPUTER</button>
			</p>
			<p style="margin-bottom: 5px;">
			<button name="source-vga-1"class="btn btn-primary" style="width:235; height: 103; font-size: 18pt; font-weight: 400;" >COMPUTER INPUT</button>
						</p>
			<p>
			<button name="source-hdmi-1"class="btn btn-primary" style="width:235; height: 102; font-size: 18pt; font-weight: 400;" >HDMI INPUT</button>
			</p>
		</td>
	</tr>
	<tr>
	</tr>
</table>
</body>
</html>
