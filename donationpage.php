<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Donation Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/donation.css">
  <link rel="icon" type="img/png" href="images/hng-favicon.png">
  <script>
    function myFunction() {
       alert("We still have enough money, Please keep the money for now.");
    }
  </script>
</head>

<body>

        <a href="index.html"><img id="hng-logo"
                src="https://res.cloudinary.com/phiileo/image/upload/v1571147073/brand-logo_tx0mdt.png"></a>

<!-- 
  <div class="row">
    <div class="col-5"></div>
    <div class="col-2 top-image">
      <img src="images/hng-favicon.png">
    </div>
    <div class="col-5"></div>
  </div>
  <h1 class="top-h1 text-center">HNG Internship 7.0</h1> -->

  <div class=center-div>
    <p class="text-center"><small>Support HNG internship and Start.NG</small> </p>
    <div>
      <hr style="width: 100%">
    </div>
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">First name</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-6">
          <label for="inputLastname">Last name</label>
          <input type="text" class="form-control" id="inputLastname">
        </div>
      </div>
      <div class="form-group">
        <label for="inputemail">Email address</label>
        <input type="email" class="form-control" id="inputemail">
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputAmount">Amount</label>
          <input type="number" class="form-control" id="inputAmount" placeholder="0.0">
        </div>
        <div class="form-group col-md-4">
          <label for="inputCity">Currency</label>
          <select id="inputCurrency" class="form-control">
            <option selected>Choose...</option>
            <option>AED</option>
            <option>ARS</option>
            <option>AUD</option>
            <option>CAD</option>
            <option>NGN</option>
            <option>CHF</option>
            <option>GBP</option>
            <option>EUR</option>
            <option>HKD</option>
            <option>JPY</option>
            <option>KES</option>

          </select>
        </div>

      </div>
      <div class="row">
        <div class="col-1"></div>
        <div class="col-6">
          <button type="submit" class="btn btn-primary donate-btn" onclick="myFunction()">Pay</button>
        </div>
        <div class="col-5"></div>

      </div>
    </form>
    <p style="margin-top: 20px;">If you have any question please <a href="contactform.html">contact Us</a></p>
  </div>
  
</body>

</html>