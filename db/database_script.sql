--
-- Table structure for table `emp_master`
--


CREATE TABLE `emp_master` (
  `emp_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `basic_salary` decimal(10,2) NOT NULL,
  PRIMARY KEY (`emp_id`)
);

--
-- Dumping data for table `emp_master`
--


INSERT INTO `emp_master` VALUES (101,'Amit Sahoo',15600.00);
INSERT INTO `emp_master` VALUES (102,'Sunil Das',18100.00);
INSERT INTO `emp_master` VALUES (103,'Debasis Nayak',12500.00);
INSERT INTO `emp_master` VALUES (104,'Naresh Lenka',11300.00);
INSERT INTO `emp_master` VALUES (105,'Sumanta Patra',10800.00);

--
-- Table structure for table `salary_dtls`
--


CREATE TABLE `salary_dtls` (
  `id` int NOT NULL AUTO_INCREMENT,
  `emp_id` int DEFAULT NULL,
  `month` int NOT NULL,
  `year` int NOT NULL,
  `hra` decimal(6,2) NOT NULL,
  `da` decimal(6,2) NOT NULL,
  `ta` decimal(6,2) NOT NULL,
  `pf` decimal(6,2) NOT NULL,
  `net_salary` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `dfdgdg_idx` (`emp_id`),
  CONSTRAINT `sal_emp_emp_id_fk` FOREIGN KEY (`emp_id`) REFERENCES `emp_master` (`emp_id`)
) ;
