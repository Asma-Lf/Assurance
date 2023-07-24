<?php include 'config/config.php'; ?>
<?php

include 'admin/db.php';
$sql = 'SELECT * FROM telecoms_internet';
$statement = $conn->prepare($sql);
$statement->execute();
$fournisseurs = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>MEDINOVA - Hospital Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css?v=<?= $version ?>" rel="stylesheet" />
</head>

<body class="">
    <!-- Topbar Start -->
    <?php include "asset/navbar0.php" ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php include "asset/navbar.php" ?>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-12 text-center text-lg-center">

                    <h2 class="display-9 text-white ">Appelez Nous Pour Comparer Les Forfaits Mobiles Du Moment.
                    </h2>

                    <strong class=" text-white ">Comparateur de forfait mobile : les meilleures offres de 2023


                </div>
            </div>
        </div>
    </div>

    <div class=" section-sm section-fluid bg-default text-center m-5">
        <div class="container-fluid ">
            <h5>Comment ça marche</h5>
            <h2 class="wow fadeInLeft">Pourquoi nous faire confiance !</h2>
            <div class="d-flex justify-content-center">
            <p class="text-center" >Bienvenue dans la solution ultime pour
                économiser de l’argent sur vos factures ! Vous en avez assez de payer trop cher pour vos contrats
                d’énergie, de télécommunication, d’assurance et de crédit? Ne cherchez pas plus loin que notre site de
                comparaison de prix ! Nous vous proposons la solution ultime pour économiser sur vos factures : de la
                souscription à la résiliation, nous nous occupons de tous vos contrats. Notre comparateur de prix permet
                de faire des économies plus facilement que jamais !
            </p>
            </div>
        </div>
    </div>


    <div class="row">
    <div class="d-flex justify-content-center">
            <div class="column  ">
                <div class="card ">
                    <div>
                        <img src="img/box.png" width="88" height="66.04" class="lg-start">
                    </div>
                    <h3>Comparateur offres internet</h3>
                    <p>
                    Découvrir
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div>
                        <img src="img/tel.png" width="88" height="66.04" class="lg-start">
                    </div>
                    <h3>Comparateur offres mobile</h3>
                    <p>
                    Découvrir
                    </p>
                </div>


            </div>
        </div>

    </div>



    <!--confiance-->

    
    <!--Table Start-->
    <div class="row mt-5">
        <h3 class="text-center text-primary display-6">Les meilleurs offres</h3>
        <h6 class="text-center font-text1">Le top 10 des offres les moins cheres au 2023</h6>
        <div class="col-10 offset-1">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>OPERATEUR</th>
                        <th>NOM DE L'OFFRE</th>
                        <th>DEBIT</th>
                        <th>PRIX</th>
                        <th>CONTACT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fournisseurs as $fournisseur) : ?>
                        <tr>

                            <td><img src="<?php echo "image_upload/" . $fournisseur->name; ?> " style="width:100%;
    max-height:150px;"></td>
                            <td><?= $fournisseur->nom_offre; ?></td>
                            <td><?= $fournisseur->debit; ?></td>
                            <td><?= $fournisseur->prix; ?></td>
                            <td><?= $fournisseur->contact; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>FOURNISSEUR</th>
                        <th>NOM DE L'OFFRE</th>
                        <th>PRIX PAR AN</th>
                        <th>PRIX DE L'ABONNEMENT ANNUEL</th>
                        <th>CONTACT</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>





    <!--Table End-->



    <div class="container-fluid text-center" style="background-color: #EBEBEB;">

        <h2 class="wow fadeInLeft">NOS
            FOURNISSEURS</h2>
        <p class="quote-jean wow fadeInRight" data-wow-delay=".1s">Trouvez les meilleures offres et économisez votre argent. </p>

        
    </div>






    <?php include "asset/mission.php"?>

    <?php include "asset/exp.php"?>






    




    


    <!--Table End-->

    <!-- Footer Start -->
    <?php include "asset/footer.php" ?>

    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js?v=<?= $version ?>"></script>
</body>

</html>