<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container"><br>
        <h1 class=text-center>Insert Data with ajax</h1>
        <div class="col-lg-8 m-auto">
            <form id="myform" action="insertphp.php" method="POST">
                <div class="form-group">
                    <label for="">Username:</label>
                    <input type="text"  name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password:</label>
                    <input type="text" name="password"class="form-control">
                </div>
                <input type="submit" id="submit" name="submit" value=submit>
            </form>
        </div>    
    </div>

   
    <script src="./js/bootstrap.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/jquery.js"></script>
    
    <script>
        $(document).ready(()=>{
            var form = $('#myform');

            $('#submit').click(()=>{

                $.ajax({
                    url : form.attr("action"),
                    method : 'post',
                    data : $('#myform').serialize(),
                    success : (data)=>{
                        console.log(data)
                    }
                })

            });

        })
    </script>
</body>
</html>