<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--- Includes --->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

	<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="col-md-3">

<?php $this->load->view('users/login_view') ?>
	</div>
	<div class="col-md-9">
		<?php $this->load->view($main_view);?>
	</div>
</div>
</body>

<script type="text/javascript">
	// Ref : http://tutorials.jenkov.com/jquery/
	/* Document Ready*/
	$(document).ready(function () {//DOM manipulation code
		 });
</script>
<style>
	/*div {
		border:solid 1px black;
	}
</style>
</html>
