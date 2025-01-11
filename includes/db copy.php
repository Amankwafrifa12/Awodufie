<?php
$host = 'localhost';
$dbname = 'ekrllius_awodufie';
$username = 'ekrllius_awodufie';
$password = 'UEcd5KHWwvET4FY';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
