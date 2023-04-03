<?php 
class Conectar{
    public static function conexion(){
        //Add Server Name
        $serverName = " ";

        //Add Database name
        $connectionInfo = array( "Database"=>" ");
        $conn = sqlsrv_connect( $serverName, $connectionInfo);

        if( $conn ) {
            echo "Connection established.<br />";
        }else{
            echo "Connection could not be established.<br />";
            die( print_r(sqlsrv_errors(), true));
        }
        return $conn;
    }
}
?>