CREATE TABLE IF NOT EXISTS `pagseguro_transactions` (
        `transaction_code` varchar(36) NOT NULL,
        `name` varchar(200) DEFAULT NULL,
        `payment_method` varchar(50) NOT NULL,
        `status` varchar(50) NOT NULL,
        `item_count` int(11) NOT NULL,
        `data` datetime NOT NULL,
        UNIQUE KEY `transaction_code` (`transaction_code`,`status`),
        KEY `name` (`name`),
        KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;