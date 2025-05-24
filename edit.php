<?php
include 'koneksi.php'; // Include your database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $id = $conn->real_escape_string($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $date = $conn->real_escape_string($_POST['date']);
    $time = $conn->real_escape_string($_POST['time']);
    $notes = $conn->real_escape_string($_POST['notes']);

    // Update data in the database
    $sql = "UPDATE project1 SET name='$name', email='$email', phone='$phone', date='$date', time='$time', notes='$notes' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: reserve.php");
        exit();;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
