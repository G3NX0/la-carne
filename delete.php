<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan ID ada dan valid
    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $id = (int) $_POST['id']; // Pastikan ID adalah integer

        $sql = "DELETE FROM project1 WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            header("Location: reserve.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "ID tidak valid!";
    }

    $conn->close();
}
?>
