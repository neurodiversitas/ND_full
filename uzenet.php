<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>Neurodiversitas Alapítvány</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="js/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="css/freeze.css">
<!--    <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">-->
    <script type="text/javascript" src="js/modernizr.custom.32033.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
    <body>
        <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">      
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="fa fa-bars fa-lg"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">
                          <img src="img/freeze/logo.png" alt="" class="logo"><h1>NEURODI<span>V</span>ERSITAS ALAPÍTVÁNY</h1>
                        </a>
                            <div>
                    <?php  
  $nev = ($_POST['nev']);
  $email = ($_POST['email']);  
  $uzenet = ($_POST['uzenet']);

  $fp = fopen("uzenetek.csv", "a");  
  $save = $nev . "," . $email . "," . $uzenet . "\n";
  fwrite($fp, $save);
  fclose ($fp);  
  
  print "Köszönjük a hozzászólást ".$_POST['nev']."!";   
 
?>    
                            </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li>    <a href="neurodiversitas.hu">vissza az oldalra</a> </li>
<!--                            <li><a href="#about">Küldetés</a>
                            </li>
                            <li><a href="#reviews">c</a>
                            </li>
                            <li><a href="#screens">Önkéntesség</a>
                            </li>
                            
                            <li><a href="#demo">e</a> 
                            </li> 
                            <li><a href="#getApp">hírlevél</a>
                            </li>
                            <li><a href="#support">kapcsolat</a>
                            </li>
                             <li><a href="#features">támogatás</a>
                            </li>
                            <li><a href="#" target="_blank"><img src="img/freeze/uk.png" alt="" class="flag"></a>
                            </li>-->
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
        </nav>


        <div class="banner-container">
            <div class="banner" >
              <img src="img/freeze/header.png" alt=""> 
            </div>
        </div> 


    </header>

    </body>
</html>