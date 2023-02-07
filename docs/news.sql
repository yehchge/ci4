CREATE TABLE `news` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(128) NOT NULL COLLATE 'utf8mb4_general_ci',
    `slug` VARCHAR(128) NOT NULL COLLATE 'utf8mb4_general_ci',
    `body` TEXT NOT NULL COLLATE 'utf8mb4_general_ci',
    PRIMARY KEY (`id`) USING BTREE,
    INDEX `slug` (`slug`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB;

INSERT INTO `news` (`title`, `slug`, `body`) VALUES ('Elvis sighted', 'elvis-sighted', 'Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.');
INSERT INTO `news` (`title`, `slug`, `body`) VALUES ('Say it isn\'t so!', 'say-it-isnt-so', 'Scientists conclude that some programmers have a sense of humor.');
INSERT INTO `news` (`title`, `slug`, `body`) VALUES ('Caffeination, Yes!', 'caffeination-yes', 'World\'s largest coffee shop open onsite nested coffee shop for staff only.');
INSERT INTO `news` (`title`, `slug`, `body`) VALUES ('Tutorial Completed', 'tutorial-completed', 'A developer in Spuzzum reported that he\r\nsuccessfully completed the CodeIgniter\r\ntutorial!');
