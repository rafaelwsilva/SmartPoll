<?php

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
include ("connection.php");

  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------

$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['password']);

$sql  = "SELECT * FROM user where email = '$email' and password = '$password'";

$result = mysql_query($sql); //execute query


if (mysql_num_rows($result) == 1 ) {

  print '1';

} else {

  print '0';
}
?>

