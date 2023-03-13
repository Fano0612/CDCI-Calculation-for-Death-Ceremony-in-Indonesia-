


<?php
require_once "app/controllers/C_DeathPeople.php";

?>
    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CDCI(Calculation for Death Ceremony in Indonesia)</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css" />
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
        <link rel="stylesheet" href="css/tooplate-style.css">

        <script>
            document.documentElement.className = "js";
            var supportsCssVars = function() {
                var e, t = document.createElement("style");
                return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
            };
            supportsCssVars() || alert("");
        </script>

    </head>

    <body>
        <div id="tm-bg"></div>
        <div id="tm-wrap">
            <div class="tm-main-content">
                <div class="container tm-site-header-container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
                            <div class="tm-site-header">
                                <h1 class="mb-4">CDCI</h1>
                                <img src="img/underline.png" class="img-fluid mb-4">
                                <p>Calculation for Death Ceremony in Indonesia</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="content">
                                <div class="grid">


                                    <div class="grid__item" id="home-link">
                                        <div class="product">
                                            <div class="tm-nav-link">
                                                <i class="fas fa-book fa-3x tm-nav-icon"></i>
                                                <span class="tm-nav-text">Data Update</span>
                                                <div class="product__bg"></div>
                                            </div>
                                            <div class="product__description">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Welcome to CDCI</h2>
                                                        <div class = "mainEdit" >

                                                            <form action="" method="POST">
                                                            <table border ="3">
                                                                <?php 
                                                                $Con = new C_DeathPeople();
                                                                $nik = $_GET['e'];
                                                                $D = "SELECT * FROM death_people WHERE nik = $nik";
                                                                $DExecution = $Con->model->execute($D);
                                                                $row = $Con->model->Catch($DExecution)?>
                                                            <tr align="center">
                                                            <td>ID Number</td>
                                                            <td><input type="text"name="nik" value="<?=$row[0]?>" size="50" readonly
                                                            />
                                                            </td>
                                                            </tr>
                                                            <tr align="center">
                                                            <td>Name</td>
                                                            <td><input type="text"name="nama" value="<?=$row[1]?>" size="50"
                                                            required/></td>
                                                            </tr>
                                                            <tr align="center">
                                                            <td>Date of Death</td>
                                                            <td><input type="text"name="tanggalkematian" value="<?=$row[2]?>" size="50"
                                                            required/></td>
                                                            </tr>
                                                            <tr align="center">
                                                            <td><input type="submit" name="submit" value="Update"/></td>
                                                       
                                                            </tr>
                                                          
                                                            </table>
                                                            </form>
                                                            </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>






                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer>
                    <p class="small tm-copyright-text">Copyright &copy; <span class="tm-current-year">2020</span> Fano Mulyadi</p>
                </footer>
            </div>
        </div>
        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script src="slick/slick.min.js"></script>
        <script src="js/anime.min.js"></script>
        <script src="js/main.js"></script>


    </body>

    </html>
    <?php
if(isset($_POST['submit'])){
    $main = new C_DeathPeople();
    $main->Update();
    }
    ?> 