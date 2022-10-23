<?php
    /**function to connect mysql with method Use MySQLi or PDO */

    function getDb ()
    {
        try {
            //
            $db = new PDO('
                mysql:host=localhost;dbname=prueba1'
                , 'root', '');
            $db -> exec("set names utf8");
            /**PDO NECESITAMOS AGREGAR LA SIGUIETNE CADENA
             * $variable = new PDO('mysql:host=localhost;dbnmae=NameDatabe;charset=uft8', 'userDabase', 'UserPassword');
             * **/
        } catch (Exception $th) {
            //throw $th;
            echo('Error : ' . $th->getMessage());
        }
        return $db;
    }


?>
