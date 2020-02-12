<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-clipboard bg-c-blue"></i>
<div class="d-inline">
<h5>Client Section</h5>
<span>You can change here your website Client content</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<!-- <li class="breadcrumb-item">
<a href="index-2.html"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="#!">About Section</a>
</li>
<li class="breadcrumb-item">
<a href="#!">Change About Content</a>
</li> -->
<a href="<?php base_url(); ?>../view_client">
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
<h5>Edit Client Content</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">

<form method="post" action="<?php echo base_url(); ?>client/update_image" enctype="multipart/form-data">
<?php  
// print_r($fetch_single_data);

           if($fetch_single_data->num_rows() > 0)  
           {  
                foreach($fetch_single_data->result() as $row)  
                {  
                	$imgURL = "../uploads/client/";
                    $image = $row->image;
           ?>

           <div class="form-group row">
<label class="col-sm-2 col-form-label">Previous LOGO:</label>
<div class="col-sm-10">
<img src="<?php echo $imgURL.$image; ?>" style="height: 190px; width: 370px;">  
<input type="hidden" name="hidden_id" value="<?php echo $row->id; ?>" />
<span class="messages"></span>
</div>
</div><br>

  <div class="form-group row">
<label class="col-sm-2 col-form-label">New LOGO:</label>
<div class="col-sm-10">
<input type="file" name="image"> <br><br><br>
<a href="<?php echo base_url(); ?>client/update_image/<?php $uid = $row->id; echo $uid; ?>"></a>
<input type="submit" name="update" value="CHANGE IMAGE" class="btn btn-primary">
<span class="messages"></span>
</div>
</div><br><br>

</form>
<form method="post" action="<?php echo base_url(); ?>client/update_data" enctype="multipart/form-data">
<hr style="border: 4px solid #73B4FF; border-radius: 2px;"><br><br>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Name:</label>
<div class="col-sm-10">
  <input type="hidden" name="hidden_id" value="<?php echo $row->id; ?>" />
<textarea class="form-control max-textarea"  name="name" maxlength="255" rows="0"><?php echo nl2br($row->name); ?></textarea>  

<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Link:</label>
<div class="col-sm-10">
<textarea class="form-control max-textarea"  name="content" maxlength="255" rows="6"><?php echo nl2br($row->content); ?></textarea>  
<span class="messages"></span>
</div>
</div>

	

<div class="form-group row">
<label class="col-sm-2"></label>
<div class="col-sm-10">
<a href="<?php base_url(); ?>update_data/<?php $uid = $row->id; echo $uid; ?>">
<input type="submit" name="update" id="upload" value="Update" class="btn btn-primary m-b-0">
</a>
</div>
</div>

<?php }} ?>


</form>


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





<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url();?>files/bower_components/jquery/js/jquery.min.js"></script>
<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url();?>files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url();?>files/bower_components/popper.js/js/popper.min.js"></script>
<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url();?>files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>files/assets/pages/waves/js/waves.min.js" type="262517f3dce7f1201a66e159-text/javascript"></script>

<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url();?>files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url();?>files/bower_components/modernizr/js/modernizr.js"></script>
<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url();?>files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="<?php echo base_url();?>files/assets/js/underscore-min.js" type="262517f3dce7f1201a66e159-text/javascript"></script>
<script src="<?php echo base_url();?>files/assets/js/moment.min.js" type="262517f3dce7f1201a66e159-text/javascript"></script>
<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url();?>files/assets/pages/form-validation/validate.js"></script>

<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url();?>files/assets/pages/form-validation/form-validation.js"></script>
<script src="<?php echo base_url();?>files/assets/js/pcoded.min.js" type="262517f3dce7f1201a66e159-text/javascript"></script>
<script src="<?php echo base_url();?>files/assets/js/vertical/vertical-layout.min.js" type="262517f3dce7f1201a66e159-text/javascript"></script>
<script src="<?php echo base_url();?>files/assets/js/jquery.mCustomScrollbar.concat.min.js" type="262517f3dce7f1201a66e159-text/javascript"></script>
<script type="262517f3dce7f1201a66e159-text/javascript" src="<?php echo base_url();?>files/assets/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="262517f3dce7f1201a66e159-text/javascript"></script>

<script src="<?php echo base_url();?>files/assets/js/rocket-loader.min.js" data-cf-settings="262517f3dce7f1201a66e159-|49" defer=""></script>

</body>



</body>

</html>



