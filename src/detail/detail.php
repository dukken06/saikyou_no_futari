<?php
    require_once(dirname(__FILE__) . '/../dbconnect.php');
    if(isset($_GET['event'])) {
        $sql = 'SELECT * FROM events WHERE id = :id';
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":id", (int)$_GET['event'], PDO::PARAM_INT);
        $stmt->execute();
        $event = $stmt->fetch(PDO::FETCH_ASSOC);
        // 日時のフォーマットを変更
        $event['date'] = date('Y年m月d日h:i', strtotime($event['date']));
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>四期生熱中プロジェクト | 詳細ページ</title>
    <link rel="shortcut icon" href="../assets/img/favicon.ico">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/detail.css">
    <link rel="stylesheet" href="../assets/css/event.css">
    <!-- <link rel="stylesheet" href="assets/css/ranking.css"> -->
</head>

<body>
    <header class="header01">
        <h1 class="logo"><img src="../assets/img/logo.svg" alt="ロゴ"></h1>
        <div class="catch-copy">
            <span>イベント詳細</span>
        </div>
    </header>

    <main class="main">
        <div class="wrapper">
            <section class="section-access">
            <h2 class="heading02"><span><?= $event['title'] ?></span></h2>
            <div class="access-img">
                <img src="../assets/img/event/action/<?= $event['image'] ?>" alt="">
            </div>
            <address class="address">
                <dl>
                    <P class="detail">目的</P>
                    <dd class="access-desc">
                        <div class="access-name"><?= $event['purpose'] ?></div>
                        <div class="address">
                            <div class="address-text">
                                <div class="event-detail">
                                    <span>費用</span>
                                    <span><?= $event['cost'] ?><span>
                                </span></span></div>
                                <div class="event-detail">
                                    <span>所要時間</span>
                                    <span><?= $event['hours'] ?></span>
                                </div>
                                <div class="event-detail">
                                    <span>場所</span>
                                    <span><?= $event['place'] ?></span>
                                </div>
                                <!-- <div class="event-detail">
                                    <span>招待ポイント</span>
                                    <span>2pt</span>
                                </div>
                                <div class="event-detail">
                                    <span>参加ポイント</span>
                                    <span>1pt</span>
                                </div> -->
                                <br>
                                <div class="menu-name-en">
                                    <h2>招待文テンプレート</h2>
                                    <span>開催日時：<?= $event['date'] ?>〜<br></span>
                                    <span>会場：<?= $event['place'] ?><br></span>
                                    <span>アクセス：<a href="<?= $event['access_url'] ?>"><?= $event['access'] ?></a><br></span>
                                    <span>参加費：<?= $event['cost'] ?><br></span>
                                    <span>持ち物：<?= $event['belongings'] ?><br></span>
                                    <span>申し込み方法：<?= $event['participate'] ?><br></span>
                                </div>
                                
                                
                            </div>
                        </div>
                    </dd>
                </dl>
            </address>
            <button class="btn">
                <a class="btn-letter" href="https://line.me/ti/g/an5-D_d058">招待はこちらから！！</a>
            </button>
        </section>
        </div><!-- wrapper -->
    </main>

        <!-- footer -->
        <footer class="footer">
            <div class="footer-inner">
                <a href="./" class="footer-logo">
                    <img src="../assets/img/logo.svg" alt="">
                </a>
                <a href="#" class="footer-corporateLink" target="_blank" rel="noopener noreferrer">POSSE1 4.0</a>
                <ul class="footer-snslist">
                    <li class="footer-snsitem">
                        <a href="https://line.me/ti/g/w-Yqn54bJ5" class="footer-snsitem" target="_blank" rel="noopener noreferrer">
                            <img src="../assets/img/icon-line.svg" alt="">
                        </a>
                    </li>
                    <li class="footer-snslist">
                        <a href="htpps://www.instagram.com/1stinposse_private.memories" class="footer-snsitem" target="_blank" rel="noopener noreferrer">
                            <img src="../assets/img/icon-instagram.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-copyright">
                <small lang="en">&copy 2023 POSSE</small>
            </div>
        </footer>
        <script src="../assets/js/script.js"></script>
    </body>
    </html>