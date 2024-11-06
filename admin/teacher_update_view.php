<?php
	include("auth.php");
	include('../connect/db.php');
	$teach_id=$_GET['teach_id'];
	$result = $db->prepare("select * from teacher where teach_id='$teach_id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row["name"];	
		$sex=$row["sex"];
		$age=$row["age"];
		$dob=$row["dob"];
		$expr=$row["expr"];
		$phone1=$row["phone1"];
		$phone2=$row["phone2"];
		$email=$row["email"];
		$addrs=$row["addrs"];
		$city=$row["city"];
		$state=$row["state"];
		$pcode=$row["pcode"];
		$depart=$row["depart"];
		$desig=$row["desig"];
		$jdate=$row["jdate"];
		$password=$row["password"];
		$date=$row["date"];	
		$photo=$row["photo"];	
		$about=$row["about"];
		$quali=$row["quali"];
	}
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
							<h4>Profile Update</h4>
						</div>
						<div class="widget-inner">
		<form class="edit-profile m-b30" method="post" action="action/teacher_update.php" enctype="multipart/form-data">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Personal Details</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Full Name</label>
										<div>
                                        	<input type="hidden" value="<?php echo $teach_id;?>" name="teach_id">
											<input class="form-control" type="text" name="name" value="<?php echo $name;?>" readonly>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Gender</label>
										<div>                                        
                                            <input class="form-control" type="text" name="sex"  value="<?php echo $sex;?>" readonly> 
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Age</label>
										<div>
											<input class="form-control" type="text" name="age"  value="<?php echo $age;?>" readonly>
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Date Of Birth</label>
										<div>
											<input class="form-control" type="text" name="dob"  value="<?php echo $dob;?>" readonly>
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Phone No.</label>
										<div>
											<input class="form-control" type="text" name="phone1"  value="<?php echo $phone1;?>" readonly>
										</div>
									</div>									
									<div class="form-group col-6">
										<label class="col-form-label">Phone No.</label>
										<div>
											<input class="form-control" type="text" name="phone2"  value="<?php echo $phone2;?>" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Email</label>
										<div>
											<input class="form-control" type="text" name="email"  value="<?php echo $email;?>" readonly>										
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Photo.</label>
										<div>
											<input class="form-control" type="file" name="photo">
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
											<input class="form-control" type="text" name="addrs"  value="<?php echo $addrs;?>">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">City</label>
										<div>
                                        	<select name="city" class="form-control">
                                            	<option><?php echo $city;?></option>
                                                <option>Palakkad</option>
                                                <option>Thrissur</option>
                                                <option>Kozhikode</option>
                                            </select>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">State</label>
										<div>
                                        	<select name="state" class="form-control">
                                            	<option><?php echo $state;?></option>
                                                <option>Kerala</option>
                                                <option>Tamilnadu</option>
                                                <option>Karnataka</option>
                                            </select>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Postcode</label>
										<div>
											<input class="form-control" type="text" name="pcode"  value="<?php echo $pcode;?>">
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
                                        	<input class="form-control" type="text" name="depart"  value="<?php echo $depart;?>">                                       
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Experience</label>
										<div>
											<input class="form-control" type="text" name="expr"  value="<?php echo $expr;?>">
										</div>
									</div>
                                     <div class="form-group col-6">
										<label class="col-form-label">Qualification</label>
										<div>
											<input class="form-control" type="text" name="quali" value="<?php echo $quali;?>">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Designation</label>
										<div>
											<input class="form-control" type="text" name="desig"  value="<?php echo $desig;?>">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Join Date</label>
										<div>
											<input class="form-control" type="date" name="jdate"  value="<?php echo $jdate;?>" readonly>
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
								<input class="form-control" type="password" name="password"  value="<?php echo $password;?>" readonly>
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
								<textarea class="form-control" name="about" readonly><?php echo $about;?></textarea>
										</div>
									</div>									
									<div class="col-12">
										<button type="submit" class="btn">Update</button>
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