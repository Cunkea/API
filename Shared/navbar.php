<?php 
$currentpage = $_SERVER['REQUEST_URI'];
$webpage = "/api/";
?>
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
		 			<li <?php if( $currentpage == $webpage . "index.php") {echo 'class="active"';}?>>
		 				<a class="hvr-underline-from-center" href="index.php"><i class="fa fa-home fa-lg"></i>&nbsp;HOME</a>
		 			</li>
       				<li <?php if( $currentpage == $webpage . "projects.php") {echo 'class="active"';}?>>
       					<a class="hvr-underline-from-center" href="projects.php"><i class="fa fa-clipboard fa-lg"></i>&nbsp;PROJECTS</a>
       				</li>
       				<li <?php if( $currentpage == $webpage . "models.php") {echo 'class="active"';}?>>
       					<a class="hvr-underline-from-center" href="models.php"><i class="fa fa-pencil fa-lg"></i>&nbsp;MODELS</a>
       				</li>
			 		<li <?php if( $currentpage == $webpage . "info.php") {echo 'class="active"';}?>>
			 			<a class="hvr-underline-from-center" href="info.php"><i class="fa fa-info fa-lg"></i>&nbsp;INFO</a>
			 		</li>
			 		<?php
			 		try {
			 			session_start();
						if(isset($_SESSION['login'])){
						include_once 'user.php';
						$u=unserialize($_SESSION['user']);
						?>
			 		<li <?php if( $currentpage == $webpage . "prsn.php") {echo 'class="active"';}?>>
			 			<a class="hvr-underline-from-center" href="prsn.php"><i class="fa fa-user fa-lg"></i>&nbsp;<?php echo $u->getUsername(); ?></a>
			 		</li>
			 		<?php
			 			}
			 		}catch (PDOException $e){
							print_r($e);
						}
					?>
				</ul>
			</div>
		</div>
	</nav>
</div>