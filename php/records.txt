--
-- Table structure for table `players`
--

CREATE TABLE `players` (
 `id` int(11) NOT NULL auto_increment,
 `firstname` varchar(32) NOT NULL,
 `lastname` varchar(32) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `players`
--

INSERT INTO `players` VALUES(1, 'Bob', 'Baker');
INSERT INTO `players` VALUES(2, 'Tim', 'Thomas');
INSERT INTO `players` VALUES(3, 'Rachel', 'Roberts');
INSERT INTO `players` VALUES(4, 'Sam', 'Smith');