<?php
// COM Port for Projector is /dev/ttyUSB0
// COM Port for Switcher is /dev/ttyUSB1
// GPIO for Screen UP is 28
// GPIO for Screen DOWN is 29
// Initial Volume Should be 50

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

include "PhpSerial.php";
	error_reporting(E_ALL);
ini_set('display_errors', '1');

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
	$serial = new PhpSerial;
	$serial->deviceSet("/dev/ttyUSB0");
	$serial->confBaudRate(9600);
	$serial->confParity("none");
	$serial->confCharacterLength(8);
	$serial->confStopBits(1);
	$serial->deviceOpen();
	$cmd = "PWR OFF\r";

// Mute Sound
	$serial->sendMessage($cmd);
	$serial->deviceClose();
	$serial = new PhpSerial;
	$serial->deviceSet("/dev/ttyUSB1");
	$serial->confBaudRate(57600);
	$serial->confParity("none");
	$serial->confCharacterLength(8);
	$serial->confStopBits(1);
	$serial->deviceOpen();
	$cmd = "SET VOLGAIN_DATA audioout 0\r";
	$serial->sendMessage($cmd);
	$serial->deviceClose();
}

// Table VGA Button
if(isset($POST['source-table-vga']))
{
	$serial = new PhpSerial;
	$serial->deviceSet("/dev/ttyUSB1");
	$serial->confBaudRate(57600);
	$serial->confParity("none");
	$serial->confCharacterLength(8);
	$serial->confStopBits(1);
	$serial->deviceOpen();
	$cmd = "SET SW vga\r";
	$serial->sendMessage($cmd);
	$serial->deviceClose();
}
// Table HDMI Button
if(isset($POST['source-table-hdmi']))
{
	$serial = new PhpSerial;
	$serial->deviceSet("/dev/ttyUSB1");
	$serial->confBaudRate(57600);
	$serial->confParity("none");
	$serial->confCharacterLength(8);
	$serial->confStopBits(1);
	$serial->deviceOpen();
	$cmd = "SET SW HDMI2\r\n";
	$serial->sendMessage($cmd);
	$serial->deviceClose();
}
// Clickshare Button
if(isset($POST['source-clickshare']))
{
	$serial = new PhpSerial;
	$serial->deviceSet("/dev/ttyUSB1");
	$serial->confBaudRate(57600);
	$serial->confParity("none");
	$serial->confCharacterLength(8);
	$serial->confStopBits(1);
	$serial->deviceOpen();
	//$cmd = "SET SW dp\r";
	$cmd = "SET SW HDMI1\r\n";
	$serial->sendMessage($cmd);
	$serial->deviceClose();
}
// DVD/Blu-Ray Button
if(isset($POST['source-dvd-bluray']))
{
	$serial = new PhpSerial;
	$serial->deviceSet("/dev/ttyUSB1");
	$serial->confBaudRate(57600);
	$serial->confParity("none");
	$serial->confCharacterLength(8);
	$serial->confStopBits(1);
	$serial->deviceOpen();
	$cmd = "SET SW HDMI1\r";
	$serial->sendMessage($cmd);
	$serial->deviceClose();
}
if(isset($POST['vol-dn']))
{
	$serial = new PhpSerial;
	$serial->deviceSet("/dev/ttyUSB1");
	$serial->confBaudRate(57600);
	$serial->confParity("none");
	$serial->confCharacterLength(8);
	$serial->confStopBits(1);
	$serial->deviceOpen();
	$cmd = "SET MUTE audioout off\r";
	$serial->sendMessage($cmd);
	$read = $serial->readPort();
	// Print out the data
	echo $read;
	$serial->deviceClose();
	}
