<?php
//bonus feature car color 
include "db_connection.php";
$sql = "CREATE TABLE cars (
    regnr varchar(10),
    make varchar(30),
    color varchar(10),
    yearmodel int,
    mileage int
    );";

    if (mysqli_query($connection, $sql)){
echo '<p>Table created.</p>';
    }
    else
    {
echo '<p> Failed: check the sql:';
echo $sql;
    }
?>