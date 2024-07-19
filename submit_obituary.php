<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $date_of_birth = $_POST['date_of_birth'];
    $date_of_death = $_POST['date_of_death'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $name));

    $sql = "INSERT INTO obituaries (name, date_of_birth, date_of_death, content, author, slug)
            VALUES ('$name', '$date_of_birth', '$date_of_death', '$content', '$author', '$slug')";

    if ($conn->query($sql) === TRUE) {
        echo "New obituary created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
