<?php

class CreditoTecnico {
    private $db;
    protected $id_credito;
    protected $id_cancion;
    protected $nombre_profesional;
    protected $rol; 

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }
}