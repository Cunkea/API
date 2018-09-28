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
					<div class="col-sm-4">
						<?php include_once 'Shared/carelo.php'; ?>
					</div>

					<div class="col-sm-7 col-sm-offset-1">
						<h3><strong>Models</strong></h3>
						<?php
						try{
							include_once 'konfig.php';
							$veza = new PDO($dsn, $user, $password);
							$izraz = $veza->prepare("select * from models;");
							$izraz->execute();
							$rez = $izraz->fetchALL(PDO::FETCH_OBJ);
							foreach ($rez as $red) {
								?>
								<p><img src="models/<?php echo $red -> model?>.png" width="100%;" height="auto;" alt=""></p>
								<h4><strong><?php echo $red -> model; ?></strong></h4>
								<p style="overflow-x: hidden;width: 100%;"><?php echo $red -> text; ?></p>
								<?php
								if(isset($_SESSION['login'])){
								?>
									<p><a target="_blank" href="#">download >></a></p>
									<?php
								}else{
								?>
									<i>Download link only if you have account!</i>
								<?php
								}
							}
						}catch (PDOException $e){
							print_r($e);
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<?php include_once 'Shared/footer.php'; ?>
	</div>
</body>
</html>