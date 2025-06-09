<?php
// Step 1: Get submitted data
$username = $_POST['username'];
$password = $_POST['password'];

// Step 2: Read users.txt
$users = file('users.txt');
$valid = false;

// Step 3: Check each line
foreach ($users as $user) {
    list($storedUser, $storedPass) = explode('|', trim($user));
    if ($storedUser == $username && $storedPass == $password) {
        $valid = true;
        break;
    }
}

// Step 4: Redirect or show error
if ($valid) {
    header("Location: index.html"); // Your main bakery site
    exit();
} else {
    echo "<h2 style='text-align:center; color: red;'>Invalid login! <a href='login.php'>Try again</a></h2>";
}
?>
