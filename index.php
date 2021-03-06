<!DOCTYPE html>
<html>

<head>
    <title>Sweet Corner</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <script type="text/javascript" src="main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php 
        $pages = [
                    'home'=>'pages/home.php',
                    'about'=>'pages/about.php',
                    'services'=>'pages/services.php',
                    'contact'=>'pages/contact.php',
                ];
    ?>

</head>

<body>
    <div class="container">
        <header class="header col-sm-12">
            <div class="row">
                <img class="col-sm-12 hidden-xs" src="images/header.png">
                <div class="navbar-toggle-con col-xs-2 visible-xs">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="icon-bar iconbar1"></span>
                        <span class="icon-bar iconbar2"></span>
                        <span class="icon-bar iconbar3"></span>
                    </button>
                </div>
                <!-- <div class="row visible-xs">
                    <nav class="navbar-collapse bs-navbar-collapse collapse col-xs-12">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html">HOME</a></li>
                            <li><a href="about-us.html">ABOUT US</a></li>
                            <li><a href="services.html">SERVICES</a></li>
                            <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                    </nav>
                </div> -->
                <div class="row hidden-xs">
                    <ul class='nav navbar-nav navbar-collapse pull-right'>
                        <li class="active"><a href="index.php?page=home">HOME</a></li>
                        
                        <li><a href="index.php?page=about">ABOUT US</a></li>
                        <li><a href="index.php?page=services">SERVICES</a></li>
                        <li><a href="index.php?page=contact">CONTACT</a></li>
                    </ul>
                </div>
                <div class="main_image col-sm-12">
                    <img class="col-sm-4 col-sm-offset-4 logo" src="images/logo.png">
                    <p class='col-sm-6 col-sm-offset-3 fancy pitch1'>We deliver cupcakes for the important evens in your life!</p>
                    <div class="brown_bar col-sm-12"></div>
                </div>
            </div>
        </header>
        <!--MAIN CONTENT AREA -->
        <div class="main_content col-sm-12" id="main_content_area">
            <?php
                if(!isset($_GET['page'])){
                    include($pages['home']);
                } else
                {
                    include ($pages[$_GET['page']]);
                }
            ?>
        </div>
        <footer class="footer col-sm-12 col-xs-12">
            <div class="col-sm-12 col-xs-12">
                <div class="col-sm-3 hidden-xs">
                    <img src="images/dots-footer.png" class="col-sm-4 push-left footer_text copyright">
                </div>
                <div class="col-sm-6 col-xs-12">
                    <img src="images/phone.png" class="col-sm-2 col-xs-2 col-xs-offset-5 footer_text phone visible-xs">
                    <p class="col-sm-8 col-xs-12 footer_text visible-xs">800 264 2099</p>
                    <p class='col-sm-10 col-xs-12 footer_text copyright'>Copyright@2014 Sweet Corner. All rights reserved.</p>
                </div>
                <div class="col-sm-3 pull-right hidden-xs">
                    <img src="images/phone.png" class="col-sm-2 footer_text phone">
                    <p class="col-sm-8 footer_text phone">800 264 2099</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
