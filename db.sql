CREATE TABLE `dtb_visitors` (
  `visitor_id` int(11) NOT NULL AUTO_INCREMENT,
  `visitor_ip` varchar(32) DEFAULT NULL,
  `visitor_browser_agent` varchar(255) DEFAULT NULL,
  `visited_page` varchar(255) DEFAULT NULL,
  `visited_product_id` int(10) NOT NULL,
  `visitor_refferer_orig` varchar(255) DEFAULT NULL,
  `visitor_refferer_key`varchar(20) NOT NULL,
  `visit_date` timestamp ,

  PRIMARY KEY (`visitor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;