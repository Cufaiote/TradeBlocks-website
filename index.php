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
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">

</head>
<body>

    <?php
      include_once 'php/header.php';
    ?>

    <div class="title">
      <h1>TradeBlocks<br></h1>
      <hr style="width:50%;height:3px;background-color:#ddd;">
      <h2>Trade without any Blocks</h2><br><br><br><br>
      <?php
        if(isset($_SESSION["userId"]))
        {
          echo '<!-- Button trigger modal -->
                <a class="button-fain" data-toggle="modal" data-target="#modalMessage">Trade Now</a>

                <!-- Modal -->
                <div class="modal fade modal-box" id="modalMessage" role="dialog">
                  <div class="modal-dialog modal-dialog-centered">

                  <!-- Continutul ferestrei -->
                    <div class="modal-content fereastra-modal">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <h3> Attempting to connect to the server.</h3>
                        <h3> Please wait! </h3>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="button-dismiss" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>';
        }
        else
        {
          echo '<a class="button-fain" href="login.php">Trade Now</a>';
        }
      ?>

    </div>




  <div class="inter" id="about">

  </div>

  <div class="welcome">

    <h2>WHO ARE WE?</h2>
    <div class="first container">
      <div class="col-md-12 col-xs-12">
        <center>
          <p><span style=" color:green">&nbsp;&nbsp;&nbsp;TradeBlock</span> is building smart contracts that will disrupt
            the current state of play in international trade.
            Our principle aim is to help our clients to overcome some
            of the current barriers that make it difficult when seeking
            to execute cross-border international transactions,
            such as a lack of trust, obsolete & expensive intermediaries and or
            "trusted third parties."
            For more information: info@example.com</p>
            <br><br><br>
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
          </center>
        </div>
      </div>
    </div>


    <div class="howItWorks">
      <h2>WHAT DO WE OFFER</h2>
      <br><br><br>
      <div class="container offers">
        <div class="col-md-6 col-xs-12" style="border-bottom:1px solid grey;border-right:3px solid grey;border-bottom-right-radius:45px;">
          <center>
            <i class="fab fa-btc" aria-hidden="true" style="font-size:70px; color:#398E0C;"></i>
            <h3>BitCoin Trade</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Dolores magni voluptatem, quod quia, nisi sint quas recusandae
              corporis fugit, eum sed! Ipsam eos quis consectetur unde nam,
              accusantium, nihil cum!</p>
            </center>
          </div>


          <div class="col-md-6 col-xs-12" style="border-bottom:1px solid grey;border-left:3px solid #333;border-bottom-left-radius:45px;">
            <center>
              <img src="img/litecoin.png" width="12%" height="12%" margin="10px"</img>
              <h3>LiteCoin Trade</h3>
              <p style="margin-bottom: 16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Dolores magni voluptatem, quod quia, nisi sint quas recusandae
                corporis fugit, eum sed! Ipsam eos quis consectetur unde nam,
                accusantium, nihil cum!</p>
              </center>
            </div>


            <div class="col-md-6 col-xs-12" style="border-top:1px solid grey;border-right:3px solid #333;border-top-right-radius:45px;">
              <center>
                <i class="fab fa-ethereum" style="font-size:70px; margin-top: 5px; color:#398E0C;"></i>
                <h3>Ethereum Trade</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Dolores magni voluptatem, quod quia, nisi sint quas recusandae
                  corporis fugit, eum sed! Ipsam eos quis consectetur unde nam,
                  accusantium, nihil cum!</p>
                </center>
              </div>


              <div class="col-md-6 col-xs-12" style="border-top:1px solid grey;border-left:3px solid grey;border-top-left-radius:45px;">
                <center>
                  <i class="fab fa-btc" aria-hidden="true" style="font-size:70px; margin-top: 5px; color:#398E0C;"></i>
                  <h3>ByteCoin Trade</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Dolores magni voluptatem, quod quia, nisi sint quas recusandae
                    corporis fugit, eum sed! Ipsam eos quis consectetur unde nam,
                    accusantium, nihil cum!</p>
                  </center>
                </div>
              </div>
            </div>


            <div class="business">

              <div class="bg">

              </div>
              <h2>Your Gains</h2>

              <div class="container  offers">
                <div class="col-md-6">
                  <center>
                    <div class="box">
                      <center>
                        <i class="fa fa-money" aria-hidden="true" style ="font-size:100px; color:#398E0C;margin-top:35px;"></i><br>
                        <h3> More Money</h3>

                        <p style="text-align: justify;">With our help you will gain good tips and experience in trading & investing
                          on what do you want, leading to gain more money based on more safer transactions.</p>
                        </center>
                      </div>
                    </center>
                  </div>

                  <div class="col-md-6">
                    <center>
                      <div class="box">
                        <center>
                          <i class="fa fa-line-chart" aria-hidden="true" style ="font-size:100px; color:#398E0C;margin-top:35px;"></i><br>
                          <h3> More Efficiency</h3>

                          <p style="text-align: justify;">You will begin to see the opportunities and learn where to aim to overcome
                            difficulties and to win. Your trade skill will improve by more and more
                            efficient transactions</p>
                          </center>
                        </div>
                      </center>
                    </div>

                  </div>

                </div>




                <?php
                include_once 'php/footer.php';
                ?>


                <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
                <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

                <script src="js/javascript.js"></script>

              </body>
              </html>
