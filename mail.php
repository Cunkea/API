<?php
	
	$to="susena.sunka@gmail.com";
	$naslov=$_POST['naslov'];
	$tekst=$_POST['poruka'];
	$mail="From: ".$_POST['email'];


	mail($to, $naslov, $tekst, $mail);
	echo "Poslano";
?>