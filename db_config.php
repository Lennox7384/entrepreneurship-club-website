<?php
// Database connection details.
// Override any of these by setting environment variables before the PHP request,
// or by creating a .env file alongside this script and loading it via your hosting
// platform's preferred mechanism.

$host     = getenv("DB_HOST")     ?: "localhost";
$username = getenv("DB_USER")     ?: "root";
$password = getenv("DB_PASSWORD") ?: "";
$dbname   = getenv("DB_NAME")     ?: "ClubDatabase";
