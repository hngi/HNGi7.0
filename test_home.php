<?php
/**
 * Created by PhpStorm.
 * User: Hollyphat
 * Date: 10/17/2019
 * Time: 9:23 AM
 */


session_start();

if(!isset($_SESSION['hng-admin'])){
$_SESSION['err_msg'] = "<div class='alert alert-danger'>Please login first!</div>";
header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>HNG I7</title>
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
        <a class="navbar-brand" href="index.php">HNG I7</a>
    </div>

    </div><!-- /.navbar-collapse -->
</nav>


<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading">Welcome</div>
                    <div class="panel-body">
                        <?php
                        if(isset($_SESSION['err_msg'])) {
                            echo $_SESSION['err_msg'];
                            unset($_SESSION['err_msg']);
                        }
                        ?>
                        <h3>
                            Welcome <?php echo $_SESSION['hng-admin']['firstname'];?>
                        </h3>

                        <h4>Admin Details</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($_SESSION['hng-admin'] as $key=>$value){
                                    ?>
                                    <tr>
                                        <td><?php echo ucfirst($key)?></td>
                                        <td><?php echo ucfirst($value);?></td>
                                    </tr>
                                    <?php
                                }
                            ?>
                            </tbody>
                        </table>
                        <p>
                            <a href="login.php?act=logout" class="btn btn-danger">Logout</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

