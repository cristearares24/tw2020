<?php

require "header.php";

?>

<link rel="stylesheet" type="text/css" href="../style/tutorial1.css">
<title>Tutoriale</title>

<body>
  <div class="content">
    <div id="listing">
      <?php

        if (!isset($_SESSION['userId']))
        {
          //echo "<script>alert('Trebuie sa fiti conectat pentru a putea accesa pagina.'); window.location = './index.php';</script>";             
          //header("Location: ./index.php");
          exit();
        }
    
       require 'dbconnection.php';

       $id = $_SESSION["userId"];
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
          echo "<form action=\"quiz.php\" method=\"get\">
          <input type=\"hidden\" name=\"quizID\" value=$quizID>
          <input class=\"buton\" type=\"submit\" value=\"Start quiz\">
          </form>";
          echo "</div>";
       }
       elseif ($dif == "Mediu")
       {
          $quizz = mysqli_query($conn, "select quizID from tutorials where difficulty =\"Usor\"");
          while ($quiz_ID = mysqli_fetch_array($quizz))
          {
              $quiz_ID = $quiz_ID['quizID'];
              $score = mysqli_query($conn, "select score from quizresults where id =$id and quizID = $quiz_ID");
              if (mysqli_num_rows($score) != 0)
                {
                  $score = mysqli_fetch_array($score);
                  $score = $score["score"];
                }
              else 
                $score=0;
              if ($score < 3) 
                echo "<script>alert('Trebuie sa terminati quiz-ul de dificultate mai usoara intai.'); window.location = './tutoriale.php';</script>";             
              else{
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
                echo "<form action=\"quiz.php\" method=\"get\">
                <input type=\"hidden\" name=\"quizID\" value=$quizID>
                <input class=\"buton\" type=\"submit\" value=\"Start quiz\">
                </form>";
                echo "</div>";
              }
          }
       }
       else
       {
          $quizzz = mysqli_query($conn, "select quizID from tutorials where difficulty =\"Mediu\"");
          $hasCompleted = true;
          while ($quiz_IDD = mysqli_fetch_array($quizzz))
          {
              $quiz_IDD = $quiz_IDD['quizID'];
              $score = mysqli_query($conn, "select score from quizresults where id = $id and quizID = $quiz_IDD");
              if (mysqli_num_rows($score) != 0)
                {
                  $score = mysqli_fetch_array($score);
                  $score = $score["score"];
                }
              else 
                $score = 0;
              if ($score < 3) {
                $hasCompleted = false;
                echo "<script>alert('Trebuie sa terminati quiz-ul de dificultate mai usoara intai.'); window.location = './tutoriale.php';</script>";             
              }
          }

          if ($hasCompleted) {
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
            echo "<form action=\"quiz.php\" method=\"get\">
            <input type=\"hidden\" name=\"quizID\" value=$quizID>
            <input class=\"buton\" type=\"submit\" value=\"Start quiz\">
            </form>";

            // echo "<button class=\"buton\" id=\"quiz\"><a href=\"./quiz.php?quizID=$quizID\">Start quiz</a></button>";
            echo "</div>";
          }
       }  
      ?>

</body>
