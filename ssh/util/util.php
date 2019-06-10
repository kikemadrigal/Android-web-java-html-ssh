<?php

function obtenerIpLocal(){
    exec("ifconfig",$o);
        foreach($o as $elemento){
            $posicionDelInet=stripos($elemento, "inet 192");
            $posicionDelNetmask=stripos($elemento, "netmask");
            if($posicionDelInet!=false){
                $ipEncontrada=substr($elemento, $posicionDelInet+5, $posicionDelNetmask-15);
            }
            
        }
      
    return $ipEncontrada;
}



function crearFormulario($direccion, $id, $texto){
    $formulario = "<form action='$direccion' method='post' class='form-inline'>".
       "<input type='hidden' name='id' value='$id'></input>".
       "<input type='submit' value='$texto' class='btn btn-link'></imput>".
    "</form>";
    return $formulario;
}




?>