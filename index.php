<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vehicle Booking System</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Vehicle booking System"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Vehicles For Hiring</h2>
                                   <h2 class="caption" style="text-align: center">Cars - Bikes - Scooters</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Yamaha - Suzuki - Ford - </h3>
			</section>
	</section><!--  end hero section  -->

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_vehicles.php?id=<?php echo $rws['vehicles_id'] ?>">
						<img class="thumb" src="vehicles/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Kshs.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_vehicles.php?id=<?php echo $rws['vehicles_id'] ?>"><?php echo 'vehicles Make>'.$rws['vehicles_type'];?></a>
						</h1>
						<h2>Vehicles Name/Model: <span class="property_size"><?php echo $rws['vehicles_name'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>Brands Available</li>
						<li><a href="#">Yamaha</a></li>
						<li><a href="#">Suzuki</a></li>
						<li><a href="#">Ford</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>

				<li class="about">
					<p>Our motive is to provide effective means of transportation facility thorugh renting vehicles to the customers in a Fixed low cost</p>
					<ul>
						<li><a href="http://facebook.com/titankustoms" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/titankustoms" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/titankustoms" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved 
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>