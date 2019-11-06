<?php
require 'classControllers/init.php';
// check if session is set
if(!isset($_SESSION["role"])) {
	header('Location:login.php'); 
}


if(isset($_POST['ok'])){

    $subscriber = new Subscribers();
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $subscription_lists = $subscriber->fetch_list();

    $email_lists = array();

    foreach ($subscription_lists as $subscription_list){
        $email_lists[] = $subscription_list['email'];
    }

    send_general_email("$subject","no-reply@hng.tech",$message,$email_lists);

    $_SESSION['msg'] = "<div class='alert alert-info'>New update sent successfully!</div>";
    header("location:news_update.php");
    exit();
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>News Update</title>
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
			<h1>Send News Update</h1>

			<div class="container">
				<div class="row">
                    <div class="col-md-8">
                        <?php
                            if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                        ?>
                        <form action="" method="post" role="form">
                            <div class="form-group">
                                <label for="">Message Subject</label>
                                <input type="text" name="subject" class="form-control input-lg" placeholder="Message Subject" required>
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

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'.textarea'});</script>
</body>
</html>
<script  type="text/javascript" src="js/sidebar.js"></script>
<script type="text/javascript" src="js/dashboard.js"></script>