<?php
//namespace app\data;

// class DB
// {
// $dbh = new PDO('pgsql:host=db; dbname=postgres', USER, );
// $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// //return $dbh;
// } 

function databaseConnection()
{
  $dbh = new PDO('pgsql:host=db; dbname=postgres', USER, PASS);
  // return $dbh;
  if ($dbh) {
    $h = "Connected to the  database successfully!";
    return  print_r($h);
  } else {
    return (print_r("Having connection problems"));
  }
}
