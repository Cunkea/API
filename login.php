<?php 
include_once 'konfig.php';
$message="";

try {
	$veza = new PDO($dsn, $user, $password);
	$veza->query("SET NAMES utf8");
	$izraz = $veza->prepare("select * from user where email=:email and password=:pass");
	$izraz->bindValue(":email",  $_POST['email'] );
	$izraz->bindValue(":pass",  $_POST['pass'] );
	$izraz->execute();
	$rez = $izraz->fetch();

	if(empty($rez)){
		//send message on index or other tab!!
	echo "Neispravna kombinacija korisničkog imena i lozinke";
	}else{
		include_once 'user.php';
		$u = new user(
				$rez['name'],
				$rez['surname'],
				$rez['email'],
				$rez['username'],
				$rez['pass']);
		
		session_start();
		$_SESSION['login']=true;
		$_SESSION['user']=serialize($u);
		
		header("location: index.php");
	}

	$veza=null;
	} catch (PDOException $e) {
		print_r($e);
}