<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"/> -->
	<title>
	</title>
	<link rel="stylesheet" href="index.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<?php include '/ind.php';?>
	<script>
		document.getElementById("myImage").src = 'images/Haitian-boy-2-with-food.png';
		function Delete(e){
			let items = [];
			JSON.parse(localStorage.getItem('items')).map(data=>{
				if(data.id != e.parentElement.parentElement.children[0].textContent){
					
					items.push(data);

				}
			});
			localStorage.setItem('items',JSON.stringify(items));
			window.location.reload();
		};
	</script>
</head>
<body  style="background-color: lightcyan;">
	<div class="main">
		<header id="header" class="header">
			<h1>You CAN HELP!</h1>
			<div class="iconShopping">
				<p>0</p>
				<i class="fa fa-shopping-cart"></i>
			</div>
		</header><!-- /header -->
	
		<div class="col m-4" >
			<h1 style="text-align: center; font-family: cursive;">What cause your donation is going. you choose!</h1>
			</div>
		<div class="itemsBox">
			<div class="item">
				<img  id="myImage" src="images/4686.jpg" />
				<script> document.getElementById("myImage").src = 'images/Haitian-boy-2-with-food.png'; </script>
				<div class="itemInfo">
					<h1>Happily sustaining all the needed nutrition</h1>
					<p>$<span>15</span></p>
					<a href="#" title="add to cart" class="attToCart">Donate</a>
				</div>
			</div>
			<div class="item">
				<img src="images/Medical-Volunteer-Abroad-Header.jpg"/>
				<div class="itemInfo">
					<h1>Provide medication for the ill</h1>
					<p>$<span>10</span></p>
					<a href="#" title="add to cart" class="attToCart">Donate</a>
				</div>
			</div>
			<div class="item">
				<img src="images/pict_original.jpg"/>
				<div class="itemInfo">
					<h1>Put a smile with new clothes and gifts</h1>
					<p>$<span>7</span></p>
					<a href="#" title="add to cart" class="attToCart">Donate</a>
				</div>
			</div>
			<div class="item">
				<img src="images/UN0149769_4.jpg"/>
				<div class="itemInfo">
					<h1>Provide education for a bright future</h1>
					<p>$<span>30</span></p>
					<a href="#" title="add to cart" class="attToCart">Donate</a>
				</div>
			</div>
			<div class="item">
				<img src="images/maxresdefault.jpg"/>
				<div class="itemInfo">
					<h1>Provide housing and care</h1>
					<p>$<span>50</span></p>
					<a href="#" title="add to cart" class="attToCart">Donate</a>
				</div>
			</div>
			<div class="item">
				<img src="images/dsc09223_35146334014_o.jpg"/>
				<div class="itemInfo">
					<h1>Provide clean water</h1>
					<p>$<span>5</span></p>
					<a href="#" title="add to cart" class="attToCart">Donate</a>
				</div>
			</div>
			
		</div>
	</div>


	<div class="cartBox">
		<div class="cart">
			<i class="fa fa-close"></i>
		
			<h1>Donations</h1>
			<table></table>
		<button><a href="/dowi/Vida/visa.php">Submit</a></button>
		<button><a href="/dowi/Phase1/donate.php">Home</a> </button>
		</div>
	</div>


	<!-- script -->
	<script src="index.js"></script>
</body>
</html>