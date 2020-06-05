<?php
require "header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/rezultate.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Chestionar</title>
</head>


<body>
 
	<div id="container">

		<h1>Rezultat chestionar</h1>
		
        <?php

            if (!isset($_SESSION['userId']))
            {
            header("Location: ./index.php");
            exit();
            }

            if (!isset($_REQUEST['quizID']))
            {
            header("Location: ./index.php");
            exit();
            }

            require 'dbconnection.php';
            $questions = mysqli_query($conn, "select answerID from questions where quizID = 1");
            // echo $answer = $_POST["ans1"];
            $contor = 1;
            $quizID = $_POST["quizID"];
            $total_correct = 0;
            while(true){
                if (!isset($_POST["ans".$contor])){
                    break;
                }
                $rez = explode(",", $_POST["ans".$contor]);
                $questionID = $rez[0];
                $answerID = $rez[1];
                $correct_answer = mysqli_query($conn, "select answerID from questions where questionID =".$questionID);
                $correct_answer = mysqli_fetch_array($correct_answer);
                $correct_answer = $correct_answer["answerID"];
                if ($correct_answer == $answerID){
                    $total_correct++;
                }
                $contor++;
            }
            $contor--;

            echo "<p id = \"rasp\"> Ati raspuns corect la: $total_correct/$contor intrebari. </p>";
            if($total_correct < 3){
                echo "<button id = \"repeta\"><a href=\"./quiz.php?quizID=$quizID\">Repeta quiz</a></button>";
            }
            $quizID = $_POST["quizID"];
            $id = $_SESSION["userId"];
            $rez = mysqli_query($conn, "select * from quizresults where id= $id and quizID = $quizID");
            if (mysqli_num_rows($rez) == 0)
                $rezultate = mysqli_query($conn, "INSERT INTO quizresults(id, quizID, score) VALUES ($id, $quizID, $total_correct)");
            else{
                $rezultate = mysqli_query($conn, "update quizresults set score = $total_correct where quizID=$quizID and id = $id");
            }
        ?>
	
	</div>
 
</body>
 