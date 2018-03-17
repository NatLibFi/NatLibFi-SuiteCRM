-- SQL commands to run to adjust database structure when updating SuiteCRM version from 7.7.4 to 7.8.16

ALTER TABLE campaign_trkrs   modify COLUMN tracker_name varchar(255)  NULL ;
ALTER TABLE email_templates   modify COLUMN body longtext  NULL ,  modify COLUMN body_html longtext  NULL ;
ALTER TABLE reminders   add COLUMN date_willexecute int(60)  DEFAULT '-1' NULL ,  add COLUMN popup_viewed bool  DEFAULT '0' NULL ;
ALTER TABLE aos_pdf_templates   modify COLUMN description longtext  NULL ,  add COLUMN page_size varchar(100)  NULL ,  add COLUMN orientation varchar(100)  NULL ;
ALTER TABLE aos_products_quotes   modify COLUMN product_qty decimal(18,4)  NULL ;
ALTER TABLE outbound_email   modify COLUMN name varchar(255)  NULL ,  add COLUMN smtp_from_name varchar(255)  NULL ,  add COLUMN smtp_from_addr varchar(255)  NULL ;
