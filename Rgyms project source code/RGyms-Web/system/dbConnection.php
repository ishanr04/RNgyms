<?php
    if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
        // session isn't started
        session_start();
    }

    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_DATABASE = "gymdb";

    $conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

