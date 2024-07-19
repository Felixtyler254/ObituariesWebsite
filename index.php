<!DOCTYPE html>
<html>
<head>
    <title>Submit Obituary</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="validation.js"></script>
</head>
<body>
    <fieldset>
        <label for="OrbituariesEntry">OrbituariesEntry</label>
    </fieldset>
    <form action="submit_obituary.php" method="POST" onsubmit="return validateForm()">
    <fieldset>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
     <label for="date_of_birth">Date of Birth:</label>
       
        <input type="date" id="date_of_birth" name="date_of_birth" required>
        <label for="date_of_death">Date of Death:</label>
        <input type="date" id="date_of_death" name="date_of_death" required>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>
        <button type="submit">Submit</button>
    </fieldset>
    
</form>
</body>
</html>
