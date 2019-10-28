<?php
$DEBUG = 1;
include "PhpSerial.php";
error_reporting(E_ALL);

ini_set('display_errors', '1');
if(isset($_POST['projector-on']))
// Turn Projector ON
{
	$serial = new PhpSerial;
	$serial->deviceSet("/dev/ttyUSB1");
	$serial->confBaudRate(9600);
	$serial->confParity("none");
	$serial->confCharacterLength(8);
	$serial->confStopBits(1);
	$serial->deviceOpen();
	$cmd = "FE0058035bFF";
	$cmd = pack("H*",$cmd);	
	$serial->sendMessage($cmd);
	$serial->deviceClose();	
}

if (isset($_POST['projector-off']))
// Turn Projector OFF
{
	$serial = new PhpSerial;
	$serial->deviceSet("/dev/ttyUSB1");
	$serial->confBaudRate(9600);
	$serial->confParity("none");
	$serial->confCharacterLength(8);
	$serial->confStopBits(1);
	$serial->deviceOpen();
	$cmd = "FE00580058FF";
	$cmd = pack("H*",$cmd);
	$serial->sendMessage($cmd);
	$serial->deviceClose();	
}
if (isset($_POST['projector-test' ]))
{
	echo pack("H*", "2133");
}
?>
<html>
<head>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<title>EOC A/V Control - Projector Debugging</title>
</head>
<body>
<form method="post">
	<p>
		<button name="projector-on" class="btn btn-warning" style="width:250; height:70;">PROJECTOR ON</button>
	</p>
	<p>
		<button name="projector-off" class="btn btn-warning" style="width:250; height:70;">PROJECTOR OFF</button>
	</p>
	</form>
	<p>
		<button name="projector-test class="btn btn-success" style="width:250; height:70;">TEST</button>
	</p>
	</form>
	</body>
</html>