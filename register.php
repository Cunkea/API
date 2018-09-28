<?php
if(isset($_POST['submit'])){
	include_once 'konfig.php';

	$name=trim($_POST['name']);
	$surname=trim($_POST['surname']);
	$username=trim($_POST['username']);
	$email=trim($_POST['email']);
	$pass=trim($_POST['pass']);

	$veza = new PDO($dsn, $user, $password);
	$veza->beginTransaction();

	$izraz = $veza->prepare("select * from user where email=:email and password=:password");
	$izraz->bindValue(":email",  $_POST['email'] );
	$izraz->bindValue(":password",  $_POST['pass'] );
	$izraz->execute();
	$rez = $izraz->fetch();

	if(empty($rez)){
		try {
			$veza = new PDO($dsn, $user, $password);
			$veza->beginTransaction();
			$izraz = $veza->prepare("insert into user (name,surname,username,email,password) " .
									" values(:name, :surname, :username, :email, :password)");
			$izraz->bindValue(":name",  $name );
			$izraz->bindValue(":surname",  $surname );
			$izraz->bindValue(":email",  $email );
			$izraz->bindValue(":username",  $username );
			$izraz->bindValue(":password",  $pass );
			$izraz->execute();
		
			$veza->commit();
			$veza=null;

			$test=true;
		} catch (PDOException $e) {
				print_r($e);
		}
	}else{
		$test=false;	
	}
	
		header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once 'Shared/header.php'; ?>
</head>

<body>

	<div class="page">
		<div class="container">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="fluid-container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>

						</button>
					</div>

					<div class="collapse navbar-collapse" id="myNavbar">
    					<ul class="nav navbar-nav">
      			 			<li><a class="hvr-underline-from-center" href="index.php"><i class="fa fa-home fa-lg"></i>&nbsp;POČETNA</a></li>
             				<li><a class="hvr-underline-from-center" href="#"><i class="fa fa-graduation-cap fa-lg"></i>&nbsp;FAKULTET</a></li>
             				<li><a class="hvr-underline-from-center" href="privatno.php"><i class="fa fa-user fa-lg"></i>&nbsp;PRIVATNO</a></li>
  					 		<li><a class="hvr-underline-from-center" href="zivotopis.php"><i class="fa fa-book fa-lg"></i>&nbsp;ŽIVOTOPIS</a></li>
  					 		<li><a class="hvr-underline-from-center" href="#"><i class="fa fa-envelope fa-lg"></i>&nbsp;KONTAKT</a></li>
						</ul>

					</div>
				</div>
			</nav>
		</div>

		<div class="sadrzaj">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<?php
						if(isset($_POST['submit'])){
							if($test){
							?>
								<br>
								<h2>Uspjesno registrirano</h2>
								<br>
							<?php
							}else{
							?>
								<h2>Username/Email vec postoji</h2>
								<a href="index.php">
									<input type="submit" value="Back" class="btn btn_red">
								</a>
							<?php 
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>					

</body>

</html>