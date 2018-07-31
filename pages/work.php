
<!DOCTYPE html>
    <html>
        <head>
            <!--site title tag-->
            <title>Legokat | Work  </title>
            <!--meta page include-->
            <?php include ('../config/meta.php');?>
            <!--stylesheets include-->
            <?php include ('../config/css.php');?>
            <!--work main css-->
            <link rel="stylesheet" href="../assets/stylesheets/css/work_main.css">
            <!--javascript include-->
            <?php include ('../config/js.php');?>
        </head>
        <body>
            <!--navigation bar include-->
            <?php include ('../template/navigation.php');?>
            <!--main content container-->
            <div class="container-fluid main-content-container">
                <!--main content row-->
                <div class="row center-block">
                    <div class="col-md-12">
                        <!--header area-->
                        <header>
                            <div class="text-center ">
                                <a>all</a>
                                <a class="sub-active">ecommerce</a>
                                <a>blogs</a>
                                <a>apps</a>
                                <a>portfolios</a>
                            </div>
                        </header>
                    </div>
                    <!--project container-->
                    <div class="container project-container ">
                        <div class="col-md-12 project-top">
                            <div class="col-md-6">
                                <h1>RunFS - <small class="small"> ecommerce website</small></h1>
                                <!--skills used on the project-->
                                <span class=" label label-success">
                                    <b>UI/UX, </b>
                                </span>
                                <span class=" label label-success">
                                    <b>PHP</b>
                                </span>
                                <span class=" label label-success">
                                    <b>MySQL, </b>
                                </span>
                                <span class=" label label-success">
                                    <b>Bootstarap</b>
                                </span>
                                <span class=" label label-success">
                                    <b>JQuery</b>
                                </span>
                                <p>RunFS - a lifestyle a client of ours initiated this project.</p>
                                <p>RunFS is a street urban culture brand and they appeal to the modern trend setter culture </p>
                                <p>their main source of income is merchandise and events`.</p>
                                <button type="button" href="#" class="btn btn-danger">Visit RunFS</button>
                            </div>
                            <!--client home page-->
                            <div class="col-md-6">
                                <!--add carousel here-->
                                <h1 class="text-center"><img src="../assets/media/images/responsive.jpg" id="client-home-page-pic"></h1>
                            </div>
                        </div>

                        <div class="col-md-12 project-bottom">
                            <div class="col-md-4 col-md-offset-4">
                                <img class="center-block" src="../assets/media/images/IMG-20180101-WA0005.jpg" id="client-pic">
                                <!--client representative name-->
                                <div class="text-center">
                                    <span>Lindiwe Matlhodi, CEO - RunFS</span>
                                </div>
                                <!--client testimonial-->
                                <p>"Katt helped refresh our brand with a unique, modern responsive website. He does great work."</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center more-projects">
                        <a href=""><p class="more-paragraph">More Projects</p><i class="fa fa-angle-double-down"></i></a>
                    </div>
                </div>
            </div>
            <!--navigation bar include-->
            <?php include ('../template/footer.php');?>
        </body>
    </html>

