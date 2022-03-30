<?php
    // print_r($_FILES['file']);
    // echo$_POST['name'];
    $conn = mysqli_connect("localhost","root","","ajax") or die("failed to connect");

    // for string object
    $name = $_POST['name'];

    // for file
    // it will store all type of file information uploaded by users 
    // in short, it stores all the properties of files
    $image = $_FILES['file']; //all file property info have assigned to image variable
    $img_name = $image['name']; //provides a ['name'] of file
    $img_path = $image ['tmp_name'];//provides  a path of file by ['tmp_name];
    $img_error = $image['error']; //provides a count of error 
    $ext = pathinfo($img_name,PATHINFO_EXTENSION);//return a extension of a particular file

    $validExt = array("jpg","png","jpeg"); //this is for validate what types of file should be to submit or verify.
    if($img_error == 0){
        if(in_array($ext,$validExt)){
            $newimg = "supernova".rand(00000,99999).".".$ext;//created a new image or file name so, no overwrite occurs
            $newPath = "images/".$newimg;
            // echo $newPath;

            // move path from one directory to another it takes argument as ($oldfilepath,$newfilepath);
            if (move_uploaded_file($img_path,$newPath)) {
                $sql = " INSERT INTO `ajaxfile`(`name`, `file`) VALUES ('$name','$newPath')";
                if (mysqli_query($conn,$sql)) {
                    echo"hello {$name} your pics uploaded sucessfully";
                }
            }
        }
    }


    
    


?>