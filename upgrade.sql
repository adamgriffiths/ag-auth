ALTER TABLE `users` CHANGE `group_id` `group_id` INT( 11 ) NOT NULL DEFAULT '100';
ALTER TABLE `users` ADD `token` VARCHAR( 255 ) NOT NULL ,
ADD `identifier` VARCHAR( 255 ) NOT NULL ;

CREATE TABLE `groups` (
`id` int(11) NOT NULL,
`title` varchar(20) NOT NULL default '',
`description` varchar(100) NOT NULL default '',
PRIMARY KEY (`id`));

CREATE TABLE IF NOT EXISTS  `ci_sessions` (
session_id varchar(40) DEFAULT '0' NOT NULL,
ip_address varchar(16) DEFAULT '0' NOT NULL,
user_agent varchar(50) NOT NULL,
last_activity int(10) unsigned DEFAULT 0 NOT NULL,
user_data text NOT NULL,
PRIMARY KEY (session_id)
);