<?php

$conn = new mysqli("127.0.0.1", "dvwa", "p@ssw0rd", "dvwa");

$id = $_GET['id'];

$query = "SELECT first_name, last_name FROM users WHERE user_id = '$id'";

$result = mysqli_query($conn, $query);
