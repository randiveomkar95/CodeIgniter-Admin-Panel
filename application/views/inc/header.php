<!DOCTYPE html>
<html lang="zxx">
  
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sasha Automation - Innovative Automation</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content=""> 
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/logo/fevi.png">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/images/logo/fevi.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/images/logo/fevi.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/images/logo/fevi.png">
	
	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/vendor/magnific-popup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css" />
	
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/vendor/modernizr.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">  
</head>
<body>

	<!-- Load page -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
    <div class="header">
    	<!-- TOPBAR -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-md-6">
						<div class="topbar-left">
							<div class="welcome-text">
						<!-- <b>	Innovative Automation | An ISO 9001:2015 Company</b> -->
							</div>
						</div>
					</div>
					<div class="col-sm-7 col-md-6">
						<div class="topbar-right">
							<ul class="topbar-menu">
								
								<li><a href="<?php echo base_url(); ?>contact_us" title="Contact Us"><b>Contact Us</b></a></li>
							</ul>
							<ul class="topbar-sosmed">
							<li>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- TOPBAR LOGO SECTION -->
		<div class="topbar-logo">
			<div class="container">
				

				<div class="contact-info">
					<!-- INFO 1 -->


						<?php  
           if($fetch_header_data->num_rows() > 0)  
           {    $t = 0;
                foreach($fetch_header_data->result() as $row)  
                {   

           ?>
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-envelope-o shake"></div>
						</div>
						<div class="body-content">
							<div class="heading">Email Support</div>
							<?php echo $row->message; ?>
						</div>
					</div>
					<!-- INFO 2 -->
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-phone shake"></div>
						</div>
						<div class="body-content">
							<div class="heading">Call Support</div>
								<?php echo $row->mobile; ?>
						</div>
					</div>

					<?php }} ?>
					<!-- INFO 3 -->
					<a href="<?php echo base_url(); ?>contact_us" title="" class="btn btn-cta pull-right">GET A QUOTE</a>

				</div>
			</div>
		</div>

		<!-- NAVBAR SECTION -->
		<div class="navbar navbar-main">
		
			<div class="container container-nav">
				<div class="rowe">
						
	

						<?php  
           if($fetch_data->num_rows() > 0)  
           { 
                foreach($fetch_data->result() as $row)  
                {   $t++;
                    $imgURL = "./uploads/logo/";
                    $image = $row->image_file;
             
            
           ?>

					<a class="navbar-brand" href="<?php echo base_url(); ?>" style="margin-top: -10px;">
						<img src="<?php echo base_url();?><?php echo $imgURL.$image; ?>" style="height: 71px;" alt="" />
					</a>

				<?php }} ?>

				   <div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>

					<nav class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-left">
						
							<li>
							  <a href="<?php echo base_url();?>" data-hover="dropdown"  onmouseover="play();">Home  <span class="caret"></span></a>	
							  	  <ul class="dropdown-menu">
								<li><a href="<?php echo base_url();?>about_us">Vision Mission</a></li>
								<li><a href="<?php echo base_url();?>about_us#company">Company Profile</a></li>
								<li><a href="<?php echo base_url();?>clients">Our Clients</a></li>
							  </ul>		 
							</li>


							<li>
							  <a href="javascript:void(0);" data-hover="dropdown" onmouseover="play();">Products <span class="caret"></span></a> 

							    <ul class="dropdown-menu">								
							    <?php  
						           if($fetch_distinct_data->num_rows() > 0)  
						           {    
						                foreach($fetch_distinct_data->result() as $row)  
						                {   
						        ?>
								<li><a href="<?php echo base_url();?>products/<?php $uid = $row->title; echo $uid; ?>"><?php echo $row->title; ?></a></li>
								<?php    }} ?>
								</ul>
								

							</li>


							<li>
							  <a href="<?php echo base_url();?>gallery1" onmouseover="play();">Projects </a> 
							</li>
							<li>
							  <a href="<?php echo base_url();?>service" onmouseover="play();">Services </a>	 
							</li>
							<li>
							  <a href="<?php echo base_url();?>infrastructure" onmouseover="play();">Resources </a>	 
							</li>							
							<li>
							  <a href="<?php echo base_url();?>about_us" onmouseover="play();">About Us </a> 
							</li>
							<li>
							  <a href="<?php echo base_url();?>contact_us" onmouseover="play();">Contact Us</a>
							</li>	
						</ul>

<!-- 						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
							  	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a>
						  		<ul class="dropdown-menu">
									<li>
										<form class="navbar-form navbar-left" role="search">
										  <div class="form-group">
										    <input type="text" class="form-control" placeholder="Enter Product Name">
										  </div>
										</form>
									</li>
							  	</ul>
							</li>
						</ul> -->

					</nav>
						
				</div>
			</div>
	    </div>

    </div>
 	<script>

  function play(){
  var audio = new Audio('<?php echo base_url(); ?>assets/images/sound/b.mp3');
  audio.play();
  }

</script>







