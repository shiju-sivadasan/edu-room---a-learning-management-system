<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_CORDINATOR_ID'];	
	
	$cname=$_GET['cname'];	
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
				<!-- Y<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4><?php echo $cname;?> Post List</h4>
						</div>
                        <!-- Start -->
                        <?php
                        $result = $db->prepare("select * from user_post where status='Accept' and Log_Id='$Log_Id' and cname='$cname'");
                        $result->execute();
                        $row_count =  $result->rowcount();
                        for($i=0; $rows = $result->fetch(); $i++)
                        {
							$pst_id = $rows['pst_id'];
							?>
						<div class="widget-inner">
							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
									<img src="../post/<?php echo $rows['photo'];?>" alt=""/>
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4><?php echo $rows['cname'];?></h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="card-courses-user-pic">
													<img src="../post/<?php echo $rows['photo'];?>" alt=""/>
												</div>
												<div class="card-courses-user-info">
													<h5>Post</h5>
													<h4><?php echo $rows['name'];?></h4>
												</div>
											</li>
                                            <li class="card-courses-categories">
												<h5>Gender</h5>
												<h4><?php echo $rows['sex'];?></h4>
											</li>
                                            <li class="card-courses-categories">
												<h5>Age</h5>
												<h4><?php echo $rows['age'];?></h4>
											</li>
											<li class="card-courses-categories">
												<h5>Contact</h5>
												<h4><?php echo $rows['cntno'];?></h4>
											</li>											
                                            <li class="card-courses-categories">
												<h5>Subject</h5>
												<h4><?php echo $rows['subj'];?></h4>
											</li>	                                           									
										</ul>
									</div>
									<div class="row card-courses-dec">	
                                    	<div class="col-md-6">
											<h6 class="m-b10">Category</h6>
                                         	 <p><?php echo $rows['ctgry'];?></p> 
										</div> 
                                        <div class="col-md-6">
											<h6 class="m-b10">Date</h6>
                                         	 <p><?php echo $rows['date'];?></p> 
										</div> 	
                                         <div class="col-md-6">
											<h6 class="m-b10">Description</h6>
                                         	 <p><?php echo $rows['descp'];?></p> 
										</div> 										
                                        <div class="col-md-2">
                                        <a href="../post/<?php echo $rows['file'];?>" download class="btn primary radius-xl outline pull-left">Download</a>
                                        </div> 
                                        <div class="col-md-2">
                                        <a href="search_update_view_edit.php<?php echo '?pst_id='.$rows['pst_id'];?>" class="btn yellow radius-xl outline pull-left">Update</a>
                                        </div>
                                        <div class="col-md-2">
                                        <a href="action/remove_post.php<?php echo '?pst_id='.$rows['pst_id'];?>" class="btn red radius-xl outline pull-left">Remove</a>
                                        </div> 									
                                        
									</div>
									
								</div>
							</div>
							
						</div>
                        <?php }?>
                        <!-- End -->
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
				
                
			</div>
			<!-- Card -->
		</div>
	</main>
	<div class="ttr-overlay"></div>
<?php include("include/js.php");?>
</body>
</html>
