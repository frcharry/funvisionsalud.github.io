<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="keywords" content="fundacion, vision, salud">
        <meta name="description" content="pagina de la fundación vision salud">
        <title>Fundacion Vision Salud</title>
        <!--jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- fuentes estilos etc-->
        <script src="https://use.fontawesome.com/2dbac93b7e.js"></script>
        <script src="js/app.js" type="text/javascript"></script>
        <script src="js/myjquery.js" type="text/javascript"></script>
        <!--script src="js/fb.js" type"text/javascript"></script-->
        <script src="js/animatescroll.js" type="text/javascript"></script>
        <!--bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        <script src="https://s3.amazonaws.com/paycodecdn/pchelper.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <!--Estilos propios-->
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" type="image/x-icon" href="images/FAVICON.png">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="#home" onclick="$('#home').animatescroll({scrollSpeed:1500});"><img src="images/logo.png" alt="FUNDACION VISION SALUD"></a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">Home</a></li>
                        </ul>
                    </div>
                </div>
            </nav>              
        </header>
        <?php
        $valuebase = $_REQUEST["valuebase"];
        $valuetax = $_REQUEST["valuetax"];
        $valuetotal = $_REQUEST["valuebase"];
        $currency = $_REQUEST["currency"]; 
        $reference = $_REQUEST["reference"];
        $orderdescription = $_REQUEST["orderdescription"];
        $urlresponse="http://www.funvisionsalud.org/index.html#transacciones";
           
        define('KEY_ALIAS', 'aes-256-cbc');
        define('PAYCODE_URL_ENVIRONMENT', 'https://api.paycode.co');
        define('PAYCODE_API_KEY', '0ce321b04046715d1ee54c0405af419b514ce385ca5121ccd0f2e98a69697d1f');
        define('PAYCODE_CHECKOUT_KEY', 'f1d8a2433cbcdd2f');
        define('PAYCODE_ECOMMERCE_ALIAS', 'fundacionvisionsalud1');

        $data = PAYCODE_API_KEY."|$valuebase|$valuetax|$valuetotal|$currency|$reference|$orderdescription|$urlresponse";
        $key_encrypted = base64_encode(openssl_encrypt($data, KEY_ALIAS, PAYCODE_API_KEY, 0, PAYCODE_CHECKOUT_KEY));
        ?>
<<<<<<< Updated upstream
        <iframe id="paycodecheckout" type="text/html" width="650" height="990"
=======
        <iframe id="paycodecheckout" type="text/html" width="100%" max-height="1100" height="100%"
>>>>>>> Stashed changes
        src="<?php echo PAYCODE_URL_ENVIRONMENT; ?>/checkout/<?php echo PAYCODE_ECOMMERCE_ALIAS; ?>?key=<?php echo $key_encrypted; ?>"
        frameborder="0"></iframe>
    </body>
</html>
