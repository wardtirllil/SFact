<?php
    require_once('connection.php');

// ############################ CLIENT ################################
    //Insert record function client
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
                        <td> Modifier </td>
                        <td> Supprimer </td>
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

    // Get Particular Record client
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



// Update Function client
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


// #################################### PRODUIT ################################

// List Product

function display_record_pd()
    {
        global $con;
        $value = "";
        $value = '<table class="table table-bordered">
                    <tr>
                        <td> ID </td>
                        <td> REF </td>
                        <td> PRODUITS </td>
                        <td> PRIX </td>
                        <td> Modifier </td>
                        <td> supprimer </td>
                    </tr>';
        $query = "select * from produit ";
        $result = mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($result))
        {
            $value.= ' <tr>
                            <td> '.$row['id'].' </td>
                            <td> '.$row['ref'].' </td>
                            <td> '.$row['prod'].' </td>
                            <td> '.$row['prix'].'</td>
                            <td> <button class="btn btn-success" id="btn_edit" data-id='.$row['id'].'><span><i class="fa-solid fa-pen-to-square"></i></span> Modifier</button> </td>
                            <td> <button class="btn btn-danger" id="btn_delete" data-id1='.$row['id'].'><span><i class="fa-solid fa-trash-can"></i></span> Supprimer</button> </td>
                        </tr>';
        }
        $value.='</table>';
        echo json_encode(['status'=>'success','html'=>$value]);
    }
//Insert record function product
function InsertRecord_pd(){
    global $con;
    $REF = $_POST['ref'];
    $PROD = $_POST['prod'];
    $PRIX = $_POST['prix'];
    
    $query = " insert into produit (ref,prod,prix) values('$REF','$PROD','$PRIX')";
    $result= mysqli_query($con,$query);

    if($result)
    {
        echo ' Produit ajoutée';
    }
    else
    {
        echo ' Erreur d\'insertion ';
    }


}
//Delete record function product
function delete_record_pd()
{
    global $con;
    $Del_Id = $_POST['Del_ID'];
    $query = "delete from produit where ID='$Del_Id' ";
    $result = mysqli_query($con,$query);

    if($result)
    {
        echo ' produit supprimée ';
    }
    else
    {
        echo ' Erreur ';
    }
}
  // Get Particular Record product
  function get_record_pd()
  {
      
      global $con;
      $id = $_POST['id'];
      $query = "SELECT * FROM produit WHERE id =" . $id;
      $result = mysqli_query($con,$query);

      while($row=mysqli_fetch_assoc($result))
      {
          $Produit_data = array();
          $Produit_data[0]=$row['id'];
          $Produit_data[1]=$row['ref'];
          $Produit_data[2]=$row['prod'];
          $Produit_data[3]=$row['prix'];
      }
      echo json_encode($Produit_data);
  }



// Update Function procuct
function update_value_pd()
{
  global $con;
  $Update_ID = $_POST['P_ID'];
  $Update_Ref =$_POST['P_Ref'];
  $Update_Prod = $_POST['P_Prod'];
  $Update_Prix = $_POST['P_Prix'];

  $query = "update produit set ref='$Update_Ref', prod='$Update_Prod', prix='$Update_Prix' where ID='$Update_ID '";
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