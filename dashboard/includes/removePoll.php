<?php

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  include ("connection.php");

  //--------------------------------------------------------------------------
  // 2) Get data from  var POST
  //--------------------------------------------------------------------------
  $idPoll = $_POST['id'];
  

  //--------------------------------------------------------------------------
  // 3) Query database for data
  //--------------------------------------------------------------------------
  $sql  = "DELETE FROM question WHERE id = {$idPoll}";

  $delete = mysql_query($sql); //execute query

  //--------------------------------------------------------------------------
  // 3) Confirm delet
  //--------------------------------------------------------------------------
  mysql_close($conn);

  if($delete) {
    print 'true';
  }else {
    print'false';
  }
  ?>