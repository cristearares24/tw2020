<?php

require "header.php";

?>
<main>
<?php
// if (isset($_SESSION['userId']))
// {
//     // echo '<p>You are logged in!</p>';

// }
// else
// {
//     // echo '<p>You are logged out!</p>';
// }
?>
</main>
<meta charset="UTF-8">
<<<<<<< HEAD
<link rel="stylesheet" type="text/css" href="../style/home.css">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<title>Ghid pentru curți și grădini</title>
=======
    <link rel="stylesheet" type="text/css" href="../style/home.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Ghid pentru curți și grădini</title>
>>>>>>> 078e71988cdbd04561d40db9db26d1bd2264b2ea
<body>
   <div class="quote">
      <p><b>Bine ați venit la <span>Ghid</span> curți și grădini</b></p>
      <blockquote><i>“Asa cum o floare de lotus se naste din apa , creste in apa si se inalta din apa pentru
         a sta deasupra ei neintinata , la fel eu m-am nascut in lume , am crescut in lume si am invins-o, traind
         neintinat de lume.”</i>
         <b>Buddha</b>
      </blockquote>
   </div>
   <p>
   <div class="slidershow">
   </div>
   <div class="text">
      <p>Gradina este locul pe care poti sa il transformi intr-un loc de poveste, cu un design deopotriva indraznet si
         practic.<br>
         Vrei sa stii cum poti sa pui in practica proiectul tau de amenajare a gradinii? Afla din sectiunea<i>
         <b>"Tutorials"</b> </i>tot ce trebuie sa stii inainte sa te apuci de treaba si pasii pe care trebuie sa ii
         urmezi.
      </p>
   </div>
   <div class="gallery-container">
      <div class="gallery">
         <img src="../images/8.jpg" alt="Cinque Terre" width="600" height="400">
         <div class="desc">
            <b> Pompe de apă robuste și fiabile</b>
            <hr>
            <br>
            <p style="font-size: 16px;">Acum, nu mai este necesar să vă aplecați pentru a strânge fructele căzute pe
               sol.
            </p>
         </div>
      </div>
      <div class="gallery">
         <img src="../images/9.jpg" alt="Forest" width="600" height="400">
         <div class="desc">
            <b>Strângerea fructelor căzute pe sol </b>
            <hr>
            <br>
            <p style="font-size: 16px;">Pompele de apă duc apa acolo unde aveți nevoie de ea, când aveți nevoie de
               ea.<br>
            </p>
         </div>
      </div>
      <div class="gallery">
         <img src="../images/10.jpg" alt="Northern Lights" width="600" height="400">
         <div class="desc">
            <b>Tăiere comodă</b>
            <hr>
            <br>
            <p style="font-size: 16px;">Tăiați gardul viu înalt în siguranță, de la sol, cu trimmerul telescopic de gard
               viu.<br>
            </p>
         </div>
      </div>
   </div>
</body>
<script>
   var xmlhttp = new XMLHttpRequest(); 
   xmlhttp.onreadystatechange = function() {
       if (xmlhttp.readyState == XMLHttpRequest.DONE) { 
           if (xmlhttp.status == 200) {
               sessionStorage.setItem("profileresults", xmlhttp.responseText);
               
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
   xmlhttp.open("GET", "http://localhost:81/tw/tw2020/php/profileresults.php?userId=" + <?php echo $_SESSION["userId"]; ?>, true);
   xmlhttp.send();
</script>