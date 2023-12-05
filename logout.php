<?php 
    session_start();  
    $response = array('message' => 'Tried to kill the session...');
    if( session_status() === PHP_SESSION_ACTIVE ) {
            
            $_SESSION["nickname"] = "";
            session_destroy();
            $response = array('message' => 'Session Destroied!');
    }
    http_response_code(200);
    
    echo json_encode($response);
?>