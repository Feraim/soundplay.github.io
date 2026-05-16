<?php
include
class Artista{
    protected $id;
    protected $nombre_artistico;
    protected $bio_extended;
    protected $localidad;
    protected $foto_perfil;
    protected $espacio_maximo;
    protected $db;
    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }
    
}



?>