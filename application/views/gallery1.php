 
	<!-- BANNER -->
	<div class="section banner-page gallery">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Gallery</div>
	
				</div>
			</div>
		</div>
	</div>

	<!-- Team -->
	<div class="section why overlap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<nav class="categories">
						<ul class="portfolio_filter dark">
						<?php  
				           if($fetch_distinct_data->num_rows() > 0)  
				           {    $t = 0;
				                foreach($fetch_distinct_data->result() as $row)  
				                {
                                     $dot =  ".";
                                     $title =  $row->title;
                                     $string = str_replace(' ', '', $title);
                                  	 $string1 = str_replace('&', '', $string);
				                   ?>

						<li><a href="#" data-filter="<?php echo $dot.$string1; ?>">

							<?php

							 echo wordwrap($title,25,"<br>\n");

							?>
							</a></li>
						<?php }}  ?>
				

					</ul>
				</nav>
				</div>
			</div>
		<div class="row grid-services" data-aos="fade-right">
			<?php  
				           if($fetch_product_all_data->num_rows() > 0)  
				           {    $t = 0;
				                foreach($fetch_product_all_data->result() as $row)  
				                {
				                  $imgURL = "./uploads/product/";
                   				  $image = $row->image; 
                   				  $title =  $row->title;
                                  $string = str_replace(' ', '', $title);
                                  $string1 = str_replace('&', '', $string);

                   				  ?>

                      

				<div class="col-sm-6 col-md-4 <?php echo $string1; ?>">
					<div class="box-image-4">
						<a href="<?php echo base_url();?>products/<?php $uid = $row->title; echo $uid; ?>" title="<?php echo nl2br($row->title); ?>">
							<div class="media">
								<img style="height:245px; width:360px; object-fit: cover;" src="<?php echo $imgURL.$image; ?>" alt="" class="img-responsive">
							</div>
							<div class="body" style="height: 160px;">
								<div class="content">
									<h4 class="title"><?php echo nl2br($row->title); ?>	</h4>
									
								</div>
							</div>
						</a>
					</div>
				</div>
				<?php }}  ?>
			</div>
		</div>
	</div>	



	