<?php
	include("auth.php");
  	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_CORDINATOR_ID'];
  	$result = $db->prepare("select * from  user where Log_Id = '$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$mdcpatid=$row["Log_Id"];
			$name=$row["name"];
			$photo1=$row["photo"];
		}
	
	$hname=$_GET['chname'];
  	$resulth = $db->prepare("select * from  user_post where name='$hname'");
	$resulth->execute();
	for($i=0; $rowh = $resulth->fetch(); $i++)
		{						
			$hostid=$rowh["Log_Id"];
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
						<div class="col-md-6">
    	<div class="box box-info">         
              <!-- DIRECT CHAT -->
          <div class="box box-warning direct-chat direct-chat-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Direct Chat</h3>
              <div class="box-tools pull-right">
              	<span data-toggle="tooltip" title="Live Chat" class="badge bg-red">
              <a href="#" onclick="window.open('camera.php', 'Video Chat', 'width=500,height=500');">
                	<span class="fa fa-video-camera" style="color:white;"></span>
                </a>
                </span>                
              </div>
             
            </div>
            <!-- /.box-header -->
              <hr>
            <div class="box-body">
             
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages"  style="height:300px;overflow:auto;">
            
              <?php
                $result = $db->prepare("select * from chatm where receiver_id='$Log_Id'");
                $result->execute();
                for($i=1; $row = $result->fetch(); $i++)
                    {
                        if($row["chtsr_id"]=="$Log_Id")
                        {
                ?> 
                <div class="row alert alert-danger">
                	<span><?php echo ucfirst($row["rname"]);?></span><br>
                    <?php echo ucfirst($row["rmessage"]);?>             
             	</div>
                <?php
                        }
                       		if($row["sname"]!=="")
							{
                ?>
                <!-- Message to the right -->
                <div class="row alert alert-success">
                	<div class="col-12">
                    <span class="pull-right"><?php echo ucfirst($row["sname"]);?></span><br>
                    <span class="pull-right" style="padding-right:10%;"><?php echo ucfirst($row["smessage"]);?></span>
                    </div>
             	</div>
               
                <!-- /.direct-chat-msg -->
                 <?php
                        }
                    }
               ?> 
              </div>
              <!--/.direct-chat-messages-->
              <!-- /.direct-chat-pane -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <form action="action/dhat_message.php" method="post" autocomplete="off">
                <div class="input-group">
                  <input type="hidden" name="hname" value="<?php echo $hname;?>">
                  <input type="hidden" name="sender_id" value="<?php echo $hostid;?>">
                  <input type="hidden" name="receiver_id" value="<?php echo $mdcpatid;?>">
                  <input type="hidden" name="sname" value="<?php echo $name;?>">
                  <input type="hidden" name="sphoto" value="<?php echo $photo1;?>">
                  <input type="text" name="smessage" placeholder="Type Message ..." class="form-control">                     
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-warning btn-flat">Send</button>
                      </span>                      
                </div>
              </form>
            </div>
            <!-- /.box-footer-->
          </div>
          <!--/.direct-chat -->
            
          
        	
    	</div>
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
