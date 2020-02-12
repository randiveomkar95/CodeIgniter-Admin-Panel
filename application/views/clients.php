	<!-- BANNER -->
	<div class="section banner-page service">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Clients</div>
					<ol class="breadcrumb">
						<!-- <li><a href="index.html">About Us</a></li> -->
						<!-- <li class="active">Our Company</li> -->
					</ol>
				</div>
			</div>
		</div>
	</div>

	<!-- SERVICES -->
	<div class="section client">


			<div class="section why overlap">
		<div class="container">
			<div class="row">
			<?php  
           if($fetch_client_data->num_rows() > 0)  
           {    $t = 0;
                foreach($fetch_client_data->result() as $row)  
                {   
                    $t++;
                    $imgURL = "./uploads/client/";
                    $image = $row->image; ?>



				<div class="col-sm-3 col-md-3">
				<img class="img-responsive" style="width: 100%; height: 200px;     -webkit-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    margin-bottom:20px;" src="<?php echo $imgURL.$image; ?>" /></div>


			<?php }} ?>


				
			</div>
		</div>
	</div>
		
	</div> 
		


<style type="text/css">


img:hover {
  filter: none; /* IE6-9 */
  -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
 /*transform: scale(1.2);
 transition: transform .4s;*/
}
</style>