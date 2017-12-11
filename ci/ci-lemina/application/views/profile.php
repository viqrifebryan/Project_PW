<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/Style.css">
	
</head>
<body>
	<nav>
		<ul>
			<a href="<?php echo base_url();?>C_Lemina/index">
				<li>
					<div align ="left,middle">
					<img src="<?php echo base_url();?>/assets/img/lemina-icon.PNG" style="height:98px">
					</div>
				</li>	
			</a>
			<li><a><b>MODEL</b></a>
				<ul>
					<li><a href="<?php echo base_url();?>index.php/C_Lemina/model_newton"><b>NEWTON</a></li>
					<li><a href="<?php echo base_url();?>index.php/C_Lemina/model_pascal">PASCAL</a></li>
					<li><a href="<?php echo base_url();?>index.php/C_Lemina/model_gauss">GAUSS</b></a></li>
				</ul>
			</li>
		
			<li><a><b>MERCHANDISE</b></a>
				<ul>
					<li><a href="<?php echo base_url();?>index.php/C_Lemina/merch_shirt"><b>SHIRT</a></li>
					<li><a href="<?php echo base_url();?>index.php/C_Lemina/merch_jacket">JACKET</a></li>
					<li><a href="<?php echo base_url();?>index.php/C_Lemina/merch_watch">WATCH</b></a></li>
				</ul>
			</li>
		
			<li><a><b>SPARE PART</b></a>
				<ul>
					<li><a href="<?php echo base_url();?>index.php/C_Lemina/spare_tyres"><b>TYRES</a></li>
					<li><a href="<?php echo base_url();?>index.php/C_Lemina/spare_engine">ENGINE</a></li>
					<li><a href="<?php echo base_url();?>index.php/C_Lemina/spare_brake">BRAKE</b></a></li>
				</ul>
			</li>
			<li >
				<a href="<?php echo base_url();?>index.php/C_Lemina/about"><b>ABOUT</b></a>
			</li>
			
			<p align ="right" style="font-size: 17px; color: white;">
				<?php if($this->session->has_userdata('userName')) {
					echo "Halo, "; ?>
					<a href="<?php echo base_url();?>index.php/C_Lemina/profile">
					<?php echo $this->session->userdata('userName'); ?>
					</a>
				<?php } ?>
			</p>
		</ul>
	</nav>
	
	<img class="bg" src="<?php echo base_url();?>/assets/img/profile_head.jpg">
	<div class = "content">
		<h1>Welcome <?php echo$this->session->userdata('userName');?></h1>
		<br>
		<img src="<?php if($this->session->userdata('userRole') == 1) echo base_url("assets/img/profile_dealer.png");
			else echo base_url("assets/img/profile_user.png");?>" alt="sessi" width="200" height="200" align="left" style="margin:15px">

		<p> <br><br>
			User name : <?php echo $this->session->userdata('userName');?> <br>
			Email : <?php echo $this->session->userdata('userID');?> <br>
			Birth date : <?php echo $this->session->userdata('userBirthDate');?> <br>
			Sex : <?php if($this->session->userdata('userSex') == "M") echo "Man";
				else echo "Woman";?> <br>
			Address : <?php echo $this->session->userdata('userAddress');?> <br>
			Account type : <?php if($this->session->userdata('userRole') == 1) echo "Dealer";
				else echo "Driver";?> <br>
		</p>
		<br><br><br>
		<a href="<?php echo base_url("C_Lemina/log_out");?>">
		<img src="<?php echo base_url("assets/img/profile_signout.png");?>" width="30" height="30" align="left"> Sign Out </a>
	</div>
	
	<br><br><br>
	<div class="footer" align="center">
		<br><br><br><br><br>
		<div class="icon-bar" >
			<b>Follow Us </b>
			<a href="https://www.facebook.com"><img src="<?php echo base_url();?>/assets/img/facebook-icon.png" width="30" height="30" align="bottom"></a>
			<a href="https://www.instagram.com"><img src="<?php echo base_url();?>/assets/img/instagram-icon.png" width="30" height="30" align="bottom"></a>
			<a href="https://www.twitter.com"><img src="<?php echo base_url();?>/assets/img/twitter-icon.png" width="30" height="30" align="bottom"></a>
			<a href="https://www.linkedin.com"><img src="<?php echo base_url();?>/assets/img/linkedin-icon.png" width="30" height="30" align="bottom"></a>
			<a href="https://www.youtube.com"><img src="<?php echo base_url();?>/assets/img/youtube-icon.png" width="30" height="30" align="bottom"></a>
			<p style="font-size:14px">Copyright © 2017 RaditRaihanViqri Company. All rights reserved.</p>
		</div>
	</div>
	
</body>
</html>