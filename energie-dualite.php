<?php
require 'admin/db.php';
$sql = 'SELECT * FROM energie_dualite';
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
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

                    <h2 class="display-9 text-white ">Maximisez Vos Économies Avec JEKOMPAR
                    </h2>

                    <strong class=" text-white ">Comparateur énergie : les meilleures offres de 2023!<br>

                </div>
            </div>
        </div>
    </div>


    <!--Nos services Start-->






   


    <div class="container-fluid text-center" style="background-color: #EBEBEB;">

        <h2 class="wow fadeInLeft">NOS
            FOURNISSEURS</h2>
        <p class="quote-jean wow fadeInRight" data-wow-delay=".1s">Trouvez les meilleures offres et économisez votre argent. </p>


    </div>







    <!--Nos services End-->





    <!--Table Start-->
    <div class="row mt-5">
        <h3 class="text-center text-primary display-6">Les meilleurs offres</h3>
        <h6 class="text-center font-text1">Le top 10 des offres les moins cheres au 2023</h6>
        <div class="col-10 offset-1">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>FOURNISSEUR</th>
                        <th>NOM DE L'OFFRE</th>
                        <th>PRIX PAR AN</th>
                        <th>PRIX DE L'ABONNEMENT ANNUEL</th>
                        <th>PRIX DU KWH</th>
                        <th>CONTACT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fournisseurs as $fournisseur) : ?>
                        <tr>

                            <td><img src="<?php echo "image_upload/" . $fournisseur->name; ?>"></td>
                            <td><?= $fournisseur->nom; ?></td>
                            <td><?= $fournisseur->prix_an; ?></td>
                            <td><?= $fournisseur->prix_abonnement_annuel; ?></td>
                            <td><?= $fournisseur->prix_kwh; ?></td>
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
                        <th>PRIX DU KWH</th>
                        <th>CONTACT</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>


    <div class=" section-sm section-fluid bg-default text-center m-5">
        <div class="container-fluid text-center ">

            <h2 class="wow fadeInLeft">la solution pour s’y retrouver</h2>
            <p class="text-center " data-wow-delay=".1s">Le budget consacré à l’énergie n’a pas cessé de
                croître ces dernières années. Pour aider les particuliers à supporter cette importante charge
                financière, le marché du gaz est ouvert à la concurrence. Vous pouvez comparer les offres de gaz d’un
                large panel afin de choisir celle qui est la plus adaptée à votre foyer. Comparer toutes les offres une
                à une est presque impossible. Mais avec nos experts la mission est devenue possible.
            </p>
        </div>
    </div>




    <!--Table End-->




    <div class="container-fluid text-center" style="background-color: #EBEBEB;">

        <h2 class="wow fadeInLeft">NOS
            FOURNISSEURS</h2>
        <p class="quote-jean wow fadeInRight" data-wow-delay=".1s">Trouvez les meilleures offres et économisez votre
            argent. </p>


    </div>






    <?php include "asset/mission.php" ?>

    <?php include "asset/exp.php" ?>





















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
    <!-- JavaScript Libraries -->
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>