<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="mb-4">Portfolio Dashboard :: img-size= 480px x 345px</h2>

    <!-- Button trigger modal -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#uploadModal">Upload Image</button>
    <button class="btn btn-danger mb-3"><a href="prot-ser.php">Service page</a></button>

    <div class="row">
        <?php
        $result = $conn->query("SELECT * FROM portfolio_images ORDER BY uploaded_at DESC");
        while ($row = $result->fetch_assoc()) {
            echo '
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="' . $row['image_path'] . '" class="card-img-top" alt="Image">
                    <div class="card-body text-center">
                        <form method="POST" action="delete.php">
                            <input type="hidden" name="id" value="' . $row['id'] . '">
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>

<!-- Upload Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="upload.php" enctype="multipart/form-data" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Portfolio Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="file" name="image" class="form-control" required>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Upload</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
