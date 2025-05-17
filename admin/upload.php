<?php
include 'db.php';

if ($_FILES['image']['name']) {
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir);
    }
    $file = $target_dir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $file)) {
        $stmt = $conn->prepare("INSERT INTO portfolio_images (image_path) VALUES (?)");
        $stmt->bind_param("s", $file);
        $stmt->execute();
    }
}
header("Location: index.php");
