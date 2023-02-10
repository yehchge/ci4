CREATE TABLE pgusers (
    id int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
    name varchar(100) NOT NULL COMMENT 'Name',
    email varchar(255) NOT NULL COMMENT 'Email Address',
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table' AUTO_INCREMENT=1;
INSERT INTO `pgusers` (`id`, `name`, `email`) VALUES
(1, 'Paul Bettany', 'paul@gmail.com'),
(2, 'Vanya', 'vanya@gmail.com'),
(3, 'Luther', 'luther@gmail.com'),
(4, 'John Doe', 'john@gmail.com'),
(5, 'Paul Bettany', 'paul@gmail.com'),
(6, 'Vanya', 'vanya@gmail.com'),
(7, 'Luther', 'luther@gmail.com'),
(8, 'Wayne Barrett', 'wayne@gmail.com'),
(9, 'Vincent Ramos', 'ramos@gmail.com'),
(10, 'Susan Warren', 'sussan@gmail.com'),
(11, 'Jason Evans', 'jason@gmail.com'),
(12, 'Madison Simpson', 'madison@gmail.com'),
(13, 'Marvin Ortiz', 'paul@gmail.com'),
(14, 'Felecia Phillips', 'felecia@gmail.com'),
(15, 'Tommy Hernandez', 'hernandez@gmail.com');
