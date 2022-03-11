<?php
    $conn = mysqli_connect('localhost','root');
    $res = mysqli_select_db($conn,'ajax');
    echo$res;

    if($conn){
        echo"connected";
    }

    $nameid = $_POST['datapost'];
    $q = "SELECT * FROM `classes` where mid='$nameid'";
    $result=mysqli_query($conn,$q);

    
    while($row = mysqli_fetch_array($result)){
        ?>
            <option><?php echo $row['class']; ?></option>
        <?php
            }
        ?>
