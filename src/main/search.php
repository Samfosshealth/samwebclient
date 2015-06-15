<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a> 
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
 
    <script src='js/device.min.js'></script> 
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>
        <div id="stuck_container" class="stuck_container">
            <div class="container">
                <div class="row">
                    <div class="grid_8">
                        <div class="brand">
                            <a href="./">
                                <h1 class="brand_name brand-icon">
                                    Riverside
                                </h1>
                            </a>    
                            <p class="brand_slogan">
                                Medical clinic
                            </p>
                        </div>
                    </div>
                    <div class="grid_4">
                        <ul class="list01">
                            <li><a class="no-border" href="#">Login</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a class="no-margin" href="#">sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav">
                    <ul class="sf-menu">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li>
                            <a href="index-1.html">Patient services</a>
                        </li>
                        <li>
                            <a href="index-2.html">Specialties &amp; physicians</a>
                        </li>
                        <li>
                            <a href="index-3.html">Patient information</a>
                        </li>
                        <li>
                            <a href="index-4.html">Employment</a>
                            <ul>
                                <li>
                                    <a href="#">Lorem</a>
                                </li>
                                <li>
                                    <a href="#">Ipsum</a>
                                    <ul>
                                        <li>
                                            <a href="#">massa</a>
                                        </li>
                                        <li>
                                            <a href="#">laoreetum</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">dolore</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index-5.html">Contacts</a>
                        </li>
                    </ul>
                </nav>

                <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
                    <label class="search-form_label">
                        <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder=""/>
                        <span class="search-form_liveout"></span>
                    </label>
                    <button class="search-form_submit fa-search" type="submit"></button>
                </form>
            </div>
             
        </div>

    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section id="search-result-page">
            <div class="container">
                <h4>Search Results</h4>
                <div id="search-results"></div>
            </div>
        </section>
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
        <div class="bg-wrap">
            <div class="footer-well">
                <div class="container">
                    <div class="row">
                        <div class="grid_4">
                            <div class="copyright">
                                <h6>Copyright</h6>
                                <a class="footer-brand" href="./">Riverside</a>
                                <p>© <span id="copyright-year"></span>
                                <a href="index-6.html">Privacy policy</a></p>
                                <ul class="soc-list">
                                    <li><a href="#">twitter</a></li>
                                    <li><a href="#">facebook</a></li>
                                    <li><a href="#">you tube</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="grid_4">
                            <div class="about-us">
                                <h6>About Us</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquiex modo consequat.</p>
                            </div>
                        </div>
                        <div class="grid_4">
                            <div class="contact-us">
                                <h6>Contact Us</h6>
                                <p>Freephone:  +1 800 559 6580</p>
                                <a href="#">contact@demolink.org</a>
                                <p><span>9870 St Vincent Place,</span><span>Los Angeles, DC 45 Fr 45.</span><span>United States of America</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="js/script.js"></script>
</body>
</html>