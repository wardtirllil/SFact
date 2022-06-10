$(document).ready(function(){
    view_record_cl();
    Insert_record_cl();
    delete_record_cl();
    get_record();
    update_record_cl();
   
})
 
function view_record_cl()
{
    $.ajax(
        {
            url: 'client_view.php',
            method: 'post',
            success: function(data)
            {
                data = $.parseJSON(data);
                if(data.status=='success')
                {
                    $('#table_client').html(data.html);
                }
            }
        })
}
function Insert_record_cl()
{
   $(document).on('click','#btn_register',function()
   {
        var Name = $('#Name').val();
        var Email = $('#Email').val();
        var Phone = $('#Phone').val();
        var Adress = $('#Adress').val();

        if(Name == "" || Email=="" || Adress=="" || Phone=="")
        {
            $('#message').html('Veuillez remplire les champs');
        }
        else
        {
            $.ajax(
                {
                    url : 'client_insert.php',
                    method: 'post',
                    data:{CName:Name,CEmail:Email,CPhone:Phone,CAdress:Adress},
                    success: function(data)
                    {
                        $('#message').html(data);
                        $('#Registration').modal('show');
                        $('form').trigger('reset');
                        view_record_cl();
                    }
                })
        }
        
   })
   $(document).on('click','#btn_close',function()
   {
       $('form').trigger('reset');
       $('#message').html('');
   })  
   
 
}

function delete_record_cl()
{
    $(document).on('click','#btn_delete',function()
    {
        var Delete_ID = $(this).attr('data-id1');
        $('#delete').modal('show');

        $(document).on('click','#btn_delete_record',function()
        {
            $.ajax(
                {
                    url: 'client_delete.php',
                    method: 'post',
                    data:{Del_ID:Delete_ID},
                    success: function(data)
                    {
                        $('#delete-message').html(data).hide(5000);
                        view_record_cl();
                    }
                })
        })
    })
    $(document).on('click','#btn_close',function()
    {
        $('form').trigger('reset');
        $('#message').html('');
    })  
    
}

//Get Particular Record
function get_record()
{
    $(document).on('click','#btn_edit',function()
    {
        var id = $(this).attr('data-id');
        //console.log(id);
        
                   
        
        $.ajax(
            {
                url: 'client_get_data.php',
                method: 'post',
                data:{id:id},
                dataType: 'JSON',
                success: function(data)
                {
                    //console.log(data)
                   $("#Up_User_ID").val(data[0]);
                   $("#Up_Name").val(data[1]);
                   $("#Up_Email").val(data[2]);
                  $("#Up_Phone").val(data[3]);
                  $("#Up_Adress").val(data[4]);
                  $("#update").modal("show");
                }
                
            })
    })}

    
    function update_record_cl()
{
    
    $(document).on('click','#btn_update',function()
    {
        var UpdateID = $('#Up_User_ID').val();
        var UpdateName = $('#Up_Name').val();
        var UpdateEmail = $('#Up_Email').val();
        var UpdatePhone = $('#Up_Phone').val();
        var UpdateAdress = $('#Up_Adress').val();

        if(UpdateName=="" || UpdateEmail==""|| UpdatePhone==""|| UpdateAdress=="")
        {
            $('#up-message').html('Remplire les champs');
            $('#update').modal('show');
        }
        else
        {
            $.ajax(
                {
                    url: 'client_update.php',
                    method: 'post',
                    data:{C_ID:UpdateID,C_Name:UpdateName,C_Email:UpdateEmail,C_Phone:UpdatePhone,C_Adress:UpdateAdress},
                    success: function(data)
                    {
                        $('#up-message').html(data);
                        $('#update').modal('show');
                        view_record();
                    }
                })
        }
        
    })
}