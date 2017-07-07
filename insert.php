<html>
<body>


<?php
    $con = mysql_connect("142.0.141.147:3306","a0219202038","22526525");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
    
    mysql_select_db("a0219202038", $con);
    
    $sql="INSERT INTO Persons (FirstName, LastName, Age)
    VALUES
    ('$_POST[firstname]','$_POST[lastname]','0')";
    
    if (!mysql_query($sql,$con))
    {
        die('Error: ' . mysql_error());
    }
    echo "1 record added! <br/>";
    
    mysql_close($con)
    ?>

<?php include 'read.php'; ?>


</body>
</html>