<?php
$this_filename = $_SERVER['PHP_SELF'];
?>
<html>
<body>
<form action="<?php echo $this_filename; ?>" method="post">
Give car info: <br>
Register number:<br>
<input type="text" name="reg" size="10"> <br>
Make: <br>
<input type="text" name="make" size="30"> <br>
Color: <br>
<input type="text" name="color" size="10"> <br>
Yearmodell:<br>
<input type="text" name="year" size="5"> <br>
Mileage:<br>
<input type="text" name="miles" size="10"> <br>
Submit:<br>
<input type="submit" value="Submit"> <br>
Clear:<br>
<input type="reset" value="Clear All">
</form>
<?php
// extra feature car color
include 'db_connection.php';
if (isset($_POST['reg']))
{ $m1 = $_POST['reg']; }
if (isset($_POST['make']))
$m2 = $_POST['make'];
if (isset($_POST['color']))
$color = $_POST['color'];
if (isset($_POST['year']))
$m3 = $_POST['year'];
if (isset($_POST['miles']))
$m4 = $_POST['miles'];
settype($m3, "int");settype($m4, "int");
if (isset($_POST['reg']))
{
$sql =
"INSERT INTO `cars`(`regnr`, `make`, `color`, `yearmodel`,`mileage` ) VALUES ('$m1','$m2', '$color', $m3,$m4)";
if (mysqli_query($connection, $sql)) {
echo '<p>Data added.</p>';
}
else
{
echo '<p>Failed: ';
// echo $sql; for testing ...
}
}
?>
