<?php
include 'db.php';

$sql = "SELECT * FROM obituaries";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Obituaries</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Date of Death</th>
                <th>Content</th>
                <th>Author</th>
                <th>Submission Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['name']}</td>
                            <td>{$row['date_of_birth']}</td>
                            <td>{$row['date_of_death']}</td>
                            <td>{$row['content']}</td>
                            <td>{$row['author']}</td>
                            <td>{$row['submission_date']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No obituaries found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
