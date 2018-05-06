<!--Part 17-->
<!--setup include-->
<?php include('../config/setup.php');?>
<!DOCTYPE html>
    <html>
        <!--page head-->
        <head>
            <!--site title-->
            <title><?php echo $site_title . ' |  ' . $page['page_title'];?></title>
            <!--meta tags include-->
            <?php include('../config/meta.php');?>
            <!--stylesheets include-->
            <?php include('../config/css.php');?>
            <!--javascript include-->
            <?php include('../config/js.php');?>

            <?php include('../config/js.php');?>

            <?php include('../config/js.php');?>
        </head>
        <!--page body-->
        <body>
            <!--navigation bar-->
            <?php include(DIRECTORY_TEMPLATE.'navigation.php');?>
            <!--main content container-->
            <div class="container">
                <!--main content row -->
                <div class="row">
                    <!--header area-->
                    <?php echo $page['page_header'];?>
                    <!--main content area-->
                    <?php echo $page['data_formatted'];?>
                    <?php if (isset($_GET['debug']) == 1){ ?>
                    <pre>
                        <?php echo print_r($page);?>
                    </pre>
                    <?php } ?>
                </div>
            </div>
            <!--footer-->
            <?php include(DIRECTORY_TEMPLATE.'footer.php');?>
        </body>
    </html>