<?php
require 'classControllers/init.php';
// check if session is set
if(!isset($_SESSION["role"])) {
	header('Location:login.php'); 
}

if(!isset($_GET['id'])){
    header("location:dashboard.php");
    exit();
}

$msg_id = $_GET['id'];

$inbox = new inboxclass();
$admin_id = $_SESSION['admin_id'];
$message = $inbox->view_message("$msg_id","$admin_id");

if(!is_array($message)){
    header("location:dashboard.php");
    //var_dump($message);
    exit();
}

$receiver_id =  $message['receiver_id'];

if($receiver_id == $admin_id){
    $inbox->update_msg_status($msg_id); //If the admin viewing is the reciver the status will update
}


//var_dump($sent_messages);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Outbox - Message</title>
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
	</style>

</head>
<body>
	<main>
		<section id="overview-section">
			<h1>View Message - <?php echo $message['subject'];?></h1>

            <hr>

			<div class="container-fluid">
				<div class="row">
                    <div class="col-md-12">
                        <?php
                            if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }

                        ?>

                        <h4>
                            Sender id:
                            <?php
                                echo $inbox->fetch_admin_details($message['sender_id'])['admin_name'];
                            ?>
                        </h4>

                        <h4>
                            Receiver id:
                            <?php
                            echo $inbox->fetch_admin_details($message['receiver_id'])['admin_name'];
                            ?>
                        </h4>

                        <h4>
                            Sent on:
                            <?php
                            echo date("F d Y, h:i a", strtotime($message['date_sent']));
                            ?>
                        </h4>

                        <?php
                            if($message['receiver_id'] == $admin_id){
                                ?>
                                <h4>
                                    Message Status:
                                    <?php
                                    echo $message['status'];
                                    ?>
                                </h4>
                                <?php
                            }
                        ?>


                        <h3 class="page-header">Message</h3>

                        <div class="well">
                            <?php
                                echo nl2br($message['message']);
                            ?>
                        </div>


                        <?php
                        if($message['receiver_id'] == $admin_id){
                            ?>
                            <a href="admin_inbox.php?receiver_id=<?php echo $message['sender_id']; ?>&subject=RE: <?php echo $message['subject']; ?>" class="btn btn-primary">Reply Message</a>
                            <?php
                        }I
                        ?>
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