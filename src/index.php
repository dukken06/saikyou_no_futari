<?php
    require_once(dirname(__FILE__) . '/dbconnect.php');
    $sql = 'SELECT * FROM events';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4期生熱中プロジェクト</title>
    <link rel="shortcut icon" href="./assets/img/favicon.ico">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/common.css">
    <link rel="stylesheet" href="./assets/css/event.css">
    <link rel="stylesheet" href="assets/css/ranking.css">
    <link rel="stylesheet" href="./assets/css/splide.min.css">
    <link rel="stylesheet" href="./assets/css/splide.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/script.js"></script>
</head>

<body>
    <header class="header">
        <h1 class="logo"><img src="assets/img/logo.svg" alt="ロゴ"></h1>
        <div class="catch-copy"><span><span
        class="txt-rotate"
        data-period="2000"
        data-rotate='[ "４期生お手軽リアイベ", "４期生お手軽リアイベ", "４期生お手軽リアイベ", "４期生お手軽リアイベ", "４期生お手軽リアイベ" ]'></span></span></div>
    </header>
    <!-- splide -->
    <main>
        <!-- <section class="splide" aria-label="Splideの基本的なHTML">

        </section> -->
        <!-- event -->


        <section class="event-list">
            <div class="wrapper">
                <div class="lead">
                    <div class="lead-title">４期生熱中リアイベプログラム</div>
                    <p>４期生が一体して熱中するために必要な要素を盛り込んだ様々なイベントの例を部門別に掲載！！</p>
                </div>
                <section class="menu-category">
                <h2 class="heading02 heading02--menu"><span>４期生の絆がマリアナ海溝イベント✨</span></h2>
                <ul class="menu-wrap">
                    <?php foreach($events as $event) { ?>
                    <li class="menu">
                        <a href="./detail/detail.php?event=<?= $event['id'] ?>">
                            <div class="menu-img">
                                <img src="./assets/img/event/action/<?= $event['image'] ?>" alt=""></div>
                        </a>
                        <div class="menu-name-en"><?= $event['title'] ?></div>
                        <p class="menu-name-ja">評価</p>
                        <div class="menu-price">
                            <span>仲良くなれ度</span>
                            <span><?= $event['friendly'] ?></span>
                        </div>
                        <div class="menu-price">
                            <span>誘いやすさ</span>
                            <span><?= $event['easy'] ?></span>
                        </div>
                        <div class="menu-price">
                            <span>コード力</span>
                            <span><?= $event['code'] ?></span>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
                </section>
                <!-- ranking -->
                <section class="ranking">
                    <h2 class="section-title">Ranking</h2>
                    <div class="ranking-inner">
            <!-- <div class="slideshow-container"> -->
                <div class="ranking-content">
                    <img src="assets/img/ranking01.jpg" alt="" width="250px" height="100px">
                    <!-- <h2 id="pic-title">Enjoy pictures!</h2>
                    <button id="playButton" onclick="playSlidedeshow();">PLAY</button>  -->
                    <div class="sentence-wrapper">
                        <p class="ranking-sentence2">✨毎月ポイント数上位者を発表します！✨</p>
                    </div>
                </div>
            <!-- </div> -->
                <p class="ranking-sentence">それに加えて！！</p>
                <div class="ranking-content">
                    <img src="assets/img/present.png" alt="" class="ranking-img2" width="200px" height="200px">
                    <div class="sentence-wrapper">
                    <p class="ranking-sentence2">なんと一位には景品をプレゼントしちゃいます！！</p>
                    <p class="ranking-sentence2">お楽しみに(^▽^)/</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="create_event">
            <a href="create_event.php">イベント作成</a>
        </div>
    </main>
    <!-- footer -->
    <footer class="footer">
        <div class="footer-inner">
            <a href="./" class="footer-logo">
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
    <!-- <script src="./assets/js/splide.min.js"></script> -->
    <!-- <script src="assets/js/script.js"></script> -->
</body>
</html>