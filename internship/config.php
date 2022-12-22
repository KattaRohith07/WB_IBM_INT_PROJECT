<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';

$conn = mysqli_connect($server, $username, $password, $database);

if($conn->connect_error){
    die('connection failed:' . $conn->connect_error);

}
echo "";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phone_no'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `users`( `Name`, `email`, `password`, `phone_no`) VALUES ('$name','$email','$password','$number')";
    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    }else{
        echo "ERROR:could not be able to execute $sql. " . mysqli_error($conn);
    }
}

session_start();
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        $error = 'emailid or password is incorrect';
    }
}
if(isset($_POST['job_dash'])){
    $cname = $_POST['cname'];
    $pos = $_POST['pos'];
    $Jdesc = $_POST['Jdesc'];
    $skills = $_POST['skills'];
    $CTC = $_POST['CTC'];

    $sql = "INSERT INTO `jobs`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
    if(mysqli_query($conn,$sql)){
        echo "New Job Posted";
    }
    else{
        echo "Failed to post the Job" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>