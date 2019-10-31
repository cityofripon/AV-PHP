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
	system("gpio mode 28 out");
	system("gpio write 28 0");
	sleep(1);
	system("gpio write 28 1");
// set volume
//power projector on
	$serial = new PhpSerial;
	$serial->deviceSet("/dev/ttyUSB0");
	$serial->confBaudRate(9600);
	$serial->confParity("none");
	$serial->confCharacterLength(8);
	$serial->confStopBits(1);
	$serial->deviceOpen();
	$cmd = "PWR ON\r";
	$serial->sendMessage($cmd);
	$cmd = "SOURCE 30\r";
	//$cmd = pack("H*",$cmd);
	$serial->sendMessage($cmd);
	$serial->deviceClose();
}
//System OFF Button

if(isset($_POST['sys-off']))
// raise screen
{	system("gpio mode 29 out");
	system("gpio write 29 0");
	sleep(1);
	system("gpio write 29 1");
//mute sound
//power off projector
	$serial = new PhpSerial;
	$serial->deviceSet("/dev/ttyUSB0");
	$serial->confBaudRate(9600);
	$serial->confParity("none");
	$serial->confCharacterLength(8);
	$serial->confStopBits(1);
	$serial->deviceOpen();
	$cmd = "PWR OFF\r";
//	$cmd = pack("H*",$cmd);
	$serial->sendMessage($cmd);
	$serial->deviceClose();
}

?>
