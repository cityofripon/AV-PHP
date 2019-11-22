<?php
// COM Port for Projector is /dev/ttyUSB0
// COM Port for Switcher is /dev/ttyUSB1
// GPIO for Screen UP is 28
// GPIO for Screen DOWN is 29
// Initial Volume Should be 50

include "PhpSerial.php";
	error_reporting(E_ALL);
ini_set('display_errors', '1');

// Create Serial Ojbect for Switcher
$swserial = new PhpSerial;
$swserial->deviceSet("/dev/ttyUSB1");
$swserial->confBaudRate(57600);
$swserial->confParity("none");
$swserial->confCharacterLength(8);
$swserial->confStopBits(1);

// Create Serial Object for projector
$pjserial = new PhpSerial;
$pjserial->deviceSet("/dev/ttyUSB0");
$pjserial->confBaudRate(9600);
$pjserial->confParity("none");
$pjserial->confCharacterLength(8);
$pjserial->confStopBits(1);
$pjserial->deviceOpen();



//System ON Button
if(isset($_POST['sys-on']))
{
// lower screen
	system("gpio mode 29 out");
	system("gpio write 29 0");
	sleep(1);
	system("gpio write 29 1");
// set volume
	$swserial->deviceOpen();
	$cmd = "SET VOLGAIN_DATA audioout 50\r";
	$swserial->sendMessage($cmd);
	$swserial->deviceClose();
//power projector on
	$pjserial->deviceOpen();
	$cmd = "PWR ON\r";
	$pjserial->sendMessage($cmd);
	$cmd = "SOURCE 80\r";
	$pjserial->sendMessage($cmd);
	$pjserial->deviceClose();
}

//System OFF Button
if(isset($_POST['sys-off']))
// raise screen
{
	system("gpio mode 28 out");
	system("gpio write 28 0");
	sleep(1);
	system("gpio write 28 1");
//power off projector
	$pjserial->deviceOpen();
	$cmd = "PWR OFF\r";
	$pjserial->sendMessage($cmd);
	$pjserial->deviceClose();
// Mute Sound
	$swserial->deviceOpen();
	$cmd = "SET VOLGAIN_DATA audioout 0\r";
	$swserial->sendMessage($cmd);
	$swserial->deviceClose();
}

// Table VGA Button
if(isset($_POST['source-table-vga']))
{
	$swserial->deviceOpen();
	$cmd = "SET SW vga\r";
	$swserial->sendMessage($cmd);
	$swserial->deviceClose();
}
// Table HDMI Button
if(isset($_POST['source-table-hdmi']))
{
	$swserial->deviceOpen();
	$cmd = "SET SW dp\r\n";
	$swserial->sendMessage($cmd);
	$swserial->deviceClose();
}
// Clickshare Button
if(isset($_POST['source-clickshare']))
{
	$swserial->deviceOpen();
	//$cmd = "SET SW dp\r";
	$cmd = "SET SW HDMI1\r\n";
	$swserial->sendMessage($cmd);
	$swserial->deviceClose();
}
// DVD/Blu-Ray Button
if(isset($_POST['source-dvd-bluray']))
{
$swserial->deviceOpen();
$cmd = "SET SW HDMI2\r";
$swserial->sendMessage($cmd);
$swserial->deviceClose();
}
//Volume Settings
if(isset($_POST['vol-max']))
{
	$swserial->deviceOpen();
	$cmd = "SET VOLGAIN_DATA audioout 90\r";
	$swserial->sendMessage($cmd);
	$swserial->deviceClose();
}
if(isset($_POST['vol-5']))
{
	$swserial->deviceOpen();
	$cmd = "SET VOLGAIN_DATA audioout 75\r";
	$swserial->sendMessage($cmd);
	$swserial->deviceClose();
}
if(isset($_POST['vol-4']))
{
	$swserial->deviceOpen();
	$cmd = "SET VOLGAIN_DATA audioout 60\r";
	$swserial->sendMessage($cmd);
	$swserial->deviceClose();
}
if(isset($_POST['vol-3']))
{
	$swserial->deviceOpen();
	$cmd = "SET VOLGAIN_DATA audioout 45\r";
	$swserial->sendMessage($cmd);
	$swserial->deviceClose();
}
if(isset($_POST['vol-2']))
{
	$swserial->deviceOpen();
	$cmd = "SET VOLGAIN_DATA audioout 30\r";
	$swserial->sendMessage($cmd);
	$swserial->deviceClose();
}
if(isset($_POST['vol-1']))
{
	$swserial->deviceOpen();
	$cmd = "SET VOLGAIN_DATA audioout 15\r";
	$swserial->sendMessage($cmd);
	$swserial->deviceClose();
}
if(isset($_POST['vol-mute']))
{
	$swserial->deviceOpen();
	$cmd = "SET VOLGAIN_DATA audioout 00\r";
	$swserial->sendMessage($cmd);
	$swserial->deviceClose();
}
?>
