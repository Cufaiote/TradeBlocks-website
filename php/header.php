<?php
  session_start();
?>

  <div class="header">

    <div  class="navbar  navbar-default navbar-fixed-top">
      <div class="container" style="display: block;">
        <div>
          <div  class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" rel="home" href="index.php" title="TradeBlock">
              <img style="max-width:170px; margin-top: 7px;"
              src="img/logoo2.png">
            </a>
          </div>

          <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">

              <?php

                if(isset($_SESSION["userId"]))
                {
                    echo '

              <li><a href="#">'.$_SESSION["firstname"].' '.$_SESSION["lastname"].'</a><li>
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php#about">About</a></li>
              <li><a href="php/logout.php">Log out</a></li>

              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" style="font-family: \'Rubik\', sans-serif;" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="https://twitter.com/" style="height:50px !important;line-height:40px !important;font-family: \'Rubik\', sans-serif;">TWITTER</a></li>
                    <li><a href="https://github.com/" style="height:50px !important;line-height:40px !important;font-family: \'Rubik\', sans-serif;">CODE</a></li>
                    <li><a href="https://www.youtube.com/" style="height:50px !important;line-height:40px !important;font-family: \'Rubik\', sans-serif;">YOUTUBE</a></li>

                  </ul>
                </li>

              </ul>';
            }
            else
            {
              echo '

        <li><a href="index.php">Home</a></li>
        <li><a href="index.php#about">About</a></li>
        <li><a href="login.php">Log in</a></li>

        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" style="font-family: \'Rubik\', sans-serif;" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="https://twitter.com/" style="height:50px !important;line-height:40px !important;font-family: \'Rubik\', sans-serif;">TWITTER</a></li>
              <li><a href="https://github.com/" style="height:50px !important;line-height:40px !important;font-family: \'Rubik\', sans-serif;">CODE</a></li>
              <li><a href="https://www.youtube.com/" style="height:50px !important;line-height:40px !important;font-family: \'Rubik\', sans-serif;">YOUTUBE</a></li>

            </ul>
          </li>

        </ul>';
            }
              ?>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

</div>';
