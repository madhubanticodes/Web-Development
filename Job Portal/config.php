<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection falied:".$conn->connect_error);

}
echo"";
session_start();
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        $error='emailId or password is incoorect';
    }
}

if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $job= "INSERT INTO `jobs`( `cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
    mysqli_query($conn,$job);
    }
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $qual=$_POST['qual'];
        $apply=$_POST['apply'];
        $year=$_POST['year'];

        $sql="INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
        mysqli_query($conn,$sql);
    }
?>