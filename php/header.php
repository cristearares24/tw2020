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
                    <li><a href="./index.php">Acasă</a></li>
                    <li><a href="./tutoriale.php">Tutoriale</a></li>
                    <form action="./myProfile.php" style="display:inline" method="POST">
                        <input type="hidden" name="profileresults" id="inp" value=" " />
                        <li> <a href="javascript:;" onclick="ajaxRequest(this); ">Profilul meu</a></li>
                    </form>
                        <li><a href="../unelte.html">Unelte</a></li>               
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


        ajaxRequest = function(par) {
            var xmlhttp = new XMLHttpRequest(); 
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == XMLHttpRequest.DONE) { 
                    if (xmlhttp.status == 200) {
                        var x = document.getElementById("inp");
                        x.value = xmlhttp.responseText;
                        par.parentNode.parentNode.submit();
                        // xmlhttp.open("POST", "myProfile.php");
                        // xmlhttp.setRequestHeader("Content-Type", "application/json");
                        // xmlhttp.send(xmlhttp.responseText);

                    }
                    else if (xmlhttp.status == 400) {
                        alert('There was an error 400');
                    }
                    else {
                        alert('something else other than 200 was returned' + xmlhttp.responseText);
                    }
                }
            };
            xmlhttp.open("GET", "http://localhost/gart/php/profileresults.php?userId=" + <?php echo $_SESSION["userId"]; ?>, true);
            xmlhttp.send();
        }
  </script>