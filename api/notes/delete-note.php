<?php

include __DIR__ . "/../connection/connection.php";

if (isset($_GET["note_id"])) {
    $noteId = $_GET["note_id"];

    $query = "DELETE FROM notes WHERE NoteID = :noteId";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":noteId", $noteId);
    $stmt->execute();
    echo "<script>
        window.location = './notes.php';
    </script>";
    exit();
}
