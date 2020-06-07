<?php

$web_url = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
$profile_url ="/myProfile.php?id=";
$str = "<?xml version = '1.0' ?>";
$str .= "<rss version = '2.0' >";
    $str .= "<channel>";
        $str .= "<title> My website</title>";
        $str .= "<description>Something here</description>";
        $str .= "<language> en-US </language>";    
        $str .= "<link> $web_url</link>";

        $uservername="localhost";
        $dBUusername="root";
        $dBPassword="";
        $dbname ="gartdb";
        
        
        $conn = mysqli_connect($uservername, $dBUusername,$dBPassword,$dbname);
        if(!$conn)
        {
            die("Connection failed: ".mysqli_connect_error());
        }
        $result = mysqli_query($conn, "SELECT * FROM users ORDER BY id ASC ");
        
        while($row = mysqli_fetch_object($result)){
            $str .="<item>";
                $str .= "<title>.$row->firstname.</title>";
                $str .= "<description>.$row->lastname.</description>";
                // $str .= "<link> . $row->email . </link>";
                $str .= "<link>.$web_url.$profile_url.$row->id.</link>";
            $str .="</item>";
        }



    $str .= "</channel>";
$str .= "</rss>";

file_put_contents("rss.xml", $str);
header("Location: ./myProfile.php");
exit();
?>

<!-- taget se dechide in alta pagina. -->
<a href="rss.xml" target="_blank">
   <img src="../images/rss.png" style="width:50px;height:50px;"> 
</a>