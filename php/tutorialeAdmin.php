<?php

require "headerAdmin.php";

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/tutoriale.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Tutoriale</title>
</head>


<body>
<div class="content">
    <div class="container">
      <h1>Progresul tutorialelor</h1>
      <ul class="progressbar" id="progress">
  <?php

  if (!isset($_SESSION['userId']))
  {
    echo "<script>alert('Trebuie sa fiti conectat pentru a putea accesa pagina.'); window.location = './indexAdmin.php';</script>";
    exit();
  }

  require 'dbconnection.php';
  $id = $_SESSION['userId'];
  $quizID_count = mysqli_query($conn, "select COUNT(*) as 'count' from tutorials");
  $quizID_count = mysqli_fetch_array($quizID_count);
  $quizID_count = $quizID_count["count"];
  for ($i = 1; $i <= $quizID_count; $i++)
  {
    $title = mysqli_query($conn, "select title from tutorials where quizID = $i");
    $title = mysqli_fetch_array($title);
    $title = $title["title"];
    $tutorial = mysqli_query($conn, "select tutorialID from tutorials where tutorialID = $i");
    $tutorial = mysqli_fetch_array($tutorial);
    $tutorial = $tutorial["tutorialID"];
    if($tutorial == 0) {$count = $count + 1; continue;}
    $rezultate = mysqli_query($conn, "select score from quizresults where quizID = $i and id = $id");
    if (mysqli_num_rows($rezultate) == 0) {
      echo "<li class = \"progressbar_begin\">".$title."</li>";
    }
    else{
    $rezultate = mysqli_fetch_array($rezultate);
    $rezultate = $rezultate["score"];
    if ($rezultate >= 0 && $rezultate < 3){
      echo "<li class = \"progressbar_inprogress\">".$title."</li>";
      }
    elseif ($rezultate >= 3){
      echo "<li class = \"progressbar_finished\">".$title."</li>";
      }
    }
  }
  echo "</ul> </div>";
  echo "<div class=\"grid-container\">";
  //$id = $_SESSION['userId'];
  // $quizID_count = mysqli_query($conn, "select count(*) from tutorials");
  for ($i = 1; $i <= $quizID_count; $i++)
  {
    echo "<div class=\"tutorial\"> <div class=\"Nume\"> <p>$title</p> <form method='get'> <button name='delete' value='$id'>
    <img src='https://image.flaticon.com/icons/png/512/61/61848.png' height='35' width='30'></button></div>";
    echo "<div class=\"continutstyle\"> <ul>";
    $tutorial = mysqli_query($conn, "select tutorialID from tutorials where tutorialID = $i");
    $tutorial = mysqli_fetch_array($tutorial);
    $tutorial = $tutorial["tutorialID"];
    if($tutorial == 0) {$count = $count + 1; continue;}
    $title = mysqli_query($conn, "select title from tutorials where quizID = $i");
    $title = mysqli_fetch_array($title);
    $title = $title["title"];
    $dif = mysqli_query($conn, "select difficulty from tutorials where quizID =".$i);
    $dif = mysqli_fetch_array($dif);
    $dif = $dif["difficulty"];
    $descriere = mysqli_query($conn, "select description from tutorials where quizID =".$i);
    $descriere = mysqli_fetch_array($descriere);
    $descriere = $descriere["description"];
    echo "<li><span>Dificultate: </span>$dif</li>";
    echo "<li><span>Descriere: </span>$descriere</li>";
    echo "<li><a href=\"./tutorialAdmin.php?tutorialID=$i\" class=\"morebtn\">Deschide tutorialul</a></li>";
    echo "</ul> </div> </div>";

  }
  echo "</div> </div>";
  
  ?>

</body>
