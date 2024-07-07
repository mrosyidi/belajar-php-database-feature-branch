<?php

  require_once __DIR__ . "/GetConnection.php";

  $connection = getConnection();
  $connection->beginTransaction();
  $connection->exec("INSERT INTO comments(email, comment) VALUES('eko@tst.com', 'hi')");
  $connection->exec("INSERT INTO comments(email, comment) VALUES('eko@tst.com', 'hi lagi')");
  $connection->exec("INSERT INTO comments(email, comment) VALUES('eko@tst.com', 'hi juga')");
  $connection->exec("INSERT INTO comments(email, comment) VALUES('eko@tst.com', 'hi lagi')");
  $connection->exec("INSERT INTO comments(email, comment) VALUES('eko@tst.com', 'hi juga')");
  $connection->commit();
  $connection = null;
