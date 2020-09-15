-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(35) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`) VALUES
(1, 'Galaxy Jmax'),
(2, 'Killer Note5'),
(3, 'Asus ZenFone2'),
(4, 'Moto Xplay'),
(5, 'Lenovo Vibe k5 Plus'),
(6, 'Redme Note 3'),
(7, 'LeEco Le 2'),
(8, 'Apple iPhone 6S Plus');