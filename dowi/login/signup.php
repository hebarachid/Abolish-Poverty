
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Heba Rachid">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" href="images/ARTICLE-91852568.jpg" sizes="16x16" type="image/png">
	<link rel="stylesheet" href="login.css"> </link>
</head>
<body >
<div class="container">
	<div class="header">
		<h2>Sign up</h2>
	</div>
	<form id="form" class="form" method="post" action="/dowi/server.php">
		<div class="form-control">
			<label for="username">Username</label>
			<input name="username" type="text" placeholder="HebaRachid12" id="username" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Email</label>
			<input name="email" type="email" placeholder="hebaRachid11@gmail.com" id="email" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password</label>
			<input name="password_1" type="password" placeholder="Password" id="password" name="password"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password check</label>
			<input name="password_2" type="password" placeholder="Password " id="password2"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div>
		<?php 
		foreach($erros as $error){
			echo $error;
		}
		?>
		</div>
        <button type="submut" name="reg_user">Submit</button>
        <button><a href="/dowi/Phase1/index.php" style="color: aliceblue;">Home</a></button>
	</form>
</div>

<div class="social-panel-container">
	<div class="social-panel">
		<p>Created with <i class="fa fa-heart"></i> by
			<a target="_blank" href="https://florin-pop.com">Heba Rachid</a></p>
		<button class="close-btn"><i class="fas fa-times"></i></button>
		<h4>Get in touch on</h4>
		<ul>
			<li>
				<a href="https://www.patreon.com "  target="_blank">
					<i class="fab fa-discord" ></i>
				</a>
			</li>
			<li>
				<a href="https://twitter.com" target="_blank">
					<i class="fab fa-twitter"></i>
				</a>
			</li>
			<li>
				<a href="https://linkedin.com" target="_blank">
					<i class="fab fa-linkedin"></i>
				</a>
			</li>
			<li>
				<a href="https://facebook.com" target="_blank">
					<i class="fab fa-facebook"></i>
				</a>
			</li>
			<li>
				<a href="https://instagram.com" target="_blank">
					<i class="fab fa-instagram"></i>
				</a>
			</li>
		</ul>
	</div>
</div>
<button class="floating-btn">
	Get in Touch
</button>
</body>

<!-- <script src="login.js"></script> -->
</html>