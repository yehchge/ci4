CREATE TABLE employees (
    id int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
    name varchar(100) NOT NULL COMMENT 'Name',
    email varchar(255) NOT NULL COMMENT 'Email Address',
    PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table' AUTO_INCREMENT=1;

TRUNCATE employees;

INSERT INTO `employees` (`id`, `name`, `email`) VALUES
(1, 'John Doe', 'john@gmail.com'),
(2, 'Vanya Hargreeves', 'vanya@gmail.com'),
(3, 'Luther Hargreeves', 'luther@gmail.com'),
(4, 'Diego Hargreeves', 'diego@gmail.com'),
(5, 'Klaus Hargreeves', 'klaus@gmail.com'),
(6, 'Ben Hargreeves', 'ben@gmail.com'),
(7, 'The Handler', 'handler@gmail.com');
