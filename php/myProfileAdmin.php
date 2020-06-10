
<?php

require "headerAdmin.php";

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
            echo "<script>alert('Trebuie sa fiti conectat pentru a putea accesa pagina.'); window.location.assign('./indexAdmin.php');</script>";             
            // header("Location: ./index.php");
            exit();
        }

        $fullRez = json_decode($_POST["profileresults"], true);


        $rez = $fullRez["stats"];
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
            $progress = ($score / 4) * 100 ;
            echo "<p style=\"margin-left:1%\">$title</p>";
            echo "<div class=\"skill-bar\">";
            echo "<div class=\"progress-bar\" style=\"width:$progress%\">$progress%</div>";
            echo "</div>";
        }
        ?>    
        <div>
        <p style="text-align:center; margin-top:2%"><i><i class="fas fa-trophy"></i> Top 3 cei mai buni</i></p>
        <?php
        $top = $fullRez["top"];
        $count = 0;
        foreach($top as $user)
        {
            $count += 1;
            $firstname = $user["firstname"];
            $lastname = $user["lastname"];
            $score = $user["score"];
            if($count <= 5 && !empty($score))
                echo "<p style=\"text-align:center\"><i>$count. $firstname $lastname: </i> $score</p>";
        }
        ?>
        <img onclick="window.open('./rss.php')" name="rss-image" src="../images/rss.png" style="width:50px;height:50px;"> 
        </div>
    </div>
    
</body>