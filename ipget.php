<?php
    $con = mysql_connect("142.0.141.147:3306","a0219202038","22526525");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
    
    mysql_select_db("a0219202038", $con);
    
    $result = mysql_query("SELECT * FROM Persons
    WHERE FirstName='ip'");

    while($row = mysql_fetch_array($result))
    {
        echo "[TAG_IP]" . $row['FirstName'] . ":" . $row['LastName'];
        echo "<br/>";
    }
?>