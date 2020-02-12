	<!-- BANNER -->
	<div class="section banner-page about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">About Us</div>
					<ol class="breadcrumb">
						<!-- <li><a href="index.html">About Us</a></li> -->
						<!-- <li class="active">Our Company</li> -->
					</ol>
				</div>
			</div>
		</div>
	</div>
	 
	<!-- ABOUT FEATURE -->
	<div class="section feature overlap">
		<div class="container">

			<div class="row">
				<?php  
		           if($fetch_about_data->num_rows() > 0)  
		           {    
		                foreach($fetch_about_data->result() as $row)  
		                {   
		                	$imgURL = "./uploads/about/";
		                    $image = $row->image;

		                     ?>				
				
			       <div class="col-sm-6 col-md-6"  data-aos="fade-right" >
      
				          <div class="box-icon-4" style="height: 180px !important">
				        <div class="body-content">
							<p align="left" style="font-size: 18px;margin-bottom: 15px;text-transform: uppercase;font-weight: 700;">Vision</p> 
							<p style="text-align:justify; font-size: 15px;"><?php echo $row->vision; ?></p>
								</div>
         					 </div>
        				</div>

        						       <div class="col-sm-6 col-md-6"  data-aos="fade-left">
      
				          <div class="box-icon-4" style="height: 180px !important">
				     	<div class="body-content">
							<p align="left" style="font-size: 18px;margin-bottom: 15px;text-transform: uppercase;font-weight: 700;">Mission</p>
							<p style="text-align:justify; height: 100px; font-size: 15px;"><?php echo $row->mission; ?></p>
						</div>
         					 </div>
        				</div>
				
			</div>

		<div class="row">
					<h2 class="section-heading">
						ABOUT US
					</h2>
				
			</div>

			<div class="row t50">
						<h2 data-aos="zoom-in" align="center" style="font-family: 'Caveat', cursive; font-size: 50px; " >Sasha Automation</h2>
				<div class="col-sm-5 col-md-5"  >
					<div class="jumbo-heading">
						<img data-aos="fade-right" src="<?php echo $imgURL.$image; ?>" style="height: 375px;" >
					</div>
				</div>
				<div class="col-sm-7 col-md-7" data-aos="fade-left" >
					<p style="text-align:justify; font-size: 16px; color: #023B7B !important; margin-top: -5px;" class="lead" ><?php echo nl2br($row->about); ?><br>

</p>
				</div>


					
				
			</div><?php }} ?>

		</div>
	</div>
	 



	 
	<div class="section about t50"  id="company">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12 col-md-12">
					<h2 class="section-heading">
						Compny Profile
					</h2>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="box-team">
						<div class="box-image">
							<img src="<?php echo base_url(); ?>assets/images/testimonial/t2.png" alt="">
						</div>
						<div class="body-content">
							<div class="people">Name</div>
							<div class="position">Designation</div>
							<div class="excert">Description comes here</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-6">
					<div class="box-team">
						<div class="box-image">
							<img src="<?php echo base_url(); ?>assets/images/testimonial/t2.png" alt="">
						</div>
						<div class="body-content">
							<div class="people">Name</div>
							<div class="position">Designation</div>
							<div class="excert">Description comes here</div>
						</div>
					</div>
				</div>

				
	
				
			</div>
		</div>
	</div> 
	