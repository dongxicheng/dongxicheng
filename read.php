<html>
<body>


<?php
    $con = mysql_connect("142.0.141.147:3306","a0219202038","22526525");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
    
    mysql_select_db("a0219202038", $con);
    
    $result = mysql_query("SELECT * FROM Persons");
    
    while($row = mysql_fetch_array($result))
    {
        echo $row['FirstName'] . "  :  " . $row['LastName'];
        echo "<br/>";
    }
    
    mysql_close($con);
    ?>


</body>
</html>