<!-- register.php -->
<?php
// Include database connection
include "connection.php";

// Handle registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    $select_users = MySQL_query($conn. "SELECT * FROM 'user' WHERE email= '$email'") or die ('query failed');
    if (MySQLi_num_rows($select_user)>0) {
        $message = 'user already exist'
        
        $ row = MySQli_fetch_assoc ($ select_user),
       if ($row ['user_type']== 'admin') {
        $_SESSION ['admin_name'] = $row ['name'];
        $_SESSION ['admin_id'] = $row ['email'];
        $_SESSION ['admin_email'] = $row ['id'];
        header (location:admin_pannel.php);
       }
       else {
        if ($row ['user_type']== 'user') {
            $_SESSION ['user_name'] = $row ['name'];
            $_SESSION ['user_id'] = $row ['email'];
            $_SESSION ['user_email'] = $row ['id'];
            header (location:index.php);
        }
        else {
            $message[] ='incorrect email or password';
        }

       }
    



    // Execute the query
    if ($conn->query($request)) {
        // Registration successful
        
        header('Location: property.php'); // Redirect to a success page
         // Terminate script execution after redirection
    } 
    else {
        // Registration failed
        // Display error message or handle the error accordingly
        echo "Registration failed. Please try again.";
    }
}
}