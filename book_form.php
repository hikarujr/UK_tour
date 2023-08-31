<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";

// Connect to MySQL server
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Assign form data to variables
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

    // Prepare and execute the SQL statement to insert data into the table
    $sql = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving)
            VALUES ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

    if (mysqli_query($conn, $sql)) {
        echo "New record of has been added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>