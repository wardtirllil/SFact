<?php
    require_once('connection.php');


    //Insert record function
    function InsertRecord_cl(){
        global $con;
        $Name = $_POST['CName'];
        $Email = $_POST['CEmail'];
        $Phone = $_POST['CPhone'];
        $Adress = $_POST['CAdress'];
        
        $query = " insert into client (nom,email,telephone,adresse) values('$Name','$Email','$Phone','$Adress')";
        $result= mysqli_query($con,$query);

        if($result)
        {
            echo ' Your Record Has Been Saved in the Database';
        }
        else
        {
            echo ' Please Check Your Query ';
        }


    }

    function display_record_cl()
    {
        global $con;
        $value = "";
        $value = '<table class="table table-bordered">
                    <tr>
                        <td> ID </td>
                        <td> Nom et Prenom</td>
                        <td> Email </td>
                        <td> Telephone</td>
                        <td> Adresse</td>
                        <td> Action </td>
                    </tr>';
        $query = "select * from client ";
        $result = mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($result))
        {
            $value.= ' <tr>
                            <td> '.$row['id'].' </td>
                            <td> '.$row['nom'].' </td>
                            <td> '.$row['email'].' </td>
                            <td> '.$row['telephone'].'</td>
                            <td> '.$row['adresse'].'</td>
                            <td> <button class="btn btn-success" id="btn_edit" data-id='.$row['id'].'><span><i class="fa-solid fa-pen-to-square"></i></span> Modifier</button> </td>
                            <td> <button class="btn btn-danger" id="btn_delete" data-id1='.$row['id'].'><span><i class="fa-solid fa-trash-can"></i></span> Supprimer</button> </td>
                        </tr>';
        }
        $value.='</table>';
        echo json_encode(['status'=>'success','html'=>$value]);
    }


    function delete_record_cl()
    {
        global $con;
        $Del_Id = $_POST['Del_ID'];
        $query = "delete from client where ID='$Del_Id' ";
        $result = mysqli_query($con,$query);

        if($result)
        {
            echo ' Your Record Has Been Delete ';
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }

    // Get Particular Record
    function get_record_cl()
    {
        
        global $con;
        $id = $_POST['id'];
        $query = "SELECT * FROM client WHERE id =" . $id;
        $result = mysqli_query($con,$query);

        while($row=mysqli_fetch_assoc($result))
        {
            $Client_data = array();
            $Client_data[0]=$row['id'];
            $Client_data[1]=$row['nom'];
            $Client_data[2]=$row['email'];
            $Client_data[3]=$row['telephone'];
            $Client_data[4]=$row['adresse'];
        }
        echo json_encode($Client_data);
    }



// Update Function
function update_value_cl()
{
    global $con;
    $Update_ID = $_POST['C_ID'];
    $Update_Name =$_POST['C_Name'];
    $Update_Email = $_POST['C_Email'];
    $Update_Phone = $_POST['C_Phone'];
    $Update_Adress = $_POST['C_Adress'];

    $query = "update client set nom='$Update_Name', email='$Update_Email', telephone='$Update_Phone', adresse='$Update_Adress' where ID='$Update_ID '";
    $result = mysqli_query($con,$query);
    if($result)
    {
        echo ' Your Record Has Been Updated ';
    }
    else
    {
        echo ' Please Check Your Query ';
    }
}

    ?>