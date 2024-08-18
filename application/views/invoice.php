<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Products | Invoice  </title>
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
  <!--Print -->
<style type="text/css" media="print">
  
  @page {
  size:auto;
  margin: 0px;
}
.footer, .page-heading{
  display: none;
}

html{
  margin: 0px;
}

.ibox{
  margin-top: -100px;
}

</style>

</head>
<?php 
$i=3;
include('menu.php');
 ?>
<!-- Start page content wrapper -->
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-6">
        <h2>View Invoice </h2>
        </div>
        <div class="col-lg-6">
             <button class="btn btn-success right" id="print" type="button">Print</button>
        </div>
      </div>
    <div class="wrapper-content ">
      <div class="row">
               
                <div class="col-lg-12">
                  <div class="ibox float-e-margins">
                    <div class="widgets-container">
                       <div class="row">
  <div class="col-lg-12">
                      <h4>We are pleased to invoice you the following :</h4><br>
                      <table class="table table-responsive table-bordered">
                        <tr>
                          <thead>
                            <tr>
                            <th><center>Sl No</center></th>
                            <th><center>Product Name</center></th>
                            <th><center>Quantity</center></th>
                            <th><center>Price</center></th>
                          </tr>
                          </thead>
                          <?php 
                          $i=1;
                          foreach($sel->result() as $row)
                          {  $qid=$row->id;
                            ?>
                          <tbody>
                            <tr>
                              <td style="width: 100px;"><center><?php echo $i ?></center></td>
                              <td><center><?php echo $row->product_name;?></center></td>
                              <td style="width: 200px;"><center><?php echo $row->quantity;?></center></td>
                              <td style="width: 200px;"><center><?php echo $row->price;?></center></td>
                            </tr>
                             <?php
                             $i++;
                        }
                        ?>
                        </tbody>
                        </tr>
                      </table>
                    </div>
                    <div class="col-lg-12">
                    <div class="col-lg-7 col-xs-7 col-sm-7"></div>
                    <div class="col-lg-2 col-xs-2 col-sm-2">
                      <h4>Account details :</h4>
                    </div>
                    <div class="col-lg-3 col-xs-3 col-sm-3">
                      <h4>Acc no : 123456789120</h4>
                      <h4>IFSC : example</h4>
                    </div>
                  </div>
                  </div>
                </div>
               </div>
       </div>
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
 
  $(document).ready(function(){
    $('#print').click(function()
        {
             window.print();
        });
          });

</script>

</body>

</html>
