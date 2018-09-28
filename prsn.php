<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'Shared/header.php'; ?>
	</head>
	<body>
		<div class="wrapper">
		<?php include_once 'Shared/navbar.php'; ?>
			<div class="sadrzaj">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<?php
							try{
								if(isset($_SESSION['login'])){
								include_once 'user.php';
								$u=unserialize($_SESSION['user']);
							
							?>
							<h3><strong>About me</strong></h3>
							<p id="inf"><strong>
								******<br><br><br>
								<img src="images/default-user-image.png"><br><br><br>
								******<br><br><br>
							Name:	<?php echo $u -> getName() . " " . $u ->getSurname(); ?><br><br><br>
							Username:	<?php echo $u -> getUsername(); ?><br><br><br>
							Email:  <?php echo $u -> getEmail(); ?><br><br><br>
								******
								<br><br><br>
							</strong></p>
							<?php
								} else {
									header('index.php');
								}
							}catch (PDOException $e){
								print_r($e);
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once 'Shared/footer.php'; ?>
	</body>
</html>