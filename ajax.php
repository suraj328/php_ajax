<?php
    $conn = mysqli_connect('localhost','root');
    $res = mysqli_select_db($conn,'ajax');
    echo$res;

    if($conn){
        echo"connected";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container col-lg-6">
        <h2 class="text-center text-success">Get data from  database</h2>
        <form>
            username: <input class="form-control" type="text"><br/>
            password: <input class="form-control" type="text"><br/>
            Degree:<select class="form-control" onchange="myfun(this.value)">
                <option>select anyone</option>
                <?php
                    $q = "SELECT * FROM `degree`";
                    $result =mysqli_query($conn,$q);
                    while($row = mysqli_fetch_array($result)){
                ?>
                    <option value="<?php echo $row['mid']; ?>"><?php echo $row['degrees']; ?></option>
                <?php
                    }
                ?>
            </select><br>
            <select class="form-control" id="data-get">
                <option>please choose one of them</option>
            </select>
            <button class="btn btn-primary my-3">submit</button>
            
        </form>

    </div>

    <script src="./js/bootstrap.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/jquery.js"></script>
    <script>
        // $(document).ready(()=>{
        //     console.log('running');
        // })
        function myfun(datavalue){
            $.ajax({
                
                url:'class.php',
                type:'POST',
                data: {datapost:datavalue},
                success:function (result){
                    $('#data-get').html(result);
                }
            })
        }
    </script>
</body>
</html>