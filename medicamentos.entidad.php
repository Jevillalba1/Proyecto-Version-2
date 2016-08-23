<?php
class Medicamentos
  {
    private $Id;
    private $Nombre;
    private $Tipo;
    private $Via_Consumo;
    private $Precio_Unitario;
    private $Cantidad;
    private $Ubicacion;

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
  }
?>
