<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Database connection
    $conn = new mysqli('localhost','root','','contact_us');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into contact_us(name, number, email, message) values(?, ?, ?, ?)");
        $stmt->bind_param("siss", $name, $number, $email, $message);
        $execval = $stmt->execute();
        echo $execval;        
        echo "Submit successfully...";

        if ($execval) {
            // Submit successful, redirect to the contact us page
            header("Location: contact_us.php");
        } else {
            // Display error message
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
?>
