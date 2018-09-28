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
						<!-- php za formu prijave -->
						<?php include_once 'Shared/carelo.php'; ?>
					</div>

					<!-- slider -->

					<div class="col-sm-7 col-sm-offset-1">
						<div class="bezalko" id="content">
							<table style="width: 100%;">
								<thead>
									<h3 style="text-align: center"><i class="fa fa-chevron-circle-down"></i>&nbsp;Popis korisnika</h3>
									<tr>
										<th><h4><strong>Ime</strong></h4></th>
										<th><h4><strong>Prezime</strong></h4></th>
										<th><h4><strong>Adresa</strong></h4></th>
										<th><h4><strong>Username</strong></h4></th>
										<th><h4><strong>Email</strong></h4></th>
									</tr>
								</thead>
								<tbody>
									<?php
									try {
										include_once 'konfig.php';
  										$veza = new PDO($dsn, $user, $password);
  										$izraz = $veza->prepare("select * from korisnik;");
  										$izraz->execute();
  										$rez = $izraz->fetchAll(PDO::FETCH_OBJ);
  										foreach ($rez as $red){
  										?> 
										<tr>
											<td><?php echo $red->ime;?></td>
											<td><?php echo $red->prezime;?></td>
											<td><?php echo $red->adresa;?></td>
											<td><?php echo $red->username;?></td>
											<td><?php echo $red->email;?></td>
										</tr>
										<?php 	
  										}
  										$veza=null;
									} catch (PDOException $e) {
										print_r($e);
									}
  									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once 'Shared/footer.php'; ?>
	</div>
</body>
</html>