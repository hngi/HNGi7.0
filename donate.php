<?php
    require_once "classControllers/init.php";

    $donation = new Donation();

    if(isset($_POST['pay'])){
        $name = $database->escape_string($_POST['name']);
        $phone = $database->escape_string($_POST['phone']);
        $email = $database->escape_string($_POST['email']);
        $amount = $database->escape_string($_POST['amount']);

        $ref = $donation->pay("$amount","$name","$phone","$email");

        $url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/verify_pay.php";


        $curl = curl_init();

        $customer_email = $email;
//$amount = $amount;
//$currency = "USD";
        $txref = $ref; // ensure you generate unique references per transaction.
        $PBFPubKey = "FLWPUBK_TEST-2c7dd09d63d44deae5cbf3e9728aa289-X"; // get your public key from the dashboard.
        $redirect_url = $url;
//$payment_plan = "pass the plan id"; // this is only required for recurring payments.


        curl_setopt_array($curl, array(
            CURLOPT_URL => LIVE_POINT,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode(
                array(
                    'amount'=>$amount,
                    'customer_email'=>$customer_email,
                    'currency'=> "NGN",
                    'txref'=>$txref,
                    'PBFPubKey'=>$PBFPubKey,
                    'redirect_url'=>$redirect_url
                    //'payment_plan'=>$payment_plan
                )
            ),
            CURLOPT_HTTPHEADER =>
                array(
                    "content-type: application/json",
                    "cache-control: no-cache"
                ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        if($err){
            // there was an error contacting the rave API
            die('Curl returned error: ' . $err);
        }

        $transaction = json_decode($response);

        if(!$transaction->data && !$transaction->data->link){
            // there was an error from the API
            print_r('API returned error: ' . $transaction->message);
        }

// uncomment out this line if you want to redirect the user to the payment page
//print_r($transaction->data->message);


// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
        header('Location: ' . $transaction->data->link);

        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Donate</title>
    <link rel="icon" type="img/png" href="images/hng-favicon.png" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="css/header-footer.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/donate.css" />
    <link rel="icon" type="img/png" href="images/hng-favicon.png">

    <style>
    .jumbo {
      background-color: #d1f0f6;
      padding-bottom: 20px;    
    }
    .hero-cont a.button-primary{
      margin-bottom: 10px !important;
    }
    </style>
  </head>

  <body>

  <div style="background-color: #D1F0F6 !important;"><?php include('fragments/site_header.php'); ?></div>

  <section class="container-fluid1" >
  <!-- <div class="body-container"> -->
    <div class="hero-cont">
      <h2 class="title">Donate to HNG</h2>
      <p class="desc">
        Your donations go towards providing adequate resources, such as
        electricity, internet, laptops and tutorials to interns who don't have
        access to them. They keep the internship going and help us keep
        finding and nurturing talent.
      </p>
      <a href="#form" class="button-primary">Donate</a>
      <a href="newsponsor" class="button-primary">Register as Sponsor(Brand)</a>

    </div>

    <section class="whatwe">
      <figure>
        <img src="https://bit.ly/2Vug2Vf" alt="Computer" />
      </figure>
      <div class="text">
        <h3 class="title">What we use it for</h3>
        <p class="desc">
          Among the several ways we improve interns lives with your help, these
          are some of the major ways your donations are used
        </p>
        <ul class="list">
          <li>Laptops</li>
          <li>Internet Subscriptions</li>
          <li>Prizes</li>
          <li>Meetups</li>
        </ul>
        <a href="#form" class="button-primary">Donate</a>
      </div>
    </section>

    <section class="banner">
      <h3 class="title">Your Donations Help</h3>
      <p class="desc">
        During HNGi6.0, we raised a total of ₦2,000,000 naira in total. With
        your help, we can raise even more.
      </p>
      <a href="#form" class="button-primary">Donate</a>
    </section>

    <section class="women">
      <figure>
        <img src="https://res.cloudinary.com/cloud-y/image/upload/v1572988274/images_cq2tcg.jpg" alt="Computer" />
      </figure>
      <div class="text">
        <h3 class="title">Donate to specific groups</h3>
        <p class="desc">
          You can also donate specifically to groups with special needs or
          groups that are underrepresented in the tech space like:
        </p>
        <ul class="list">
          <li>Women</li>
          <li>People with disabilities</li>
        </ul>
        <a href="#form" class="button-primary">Donate</a>
      </div>
    </section>

    <section class="banner form" id="form">
      <h3 class="title">Donate Today</h3>
       <form action="" id="actualForm" method="post">
        <input
          type="text"
          name="name"
          placeholder="Enter Name"
          required
        />
        <input
          type="email"
          name="email"
          placeholder="Enter Email address"
          required
        />
        <input
          type="tel"
          name="phone"
          placeholder="Enter Phone number"
        />
        <input
          type="number"
          name="amount"
          placeholder="Donation amount"
          required
        />
        
        <input type="submit" name="pay" value="1" /> <br>
        <form>
          <!--<script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
          <button onClick="payWithRave()" class="transparent-btn" style="background-color: transparent; color:#007bff; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;">Donate via Flutter</button>-->
        </form>
        <a href="newsponsor">Register as Sponsor(Brand)</a>
       
      </form>
    </section>

    <div class="banner form" id="supportForm">
      <h3 class="title">Support via software or tool</h3>
      <p class="desc">
        Give anything you have that can make an intern's journey easier
      </p>
      <form action="" id="actualSupportForm" method="post">
        <input
          type="text"
          name="amount"
          placeholder="How much do you want to donate"
          required
        />
        <input
          type="text"
          name="name"
          placeholder="Enter Name"
          required
        />
        <input
          type="email"
          name="email"
          placeholder="Enter Email address"
          required
        />
        <input
          type="number"
          name="phone"
          placeholder="Enter Phone number"
        />
          
        <input type="submit" name="pay" />
      </form>
      
    </div>

    <!-- Delete this when form submission is set up -->
    <script>
      let form = document.querySelector('#actualForm');
      form.addEventListener('submit', e => {
        e.preventDefault();

        //alert("Thanks, but donations aren't working yet");
      });
      let SupportForm = document.querySelector('#actualSupportForm');
      SupportForm.addEventListener('submit', e => {
        e.preventDefault();

        //alert("Thanks, but donations aren't working yet");
      });
    </script>

     <!-- </div> -->
    </section>     
    <?php include "fragments/site_footer.php" ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <?php include('fragments/chat.php'); ?>
  </body>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/countdown.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" crossorigin="anonymous"></script>    <script src="./js/scroll-to-top.js"></script> 

    <!-- rave payment -->
    <script>
    const API_publicKey = "FLWPUBK_TEST-2c7dd09d63d44deae5cbf3e9728aa289-X";

    function payWithRave() {
        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: "user@example.com",
            amount: 2000,
            customer_phone: "234099940409",
            currency: "NGN",
            txref: "rave-123456",
            meta: [{
                metaname: "flightID",
                metavalue: "AP1234"
            }],
            onclose: function() {},
            callback: function(response) {
                var txref = response.tx.txRef; // collect txRef returned and pass to a          server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if (
                    response.tx.chargeResponseCode == "00" ||
                    response.tx.chargeResponseCode == "0"
                ) {
                    // redirect to a success page
                } else {
                    // redirect to a failure page.
                }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
    }
</script>

</html>
