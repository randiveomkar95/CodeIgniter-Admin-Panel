	<!-- BANNER -->
	<div class="section banner-page about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Products</div>
				</div>
			</div>
		</div>
	</div>
	 
	 	<!-- ABOUT FEATURE -->
	<div class="section feature overlap">
		<div class="container" >
			<div class="row" data-aos="fade-left">
				 
				<div class="col-sm-10 col-md-10">
		<?php  
           if($fetch_single_product->num_rows() > 0)  
           {    $t = 0;
                foreach($fetch_single_product->result() as $row)  
                {  }}  ?>

						<h3><?php echo nl2br($row->title); ?></h3>
					<div id="caro" class="owl-carousel owl-theme">
			

		<?php  
           if($fetch_single_product->num_rows() > 0)  
           {    $t = 0;
                foreach($fetch_single_product->result() as $row)  
                { 
                    $imgURL = "../uploads/product/";
                    $image = $row->image; ?>

						<div class="item">
							<img src="<?php echo $imgURL.$image; ?>"  style="height:450px; width:100%;" alt="">
						</div><?php }} ?>
						
					</div>
				</div>

				<div class="col-sm-12 col-md-12">
					<h3>Product Description:</h3>
					<p><?php echo $row->description; ?></p> 
					<div class="margin-bottom-70"></div>
				</div>

			</div>

			



		</div>
	</div>



	

	