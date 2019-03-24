-- SQL commands to run to adjust database structure when updating SuiteCRM version from 7.8.16 to 7.10.14

ALTER TABLE leads   add COLUMN lawful_basis text(100)  NULL ,  add COLUMN date_reviewed date  NULL ,  add COLUMN lawful_basis_source varchar(100)  NULL ;
ALTER TABLE campaigns   add COLUMN survey_id char(36)  NULL ,  ADD INDEX idx_survey_id (survey_id)
ALTER TABLE prospects   add COLUMN lawful_basis text(100)  NULL ,  add COLUMN date_reviewed date  NULL ,  add COLUMN lawful_basis_source varchar(100)  NULL ;
ALTER TABLE emailman   add COLUMN related_confirm_opt_in bool  DEFAULT '0' NULL ;
ALTER TABLE contacts   add COLUMN lawful_basis text(100)  NULL ,  add COLUMN date_reviewed date  NULL ,  add COLUMN lawful_basis_source varchar(100)  NULL ;
ALTER TABLE aobh_businesshours   add COLUMN open_status bool  DEFAULT '0' NULL ;
ALTER TABLE aos_quotes   modify COLUMN number int(11)  NULL ;
ALTER TABLE outbound_email   modify COLUMN mail_smtpport varchar(5)  DEFAULT '0' NULL ;
CREATE TABLE oauth2tokens (id char(36)  NOT NULL ,name varchar(255)  NULL ,date_entered datetime  NULL ,date_modified datetime  NULL ,modified_user_id char(36)  NULL ,created_by char(36)  NULL ,description text  NULL ,deleted bool  DEFAULT '0' NULL ,token_is_revoked bool  NULL ,token_type varchar(255)  NULL ,access_token_expires datetime  NULL ,access_token varchar(4000)  NULL ,refresh_token varchar(4000)  NULL ,refresh_token_expires datetime  NULL ,grant_type varchar(255)  NULL ,state varchar(1024)  NULL ,client char(36)  NULL ,assigned_user_id char(36)  NULL  , PRIMARY KEY (id)) CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE TABLE oauth2clients (id char(36)  NOT NULL ,name varchar(255)  NULL ,date_entered datetime  NULL ,date_modified datetime  NULL ,modified_user_id char(36)  NULL ,created_by char(36)  NULL ,description text  NULL ,deleted bool  DEFAULT '0' NULL ,secret varchar(4000)  NULL ,redirect_url varchar(255)  NULL ,is_confidential bool  DEFAULT '1' NULL ,allowed_grant_type varchar(255)  DEFAULT 'password' NULL ,duration_value int(11)  NULL ,duration_amount int(11)  NULL ,duration_unit varchar(255)  DEFAULT 'Duration Unit' NULL ,assigned_user_id char(36)  NULL  , PRIMARY KEY (id)) CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE TABLE surveyresponses (id char(36)  NOT NULL ,name varchar(255)  NULL ,date_entered datetime  NULL ,date_modified datetime  NULL ,modified_user_id char(36)  NULL ,created_by char(36)  NULL ,description text  NULL ,deleted bool  DEFAULT '0' NULL ,assigned_user_id char(36)  NULL ,happiness int  NULL ,email_response_sent bool  NULL ,account_id char(36)  NULL ,campaign_id char(36)  NULL ,contact_id char(36)  NULL ,survey_id char(36)  NULL  , PRIMARY KEY (id)) CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE TABLE surveys (id char(36)  NOT NULL ,name varchar(255)  NULL ,date_entered datetime  NULL ,date_modified datetime  NULL ,modified_user_id char(36)  NULL ,created_by char(36)  NULL ,description text  NULL ,deleted bool  DEFAULT '0' NULL ,assigned_user_id char(36)  NULL ,status varchar(100)  DEFAULT 'Draft' NULL ,submit_text varchar(255)  DEFAULT 'Submit' NULL ,satisfied_text varchar(255)  DEFAULT 'Satisfied' NULL ,neither_text varchar(255)  DEFAULT 'Neither Satisfied nor Dissatisfied' NULL ,dissatisfied_text varchar(255)  DEFAULT 'Dissatisfied' NULL  , PRIMARY KEY (id)) CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE TABLE surveyquestionresponses (id char(36)  NOT NULL ,name varchar(255)  NULL ,date_entered datetime  NULL ,date_modified datetime  NULL ,modified_user_id char(36)  NULL ,created_by char(36)  NULL ,description text  NULL ,deleted bool  DEFAULT '0' NULL ,assigned_user_id char(36)  NULL ,answer text  NULL ,answer_bool bool  NULL ,answer_datetime datetime  NULL ,surveyquestion_id char(36)  NULL ,surveyresponse_id char(36)  NULL  , PRIMARY KEY (id)) CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE TABLE surveyquestions (id char(36)  NOT NULL ,name varchar(255)  NULL ,date_entered datetime  NULL ,date_modified datetime  NULL ,modified_user_id char(36)  NULL ,created_by char(36)  NULL ,description text  NULL ,deleted bool  DEFAULT '0' NULL ,assigned_user_id char(36)  NULL ,sort_order int(255)  NULL ,type varchar(100)  NULL ,happiness_question bool  NULL ,survey_id char(36)  NULL  , PRIMARY KEY (id)) CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE TABLE surveyquestionoptions (id char(36)  NOT NULL ,name varchar(255)  NULL ,date_entered datetime  NULL ,date_modified datetime  NULL ,modified_user_id char(36)  NULL ,created_by char(36)  NULL ,description text  NULL ,deleted bool  DEFAULT '0' NULL ,assigned_user_id char(36)  NULL ,sort_order int(255)  NULL ,survey_question_id char(36)  NULL  , PRIMARY KEY (id)) CHARACTER SET utf8 COLLATE utf8_general_ci;
ALTER TABLE folders   modify COLUMN name varchar(255)  NULL ;
CREATE TABLE surveyquestionoptions_surveyquestionresponses (id varchar(36)  NOT NULL ,date_modified datetime  NULL ,deleted bool  DEFAULT '0' NULL ,surveyq72c7options_ida varchar(36)  NULL ,surveyq10d4sponses_idb varchar(36)  NULL  , PRIMARY KEY (id),   KEY surveyquestionoptions_surveyquestionresponses_alt (surveyq72c7options_ida, surveyq10d4sponses_idb)) CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE users   add COLUMN factor_auth bool  DEFAULT '0' NULL ,  add COLUMN factor_auth_interface varchar(255)  NULL ;
ALTER TABLE emails   add COLUMN orphaned bool  DEFAULT '0' NULL ,  add COLUMN last_synced datetime  NULL ,  add COLUMN date_sent_received datetime  NULL ,  add COLUMN uid varchar(255)  NULL ,  add COLUMN category_id varchar(100)  NULL ,  ADD INDEX idx_email_cat (category_id);
ALTER TABLE alerts   add COLUMN reminder_id char(36)  NULL ;
ALTER TABLE email_addresses   add COLUMN confirm_opt_in varchar(255)  DEFAULT 'not-opt-in' NULL ,  add COLUMN confirm_opt_in_date datetime  NULL ,  add COLUMN confirm_opt_in_sent_date datetime  NULL ,  add COLUMN confirm_opt_in_fail_date datetime  NULL ,  add COLUMN confirm_opt_in_token varchar(255)  NULL ;
