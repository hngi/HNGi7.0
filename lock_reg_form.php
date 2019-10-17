<?php
    include('backend/LockRegForm.php');
    $lockForm = new LockRegForm();
    $status = $lockForm->checkStatus();

    if($status == 1) {
        echo "<p>The form is OPen for Registration</p>";
    } else {
        echo "<p>Registration is closed</p>";
    }

    if(isset($_POST["save"])) {
        $status = $_POST['status'];
        if($status == "open") {
            $sval = 1;
        } else {
            $sval = 0;
        }
        
        $lockForm->setStatus($sval);
    }

?>

<html>
    <head>
        <title>Lock Registration Form</title>
    </head>
    <body>
        <form method="post">
            <label for="open">Open</label> <input type="radio" name="status" value="open" id="open" 
                <?php
                    if($status == 1) {
                        ?> checked <?php
                    }
                ?>
            /> 

            <br>
            <label for="closed">Close</label> <input type="radio" name="status" value="close" id="closed"
                <?php
                    if($status == 0) {
                        ?> checked <?php
                    }
                ?>
            />

            <p>
                <button type="submit" name="save">Save</button>
            </p>
        </form>
    </body>
</html>