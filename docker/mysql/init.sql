DROP DATABASE IF EXISTS futari;

CREATE DATABASE futari;
USE futari;

CREATE TABLE events (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  image VARCHAR(255) NOT NULL,
  friendly INT NOT NULL,
  easy INT NOT NULL,
  code INT NOT NULL,
  purpose VARCHAR(255) NOT NULL,
  cost VARCHAR(255) NOT NULL,
  hours VARCHAR(255) NOT NULL,
  place VARCHAR(255) NOT NULL,
  date DATE NOT NULL,
  access VARCHAR(255) NOT NULL,
  access_url VARCHAR(255) NOT NULL,
  belongings VARCHAR(255) NOT NULL,
  participate VARCHAR(255) NOT NULL
);

INSERT INTO events VALUES
(1, 'みんなでご飯', 'event01.jpg', 4, 5, 1, 'おいしいご飯を食べながらメンバー間の理解を深めよう！', '1000円程度', '1~2時間', '渋谷', '2023-10-30', '渋谷駅', 'https://maps.app.goo.gl/NiTjRRZgyypGuxkz8', 'お金', 'LINEの投票に参加してください！'),
(2, 'カラオケ', 'event02.jpg', 4, 4, 1, 'カラオケをして、メンバー間の理解を深めよう！', '1000円程度', '1~2時間', '渋谷', '2023-10-30', '渋谷駅', 'https://maps.app.goo.gl/NiTjRRZgyypGuxkz8', 'お金', 'LINEの投票に参加してください！'),
(3, 'ショッピング', 'event03.jpeg', 3, 3, 1, 'ショッピングをしながらメンバー間の理解を深めよう！', '1000円程度', '1~2時間', '渋谷', '2023-10-30', '渋谷駅', 'https://maps.app.goo.gl/NiTjRRZgyypGuxkz8', 'お金', 'LINEの投票に参加してください！'),
(4, 'ボウリング', 'event04.jpg', 4, 4, 1, 'ボウリングを食べながらメンバー間の理解を深めよう！', '1000円程度', '1~2時間', '渋谷', '2023-10-30', '渋谷駅', 'https://maps.app.goo.gl/NiTjRRZgyypGuxkz8', 'お金', 'LINEの投票に参加してください！');