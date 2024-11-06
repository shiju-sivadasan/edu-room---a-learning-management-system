<?php
	include("auth.php");
	include('../connect/db.php');
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
							<h4>Post List</h4>
						</div>
                        <!-- Start -->
                        <?php
                        $result = $db->prepare("select * from user_post order by ptype asc");
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
												<h5>Post</h5>
												<h4><?php echo $rows['cname'];?></h4>
											</li>
                                            <li class="card-courses-categories">
												<h5>Subject</h5>
												<h4><?php echo $rows['subj'];?></h4>
											</li>	
                                            <li class="card-courses-categories">
												<h5>Date</h5>
												<h4><?php echo $rows['date'];?></h4>
											</li>									
										</ul>
									</div>
									<div class="row card-courses-dec">	
                                    	<?php
											if($rows['ptype']=="Material")
											{
										?>
                                    	<div class="col-md-12">
											<p><?php echo $rows['descp'];?></p> 
										</div>
                                        <?php
											}
										?>   
                                        <?php
											if($rows['ptype']=="Video")
											{
										?>
                                    	<div class="col-md-12">
											<video controls  style="width:100%; height:150px; border-radius:5px;">
                                             <source src="../post/<?php echo $rows['file'];?>">
                                            </video>
										</div>
                                        <?php
											}
										?>  
                                        <?php
											if($rows['ptype']=="Voice")
											{
										?>
                                    	<div class="col-md-12">
											<audio controls  style="width:100%; height:150px; border-radius:5px;">
                                             <source src="../post/<?php echo $rows['file'];?>">
                                            </audio>
										</div>
                                        <?php
											}
										?>  
									</div>
                                    <div class="col-md-12">
                                    	<?php
											if($rows['status']=="Accept")
											{
										?>
				<a href="action/post_block.php<?php echo '?pst_id='.$pst_id;?>" class="btn red radius-xl outline pull-right">Block</a>
                						<?php
											}
											else
											{
										?>
				<a href="action/post_allow.php<?php echo '?pst_id='.$pst_id;?>" class="btn green radius-xl outline pull-right">Alow</a>                                        <?php
											}
										?>
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
