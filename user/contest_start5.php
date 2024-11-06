<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_USER_ID'];
	$sname=$_GET["sname"];
	$result = $db->prepare("select * from contest where sname='$sname' and qno='5'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$qno=$row["qno"];
		$sname=$row["sname"];
		$qstn=$row["qstn"];
		$opta=$row["opta"];
		$optb=$row["optb"];
		$optc=$row["optc"];
		$optd=$row["optd"];
		$answr=$row["answr"];
		$mrk=$row["mrk"];
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
			            
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-8 m-b30">
					<!-- Start -->                       
						<div class="widget-inner">
							<div class="card-courses-list admin-courses">
								
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4><?php echo $sname;?> Contest Exam</h4>
                                        <hr>
									</div>
									<div class="card-courses-list-bx">
										<h4>5. <?php echo $qstn;?> </h4>
                                        <form method="get" action="action/contest_start5.php">
                                            <div class="row">
                                                <div class="col-6">
                                                	<input type="hidden" value="<?php echo $qno;?>" name="qno">
                                                    <input type="hidden" value="<?php echo $sname;?>" name="sname">
                                                    <input type="hidden" value="<?php echo $qstn;?>" name="qstn">
                                                    <input type="hidden" value="<?php echo $answr;?>" name="answr">
                                                    <input type="hidden" value="<?php echo $mrk;?>" name="mrk">
                                                    
                                                    <input type="radio" name="qst" value="<?php echo $opta;?>"><b> <?php echo $opta;?></b>   
                                                </div>
                                                <div class="col-6">
                                                     <input type="radio" name="qst" value="<?php echo $optb;?>"><b> <?php echo $optb;?></b>  
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="qst" value="<?php echo $optc;?>"><b> <?php echo $optc;?></b>   
                                                </div>
                                                <div class="col-6">
                                                     <input type="radio" name="qst" value="<?php echo $optd;?>"><b> <?php echo $optd;?></b>  
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-12">
                                                   <input type="submit" value="Next" class="pull-right btn">
                                                </div>
                                            </div>
                                        </form>
									</div>	                                   
								</div>
							</div>
							
						</div>
                        <!-- End -->
                        <!-- End -->
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