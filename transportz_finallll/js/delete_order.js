function delete_order(val,email){
    $.ajax(
        {
            type:'post',
            url:'deleteorder.php',
            data:{val:val,email:email},
            sucess:function(result){
                if(result==1){
                    $('#str'+email).html('Activated');
                }
                else{
                    $('#str'+email).html('Deleted'); 
                }
            }

        }
    )
}