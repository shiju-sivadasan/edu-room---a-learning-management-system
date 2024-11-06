<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_CORDINATOR_ID'];
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
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Search Post</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" method="post" action="post_search.php" autocomplete="off">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>Search</h3>
										</div>
									</div>
									<div class="form-group col-4">
										<div>
											<input list="ptype" required class="form-control" name="ptype" placeholder="Name">
                                            <datalist id="ptype">
                                                <option value="">Select</option> 
                                                 <?php
                                                    $result = $db->prepare("select distinct ptype from user_post where Log_Id='$Log_Id'");
                                                    $result->execute();
                                                    for($i=0; $rows = $result->fetch(); $i++)
                                                    {
                                                    echo '<option>'.$rows['ptype'].'</option>';
                                                    }
                                                ?>	                                         					
                                            </datalist>
										</div>
                                        <br>
                                        <button type="submit" class="btn pull-right">Submit</button>
									</div>                                   								
																																
								</div>
							</form>
						</div>
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