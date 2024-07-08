<?php

  require_once __DIR__ . "/GetConnection.php";
  require_once __DIR__ . "/Model/Comment.php";
  require_once __DIR__ . "/Repository/CommentRepository.php";

  use Repository\CommentRepositoryImpl;
  use Model\Comment;

  $connection = getConnection();
  $respository = new CommentRepositoryImpl($connection);
  $comment = new Comment(email: "kunchenosy@gmail.com", comment: "Hello");
  $newComment = $respository->insert($comment);
  var_dump($newComment);
  $connection = null;
