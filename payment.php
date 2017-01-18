<!DOCTYPE html>
<html>
<body>

<?php
    $valuebase = $_REQUEST["valuebase"];
    $valuetax = $_REQUEST["valuetax"];
    $valuetotal = $valubase;
    $currency = $_REQUEST["currency"]; 
    $reference = $_REQUEST["reference"];
    $orderdescription = $_REQUEST["orderdescription"];
        
        
    
    define('KEY_ALIAS', 'aes-256-cbc');
    define('PAYCODE_URL_ENVIRONMENT', 'http://staging.paycode.co');
    define('PAYCODE_API_KEY', '607c7675485ff806a45dffbfa37a80a3f231d47f913bdc423e80b6d8390e500a');
    define('PAYCODE_CHECKOUT_KEY', 'f74ed28d6ff302591beb8406f4963757');
    define('PAYCODE_ECOMMERCE_ALIAS', 'fundacionvisionsalud1');
    $data = PAYCODE_API_KEY."|$valuebase|$valuetax|$valuetotal|$currency|$reference|$orderdescription";
    $key_encrypted = base64_encode(openssl_encrypt($data, KEY_ALIAS, PAYCODE_API_KEY, 0, PAYCODE_CHECKOUT_KEY));
?>
<iframe id="paycodecheckout" type="text/html" width="350" height="890"
  src="<?php echo PAYCODE_URL_ENVIRONMENT; ?>/checkout/<?php echo PAYCODE_ECOMMERCE_ALIAS; ?>?key=<?php echo $key_encrypted; ?>"
  frameborder="0"></iframe>

</body>
</html>