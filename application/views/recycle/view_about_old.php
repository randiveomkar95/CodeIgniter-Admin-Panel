
<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-server bg-c-blue"></i>
<div class="d-inline">
<h5> About Section</h5>
<p>You can manage here your about content</p>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<!-- <li class="breadcrumb-item">
<a href="index-2.html"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="#!">Data Table</a>
</li>
<li class="breadcrumb-item"><a href="#!">Styling DataTable</a>
</li> -->
<a href="<?php base_url(); ?>about">
<li class="breadcrumb-item"><input type="submit" class="btn btn-primary" value="Add Data" name="">
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

<div class="card">
<div class="card-header">
<h5>All Records from About Section</h5>
<span></span>
</div>
<div class="card-block">
<div class="dt-responsive table-responsive">
<table id="base-style" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>ID</th>
<th>About</th>
<th>Action</th>

</tr>
</thead>
<tbody>
    <?php  
           if($fetch_data->num_rows() > 0)  
           {  
                foreach($fetch_data->result() as $row)  
                {  
           ?> 
 <tr>
<td><?php echo $row->id; ?></td>
<td><?php echo nl2br($row->about); ?></td>
<td>
  <a href="<?php echo base_url(); ?>about/update_data/<?php echo $row->id; ?>">
<!-- <a href="<?php base_url(); ?>about/update"> -->
    <input type="submit" name="Edit" class="btn btn-success" value="Update">

    </a>

</td>

</tr>
<?php } } ?>


</tbody>

 </table>
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



<script type="d6c9f3ca192f01503b2eeb2a-text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="d6c9f3ca192f01503b2eeb2a-text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="d6c9f3ca192f01503b2eeb2a-text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="d6c9f3ca192f01503b2eeb2a-text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="../files/assets/pages/waves/js/waves.min.js" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>

<script type="d6c9f3ca192f01503b2eeb2a-text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="d6c9f3ca192f01503b2eeb2a-text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="d6c9f3ca192f01503b2eeb2a-text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="../files/bower_components/datatables.net/js/jquery.dataTables.min.js" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>
<script src="../files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>
<script src="../files/assets/pages/data-table/js/jszip.min.js" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>
<script src="../files/assets/pages/data-table/js/pdfmake.min.js" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>
<script src="../files/assets/pages/data-table/js/vfs_fonts.js" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>
<script src="../files/bower_components/datatables.net-buttons/js/buttons.print.min.js" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>
<script src="../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>
<script src="../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>
<script src="../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>
<script src="../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>

<script src="../files/assets/pages/data-table/js/data-table-custom.js" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>
<script src="../files/assets/js/pcoded.min.js" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>
<script type="d6c9f3ca192f01503b2eeb2a-text/javascript" src="../files/assets/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="d6c9f3ca192f01503b2eeb2a-text/javascript"></script>
<script type="d6c9f3ca192f01503b2eeb2a-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="../files/assets/js/rocket-loader.min.js" data-cf-settings="d6c9f3ca192f01503b2eeb2a-|49" defer=""></script></body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/dt-styling.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Nov 2019 09:34:55 GMT -->
</html>
