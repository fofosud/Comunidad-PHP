<?php

class miSistema
{
    public function __construct()
    {
        echo "POST: ".$_POST["nombreFormulario"]."<br>";
        echo "GET: ".$_GET["edad"]."<br>";
        echo "Inica archivo recibir";
    }
    public function segundoMetodo()
    {
        echo "2 POST: ".$_POST["nombreFormulario"]."<br>";
        echo "2 GET: ".$_GET["edad"]."<br>";
    }
}

$objeto = new miSistema();
echo "<br>Lineas de codigo<br>";
$objeto->segundoMetodo();