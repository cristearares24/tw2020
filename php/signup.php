<!-- <?php

// require "header.php";

// ?> -->

<main>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style/register.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Ghid pentru curți și grădini</title>

<body>
      <div class="container">
            <form action = "signupback.php" method="post">

                  <div id="name">Nume </div>
                  <input class="inputForm" type="text" name="firstname" placeholder = "Nume ...">

                  <div id="name">Prenume </div>
                  <input class="inputForm" type="text" name="lastname" placeholder = "Prenume ...">

                  <div id="name">Email</div>
                  <input class="inputForm" type="text" name="mail" placeholder="Email ...">

                  <div id="pass">Parola</div>
                  <input class="inputForm" type="password" name="pwd" placeholder="Parola ...">

                  <div id="pass">Confirma Parola</div>
                  <input class="inputForm" type="password" name="pwd-repeat" placeholder="Confirma Parola ...">

                  <button type="submit" name="signup-submit" onclick="window.location.href='./index.php'">Register</button>
            
                </form>
                <?php
                    if (isset($_GET['error']))
                    {
                        if ($_GET['error'] == "emptyfields")
                        {
                            echo '<p id="message" >Fill in all fields!</p>';
                        }
                        else if ($_GET['error'] == "invaliduidemail")
                        {
                            echo '<p id="message" >Invalid username and e-mail!</p>';

                        }
                        else if ($_GET['error'] == "invalidemail")
                        {
                            echo '<p id="message"  >Invalid e-mail!</p>';
                        }
                        else if ($_GET['error'] == "passwordcheck")
                        {
                            echo '<p id="message" >Your passwords do not match!</p>';
                        }
                        else if ($_GET['error'] == "usertaken")
                        {
                            echo '<p id="message" >User is already taken!</p>';
                        }
                    }
                    else if (isset($_GET['signup']))
                    {
                        if ($_GET['signup'] == "success")
                         {
                            header("Location: ./login.php");
                            exit();
                         }
                    }
                    ?>
      </div>
</body>
</html>
</main>