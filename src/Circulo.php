<?php
include_once 'Figura.php';
class Circulo extends FiguraGeometrica{
    private Punto $centro;
    private float $radio;

    public function __construct($centro, $radio) {
        $this->centro = $centro;
        $this->radio = $radio;
    }
}
?>