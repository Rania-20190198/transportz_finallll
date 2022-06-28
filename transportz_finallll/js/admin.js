function admin_user(val,user_id){
    $.ajax(
        {
            type:'post',
            url:'changeadmin.php',
            data:{val:val,user_id:user_id},
            sucess:function(res){
                if(res==1){
                    $('#strr'+user_id).html('Admin');
                }
                else{
                    $('#strr'+user_id).html('User'); 
                }
            }

        }
    )
}

function admin_driver(val,driver_id){
    $.ajax(
        {
            type:'post',
            url:'changeadmin.php',
            data:{val:val,driver_id:driver_id},
            sucess:function(res){
                if(res==1){
                    $('#strr'+driver_id).html('Admin');
                }
                else{
                    $('#strr'+driver_id).html('User'); 
                }
            }

        }
    )
}
function admin_cars(val,cars_id){
    $.ajax(
        {
            type:'post',
            url:'changeadmin.php',
            data:{val:val,cars_id:cars_id},
            sucess:function(res){
                if(res==1){
                    $('#strr'+cars_id).html('Admin');
                }
                else{
                    $('#strr'+cars_id).html('User'); 
                }
            }

        }
    )
}