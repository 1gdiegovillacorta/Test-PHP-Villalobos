<?php

include __DIR__ . "/../connection/connection.php";

if (isset($_GET["link_id"])) {
    $linkId = $_GET["link_id"];

    $query = "DELETE FROM links WHERE LinkID = :linkId";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":linkId", $linkId);
    $stmt->execute();
    echo "<script>
        window.location = './links.php';
    </script>";
    exit();
}
