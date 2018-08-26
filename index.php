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
                <!-- <div class="navbar-header">
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

                    Logo text or image
                    <a class="navbar-brand" href="#">MAIN INDONESIA</a>

                </div> -->
                <!-- <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="current">
                            <a href="#intro">Home</a>
                        </li>
                        <li>
                            <a href="#team">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="#what-we-do">Yang Kami Lakukan</a>
                        </li>
                        <li>
                            <a href="#portfolio2">Portfolio</a>
                        </li>
                        <li>
                            <a href="#contact">Hubungi Kami</a>
                        </li>
                    </ul>
                </div> -->
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

        <!-- Team -->
        <section id="team" class="home-section bg-white" style="
        background-image: url(img/asets/bg-2-bw.png); background-position: center; background-size: cover;
    ">
            <div class="container">
                <div class="row">
                    <div class=" col-md-12">
                        <div class="section-heading">
                            <h2>Tentang Kami</h2>
                            <div class="heading-line"></div>
                            <p>Kami memiliki mimpi agar masyarakat Indonesia memiliki keinginan untuk
                                mengunjungi warisan budaya dan museum yang tersebar di seluruh penjuru negeri.
                                Melalui teknologi imersif, kami berusaha mempromosikan keunikan dan keragaman
                                budaya, sejarah, dan tradisi yang ada di Indonesia. Tim kami senang berbagi
                                pengetahuan mengenai cagar budaya, museum, dan penggunaan teknologi interaktif.
                                Kami semangat untuk dapat berkolaborasi dengan institusi visioner yang memiliki
                                mimpi yang sama dengan kami.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-1 col-xs-12 col-sm-2 col-md-2 col-lg-2 box-team">
                            <div class="wow bounceInUp" data-wow-delay="0.1s">
                                <div class="member-hover">
                                    <img src="img/tim/alqiz.png" alt="" class=" img-responsive"/>
                                    <!-- <h4>Alqiz Alqiz</h4> <p>Chief Team</p> -->
                                    <div class="content-member-img">
                                        <h4>Alqiz Lukman</h4> <p>Pendiri</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 box-team" data-wow-delay="0.3s">
                            <div class="wow bounceInUp">
                                <div class="member-hover">
                                    <img src="img/tim/danang.png" alt="" class=" img-responsive"/>
                                    <div class="content-member-img">
                                        <h4>Danang Aryo</h4> <p>Bukan apa-apa</p>
                                    </div>                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 box-team" data-wow-delay="0.5s">
                            <div class="wow bounceInUp">
                                <div class="member-hover">
                                    <img src="img/tim/jazmi.png" alt="" class=" img-responsive"/>
                                    <div class="content-member-img">
                                        <h4>M Jazmi</h4> <p>Budak Chastelein</p>
                                    </div>                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 box-team" data-wow-delay="0.7s">
                            <div class="wow bounceInUp">
                                <div class="member-hover">
                                    <img src="img/tim/ide.png" alt="" class=" img-responsive"/>
                                    <div class="content-member-img">
                                        <h4>Ide Nada</h4> <p>Penulis</p>
                                    </div>                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 box-team" data-wow-delay="0.7s">
                            <div class="wow bounceInUp">
                                <div class="member-hover">
                                    <img src="img/tim/kae.png" alt="" class="img-responsive"/>
                                    <div class="content-member-img">
                                        <h4>Ide Nada</h4> <p>Videografer</p>
                                    </div>                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Do -->
        <section id="what-we-do" class="home-section bg-white" style="
        background-image: url(img/asets/bg-2-bw.png); background-position: center; background-size: cover;
    ">
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
        <section class="home-section bg-white" id="portfolio2" style="
        background-image: url(img/asets/bg-2-bw.png); background-position: center; background-size: cover;
        ">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="section-heading">
                            <h2>Portfolio Kami</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 portfolio-item col-xs-6">
                            <div class="portfolio-hover">
                                <img class="img-fluid" src="img/asets/banner.png" width="100%" alt="">
                                <div class="portfolio-hover-content">
                                    <h2>DEPOK HERITAGE PROJECT</h2>
                                    <p>Lore m ipsu m dolor s it amet, con s ectetur adipis cin g elit. Pell en t e s q ue curs us id ne q ue e g et fe ug i a t . Null a ve ne na t i s
                                        ve ne natis qu am, volutpat varius ligul a orn are varius . Morbi t e m p o r p o rt t i to r l o b o rt i s . Cura bi t ur ri s us a ug ue ,
                                        e le me ntu m ne c la cus eu, facilis is gravida erat. Proin el eifen d ul t ri ci e s ni s i co ns e q ua t d i c t um . Ph a s e llus no n m a g na id
                                        ex tincidu nt fringill a vel at ligul a. D uis l obortis auctor imperdiet . U t a ug ue m a g na , fini b us e u rut rum e u, s a g i t t i s no n
                                        u rna. Mau ris ne c turpis s ed s apien gravida l obortis eget vel ni s l . Na m a uc to r im p e rd i et e ro s , a t vo lut p a t q ua m
                                        sagittis se d. In jus to nibh , aliquam ut mauris s it amet, eges tas t incid unt q ua m . D o ne c int e rd um g ra vid a t e m p us . S e d
                                        ve hicula massa mauris . Don ec bl an dit es t tin cidun t, commodo m et us no n, d a p i b us m a uri s . D ui s p ret i um ni s i ve l mi
                                        vulpu tate sagittis.
                                        <br>
                                        Vivamu s et fe u giat purus . Aliquam n ec volutpat diam, vitae effi ci t ur ip s um . Int e g e r t e m p us p o rt t i to r m a uri s id
                                        pulvinar. Inte ge r maximus ris us orn are purus tris tique, ut p ul vina r nunc ul t ri ci e s . Cra s fe ug i a t o rci et to rto r
                                        male su ada, e get maximus quam mattis . Pell en tes que erat mag na , o rna re id p e ll e nt e s q ue id , bl a nd i t id e nim . Null a
                                        libe ro se m, gravida ut aliquam viverra, tin cidun t ac nibh . Aliqua m a m a uri s a ni s i ull a m co rp e r d i c t um . M a uri s e ra t
                                        u rna, pulvinar et con gue ph aretra, pl acerat s it amet s em. Viva m us t e llus e li t , l a o re et s e d p urus a , fa cili s i s m o l e s t i e
                                        au gu e .</p>>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Parallax 1 -->
        <!-- <section
            id="parallax1"
            class="home-section parallax"
            data-stellar-background-ratio="1.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="color-light">
                            <h2 class="wow bounceInDown" data-wow-delay="0.5s">Details are the key for perfection</h2>
                            <p class="lead wow bounceInUp" data-wow-delay="1s">We mix all detailed things together</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Services -->
        <!-- <section id="services" class="home-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="section-heading">
                            <h2>Services</h2>
                            <div class="heading-line"></div>
                            <p>We’ve been building unique digital products, platforms, and experiences for
                                the past 6 years.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="carousel-service" class="service carousel slide">

                            <!-- slides -->
                            <!-- <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-offset-1 col-md-6">
                                            <div class="wow bounceInLeft">
                                                <h4>Website Design</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-5">
                                            <div class="screenshot wow bounceInRight">
                                                <img src="img/screenshots/1.png" class="img-responsive" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-offset-1 col-md-6">
                                            <div class="wow bounceInLeft">
                                                <h4>Brand Identity</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-5">
                                            <div class="screenshot wow bounceInRight">
                                                <img src="img/screenshots/2.png" class="img-responsive" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-offset-1 col-md-6">
                                            <div class="wow bounceInLeft">
                                                <h4>Web & Mobile Apps</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-5">
                                            <div class="screenshot wow bounceInRight">
                                                <img src="img/screenshots/3.png" class="img-responsive" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Indicators -->
                            <!-- <ol class="carousel-indicators">
                                <li data-target="#carousel-service" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-service" data-slide-to="1"></li>
                                <li data-target="#carousel-service" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Works -->
        <!-- <section id="portfolio" class="home-section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="section-heading">
                            <h2>Works</h2>
                            <div class="heading-line"></div>
                            <p>We’ve been building unique digital products, platforms, and experiences for
                                the past 6 years.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <ul id="og-grid" class="og-grid">
                            <li>
                                <a
                                    href="#"
                                    data-largesrc="img/works/1.jpg"
                                    data-title="Portfolio title"
                                    data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei. Pri consul detracto eu, solet nusquam accusam ex vim, an movet interesset necessitatibus mea.">
                                    <img src="img/works/thumbs/1.jpg" alt=""/>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-largesrc="img/works/2.jpg"
                                    data-title="Portfolio title"
                                    data-description="Mea an eros periculis dignissim, quo mollis nostrum elaboraret et. Id quem perfecto mel, no etiam perfecto qui. No nisl legere recusabo nam, ius an tale pericula evertitur, dicat phaedrum qui in. Usu numquam legendos in, voluptaria sadipscing ut vel. Eu eum mandamus volutpat gubergren, eos ad detracto nominati, ne eum idque elitr aliquam.">
                                    <img src="img/works/thumbs/2.jpg" alt=""/>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-largesrc="img/works/3.jpg"
                                    data-title="Portfolio title"
                                    data-description="Vim ad persecuti appellantur. Eam ignota deterruisset eu, in omnis fierent convenire sed. Ne nulla veritus vel, liber euripidis in eos. Postea comprehensam vis in, detracto deseruisse mei ea. Ex sadipscing deterruisset concludaturque quo.">
                                    <img src="img/works/thumbs/3.jpg" alt="img01"/>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-largesrc="img/works/4.jpg"
                                    data-title="Portfolio title"
                                    data-description="In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei. Pri consul detracto eu, solet nusquam accusam ex vim, an movet interesset necessitatibus mea.">
                                    <img src="img/works/thumbs/4.jpg" alt="img01"/>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-largesrc="img/works/5.jpg"
                                    data-title="Portfolio title"
                                    data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea">
                                    <img src="img/works/thumbs/5.jpg" alt="img01"/>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-largesrc="img/works/6.jpg"
                                    data-title="Portfolio title"
                                    data-description="Id elit saepe pro. In atomorum constituam definitionem quo, at torquatos sadipscing eum, ut eum wisi meis mentitum. Probo feugiat ea duo. An usu platonem instructior, qui dolores inciderint ad. Te elit essent mea, vim ne atqui legimus invenire, ad dolor vitae sea.">
                                    <img src="img/works/thumbs/6.jpg" alt="img01"/>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-largesrc="img/works/7.jpg"
                                    data-title="Portfolio title"
                                    data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei.">
                                    <img src="img/works/thumbs/7.jpg" alt="img01"/>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-largesrc="img/works/8.jpg"
                                    data-title="Portfolio title"
                                    data-description="No nisl legere recusabo nam, ius an tale pericula evertitur, dicat phaedrum qui in. Usu numquam legendos in, voluptaria sadipscing ut vel. Eu eum mandamus volutpat gubergren, eos ad detracto nominati, ne eum idque elitr aliquam.">
                                    <img src="img/works/thumbs/8.jpg" alt="img01"/>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-largesrc="img/works/9.jpg"
                                    data-title="Portfolio title"
                                    data-description="Lorem ipsum dolor sit amet, ex pri quod ferri fastidii. Mazim philosophia eum ad, facilisis laboramus te est. Eam magna fabellas ut. Ne vis diceret accumsan salutandi, pro in impedit accusamus dissentias, ut nonumy eloquentiam ius.">
                                    <img src="img/works/thumbs/9.jpg" alt="img01"/>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-largesrc="img/works/10.jpg"
                                    data-title="Portfolio title"
                                    data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei. Pri consul detracto eu, solet nusquam accusam ex vim.">
                                    <img src="img/works/thumbs/10.jpg" alt="img01"/>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-largesrc="img/works/11.jpg"
                                    data-title="Portfolio title"
                                    data-description="Vim ad persecuti appellantur. Eam ignota deterruisset eu, in omnis fierent convenire sed. Ne nulla veritus vel, liber euripidis in eos. Postea comprehensam vis in, detracto deseruisse mei ea. Ex sadipscing deterruisset concludaturque quo.">
                                    <img src="img/works/thumbs/11.jpg" alt="img01"/>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-largesrc="img/works/12.jpg"
                                    data-title="Portfolio title"
                                    data-description="Mea an eros periculis dignissim, quo mollis nostrum elaboraret et. Id quem perfecto mel, no etiam perfecto qui. No nisl legere recusabo nam, ius an tale pericula evertitur, dicat phaedrum qui in. Usu numquam legendos in, voluptaria sadipscing ut vel. Eu eum mandamus volutpat gubergren, eos ad detracto nominati, ne eum idque elitr aliquam.">
                                    <img src="img/works/thumbs/12.jpg" alt="img01"/>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </section> -->

        <!-- Parallax 2 -->
        <!-- <section
            id="parallax2"
            class="home-section parallax"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="clients">
                            <li class="wow fadeInDown" data-wow-delay="0.3s">
                                <a href="#">
                                    <img src="img/clients/1.png" alt=""/>
                                </a>
                            </li>
                            <li class="wow fadeInDown" data-wow-delay="0.6s">
                                <a href="#">
                                    <img src="img/clients/2.png" alt=""/>
                                </a>
                            </li>
                            <li class="wow fadeInDown" data-wow-delay="0.9s">
                                <a href="#">
                                    <img src="img/clients/3.png" alt=""/>
                                </a>
                            </li>
                            <li class="wow fadeInDown" data-wow-delay="1.1s">
                                <a href="#">
                                    <img src="img/clients/4.png" alt=""/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Contact -->
        <section id="contact" class="home-section bg-gray" style="
        background-image: url(img/asets/bg-2-bw.png); background-position: center; background-size: cover;">
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

        <!-- Bottom widget -->
        <!-- <section id="bottom-widget" class="home-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-widget wow bounceInLeft">
                            <i class="fa fa-map-marker fa-4x"></i>
                            <h5>Main Office</h5>
                            <p>
                                109 Borough High Street,
                                <br/>London SE1 1NL
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-widget wow bounceInUp">
                            <i class="fa fa-phone fa-4x"></i>
                            <h5>Call</h5>
                            <p>
                                +1 111 9998 7774
                                <br>
                                +1 245 4544 6855

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-widget wow bounceInRight">
                            <i class="fa fa-envelope fa-4x"></i>
                            <h5>Email us</h5>
                            <p>
                                hello@alstarstudio.com
                                <br/>sales@alstarstudio.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mar-top30">
                    <div class="col-md-12">
                        <ul class="social-network">
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-2x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-2x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
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
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-2x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> -->

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
