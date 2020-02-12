<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-clipboard bg-c-blue"></i>
<div class="d-inline">
<h5>Product Section</h5>
<span>You can change here your website Product content</span>
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
<a href="<?php base_url(); ?>../view_product">
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
<h5><b>You Are Editing:</b><i style="color: #4099FF; font-size: 20px;"> <?php 

 if($fetch_single_product_data->num_rows() > 0)  
           {    
             foreach($fetch_single_product_data->result() as $row)  
                { }}

            echo nl2br($row->title); ?>
            	
           </i><b>Product</b> </h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>

<div class="card-block">
<div class="table-responsive dt-responsive">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Sr.No</th>

<th>Image</th>

<!-- <th>Last Uploaded On</th> -->
<th>Action</th>
</tr>
</thead>
<tbody>
    <?php  
           if($fetch_single_product_data->num_rows() > 0)  
           {    $t = 0;
                foreach($fetch_single_product_data->result() as $row)  
                {   
                    $t++;
                    $imgURL = "../uploads/product/";
                    $image = $row->image;
           ?> 
<tr>
<td><?php echo $t; ?></td>
<td><center><img src="<?php echo $imgURL.$image; ?>" style="height: 180px; width: 230px;" ></center></td>

<td>

<a href="<?php base_url(); ?>edit_product_image/<?php $uid = $row->id; echo $uid; ?>">
 <i class='fa fa-pencil' style='font-size:25px; color:#4099FF;'></i>
</a>&nbsp;&nbsp;&nbsp;


<?=anchor("product/delete_data/".$row->id,"<i class='fa fa-trash' style='font-size:25px; color:red;'></i>",array('onclick' => "return confirm('Do you want to really delete this record??')"))?>



</td>


</tr>
<?php } } ?>
</tfoot>
</table>
</div>
 
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



