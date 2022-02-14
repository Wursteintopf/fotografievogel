CREATE TABLE tt_content (
    tx_fotografievogelmaskexport_contentteaser_description mediumtext,
    tx_fotografievogelmaskexport_contentteaser_element int(11) unsigned DEFAULT '0' NOT NULL,
    tx_fotografievogelmaskexport_contentteaser_header tinytext,
    tx_fotografievogelmaskexport_gallery_description mediumtext,
    tx_fotografievogelmaskexport_gallery_image_item int(11) unsigned DEFAULT '0' NOT NULL,
    tx_fotografievogelmaskexport_gallery_title tinytext,
    tx_fotografievogelmaskexport_headerteaser_image int(11) unsigned DEFAULT '0' NOT NULL,
    tx_fotografievogelmaskexport_headerteaser_title tinytext,
    tx_fotografievogelmaskexport_heroteaser_cta tinytext,
    tx_fotografievogelmaskexport_heroteaser_description mediumtext,
    tx_fotografievogelmaskexport_heroteaser_image int(11) unsigned DEFAULT '0' NOT NULL,
    tx_fotografievogelmaskexport_heroteaser_tagline tinytext,
    tx_fotografievogelmaskexport_heroteaser_title tinytext,
    tx_fotografievogelmaskexport_imagebox_alignment tinytext,
    tx_fotografievogelmaskexport_imagebox_header tinytext,
    tx_fotografievogelmaskexport_imagebox_image int(11) unsigned DEFAULT '0' NOT NULL,
    tx_fotografievogelmaskexport_imagebox_text mediumtext
);
CREATE TABLE tx_fotografievogelmaskexport_contentteaser_element (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    tx_fotografievogelmaskexport_contentteaser_image int(11) unsigned DEFAULT '0' NOT NULL,
    tx_fotografievogelmaskexport_contentteaser_link tinytext,
    tx_fotografievogelmaskexport_contentteaser_link_text tinytext,
    tx_fotografievogelmaskexport_contentteaser_text mediumtext,
    tx_fotografievogelmaskexport_contentteaser_title tinytext,
    KEY language (l10n_parent,sys_language_uid)
);
