<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_ADMIN_ID'];
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
					<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>All Exam</li>
				</ul>
			</div>	
			<!-- Card -->
			<div class="row">
				<!-- Your Profile Views Chart -->
				<!-- Your Profile Views Chart -->
				<div class="col-12">
					<div class="widget-box">
                    	
						<table class="table table-bordered table-striped">
                           <thead>
                            <tr>
                             <th>#</th>    
                             <th>Subject</th>                            
                             <th>Question</th>
                             <th>Option A</th>
                             <th>Option B</th>
                             <th>Option C</th>
                             <th>Option D</th>
                             <th>Answer</th>
                             <th>Mark</th>
                           </tr>
                          </thead>
                          <?php
                                $result = $db->prepare("select * from contest where Log_Id='$Log_Id'");
                                $result->execute();
                                for($i=1; $row = $result->fetch(); $i++)
                                {
                                echo"<tr>";
                                    echo"<td>".$i."</td>";
									echo"<td>".$row["sname"]."</td>";
                                    echo"<td>".$row["qstn"]."</td>";
                                    echo"<td>".$row["opta"]."</td>";	
                                    echo"<td>".$row["optb"]."</td>";    
									echo"<td>".$row["optc"]."</td>";    
									echo"<td>".$row["optd"]."</td>";    
									echo"<td>".$row["answr"]."</td>";    
									echo"<td>".$row["mrk"]."</td>";                                     								                           																				
                               echo"</tr>";
                               }						
                        ?>		
                          <tbody>	                            
                        </tbody>
                      </table>
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