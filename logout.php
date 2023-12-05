<?php 
    session_start();  
    echo "<script>Entrei na pagina</script>";
    $response = array('message' => 'Tried to kill the session...');
    echo "<script>Status -> ".(string)session_status()."</script>";
    if( session_status() === PHP_SESSION_ACTIVE ) {
            
            echo "<script>Entrei no segundo if e to limpando a sessao</script>";
            $_SESSION["nickname"] = "";
            echo "<script>Destrui a sessao</script>";
            session_destroy();
            $response = array('message' => 'Session Destroied!');
    }
    http_response_code(200);
    
    echo json_encode($response);
?>