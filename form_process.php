<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars($_POST['password'] ?? '');
    $age = filter_var($_POST['age'] ?? '', FILTER_SANITIZE_NUMBER_INT);
    $dob = ($_POST['dob'] ?? '');
    $country = htmlspecialchars($_POST['country'] ?? '');
    $gender = htmlspecialchars($_POST[gender] ?? '');
    $subscribe = isset($_POST['subscribe']) ? 'Yes' : 'No';
    $message = htmlspecialchars($_POST['message'] ?? '');

    // display the form data submitted
    echo "<h2>Form Data Recieved </h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Password: $password <br>";
    echo "Age: $age <br>";
    echo "Date of Birth: $dob <br>";
    echo "Country: $country <br>";

}

?>