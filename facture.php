<html>

<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link rel="stylesheet" href="style.css">
    <link rel="license" href="https://www.opensource.org/licenses/mit-license/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script src="js/script.js"></script>
</head>
<?php
$type = $_GET['doc_type'];
?>
<body>
    <header>
        <h1 contenteditable><?php echo $type; ?></h1>
        <address contenteditable>
            <p>DMCOM COMPANY</p>
            <p>App 02<br>Kantaoui, Sousse 4000</p>
            <p>+216 98 00 00 00</p>
        </address>
        <span><img alt="" src="photos/logo.png"><input type="file" accept="image/*"></span>
    </header>
    <article>
        <h1>Recipient</h1>
        <address contenteditable>
            <p>Client : Foulen</p>
            <p>Adresse : Lurem Ipsum</p>
            <p>Téléphone : 94851256</p>
        </address>
        <table class="meta">
            <tr>
                <th><span contenteditable><?php echo $type; ?> #</span></th>
                <td><span contenteditable>1</span></td>
            </tr>
            <tr>
                <th><span contenteditable>Date</span></th>
                <td><span contenteditable><?php echo date("d/m/Y"); ?></span></td>
            </tr>
            <tr>
                <th><span contenteditable>Totale</span></th>
                <td><span id="prefix" contenteditable>TND</span><span>600.00</span></td>
            </tr>
        </table>
        <table class="inventory">
            <thead>
                <tr>
                    <th><span contenteditable>Produit</span></th>
                    <th><span contenteditable>Ref</span></th>
                    <th><span contenteditable>Prix</span></th>
                    <th><span contenteditable>Qte</span></th>
                    <th><span contenteditable>Totale</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><a class="cut">-</a>
                <?php
                        require_once("includes/connection.php");
                        global $con ;
                        $value = "";
                        $req = "select * from produit where id = ". $_GET['idProduit'];
                        $result = mysqli_query($con,$req);
                        while($row=mysqli_fetch_assoc($result))
                            { 
                            $value .="
                            <span contenteditable>".$row['prod']."</span></td>
                            <td><span contenteditable>".$row['ref']."</span></td>
                            <td><span data-prefix>TND</span><span contenteditable>".$row['prix']."</span></td>";
                            }
                            echo $value;
                    ?>

                    <td><span contenteditable>1</span></td>
                    <td><span data-prefix>TND</span><span>0.00</span></td>
                </tr>
            </tbody>
        </table>
        <a class="add">+</a>
        <table class="balance">
            <tr>
                <th><span contenteditable>Totale HT</span></th>
                <td><span data-prefix>TND</span><span>600.00</span></td>
            </tr>
            <tr>
                <th><span contenteditable>TVA</span></th>
                <td><span contenteditable>0.00</span></td>
            </tr>
            <tr>
                <th><span contenteditable>Timbre Fiscal</span></th>
                <td><span data-prefix>TND</span><span contenteditable>0.60</span></td>
            </tr>
            <tr>
                <th><span contenteditable>T.T.C</span></th>
                <td><span data-prefix>TND</span><span>600.00</span></td>
            </tr>
        </table>
    </article>
    <aside class="grid-container ">
        <div class="grid-item">
            <h1><span contenteditable>Informations Bancaire</span></h1>
            <div contenteditable>
                <p style="font-weight: bold;">Banque Attijari Bank</p>
            </div>
            <div contenteditable>
                <p>SWIFT/BIC BSTUTNTT</p>
            </div>
            <div contenteditable>
                <p>IBAN TN5904022108007148284870</p>
            </div>
        </div>
        <div class="grid-item">
            <h1><span contenteditable>Information de contact</span></h1>
            <div contenteditable>
                <p style="font-weight: bold;">Flen ben Foulen</p>
            </div>
            <div contenteditable>
                <p> <i class="fa fa-mobile"></i> +216 98 00 00 00</p>
            </div>
            <div contenteditable>
                <p> <i class="fa fa-envelope"></i> contact@dmcom-company.com</p>
            </div>
        </div>
        <div class="grid-item">
            <h1><span contenteditable>STE DMCOM COMPANY</span></h1>
            <div contenteditable>
                <p style="font-weight: bold;">App 9, 1er étage imm Monplaisir Sahloul 3 4000 sousse</p>
            </div>
            <div contenteditable>
                <p>Code TVA: 1699031/s/A/M/000</p>
            </div>
        </div>
    </aside>

</body>

</html>