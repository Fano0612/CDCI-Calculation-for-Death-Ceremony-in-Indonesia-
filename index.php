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
                                                <i class="fas fa-home fa-3x tm-nav-icon"></i>
                                                <span class="tm-nav-text">Welcome</span>
                                                <div class="product__bg"></div>
                                            </div>
                                            <div class="product__description">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Welcome to CDCI</h2>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                        <img src="img/JavaDeathCeremony.jpg" class="img-fluid mb-3">
                                                        <p>CDCI is a calculator to calculate the days on when to hold the death ceremony with the Javanese calendar.</p>
                                                        <p>Using this calculator, it'll simplify the user to decide when will the death ceremony be held</p>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                        <p>Indonesia is a country various tribes, languages, cultures, etc. </p>
                                                        <p>Within it, Indonesia has several types on how to hold a death ceremony</p>
                                                        <img src="img/BaliDeathCeremony.jpg" class="img-fluid">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__item" id="team-link">
                                        <div class="product">
                                            <div class="tm-nav-link">
                                                <i class="fas fa-users fa-3x tm-nav-icon"></i>
                                                <span class="tm-nav-text">Input</span>
                                                <div class="product__bg"></div>
                                            </div>
                                            <div class="product__description">
                                                <div class="p-sm-4 p-2">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <h2 class="tm-page-title">CDCI(Calculation for Death Ceremony in Indonesia)</h2>
                                                        </div>
                                                    </div>
                                                    <div class="row tm-reverse-sm">
                                                        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                                        <form action="" method="POST">
                                                        <table>
                                                        <tr align="center">
                                                        <td>ID Number </td>
                                                        <td><input type="text" 
                                                        name="nik" size="45" /></td>
                                                        </tr>
                                                        <tr align="center">
                                                        <td>Name</td>
                                                        <td><input type="text" 
                                                        name="nama" size="45"/></td>
                                                        </tr>
                                                        <tr align="center">
                                                        <td>Date of Death</td>
                                                        <td><input type="text" 
                                                        name="tanggalkematian" size="45"/></td>
                                                        </tr>
                                                        <tr align="center">
                                                        <td><input type="submit" name="submit"/></td>
                                                        </tr>
                                                        </table>
                                                        </form>
                                                        <?php
                                                        if(isset($_POST['submit'])){ 
                                                        $M = new C_DeathPeople();
                                                        $M->Insertx();
                                                        }
                                                        ?>
        
                                                        
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-lg-0 mb-sm-4 mb-4">
                                                            <img src="img/RIP.jpg" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__item">
                                        <div class="product">
                                            <div class="tm-nav-link">
                                                <i class="fas fa-handshake fa-3x tm-nav-icon"></i>
                                                <span class="tm-nav-text">List</span>
                                                <div class="product__bg"></div>
                                            </div>
                                            <div class="product__description">
                                                <div class="p-sm-4 p-2">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <h2 class="tm-page-title">List</h2>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                        <table border = "3">
                                                        <tr align="center">
                                                        <td>NIK</td>
                                                        <td>Nama</td>
                                                        <td>Tanggal Kematian</td>
                                                        <td>Perhitungan</td>
                                                        <td colspan = "2">Aksi</td>
                                                        </tr>
                                                        <?php
                                                        $Host = "localhost";
                                                        $User = "root";
                                                        $Password = "";
                                                        $Name = "counting";
                                                        $Con = new C_DeathPeople();
                                                        $Connect = mysqli_connect($Host,$User,$Password,$Name);
                                                        $D = "SELECT * FROM death_people";
                                                        if(isset($_GET['d'])){ 
                                                            $nomor = $_GET['d'];
                                                            $Con->Delete($nomor);
                                                        }
                                                        $DExecution = $Con->model->execute($D);
                                                         
                                                        while($row = $Con->model->Catch($DExecution)){
                                                            $row[3] = $Con->Counter($row[2]);
                                                        echo "<tr>
                                                        <td>$row[0]</td>
                                                        <td>$row[1]</td>
                                                        <td>$row[2]</td>
                                                        <td>$row[3]</td>
                                                        <td><a href='Edit.php?e=$row[0]'>Update</a></td>
                                                        <td><a href='index.php?d=$row[0]'onClick=\"return confirm('Hapus data?')\"\>Delete</a></td>
                                                        </tr>";
                                                        }
                                                        ?>
                                                        </table>



                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid__item">
                                        <div class="product">
                                            <div class="tm-nav-link">
                                                <i class="fas fa-comments fa-3x tm-nav-icon"></i>
                                                <span class="tm-nav-text">Contact</span>
                                                <div class="product__bg"></div>
                                            </div>
                                            <div class="product__description">
                                                <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <h2 class="tm-page-title">Contact Us</h2>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-12">
                                                            <img src="img/Email.png" alt="" style="width:60px;height:60px;">
                                                            <p>Fanomulyadi@gmail.com</p>
                                                            <br>
                                                            <img src="img/Phone.png" alt=""style="width:60px;height:60px;">
                                                            <p>+62813********</p>
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
        <script>
            function setupFooter() {
                var pageHeight = $('.tm-site-header-container').height() + $('footer').height() + 100;

                var main = $('.tm-main-content');

                if ($(window).height() < pageHeight) {
                    main.addClass('tm-footer-relative');
                } else {
                    main.removeClass('tm-footer-relative');
                }
            }

            $(function() {

                setupFooter();

                $(window).resize(function() {
                    setupFooter();
                });

                $('.tm-current-year').text(new Date().getFullYear());      
            });
        </script>

    </body>

    </html>