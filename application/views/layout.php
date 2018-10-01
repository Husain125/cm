<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>vendor/bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- =============================================================================================== -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!-- =============================================================================================== -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>css/main.css">
<!--===============================================================================================-->
</head>
<body  onload="tid()">

	<?php $this->load->view($pagename); ?>
	<script src="<?php echo base_url('') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url('') ?>vendor/animsition/js/animsition.min.js"></script>
	<script src="<?php echo base_url('') ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url('') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	  function AddNewTr()
	   {
	 	  $('.lineTbl tr:last').after('<tr><td><div class="form-group"><div class="row"><div class="col-md-6 col-sm-6 col-xs-6"><label class="abc">Product</label><input type="text" placeholder="Product Here" class="form-control" name="product[]"></div><div class="col-md-3 col-sm-3 col-xs-3"><label class="abc">Qty</label><input type="text" placeholder="Qty" class="form-control" name="qty[]"></div><div class="col-md-3 col-sm-3 col-xs-3"><label class="abc">Amt</label><input type="text" placeholder="Amt" class="form-control" name="amt[]"></div><div class="col-md-1 col-sm-1 col-xs-1"><p style="color : #fff ; cursor: pointer;" onclick=$(this).closest("tr").remove()><i class="fa fa-remove"></i></p></div></div></div></td></tr>');
	   }
  </script>
  <script type="text/javascript">
	function tid() {
		var uniqid = Date.now();
		document.getElementById('tid').value = uniqid;
	}
</script>
</body>
</html>
