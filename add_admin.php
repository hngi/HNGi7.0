<?php
session_start();
if(!isset($_SESSION['hng-admin'])){
    header("location:login.php");
    exit();
}
require 'classControllers/init.php';
$admin = new AdminClass();

$roles = $admin->getRoles();

$my_role = $_SESSION['hng-admin']['role'];

if($my_role != 1){
    //not a super admin
    $_SESSION['err_msg'] = "<div class='alert alert-warning'>This task is only available for a super admin!</div>";
    header("location:test_home.php");
    exit();
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
                    <div class="panel-heading">Add New Admin</div>
                    <div class="panel-body">
                            <?php
                            if(isset($_SESSION['err_msg'])) {
                                echo $_SESSION['err_msg'];
                                unset($_SESSION['err_msg']);
                            }
                            ?>
                            <form method="post" action="superadmin.php">
                                <div class="form-group">
                                    <label for="">First Name: </label>
                                    <input type="text" name="fname" id="fname" required class="form-control">
                                    <span class="fname-error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="">Last Name: </label>
                                    <input type="text" name="name" id="name" required class="form-control">
                                    <span class="name-error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="">Email: </label>
                                    <input type="email" name="email" id="email" required  class="form-control">
                                    <span class="email-error"></span>
                                </div>

                                <div class="form-group">
                                    <label for="">Password: </label>
                                    <input type="password" name="password" id="password" required  class="form-control">
                                    <span class="email-error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="">Role: </label>
                                    <select name="role" id="role" required class="form-control">
                                        <?php
                                            foreach ($roles as $role){
                                                ?>
                                                <option value="<?php echo $role['role_id']; ?>"><?php echo $role['role_name'];?><??></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                    <span class="role-error"></span>
                                </div>

                                <input type="submit" class="btn btn-success" id="submit" value="Add">


                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

