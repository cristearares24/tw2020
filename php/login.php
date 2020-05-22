<?php

require "header.php";

?>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style/login.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Ghid pentru curți și grădini</title>
<body>
    <div class="container">
    <form action="loginback.php" method="post">
        <div id="name">Email</div>
        <input class="inputForm" type="text" name="mail" placeholder="Email ... ">

        <div id="pass">Parola</div>
        <input class="inputForm" type="password" name="pwd" placeholder="Parola ... ">
        
        <button type="submit" name="login-submit">Login</button>
        <p>
            You don't have an accout yet? <a href="./signup.php">Register here</a>
        </p>
    </form>
    </div>
</body>

<?php

require "footer.php";

?>