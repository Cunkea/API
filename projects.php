<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'Shared/header.php'; ?>
	</head>
	<body>
		<div class="wrapper">
			<?php include_once 'Shared/navbar.php' ?>
			<div class="sadrzaj">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<?php include_once 'Shared/carelo.php' ?>
						</div>
						<div class="col-sm-7 col-sm-offset-1">
							<div class="faks">
								<div class="content row" style="padding-top: 20px;">
									<div class="col-md-12">
									<?php
										try {
											include_once 'konfig.php';
	  										$veza = new PDO($dsn, $user, $password);
	  										$izraz = $veza->prepare("select * from projects;");
	  										$izraz->execute();
	  										$rez = $izraz->fetchALL(PDO::FETCH_OBJ);
	  										foreach ($rez as $red) {
	  											?>
												<p><img src="images/projects/<?php echo $red -> title?>.png" width="100%;" height="auto;" alt=""></p>
												<h4><strong><?php echo $red -> title; ?></strong></h4>
												<p style="overflow-x: hidden;width: 100%;"><?php echo $red -> text; ?></p>
												<p><a target="_blank" href="<?php echo $red -> link; ?>">More >></a></p>
	  											<?php
	  										}
										} catch (PDOException $e) {
											print_r($e);
										}
									?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once 'Shared/footer.php'; ?>
	</body>
</html>