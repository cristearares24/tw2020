<?php

session_start();

?>
<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../style/home.css">
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
      <ul class="nav">
        <a href="./index.php">
          <li>Acasă</li>
        </a>
        <a href="./tutoriale.php">
          <li>Tutoriale</li>
        </a>
        <form action="./myProfile.php" style="display:inline" method="POST">
          <input type="hidden" name="profileresults" id="inp" value=" "/>
          <a href="javascript:;" onclick="myFunction(); parentNode.submit()">
            <li>Profilul meu</li>
          </a>
        </form>
        <a href="./unelte.html">
          <li>Unelte</li>
        </a>
        <?php
          if (isset($_SESSION['userId']))
          {
            echo '<a href="./logout.php">
            <li>Deconectare</li>
                  </a>';
          }
          else {
              echo '<a href="./login.php">
              <li>Conectare</li>
            </a>';
          }
      ?>
      </ul>
      <div class="search-box">
        <input class="search-txt" type="text" name="" placeholder="Type to search">
        <a class="search-btn" href="#">
          <i class="fas fa-search"></i>
        </a>
      </div>
    </div>
  </div>
</head>
<body>
    
<header>
<div>
<?php
// if (isset($_SESSION['userId']))
// {
//     echo '<form action="logout.php" method="post">
//     <button type="submit" name="logout-submit">Logout</button>
//     </form>';

// }
// else
// {
//     echo '<form action="login.inc.php" method="post">
//     <input type="text" name="mailuid" placeholder="Username/Email..."> 
//     <input type="password" name="pwd" placeholder="Password..."> 
//     <button type="submit" name="login-submit">Login</button>
//     </form>
//     <a href="signup.php">Signup</a>';
// }

?>

</div>

</header>

<script>
  myFunction=function()
  {
    var x = document.getElementById("inp");
    x.value = sessionStorage.getItem("profileresults");

    //id.href += "?quizresults=" + sessionStorage.getItem("profileresults");
  }
</script>