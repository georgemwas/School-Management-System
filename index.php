<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Footer.css">
    <link rel="stylesheet" href="assets/css/Header.css">
    <link rel="stylesheet" href="assets/css/codeintech.css">
    <script src="jquery-3.2.1.min.js"></script>
    <script>
      function getLOG(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("sammi").innerHTML = this.responseText;
            }
        };
        xhttp.open("log","index1.php",true);
        xhttp.send();
      }  
    </script>
</head>

<body>
    <nav class="navbar navbar-default custom-header" id="sammi">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#" onClick="getLOG()">LOGIN</a>
                <!-- <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> -->
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav links">
                    <!-- <li><a href="index.php"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#" class="custom-navbar"></a></li> -->
                </ul>
                
            </div>
        </div>
    </nav>
    <div class="codeintech" id="codeintech">
        <h1 class="title">CODEINTECH</h1>
        <p class="hero-subtitle">SCHOOL MANAGEMENT SYSTEM</p>
        <!-- <p><a class="btn btn-primary btn-lg hero-button"></a></p> -->
    </div>
    <footer style="background-color: #307bd7">
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">GEOMSCHOOLS</a></h3>
                <p class="links"><a href="#">Home</a> <strong>· </strong><a href="#">About</a><strong> · </strong><a href="#"></a><strong> · </strong><a href="#">Contact</a></p>
                <p class="company-name">geomschools © 2018</p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">KANGARU STREETS</span> EMBU, KENYA</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +254715772720</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">support@codeintech.com</a></p>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p> </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>