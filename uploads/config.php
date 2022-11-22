<?php 
/*
 //Database configuration    
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', 'root'); 
define('DB_NAME', 'codexworld'); 
 */
// Google API configuration 
define('GOOGLE_CLIENT_ID', '689649416264-ljlvjfjadvfusq7cj4m9lsfd1c24olmf.apps.googleusercontent.com
'); 
define('GOOGLE_CLIENT_SECRET', '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'); 
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/drive'); 
define('REDIRECT_URI', 'http://localhost/google_drive_file_upload_php/google_drive_sync.php'); 
 
// Start session 
if(!session_id()) session_start(); 
 
// Google OAuth URL 
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online'; 
 
?>