<!DOCTYPE html>
<html>
<head>
    <title>Basic PHP Form</title>
</head>
<body>

<h2>User Information Form</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data (no validation for simplicity)
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Display the submitted data
    echo "<h3>Form Data Received:</h3>";
    echo "Name: $name <br>";
    echo "Phone Number: $phone <br>";
    echo "Email: $email <br>";
    echo "Address: $address <br>";
}
?>

<!-- HTML Form -->
<form method="POST" action="">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Phone Number:</label><br>
    <input type="text" name="phone" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Address:</label><br>
    <textarea name="address" rows="4" cols="30" required></textarea><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