if(isset($POST['vol-100']))
{
		$serial = new PhpSerial;
		$serial->deviceSet("/dev/ttyUSB1");
		$serial->confBaudRate(57600);
		$serial->confParity("none");
		$serial->confCharacterLength(8);
		$serial->confStopBits(1);
		$serial->deviceOpen();
		$cmd = "SET VOLGAIN_DATA audioout 100\r";
		$serial->sendMessage($cmd);
		$serial->deviceClose();
}
	if(isset($POST['vol-90']))
	{
		$serial = new PhpSerial;
		$serial->deviceSet("/dev/ttyUSB1");
		$serial->confBaudRate(57600);
		$serial->confParity("none");
		$serial->confCharacterLength(8);
		$serial->confStopBits(1);
		$serial->deviceOpen();
		$cmd = "SET VOLGAIN_DATA audioout 90\r";
		$serial->sendMessage($cmd);
		$serial->deviceClose();
	}
	if(isset($POST['vol-80']))
	{
		$serial = new PhpSerial;
		$serial->deviceSet("/dev/ttyUSB1");
		$serial->confBaudRate(57600);
		$serial->confParity("none");
		$serial->confCharacterLength(8);
		$serial->confStopBits(1);
		$serial->deviceOpen();
		$cmd = "SET VOLGAIN_DATA audioout 80\r";
		$serial->sendMessage($cmd);
		$serial->deviceClose();
	}
	if(isset($POST['vol-70']))
	{
		$serial = new PhpSerial;
		$serial->deviceSet("/dev/ttyUSB1");
		$serial->confBaudRate(57600);
		$serial->confParity("none");
		$serial->confCharacterLength(8);
		$serial->confStopBits(1);
		$serial->deviceOpen();
		$cmd = "SET VOLGAIN_DATA audioout 70\r";
		$serial->sendMessage($cmd);
		$serial->deviceClose();
	}
	if(isset($POST['vol-60']))
	{
		$serial = new PhpSerial;
		$serial->deviceSet("/dev/ttyUSB1");
		$serial->confBaudRate(57600);
		$serial->confParity("none");
		$serial->confCharacterLength(8);
		$serial->confStopBits(1);
		$serial->deviceOpen();
		$cmd = "SET VOLGAIN_DATA audioout 60\r";
		$serial->sendMessage($cmd);
		$serial->deviceClose();
	}
	if(isset($POST['vol-50']))
	{
		$serial = new PhpSerial;
		$serial->deviceSet("/dev/ttyUSB1");
		$serial->confBaudRate(57600);
		$serial->confParity("none");
		$serial->confCharacterLength(8);
		$serial->confStopBits(1);
		$serial->deviceOpen();
		$cmd = "SET VOLGAIN_DATA audioout 50\r";
		$serial->sendMessage($cmd);
		$serial->deviceClose();
	}
	if(isset($POST['vol-40']))
	{
		$serial = new PhpSerial;
		$serial->deviceSet("/dev/ttyUSB1");
		$serial->confBaudRate(57600);
		$serial->confParity("none");
		$serial->confCharacterLength(8);
		$serial->confStopBits(1);
		$serial->deviceOpen();
		$cmd = "SET VOLGAIN_DATA audioout 40\r";
		$serial->sendMessage($cmd);
		$serial->deviceClose();
	}
	if(isset($POST['vol-30']))
	{
		$serial = new PhpSerial;
		$serial->deviceSet("/dev/ttyUSB1");
		$serial->confBaudRate(57600);
		$serial->confParity("none");
		$serial->confCharacterLength(8);
		$serial->confStopBits(1);
		$serial->deviceOpen();
		$cmd = "SET VOLGAIN_DATA audioout 30\r";
		$serial->sendMessage($cmd);
		$serial->deviceClose();
	}
	if(isset($POST['vol-20']))
	{
		$serial = new PhpSerial;
		$serial->deviceSet("/dev/ttyUSB1");
		$serial->confBaudRate(57600);
		$serial->confParity("none");
		$serial->confCharacterLength(8);
		$serial->confStopBits(1);
		$serial->deviceOpen();
		$cmd = "SET VOLGAIN_DATA audioout 20\r";
		$serial->sendMessage($cmd);
		$serial->deviceClose();
	}
	if(isset($POST['vol-10']))
	{
		$serial = new PhpSerial;
		$serial->deviceSet("/dev/ttyUSB0");
		$serial->confBaudRate(9600);
		$serial->confParity("none");
		$serial->confCharacterLength(8);
		$serial->confStopBits(1);
		$serial->deviceOpen();
		$cmd = "MUTE ON\r";
	//	$cmd = pack("H*",$cmd);
		$serial->sendMessage($cmd);
		$serial->deviceClose();
}
		if(isset($POST['vol-0']))
		{
			$serial = new PhpSerial;
			$serial->deviceSet("/dev/ttyUSB1");
			$serial->confBaudRate(57600);
			$serial->confParity("none");
			$serial->confCharacterLength(8);
			$serial->confStopBits(1);
			$serial->deviceOpen();
			$cmd = "SET VOLGAIN_DATA audioout 0\r";
			$serial->sendMessage($cmd);
			$serial->deviceClose();
		}
?>
