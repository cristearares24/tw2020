<?php

session_start();

?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style/new.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Ghid pentru curți și grădini</title>
    <div class="header">
        <div class="inner_header">
            <div class="logo_container">
                <img src="../images/gardening.png" alt="logo" />
                <h1><span>Ghid</span> curți și grădini</h1>
            </div>
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <li><a class="active" href="./index.php">Acasă</a></li>
                    <li><a href="./tutoriale.php">Tutoriale</a></li>
                    <form action="./myProfile.php" style="display:inline" method="POST">
                        <input type="hidden" name="profileresults" id="inp" value=" " />
                        <li> <a href="javascript:;" onclick="myFunction(); parentNode.parentNode.submit()">
                        Profilul meu</a></li></form>
                        <li><a href="./unelte.php">Unelte</a></li>
                        <?php
                        if (isset($_SESSION['userId']))
                        {
                          echo '<li><a href="./logout.php">Deconectare</a></li>';
                        }
                        else {
                            echo '<li><a href="./login.php">Conectare</a></li>';
                        }
                    ?>
                </ul>
            </nav>
        </div>
    </div>

</head>

<script>
    myFunction=function()
    {
      var x = document.getElementById("inp");
      x.value = sessionStorage.getItem("profileresults");
  
      //id.href += "?quizresults=" + sessionStorage.getItem("profileresults");
    }
<<<<<<< HEAD
  </script>
=======
</script>
>>>>>>> 078e71988cdbd04561d40db9db26d1bd2264b2ea
