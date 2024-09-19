<?php

namespace Controllers;
use Exception;
use phpseclib3\Net\SFTP;

class FtpController
{
    public static function subir()
    {

        try{
            
           // Conectar al servidor SFTP
           $sftp = new SFTP('ftp', 22);

           // Intentar autenticarse
           if ($sftp->login('ftpuser', 'ftppassword')) { 
               echo "Conectado";
           } else {
               echo "No conectado";
           }

        } catch (Exception $e){
            echo $e->getMessage();
        }
      
    }
    public static function saludo()
    {
        echo "Hola desde saludo";
    }
}