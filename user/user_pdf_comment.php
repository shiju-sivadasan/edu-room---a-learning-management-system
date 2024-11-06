<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_USER_ID'];
	$pst_id=$_GET['pst_id'];	
	$result = $db->prepare("select * from user_post where pst_id='$pst_id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row["name"];	
		$sex=$row["sex"];
		$photo=$row["photo"];	
		$cname=$row["cname"];
		$cmntid=$row["cmntid"];	
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
				<!-- Y<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Comments</h4>
						</div>
                        <!-- Start --> 
                       <?php
					   
					   	$qryusr= $db->prepare("select * from user_cmnt where cmntid='$cmntid' and Log_Id='$Log_Id'");
						$qryusr->execute();
						$countusr = $qryusr->rowcount();
						if($countusr > 0) 
						{
						}
						else
						{	
					   ?>
						<?php
							$result = $db->prepare("select * from user_post  where cmntid='$cmntid' and Log_Id!='$Log_Id'");
							$result->execute();
							for($i=0; $rows = $result->fetch(); $i++)
							{		
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
														<h5>Name</h5>
														<h4><?php echo $rows['name'];?></h4>
													</div>
												</li>                                            																			
											</ul>
										</div>
										<div class="row card-courses-dec">	                                    	
											 <div class="col-md-12">
											 <form method="post" action="action/post_cmntvc.php" >
												<label>Comment</label>
												<input type="hidden" name="pst_id" value="<?php echo $pst_id;?>">
												<input type="hidden" name="name" value="<?php echo $rows['name'];?>">
												<input type="hidden" name="sex" value="<?php echo $rows['sex'];?>">
												<input type="hidden" name="photo" value="<?php echo $rows['photo'];?>">
												<input type="hidden" name="cname" value="<?php echo $rows['cname'];?>">
												<input type="hidden" name="cmntid" value="<?php echo $rows['cmntid'];?>">
												<textarea class="form-control" name="descp" style="width:600px; height:60px; border:1px solid red;" required></textarea>                                                                                        
												<input type="submit" class="btn pull-right" value="Submit">
											 </form>
											
											</div> 										                                                                               								                                        
										</div>
										
									</div>
								</div>
								
							</div>                        
						<?php 
							}	
						?>				
						<?php
                        }
                        ?>            
                        <!-- End -->
                        <?php
                        $result = $db->prepare("select * from user_cmnt where cmntid='$cmntid' order by date asc");
                        $result->execute();
                        $row_count =  $result->rowcount();
                        for($i=0; $rows = $result->fetch(); $i++)
                        {
							$cmnt_id = $rows['cmnt_id'];
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
													<h5>Name</h5>
													<h4><?php echo $rows['name'];?></h4>
												</div>
											</li>
                                            <li class="card-courses-categories">
												<h5>Gender</h5>
												<h4><?php echo $rows['sex'];?></h4>
											</li>
                                            <li class="card-courses-categories">
												<h5>Date</h5>
												<h4><?php echo $rows['date'];?></h4>
											</li>
																			
										</ul>
									</div>
									<div class="row card-courses-dec">	                                    	
                                         <div class="col-md-12">
											<h6 class="m-b10">Comment</h6>
                                         	 <p><?php echo $rows['descp'];?></p> 
										</div> 										                                                                               								                                        
									</div>
									
								</div>
							</div>
							
						</div>
                        <?php }?>
                        <a href=""
                        <!-- End -->
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
				<div class="col-md-12">
                    <a href="user_pdf_view.php<?php echo '?name='.$cname;?>" class="btn red radius-xl outline pull-right" style="width:160px;">Back</a>
                </div> 
                
			</div>
			<!-- Card -->
		</div>
	</main>
	<div class="ttr-overlay"></div>
<?php include("include/js.php");?>
</body>
</html>
