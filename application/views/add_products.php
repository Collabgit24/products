<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Products | Add-Products  </title>
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<!-- slimscroll -->
<link href="<?php echo base_url(); ?>assets/css/jquery.slimscroll.css" rel="stylesheet">
<!-- Fontes -->
<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/simple-line-icons.css" rel="stylesheet">
<!-- all buttons css -->
<link href="<?php echo base_url(); ?>assets/css/buttons.css" rel="stylesheet">
<!-- animate css -->
<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
<!-- adminbag main css -->
<link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
<!-- aqua black theme css -->
<link href="<?php echo base_url(); ?>assets/css/aqua-black.css" rel="stylesheet">
<!-- media css for responsive  -->
<link href="<?php echo base_url(); ?>assets/css/main.media.css" rel="stylesheet">
<!-- icheck -->
<link href="<?php echo base_url(); ?>assets/css/skins/all.css" rel="stylesheet">
<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
<!--[if lt IE 9]> <script src="dist/html5shiv.js"></script> <![endif]-->
<!--Calender-->
<link href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/daterangepicker.css" />


</head>
<?php
include('menu.php');
?>
<!-- Start page content wrapper -->
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-6">
        <h2> Product Details </h2>
        </div>
      </div>
    <div class="wrapper-content ">
      <?php echo form_open_multipart('Products/addproducts'); ?>
      <div class="row">
               
                <div class="col-lg-6">
                  <div class="ibox float-e-margins">
                    <div class="widgets-container">
                       <div class="form-group">
                  <label for="exampleInputEmail1">Product Name</label>
                  <input class="form-control m-t-xxs"  type="text" name="product_name" placeholder="Product Name" value="<?php echo set_value('product_name'); ?>">
                  <font color="red"><?php echo form_error('product_name'); ?></font>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Quantity</label>
                  <input class="form-control m-t-xxs" type="text" name="quantity" placeholder="Enter Quantity" id="quantity" value="<?php echo set_value('quantity'); ?>">
                  <font color="red"><?php echo form_error('quantity'); ?></font>
                </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input class="form-control m-t-xxs" type="text" name="price" placeholder="Enter Price" id="price" value="<?php echo set_value('price'); ?>">
                  <font color="red"><?php echo form_error('price'); ?></font>
                </div>
                <button type="submit" class="btn aqua m-t-xs bottom15-xs" onclick="submit()">Submit</button>

                 </div>
                </div>
               </div>
            </div>
       
    <?php echo form_close(); ?>
    
<!-- start footer -->
<div class="footer">
      <div class="pull-right">
        
      </div>
    </div>
  </div>
</div>
<!-- Go top -->
<a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
<!-- Go top -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/vendor/validator.js"></script>
<!-- icheck -->
<script src="<?php echo base_url(); ?>assets/js/vendor/icheck.js"></script>
<!-- bootstrap js -->
<script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>
<!-- slimscroll js -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/jquery.slimscroll.js"></script>
<!-- pace js -->
<script src="<?php echo base_url(); ?>assets/js/vendor/pace/pace.min.js"></script>
<!-- main js -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<!--Calender-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
    
    <script src="<?php echo base_url(); ?>assets/js/vendor/daterangepicker.js"></script>
<script>
 $(function () {
  $('#myForm').validator();
});

  $(document).ready(function(){
            var callbacks_list = $('.demo-callbacks ul');
            $('input.iCheck').on('ifCreated ifClicked ifChanged ifChecked ifUnchecked ifDisabled ifEnabled ifDestroyed', function(event){
              callbacks_list.prepend('<li><span>#' + this.id + '</span> is ' + event.type.replace('if', '').toLowerCase() + '</li>');
            }).iCheck({
               checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
              increaseArea: '20%'
            });
          });

</script>
]

</body>
</html>
