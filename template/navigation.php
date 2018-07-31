<!--navigation bar-->
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <!--Navigation bar container-->
            <div class="container-fluid">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--navigation bar logo-->
                <div class="navbar-header">
                    <!--Logo-->
                    <a class="navbar-brand" href="index.html"><img src="../assets/media/images/logos/webkatt/webkatt.jpg"></a>
                </div>
                <!--Navigation bar menu items-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right text-center">
                        <li class="<?php if($_GET['page'] == 1){echo 'active';}?>"><a href="index.php?page=1">HOME</a></li>
                        <li class="<?php if($_GET['page'] == 2){echo 'active';}?>"><a href="work.php?page=2">WORK</a></li>
                        <li class="<?php if($_GET['page'] == 3){echo 'active';}?>"><a href="contact.php?page=3">CONTACT ME</a></li>
                        <li class="<?php if($_GET['page'] == 4){echo 'active';}?>"><a href="about.php?page=4">ABOUT ME</a></li>
                    </ul>
                </div>
            </div>
        </nav>