<?php

class Ave{
    // propiedades/atributos de clase/variables
    public $nombre;
    public$color;
    protected$dias_vida;
    public $km_recorridos;
    //metodos
    public function __construct($nomb)
    {
        echo "Constructor <br>";
        var_dump($nomb);
        echo"<br>";
        $this->nombre=$nomb;
        $this->dias_vida=4;
        $this->km_recorridos;
    }
    public function volar($km){
        echo "Volar" .$this->nombre;
        $this->dias_vida+=1;
        $this->km_recorridos+=$km;
    }

    public function getDiasVida(){
        return $this->dias_vida;
    }
    public function setDiasVida($dias){
        return $this->dias_vida+=$dias;
    }
}
class Paloma extends Ave{
    public $nombre;
}
//Implementar la clase
$pepita = new Paloma("Pepita");
echo $pepita->getDiasVida();
echo "<br>";
$pepita->volar(15);
echo "<br>";
$pepita->setDiasVida(20);
echo $pepita->getDiasVida(); 
echo "<br>";
echo $pepita->km_recorridos;    