<?php
if (isset($_POST['login-submit']))
{

    require 'dbconnection.php';
    $email = $_POST['mail'];
    $password = $_POST['pwd'];

    if (empty($email) || empty($password))
    {
        header("Location: ./index.php?error=emptyfields");
        exit();
    }
    else
    {
        $sql = "SELECT * FROM users WHERE  email = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ./index.php?error=sqlerroratSelect");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result))
            {
                
                $pwdCheck = password_verify($password, $row['pwd']);
                if ($pwdCheck == false)
                {
                    header("Location: ./index.php?error=wrongpwd");
                    exit();
                }
                else if ($pwdCheck == true)
                {
                    session_start();
                    $_SESSION['userId']=$row['id'];
                    $id = $row['id'];	
	                $_SESSION['email']=$row['email'];	
	                $rezultate = mysqli_query($conn, "select quizID from tutorials where quizID not in (select quizID from quizresults where id = $id)");	
	                while($rez = mysqli_fetch_array($rezultate))	
	                    {   	
	                        $r = $rez['quizID'];	
	                        $score = mysqli_query($conn, "INSERT INTO quizresults(id, quizID, score) VALUES ($id, $r, NULL)");	
		
                        }
                    $type = mysqli_query($conn, "select `user-type` from users where id=$id");
                    $type = mysqli_fetch_array($type);
                    $type = $type["user-type"];
                    if($type == 1) { 
                        header("Location: ./indexAdmin.php?login=success");
                        exit();
                    }
                    else {  
                        header("Location: ./index.php?login=success");
                        exit();
                        }
                }
            }
            else
            {
                header("Location: ./index.php?error=nouser");
                exit();
            }
        }
    }
}
else
{
    header("Location: ./index.php");
    exit();
}