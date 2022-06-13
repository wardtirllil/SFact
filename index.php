<?php
    include('includes/header.php');
    require_once('includes/connection.php');
    
    
?>

<body class="bg-dark">
  <div class="container p-4"></div>
  <div class="container p-4 text-light"  style ='font-family: "Lucida Console", "Courier New", monospace;'><h1> <span><i class="fa-solid fa-chart-pie"></i></span>DASHBOARD</h1></div>

    <div class="container p-4">
        <div class="row">
            <div class="col-sm-4 offset-sm-2">
                <div class="stat-card">
                    <div class="stat-card__content">
                        <p class="text-uppercase mb-1 text-muted">Revenue</p>
                        <h2><b>TND</b> 1,254</h2>
                        <div>
                            <span class="text-success font-weight-bold mr-1"><i class="fa fa-arrow-up"></i> +5%</span>
                            <span class="text-muted">vs last 28 days</span>
                        </div>
                    </div>
                    <div class="stat-card__icon stat-card__icon--success">
                        <div class="stat-card__icon-circle">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="stat-card">
                    <div class="stat-card__content">
                        <a href="clients.php" style="text-decoration: none;"><p class="text-uppercase mb-1 text-muted">Clients</p></a>
                        <h2><?php
                        $sql="select count(*) as total from client";
                        $result=mysqli_query($con,$sql);
                        $data=mysqli_fetch_assoc($result);
                         echo $data['total'];?></h2>
                        <div>
                            <span class="text-success font-weight-bold mr-1"><i class="fa fa-arrow-up"></i> </span>
                            <span class="text-muted">Totale Clients</span>
                        </div>
                    </div>
                    <div class="stat-card__icon stat-card__icon--primary">
                        <div class="stat-card__icon-circle">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>

    <div class="container p-4">
        <div class="row">
            <div class="col-sm-4 offset-sm-2">
                <div class="stat-card">
                    <div class="stat-card__content">
                        <p class="text-uppercase mb-1 text-muted">Produits</p>
                        <h2>
                        <?php
                        $sql="select count(*) as total from produit";
                        $result=mysqli_query($con,$sql);
                        $data=mysqli_fetch_assoc($result);
                         echo $data['total'];?>
                        </h2>
                        <div>
                            <span class="text-success font-weight-bold mr-1"></span>
                            <span class="text-muted">Totale Produits</span>
                        </div>
                    </div>
                    <div class="stat-card__icon stat-card__icon--success">
                        <div class="stat-card__icon-circle">
                            <i class="fa fa-suitcase"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 ">
                <div class="stat-card ">
                    <div class="stat-card__content ">
                        <p class="text-uppercase mb-1 text-muted">Factures</p>
                        <h2>21</h2>
                        <div>
                            <span class="text-success font-weight-bold mr-1"><i class="fa fa-arrow-up"></i></span>
                            <span class="text-muted">Totale Factures</span>
                        </div>
                    </div>
                    <div class="stat-card__icon stat-card__icon--primary">
                        <div class="stat-card__icon-circle">
                        <i class="fa-solid fa-file-invoice"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>

</body>