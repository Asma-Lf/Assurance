<?php include 'config/config.php';?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>MEDINOVA - Hospital Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
            rel="stylesheet">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
            rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css"
            rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
            rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css?v=<?=$version?>" rel="stylesheet">
    </head>

    <body>
        <!-- Topbar Start -->
        <?php include "asset/navbar0.php" ?>
        <!-- Topbar End -->


        <!-- Navbar Start -->
        <?php include "asset/navbar.php" ?>
        <!-- Navbar End -->





        <!-- Appointment Start -->
        <div class="container-fluid bg-primary my-5 py-5">
            <div class="container py-5">
                <div class="row gx-5">
                    <div class="col-lg-8 mb-5 mb-lg-0 ">
                        <div class="mb-4">
                            <h5 class="d-inline-block text-white text-uppercase
                                border-bottom border-5">concurrents d'énergie
                            </h5>
                            <h2 class="display-4">Les concurrents d'EDF et Engie
                                en gaz et électricité</h2>
                        </div>
                        <p class="text-white mb-5">Les concurrents d'EDF et
                            Engie en gaz et électricité
                            EDF et Engie n'ont plus le monopole de la fourniture
                            d'énergie, découvrez les acteurs du marché français.
                        </p>
                    </div>
                    <img class=" col-lg-4 d-none d-lg-block"
                        src="img/concurrents.jpg ">

                </div>

            </div>
        </div>
        <!-- Appointment End -->
        <!-- Table Start -->
        <table class="table">
            <tbody>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-4">
                                <img src="img/test-company.jpg">
                            </div>
                            <div class="col-6">
                                <p>Nouveau prestataire sur le marché
                                    de
                                    l'énergie, le fournisseur Llum promet de
                                    l'énergie
                                    verte tout en souhaitant promouvoir le
                                    dynamisme
                                    du
                                    territoire local</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-4">
                                <img src="img/test-company.jpg">
                            </div>
                            <div class="col-6">
                                <p>Nouveau prestataire sur le marché
                                    de
                                    l'énergie, le fournisseur Llum promet de
                                    l'énergie
                                    Fverte tout en souhaitant promouvoir le
                                    dynamisme
                                    du
                                    territoire local</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>


        <!-- Table End -->



        <!-- Footer Start -->
        <?php include "asset/footer.php" ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Template Javascript -->
        <script src="js/main.js?v=<?=$version?>"></script>
    </body>

</html>