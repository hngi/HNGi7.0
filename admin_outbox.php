<?php
require 'classControllers/init.php';
// check if session is set
if(!isset($_SESSION["role"])) {
	header('Location:login.php'); 
}


$inbox = new inboxclass();
$admin_id = $_SESSION['admin_id'];
$sent_messages = $inbox->outboxmessage($admin_id);

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
			<h1 class="heading">Sent Messages (Outbox)</h1>

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
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sn</th>
                                        <th>Subject</th>
                                        <th>Receiver</th>
                                        <th>Date Sent</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    if(array($sent_messages) && count($sent_messages) > 0){
                                        $sn = 0;
                                        foreach ($sent_messages as $sent_message){
                                            ?>
                                            <tr>
                                                <td><?php echo ++$sn;?></td>
                                                <td><?php echo $sent_message['subject'];?></td>
                                                <td><?php echo $sent_message['firstname'] ." ".$sent_message['lastname'];?></td>
                                                <td><?php echo date("F d Y, h:i a", strtotime($sent_message['date_sent']));?></td>
                                                <td>
                                                    <a href="view_message.php?id=<?php echo $sent_message['id']; ?>" class="btn btn-sm btn-success">View</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }else{
                                        ?>
                                        <tr>
                                            <td colspan="5">Outbox is empty</td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
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