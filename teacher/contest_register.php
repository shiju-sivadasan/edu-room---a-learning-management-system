<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_TEACHER_ID'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("include/css.php");?>	
     <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>

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
							<h4>Contest Register</h4>
						</div>
						<div class="widget-inner">
		<form class="edit-profile m-b30" method="post" autocomplete="off" action="action/contest_register.php" enctype="multipart/form-data">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Contest Details</h3>
										</div>
									</div>
									<div class="form-group col-4">
										<label class="col-form-label">Subject</label>
										<div>
                                        	<input list="name" required class="form-control" name="sname" placeholder="Select">
                                            <datalist id="name">
                                                <option value="">Select</option> 
                                                 <?php
                                                    $result = $db->prepare("select distinct sname from contest");
                                                    $result->execute();
                                                    for($i=0; $rows = $result->fetch(); $i++)
                                                    {
                                                    echo '<option>'.$rows['sname'].'</option>';
                                                    }
                                                ?>	                                         					
                                            </datalist>
										</div>
									</div>                                   
                                    <div class="form-group col-4">
										<label class="col-form-label">Photo</label>
										<div>
											<input class="form-control" type="file" name="photo" required>
										</div>
									</div>		
                                     <div class="form-group col-4">
										<label class="col-form-label">Date</label>
										<div>
											<input class="form-control" type="date" name="date" required min="<?php echo date("Y-m-d");?>">
										</div>
									</div>															
									<div class="seperator"></div>
                                    <div class="form-group col-10">
										<label class="col-form-label">Question</label>
										<div>
											<input class="form-control" type="text" name="qstn" required>
										</div>
									</div>	
                                     <div class="form-group col-2">
										<label class="col-form-label">Question No</label>
										<div>
                                        	<input list="qno" required class="form-control" name="qno" placeholder="Select">
                                            <datalist id="qno">
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>                                                                                                                             					
                                            </datalist>                                          	
										</div>
									</div>	
                                    <div class="form-group col-6">
										<label class="col-form-label">Option A</label>
										<div>
											<input class="form-control" type="text" name="opta" required>
										</div>
									</div>	
                                    <div class="form-group col-6">
										<label class="col-form-label">Option B</label>
										<div>
											<input class="form-control" type="text" name="optb" required>
										</div>
									</div>	
                                    <div class="form-group col-6">
										<label class="col-form-label">Option C</label>
										<div>
											<input class="form-control" type="text" name="optc" required>
										</div>
									</div>	
                                    <div class="form-group col-6">
										<label class="col-form-label">Option D</label>
										<div>
											<input class="form-control" type="text" name="optd" required>
										</div>
									</div>	
                                    <div class="form-group col-6">
										<label class="col-form-label">Answer</label>
										<div>
											<input class="form-control" type="text" name="answr" required>
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Mark</label>
										<div>
											<input class="form-control" type="number" name="mrk" required min="0" step="0.01">
										</div>
									</div>
                                    <div class="seperator"></div>
																																			
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