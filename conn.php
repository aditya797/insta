<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','insdb' );
if($conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into login(username, password)
        values(?,?)");
        $stmt->bind_param("ss",$username, $password);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();
    }
?>