	<div class="section banner-page about1">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Contact</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->
	<div class="section contact overlap">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-md-push-8">
					<div class="widget download">
	      			 <?php  
				           if($fetch_brochure_data->num_rows() > 0)  
				           {    $t = 0;
				                foreach($fetch_brochure_data->result() as $row)  
				                { 
				                	 $imgURL = "uploads/brochure/";
                    				 $image = $row->image_file;

                    			}
                    		}
				           ?>

						<a href="<?php echo base_url();?><?php echo $imgURL.$image; ?>" class="btn btn-secondary btn-block btn-sidebar"><span class="fa  fa-file-pdf-o"></span> Company Brochure</a>
					</div>

					<div class="widget contact-info-sidebar">
						<div class="widget-title">
							Contact Info
						</div>
						<ul class="list-info">
				       <?php  
				           if($fetch_footer_data->num_rows() > 0)  
				           {    $t = 0;
				                foreach($fetch_footer_data->result() as $row)  
				                {  
				           ?>							
							<li>
								<div class="info-icon">
									<span class="fa fa-map-marker"></span>
								</div>
								<div class="info-text"> <?php echo nl2br($row->visit); ?>
								</div> </li>
							<li>
								<div class="info-icon">
									<span class="fa fa-phone"></span>
								</div>
								<div class="info-text"> <?php echo nl2br($row->mobile); ?>  </div>
							</li>
							<li>
								<div class="info-icon">
									<span class="fa fa-envelope"></span>
								</div>
								<div class="info-text"> <?php echo nl2br($row->message); ?></div>
							</li><?php }} ?>
							
						</ul>
					</div> 

				</div>
				<div class="col-sm-8 col-md-8 col-md-pull-4">
					<div class="content">
						<p class="section-heading-3"></p>
						<div class="margin-bottom-30"></div>
						<h1 class="section-heading-2">
							<?php echo $this->session->flashdata('success'); ?>
							
						</h1>
						
						<h3 class="section-heading-2">
							Contact Details
						</h3>
						<div class="career-tabs" data-example-id="togglable-tabs">
						<ul id="myTabs" class="nav nav-tabs" role="tablist">
							<li class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab" aria-expanded="true">Customer Registration</a></li>
							<li class=""><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab" aria-expanded="false">Vendor Registration</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade active in" id="tab1">
								<div class="row">
									<div class="col-sm-12 col-md-12">
										<div class="body-tab">
										<form method="post" action="<?php echo base_url(); ?>insert_enquiry" class="form-contact">
									<div class="form-group">
										<input type="text" class="form-control" name="name" placeholder="Customer Name..." required="">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" name="email" placeholder="Enter Email..." required="">
									</div>
									<div class="form-group">
										<input type="text" onkeypress="return isNumber(event)" id="extra7"  required class="form-control" name="mobile"  placeholder="Mobile Number...">

									</div>
										<div class="form-group">
										<select  class="form-control" name="enquiry_for" required>
											<option>Enquiry For</option>
											<option  value="Warehouse Solutions-ASRS">1. Warehouse Solutions-ASRS</option>
											<option value="Heavy & Structural Fabrication Project" >2. Heavy & Structural Fabrication Project</option>
											<option value="Construction Equipment">3. Construction Equipment</option>
											<option value="Material Handling Equipment">4. Material Handling Equipment</option>
											<option value="PEB Structure">5. PEB Structure</option>
											<option value="Customized Trolleys & Pallets-Bins Conveyors">6. Customized Trolleys & Pallets-Bins Conveyors</option>
											<option value="Other">7. Other...</option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										 <textarea  required name="message" class="form-control" rows="6" placeholder="Write message"></textarea>
									</div>
									<div class="form-group">
										<div id="success"></div>
										<input type="submit" name="insert" class="btn btn-secondary col-md-6 disabled" value="SUBMIT" style="pointer-events: all; cursor: pointer;">
									</div>
						</form>			
										<!-- <div class="margin-bottom-100"></div> -->
										</div>
									</div>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="tab2">
								<div class="row">
									<div class="col-sm-12 col-md-12">
									<div class="body-tab">
									<form method="post" action="<?php echo base_url(); ?>insert_vendor_enquiry" class="form-contact" enctype="multipart/form-data">
									<div class="form-group">
										<input type="text" class="form-control" name="name" placeholder="Vendor Name..." required="">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" name="email" placeholder="Enter Email..." required="">
									</div>
									<div class="form-group">
										<input type="text" onkeypress="return isNumber(event)" id="extra7" required maxlength="10" class="form-control" name="mobile"  placeholder="Mobile Number...">
									</div>
									<div class="form-group">
										<input type="text"  required class="form-control" name="company"  placeholder="Company Name...">
									</div>	
									<div class="form-group">
										<label for="file">Upload Document:</label>
										<input type="file" multiple required class="form-control" name="document[]" >
									</div>	
									<div class="form-group">
										 <textarea  required name="message" class="form-control" rows="6" placeholder="Write message"></textarea>
									</div>
									<div class="form-group">
										<div id="success"></div>
										<input type="submit" name="insert" class="btn btn-secondary col-md-6 disabled" value="SUBMIT" style="pointer-events: all; cursor: pointer;">
									</div>
						</form>			
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
			
						<div class="margin-bottom-50"></div>
					 </div>
				</div>

			</div>


			
		</div>
	</div>	

	<!-- MAPS -->
	<div class="maps-wraper">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.3559053395093!2d73.782460114545!3d18.648018470131856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9cfa2c00001%3A0x7eabdf028a6c9a2d!2sSasha%20Gifts!5e0!3m2!1sen!2sin!4v1578412083362!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
	</div>

	<script>
		function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
	</script>


	