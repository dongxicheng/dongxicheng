<html>
<body>


<?php
    $con = mysql_connect("142.0.141.147:3306","a0219202038","22526525");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
    
    mysql_select_db("a0219202038", $con);
    
    if( mysql_query("UPDATE Persons SET LastName = '".$_POST['lastname']."'
                    WHERE FirstName = '".$_POST['firstname']."'") ){
        echo "update OK! <br/>";
    } else {
        die('Error: ' . mysql_error());
    }
    mysql_close($con);
?>

<?php include 'read.php'; ?>

</body>
</html>