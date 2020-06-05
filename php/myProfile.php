<?php

require "header.php";

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/myProfile.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title> MyProfile</title>
</head>

<body>
    <div class="profile-card">
        <div class="image-container">
            <img src="../images/profile1.jpg" style="width:100% " alt="">
            <div class="title">
                <h2>Date personale</h2>
            </div>
        </div>
        <div class="main-container">
            <p class="info"></p>
            <hr>

            <p class="info"><i class="fas fa-home"></i> Jane Dare</p>
            <p class="info"><i class="fas fa-envelope-square"></i> janedare@gmail.com </p>
            <p class="info"><i class="fas fa-tasks"></i> 60% progres total </p>

            <!-- <p class="info"><i class="fas fa-phone"></i> 0745 219 320</p> -->
        </div>
    </div>
    <div class="progress-card">
        <p><b><i class="fas fa-tasks"></i> Progress</b></p>
        <hr><br>
        <p>My flower garden</p>
        <div class="skill-bar">
            <div class="progress-bar" style="width:80%"> 80% </div>
        </div>
        <p><i class="fas fa-question-circle"></i> </i>Quiz</p>
        <div class="skill-bar">
            <div class="progress-bar" style="width:90%"> 10% </div>
        </div>
        <p>My private space</p>
        <div class="skill-bar">
            <div class="progress-bar" style="width:50%"> 50% </div>
        </div>
        <p><i class="fas fa-question-circle"></i> Quiz</p>
        <div class="skill-bar">
            <div class="progress-bar" style="width:30%"> 10% </div>
        </div>      
        <div>
        <p style="text-align:center"><i><i class="fas fa-trophy"></i> Top 3 cei mai buni</i></p>
        <p style="text-align:center"><i>1.Nume/prenume; Scor obtinut</i> 100%</p>
        <p style="text-align:center"><i>2.Nume/prenume; Scor obtinut</i> 95%</p>
        <p style="text-align:center"><i>3.Nume/prenume; Scor obtinut</i> 90%</p>


        </div>
        <?php
            if (!isset($_SESSION['userId']))
            {
                header("Location: ./index.php");
                exit();
            }
        ?>
    </div>
    
</body>
