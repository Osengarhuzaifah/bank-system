<?php
$conn = mysqli_connect("localhost", "root", "");

mysqli_select_db($conn, "bank");

if(isset($_POST['register'])) {

    $fullname = $_POST['fullname'];
    $accountNumber = rand();

    $query = mysqli_query($conn, "insert into customers (fullname, accountNumber, balance) 
    values('$fullname','$accountNumber','0')");

    if($query) {

        echo "Hello ".$fullname." Your Account was successfully created. 
        Your Account Number is ".$accountNumber;
    }



}

?>

<form action="" method="post">
    <input type="text" name="fullname" placeholder="Enter your full name">
    <input type="submit" name="register" value="Register">
</form>