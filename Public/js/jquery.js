
        $(document).ready(function()
        {
            /*  var page=$("#page").val(); */
            $("li").click(function()
            {
                $.get("laptop&action=design",function(dara){
                $(".content").html(dara);  
               
            });
          
        });
    

   
        
            /*  var page=$("#page").val(); */
            $("div.page").click(function()
            {
                  
                $.get("gaming.php",{page:2},function(dara){
                  $(".content").html(dara);
                });
            });
          
        })
