DROP DATABASE IF EXISTS webapp;

CREATE DATABASE webapp;
USE webapp;

CREATE TABLE languages (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  color VARCHAR(255) NOT NULL
);

INSERT INTO languages VALUES
(1, 'HTML', '#0345EC'),
(2, 'CSS', '#2272BE'),
(3, 'JavaScript', '#4EBEDF'),
(4, 'PHP', '#54CEF6'),
(5, 'Laravel', '#B29EF3'),
(6, 'SQL', '#6D46EC'),
(7, 'SHELL', '#5045F0'),
(8, '情報システム基礎', '#3635C0');

CREATE TABLE hours (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  date DATE NOT NULL,
  hours INTEGER NOT NULL
);

INSERT INTO hours VALUES
(1, '2023-09-28', 5),
(2, '2023-09-29', 6),
(3, '2023-09-30', 4),
(4, '2023-10-01', 7),
(5, '2023-10-02', 5),
(6, '2023-10-03', 6),
(7, '2023-10-04', 8),
(8, '2023-10-05', 5),
(9, '2023-10-06', 6),
(10, '2023-10-07', 7);

CREATE TABLE languages_hours (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  language_id INTEGER NOT NULL REFERENCES languages(id),
  hours_id INTEGER NOT NULL REFERENCES hours(id)
);

INSERT INTO languages_hours VALUES
(1, 1, 1),
(2, 1, 6),
(3, 1, 11),
(4, 2, 2),
(5, 2, 7),
(6, 2, 12),
(7, 3, 3),
(8, 3, 8),
(9, 3, 13),
(10, 4, 4),
(11, 4, 9),
(12, 4, 14),
(13, 5, 5),
(14, 5, 10),
(15, 5, 15);

CREATE TABLE contents (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  color VARCHAR(255) NOT NULL
);

INSERT INTO contents VALUES
(1, 'N予備校', '#0345EC'),
(2, 'ドットインストール', '#2272BE'),
(3, 'POSSE課題', '#4EBEDF');

CREATE TABLE contents_hours (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  content_id INTEGER NOT NULL REFERENCES contents(id),
  hours_id INTEGER NOT NULL REFERENCES hours(id)
);

INSERT INTO contents_hours VALUES
(1, 1, 1),
(2, 1, 6),
(3, 1, 11),
(4, 2, 2),
(5, 2, 7),
(6, 2, 12),
(7, 3, 3),
(8, 3, 8),
(9, 3, 13),
(10, 4, 4),
(11, 4, 9),
(12, 4, 14),
(13, 5, 5),
(14, 5, 10),
(15, 5, 15);
