$(document).ready(function(){   
   
    $('body').on('click', '.fn_add', function(event) {
        
        var num = $(this).prev().val();     

        $.ajax({  
            url:        $(this).attr("data-path"),  
            type:       'POST',   
            dataType:   'json',  
            async:      true,  
            data:       JSON.stringify({name: "act_add", quantity: num.toString()}),
            
            success: function(data, status) {  
                console.log(data);
            },  
            error : function(xhr, textStatus, errorThrown) {  
                console.log(textStatus);
            }  
         });  
    });   

});