<?php
    session_start();
    if ( isset( $_SESSION['user_id']))
    {
    }
    $get = (isset($_GET['success'])) ? $_GET['success'] : '';
    if((!empty($get)) && ($get == 1))
    {
        //login successful...
    }
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>ΟΑΣΑ</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment-with-locales.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/d004434a5ff76e7b97c8b07c01f34ca69e635d97/src/js/bootstrap-datetimepicker.js"></script>

    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/d004434a5ff76e7b97c8b07c01f34ca69e635d97/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

</head>
<body class="realestate_version">

    <!-- LOADER -->
    <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <!--ICON BAR-->
    <div class="icon-bar">
        <a href="https://www.facebook.com/OASA.GR" class="social-links" target="_blank"><i class="fa fa-facebook global-radius"></i></a> 
        <a href="https://www.instagram.com/OASA.GR/" class="social-links" target="_blank"><i class="fa fa-instagram global-radius"></i></a> 
        <a href="https://www.linkedin.com/company/athenspublictransportoasa/about/" class="social-links" target="_blank"><i class="fa fa-linkedin global-radius"></i></a>
        <a href="https://www.youtube.com/channel/UC0XdkZnOHhRLc3NE9tm4NUQ" class="social-links" target="_blank"><i class="fa fa-youtube global-radius"></i></a> 
    </div>
    <!--end of ICON BAR-->

    <!--HEADER-->
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
            <!--NAV-HEADER (logo button to index.php)-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logos/oasa_logo2.png" alt="image"></a>
                </div>
                <!--end of NAV HEADER-->

                <!--NAV-BAR-->
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="active" href="index.php">Αρχική</a></li>
                        <li><a href="status.php">Κατάσταση Μέσων</a></li>
                        <li><a href="#">Χάρτες</a></li>
                        <li class="dropdown" >
                            <a href="#" class="dropbtn">Εισιτήρια-Κάρτες</a>
                            <div class="dropdown-content">
                                <a href="#">Σημεία Έκδοσης/Επαναφόρτισης</a>
                                <a href="#">Τιμές Εισιτηρίων</a>
                                <a href="#">Online Αγορά Εισιτηρίων</a>
                            </div>
                        </li>
                        <li class="dropdown" >
                            <a href="accesibility.php" class="dropbtn">Προσβασιμότητα</a>
                            <div class="dropdown-content">
                                <a href="acs_instrc.php">Οδηγίες Πρόσβασης</a>
                                <a href="acs_points.php">Προσβάσιμα Σημεία</a>
                                <a href="acs_news.php">Ανακοινώσεις</a>
                            </div>
                        </li> 
                        <li class="dropdown" >
                            <a href="about.php" class="dropbtn">Οργανισμός ΟΑΣΑ</a>
                            <div class="dropdown-content">
                                <a href="news.php">Νέα-Ανακοινώσεις</a>
                                <a href="org.php">Προφίλ Οργανισμού</a>
                            </div>
                        </li>   
                        <li><a href="contact.php">Επικοινωνία</a></li>
                        <li class="search-option">
                            <button class="search tran3s dropdown-toggle" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <form action="#" class="p-color-bg dropdown-menu tran3s" aria-labelledby="searchDropdown">
                                <input type="text" placeholder="Αναζήτηση...">
                                <button class="p-color-bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </li> 
                        <!-- <button class="login-trigger" onclick="javascript:$('#myModal').modal('show');"><i class="fa fa-user" aria-hidden="true"></i></button> -->
                        <li class="dropdown" id="loginDropdown">
                            <div class="loginSet">
                                <button class="login-trigger" onclick="window.open('userpass.php', '_self')"><i class="fa fa-user" aria-hidden="true"></i></button>
                                <div style='display:inline;' id="loginButtonName" >
                                <?php
                                    if ( isset( $_SESSION['user_id']))
                                    {
                                    echo $_SESSION['name'];
                                    }
                                    else{
                                        echo "Σύνδεση";
                                    }
                                    ?>
                            </div>
                            </div>
                            <div class="dropdown-content">
                                <?php
                                    if ( isset( $_SESSION['user_id']))
                                    {
                                    echo "Kαλωσόρισες "; 
                                    echo $_SESSION['name'];
                                    echo "
                                            <div id=\"header_DIV_11\">
                                                <ul id=\"header_UL_12\">
                                                    <li id=\"header_LI_13\">
                                                        <a href=\"userProfile.php\" rel=\"nofollow\" id=\"header_A_14\">Λογαριασμός</a>
                                                    </li>
                                                    <li id=\"header_LI_15\">
                                                        <a href=\"logout.php\" rel=\"nofollow\" id=\"header_A_16\">Αποσύνδεση</a>
                                                    </li>
                                                </ul>
                                            </div>";
                                    }
                                    else{
                                        echo "<a href=\"userpass.php\">Σύνδεση</a>";
                                        echo "<a href=\"userpass.php#signin\">Εγγραφή</a>";
                                    }
                                ?>
                            </div>
                        </li>   
                        <!-- <button class="login-trigger" onclick="window.open('userpass.php', '_self')"><i class="fa fa-user" aria-hidden="true"></i></button> -->
                    </ul>
                </div>
                <!--end of NAV-BAR-->
            </div>
        </nav>
    </header>
    <!--end of HEADER-->

    <!--SLIDE SHOW-->
	<ul class='slideshow'>
		<li>
			<span>Slide1</span>
		</li>
		<li>		
			<span>Slide2</span>
		</li>
		<li>		
			<span>Slide3</span>
		</li>
		<li>
			<span>Slide4</span>
		</li>
    </ul>
    <!--end of SLIDE SHOW-->
    
    <!--FIRST SECTION (overlaying slide show)-->
    <div class="parallax first-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow slideInLeft hidden-xs hidden-sm">
                    <div class="contact_form">
                        <h3><i class="fa fa-map-marker grd1 global-radius"></i> ΒΡΕΣ ΔΙΑΔΡΟΜΗ</h3>
                        <form id="contactform1" class="row" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name1" id="first_name1" class="form-control" placeholder="Από">
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name1" id="last_name1" class="form-control" placeholder="Προς">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h4 style="margin-top:5px"><i class="fa fa-clock-o global-radius"></i> ΦΕΥΓΩ: <i>
                                    <a href="#" onclick="openTime()">όρισε ώρα</a></i></h4>
                                    <div id="times" style="display: none;">

                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                    <input type='text' class="form-control" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                            </div>
                                        </div>
                                        
                                        <script>
                                            $('#datetimepicker1').datetimepicker({locale: 'el', minDate: new Date()});
                                        </script>

                                        <script>
                                            function openTime() {
                                              var x = document.getElementById("times");
                                              if (x.style.display === "none") {
                                                    $("#times").slideDown("slow");
                                                x.style.display = "block";
                                              } else {
                                                x.style.display = "none";
                                              }
                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h4><i class="fa fa-cogs global-radius"></i> <i><a href="#" onclick="openPrefs()">Προτιμήσεις</a></i></h4>
                                    <div id="prefs"  style="display: none;">
                                        <div class="card">
                                                <ul>
                                                    <li style="font-size: 13px;">
                                                        <label>
                                                            <input type="radio" class="option-input radio" name="example" checked/>
                                                            Βέλτιστη Διαδρομή
                                                        </label>                    
                                                    </li>
                                                    <li style="font-size: 13px;">
                                                        <label>
                                                            <input type="radio" class="option-input radio" name="example" />
                                                            Διαδρομή με τις λιγότερες αλλαγές
                                                          </label>
                                                    </li>
                                                    <li style="font-size: 13px;">
                                                        <label>
                                                            <input type="radio" class="option-input radio" name="example" />
                                                            Διαδρομή με το λιγότερο περπάτημα
                                                          </label>
                                                    </li>
                                                    <li style="font-size: 13px;">
                                                        <label>
                                                            <input type="radio" class="option-input radio" name="example" />
                                                            Διαδρομή μόνο μέσω λεωφορειακών γραμμών
                                                          </label>
                                                    </li>
                                                </ul>
                                    </div>

                                    <script>
                                        function openPrefs() {
                                          var x = document.getElementById("prefs");
                                          if (x.style.display === "none") {
                                                $("#prefs").slideDown("slow");
                                            x.style.display = "block";
                                          } else {
                                            // $("#prefs").slideUp();
                                            x.style.display = "none";
                                          }
                                        }
                                    </script>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-12 text-center">
                                    <button type="submit" value="SEND" id="submit1" class="btn btn-light btn-radius btn-brd grd1 btn-block">Πάμε!</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-9 wow slideInRight hidden-xs hidden-sm">
                    <button class="btnn" onclick="window.open('#', '_blank')"> <i class="fa fa-map fa-2x" style="height: 15%; width: 15%; float: right;"></i>Ανακαλύψτε την Αθήνα</button>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!--end of FIRST SECTION-->

    <!--SECOND SECTION-->
	<div class="about-box">
		<div class="container">
			<div class="row">
                <div class="col-md-4 wow slideInLeft hidden-xs hidden-sm">
					<div class="item">
						<div class="single-feature">
                            <div class="icon"><i class="fa fa-bus fa-5x" style="height: 25%; width: 25%; float:left;"></i>
                                <h4><a href="buses.php">Λεωφορεία</a></h4>
                                <h4><a href="#">Τρόλει</a></h4>
                            </div>  
                        </div> 
                    </div>
                </div>
                <div class="col-md-4 wow slideInLeft hidden-xs hidden-sm">    
					<div class="item">
						<div class="single-feature">
                            <div class="icon"><i class="fa fa-plane fa-5x" style="height: 25%; width: 25%; float:left;"></i>
                                <h4><a href="#">Πρόσβαση στο Αεροδρόμιο</a></h4>
                            </div>      
                        </div> 
                    </div>
                </div>
                <div class="col-md-4 wow slideInRight hidden-xs hidden-sm">
                    <div class= "container" style="width: 50%;">
                        <div class="row" style="gap: 12px;">
                                <div class="item">
                                    <div class="single-feature">
                                        <div class="icon" style="text-align: right;"><i class="fa fa-info-circle fa-3x" style="height: 20%; width: 20%; float:left;"></i>
                                            <h5><a href="contact.php">Επικοινωνία</a></h5>
                                        </div>
                                    </div> 
                                </div>
                        </div>
                        <div class="row" style="padding-top: 12px;">
                            <div class="item">
                                <div class="single-feature">
                                    <div class="icon" style="text-align: right;"><i class="fa fa-question-circle fa-3x" style="height: 20%; width: 20%; float:left;"></i>
                                        <h5><a href="faq.php">Συχνές Ερωτήσεις</a></h5>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    
    </div>
    <!--END OF SECOND SECTION-->

    <!--FOOTER-->
    <?php include 'footer.php'; ?>
</body>
</html>