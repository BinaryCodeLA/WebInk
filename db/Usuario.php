<?php
/**
 clase usuario visitante de la web
 */
require_once 'db.php';
class Usuario
{
	private $id;
    private $nombre;
    private $email;
    private $mensaje;
    private $db;

    public function __construct(){
        $this->db  = Database::connect(); 
    }


function getId() {
    return $this->id;
}

 function getNombre() {
    return $this->nombre;
}


 function getEmail() {
    return $this->email;
}

 function getMensaje() {
    return $this->mensaje;
}

 function getDb() {
    return $this->db;
}

 function setId($id) {
    $this->id = $id;
}

 function setNombre($nombre) {
    $this->nombre = $this->db->real_escape_string($nombre);
}


 function setEmail($email) {
    $this->email = $this->db->real_escape_string($email);
}

 function setMensaje($mensaje) {
    $this->mensaje = $this->db->real_escape_string($mensaje);
}

 public function saveas(){
        $sql = "INSERT INTO usuarios VALUES(NULL,'{$this->getNombre()}','{$this->getEmail()}','{$this->getMensaje()}','User',Now());";
        $save = $this->db->query($sql);   
        $result = false;
        If($save){
            $result =  true;
        }
     return $result;
    }

}
?>