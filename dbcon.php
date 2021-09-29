<?php

$conn = new mysqli('localhost', 'root', '', 'ProjectDB');

if ($conn->connect_error) {
    exit('Connection failed: '.$conn->connect_error);
}