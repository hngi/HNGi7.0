<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>sponsors Page</title>

    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" href="css/dashboard.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style type="text/css">
        .card {
            height: 150px;
            background: #ccc;
            margin: 15px;
            padding: 10px;
            border-radius: 15px;

        }
        .col-md-2 {
            height: 40px;
        }
        .col-md-8 {
            height: 1px;
            padding: 0;
            margin: 0;
        }
    </style>


</head>

<body>
<main class="reg">
    <?php
    if ($_SESSION["role"] != 1) {
        echo '<h2><br><br><br>Sorry, You do not have the priviledge to view this page</p>';
        echo '<h3><a href="dashboard.php">Dashboard</a></h3>';
        exit();
    }
    ?>
    <section id="overview-section">
        <h1>Sponsors Overview</h1>
        <div class="register-container">
            <div class="row">

                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            else {
                ?>

                <div class="col-md-8"></div>

            </div>
            <br /><br />
            <div class="row" id="table-row">
                <div class="table-responsive" id="printablediv">
                    <table class="table table-hover mt-3 mb-1 table-condensed">
                        <thead class="table-primary">
                        <tr>
                            <th>Names</th>
                            <th>image</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        //echo $display;
                           // var_dump($display);
                            $n = 0;

                            do {
                                echo "The item is: $n <br>";
                                $n++;
                            } while ($n++);
                                ?>
                                <tr>
                                    <td><?php echo ++$n;?></td>
                                    <td>
                                        <?php echo $item['sponsors-name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $item['sponsors-img']; ?>
                                    </td>

                                    <td>
                                        <?php echo $item['status'] == 1 ? "Approved" : "Pending"; ?>
                                    </td>
                                    <td>
                                        <a href="edit_experience?id=<?php echo $item['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                                        <a href="?action=delete&id=<?php echo $item['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete the record?')">Delete</a>
                                        <?php
                                            if($item['status'] == 0){
                                                ?>
                                                <a onclick="return confirm('Are you sure you want to approve the experience?')" href="?action=approve&id=<?php echo $item['id']; ?>" class="btn btn-sm btn-info">Approve</a>
                                                <?php
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
                
                
                

            </div>
        </div>
        <br /><br />
        <!-- <button id="export">Export to Spreadsheet</button> -->

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