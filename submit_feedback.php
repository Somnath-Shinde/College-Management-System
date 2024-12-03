<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $faculty = $_POST['faculty'];
    $class = $_POST['class'];
    $rno = $_POST['rno'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $rating = $_POST['rating'];
    $q1 = $_POST['q1'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "feedback";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO student_feedback (faculty, class, rno, address, phone, email, gender, rating, q1)
    VALUES ('$faculty', '$class', '$rno', '$address', '$phone', '$email', '$gender', '$rating', '$q1')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
