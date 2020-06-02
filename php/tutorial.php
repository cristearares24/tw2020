<?php

require "header.php";

?>

<main>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/tutorial1.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Tutoriale</title>
</head>

<?php
require 'dbconnection.php';
?>

<body>
  <div class="content">
    <div id="listing">
      <?php
       $userID = 1; ////valoare HARDCODATA
       $tutorialID = $_GET["tutorialID"];
       $quizID = $tutorialID;
       $dif = mysqli_query($conn, "select difficulty from tutorials where quizID =".$quizID);
       $dif = mysqli_fetch_array($dif);
       $dif = $dif["difficulty"];
       if ($dif == "Usor")
       {
          
          $pasi = mysqli_query($conn, "select title, content from steps where tutorialID =".$tutorialID);
          while ($row = mysqli_fetch_array($pasi))
          {
            echo "<div class=\"title\">";
            echo $row["title"];
            echo "</div>";
            echo "<div class=\"continut\">";
            echo $row["content"];
            echo "</div>";

           
          }
          echo "</div>";
          echo "</div>";
          echo "<button class=\"buton\" id=\"quiz\"><a href=\"./quiz.php?quizID=$quizID\">Start quiz</a></button>";
       }
       elseif ($dif == "Mediu")
       {
          $quizz = mysqli_query($conn, "select quizID from tutorials where difficulty =\"Usor\"");
          while ($quiz_id = mysqli_fetch_array($quizz))
          {
              $quiz_id = $quiz_id['quizID'];
              $score = mysqli_query($conn, "select score from quizresults where userID =$userID and quizID = $quiz_id");
              #if score < 3 brake
              # else imi pun pasii si generez butonul pt quiz
          }
       }
       else
       {
          $quizz = mysqli_query($conn, "select quizID from tutorials where difficulty =\"Mediu\"");
          while ($quiz_id = mysqli_fetch_array($quizz))
          {
            $quiz_id = $quiz_id['quizID'];
            $score = mysqli_query($conn, "select score from quizresults where userID =".$userID." and quizID = ".$quiz_id);
            #if score < 3 brake
            # else imi pun pasii si generez butonul pt quiz
          }
       }  
      ?>

</body>

<?php
require "footer.php";
?>