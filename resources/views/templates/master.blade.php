<html>
<head>
    <meta charset="utf-8"/>
    <title>Linh's Wedding Dress Studio</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="\MyLaravel\resources\views\pages\wedstyle.css">
</head>

<body>
<!--Navigation Bar-->
<div class="container color">
    <div class="row">
        <nav class="navbar navbar-inverse bar">
            <div class="col-md-6 banner">
                <h1> Linh's Wedding Dress</h1>
            </div>
            <div class="col-md-6">
                <div class="btn-toolbar tool" role="toolbar">
                    <div class="btn-group bor" role="group">
                        <a href="home">
                            <button type="button" class="btn btn-default bu">Home</button>
                        </a>
                        <a href="services">
                            <button type="button" class="btn btn-default bu">Services</button>
                        </a>
                        <a href="about">
                            <button type="button" class="btn btn-default bu">About</button>
                        </a>
                        <a href="news">
                            <button type="button" class="btn btn-default bu">News</button>
                        </a>
                        <a href="blog">
                            <button type="button" class="btn btn-default bu">Blog</button>
                        </a>
                        <a href="contact">
                            <button type="button" class="btn btn-default bu">Contact</button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!--Banner1-->
    <div class="row about banner1">
        <div class="col-md-7">
            <h3>Welcome to the Linh's Wedding Studio</h3><br>
            <p>About our company<br>
                <em>Linh's wedding studio</em> was founded in 2009.<br>
                With experience 3 years in the wedding, we have<br>
                the fame in the bridal studio in Vietnam ...<br>
            </p>
            <a href="aboutus">
                <button class="button button1" id="about">About us</button>
            </a>
        </div>

        <div id="carousel-example-generic" class="col-md-5 carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="http://www.mayaocuoiroyal.com/wp-content/uploads/2014/11/bridal-hd-wallpapers-white-dressing1.jpg"
                         alt="broken">
                    <div class="carousel-caption">
                        <p>Còn Hàng</p>
                    </div>
                </div>
                <div class="item">
                    <img src="http://hdfreewallpaper.net/wp-content/uploads/2015/08/gown-white-best-bridle-dresses-wallpapers-hd-free.jpg"
                         alt="broken">
                    <div class="carousel-caption">
                        <p>Còn Hàng</p>
                    </div>
                </div>
                <div class="item">
                    <img src="http://baomoi-photo-1.d.za.zdn.vn/16/11/15/61/20834556/6_269925.jpg"
                         alt="broken">
                    <div class="carousel-caption">
                        <p>Còn Hàng</p>
                    </div>
                </div>
                <div class="item">
                    <img src="http://kisswe.com/wp-content/uploads/2016/08/People_Bride_and_groom_on_the_background_color_of_the_cart_097566_.jpg"
                         alt="broken">
                    <div class="carousel-caption">
                        <p>Còn Hàng</p>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!--Banner 2-->
    <div class="row">
        <div class="col-md-12 banner2"></div>
    </div>

@yield('content')

<!--Bot Banner-->
    <div class="row">
        <nav class="navbar navbar-inverse">
            <div class="col-md-5 col1">
                <a href="https://fb.com/" target="_blank">
                    <img src="\MyLaravel\wed\pics\icon.png" alt="broken"></a><br><br>
                <div class="btn-toolbar" role="toolbar" aria-label="...">
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="home">
                            <button type="button" class="btn btn-default bu tab"><strong>Home</strong></button>
                        </a></div>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="about">
                            <button type="button" class="btn btn-default bu tab"><strong>About</strong></button>
                        </a></div>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="blog">
                            <button type="button" class="btn btn-default bu tab"><strong>Blog</strong></button>
                        </a></div>
                    <br><br>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="services">
                            <button type="button" class="btn btn-default bu tab"><strong>Services</strong></button>
                        </a></div>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="news">
                            <button type="button" class="btn btn-default bu tab"><strong>New</strong></button>
                        </a></div>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="contact">
                            <button type="button" class="btn btn-default bu tab"><strong>Contact</strong></button>
                        </a></div>
                </div>
            </div>
            <div class="col-md-6">
                <p class="about">Add: 117 Hàng Bông, Hoàn Kiếm, Hà Nội - Phone: 04.39386696<br>
                    Tel: 0943901988 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Email: phoducdat@gmail.com
                    <br><br><br>
                </p>
                <p class="about1">Copyright© 2017 Linh's Wedding Studio. All rights
                    reserved.</p>
            </div>
        </nav>
    </div>
</div>
</body>
</html>