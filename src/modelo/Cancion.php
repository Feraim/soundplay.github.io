<?php

class Cancion {
    private $db;
    protected $id_cancion;
    protected $id_album;
    protected $titulo;
    protected $archivo_ruta;
    protected $duracion;
    protected $genero;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }
}