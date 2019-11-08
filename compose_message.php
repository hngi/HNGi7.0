<?php
require 'classControllers/init.php';
// check if session is set
if(!isset($_SESSION["role"])) {
	header('Location:login.php'); 
}
$inbox = new inboxclass();
$all_admins = $inbox->fetch_all_admin();
$admin_id = $_SESSION['admin_id']; //id of logged admin
if(isset($_POST['ok'])){
  $receiver_id = $database->escape_string($_POST['receiver_id']);
  $subject = $database->escape_string($_POST['subject']);
  $message = $database->escape_string($_POST['message']);
  $inbox->savemessage($admin_id,$receiver_id,$subject,$message);

  $_SESSION['msg'] = "<div class='alert alert-success'>Message sent successfully</div>";
  //header("location:admin_inbox.php");
  //exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Message</title>
	<link rel="icon" type="img/png" href="images/hng-favicon.png">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="css/dashboard.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<style type="text/css">
		.card {
			height: 150px;
			background: #f3f3f3;
			margin: 15px;
			padding: 20px;
			border-radius: 8px;
			text-align: center;
			font-size: 20px;
			box-shadow: 1px 0 4px rgba(0,0,0,0.3);
			
		}

		.card p{
			font-weight: bolder;
			font-size: 35px;
  }
  
  @media (max-width: 400px) {
   .heading {
    margin-top: 50px !important;
    font-size: 18px !important;
   }
  }
	</style>

</head>
<body>
	<main>
		<section id="overview-section">
			<h1 class="heading">Send Message</h1>

            <hr>

			<div class="container">
				<div class="row">
                    <div class="col-md-8">
                        <?php
                            if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }

                        ?>
                        <form action="" method="post" role="form" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="">Message Receiver</label>
                                <select name="receiver_id" id="" class="form-control" required>
                                    <option value="">Select</option>
                                    <?php
                                        foreach ($all_admins as $all_admin){
                                            if($all_admin['admin_id'] == $admin_id)
                                                continue;
                                            ?>
                                            <option value="<?php echo $all_admin['admin_id'];?>" <?php if(@$_GET['receiver_id'] == $all_admin['admin_id']) echo "selected";?>><?php echo $all_admin['admin_name'];?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Message Subject</label>
                                <input type="text" name="subject" class="form-control input-lg" placeholder="Message Subject" required value="<?php echo @$_GET['subject'];?>">
                            </div>

                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea name="message" id="" class="form-control textarea" placeholder="Message"></textarea>
                            </div>



                            <div class="form-group">
                                <input type="submit" name="ok" class="btn btn-primary" value="Send Message">
                            </div>
                        </form>
                    </div>
				</div>
			</div>


		</section>
	</main>

	<input type="checkbox" id="mobile-bars-check" />
    <label for="mobile-bars-check" id="mobile-bars">
        <div class="stix" id="stik1"></div>
        <div class="stix" id="stik2"></div>
        <div class="stix" id="stik3"></div>
    </label>
	<?php include('fragments/sidebar.php'); ?>

</body>
</html>
<script  type="text/javascript" src="js/sidebar.js"></script>
<script type="text/javascript" src="js/dashboard.js"></script>