<?php
    require 'dbconnection.php';
    $id = $_GET["userId"];
    $id = mysqli_real_escape_string($conn, $id);
    $stmt = mysqli_stmt_init($conn);
    $stmt = mysqli_prepare($conn, "select qr.quizID, tut.title, qr.score, us.firstname, us.lastname, us.email from quizresults qr RIGHT OUTER JOIN tutorials tut on tut.quizID = qr.quizID join users us on us.id = qr.id where qr.id = ? or qr.id is null");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $rez = mysqli_stmt_get_result($stmt);
    if($rez) {
        $myArray = array();
        while($row = mysqli_fetch_assoc($rez))
                    $myArray[] = $row;
        echo json_encode($myArray);
    }
    mysqli_stmt_close($stmt);
