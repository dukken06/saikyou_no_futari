<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>イベント作成</title>
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/common.css">
  <link rel="stylesheet" href="assets/css/create.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <header>
    <h1 class="logo"><img src="assets/img/logo.svg" alt="ロゴ"></h1>
    <div class="catch-copy">
      <span>イベント作成ページ</span>
    </div>
  </header>
  <main>
    <h2 class="mb-4 font-semibold text-lg text-center">イベント作成</h2>
    <form method="post" action="assets/admin/create_event.php" enctype="multipart/form-data">
      <div class="mb-4">
        <label for="title" class="form-label font-semibold">タイトル：</label>
        <input type="text" name="title" id="title"
          class="form-control required h-12 px-4 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-purple-500"
          placeholder="イベントタイトルを入力してください">
      </div>
      <div class="mb-4">
        <label for="image" class="form-label font-semibold">イベントの画像</label>
        <input type="file" name="image" id="image"
          class="form-control required mt-3">
      </div>
      <div class="mb-4">
        <label for="friendly" class="font-semibold">仲良くなり度：</label>
        <select name="friendly" id="friendly" class="required px-4 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-purple-500">
          <option selected></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      <div class="mb-4">
        <label for="easy" class="font-semibold mr-4">誘いやすさ：</label>
        <select name="easy" id="easy" class="required px-4 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-purple-500">
          <option selected></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      <div class="mb-4">
        <label for="code" class="font-semibold mr-8">コード力：</label>
        <select name="code" id="code" class="required px-4 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-purple-500">
          <option selected></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      <div class="mb-4">
        <label for="purpose" class="form-label font-semibold">目的：</label>
        <input type="text" name="purpose" id="purpose"
          class="form-control required h-8 px-2 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-purple-500"
          placeholder="イベントの目的を入力してください">
      </div>
      <div class="mb-4">
        <label for="cost" class="form-label font-semibold">費用：</label>
        <input type="text" name="cost" id="cost"
          class="form-control required h-8 px-2 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-purple-500"
          placeholder="費用を入力してください">
      </div>
      <div class="mb-4">
        <label for="hours" class="form-label font-semibold">所要時間：</label>
        <input type="text" name="hours" id="hours"
          class="form-control required h-8 px-2 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-purple-500"
          placeholder="所要時間を入力してください">
      </div>
      <div class="mb-4">
        <label for="place" class="form-label font-semibold">開催場所：</label>
        <input type="text" name="place" id="place"
          class="form-control required h-8 px-2 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-purple-500"
          placeholder="開催場所を入力してください">
      </div>
      <div class="mb-4">
        <label for="date" class="form-label font-semibold">開催日時：</label>
        <input type="datetime-local" name="date" id="date"
          class="form-control required h-8 px-2 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-purple-500"
          placeholder="開催日時を入力してください">
      </div>
      <div class="mb-4">
        <label for="access" class="form-label font-semibold">集合場所：</label>
        <input type="text" name="access" id="access"
          class="form-control required h-8 px-2 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-purple-500"
          placeholder="集合場所を入力してください">
      </div>
      <div class="mb-4">
        <label for="access_url" class="form-label font-semibold">マップURL：</label>
        <input type="text" name="access_url" id="access_url"
          class="form-control required h-8 px-2 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-purple-500"
          placeholder="開催場所を入力してください">
      </div>
      <div class="mb-4">
        <label for="belongings" class="form-label font-semibold">持ち物：</label>
        <input type="text" name="belongings" id="belongings"
          class="form-control required h-8 px-2 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-purple-500"
          placeholder="持ち物を入力してください">
      </div>
      <div class="mb-4">
        <label for="participate" class="form-label font-semibold">参加方法：</label>
        <input type="text" name="participate" id="particiate"
          class="form-control required h-8 px-2 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-purple-500"
          placeholder="参加方法を入力してください">
      </div>
      <button type="submit" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 submit-button">送信</button>
    </form>
  </main>
  <footer>
    <div class="footer-inner">
      <a href="./index.php" class="footer-logo">
        <img src="./assets/img/logo.svg" alt="">
      </a>
      <a href="#" class="footer-corporateLink" target="_blank" rel="noopener noreferrer">POSSE1 4.0</a>
      <ul class="footer-snslist">
        <li class="footer-snsitem">
          <a href="https://line.me/ti/g/w-Yqn54bJ5" class="footer-snsitem" target="_blank" rel="noopener noreferrer">
            <img src="./assets/img/icon-line.svg" alt="">
          </a>
        </li>
        <li class="footer-snslist">
          <a href="htpps://www.instagram.com/1stinposse_private.memories" class="footer-snsitem" target="_blank" rel="noopener noreferrer">
            <img src="./assets/img/icon-instagram.png" alt="">
          </a>
        </li>
      </ul>
    </div>
    <div class="footer-copyright">
      <small lang="en">&copy 2023 POSSE</small>
    </div>
  </footer>
</body>
</html>