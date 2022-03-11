// url:"it contains string url where have to sent the request for data";

// method:"it defines a Http method for requesting data as "GET","POST","PUT" ";

// sucess:" Success is generally function it recives the reponses and data from the  requested url"

// example1
$.ajax({
    url:"data.php",
    method:"GET",
    sucess:function(data){
        // process the response data
    }
})

// example2
$.ajax({
    url:"data.php",
    method:"POST",
    data:{"name":"sonam","roll":101},
    sucess:function(data){
        // process the response data
    }
})