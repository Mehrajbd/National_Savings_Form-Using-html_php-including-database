<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    require_once('databases.php');

    // Retrieve form data
    $name = $_POST['name'];
    $fathers_name = $_POST['fathers_name'];
    $mothers_name = $_POST['mothers_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nid = $_POST['nid'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $scheme = $_POST['scheme'];
    $sector = $_POST['sector'];

    // File upload
    $photo = $_FILES['photo']['name'];
    $temp_photo = $_FILES['photo']['tmp_name'];
    $photo_location = "uploads/" . $photo;
    move_uploaded_file($temp_photo, $photo_location);

    // SQL query to insert data into the table
    $sql = "INSERT INTO users (name, fathers_name, mothers_name, phone_no, email, password, nid, gender, dob, address, scheme, sector, photo) 
            VALUES ('$name', '$fathers_name', '$mothers_name', '$phone', '$email', '$password', '$nid', '$gender', '$dob', '$address', '$scheme', '$sector', '$photo_location')";

    // Execute the query
    if (mysqli_query($connection, $sql)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($connection);
} else {
    // Redirect back to the form if accessed directly
    header("Location: index.php");
    exit();
}
?>