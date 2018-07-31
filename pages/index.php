<!--To do:
- Style Form
-
-->
<!DOCTYPE html>
    <html>
        <head>
            <!--site title tag-->
            <title>Legokat | Home </title>
            <!--meta page include-->
            <?php include ('../config/meta.php');?>
            <!--stylesheets include-->
            <?php include ('../config/css.php');?>
            <!--main CSS-->
            <link rel="stylesheet" href="../assets/stylesheets/css/home_main.css">
            <!--javascript include-->
            <?php include ('../config/js.php');?>
        </head>
        <body>
            <!--navigation bar include-->
            <?php include ('../template/navigation.php');?>
            <!--main content container-->
            <div class="container-fluid">
                <!--main content row-->
                <div class="row">
                    <!--header area-->
                    <header class="center-block">
                        <!--introduction heading-->
                        <h1 id="introduction-heading" class="h1 text-center ">Wussup! I'm Katt and I...</h1>
                        <!--services heading-->
                        <h2 id="services-heading" class="h2 text-center">build web applications</h2>
                        <!--about me link-->
                        <!--<div class="text-center">
                            <a href=""><p class="about-me-paragraph">Learn More About Me</p><i class="fa fa-angle-double-down"></i></a>
                        </div>-->
                    </header>
                    <!--contact me button-->
                    <a href="contact.php" type="button" id="contact-me-btn" class="btn btn-primary btn-lg center-block" role="button">Yes,I'm available for hire!</a>
                </div>
            </div>
            <!--footer include-->
            <?php include ('../template/footer.php');?>
        </body>
    </html>

