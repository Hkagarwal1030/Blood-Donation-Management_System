<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM donors WHERE id=$id");
header("Location: admin.php");
?>
