<?php
require "header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/quiz.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Chestionar</title>
</head>

<body>


<div id="container">
    <h1>Etapele amenajarii unei gradini sau curti</h1>
    <form action="rezultate.php" method="post" id="quiz">
    <div class="quiz">
        <ol>
            <?php

            if (!isset($_SESSION['userId']))
            {
            header("Location: ./index.php");
            exit();
            }

            require 'dbconnection.php';

            $id = $_SESSION["userId"];
            $quizID = $_REQUEST["quizID"];
            $questions = mysqli_query($conn, "select questionID, questionString from questions where quizID =".$quizID);

            function showQuiz()
            {
                global $questions, $conn, $quizID;
                $contor = 1;
                while ($row = mysqli_fetch_array($questions)){
                    echo "<li>";
                    $rez = mysqli_query($conn, "select answerID, answerString from answers where questionID =".$row["questionID"]);
                    echo "<h3>".$row["questionString"]."</h3>";
                    while($answer =  mysqli_fetch_array($rez))
                    {
                        echo "<div>";
                        $trans = $row["questionID"].",".$answer["answerID"];
                        echo "<input type=\"radio\" name = \"ans".$contor."\" value = \"".$trans."\""." required/>";
                        echo "<label class =\"raspuns\">".$answer["answerString"]."</label>";
                        echo "</div>";
                    }
                    echo "</li>";
                    $contor++;
                
                }
                echo "</div>";
                echo "<input type=\"hidden\" name=\"quizID\" value=$quizID>";
                echo "<input type=\"submit\" class=\"buton\" value=\"Afiseaza\">";   
            }

            $rez = mysqli_query($conn, "select * from quizresults where id= $id");
            if (mysqli_num_rows($rez) == 0)
            {
                $dif = mysqli_query($conn, "select difficulty from tutorials where quizID =".$quizID);
                $dif = mysqli_fetch_array($dif);
                $dif = $dif["difficulty"];
                if ($dif == "Usor")
                {
                    showQuiz();
                }
                else
                {
                    echo "<script>alert('Trebuie sa terminati quiz-ul de dificultate mai usoara intai.'); window.location = './tutoriale.php';</script>";             
                }
            }
            else
            {  
                $dif = mysqli_query($conn, "select difficulty from tutorials where quizID =".$quizID);
                $dif = mysqli_fetch_array($dif);
                $dif = $dif["difficulty"];
                //SELECT distinct difficulty FROM quizresults q join tutorials t on t.quizID = q.quizID where t.difficulty = "Usor" and id =$id
                // $score = mysqli_query($conn, "select score from quizresults where id=$id and quizID = $quizID");
                // $score = mysqli_fetch_array($score);
                // $score = $score == NULL ? 0 : $score["score"];
            
                if($dif == "Usor")
                {
                    $score = mysqli_query($conn, "select score from quizresults where id=$id and quizID = $quizID");
                    $score = mysqli_fetch_array($score);
                    $score = $score == NULL ? 0 : $score["score"];
                    if($score < 3)
                    {
                        showQuiz();
                    }
                    elseif ($score >= 3)
                        echo "<p id=\"rasp\"> Ati facut deja acest tutorial. </p>";
                }
                elseif ($dif == "Mediu")
                {
                    $score = mysqli_query($conn, "select score from quizresults where id=$id and quizID = $quizID");
                    $score = mysqli_fetch_array($score);
                    $score = $score == NULL ? 0 : $score["score"];
                    if($score < 3)
                    {
                        //showQuiz();
                        $score = mysqli_query($conn, "SELECT q.score FROM quizresults q join tutorials t on t.quizID = q.quizID where t.difficulty = \"Usor\" and q.id =$id");
                        $canAccess = false;
                        while($score = mysqli_fetch_array($score))
                        {
                            $score = $score["score"];
                            if($score >= 3)
                            {
                                $canAccess = true;
                                break;
                            }
                        }
                        if($canAccess == true)
                        {
                            showQuiz();
                        }
                        else
                            echo "<script>alert('Trebuie sa terminati quiz-ul de dificultate mai usoara intai.'); window.location = './tutoriale.php';</script>";
                    }
                    elseif ($score >= 3)
                        echo "<p id=\"rasp\"> Ati facut deja acest tutorial. </p>";        
                }
                else    
                {
                    $score = mysqli_query($conn, "select score from quizresults where id=$id and quizID = $quizID");
                    $score = mysqli_fetch_array($score);
                    $score = $score == NULL ? 0 : $score["score"];
                    if($score < 3)
                    {
                        //showQuiz();
                        $score = mysqli_query($conn, "SELECT q.score FROM quizresults q join tutorials t on t.quizID = q.quizID where t.difficulty = \"Mediu\" and q.id =$id");
                        $canAccess = false;
                        while($score = mysqli_fetch_array($score))
                        {
                            $score = $score["score"];
                            if($score >= 3)
                            {
                                $canAccess = true;
                                break;
                            }
                        }
                        if($canAccess == true)
                        {
                            showQuiz();
                        }
                        else
                            echo "<script>alert('Trebuie sa terminati quiz-ul de dificultate mai usoara intai.'); window.location = './tutoriale.php';</script>";
                    }
                    elseif ($score >= 3)
                        echo "<p id=\"rasp\"> Ati facut deja acest tutorial. </p>";
                }
                // $score = mysqli_query($conn, "select score from quizresults where id =$id and quizID = $quizID");
                // $score = mysqli_fetch_array($score);
                // $score = $score == NULL ? 0 : $score["score"];
                // if($score < 3)
                // {
                //     showQuiz();
                // }
                // elseif ($score >= 3)
                //     echo "<p id=\"rasp\"> Ati facut deja acest tutorial. </p>";
                //     echo "</div>";
                echo "</div>";
            }
            echo "</ol>";
            
            ?>
    
    </form>
</div>

</body>
