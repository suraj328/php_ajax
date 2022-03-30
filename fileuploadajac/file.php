<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="data" >
        <div>
            name:<input type="text" name="name">
        </div>
        <div>
            file: <input type="file" name="file" id="file">
        </div>
        <div>
            <input type="submit" >
        </div>
        <span id="alert"></span>
    </form>
    <script src="./jquery.js"></script>
    <script>
        $(document).ready(()=>{
            $('#data').on('submit',(e)=>{
                e.preventDefault();
                // var form = $('#data')[0];
                var formData = new FormData($('#data')[0]);
                // for (var value of formData.values()) {
                // console.log(value);
                // }

                $.ajax({
                    url : 'upload.php',
                    type : 'POST',
                    data : formData,
                    contentType : false,
                    processData : false,
                    success : (data)=>{
                        // console.log(data)
                        $('#alert').html(data)
                        setTimeout(() => {
                            $('#alert').html('');
                        },4000);
                    }
                })

            });
        })
    </script>
</body>
</html>

