function active_deactive_user(val,user_id){
   
    $.ajax(
        {

            type:'post',
            url:'change.php',
            data:{val:val,user_id:user_id},
            sucess:function(result){
                if(result==1){
                    $('#str'+user_id).html('Active');
                }
                else{
                    $('#str'+user_id).html('DeActive'); 
                }
            }

        }
    )
}


function active_deactive_driver(val,driver_id){
    $.ajax(
        {
            type:'post',
            url:'change.php',
            data:{val:val,driver_id:driver_id},
            sucess:function(result){
                if(result==1){
                    $('#str'+driver_id).html('Active');
                }
                else{
                    $('#str'+driver_id).html('DeActive'); 
                }
            }

        }
    )
}

function active_deactive_cars(val,cars_id){
    $.ajax(
        {
            type:'post',
            url:'change.php',
            data:{val:val,cars_id:cars_id},
            sucess:function(result){
                if(result==1){
                    $('#str'+cars_id).html('Active');
                }
                else{
                    $('#str'+cars_id).html('DeActive'); 
                }
            }

        }
    )
}