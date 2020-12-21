<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Flattern - Flat and trendy bootstrap site template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Description" content="ayam potong">
    <meta name="author" content="adi jaya" />

    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/css/fancybox/jquery.fancybox.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/css/jcarousel.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/css/flexslider.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/css/slitslider.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet" />
    <!-- Theme skin -->
    <link id="t-colors" href="<?= base_url() ?>/assets/skins/default.css" rel="stylesheet" />
    <!-- boxed bg -->
    <link id="bodybg" href="<?= base_url() ?>/assets/bodybg/bg1.css" rel="stylesheet" type="text/css" />
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url() ?>/assets/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url() ?>/assets/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url() ?>/assets/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="<?= base_url() ?>/assets/ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/ico/favicon.png" />

</head>

<body>
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="container">
                <div class="row" style="margin-bottom: 0px;">
                    <div class="span4">
                        <div class="logo">
                            <a href="<?= base_url() ?>"><img src="<?= base_url() ?>/assets/gambar/Adi jaya logo PNG.png" alt="" class="logo" width="125" style="margin-bottom: -25px;" /></a>
                            <!-- <h1>Flat and trendy bootstrap template</h1> -->
                        </div>
                    </div>
                    <div class="span8">
                        <div class="navbar navbar-static-top" style="margin-top: 13pxf;">
                            <div class="navigation" style="margin-top: 16px;">
                                <nav>
                                    <ul class="nav topnav">
                                        <li class="dropdown <?= $uris == '' ? 'active' : '' ?>">
                                            <a href="<?= base_url() ?>">Home</a>
                                        </li>
                                        <li class="dropdown <?= $uris == 'Produk' ? 'active' : '' ?>">
                                            <a href="<?= base_url('/Produk') ?>">Produk</a>
                                        </li>
                                        <li class="dropdown <?= $uris == 'Kontak' ? 'active' : '' ?>">
                                            <a href="<?= base_url('/Kontak') ?>">Kontak</a>
                                        </li>
                                        <li class="dropdown <?= $uris == 'Tentang' ? 'active' : '' ?>">
                                            <a href="<?= base_url('/Tentang') ?>">Tentang Kami</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- end navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        <?= $this->renderSection('content') ?>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="widget">
                            <h5 class="widgetheading">Tentang Kami</h5>
                            <p>
                                ADI JAYA adalah perusahaan lokal yang bergerak dibidang distribusi daging ayam
                                broiler. Kami selalu berusaha memberikan produk
                                ayam broiler yang berkualitas & higenis sehingga aman untuk dikonsumsi.
                            </p>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="widget">
                            <h5 class="widgetheading">Kontak Kami</h5>
                            <address>
                                <strong>Adi Jaya</strong><br />
                                Jl. Insinyur soetami, Kronjo<br />
                                Tangerang, Indonesia
                            </address>
                            <p>
                                <i class="icon-phone"></i> 021 - 555 - 96
                                <br />
                                <i class="icon-envelope-alt"></i> email@domainname.com
                            </p>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="widget">
                            <h5 class="widgetheading">Menu</h5>
                            <ul class="link-list">
                                <li><a href="#">Press release</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Career center</a></li>
                                <li><a href="#">Flattern forum</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <div class="copyright">
                                <p>
                                    <span>&copy; Flattern - All right reserved.</span>
                                </p>
                                <div class="credits">
                                    <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                                    Designed by
                                    <a href="https://bootstrapmade.com/">BootstrapMade</a>
                                </div>
                            </div>
                        </div>
                        <div class="span6">
                            <ul class="social-network">
                                <li>
                                    <a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a>
                                </li>
                                <li>
                                    <a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a>
                                </li>
                                <li>
                                    <a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a>
                                </li>
                                <li>
                                    <a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a>
                                </li>
                                <li>
                                    <a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>

    <script src="<?= base_url() ?>/assets/js/jquery.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>/assets/js/jcarousel/jquery.jcarousel.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery.fancybox.pack.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery.fancybox-media.js"></script>
    <script src="<?= base_url() ?>/assets/js/google-code-prettify/prettify.js"></script>
    <script src="<?= base_url() ?>/assets/js/portfolio/jquery.quicksand.js"></script>
    <script src="<?= base_url() ?>/assets/js/portfolio/setting.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery.flexslider.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery.nivo.slider.js"></script>
    <script src="<?= base_url() ?>/assets/js/modernizr.custom.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery.ba-cond.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery.slitslider.js"></script>
    <script src="<?= base_url() ?>/assets/js/animate.js"></script>

    <!-- Template Custom JavaScript File -->
    <script src="<?= base_url() ?>/assets/js/custom.js"></script>
</body>

</html>