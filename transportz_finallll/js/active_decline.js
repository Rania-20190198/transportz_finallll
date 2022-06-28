function active_decline(val,id){
   
    $.ajax(
        {

            type:'post',
            url:'accept_decline.php',
            data:{val:val,id:id},
            sucess:function(result){
                if(result==1){
                    $('#str'+id).html('Accepted');
                }
                else{
                    $('#str'+id).html('Not Active Yet'); 
                }
            }

        }
    )
}
