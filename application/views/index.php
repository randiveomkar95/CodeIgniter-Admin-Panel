	<div id="slides" class="section banner">
		<ul class="slides-container">
		<?php  
           if($fetch_slider_data->num_rows() > 0)  
           {    
                foreach($fetch_slider_data->result() as $row)  
                {   
                	$imgURL = "./uploads/slider/";
                    $image = $row->image;  ?>
			<li>
				<img src="<?php echo $imgURL.$image; ?>" alt="">
				<div class="overlay-bg"></div>
				<div class="container">
					<div class="wrap-caption">
						<h2 class="caption-heading">
							<?php echo nl2br($row->content); ?>
						</h2>	
					</div>
				</div>
			</li><?php }} ?>
		</ul>
		<nav class="slides-navigation">
			<div class="container">
				<a href="#" class="next">
					<i class="fa fa-chevron-right"></i>
				</a>
				<a href="#" class="prev">
					<i class="fa fa-chevron-left"></i>
				</a>
	      	</div>
	    </nav>
	</div>

	<!-- ABOUT FEATURE -->
	<div class="section feature overlap">
			<div class="section stat-client" style="margin-top: -240px; z-index: 1;">
		<div class="container">
			<div class="row">
				
			<marquee scrollamount="10" scrolldelay="90" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
		   <ul class="list-inline list-unstyled r" >
			<?php  
	           if($fetch_client_data->num_rows() > 0)  
	           {  
	            $t = 0;
	                foreach($fetch_client_data->result() as $row)  
	                {   $t++;
	                    $imgURL = "./uploads/client/";
	                    $image = $row->image; ?>
				<li class="productbox" style="height: 100px; width: 120px;">
				    <img src="<?php echo $imgURL.$image; ?>" style="height: 100px; width: 150px;" class="img-responsive">
				</li><?php }} ?>
		   </ul>
			</marquee>
			</div>
		</div>
	</div>
		<div class="container">

			<div class="row">
				<?php  
		           if($fetch_about_data->num_rows() > 0)  
		           {    
		                foreach($fetch_about_data->result() as $row)  
		                {   
		                	$imgURL = "./uploads/about/";
		                    $image = $row->image; 
		                }
		            }?>		

		        
				       <div class="col-sm-6 col-md-6"  data-aos="fade-right">
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
					
			<style>
				.box-icon-4 .body-content .heading:hover{
					color: #fff !important;
				}
			</style>

			</div>
					<h2 class="section-heading"> ABOUT US </h2>
					
				
			
			<div class="row t50">
						<h2 align="center" style="font-family: 'Caveat', cursive; font-size: 50px; " >Sasha Automation</h2>
				<div class="col-sm-5 col-md-5" >
					<div class="jumbo-heading" >
						<img data-aos="zoom-in" src="<?php echo $imgURL.$image; ?>" style="height: 375px;" >
					</div>
				</div>
				<div class="col-sm-7 col-md-7" data-aos="fade-left" >
					<p style="text-align:justify; font-size: 16px; color: #023B7B !important; margin-top: -5px;" class="lead" >
						<?php echo nl2br($row->about); ?>
						</p>
				</div>
                        <center>
						<a href="<?php echo base_url(); ?>about_us" title=""  class="btn btn-cta" data-aos="zoom-in" >READ MORE</a>
						</center>
			</div>

		</div>
	</div>
		<div class="section cta">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="cta-info" data-aos="zoom-in">
						<h1>Automation with Innovation</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	 
	 	<!-- PRODUCT FEATURE -->
	 <div class="section services t50" >
		<div class="container">
			<div class="row">
					<h2 class="section-heading">
						PRODUCTS
					</h2>
			</div>
			</div>
	<div class="section feature overlap">
		<div class="container">
			<div class="row t30">
				<div class="col-sm-6 col-md-6" data-aos="fade-right">
					<div id="caro" class="owl-carousel owl-theme">
							<?php  
			           if($fetch_product_data->num_rows() > 0)  
			           {    $t = 0;
			                foreach($fetch_product_data->result() as $row)  
			                {   
			                    $t++;
			                    $imgURL = "./uploads/product/";
			                    $image = $row->image; ?>
			            
						<div class="item">
							<img src="<?php echo $imgURL.$image; ?>" style="height:372px;" alt="Company History">
						</div>
					<?php }} ?>
					</div>
				</div>
				<div class="col-sm-6 col-md-6" data-aos="fade-left">
					<h3><?php echo nl2br($row->title); ?></h3>
					<p style="text-align: justify;"><?php echo nl2br($row->description); ?></p>
					
				</div>
			</div>
		</div>
	  </div>
    </div>	

	<!-- SERVICES -->
	<div class="section services t50">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h2 class="section-heading" >
						<span data-aos="fade-right">SERVICES</span>
					</h2>
				</div>
			</div>
			</div>
			<div class="section why overlap">
		<div class="container" >
			<div class="row"data-aos="fade-left">
			<?php  
           if($fetch_service_limited_data->num_rows() > 0)  
           {    $t = 0;
                foreach($fetch_service_limited_data->result() as $row)  
                {   
                    $t++;
                    $imgURL = "./uploads/services/";
                    $image = $row->image;
                    $image_icon = $row->image_icon; ?>
            
				<div class="col-sm-6 col-md-4">
					<div class="feature-box-8">
		              <div class="media">
		                <img style="height: 250px; width: 361px; " src="<?php echo $imgURL.$image; ?>" alt="rud" class="img-responsive">
		              </div>
		              <div class="body" style="height: 100px;">
		                <div class="icon-holder">
		                  <span>
		                  	<img style="height: 45px; width: 45px; margin-left: 20px;margin-top: 20px;" src="<?php echo $imgURL.$image_icon; ?>">
		                  </span>
		                </div>
		                <a href="#" class="title"><?php echo nl2br($row->title); ?></a>
		              </div>
		            </div>
				</div> <?php }} ?>
			</div>
				<center>
						<a href="<?php echo base_url(); ?>service" title="" data-aos="zoom-in" class="btn btn-cta">VIEW ALL SERVICES</a></center>
		</div>
	</div>
	</div> 

	<!-- TESTIMONIALS --> 
	<div class="section testimony bgight t100">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<h2 class="section-heading">
								TESTIMONIALS
							</h2>
						</div>
					</div>

					<div id="owl-testimony">
			    <?php  
		           if($fetch_testimonial_data->num_rows() > 0)  
		           {  
		            $t = 0;
		                foreach($fetch_testimonial_data->result() as $row)  
		                {   $t++;
		                    $imgURL = "./uploads/testimonial/";
		                    $image = $row->image;  ?>
		        
						<div class="item">
							<div class="testimonial-1">
				              <div class="media"><img src="<?php echo $imgURL.$image; ?>" alt="" class="img-responsive"></div>
				              <div class="body" style="height: 160px;">
				                <div class="title"><?php echo nl2br($row->name); ?></div>
				                <div class="company"><?php echo nl2br($row->designation); ?></div>
				                <div class="company"><?php echo nl2br($row->content); ?></div>
				              </div>
				            </div>
						</div>	<?php }} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- CTA -->
	<div class="section cta" data-aos="fade-left">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="cta-info">
						<h1>Innovative Automation</h1>
						<a href="<?php echo base_url(); ?>contact_us" title="" class="btn btn-cta">GET QUOTE</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CLIENT -->
	<div class="section stat-client">
		<div class="container">
			<div class="row">
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<h2 class="section-heading">
								OUR VALUABLE CLIENTS
							</h2>
						</div>
					</div>
			<marquee scrollamount="12" scrolldelay="90" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
		   <ul class="list-inline list-unstyled r">
			<?php  
	           if($fetch_client_data->num_rows() > 0)  
	           {  
	            $t = 0;
	                foreach($fetch_client_data->result() as $row)  
	                {   $t++;
	                    $imgURL = "./uploads/client/";
	                    $image = $row->image; ?>
				<li class="productbox">
				    <img src="<?php echo $imgURL.$image; ?>"  class="img-responsive">
				</li><?php }} ?>
		   </ul>
			</marquee>
			</div>
		</div>
	</div>