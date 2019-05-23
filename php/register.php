<?php

  if(isset($_POST['inregistrare']))
  {
    $firstname      = $_POST['firstname'];
    $lastname       = $_POST['lastname'];
    $phone          = $_POST['phone'];
    $phone          = str_replace("+", "00", $phone);
    $email          = $_POST['email'];
    $pwd            = $_POST['password'];
    $verifyPwd = $_POST['verifyPassword'];

    require 'dbconnection.php';

    if(empty($firstname) || empty($lastname) || empty($phone) || empty($email) || empty($pwd) || empty($verifyPwd))
    {
      header("Location: ../register.php?error=emptyfields&firstname=" . $firstname . "&lastname=" . $lastname . "&phone=" . $phone . "&email=" . $email);
      exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $firstname) && !preg_match("/^[a-zA-Z0-9]*$/", $lastname) && !preg_match("/^[0-9]*$/", $phone))
    {
      header("Location: ../register.php?error=invalidfields");
      exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      header("Location: ../register.php?error=emailinvalid&firstname=" . $firstname . "&lastname=" . $lastname . "&phone=" . $phone);
      exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/", $firstname))
    {
      header("Location: ../register.php?error=invalidfirstname&lastname=" . $lastname . "&phone=" . $phone . "&email=" . $email);
      exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/", $lastname))
    {
      header("Location: ../register.php?error=invalidlastname&firstname=" . $firstname . "&phone=" . $phone . "&email=" . $email);
      exit();
    }
    elseif(!preg_match("/^[0-9]*$/", $phone) || strlen($phone) < 10 || strlen($phone) > 15)
    {
      header("Location: ../register.php?error=invalidphone&firstname=" . $firstname . "&lastname=" . $lastname . "&email=" . $email);
      exit();
    }
    elseif($pwd != $verifyPwd)
    {
      header("Location: ../register.php?error=differentpasswords&firstname=" . $firstname . "&lastname=" . $lastname . "&phone=" . $phone . "&email=" . $email);
    }
    else
    {
      $sql  = "SELECT * FROM users WHERE email=?;";
      $stmt = mysqli_stmt_init($conn);

      if(!mysqli_stmt_prepare($stmt, $sql))
      {
        header("Location: ../register.php?error=sqlerror1");
        exit();
      }
      else
      {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        $rezultat = mysqli_stmt_num_rows($stmt);

        if($rezultat > 0)
        {
          header("Location: ../register.php?error=emailalreadytaken&firstname=" . $firstname . "&lastname=" . $lastname . "&phone=" . $phone);
          exit();
        }
        else
        {
          $sql  = "SELECT * FROM users WHERE phone=?;";
          $stmt = mysqli_stmt_init($conn);

          if(!mysqli_stmt_prepare($stmt, $sql))
          {
            header("Location: ../register.php?error=sqlerror2");
            exit();
          }
          else
          {
            mysqli_stmt_bind_param($stmt, "s", $phone);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $rezultat = mysqli_stmt_num_rows($stmt);

            if($rezultat > 0)
            {
              header("Location ../register.php?error=phonealreadytaken&firstname=" . $firstname . "&lastname=" . $lastname . "&email=" . $email);
              exit();
            }
            else
            {
              $sql  = "INSERT INTO users (firstname, lastname, phone, email, password) VALUES (?, ?, ?, ?, ?)";
              $stmt = mysqli_stmt_init($conn);

              if(!mysqli_stmt_prepare($stmt, $sql))
              {
                header("Location: ../register.php?error=sqlerror3");
                exit();
              }
              else
              {
                $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $phone, $email, $hashedpwd);
                mysqli_stmt_execute($stmt);

                header("Location: ../login.php?register=success");
                exit();

              }
            }
          }
        }
      }
    }
  }
