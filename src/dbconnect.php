<?php
  $dsn = 'mysql:dbname=futari;host=db;charset=utf8';
  $user = 'root';
  $password = 'root';

  // PDOクラスのインスタンス（特定のクラスから作成されたオブジェクト）化
  $dbh = new PDO($dsn, $user, $password);