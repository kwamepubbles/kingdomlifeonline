<?php
define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'klm_db');
//database charset
define('DB_CHARSET', 'utf8');
//Admin crendentials / username
define('ADMIN_USER', 'admin');
//Admin password
define('ADMIN_PASS', 'admin');
//Approval required for comments
define('COMMENTS_APPROVAL_REQUIRED', false);
//Default profile image
define('DEFAULT_PROFILE_IMAGE', 'avatar-user.png');
try {
    $plug = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE, USER, PASSWORD);
    $plug->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
