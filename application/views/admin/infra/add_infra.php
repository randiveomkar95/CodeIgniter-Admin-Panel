<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-clipboard bg-c-blue"></i>
<div class="d-inline">
<h5>Infrastructure Section</h5>
<span>You can upload here your website Infrastructure Images</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<!-- <li class="breadcrumb-item">
<a href="index-2.html"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="#!">Infrastructure Section</a>
</li>
<li class="breadcrumb-item">
<a href="#!">Add Infrastructure Images</a>
</li> -->
<a href="<?php base_url(); ?>view_infra">
<li class="breadcrumb-item"><input type="submit" class="btn btn-primary" value="View Data" name="">
</li>
</a>
</ul>
</div>
</div>
</div>
</div>

<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">

<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>Infrastructure  ( Upload multiple images at a time)</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">

<form method="post" action="<?php echo base_url(); ?>infra/upload_multiple" enctype="multipart/form-data">

<div class="form-group row">
<label class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="name"  placeholder="Enter Name">
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Upload Images </label>
<div class="col-sm-10">
<input type="file" multiple class="form-control" name="userfile[]"  placeholder="Text Input Validation">
<span class="messages"></span>
</div>
</div>

	



<div class="form-group row">
<label class="col-sm-2"></label>
<div class="col-sm-10">
<input type="submit"  name="submitForm" id="submitForm"  value="Upload" class="btn btn-primary m-b-0">
</div>
</div>


</form>



 <!-- <?php echo $error;?>  -->
<!--   <?php echo form_open_multipart('logo/post');?> 
     <input type="file" name="image" size="20" />
     <input type="submit" value="upload" /> 
  </form> -->


</div>
</div>










</div>
</div>
</div>

</div>
</div>
</div>
</div>

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>


<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?php echo base_url(); ?>files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?php echo base_url(); ?>files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?php echo base_url(); ?>files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?php echo base_url(); ?>files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?php echo base_url(); ?>files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url(); ?>files/bower_components/jquery/js/jquery.min.js"></script>
<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url(); ?>files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url(); ?>files/bower_components/popper.js/js/popper.min.js"></script>
<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url(); ?>files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>files/assets/pages/waves/js/waves.min.js" type="262517f3dce7f1201a66e159-text/javascript"></script>

<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url(); ?>files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url(); ?>files/bower_components/modernizr/js/modernizr.js"></script>
<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url(); ?>files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="<?php echo base_url(); ?>files/assets/js/underscore-min.js" type="262517f3dce7f1201a66e159-text/javascript"></script>
<script src="<?php echo base_url(); ?>files/assets/js/moment.min.js" type="262517f3dce7f1201a66e159-text/javascript"></script>
<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url(); ?>files/assets/pages/form-validation/validate.js"></script>

<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url(); ?>files/assets/pages/form-validation/form-validation.js"></script>
<script src="<?php echo base_url(); ?>files/assets/js/pcoded.min.js" type="262517f3dce7f1201a66e159-text/javascript"></script>
<script src="<?php echo base_url(); ?>files/assets/js/vertical/vertical-layout.min.js" type="262517f3dce7f1201a66e159-text/javascript"></script>
<script src="<?php echo base_url(); ?>files/assets/js/jquery.mCustomScrollbar.concat.min.js" type="262517f3dce7f1201a66e159-text/javascript"></script>
<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url(); ?>files/assets/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="262517f3dce7f1201a66e159-text/javascript"></script>
<script type="262517f3dce7f1201a66e159-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="<?php echo base_url(); ?>files/assets/js/rocket-loader.min.js" data-cf-settings="262517f3dce7f1201a66e159-|49" defer=""></script></body>

</html>


<script>  
 $(document).ready(function(){  
      $('#upload_form').on('submit', function(e){  
           e.preventDefault();  
           if($('#image_file').val() == '')  
           {  
                alert("Please Select the File");  
           }  
           else  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>logo/ajax_upload",   
                     //base_url() = http://localhost/tutorial/codeigniter  
                     method:"POST",  
                     data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                          $('#uploaded_image').html(data);  
                     }  
                });  
           }  
      });  
 });  
 </script>


<!-- <div class="container">
	<div class="row ">			
		<form enctype="multipart/form-data" action="" method="post">
		<div class="form-group  col-sm-3">
			<label>Choose Files</label>
			<input type="file" class="form-control" name="upload_Files[]" multiple/>				
		</div>   
		<div class="form-group  col-sm-6">		
			<input  type="submit" class="btn btn-default" name="submitForm" id="submitForm"/>	
		</div>		
	</div> 	
	<div class="row ">
		<p><?php echo $this->session->flashdata('statusMsg'); ?></p>
	</div>
    <div class="row">
		<div class="gallery">
			<ul>
				<?php if(!empty($gallery)): foreach($gallery as $file): ?>
				<li>
					<img src="<?php echo base_url('./uploads/infra/'.$file['image']); ?>" alt="" >
					<p>Uploaded On <?php echo date("j M Y",strtotime($file['created'])); ?></p>
				</li>
				<?php endforeach; else: ?>
				<p>No File uploaded.....</p>
				<?php endif; ?>
			</ul>
		</div>
    </div>
</div> -->