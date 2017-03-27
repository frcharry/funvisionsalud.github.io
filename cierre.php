<?php
//conexion con la base de datos
$host="localhost";
$port=3306;
$socket="";
$user="funvisio_admin";
$password="Fund4c10nV1s10n";
$dbname="funvisio_donaciones";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
      or die ('Could not connect to the database server' . mysqli_connect_error());

  //lee los contenidos de JSON
            $input = @file_get_contents("php://input");
            $httpResponse = json_decode($input, true);
            if ($httpResponse['status'] == "A") { //Transacción aprobada
                  $idtx = $httpResponse['idtx'];
                  $status = $httpResponse['status'];
                  $number_tx = $httpResponse['number_tx'];
                  $transaction_date = $httpResponse['transaction_date'];
                  $message = $httpResponse['message'];
                  $valortx = $httpResponse['valortx'];
                  $currency = $httpResponse['currency'];
                  $reference = $httpResponse['reference'];
                  mysqli_query($con, "INSERT into TX ('$idtx','$status','$number_tx','$transaction_date','$message','$valortx','$currency','$reference')");

            // Hacer alguna operación con los valores obtenidos anteriormente. Ejemplo: Guardarlos en base de datos
                  //mysqli_query($con,"INSERT INTO TX VALUES ('$idtx','$status','$number_tx','$transaction_date','$message','$valortx','$currency','$reference')";
                  /*if(!mysqli_query($con, "INSERT INTO TX VALUES ('$idtx','$status','$number_tx','$transaction_date','$message','$valortx','$currency','$reference')"))
                  {
                        die('Error : ' . mysqli_errno($con));
                  }*/
            } 
            else { // Transacción rechazada
                  $idtx = $httpResponse['idtx'];
                  $status = $httpResponse['status'];
                  $number_tx = $httpResponse['number_tx'];
                  $transaction_date = $httpResponse['transaction_date'];
                  $message = $httpResponse['message'];
                  $valortx = $httpResponse['valortx'];
                  $currency = $httpResponse['currency'];
                  $reference = $httpResponse['reference'];
                  mysqli_query($con, "INSERT into TX ('$idtx','$status','$number_tx','$transaction_date','$message','$valortx','$currency','$reference')");
            }
            // Hacer alguna operación con los valores obtenidos anteriormente. Ejemplo: Guardarlos en base de datos
            //$sql="INSERT INTO TX(tx_id,tx_status,tx_number,tx_date,tx_message,tx_valor,tx_currency,tx_reference) VALUES ('$idtx','$status','$number_tx','$transaction_date','$message','$valortx','$currency','$reference')";
            /*if(!mysqli_query($con,"INSERT INTO TX VALUES ('$idtx','$status','$number_tx','$transaction_date','$message','$valortx','$currency','$reference')"))
                {
                    die('Error : ' . mysqli_errno($con));
                }
            }
            if (!mysqli_commit($con)) {
                  print("Transaction commit failed\n");
                  exit();
            } */
            http_response_code(202);
$con->close();
?>


            





<? php

           

            /*//conexion con la base de datos
            $con=mysql_connect("funvisio_admin","Fund4c10nV1s10n")or die('imposible conectar: '.mysql_error());

            mysql_select_db("funvisio_donaciones",$con);

            //lee los contenidos de JSON
            $input = @file_get_contents("php://input");
            $httpResponse = json_decode($input, true);
            if ($httpResponse['status'] == "A") { //Transacción aprobada
            $idtx = $httpResponse['idtx'];
            $status = $httpResponse['status'];
            $number_tx = $httpResponse['number_tx'];
            $transaction_date = $httpResponse['transaction_date'];
            $message = $httpResponse['message'];
            $valortx = $httpResponse['valortx'];
            $currency = $httpResponse['currency'];
            $reference = $httpResponse['reference'];
            // Hacer alguna operación con los valores obtenidos anteriormente. Ejemplo: Guardarlos en base de datos
            $sql="INSERT INTO TX(tx_id,tx_status,tx_number,tx_date,tx_message,tx_valor,tx_currency,tx_reference) VALUES ('$idtx','$status','$number_tx','$transaction_date','$message','$valortx','$currency','$reference')";
            if(!mysql_query($sql,$con))
                {
                    die('Error : ' . mysql_error());
                }
            } 
            } else { // Transacción rechazada
            $idtx = $httpResponse['idtx'];
            $status = $httpResponse['status'];
            $number_tx = $httpResponse['number_tx'];
            $transaction_date = $httpResponse['transaction_date'];
            $message = $httpResponse['message'];
            $valortx = $httpResponse['valortx'];
            $currency = $httpResponse['currency'];
            $reference = $httpResponse['reference'];
            // Hacer alguna operación con los valores obtenidos anteriormente. Ejemplo: Guardarlos en base de datos
            $sql="INSERT INTO TX(tx_id,tx_status,tx_number,tx_date,tx_message,tx_valor,tx_currency,tx_reference) VALUES ('$idtx','$status','$number_tx','$transaction_date','$message','$valortx','$currency','$reference')";
            if(!mysql_query($sql,$con))
                {
                    die('Error : ' . mysql_error());
                }
            } 
            }

            //Insertar a la base de datos

            
            http_response_code(202);*/
?>





