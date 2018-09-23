<?php
require "config.php";
require "common.php";

if (isset($_POST['submit'])) {
    if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    echo "hai";
    try  {
      $connection = new PDO($dsn, $username, $password, $options);

      $new_user = array(
        "nama" => $_POST['name'],
        "email"  => $_POST['email'],
        "pesan"     => $_POST['message'],
      );

      $sql = sprintf(
        "INSERT INTO %s (%s) values (%s)",
        "contact",
        implode(", ", array_keys($new_user)),
        ":" . implode(", :", array_keys($new_user))
      );

      $statement = $connection->prepare($sql);
      $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
  }

?>

<!DOCTYPE html>
<html>

    <head>
        <title>MUSEUM AND HERITAGE INTERACTIVE INDONESIA</title>
        <meta charset="utf-8"/>
        <meta
            content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
            name="viewport">
        <!-- css -->
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800"
            rel="stylesheet"
            media="screen">

        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet" media="screen">
        <link href="color/default.css" rel="stylesheet" media="screen">

        <!-- ======================================================= Theme Name: Alstar
        Theme URL: https://bootstrapmade.com/alstar-free-parallax-bootstrap-template/
        Author: BootstrapMade.com Author URL: https://bootstrapmade.com
        ======================================================= -->
    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button
                        type="button"
                        class="navbar-toggle"
                        data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle nav</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">MAIN INDONESIA</a>

                </div>
                <a class="menu-toggle rounded" href="#">
                    <i class="fa fa-bars"></i>
                  </a>
                  <div id="sidebar-wrapper">
                    <ul class="sidebar-nav #sidebar-nav-ul">
                      <li class="sidebar-brand">
                        <a class="js-scroll-trigger" href="#"></a>
                      </li>
                      <li class="sidebar-nav-item">
                        <a class="js-scroll-trigger" href="#">Ke Halaman Utama</a>
                      </li>
                      <li class="sidebar-nav-item">
                        <a class="js-scroll-trigger" href="#team">Tentang Kami</a>
                      </li>
                      <li class="sidebar-nav-item">
                        <a class="js-scroll-trigger" href="#what-we-do">Yang Kami Lakukan</a>
                      </li>
                      <li class="sidebar-nav-item">
                        <a class="js-scroll-trigger" href="#portfolio2">Portfolio Kami</a>
                      </li>
                      <li class="sidebar-nav-item">
                        <a class="js-scroll-trigger" href="#contact">Hubungi Kami</a>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- intro area -->
        <div id="intro">
            <div class="intro-text">
                <div class="container">
                    <div class="col-md-12 logo">
                        <img src="img/asets/logo.png" width="150px" alt="">
                    </div>
                    <div class="col-md-12">
                        <div id="rotator">
                            <h3>MUSEUM AND HERITAGE INTERACTIVE INDONESIA</h3>
                            <!-- <h1><span class="1strotate">MUSEUM AND HERITAGE INTERACTIVE INDONESIA,
                            MUSEUM AND HERITAGE INTERACTIVE INDONESIA, MUSEUM AND HERITAGE INTERACTIVE
                            INDONESIA</span></h1> -->
                            <div class="line-spacer"></div>
                            <p>
                                <span>Digital Engagement in</span>
                                <span class="2ndrotate">
                                    Culture, Heritage, Museum</span>
                            </p>
                        </div>
                        <img id="slide-bawah" src="img/asets/slide-bawah.png" width="100px" alt="">
                    </div>
                </div>
            </div>
        </div>

        <section class="container-content"  style="
        background-image: url(img/asets/bg-2-bw.jpg); background-size: cover;background-attachment:fixed;background-position: center; padding-top:-50%; padding-botton:-30%; background-size: cover;
        ">
            <!-- Team -->
            <section id="team" class="home-section">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-12">
                            <div class="section-heading">
                                <h2>Tentang Kami</h2>
                                <div class="heading-line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <p style="text-align:justify">Kami memiliki mimpi agar masyarakat Indonesia memiliki keinginan untuk mengunjungi warisan budaya dan museum yang tersebar di seluruh penjuru negeri.
                            Melalui teknologi imersif, kami berusaha mempromosikan keunikan dan keragaman budaya, sejarah, dan tradisi yang ada di Indonesia.</p>
                            <p style="text-align:justify">Tim kami senangberbagi pengetahuan mengenai cagar budaya museum dan penggunaan teknologi interaktif. 
                            Kami semangat untuk dapat berkolaborasi dengan institusi visioner yang memilik mimpi yang sama dnegan kami. <a href="#contact">Hubungi kami.</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <br><br><br><br><br><br>
                        <div class="col-md-10 col-md-offset-1">
                            <div style="position:relative">
                                <div>
                                    <img src="img/tim/gedung1.png" alt="" width="100%" class="img-responsive"/> 
                                </div>
                                <div style="position:absolute; left:0; bottom:0;">
                                    <img src="img/tim/gedung1.png" alt="" width="100%" class="img-responsive"/>    
                                </div>
                                <div style="position:absolute; left:0; bottom:0;">
                                    <img src="img/tim/gedung2.png" alt="" width="100%" class="img-responsive"/>    
                                </div>
                                <div style="position:absolute; left:0; bottom:0;">
                                    <img src="img/tim/gedung3.png" alt="" width="100%" class="img-responsive"/>    
                                </div>
                                <div style="position:absolute; left:9%; bottom:0;">
                                    <img src="img/tim/becak.png" alt="" width="5%" class="img-responsive"/>    
                                </div>
                                <div style="position:absolute; left:60%; bottom:0;">
                                    <img src="img/tim/ondel2.gif" alt="" width="10%" class="img-responsive"/>    
                                </div>
                                <div style="position:absolute; left:62%; bottom:0;">
                                    <img src="img/tim/ondel2.gif" alt="" width="10%" class="img-responsive"/>    
                                </div>
                                <div style="position:absolute; left:80%; bottom:0;">
                                    <img src="img/tim/jaipong.gif" alt="" width="15%" class="img-responsive"/>    
                                </div>
                                <div style="position:absolute; left:82%; bottom:0;">
                                    <img src="img/tim/jaipong.gif" alt="" width="18%" class="img-responsive"/>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- What We Do -->
            <section id="what-we-do" class="home-section" >
                <div class="container">
                    <div class="row">
                        <div class=" col-md-12">
                            <div class="section-heading">
                                <h2>Yang Kami Lakukan</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="box-team col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="wow bounceInUp col-md-4 col-xs-9" data-wow-delay="0.1s">
                                        <img src="img/asets/web.png" alt="" width="75%" class=" img-responsive"/>
                                    </div>
                                    <div class="col-xs-12 col-md-8 content">
                                        <h2>Website</h2>
                                        <p>Kami dapat mengembangkan website untuk kebutuhan promosi, edukasi, hingga
                                            menginspirasi masyarakat</p>
                                    </div>
                                </div>
                                <div class="box-team col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class=" wow bounceInUp col-md-4 col-xs-9" data-wow-delay="0.1s">
                                        <img
                                            src="img/asets/virtual tour.png"
                                            width="75%"
                                            alt=""
                                            class=" img-responsive"/>
                                    </div>
                                    <div class="col-xs-12 col-md-8 content">
                                        <h2>Virtual Tour</h2>
                                        <p>Kami berusaha agar warisan budaya dapat diakses berbagai kalangan dan
                                            darimana pun.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-team col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="wow bounceInUp col-md-4 col-xs-9" data-wow-delay="0.1s">
                                        <img src="img/asets/sosmed.png" alt="" width="75%" class=" img-responsive"/>
                                    </div>
                                    <div class="col-xs-12 col-md-8 content">
                                        <h2>Media Sosial</h2>
                                        <p>Kami membangun interaksi dan komunikasi dua arah dengan masyarakat di sosial
                                            media melalui foto, video, dan platform lainnya.</p>
                                    </div>
                                </div>
                                <div class="box-team  col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="wow bounceInUp col-md-4 col-xs-9" data-wow-delay="0.1s">
                                        <img src="img/asets/ide.png" width="75%" alt="" class=" img-responsive"/>
                                    </div>
                                    <div class="col-xs-12 col-md-8 content">
                                        <h2>Eksperimen Lainnya</h2>
                                        <p>Kami senang mencoba hal baru. Apabila anda memiliki ide inovatif, kami siap
                                            berkolaborasi!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Portfolio Grid -->
            <section class="home-section" id="portfolio2" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8">
                            <div class="section-heading">
                                <h2>Portfolio Kami</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div id="carousel-service" class="service carousel slide">
                        <!-- slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                <!-- <div class="col-md-4 col-sm-6 portfolio-item col-xs-6 "> -->
                                <div class="portfolio-hover" style="position:relative">
                                    <img class="img-fluid" src="img/asets/dhp.png" width="100%" height="100%" alt="">
                                    <div class="portfolio-hover-content" style="position:absolute; top:0">
                                        <h2>DEPOK HERITAGE PROJECT</h2>
                                        <p style="text-align:justify">Kota Depok sebagai daerah yang memiliki sejarah panjang sejak jaman kolonial Belanda,
                                            memiliki beragam peninggalan bangunan bersejarah di Kota tersebut. Akan tetapi
                                            berdasarkan studi terbaru, lebih dari 70% bangunan tersebut telah hilang dan berganti
                                            menjadi perumahan atau bangunan komersil lainnya. Tim Pengabdian Masyarakat
                                            Universitas Indonesia yang terdiri dari Departemen Arkeologi, Departemen Teknik Kimia,
                                            dan Fakultas Ilmu Komputer berusaha mempreservasi memori bangunan tersebut melalui
                                            media digital. Website ini menggunakan teknologi Virtual Reality (VR) dan Augmented
                                            Reality (AR) untuk melestarikan bangunan bersejarah yang berada di Kecamatan Pancoran
                                            Mas yang merupakan pusat pemukiman cikal bakal Kota Depok.</p>>
                                    
                                    </div>
                                </div>
                                <!-- </div> -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                <div class="portfolio-hover" style="position:relative">
                                    <img class="img-fluid" src="img/asets/portfolioa.png" width="100%" height="100%" alt="">
                                    <div class="portfolio-hover-content" style="position:absolute; top:0">
                                        <h2>DEPOK LAMA PROJECT</h2>
                                        <p style="text-align:justify">Depok Lama merupakan salah satu daerah di Indonesia yang sarat akan sejarah. Mulai dari
                                            menjadi tanah partikelir milik Cornelis Chastelein hingga menjadi daerah otonom yang
                                            dikelola oleh orang Indonesia pada masa pemerintahan kolonial. Program ini merupakan
                                            inisiatif dari Tim Pengabdian Masyarakat Universitas Indonesia yang berjudul
                                            “Pengembangan Media Interaktif Berbasis Digital sebagai Upaya Pelestarian dan Edukasi
                                            Aset Bangunan Bersejarah di Kota Depok”. Website ini bertujuan untuk mengupas sejarah
                                            kaum Depok Lama yang selama ini jarang terdengar. Selain itu, website ini juga memberikan
                                            informasi mengenai bangunan bersejarah yang berada di daerah Depok Lama.</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                        <li data-target="#carousel-service" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-service" data-slide-to="1"></li>
                        </ol>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact -->
            <section id="contact" class="home-section" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8">
                            <div class="section-heading">
                                <h2>Kami sangat menantikan ide brilian anda!</h2>
                                <div class="heading-line"></div>
                                <p>Jika ingin bertanya lebih lanjut silakan isi formulir berikut!</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-2 col-md-8">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>

                            <form method="post" class="form-horizontal">
                                <input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            name="name"
                                            class="form-control"
                                            id="name"
                                            placeholder="Nama"
                                            data-rule="minlen:4"
                                            data-msg="Please enter at least 4 chars"/>
                                        <div class="validation"></div>
                                    </div>
                                </div>

                                <div class="col-md-offset-1 col-md-6">
                                    <div class="form-group">
                                        <input
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            id="email"
                                            placeholder="Email"
                                            data-rule="email"
                                            data-msg="Please enter a valid email"/>
                                        <div class="validation"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea
                                            class="form-control"
                                            name="message"
                                            rows="5"
                                            data-rule="required"
                                            data-msg="Please write something for us"
                                            placeholder="Pesan"></textarea>
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class=" col-md-offset-4 col-md-4">
                                        <button type="submit" name="submit" value="Submit" class="btn btn-theme btn-lg btn-block contact-btn">Kirim Pesan</button>
                                    </div>
                                </div>
                            </form>
                            <?php if (isset($_POST['submit']) && $statement) : ?>
                                <blockquote><?php echo escape($_POST['firstname']); ?> successfully added.</blockquote>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </section>
        </section>
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row mar-top30">
                    <div class="col-md-12">
                        <ul class="social-network">
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-2x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-2x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-2x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>&copy; Museum and Heritage Interactive Indonesia. All rights reserved</p>

                    </div>
                </div>
            </div>
        </footer>


        <a href="#" class="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>

        <!-- Modal 1 -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                    <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/tim/alqiz.png" alt="" class=" img-responsive"/>
                            </div>
                            <div class="col-md-9 modal-description">
                                <h2>Alqiz</h2>
                                <p class="item-intro">Pendiri</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia
                                expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <h5>"Hidup untuk Tidur"</h5>
                            </div>
                        </div>
                        <!-- <button class="btn btn-primary modal-button" data-dismiss="modal" type="button" style="margin: 0 0 0 300px;">
                            <i class="fa fa-times"></i>
                            Close</button> -->
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                    <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/tim/danang.png" alt="" class="img-person img-responsive"/>
                            </div>
                            <div class="col-md-9 modal-description">
                                <h2>Danang Aryo</h2>
                                <p class="item-intro">Bukan apa-apa</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia
                                expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <h5>"Hidup untuk Tidur"</h5>
                            </div>
                        </div>
                        <!-- <button class="btn btn-primary modal-button" data-dismiss="modal" type="button" style="margin: 0 0 0 300px;">
                            <i class="fa fa-times"></i>
                            Close</button> -->
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                    <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/tim/jazmi.png" alt="" class="img-person img-responsive"/>
                            </div>
                            <div class="col-md-9 modal-description">
                                <h2>M. Jazmi</h2>
                                <p class="item-intro">Budak Chastelein</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia
                                expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <h5>"Hidup untuk Tidur"</h5>
                            </div>
                        </div>
                        <!-- <button class="btn btn-primary modal-button" data-dismiss="modal" type="button" style="margin: 0 0 0 300px;">
                            <i class="fa fa-times"></i>
                            Close</button> -->
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                    <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/tim/ide.png" alt="" class="img-person img-responsive"/>
                            </div>
                            <div class="col-md-9 modal-description">
                                <h2>Ide Nada</h2>
                                <p class="item-intro">Pendiri</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia
                                expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <h5>"Hidup untuk Tidur"</h5>
                            </div>
                        </div>
                        <!-- <button class="btn btn-primary modal-button" data-dismiss="modal" type="button" style="margin: 0 0 0 300px;">
                            <i class="fa fa-times"></i>
                            Close</button> -->
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal 5 -->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                    <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/tim/kae.png" alt="" class="img-person img-responsive"/>
                            </div>
                            <div class="col-md-9 modal-description">
                                <h2>Kae</h2>
                                <p class="item-intro">Videographer</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia
                                expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <h5>"Hidup untuk Tidur"</h5>
                            </div>
                        </div>
                        <!-- <button class="btn btn-primary modal-button" data-dismiss="modal" type="button" style="margin: 0 0 0 300px;">
                            <i class="fa fa-times"></i>
                            Close</button> -->
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- js -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/mb.bgndGallery.js"></script>
        <script src="js/mb.bgndGallery.effects.js"></script>
        <script src="js/jquery.simple-text-rotator.min.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/grid.js"></script>
        <script src="js/stellar.js"></script>
        <!-- Contact Form JavaScript File -->
        <script src="contactform/contactform.js"></script>

        <!-- Template Custom Javascript File -->
        <script src="js/custom.js"></script>

    </body>

</html>
