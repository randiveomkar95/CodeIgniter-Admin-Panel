	<!-- BANNER -->
	<div class="section banner-page service">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Services</div>
					<ol class="breadcrumb">
						<!-- <li><a href="index.html">About Us</a></li> -->
						<!-- <li class="active">Our Company</li> -->
					</ol>
				</div>
			</div>
		</div>
	</div>

	<!-- SERVICES -->
	<div class="section services">


			<div class="section why overlap">
		<div class="container">
			<div class="row">
			<?php  
           if($fetch_service_data->num_rows() > 0)  
           {    $t = 0;
                foreach($fetch_service_data->result() as $row)  
                {   
                    $t++;
                    $imgURL = "./uploads/services/";
                    $image = $row->image;
                    $image_icon = $row->image_icon; ?>

				<div class="col-sm-6 col-md-3">
					<div class="feature-box-8">
		              <div class="column media" id = "zoomIn">
		                <img style="height: 200px; width: 361px; " src="<?php echo $imgURL.$image; ?>" alt="rud" class="img-responsive">
		              </div>
		              <div class="body" style="height: 100px;">
		                <div class="icon-holder">
		                  <span>
		                  	<img  style="height: 45px; width: 45px; margin-left: 20px;margin-top: 20px;" src="<?php echo $imgURL.$image_icon; ?>" class="img-responsive">
		                  </span>
		                </div>
		                <a href="javascript:void(0)" class="title"><?php echo nl2br($row->title); ?></a>
		              </div>
		            </div>
				</div><?php }} ?>


				
			</div>
		</div>
	</div>
		
	</div> 
		
	</div> 

	