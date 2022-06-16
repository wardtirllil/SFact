<html lang="en">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
</head>
<?php
require_once("includes/connection.php");
 global $con ;
 $value = "";
$req = "select * from produit";
$result = mysqli_query($con,$req);

$value ="<select name='idProduit' id='idProduit'>";

while($row=mysqli_fetch_assoc($result))
{ 
    $value .="<option value=".$row['id'].">".$row['prod']."</option>";
}
$value .= "</select>"
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Select Dropdown Example in PHP</title>
    <style>
    .container {
        max-width: 350px;
        margin: 50px auto;
        text-align: center;
    }

    input[type="submit"] {
        margin-bottom: 20px;
    }

    .select-block {
        width: 300px;
        margin: 110px auto 30px;
        position: relative;
    }

    select {
        width: 100%;
        height: 50px;
        font-size: 100%;
        font-weight: bold;
        cursor: pointer;
        border-radius: 0;
        background-color: #1A33FF;
        border: none;
        border: 2px solid #1A33FF;
        border-radius: 4px;
        color: white;
        appearance: none;
        padding: 8px 38px 10px 18px;
        -webkit-appearance: none;
        -moz-appearance: none;
        transition: color 0.3s ease, background-color 0.3s ease, border-bottom-color 0.3s ease;
    }

    /* For IE <= 11 */
    select::-ms-expand {
        display: none;
    }

    .selectIcon {
        top: 7px;
        right: 15px;
        width: 30px;
        height: 36px;
        padding-left: 5px;
        pointer-events: none;
        position: absolute;
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .selectIcon svg.icon {
        transition: fill 0.3s ease;
        fill: white;
    }

    select:hover,
    select:focus {
        color: #000000;
        background-color: white;
    }

    select:hover~.selectIcon,
    select:focus~.selectIcon {
        background-color: white;
    }

    select:hover~.selectIcon svg.icon,
    select:focus~.selectIcon svg.icon {
        fill: #1A33FF;
    }

    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button2 {
        background-color: white;
        color: black;
        border: 2px solid #008CBA;
    }

    .button2:hover {
        background-color: #008CBA;
        color: white;
    }
    </style>
</head>

<body>
    <div class="container mt-5">
        <form action="facture.php" method="get" class="mb-3">
            <div class="select-block">
                <select name="doc_type" id="doc_type">
                    <option value="" disabled selected>Choisir type Document</option>
                    <option value="Facture">Facture</option>
                    <option value="Devis">Devis</option>
                </select>
                <label> Produit</label>
                <?php echo $value ;
                ?>
                <div class="selectIcon">
                    <svg focusable="false" viewBox="0 0 104 128" width="25" height="35" class="icon">
                        <path
                            d="m2e1 95a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm14 55h68v1e1h-68zm0-3e1h68v1e1h-68zm0-3e1h68v1e1h-68z">
                        </path>
                    </svg>
                </div>
            </div>



            <button class="button button2">Confirmer</button>
        </form>

    </div>
</body>
<script>
      $(document).ready(function () {
      $('#idProduit').selectize({
          sortField: 'text'
      });
  });
    </script>
</html>