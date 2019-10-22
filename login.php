<?php
/**
 * Created by PhpStorm.
 * User: Hollyphat
 * Date: 10/17/2019
 * Time: 9:12 AM
 */

session_start();
if(isset($_GET['act']) && ($_GET['act'] == "logout")){
    unset($_SESSION['hng-admin']);
    header("location:login.php");
}

require 'classControllers/init.php';
$admin = new AdminClass();


if(isset($_POST['login'])){
    $email = $database->escape_string($_POST["email"]);
    $password = $database->escape_string($_POST["password"]);

    if($admin->login("$email","$password")){
        $admin_info = $admin->getAdminDetails($email);
        $_SESSION['hng-admin'] = $admin_info; //Set session for logged user
        header("location:test_home.php"); //redirect to test home
    }else{
        $_SESSION['err_msg'] = "<div class='alert alert-danger'>Invalid login details!</div>"; //Set error message
    }


}
?>
<!DOCTYPE html>
<html>
<head>
    <title>HNG i7</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">HngI7</a>
    </div>

    </div><!-- /.navbar-collapse -->
</nav>


<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-success">
                    <div class="panel-heading">Account Login</div>
                    <div class="panel-body">
                        <form action="" method="post">
                            <?php
                            if(isset($_SESSION['err_msg'])) {
                                echo $_SESSION['err_msg'];
                                unset($_SESSION['err_msg']);
                            }
                            ?>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" required placeholder="Email Address" value="<?php echo @$_POST['email'];?>">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" required class="form-control" id="password" placeholder="Password">
                            </div>


                            <div class="form-group">
                                <input type="submit" name="login" class="btn btn-success" value="Login">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
