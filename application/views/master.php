<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-home bg-c-blue"></i>
<div class="d-inline">
<h5>Main Dashboard</h5>
<span>All Website is managed from this place</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="javascript:void"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="javascript:void">Dashboard CRM</a> </li>
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

<div class="col-xl-3 col-md-6">
    <div class="card prod-p-card card-red">
        <a href="<?php base_url(); ?>slider">
            <div class="card-body">
                <div class="row align-items-center m-b-30">
                    <div class="col">   
                    <h6 class="m-b-5 text-white">Total Sliders</h6>
                    <h3 class="m-b-0 f-w-700 text-white"><?php echo $this->db->count_all_results('slider'); ?></h3>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-photo text-c-red f-18"></i>
                    </div>
                </div>
            </div>
        </a>

    </div>
</div>


<div class="col-xl-3 col-md-6">
    <div class="card prod-p-card card-blue">
           <a href="<?php base_url(); ?>product">
            <div class="card-body">
                <div class="row align-items-center m-b-30">
                <div class="col">
                <h6 class="m-b-5 text-white">Total Products</h6>

                <?php 
                       $this->db->distinct("title");
                       $this->db->select("*");  
                       $this->db->from("product"); 
                       $this->db->group_by('title'); 
                        
                 ?>

                <h3 class="m-b-0 f-w-700 text-white"><?php echo $this->db->count_all_results();  ?></h3>
                </div>
                <div class="col-auto">
                <i class="fas fa-database text-c-blue f-18"></i>
                </div>
            </div>
        </div>
    </a>
    </div>
</div>


<div class="col-xl-3 col-md-6">
    <div class="card prod-p-card card-green">
     <a href="<?php base_url(); ?>services">
        <div class="card-body">
            <div class="row align-items-center m-b-30">
            <div class="col">
            <h6 class="m-b-5 text-white">Total Services</h6>
            <h3 class="m-b-0 f-w-700 text-white"><?php echo $this->db->count_all_results('service'); ?></h3>
            </div>
            <div class="col-auto">
            <i class="fas fa-cogs text-c-green f-18"></i>
            </div>
            </div>
        </div>
    </a>
    </div>
</div>

<div class="col-xl-3 col-md-6">
    <div class="card prod-p-card card-yellow">
       <a href="<?php base_url(); ?>client">
        <div class="card-body">
            <div class="row align-items-center m-b-30">
                <div class="col">
                <h6 class="m-b-5 text-white">Total Clients</h6>
                <h3 class="m-b-0 f-w-700 text-white"><?php echo $this->db->count_all_results('client'); ?></h3>
                </div>
                <div class="col-auto">
                <i class="fas fa-user text-c-yellow f-18"></i>
                </div>
            </div>
        </div>
    </a>
    </div>
</div>

<script data-cfasync="false" src="files/assets/js/email-decode.min.js"></script><script type="a9c39f2a08075f982875ae17-text/javascript" src="files/bower_components/jquery/js/jquery.min.js"></script>
<script type="a9c39f2a08075f982875ae17-text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="a9c39f2a08075f982875ae17-text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
<script type="a9c39f2a08075f982875ae17-text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="files/assets/pages/waves/js/waves.min.js" type="a9c39f2a08075f982875ae17-text/javascript"></script>

<script type="a9c39f2a08075f982875ae17-text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script src="files/assets/pages/chart/float/jquery.flot.js" type="a9c39f2a08075f982875ae17-text/javascript"></script>
<script src="files/assets/pages/chart/float/jquery.flot.categories.js" type="a9c39f2a08075f982875ae17-text/javascript"></script>
<script src="files/assets/pages/chart/float/curvedLines.js" type="a9c39f2a08075f982875ae17-text/javascript"></script>
<script src="files/assets/pages/chart/float/jquery.flot.tooltip.min.js" type="a9c39f2a08075f982875ae17-text/javascript"></script>

<script src="files/bower_components/chartist/js/chartist.js" type="a9c39f2a08075f982875ae17-text/javascript"></script>

<script src="files/assets/pages/widget/amchart/amcharts.js" type="a9c39f2a08075f982875ae17-text/javascript"></script>
<script src="files/assets/pages/widget/amchart/serial.js" type="a9c39f2a08075f982875ae17-text/javascript"></script>
<script src="files/assets/pages/widget/amchart/light.js" type="a9c39f2a08075f982875ae17-text/javascript"></script>

<script src="files/assets/js/pcoded.min.js" type="a9c39f2a08075f982875ae17-text/javascript"></script>
<script src="files/assets/js/vertical/vertical-layout.min.js" type="a9c39f2a08075f982875ae17-text/javascript"></script>
<script type="a9c39f2a08075f982875ae17-text/javascript" src="files/assets/pages/dashboard/custom-dashboard.min.js"></script>
<script type="a9c39f2a08075f982875ae17-text/javascript" src="files/assets/js/script.min.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="a9c39f2a08075f982875ae17-text/javascript"></script>

<script src="files/assets/js/rocket-loader.min.js" data-cf-settings="a9c39f2a08075f982875ae17-|49" defer=""></script></body>

</html>
