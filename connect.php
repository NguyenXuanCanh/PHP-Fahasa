<?php
$mysqli = new mysqli("localhost", "root", '', "fahasa");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Return name of current default database
if ($result = $mysqli->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    // echo "Default database is " . $row[0];
    $result->close();
}

$mysqli->select_db("fahasa");

// Return name of current default database
if ($result = $mysqli->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    // echo "Default database is " . $row[0];
    $result->close();
}

// $mysqli->close();
$conn = mysqli_connect("localhost", "root", '', "fahasa");
mysqli_set_charset($conn, 'UTF8');
