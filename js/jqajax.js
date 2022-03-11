
$(document).ready(()=>{
    alert('file ready');
    $('#click').click(()=>{
        $('#load').load('load.html',()=>{
            alert("your file loaded sucessfully")
        });
    })


    $('.btnclick').click(()=>{
        $.get('get.html',(data,status)=>{
            $('#change-here').html(data);
            console.log(status + ' by-get');
        })
    })
    $('.btnclick2').click(()=>{
        $.post('post.php',{
            name:'suraj sah',
            age:28
        },(info,status)=>{
            $('#change-here2').html(info);
            console.log(status + ' by-post');
        })
    })
})