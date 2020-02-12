<!-- INFO BOX -->
  <div class="section info overlap-bottom">
    <div class="container">
      <div class="row">
          <?php  
           if($fetch_footer_data->num_rows() > 0)  
           {    $t = 0;
                foreach($fetch_footer_data->result() as $row)  
                {  
           ?>
        <div class="col-sm-4 col-md-4"  data-aos="fade-right">
          <!-- BOX 1 -->
                    
          <div class="box-icon-4">
            <div class="icon"><i class="fa fa-phone"></i></div>
            <div class="body-content">
              <h4>CALL US NOW</h4>
              <?php echo $row->mobile; ?>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-4" data-aos="fade-up">
          <!-- BOX 2 -->
          <div class="box-icon-4">
            <div class="icon"><i class="fa fa-map-marker"></i></div>
            <div class="body-content">
              <h4>COME VISIT US</h4>
              <?php echo $row->visit; ?>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-4" data-aos="fade-left">
          <!-- BOX 3 -->
          <div class="box-icon-4">
            <div class="icon"><i class="fa fa-envelope"></i></div>
            <div class="body-content">
              <h4>SEND US A MESSAGE</h4>
             <?php echo ($row->message); ?>
            </div>
          </div>
        </div><?php }} ?>
        
      </div>

    </div>
  </div>

<div>
   <div class="col-sm-12 col-md-12" style="background-color: #023B7B;"><br>
            <p style="color: #fff; text-align: center;"  class="ftex">&copy; <?php echo date('Y'); ?> All Rights Reserved. Design and Developed by <a style="color: #F58634;" href="https://www.ycstech.in/">YCS Technologies Pvt. Ltd.</a></p> <br>
          </div>
</div>
  
  <!-- JS VENDOR -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/vendor/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/vendor/jquery.superslides.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/vendor/owl.carousel.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/vendor/bootstrap-hover-dropdown.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/vendor/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/vendor/easings.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/vendor/isotope.pkgd.min.js"></script>
  <!-- sendmail -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/vendor/validator.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/vendor/form-scripts.js"></script>
  <script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5'></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init({duration:1500});
</script>
</body>
</html>