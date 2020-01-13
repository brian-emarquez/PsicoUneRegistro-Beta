<?php
class RandomTable{

    public $IDr = 0 ;
    function conectarBD(){ 
            $server = "localhost";
            $usuario = "briandb";
            $pass = "briandb";
            $BD = "rpo";
            $conexion = mysqli_connect($server, $usuario, $pass, $BD); 
            if(!$conexion){ 
               echo 'Ha sucedido un error inexperado en la conexion de la base de datos<br>'; 
            } 
            return $conexion; 
    }  
    /*Desconectar la conexion a la base de datos*/
    function desconectarBD($conexion){
            $close = mysqli_close($conexion); 
            if(!$close){  
               echo 'Ha sucedido un error inexperado en la desconexion de la base de datos<br>'; 
            }    
            return $close;         
    }

    //Devuelve un array multidimensional con el resultado de la consulta
    function getArraySQL($sql){
        $conexion = $this->conectarBD();
        if(!$result = mysqli_query($conexion, $sql)) die();

        $rawdata = array();
        $i=0;
        while($row = mysqli_fetch_array($result))
        {   
            $rawdata[$i] = $row;
            $i++;
        }
        $this->desconectarBD($conexion);
        return $rawdata;
    }
    //inserta en la base de datos un nuevo registro en la tabla usuarios
    function insertRandom(){
    	$ran = rand(0, 100);
        $conexion = $this->conectarBD();
        $sql = "insert into random (valor) 
        values (".$ran.")";
        $consulta = mysqli_query($conexion,$sql);
        if(!$consulta){
            echo "No se ha podido insertar en la base de datos<br><br>".mysqli_error($conexion);
        }
        $this->desconectarBD($conexion);
        return $consulta;
    }
    function getAllInfo(){
        $sql = "SELECT * FROM random;";
        return $this->getArraySQL($sql);
    }
}


?>
