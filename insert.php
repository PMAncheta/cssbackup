
<?php
// servername => localhost
// username => root
// password => empty
// database name => staff

include 'config.php';

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['pass'];
$cpassword = $_REQUEST['cpass'];
$user_type = isset($_REQUEST['user_type']) ? $_REQUEST['user_type'] : '';

// Check if the email already exists in the database
$checkEmailQuery = "SELECT * FROM user WHERE email = '$email'";
$checkEmailResult = mysqli_query($conn, $checkEmailQuery);

if (mysqli_num_rows($checkEmailResult) > 0) {
    // Email already exists, show error message or perform desired action
    echo "Error: Account with this email already exists.";
} else {
    // Insert the new user account into the database
    $insertQuery = "INSERT INTO user (name, email, pass, cpass, user_type)
                    VALUES ('$name', '$email', '$password', '$cpassword', '$user_type')";
    
    if (mysqli_query($conn, $insertQuery)) {
        echo "User account created successfully.";
		header('location: login_form.php');
		exit();
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
