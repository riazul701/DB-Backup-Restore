<?php
/**
 * Set Configuration Here
 */

// MySQL Configuration
$GLOBALS['server_name']   = 'localhost';
$GLOBALS['username']      = 'root';
$GLOBALS['password']      = '';
$GLOBALS['database_name'] = '';

// FTP Configuration
$GLOBALS['ftp_sync'] = 'yes'; // DB Sync: yes/no
$GLOBALS['ftp_server'] = '';
$GLOBALS['ftp_username'] = '';
$GLOBALS['ftp_password'] = '';
$GLOBALS['ftp_path'] = '';

// Backup Path
// define("BACKUP_PATH", realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'DB_Backups' . DIRECTORY_SEPARATOR);
define("BACKUP_PATH", realpath(dirname(__FILE__). '/DB_Backups'));
$GLOBALS['keep_db'] = 5;
