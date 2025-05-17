<?php
include 'db.php';

if ($_FILES['image']['name'] && $_POST['tag_name']) {
    $tag = $_POST['tag_name'];
    $target_dir = "uploads/";

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $filename = time() . "_" . basename($_FILES["image"]["name"]);
    $file = $target_dir . $filename;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $file)) {
        $stmt = $conn->prepare("INSERT INTO ser_portfolio_images (image_path, tag_name) VALUES (?, ?)");
        $stmt->bind_param("ss", $file, $tag);
        $stmt->execute();
    }
}
header("Location: prot-ser.php");