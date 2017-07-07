<html>
<body>


<?php
    $con = mysql_connect("142.0.141.147:3306","a0219202038","22526525");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
    
    mysql_select_db("a0219202038", $con);
    
    mysql_query("DELETE FROM Persons WHERE FirstName = '".$_POST['firstname']."'");
    
    mysql_close($con);
    ?>

<?php include 'read.php'; ?>

</body>
</html>