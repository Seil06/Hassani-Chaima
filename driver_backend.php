<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Including the database connection file
    //didn't include yet "db_connection.php";

    // Defining the database connection variables
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "dbname";

    
    $conn = new mysqli($servername, $username, $password, $dbname);// Create connection

    // Checking connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handling the update profile form submission
    if (isset($_POST['update-profile'])) {
        $newEmail = $_POST['new-email'];
        $newPassword = $_POST['new-email-password'];
        // Update the database with new email and password
         $sql = "UPDATE drivers SET email='$newEmail', password='$newPassword' WHERE id=1";
        if ($conn->query($sql) === TRUE) {
           echo "Record updated successfully";
        } else {
           echo "Error updating record: " . $conn->error;
         }
    }

    // Handling expense report form submission
    if (isset($_POST['submit-expense'])) {
        $expenseDescription = $_POST['expense-description'];
        $expenseAmount = $_POST['expense-amount'];
        // Saving the expense report to the database
         $sql = "INSERT INTO expense_reports (description, amount) VALUES ('$expenseDescription', $expenseAmount)";
        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
         } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
         }
    }

    // Handle emergency contact form submission
    if (isset($_POST['submit-contact'])) {
        $contactName = $_POST['contact-name'];
        $contactPhone = $_POST['contact-phone'];
        // Saving the emergency contact to the database
        $sql = "INSERT INTO emergency_contacts (name, phone) VALUES ('$contactName', '$contactPhone')";
         if ($conn->query($sql) === TRUE) {
           echo "New record created successfully";
         } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
       }
    }

    $conn->close();
}
?>
