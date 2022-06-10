
<?php
    include('../includes/header.php'); ?>
<body class="bg-dark">
<script src="../js/myjs.js"></script>
<!--Navigation-->
<div class="container-fluid">
    <div class="row">
      <div class="col">
          <div class="card mt-5">
            <div class="card-title ml-5 my-2">
              <!--Registration Button--> 
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Registration">Ajouter un client </button>
            </div>
            <div class="card-body">
            <p id="delete-message" class="text-dark"></p>
              <div id="table_client"></div>
            </div>
          </div>
        </div>
      </div>
    </div>