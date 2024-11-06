<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_ADMIN_ID'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("include/css.php");?>	
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	<!-- header start -->
	<header class="ttr-header">
		<?php include("include/header.php");?>	
	</header>
	<!-- header end -->
	<!-- Left sidebar menu start -->
		<?php include("include/leftmenu.php");?>	
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Dashboard</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Dashboard</li>
				</ul>
			</div>	
			<!-- Card -->
			<div class="row">
				<!-- Your Profile Views Chart -->
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Teacher Register</h4>
						</div>
						<div class="widget-inner">
		<form class="edit-profile m-b30" method="post" action="action/teacher_save.php" enctype="multipart/form-data" autocomplete="off">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Personal Details</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Full Name</label>
										<div>
											<input class="form-control" type="text" name="name" required pattern="[a-zA-Z1 _]{3,50}">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Gender</label>
										<div>
                                        	<select name="sex" class="form-control" required>
                                            	<option value="">Select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Other</option>
                                            </select>
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Age</label>
										<div>
											<input class="form-control" type="number" name="age" min="23" max="80" required>
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Date Of Birth</label>
										<div>
											<input class="form-control" type="date" name="dob" required max="<?php echo date("Y-m-d");?>" value="<?php echo date("2002-01-01");?>">
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Phone No.</label>
										<div>
											<input class="form-control" type="text" name="phone1" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
										</div>
									</div>									
									<div class="form-group col-6">
										<label class="col-form-label">Phone No.</label>
										<div>
											<input class="form-control" type="text" name="phone2" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Email</label>
										<div>
											<input class="form-control" type="email" name="email" required>										
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Photo.</label>
										<div>
											<input class="form-control" type="file" name="photo" required>
										</div>
									</div>
									
									<div class="seperator"></div>
									
									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>2. Address</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Address</label>
										<div>
											<input class="form-control" type="text" name="addrs" required>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">City</label>
										<div>
                                        	<select name="city" class="form-control" required>
                                            	<option value="">Select</option>
                                                <option>Palakkad</option>
                                                <option>Thrissur</option>
                                                <option>Kozhikode</option>
                                            </select>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">State</label>
										<div>
                                        	<select name="state" class="form-control" required>
                                            	<option value="">Select</option>
                                                <option>Kerala</option>
                                                <option>Tamilnadu</option>
                                                <option>Karnataka</option>
                                            </select>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Postcode</label>
										<div>
											<input class="form-control" type="text" name="pcode" required pattern="[0-9]{6,6}" maxlength="6" minlength="6">
										</div>
									</div>

									<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

									<div class="col-12 m-t20">
										<div class="ml-auto">
											<h3 class="m-form__section">3. Job Information</h3>
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Department</label>
										<div>
                                        	<select name="depart" class="form-control" required>
                                            	<option value="">Select</option>
                                                <option>BCA</option>
                                                <option>BSC</option>
                                                <option>BCOM</option>
                                            </select>
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Experience</label>
										<div>
											<input class="form-control" type="text" name="expr" required>
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Designation</label>
										<div>
                                        	<select name="desig" class="form-control" required>
                                            	<option value="">Select</option>
                                                <option>Hod</option>
                                                <option>Teacher</option>
                                            </select>
										</div>
									</div>									
                                    <div class="form-group col-6">
										<label class="col-form-label">Qualification</label>
										<div>
											<input class="form-control" type="text" name="quali" required>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Join Date</label>
										<div>
											<input class="form-control" type="date" name="jdate" required min="<?php echo date("Y-m-d");?>">
										</div>
									</div>									
                                    
                                    <div class="col-12 m-t20">
										<div class="ml-auto">
									<h3 class="m-form__section">4. Authentication Information</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Password</label>
										<div>
								<input class="form-control" type="password" name="password" required maxlength="20" minlength="4" >
										</div>
									</div>	
                                    <div class="col-12 m-t20">
										<div class="ml-auto">
									<h3 class="m-form__section">5. About</h3>
										</div>
									</div>									
									<div class="form-group col-12">
										<label class="col-form-label">Describe</label>
										<div>
								<textarea class="form-control" name="about" required></textarea>
										</div>
									</div>									
									<div class="col-12">
										<button type="submit" class="btn">Register</button>
										<button type="reset" class="btn-secondry">Cancel</button>
									</div>
								</div>
							</form>							
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
				<!-- Your Profile Views Chart END-->
                
			</div>
			<!-- Card -->
		</div>
	</main>
	<div class="ttr-overlay"></div>
<?php include("include/js.php");?>
</body>
</html>