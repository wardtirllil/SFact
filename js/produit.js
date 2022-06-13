$(document).ready(function(){
    view_record_pd();
    Insert_record_pd();
    delete_record_pd();
    get_record();
    update_record_pd();
   
})
 
function view_record_pd()
{
    $.ajax(
        {
            url: 'produit_view.php',
            method: 'post',
            success: function(data)
            {
                data = $.parseJSON(data);
                if(data.status=='success')
                {
                    $('#table_produit').html(data.html);
                }
            }
        })
}
function Insert_record_pd()
{
   $(document).on('click','#btn_register',function()
   {
        var ref = $('#ref').val();
        var prod = $('#prod').val();
        var prix = $('#prix').val();

        if(ref == "" || prod=="" || prix=="" )
        {
            $('#message').html('Veuillez remplire les champs');
        }
        else
        {
            $.ajax(
                {
                    url : 'produit_insert.php',
                    method: 'post',
                    data:{ref:ref,prod:prod,prix:prix},
                    success: function(data)
                    {
                        $('#message').html(data);
                        $('#Registration').modal('show');
                        $('form').trigger('reset');
                        view_record_pd();
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

function delete_record_pd()
{
    $(document).on('click','#btn_delete',function()
    {
        var Delete_ID = $(this).attr('data-id1');
        $('#delete').modal('show');

        $(document).on('click','#btn_delete_record',function()
        {
            $.ajax(
                {
                    url: 'produit_delete.php',
                    method: 'post',
                    data:{Del_ID:Delete_ID},
                    success: function(data)
                    {
                        $('#delete-message').html(data).hide(5000);
                        view_record_pd();
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
                url: 'produit_get_data.php',
                method: 'post',
                data:{id:id},
                dataType: 'JSON',
                success: function(data)
                {
                    //console.log(data)
                   $("#ID").val(data[0]);
                   $("#UP_Ref").val(data[1]);
                   $("#Up_Prod").val(data[2]);
                  $("#Up_Prix").val(data[3]);
                  $("#update").modal("show");
                }
                
            })
    })}

    
    function update_record_pd()
{
    
    $(document).on('click','#btn_update',function()
    {
        var UpdateID = $('#ID').val();
        var UpdateRef = $('#Up_Ref').val();
        var UpdateProd = $('#Up_Prod').val();
        var UpdatePrix = $('#Up_Prix').val();

        if(UpdateRef=="" || UpdateProd==""|| UpdatePrix=="")
        {
            $('#up-message').html('Remplire les champs');
            $('#update').modal('show');
        }
        else
        {
            $.ajax(
                {
                    url: 'Produit_update.php',
                    method: 'post',
                    data:{P_ID:UpdateID,P_Ref:UpdateRef,P_Prod:UpdateProd,P_Prix:UpdatePrix},
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