<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_USER_ID'];
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
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg1">	
						<div class="wc-item">
							<h4 class="wc-title">
								Student 
							</h4>
							<span class="wc-des">
								All Student
							</span>
							<span class="wc-stats">
                            	<span class="counter">
									<?php
                                        $result = $db->prepare("select count(*) from user");
                                        $result->execute();
                                        for($i=0; $row = $result->fetch(); $i++)
                                        {
                                            echo"".$row['count(*)']."";
                                        }
                                    ?>
								</span>
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									78%
								</span>
							</span>
						</div>	
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg2">
						<div class="wc-item">
							<h4 class="wc-title">
								Material
							</h4>
							<span class="wc-des">
								All Material
							</span>
							<span class="wc-stats counter">
								<span class="counter">
									<?php
                                        $result = $db->prepare("select count(*) from user_post");
                                        $result->execute();
                                        for($i=0; $row = $result->fetch(); $i++)
                                        {
                                            echo"".$row['count(*)']."";
                                        }
                                    ?>
								</span>
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									88%
								</span>
							</span>
						</div>	
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg3">		
						<div class="wc-item">
							<h4 class="wc-title">
								Feedback
							</h4>
							<span class="wc-des">
								All Feedback
							</span>
							<span class="wc-stats counter">
								<span class="counter">
									<?php
                                        $result = $db->prepare("select count(*) from feedback");
                                        $result->execute();
                                        for($i=0; $row = $result->fetch(); $i++)
                                        {
                                            echo"".$row['count(*)']."";
                                        }
                                    ?>
								</span> 
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									65%
								</span>
							</span>
						</div>	
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4">
						<div class="wc-item">
							<h4 class="wc-title">
								Contest 
							</h4>
							<span class="wc-des">
								All Contest
							</span>
							<span class="wc-stats counter">
								<span class="counter">
									<?php
                                        $result = $db->prepare("select count(*) from contest");
                                        $result->execute();
                                        for($i=0; $row = $result->fetch(); $i++)
                                        {
                                            echo"".$row['count(*)']."";
                                        }
                                    ?>
								</span>
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									90%
								</span>
							</span>
						</div>				      
					</div>                    
				</div>
			</div>
			<!-- Card END -->
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-8 m-b30">
					<!-- Start -->
                        <?php
                        $result = $db->prepare("select * from contestattend where status='win'");
                        $result->execute();
                        $row_count =  $result->rowcount();
                        for($i=0; $rows = $result->fetch(); $i++)
                        {
							$cnt_id = $rows['cnt_id'];
							?>
						<div class="widget-inner">
							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
									<img src="../post/<?php echo $rows['photo'];?>" alt=""/>
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4><?php echo $rows['sname'];?></h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="card-courses-user-pic">
													<img src="../post/<?php echo $rows['photo'];?>" alt=""/>
												</div>
												<div class="card-courses-user-info">
													<h5>Post</h5>
													<h4><?php echo $rows['sname'];?></h4>
												</div>
											</li>
                                            <li class="card-courses-categories">
												<h5>Mark</h5>
												<h4><?php echo $rows['mrk'];?></h4>
											</li>
                                            <li class="card-courses-categories">
												<h5>Date</h5>
												<h4><?php echo $rows['date'];?></h4>
											</li>																													
										</ul>
									</div>
									<div class="row card-courses-dec">	
                                    	<div class="col-md-12">
											
										</div>   
                                        <div class="col-md-4">
                                        	<a href="" class="btn green radius-xl outline pull-left" style="width:160px;"><span class="fa fa-anchor"> Completed</span></a>
										</div>                                        
									</div>
								</div>
							</div>
							
						</div>
                        <?php }?>
                        <!-- End -->
                        <!-- End -->
				</div>
				<!-- Your Profile Views Chart END-->
				<div class="col-lg-4 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Notification</h4>
						</div>
						<div class="widget-inner">
							<div class="noti-box-list">
								<ul>
									<?php
									$result = $db->prepare("select * from notification limit 5");
									$result->execute();
									for($i=0; $rows = $result->fetch(); $i++)
									{
										?>
									<li>
										<span class="notification-icon dashbg-green">
											<i class="fa fa-comments-o"></i>
										</span>
										<span class="notification-text">
											<a href="#"><?php echo $rows['subjct'];?></a> 
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> <?php echo $rows['date'];?></span>
										</span>
									</li>
									<?php }?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-12 m-b30">
					
				</div>
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>
<?php include("include/js.php");?>
</body>
</html>