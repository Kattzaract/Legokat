<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <!--navigation bar container-->
    <div class="container-fluid">
        <!--mobile bar menu-->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!--navigation bar header-->
        <div class="navbar-header">
            <!--navigation bar logo-->
            <a class="navbar-brand" href="index.php">Legokat logo</a>
        </div>
        <!--navigation bar menu items-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right ">
                <?php main_nav($dbc, $page);?>
            </ul>
        </div>
    </div>
</nav>
