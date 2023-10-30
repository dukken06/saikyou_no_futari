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
      $date = DateTime::createFromFormat('Y-m-d', $_POST['date']);
      if ($date === false) {
        echo '日時の形式が正しくありません。';
        exit;
      }
      $formatted_date = $date->format('Y-m-d');
      $stmt = $dbh->prepare('INSERT INTO events(title, image, friendly, easy, code, purpose, cost, hours, place, date, access, access_url, belongings, participate) VALUES(:title, :image, :friendly, :easy, :code, :purpose, :cost, :hours, :place, :date, :access, :access_url, :belongings, :participate)');
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