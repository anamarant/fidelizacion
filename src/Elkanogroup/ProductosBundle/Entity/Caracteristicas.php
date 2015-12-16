<?php

namespace Elkanogroup\ProductosBundle\Entity;

class Caracteristicas {

    private $id_caracteristica;
    protected $nombre;
    protected $puntos_extra;
    protected $id_producto;

    public function __construct($nombre, $puntos_extra, Productos $id_producto) {
        $this->nombre = $nombre;
        $this->puntos_extra = $puntos_extra;
        $this->id_producto = $id_producto;
    }

}
