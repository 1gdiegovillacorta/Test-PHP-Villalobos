<?php

include __DIR__ . "/../connection/connection.php";

if (isset($_GET["file_id"])) {
    $fileId = $_GET["file_id"];

    $query = "DELETE FROM files WHERE FileID = :fileId";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":fileId", $fileId);
    $stmt->execute();
    echo "<script>
        window.location = './files.php';
    </script>";
    exit();
}
