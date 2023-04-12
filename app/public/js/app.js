$(document).ready(function(){   
    $('#orderplace').hide();

    $('#shipid').on('mouseup', function () {
        console.log('Mouse UP');
        var selectVal = $("#shipid option:selected").val();
        console.log(selectVal);

        $.ajax({  
            url:        $(this).attr("data-path"),  
            type:       'POST',   
            dataType:   'json',  
            async:      true,  
            data:       JSON.stringify({uuid: selectVal}),
            
            success: function(data, status) {  
                console.log(data);
                $('table#ship_data tbody').html(data);
            },  
            error : function(xhr, textStatus, errorThrown) {  
                console.log(textStatus);
            }  
         });  
   });
  
    $('body').on('click', '.fn_add', function(event) {
        
        var num = $(this).prev().val();     
        var id = $("input.order_id").val();

        $.ajax({  
            url:        $(this).attr("data-path"),  
            type:       'POST',   
            dataType:   'json',  
            async:      true,  
            data:       JSON.stringify({quantity: num.toString(), uuid: id}),
            
            success: function(data, status) {  
                console.log(data);
                $('table#order_data tbody').html(data);
                $('#orderplace').show();
            },  
            error : function(xhr, textStatus, errorThrown) {  
                console.log(textStatus);
            }  
         });  
    });   

    $('body').on('click', '.fn_cancel', function(event) {
        
        var id = $("input.order_id").val();

        $.ajax({  
            url:        $(this).attr("data-path"),  
            type:       'POST',   
            dataType:   'json',  
            async:      true,  
            data:       JSON.stringify({uuid: id}),
            
            success: function(data, status) {  
                console.log(data);
                alert("Заказ отменён!");
                location.replace("/order")
            },  
            error : function(xhr, textStatus, errorThrown) {  
                console.log(textStatus);
            }  
         });  
    });   

    $('body').on('click', '.fn_order', function(event) {
        
        var id = $("input.order_id").val();

        $.ajax({  
            url:        $(this).attr("data-path"),  
            type:       'POST',   
            dataType:   'json',  
            async:      true,  
            data:       JSON.stringify({uuid: id}),
            
            success: function(data, status) {  
                console.log(data);
                alert("Заказ размещён!");
                location.replace("/shipment")
            },  
            error : function(xhr, textStatus, errorThrown) {  
                console.log(textStatus);
            }  
         });  
    });   

});