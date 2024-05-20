<?php


//PHP code to handle form submission and database interaction
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form submission is for adding a new vehicle
    if (isset($_POST["addVehicle"])) {
        // Retrieve form data
        $registrationNumber = $_POST["registrationNumber"];
        $brand = $_POST["brand"];
        $condition = $_POST["condition"]; // Default condition set to "Ready to be assigned"

        // Validate and sanitize input (for security)
        $registrationNumber = htmlspecialchars($registrationNumber);
        $brand = htmlspecialchars($brand);
        $condition = htmlspecialchars($condition);

        // Perform database insertion or any other required action
        //Insert new vehicle details into the database
        $sql = "INSERT INTO vehicles (registration_number, brand, condition) VALUES ('$registrationNumber', '$brand', '$condition')";
        // Execute SQL query and handle the result accordingly

        // After performing the necessary database operations, you can redirect the user back to the admin interface or display a success message
        // Example redirect:
        // header("Location: admin_interface.php");
        // exit();
    }

    // Check if the form submission is for updating an existing vehicle
    if (isset($_POST["updateVehicle"])) {
        // Similar logic for updating vehicle details in the database
    }

    // Check if the form submission is for deleting a vehicle
    if (isset($_POST["deleteVehicle"])) {
        // Similar logic for deleting vehicle details from the database
    }

    // Check if the form submission is for reporting an expense
    if (isset($_POST["submitExpense"])) {
        // Retrieve expense data
        $expense = $_POST["expense"];
        $type = $_POST["type"];
        $cost = $_POST["cost"];

        // Validate and sanitize input (for security)
        $expense = htmlspecialchars($expense);
        $type = htmlspecialchars($type);
        $cost = htmlspecialchars($cost);

        // Perform database insertion or any other required action
        //Insert expense details into the database
        $sql = "INSERT INTO expenses (expense, type, cost) VALUES ('$expense', '$type', '$cost')";
        // Execute SQL query and handle the result accordingly

        // After performing the necessary database operations, you can redirect the user back to the admin interface or display a success message
        
        header("Location: admin_interface.php");//redirect
         exit();
    }
}
?>
