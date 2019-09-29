<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url(); ?>dist/img/icon.png">
  <title>PPDB Babussalam</title>
  
  <link href="<?=base_url()?>dist/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dist/sweetalert2/sweetalert2.min.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>dist/sweetalert2/sweetalert2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dist/themify/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dist/google-font/css.css">
  <script type="text/javascript" src="<?php echo base_url() ?>dist/js/jquery.min.js"></script>
	<style type="text/css">
		body{
			font-family: 'Muli', sans-serif;
		}
		div.form-title{
			margin-bottom: 20px;
			padding: 10px 0 10px 15px;
		}
		.row div{
			margin-bottom: 10px;
		}
		.box{
			box-shadow: 0 0 20px .5px silver;
		}
	</style>

</head>
<body class="bg-light" onload="__sapa()">
	<?php echo $content; ?>
	<p class="text-center" style="margin-top: 50px">Copyright &copy; 2019 Yayasan Pondok Pesantren Babussalam</p>
</body>

</html>