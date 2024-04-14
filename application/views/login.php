<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"> 
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() . 'css/loginStyle.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'plugins/jquery-confirm/css/jquery-confirm.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . "semantic/semantic.min.css" ?>"> 
	<script type="text/javascript" src="<?php echo base_url() . "newjs/jquery-1.12.3.js" ?>"></script>        
    <script type="text/javascript" src="<?php echo base_url() . "newjs/jquery-ui-1.11.4.custom.js" ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'plugins/jquery-confirm/js/jquery-confirm.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . "js/custom/app.custom.js" ?>"></script> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="containerMain" style="background-image: url(<?php echo base_url() ."img/BG.jpg"?>); background-size: cover">
		<div class="img">
			<img src="<?php echo base_url() ."img/oja_cover.png"?>">
		</div>
		<div class="login-content">
			<form class="a form app" id="form-data" method="post">
				<img class="imgLogo" src="<?php echo base_url() ."img/logoLaw.png"?>">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5> 
           		   		<input type="text" id="username" class="input" name="user_name" tabindex="1">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" id="password" class="input" name="pwd" tabindex="2"> 
            	   </div>
            	</div>
            	<a class="butn btn-form-login" id="buttonLogin" value="Login" tabindex="3" data-url="<?= site_url('user/submitLogin')?>">Login</a>
            </form>
        </div>
    </div>
</body>
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
		document.getElementById('username').style.opacity = "0";
		document.getElementById('password').style.opacity = "0";
	}, false);

	setTimeout(function(){
		document.getElementById('username').style.opacity = "1";
		document.getElementById('password').style.opacity = "1";
		document.getElementById('username').value = '';
		document.getElementById('password').value = '';
	}, 400);

	const inputs = document.querySelectorAll(".input");
	function addcl(){
		let parent = this.parentNode.parentNode;
		parent.classList.add("focus");
	}

	function remcl(){
		let parent = this.parentNode.parentNode;
		if(this.value == ""){
			parent.classList.remove("focus");
		}
	}


	inputs.forEach(input => {
		input.addEventListener("focus", addcl);
		input.addEventListener("blur", remcl);
	});

	var buttona = document.getElementById("buttonLogin");
	buttona.addEventListener("keypress", function(event) {
		if (event.key === "Enter") {
			event.preventDefault();
			document.getElementById("buttonLogin").click();
		}
	});
</script>
</html>
