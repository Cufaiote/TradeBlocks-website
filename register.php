<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Cufaiote Razvan">
  <meta name="keywords" content="bitcoin, TradeBlock, trade block,trading, investment, money, transaction,transaction,international trade">
  <!-- Important Line -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trade Blocks</title>


  <link rel="icon" type="image/png" href="img/favicon.png">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>

  <?php
  include_once 'php/header.php';
  ?>

  <center>
    <div class="register-form">
      <div class="square" style="margin-top:0%">
        <div style="text-align:center">
          <h1>Welcome to TradeBlocks !</h1>

          <h3>Please fill in the fields below!</h3>
        </div>

        <div class="container-fluid" style="display:block;margin-top:3%;">
          <div class="col-md-offset-1 col-md-10">
            <form action="php/register.php" method="post">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" name="firstname" placeholder="First Name..." required="required">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" name="lastname" placeholder="Last Name..." required="required">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                  <input type="text" class="form-control" name="phone" placeholder="Phone..." required="required">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                  <input type="email" class="form-control" name="email" placeholder="E-mail..." required="required">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" class="form-control" name="password" placeholder="Password..." required="required">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-lock"></i>
                    <i class="fa fa-check"></i>
                  </span>
                  <input type="password" class="form-control" name="verifyPassword" placeholder="Verify Password..." required="required">
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg center-block" style="width: 100px;" name="inregistrare">Register</button>
              </div>
            </form>
          </div>
          <div class="col-md-offset-1 col-md-10" style="text-align: center;">
            <h3>Already have an account? Log in here!</h3>
            <a href="login.php">
              <button type="submit" class="btn btn-primary center-block" style=" margin-top:2%">Log in</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </center>

  <?php
  include_once 'php/footer.php';
  ?>

</body>
</html>
