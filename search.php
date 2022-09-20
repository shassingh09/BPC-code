<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search results</title>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- font-awesome font -->
    <link rel="stylesheet" href="font/font-awesome.css" type="text/css" media="screen">

	<script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="search/search.js"></script>
  <!--[if lt IE 8]>
      <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
  <![endif]-->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
<!--==============================header=================================-->
<header>
    <div class="headtop">
        <div class="container">
            <ul class="social">
                <li>
                    <a class="icon-twitter" href="#"></a>
                </li>
                <li>
                    <a class="icon-facebook" href="#"></a>
                </li>
                <li>
                    <a class="icon-rss" href="#"></a>
                </li>
            </ul>
            <p class="pull-right"><i class="icon-phone">&nbsp;</i>Call us: <span>(800) 1234-5678</span></p>
        </div>
    </div>
    <div class="container">
        <h1 class="brand_"><a href="index.html"><img alt="Real Estate Upprisal" src="img/logo.png"></a></h1>
        <form id="search" class="search" action="search.php" method="GET" accept-charset="utf-8">
        	 <input type="text" onfocus="if(this.value =='' ) this.value=''" onblur="if(this.value=='') this.value=''" value="" name="s">
             <a class="btn link1" href="#" onClick="document.getElementById('search').submit()">search</a>
        </form>
    </div>
    <div class="container">
        <div class="navbar navbar_ clearfix extra">
          <div class="nav-collapse nav-collapse_ collapse">
            <ul class="nav sf-menu">
              <li><a href="index.html">Home</a><span></span></li>
              <li><a href="index-1.html">About</a><span></span>
                <ul>
                  <li><a href="#">Lorem ipsum</a></li>
                  <li><a href="#">Dolor sit amet</a></li>
                  <li><a href="#">Conse ctetur</a></li>
                  <li><a href="#">Dipisicing</a></li>
                  <li><a href="#">Eeliteiusmod</a></li>
                </ul>
              </li>
              <li><a href="index-2.html">our blog</a><span></span></li>
              <li><a href="index-3.html">Services and prices</a><span></span></li>
              <li><a href="index-4.html">Contacts</a><span></span></li>
            </ul>
          </div>
        </div> 
    </div>
</header> 
<!--==============================content=================================-->
<section id="content">
  <div class="container">
    <div class="row">
      <div class="span12">
       <h2 class="h2-pad">Search result:</h2>
        <div id="search-results"></div>
      </div>
    </div>
  </div>
</section>
<!--==============================footer=================================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="span12">
                <a class="smalllogo" href="index.html"><img alt="Real Estate Upprisal" src="img/smalllogo.png"></a>  
                <div class="privacytxt">Real Estate Appraisal <span>&copy; 2013. </span><a class="txt-1" href="index-5.html"> Privacy policy</a></div> 
            </div>
        </div>
    </div>
</footer>
<script src="js/bootstrap.js"></script>
</body>
</html>