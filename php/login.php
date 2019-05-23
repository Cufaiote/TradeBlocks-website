<?php

  if(isset($_POST['autentificare']))
  {
    $email = $_POST['email'];
    $pwd   = $_POST['password'];
  }
  else
  {
    header("Location: ../login.php");
    exit();
  }

    require 'dbconnection.php';

    if(empty($email) || empty($pwd))
    {
      header("Location: " . $_SERVER['HTTP_REFERER'] . "?error=necompletat&email=" . $email);
      exit();
    }
    else
    {
      $sql  = "SELECT * FROM users WHERE email=?";
      $stmt = mysqli_stmt_init($conn);

      if(!mysqli_stmt_prepare($stmt, $sql))
      {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?error=sqlerror");
        exit();
      }
      else
      {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($result))
        {
          $verifyPwd = password_verify($pwd, $row['password']);

          if($verifyPwd == false)
          {
            header("Location: " . $_SERVER['HTTP_REFERER'] . "?error=invalidpassword");
            exit();
          }
          elseif($verifyPwd == true)
          {
            session_start();

              $_SESSION['userId']    = $row['userId'];
              $_SESSION['firstname'] = $row['firstname'];
              $_SESSION['lastname']  = $row['lastname'];
              $_SESSION['phone']     = $row['phone'];
              $_SESSION['email']     = $row['email'];

            header("Location: ../index.php?login=success");
            exit();
          }
          else
          {
            header("Location: ../login.php?error=invalidpassword2");
            exit();
          }
        }
        else
        {
          header("Location: ../login.php?error=noaccount");
          exit();
        }
      }
    }
