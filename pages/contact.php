<!DOCTYPE html>
    <html>
        <head>
            <!--site title tag-->
            <title>Legokat | Contact  </title>
            <!--meta page include-->
            <?php include ('../config/meta.php');?>
            <!--stylesheets include-->
            <?php include ('../config/css.php');?>
            <!--contact main css-->
            <link rel="stylesheet" href="../assets/stylesheets/css/contact_main.css">
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
                        <!--contact form group-->
                    <div class="col-md-6">
                        <form role="form">
                            <div class="form-group-1">
                                <!--name form group-->
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">name</span>
                                        <input type="text" class="form-control">
                                        <span class="tick"></span>
                                    </div>
                                </div>
                                <!--phone number form group-->
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">cellphone</span>
                                        <input type="text" class="form-control">
                                        <span class="tick"></span>
                                    </div>
                                </div>
                                <!--email form group-->
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">email</span>
                                        <input type="text" class="form-control">
                                        <span class="tick"></span>
                                    </div>
                                </div>
                            </div>
                            <!--how can I help you form group-->
                            <div class="form-group">
                                <p class="">How can I help you?</p>
                                <div class="radio-group">
                                    <div class="project-type">
                                        <!--blog group-->

                                            <input type="radio" name="blog" id="blog" value="option1" >
                                            <label for="blog" >blog</label>
                                            <br>
                                        <!--portfolio group-->

                                            <input type="radio" name="blog" id="portfolio" value="option1" >
                                            <label for="blog" >portfolio website</label>
                                            <br>
                                        <!--ecommerce group-->

                                            <input type="radio" name="blog" id="ecommerce" value="option1" >
                                            <label for="ecommerce" >e-commerce website</label>
                                            <br>
                                        <!--website revamp group-->

                                            <input type="radio" name="blog" id="revamp" value="option1" >
                                            <label for="revamp" >website revamp</label>
                                            <br>
                                        <!--other group-->

                                            <input type="radio" name="blog" id="other" value="option1" >
                                            <label for="other" >other</label>

                                    </div>
                                </div>
                            </div>
                            <!--form button group-->
                            <div class="button-group">
                                <!--contact me button-->
                                <button type="submit" class="btn btn-danger contact">CONTACT ME</button>
                                <!--claear form buton-->
                                <button type="submit" class="btn btn-danger btn-clear">CLEAR</button>
                            </div>
                        </form>
                    </div>
                    <!--contact details-->
                    <div class="col-md-6 contact-details">
                        <i class="fa fa-envelope"></i><span>katlegonqum@gmail.com</span>
                        <br>
                        <i class="fa fa-phone"></i><span>0832891661</span>
                        <br>
                        <i class="fa fa-facebook"></i>
                        <br>
                        <p class="fa fa-twitter"></p>
                        <br>
                        <p class="fa fa-instagram"></p>
                        <br>
                        <!--<p c0-lass="well well-sm"><p class="fa fa-map-marker"></p></p>-->
                    </div>
                </div>
            </div>
            <!--footer include-->
            <?php include ('../template/footer.php');?>
        </body>
    </html>

