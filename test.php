<?php
    $con = mysqli_connect('localhost','root','','test' );
            if(!$con){
                die('please check your connection'.mysqli_error());
            }
        

        $query = "SELECT * FROM client where id = 1" ;
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
    
    ?>