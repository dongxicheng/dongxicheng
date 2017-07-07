<html>
<body>

<?php
$con = mysql_connect("142.0.141.147:3306","a0219202038","22526525");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


// Create table in my_db database
mysql_select_db("a0219202038", $con);
    $sql = "CREATE TABLE Persons
    (
     personID int NOT NULL AUTO_INCREMENT,
     PRIMARY KEY(personID),
     FirstName varchar(128),
     LastName varchar(128),
     Age int
     )";
mysql_query($sql,$con);

mysql_close($con);
?>



</body>
</html>