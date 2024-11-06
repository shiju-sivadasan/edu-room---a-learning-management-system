<?php
	include("auth.php");
	include('../connect/db.php');
	$pst_id=$_GET['pst_id'];
	$result = $db->prepare("select * from user_post where pst_id='$pst_id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row["name"];	
		$sex=$row["sex"];
		$age=$row["age"];
		$cntno=$row["cntno"];
		
		$cname=$row["cname"];	
		$subj=$row["subj"];
		$ctgry=$row["ctgry"];
		$descp=$row["descp"];
		$ptype=$row["ptype"];
		$date=$row["date"];
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
							<h4><?php echo $ptype;?> Update</h4>
						</div>
						<div class="widget-inner">
		<form class="edit-profile m-b30" method="post" autocomplete="off" action="action/update_post.php" enctype="multipart/form-data">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1.<?php echo $ptype;?>  Details</h3>
										</div>
									</div>
									<div class="form-group col-4">
										<label class="col-form-label">Name</label>
										<div>
                                        	<input type="hidden" name="pst_id" value="<?php echo $pst_id;?>">
											<input class="form-control" type="text" name="cname" value="<?php echo $cname;?>">
										</div>
									</div>
                                    <div class="form-group col-4">
										<label class="col-form-label">Subject</label>
										<div>
											<input class="form-control" type="text" name="subj" value="<?php echo $subj;?>">
										</div>
									</div>
									<div class="form-group col-4">
										<label class="col-form-label">Category</label>
										<div>
											<input class="form-control" type="text" name="ctgry" value="<?php echo $ctgry;?>">										
										</div>
									</div>									
									<div class="seperator"></div>
									
									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>2. Description</h3>
										</div>
									</div>
									<div class="form-group col-12">
										<label class="col-form-label">About</label>
										<div>
											<textarea name="descp" rows="3" class="form-control"><?php echo $descp;?></textarea>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Upload</label>
										<div>
											<input class="form-control" type="file" name="file">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Date</label>
										<div>
											<input class="form-control" type="date" name="date" value="<?php echo $date;?>">
										</div>
									</div>									

									<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
									<div class="col-12">
										<button type="submit" class="btn pull-right">Submit</button>
										<button type="reset" class="btn-secondry pull-right">Cancel</button>
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