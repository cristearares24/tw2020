<?php

require "header.php";

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/myProfile.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Profilul meu</title>
</head>

<body>
    <div class="profile-card">
        <div class="image-container">
            <img src="../images/proba3.jpg" style="width:100% " alt="">
            <div class="title">
                <h2>Date personale</h2>
            </div>
        </div>

        <div class="main-container">
            <p class="info"></p>
        <?php
        require 'dbconnection.php';

        if (!isset($_SESSION['userId']))
        {
            echo "<script>alert('Trebuie sa fiti conectat pentru a putea accesa pagina.'); window.location = './index.php';</script>";             
            // header("Location: ./index.php");
            exit();
        }

        $rez = json_decode($_POST["profileresults"], true);
        // var_dump(json_decode($rez, true));
        $firstname = $rez[0]["firstname"];
        $lastname = $rez[0]["lastname"];
        $mail = $rez[0]["email"];

        
        echo "<p class=\"info\"><i class=\"fas fa-home\"></i>$firstname $lastname</p>";
        echo "<p class=\"info\"><i class=\"fas fa-envelope-square\"></i> $mail </p>";
        $sum = 0;
        foreach($rez as $tutorial)
            $sum += $tutorial["score"];
        $medie = (($sum / count($rez)) / 4 ) * 100;
        echo "<p class=\"info\"><i class=\"fas fa-tasks\"></i> $medie%</p>";
        echo "</div> </div>";
        echo "<div class=\"progress-card\"><p style=\"margin: 2% 1% 1% 1%; font-size:25px\"><b><i class=\"fas fa-tasks\"></i> Progress</b></p>";
        foreach ($rez as $tutorial) {
            $title = $tutorial["title"];
            $score = $tutorial["score"];
            $progress = ($score / 4) * 100 - 5;
            $progress1 = $progress + 5; 
            echo "<p style=\"margin-left:1%\">$title</p>";
            echo "<div class=\"skill-bar\">";
            echo "<div class=\"progress-bar\" style=\"width:$progress%\">$progress1%</div>";
            echo "</div>";
            // <p><i class="fas fa-question-circle"></i>Quiz</p>
            // <div class="skill-bar">
            //     <div class="progress-bar" style="width:90%"> 10% </div>
            // </div>
        }

        // $results = json_decode($_SESSION["profileresults"]);
        // $firstname = $results["firstname"];
        // $lastname = $results["lastname"];
        // $mail = $results["email"];
        
        




        // <div class="progress-card">
        //<p><b><i class="fas fa-tasks"></i> Progress</b></p>
        // <p>My flower garden</p>
        // <div class="skill-bar">
        //     <div class="progress-bar" style="width:80%"> 80% </div>
        // </div>
        // <p>My private space</p>
        // <div class="skill-bar">
        //     <div class="progress-bar" style="width:50%"> 50% </div>
        // </div>
        // <p><i class="fas fa-question-circle"></i> Quiz</p>
        // <div class="skill-bar">
        //     <div class="progress-bar" style="width:30%"> 10% </div>
        //</div>  
        ?>    
        <div>
        <p style="text-align:center; margin-top:2%"><i><i class="fas fa-trophy"></i> Top 3 cei mai buni</i></p>
        <p style="text-align:center"><i>1.Nume/prenume; Scor obtinut</i> 100%</p>
        <p style="text-align:center"><i>2.Nume/prenume; Scor obtinut</i> 95%</p>
        <p style="text-align:center; margin-bottom:2%"><i>3.Nume/prenume; Scor obtinut</i> 90%</p>


        </div>
    </div>
    
</body>
