<?php
if($_GET['page']=='logout'){ 
session_destroy();
echo "<meta http-equiv='refresh'content='0;url=index.php'> ";
exit;
}

if (isset($_POST['loginkep'])) {
	$log = mysql_query("SELECT * FROM Karyawan WHERE Username = '$_POST[user]' AND Password = '$_POST[pass]'");

	if (mysql_num_rows($log) == "1") {
		$us = mysql_fetch_array($log);
		session_start();

		$_SESSION['nama'] = $us['Nama'];
		$_SESSION['userkep'] = $us['Username'];
		$_SESSION['passkep'] = $us['Password'];

		echo "<meta http-equiv='refresh'content='0;url=index.php?page=home'> ";
		exit;
	}else{

	}
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Ace Admin</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
	</head>

	<body class="login-layout light-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
						<br><br><br><br><br>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
										<img src="LOG.jpg" width="100%">
											<!-- <h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-user red"></i>
												Please Enter Your Information
											</h4> -->

											<div class="space-6"></div>

											<form action="" method="POST">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="user" class="form-control" value="<?=$_SESSION['userkep'];?>" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="pass" class="form-control" value="<?=$_SESSION['passkep'];?>" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">

														<button  name="loginkep" type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											
										</div><!-- /.widget-main -->

										
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
							</div><!-- /.position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- inline scripts related to this page -->
	</body>
</html>
