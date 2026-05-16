<?php
class Usuario{
    protected $id_usuario;
    protected $email;
    protected $contrasena;
    protected $rol;
    protected $consentimiento_rgpd;
    protected $fecha_registrio;
    private $db;
}

public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

?>