<?php
    session_start();
    if (!isset( $_SESSION['user_id']))
    {
        header('Location: userpass.php');
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
    <title>ΟΑΣΑ Προφίλ</title>  
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

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="realestate_version">

    <!-- LOADER -->
    <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div><!-- end loader -->
    <!-- END LOADER -->
   
    <!--HEADER-->
    <?php include 'utils/uheader.php'; ?>

    <div class="all-title-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Προφίλ Χρήστη</h2>
				</div>
			</div>
		</div>
	</div>
    
    <!-- SECTION -->

    <div id="userProfile" class="section wb">
        <div class="container">
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs">
				<ul>
					<li><a href="index.php"><i class="fa fa-home global-radius fa-lg"></i></a></li>
					<li><a href="userProfile.php">Προφίλ Χρήστη</a></li>
                    <li>Αλλαγή Συνθηματικού</li>
				</ul>
            </nav>
        <?php
            if (isset($_GET['error'])) 
            {       
                if ($_GET['error'] == 'wrongPassword')  
                    { 
                        echo "</br><div class='section-title text-center'> <h4><b>Δώθηκε λάθος τωρινό συνθηματικό.</b></h4></br></div>"; 
                    }
                    // validation in form works 
                    if ($_GET['error'] == 'passwordMatch')  
                    { 
                        echo "</br><div class='section-title text-center'> <h4><b>Οι κωδικοί δεν ταιριάζουν.</b></h4></br></div>"; 
                    }
            }
            else{
                $get = (isset($_GET['success'])) ? $_GET['success'] : '';
                if((!empty($get)) && ($get == 1))
                {
                    echo "</br><div class='successMessage'> <h4><b>Το συνθηματικό αλλάχθηκε επιτυχώς.</b></h4></br></div>"; 
                }
            }
        ?>
        
            <div id="userProf_DIV_1" style="padding-top: 20px;">
                <section id="userProf_SECTION_2">
                    <div id="userProf_DIV_3">
                        <div id="userProf_DIV_4">
                            <div id="userProf_DIV_5">
                                <ul id="userProf_UL_6">
                                    <form action="php_utils/changePasswordForm.php" method="post" enctype="multipart/form-data" id="mail_FORM_1">
                                        <ul id="mail_UL_6">
                                            <li id="mail_LI_10">
                                                
                                                <label for="elInput_new_email" id="mail_LABEL_11">
                                                    Τωρινό Συνθηματικό
                                                </label>
                                                <div id="mail_DIV_13">
                                                    <input type="password" id="mail_INPUT_14" name="cur_pass" pattern=".{6,}" required oninvalid="setCustomValidity('Άδειο πεδίο ή συνθηματικό με λιγότερο από 6 χαρακτήρες! Προσθέστε έγκυρο συνθηματικό.')" oninput="setCustomValidity('')"/> 
                                                    <span id="mail_SPAN_16">Για να σιγουρευτείτε ότι η αλλαγή είναι ασφαλής </span>
                                                </div>
                                            </li>
                                            <li id="pass_LI_10">
                                                
                                                <label for="elInput_new_email" id="mail_LABEL_11">
                                                    Νέο Συνθηματικό
                                                </label>
                                                <div id="mail_DIV_13">
                                                <input name="pass1" id="mail_INPUT_14" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Άδειο πεδίο ή συνθηματικό με λιγότερο από 6 χαρακτήρες! Προσθέστε έγκυρο συνθηματικό.' : ''); if(this.checkValidity()) form.pass2.pattern = this.value;" required>
                                                </div>
                                            </li>
                                            <li id="pass_LI_10">
                                                
                                                <label for="elInput_new_email" id="mail_LABEL_11" style="padding-bottom:35px;">
                                                    Επιβεβαιώστε το νέο συνθηματικό
                                                </label>
                                                <div id="mail_DIV_13">
                                                <input name="pass2" id="mail_INPUT_14" type="password"  pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Οι κωδικοί πρέπει να ταιριάζουν.' : '');" required>
                                                </div>
                                            </li>
                                            <li id="mail_LI_17">
                                                <div id="mail_DIV_18">
                                                
                                                <button id="submit" class="btn login" type="submit" value="SEND" style="background-color:#00599C;margin-top:45px;">Αποθήκευση</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </ul>
                            </div>
                            <div id="userProf_DIV_24">
                                <div id="userProf_DIV_25">
                                    <h3 id="userProf_H3_26">
                                        Άλλες ρυθμίσεις
                                    </h3><br id="userProf_BR_27" /><br id="userProf_BR_28" />
                                    <ul id="userProf_UL_29">
                                        <li id="userProf_LI_30">
                                            <!-- <a href="php_utils/deleteAccount.php" id="userProf_A_31">Διαγραφή Λογαριασμού</a> -->
                                            <a href="#" onclick="openP()" id="userProf_A_31">Διαγραφή Λογαριασμού</a></i></h4>
                                        
                                            <div class="form-popup" id="deltp" style="display: none; position: fixed; top: 34%; right: 14%; border: 4px solid #f1f1f1; z-index: 9;">
                                                <form action="php_utils/deleteAccount.php" class="form-container">
                                                    <h4 style="padding-right: 10px; padding-left: 10px; padding-top:20px; color:rgb(120, 126, 132);"><b>Ο λογαριασμός σας πρόκειται να διαγραφεί! Είστε σίγουρος/η για αυτή την ενέργεια;</b></h3>
                                                    <button type="submit" class="btn" style="display:center;margin-left: 293px;margin-right:5px;">Ναι</button>
                                                    <button type="button" class="btn cancel" onclick="closeP()">Όχι</button>
                                                </form>
                                            </div>

                                            <script>
                                                function openP() { document.getElementById("deltp").style.display = "block"; }
                                                function closeP() { document.getElementById("deltp").style.display = "none"; }
                                            </script>
                                        </li>
                                    </ul>
                                    <ul id="userProf_UL_29">
                                        <li id="userProf_LI_30">
                                            <a href="php_utils/logout.php" id="userProf_A_31">Αποσύνδεση</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>    
        </div>
    </div>

    

    <!-- end of SECTION -->

    <!--FOOTER-->
    <?php include 'utils/footer.php'; ?>

</body>
</html>