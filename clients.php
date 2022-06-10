<?php
    include('includes/header.php');
echo '<script src="js/client.js"></script>';
?>
<body class="bg-dark">

<!--Navigation-->
<div class="container-fluid p-4">
    <div class="row">
      <div class="col">
          <div class="card mt-5">
            <div class="card-title ml-5 my-2">
              <!--Registration Button--> 
              <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#Registration"><i class="fa-solid fa-user-plus"></i> Ajouter un client </button>
            </div>
            <div class="card-body">
            <p id="delete-message" class="text-dark"></p>
              <div id="table_client"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Registration Modal-->
    <div class="modal" id="Registration">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Nouveau Client</h3>
          </div>
          <div class="modal-body">
          <p id="message" class="text-dark"></p>
            <form>
              <input type="text" class="form-control my-2" placeholder="Nom et Prenom" id="Name">
              <input type="text" class="form-control my-2" placeholder="Email" id="Email">
              <input type="text" class="form-control my-2" placeholder="Telephone" id="Phone">
              <input type="text" class="form-control my-2" placeholder="Adresse" id="Adress">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" id="btn_register">Ajouter</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_close">Fermer</button>
          </div>
        </div>
      </div>
    </div> 


  <!--delete Modal-->
<div class="modal" id="delete">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Supprimer</h3>
          </div>
          <div class="modal-body">
            <p> Voulez-vous supprimer l'enregistrement ?</p>
            <button type="button" class="btn btn-success" id="btn_delete_record">Oui</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_close">Non</button>
          </div>
        </div>
      </div>
    </div>




     <!--Update Modal-->
     <div class="modal" id="update">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Modifier le Client</h3>
          </div>
          <div class="modal-body">
          <p id="up-message" class="text-dark"></p>
            <form>
              <input type="hidden" class="form-control my-2" placeholder="ID" id="Up_User_ID">
              <input type="text" class="form-control my-2" placeholder="Nom et Prenom" id="Up_Name">
              <input type="text" class="form-control my-2" placeholder="Email" id="Up_Email">
              <input type="text" class="form-control my-2" placeholder="Telephone" id="Up_Phone">
              <input type="text" class="form-control my-2" placeholder="Adresse" id="Up_Adress">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" id="btn_update">Update Now</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_close">Close</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>