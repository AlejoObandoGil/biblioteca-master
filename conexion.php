<?php

// session_start();

class Conexion{
    public static function Conectar(){
        $host="127.0.0.1";
        $port="5432";
        $user="postgres";
        $pass="password";
        $dbname="biblioteca";

        try{
            // bd local
            // $conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass") or die('No se ha podido conectar: ' . pg_last_error()); 

            // bd remota heroku
            $conexion = pg_connect("postgres://uqklfdmkazqmix:dd986026523d25807783d81ce26bf9743e68964dfce989fdf9db39369daa04da@ec2-54-90-211-192.compute-1.amazonaws.com:5432/dc110dq94k9s9k") or die('No se ha podido conectar: ' . pg_last_error());             
            return $conexion;

        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}

?>