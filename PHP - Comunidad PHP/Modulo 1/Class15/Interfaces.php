<?php

//No se puede instanciar a una clase que hereda de una clase final
//No se puede heredar de una clase final
final class unaClase
{
    public function miMetodo1()
    {
        
    }
}

class hija
{
    echo "Hola";
}

$objeto = new hija();

?>