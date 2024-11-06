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
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("include/css.php");?>	
     <style type="text/css">
		#google_translate_element select
		{
		  background-color:#f6edfd;
		  color:#383ffa;
		  border: none;
		  border-radius:3px;
 		 padding:6px 8px
 	 }
	</style>
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
                    <li>
                   	 <div id='google_translate_element'></div>
                    </li>
				</ul>
			</div>	
			<!-- Card -->
			<div class="row">
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg1">	
                     <a href="user_material.php" style="color:white;">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Material 
							</h4>
							<span class="wc-des">
								All Material
							</span>
							<span class="wc-stats">
                            	<span class="counter">
									<?php
                                        $result = $db->prepare("select count(*) from user_post where ptype='Material' and Log_Id='$Log_Id'");
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
                        </a>			      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg2">
                       <a href="user_video.php" style="color:white;">						 
						<div class="wc-item">
							<h4 class="wc-title">
								Video
							</h4>
							<span class="wc-des">
								All Video
							</span>
							<span class="wc-stats counter">
								<span class="counter">
									<?php
                                        $result = $db->prepare("select count(*) from user_post where ptype='Video' and Log_Id='$Log_Id'");
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
                        </a>			      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg3">		
                       <a href="user_pdf.php" style="color:white;">				 
						<div class="wc-item">
							<h4 class="wc-title">
								pdf
							</h4>
							<span class="wc-des">
								All pdf							</span>
							<span class="wc-stats counter">
								<span class="counter">
									<?php
                                        $result = $db->prepare("select count(*) from user_post where ptype='Voice' and Log_Id='$Log_Id'");
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
                        </a>			      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4">
                       <a href="feedback_view.php" style="color:white;">						 
						<div class="wc-item">
							<h4 class="wc-title">
								Feedback 
							</h4>
							<span class="wc-des">
								Feedback
							</span>
							<span class="wc-stats counter">
								<span class="counter">
									<?php
                                        $result = $db->prepare("select count(*) from feedback where Log_Id='$Log_Id'");
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
                        </a>
					</div>                    
				</div>
			</div>
			<!-- Card END -->
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-8 m-b30">
					<!-- Start -->
                        <?php
                        $result = $db->prepare("select * from user_post where status='Accept' and Log_Id!='$Log_Id' and depart='$depart' order by ptype asc limit 1");
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
    <script>
		function googleTranslateElementInit() 
		{		
			new google.translate.TranslateElement({
			pageLanguage: 'en',
			autoDisplay: 'true',
			layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
			}, 'google_translate_element');
		}
	</script>
	<script src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>
<?php include("include/js.php");?>
</body>
</html>