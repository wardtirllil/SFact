<?php
    include('includes/header.php');
echo '<script src="js/produit.js"></script>';
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
              <div id="table_produit"></div>
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
            <h3 class="text-dark">Nouveau Produit</h3>
          </div>
          <div class="modal-body">
          <p id="message" class="text-dark"></p>
            <form>
              <input type="text" class="form-control my-2" placeholder="REF" id="ref">
              <input type="text" class="form-control my-2" placeholder="Nom Produit" id="prod">
              <input type="text" class="form-control my-2" placeholder="Prix" id="prix">
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
            <h3 class="text-dark">Modifier le Produit</h3>
          </div>
          <div class="modal-body">
          <p id="up-message" class="text-dark"></p>
            <form>
              <input type="hidden" class="form-control my-2" placeholder="ID" id="ID">
              <input type="text" class="form-control my-2" placeholder="REF" id="Up_Ref">
              <input type="text" class="form-control my-2" placeholder="PRODUIT" id="Up_Prod">
              <input type="text" class="form-control my-2" placeholder="PRIX" id="Up_Prix">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" id="btn_update">Modifier</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_close">Quitter</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>