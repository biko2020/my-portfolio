<?php
// Database configuration (if needed)
define('DB_HOST', 'localhost');
define('DB_USER', '_username');
define('DB_PASS', '_password');
define('DB_NAME', '_database');

// Email configuration
define('CONTACT_EMAIL', 'aitoufkirbrahimab@gmail.com');

// Security settings
define('SITE_KEY', bin2hex(random_bytes(32)));

// Logging configuration
define('LOG_FILE', __DIR__ . '/../logs/contact_form.log');

// Ensure logs directory exists
if (!file_exists(dirname(LOG_FILE))) {
    mkdir(dirname(LOG_FILE), 0755, true);
}

// Custom error logging function
function custom_error_log($message) {
    error_log(date('[Y-m-d H:i:s] ') . $message . PHP_EOL, 3, LOG_FILE);
}
