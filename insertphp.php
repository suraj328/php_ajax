<?php
    $conn = mysqli_connect('localhost','root');
    mysqli_select_db($conn,'ajax');
    extract($_POST);

    if(isset($_POST['submit'])){
        $q = "INSERT INTO `ajaxinsert`(`username`,`password`) VALUES('$username','$password')";
        $query = mysqli_query($conn,$q);
        header('location:insert.php');
    }
?>