<?php
include 'db.php';

if ($_POST['id']) {
    $id = $_POST['id'];
    $result = $conn->query("SELECT image_path FROM ser_portfolio_images WHERE id = $id");
    if ($row = $result->fetch_assoc()) {
        unlink($row['image_path']);
    }
    $conn->query("DELETE FROM ser_portfolio_images WHERE id = $id");
}
header("Location: prot-ser.php");
