<?php
$connection = mysqli_connect('localhost', 'root', '');
if(!$connection)
{
echo '<p>Cannot connect now<p>';
exit();
}
if (!mysqli_select_db($connection,'CarHouse')){
exit ('Cannot choose database.');
}
else
print 'Connected :)';
?>