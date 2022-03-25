<?php
     
    $conn = mysqli_connect("localhost","root","","ajax") or die("failed to connect");

    $name = $_POST['name'];
    $number =$_POST['number'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `seralize`(`name`, `number`, `gender`) VALUES ('$name',$number,'$gender')";
    if(mysqli_query($conn,$sql)){
        echo"hello {$name} your data inserted sucessfully";
    }else{
        echo"hello {$name} your data failed to inserted sucessfully";

    }


?>