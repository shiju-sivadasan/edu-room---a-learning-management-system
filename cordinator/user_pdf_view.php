<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_CORDINATOR_ID'];
	$result = $db->prepare("select * from user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$depart=$row["depart"];	
	}
	$name=$_GET['name'];	
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
							<h4>Voice Post List</h4>
						</div>
                        <!-- Start -->
                        <?php
                        $result = $db->prepare("select * from user_post where status='Accept' and Log_Id!='$Log_Id' and cname like'%".$name."%' and ptype='Pdf' and depart='$depart' order by ptype asc");
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
										<h4><?php echo $rows['ptype']." ".$rows['cname'];?></h4>
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
                                            <li class="card-courses-categories">
												<h5>Date</h5>
												<h4><?php echo $rows['date'];?></h4>
											</li>
                                             <li class="card-courses-categories">
											 <a href="../post/<?php echo $rows['file'];?>" download class="pull-right btn btn-danger">Download</a>									
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">	
                                    	<div class="col-md-12">
											<iframe src="../post/<?php echo $rows['file'];?>" style="width:100%; height:100px; border-radius:5px;">                                            </iframe>
										</div>									                                       
                                        <div class="col-md-3">
											<a href="tel:091<?php echo $rows['cntno'];?>" class="btn red radius-xl outline pull-right" style="width:160px;">Call</a>
										</div>	
                                         <div class="col-md-3">
											<a href="user_chat.php<?php echo '?chname='.$rows['name'];?>" class="btn info radius-xl outline pull-right" style="width:160px;">Chat</a>
										</div>
                                        <div class="col-md-3">
											<a href="#" class="btn yellow radius-xl outline pull-right" style="width:160px;"><span class="fa fa-hand-o-right"> Like</span></a>
										</div>	
                                        <div class="col-md-3">
											<a href="user_pdf_comment.php<?php echo '?pst_id='.$rows['pst_id'];?>" class="btn green radius-xl outline pull-right" style="width:160px;">Comment</a>
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
