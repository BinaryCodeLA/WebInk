<?php 
/**
 contacto
 */
 require_once 'db/Usuario.php';

      $result = false;
    if(isset($_POST)){
        //comprobando cada post-
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $message = isset($_POST['message']) ? $_POST['message'] : false;
        
       //instanciar usuario
        $Usuario = new Usuario();
        $Usuario->setNombre($nombre);
        $Usuario->setEmail($email);
        $Usuario->setMensaje($message);
 
        //Guardar datos del objeto
        $save = $Usuario->saveas();
        if($save){
            $result = true;
            $_SESSION['contact'] = "complete";
        }else{
            $_SESSION['contact'] = "failed";
        }
    }else{
        $_SESSION['contact'] = "failed";
    }
  //Redirigimos al formulario  
  header("Location:index.php");  
?>