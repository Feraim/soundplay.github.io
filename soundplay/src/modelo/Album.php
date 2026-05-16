<?php

class Album {
    private $db;
    protected $id_album;
    protected $id_artista;
    protected $titulo;
    protected $portada_ruta;
    protected $fecha_publicacion;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }
}
?>