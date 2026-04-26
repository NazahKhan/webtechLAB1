<?php


$errors = [];

$name = $email = $username = $age = $gender = $course = "";
 
if (isset($_POST['register'])) {
 
    

    $name = trim($_POST['name']);

    $email = trim($_POST['email']);

    $username = trim($_POST['username']);

    $password = $_POST['password'];

    $confirm_password = $_POST['confirm_password'];

    $age = $_POST['age'];

    $gender = $_POST['gender'] ?? "";

    $course = $_POST['course'];

    $terms = $_POST['terms'] ?? "";
 
    

    if (empty($name) || empty($email) || empty($username) || empty($password) ||

        empty($confirm_password) || empty($age) || empty($gender) || empty($course)) {

        $errors[] = "All fields are required!";

    }
 
    

    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {

        $errors[] = "Full Name must contain only letters and spaces!";

    }
 
    

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errors[] = "Invalid email format!";

    }
 
   

    if (strlen($username) < 5) {

        $errors[] = "Username must be at least 5 characters!";

    }
 
    

    if (strlen($password) < 6) {

        $errors[] = "Password must be at least 6 characters!";

    }
 
    
    if ($password !== $confirm_password) {

        $errors[] = "Passwords do not match!";

    }
 
    

    if ($age < 18) {

        $errors[] = "Age must be 18 or above!";

    }
 
    

    if (empty($gender)) {

        $errors[] = "Please select gender!";

    }
 
    
    if ($course == "") {

        $errors[] = "Please select a course!";

    }
 
    

    if (!$terms) {

        $errors[] = "You must accept Terms & Conditions!";

    }

}

?>
 
<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>
</head>
<body>
 
<h2>Student Registration Form</h2>
 
<form method="POST">
 
    Full Name: <input type="text" name="name"><br><br>
 
    Email: <input type="text" name="email"><br><br>
 
    Username: <input type="text" name="username"><br><br>
 
    Password: <input type="password" name="password"><br><br>
 
    Confirm Password: <input type="password" name="confirm_password"><br><br>
 
    Age: <input type="number" name="age"><br><br>
 
    Gender:
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<br><br>
 
    Course:
<select name="course">
<option value="">Select Course</option>
<option value="CSE">CSE</option>
<option value="BBA">BBA</option>
<option value="EEE">EEE</option>
</select>
<br><br>
 
    <input type="checkbox" name="terms"> I accept Terms & Conditions
<br><br>
 
    <button type="submit" name="register">Register</button>
 
</form>
 
<hr>
 
<?php

if (isset($_POST['register'])) {
 
    if (!empty($errors)) {

        echo "<h3 style='color:red;'>Errors:</h3>";

        foreach ($errors as $error) {

            echo $error . "<br>";

        }

    } else {

        echo "<h3 style='color:green;'>Registration Successful!</h3>";

        echo "Name: $name <br>";

        echo "Email: $email <br>";

        echo "Username: $username <br>";

        echo "Age: $age <br>";

        echo "Gender: $gender <br>";

        echo "Course: $course <br>";

    }

}

?>
 
</body>
</html>
 