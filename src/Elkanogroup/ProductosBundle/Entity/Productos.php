<?php

namespace Elkanogroup\ProductosBundle\Entity;

class Productos {

    protected $id_producto;
    protected $nombre;
    protected $imagen;
    protected $puntos;

    public function __construct($nombre, $imagen, $puntos) {
        $this->nombre = $nombre;
        $this->imagen = $imagen;
        $this->puntos = $puntos;
    }

    /**
     * Get idProducto
     *
     * @return integer
     */
    public function getIdProducto() {
        return $this->id_producto;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Productos
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Productos
     */
    public function setImagen($imagen) {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen() {
        return $this->imagen;
    }

    /**
     * Set puntos
     *
     * @param integer $puntos
     *
     * @return Productos
     */
    public function setPuntos($puntos) {
        $this->puntos = $puntos;

        return $this;
    }

    /**
     * Get puntos
     *
     * @return integer
     */
    public function getPuntos() {
        return $this->puntos;
    }

}
