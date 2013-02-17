<?php
error_reporting(E_ALL);
session_start();
if (!$_SESSION['doesExist'] == true) 
	{
		echo "Session doesn't exist!";
		die();
	}

if (!isset($_POST['num']) || !isset($_POST['carrier']) || !isset($_POST['msg'])) 
	{
		echo "Failed!";
		die();
	}

$num = $_POST['num'];
$car = $_POST['carrier'];
$msg = $_POST['msg'];
$subject = '';
$head = 'From: PHPText' . "\r\n";

switch ($car)
	{
		case "att":
			$num .= "@txt.att.net";
			break;
		case "verizon":
			$num .= "@vtext.com";
			break;
		case "tmobile":
			$num .= "@tmomail.net";
			break;
	}

function doMail($toNum, $sub, $message, $headers)
	{
		if(mail($toNum, $sub, $message, $headers)) 
			{
				echo "Done!";
			}
		else
			{
				echo "Something went wrong!";
			}
	}

doMail($num, $subject, $msg, $head);

?>
