DROP TABLE IF EXISTS `{TABLE_PREFIX}mod_wbs_guestbook2_sign`;
CREATE TABLE IF NOT EXISTS `{TABLE_PREFIX}mod_wbs_guestbook2_sign` (
    `guestbook_sign_id` INT(11) NOT NULL AUTO_INCREMENT,
    `page_id` INT(11) NOT NULL,
    `secton_id` INT(11) NOT NULL,
    `guestbook_sign_username` VAR(255) NOT NULL,
    `guestbook_sign_email` VAR(255) NOT NULL,
    `guestbook_sign_text` TEXT NOT NULL,
    `guestbook_sign_created_at` DATETIME NOT NULL DEFAULT TIMESTAMP,
    PRIMARY KEY (`guestbook_sign_id`)
){TABLE_ENGINE=MyISAM};

DROP TABLE IF EXISTS `{TABLE_PREFIX}mod_wbs_guestbok2_tag`;
CREATE TABLE IF NOT EXISTS `{TABLE_PREFIX}mod_wbs_guestbok2_tag` (
    `guestbook_tag_id` INT NOT NULL AUTO_INCREMENT,
    `guestbook_tag_name` VAR(255) NOT NULL,
    PRIMARY KEY (`guestbook_tag_id`)
){TABLE_ENGINE=MyISAM};

DROP TABLE IF EXISTS `{TABLE_PREFIX}mod_wbs_guestbok2_tag_sign`;
CREATE TABLE IF NOT EXISTS `{TABLE_PREFIX}mod_wbs_guestbok2_tag_sign` (
    `guestbok_tag_sign_id` INT(11) NOT NULL AUTO_INCREMENT,
    `guestbok_tag_id` INT(11) NOT NULL,
    `guestbok_sign_id` INT(11) NOT NULL,
    FOREIGN KEY (`guestbok_tag_id`) REFERENCES `{TABLE_PREFIX}mod_wbs_guestbok2_tag`(guestbook_tag_id),
    FOREIGN KEY (`guestbok_sign_id`) REFERENCES `{TABLE_PREFIX}mod_wbs_guestbook2_sign`(guestbook_sign_id),
    PRIMARY KEY (`guestbok_tag_sign_id`)
){TABLE_ENGINE=MyISAM};