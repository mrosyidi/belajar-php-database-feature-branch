<?php

  require_once __DIR__ . "/GetConnection.php";

  $connection = getConnection();
  $connection->exec("INSERT INTO comments(email, comment) VALUES('eko@test.com','hi')");
  $id = $connection->lastInsertId();
  var_dump($id);
  $connection = null;
