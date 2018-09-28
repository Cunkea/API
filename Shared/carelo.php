<?php
try {
	include 'calendar.php';
	if(isset($_SESSION['login'])){
		include_once 'user.php';
		$u=unserialize($_SESSION['user']);
?>
		<br><h4>Contact me&nbsp;<i class="fa fa-envelope-o"></i></h4>
		<form role="form" method="post" action="mail.php">
			<div class="input-group">
					<input type="text" name="email" class="form-control" value="<?php echo $u->getEmail(); ?>" aria-describedby="basic-addon2">
					<span class="input-group-addon" id="basic-addon2">@example.com</span>
				</div><br>
			<div class="input-group">
					<span class="input-group-addon" id="basic-addon3">Title</span>
					<input type="text" name="Title" class="form-control" id="basic-url" aria-describedby="basic-addon3">
			</div><br>
			<textarea cols="47" rows="12" name="poruka" placeholder="Message..."></textarea><br>
			<input type="submit" value="Submit" class="btn btn-default">
		</form>
		<a href="logout.php"><input type="submit" value="Logout" class="btn btn-default"></a>
<?php
	}else{
?>
		<a id="modal_trigger" href="#modal" class="btn"><i class="fa fa-user-plus"></i>&nbsp;Login/Register</a>

		<div id="modal" class="popupContainer" style="display:none;">
			<header class="popupHeader">
				<span class="header_title">Login / Register</span>
				<span class="modal_close"><i class="fa fa-times"></i></span>
			</header>

			<section class="popupBody">
			<!-- Social Login -->
				<div class="social_login">
					<div class="action_btns">
						<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
						<div class="one_half last"><a href="#" id="register_form" class="btn">Register</a></div>
					</div>
				</div>

				<!-- Username & Password Login form -->
				<div class="user_login">
					<form role="form" method="post" action="login.php">
						<div class="input-group">
								<input type="text" name="email" class="form-control" placeholder="Email" aria-describedby="basic-addon2">
							</div><br>
						<div class="input-group">
								<input type="password" name="pass" class="form-control" placeholder="Password" aria-describedby="basic-addon2">
							</div><br>

						<div class="action_btns">
							<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a>
							</div>
							<div class="one_half">
								<input type="submit" value="Login" class="btn btn_red">
							</div>
						</div>
					</form>

					<a href="#" class="forgot_password">Forgot your password?</a>
				</div>

				<!-- Register Form -->
				<div class="user_register">
					<form role="form" method="post" action="register.php">
						<div class="input-group">
								<input type="text" name="name" class="form-control" placeholder="Name" aria-describedby="basic-addon2" required>
							</div><br>

						<div class="input-group">
								<input type="text" name="surname" class="form-control" placeholder="Surname" aria-describedby="basic-addon2" required>
							</div><br>

						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon2" required>
							</div><br>

							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-at"></i></div>
								<input id="email" name="email" type="email" class="form-control" title="This is a required field" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/>
							</div><br>

						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-key"></i></div>
								<input type="password" name="pass" class="form-control" placeholder="Password" aria-describedby="basic-addon2" required>
							</div><br>
								
						<div class="action_btns">
							<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a>
							</div>

							<div class="one_half last">
								<input type="submit" name="submit" value="Register" class="btn btn_red">
							</div>
						</div>
					</form>
				</div>
			</section>
		</div>

	<?php
	}
}catch (PDOException $e){
	print_r($e);
}
?>
						
<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	});

	$(document).ready(function(){
    	$('[data-toggle="tooltip"]').tooltip();   
	});

	function setText(id, val){
    	if(val < 10){
        	val = '0' + val;    //add leading 0 if val < 10
    	}
    document.getElementById(id).innerHTML = val;
	};
	window.onload = calendar;
</script>