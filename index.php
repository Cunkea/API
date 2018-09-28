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
							<!-- dio sa strane -->

						<!-- php za formu prijave -->
						<?php include_once 'Shared/carelo.php'; ?>
					</div>

					<!-- slider -->

					<div class="col-sm-7 col-sm-offset-1">
						<h3><strong>JS Slider</strong></h3>
						<div style="width: 100%; top: 10px;" id="the-slider" class="carousel slide" data-ride="carousel">

							<ol class="carousel-indicators">	
								<li data-target="#the-slider" data-slide-to="0" class="active"></li>
								<li data-target="#the-slider" data-slide-to="1"></li>
								<li data-target="#the-slider" data-slide-to="2"></li>
								<li data-target="#the-slider" data-slide-to="3"></li>
								<li data-target="#the-slider" data-slide-to="4"></li>
							</ol>

							<div class="carousel-inner">

								<div class="item active">
									<img src="images/image-slider-1.png" class="img-responsive" alt="...">
									<div class="caption">
										<span>Hip Hop Osijek</span>
									</div>
								</div> <!--item 1-->

								<div class="item">
									<img src="images/image-slider-2.jpg" class="img-responsive" alt="...">
									<div class="caption">
										<span>Code of this web page</span>
									</div>
								</div> <!--item 2-->

								<div class="item">
									<img src="images/image-slider-3.png" class="img-responsive" alt="...">
									<div class="caption">
										<span>Demon Army</span>
									</div>
								</div> <!--item 2-->

								<div class="item">
									<img src="images/image-slider-4.jpg" class="img-responsive" alt="...">
									<div class="caption">
										<span></span>
									</div>  
								</div>

								<div class="item">
									<img src="images/image-slider-5.jpg" class="img-responsive" alt="...">
									<div class="caption">
										<span></span>
									</div>
								</div>
							</div>
							<a class="left carousel-control" href="#the-slider" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							
							<a class="right carousel-control" href="#the-slider" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>

						</div><!--slider-->
						<br>
						<h3>Latest News</h3>
						<div class="content row" style="padding-top: 20px;">
							<div class="col-md-4">
								<?php
								try {
									include_once 'konfig.php';
  									$veza = new PDO($dsn, $user, $password);
  									$izraz = $veza->prepare("select * from news where id = (select max(id) from news);");
  									$izraz->execute();
  									$rez = $izraz->fetch();
  								?> 
								<p><img src="images/news/<?php echo $rez['naslov']?>.jpg" width="100%;" height="auto;" alt=""></p>
								<h4><strong><?php echo $rez['naslov']; ?></strong></h4>
								<p style="overflow-x: hidden;width: 100%;"><?php echo $rez['tekst']; ?></p>
										<p><a target="_blank" href="<?php echo $rez['link']; ?>">Više >></a></p>
								<?php
								} catch (PDOException $e) {
									print_r($e);
								}
								?>
							</div>

							<div class="col-md-4">
								<?php
								try {
  									$veza = new PDO($dsn, $user, $password);
  									$izraz = $veza->prepare("select * from news where id = (select max(id)-1 from news);");
  									$izraz->execute();
  									$rez = $izraz->fetch();
  								?> 
								<p><img src="images/news/<?php echo $rez['naslov']?>.jpg" width="100%;" height="auto;" alt=""></p>
								<h4><strong><?php echo $rez['naslov']; ?></strong></h4>
								<p style="overflow-x: hidden;width: 100%;"><?php echo $rez['tekst']; ?></p>
										<p><a target="_blank" href="<?php echo $rez['link']; ?>">Više >></a></p>
								<?php
								} catch (PDOException $e) {
									print_r($e);
								}
								?>
							</div>

							<div class="col-md-4">
								<?php
								try {
  									$veza = new PDO($dsn, $user, $password);
  									$izraz = $veza->prepare("select * from news where id = (select max(id)-2 from news);");
  									$izraz->execute();
  									$rez = $izraz->fetch();
  								?> 
								<p><img src="images/news/<?php echo $rez['naslov']?>.jpg" width="100%;" height="auto;" alt=""></p>
								<h4><strong><?php echo $rez['naslov']; ?></strong></h4>
								<p style="overflow-x: hidden;width: 100%;"><?php echo $rez['tekst']; ?></p>
										<p><a target="_blank" href="<?php echo $rez['link']; ?>">Više >></a></p>
								<?php
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
		<?php include_once 'Shared/footer.php'?>
	</div>
</body>
</html>