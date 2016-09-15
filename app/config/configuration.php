<?php
class JConfig {
	public $offline = '0';
	public $offline_message = 'INSTL_STD_OFFLINE_MSG';
	public $display_offline_message = '1';
	public $offline_image = '';
	public $sitename = '';
	public $editor = 'tinymce';
	public $captcha = '0';
	public $list_limit = '20';
	public $access = '1';
	public $debug = '0';
	public $debug_lang = '0';
	public $dbtype = 'doctrine';
	public $db = 'symfony';
	public $dbprefix = 'joomla_';
	public $live_site = '';
	public $secret = '1Xd6eOcxotuX9IxY';
	public $gzip = '0';
	public $error_reporting = 'default';
	public $helpurl = '';
	public $ftp_host = '';
	public $ftp_port = '';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $offset = 'UTC';
	public $mailonline = '1';
	public $mailer = 'mail';
	public $mailfrom = 'admin@localdomain';
	public $fromname = '';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';
	public $smtpsecure = 'none';
	public $smtpport = '25';
	public $caching = '0';
	public $cache_handler = 'file';
	public $cachetime = '15';
	public $cache_platformprefix = '0';
	public $MetaDesc = '';
	public $MetaKeys = '';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';
	public $MetaVersion = '0';
	public $robots = '';
	public $sef = '1';
	public $sef_rewrite = '0';
	public $sef_suffix = '0';
	public $unicodeslugs = '0';
	public $feed_limit = '10';
	public $feed_email = 'none';
	public $log_path = '/home/mruta/Projekte/XTAIN/composer/xtain-symfony-joomla-edition/vendor/joomla/joomla-cms/administrator/logs';
	public $tmp_path = '/home/mruta/Projekte/XTAIN/composer/xtain-symfony-joomla-edition/vendor/joomla/joomla-cms/tmp';
	public $lifetime = '15';
	public $session_handler = 'database';
}