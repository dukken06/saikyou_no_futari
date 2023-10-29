<?php
  require_once(dirname(__FILE__) . '/../../dbconnect.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
      $image = $_FILES['image'];
      $ext = strrchr($image['name'], '.');
      // その他のコード...
      // ランダムなidを生成し、ファイル名の先頭に付与する
      $image_name = uniqid(mt_rand(), true) . '.' . substr(strrchr($_FILES['image']['name'], '.'), 1);
      // ディレクトリを指定する
      $image_path = dirname(__FILE__) . '/../img/event/action/' . $image_name;
      move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
      $date = DateTime::createFromFormat('Y-m-d h:i', $_POST['date']);
      if (isset($date)) {
        $formatted_date = $date->format('Y-m-d H:i:s');
      }
      print_r($formatted_date);
      $stmt = $dbh->prepare('INSERT INTO events(title, image, friendly, easy, code, purpose, cost, hours, place, date, access, access_url, belongings, participate) VALUES(title=:title, image=:image, friendly=:friendly, easy=:easy, code=:code, purpose=:purpose, cost=:cost, hours=:hours, place=:place, date=:date, access=:access, access_url=:access_url, belongings=:belongings, participate=:participate)');
      $stmt->execute([
        ':title' => $_POST['title'],
        ':image' => $image_name,
        ':friendly' => $_POST['friendly'],
        ':easy' => $_POST['easy'],
        ':code' => $_POST['code'],
        ':purpose' => $_POST['purpose'],
        ':cost' => $_POST['cost'],
        ':hours' => $_POST['hours'],
        ':place' => $_POST['place'],
        ':date' => $formatted_date,
        ':access' => $_POST['access'],
        ':access_url' => $_POST['access_url'],
        ':belongings' => $_POST['belongings'],
        ':participate' => $_POST['participate']
      ]);
      $lastInsertId = $dbh->lastInsertId();
      header("Location: ../../create_event.php");
    } else {
      echo 'ファイルがアップロードされていません。';
    }
  }