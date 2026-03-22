<?php
$conn = new mysqli("localhost", "root", "", "estatehub");

if ($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}
?>