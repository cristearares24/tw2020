<?php

require "header.php";

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/tutoriale.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Tutoriale</title>
</head>

<?php
require 'dbconnection.php';
?>

<body>
<div class="content">
    <div class="container">
      <h1>Progresul tutorialelor</h1>
      <ul class="progressbar" id="progress">
  <?php
  $userID = 1;
  //$userID = $_SESSION["userID"];
  $quizID_count = mysqli_query($conn, "select count(*) from tutorials");
  for ($i = 1; $i < 5; $i++){
    $title = mysqli_query($conn, "select title from tutorials where quizID = $i");
    $title = mysqli_fetch_array($title);
    $title = $title["title"];
    $rezultate = mysqli_query($conn, "select score from quizresults where quizID = $i and userID = $userID");
    if (mysqli_num_rows($rezultate) == 0) {
      echo "<li class = \"progressbar_begin\">".$title."</li>";
    }
    else{
    $rezultate = mysqli_fetch_array($rezultate);
    $rezultate = $rezultate["score"];
    if ($rezultate > 0 && $rezultate < 3){
      echo "<li class = \"progressbar_inprogress\">".$title."</li>";
      }
    elseif ($rezultate >= 3){
      echo "<li class = \"progressbar_finished\">".$title."</li>";
      }
    }
  }
  
  ?>

<!-- 
        <li class="progressbar_inprogress" id="p1">Care sunt etapele amenajarii unei gradini sau curti</li>
        <li class="progressbar_finished" id="p2">Cum amenajezi gradina conform functionalitatii</li>
        <li class="progressbar_begin" id="p3"> Amenajarea gradinii in functie de stilul preferat</li>
        <li class="progressbar_begin" id="p4">Secretele amenajarii unei curti sau gradini speciale </li> -->
      </ul>
      <script src="../tutoriale.js"></script>
    </div>
    <div class="grid-container">
      <div class="t1 tutorial">
        <div class="Nume">
          <p>Care sunt etapele amenajarii unei gradini sau curti</p>
        </div>
        <div class="Continut continutstyle">
          <ul>
            <li><span class="textdeco">Dificultate: </span>Usor</li>
            <li><span class="textdeco">Descriere: </span>Cand vrei sa va apucati de amenajarea unei gradini este similar
              proiectarii si construirii unei case:
              totul porneste de la etapa de planificare, urmand apoi ridicarea elementelor de infrastructura, precum
              alei, foisoare, aranjamente florale gradini,
              sisteme de iluminat, trasee de apa si alte facilitati obligatorii intr-o gradina, finalizandu-se cu mici
              finisaje.
            </li>
            <li class="morebtn"><a href="./tutorial.php?tutorialID=1" class="morebtn">Deschide tutorialul</a>
            <li>
          </ul>
        </div>
      </div>
      <div class="t4 tutorial">
        <div class="Nume">
          <p>Cum amenajezi gradina conform functionalitatii</p>
        </div>
        <div class="Continut continutstyle">
          <ul>
            <li><span class="textdeco">Dificultate: </span>Dificil</li>
            <li><span class="textdeco">Descriere: </span> Amenajarea gradinii incepe cu stabilirea modului in care vrei
              sa folosesti ulterior spatiul respectiv, ca loc pentru relaxare sau ca loc unde sa plantezi si sa cresti
              legume proaspete si delicioase.</li>
            <li class="morebtn"><a href="./tutorial.php?tutorialID=4" class="morebtn">Deschide tutorialul</a>
            <li>

          </ul>
        </div>
      </div>
      <div class="t3 tutorial">
        <div class="Nume ">
          <p>Amenajarea gradinii in functie de stilul preferat</p>
        </div>
        <div class="Continut continutstyle">
          <ul>
            <li><span class="textdeco">Dificultate: </span>Dificil</li>
            <li><span class="textdeco">Descriere: </span> Spatiul exterior al casei tale poate fi amenajat asa cum iti
              doresti, indiferent de marimea acestuia. Aici regasesti cateva idei de gradini amenajate in diferite
              stiluri, din care poti sa iti alegi proiectul preferat! </li>
            <li class="morebtn"><a href="./tutorial.php?tutorialID=3" class="morebtn">Deschide tutorialul</a>
            <li>
          </ul>
        </div>
      </div>
      <div class="t2 tutorial">
        <div class="Nume ">
          <p>Secretele amenajarii unei curti sau gradini speciale</p>
        </div>
        <div class="Continut continutstyle">
          <ul>
            <li><span class="textdeco"> Dificultate: </span> Mediu </li>
            <li><span class="textdeco">Descriere: </span>Exista situatii in care curtea impune limitari pentru aranjarea
              unei gradini care trebuie concepute atat functional, cat si estetic. In continuare, va spunem din
              secretele amenajarii unei curti sau gradini speciale, fie ca vorbim despre spatiu restrans, de teren in
              panta sau nisipos, fie doar despre gradini care necesita minim efort in intretinere, pentru oameni
              ocupati.</li>
            <li class="morebtn"><a href="./tutorial.php?tutorialID=2" class="morebtn">Deschide tutorialul</a>
            <li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>

<?php

require "footer.php";

?>