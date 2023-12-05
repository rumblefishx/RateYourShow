<?php 
    include("conn.php");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST['login'];
        $password = $_POST['password'];
            if (checkCredentials($login, $password,$conn)) {
                http_response_code(200);
                $response = array('message' => 'Login successful');
                echo json_encode($response);
            } else {
                http_response_code(401);
                $response = array('message' => 'Login failed');
                echo json_encode($response);
            }
        }

    function checkCredentials($login, $password,$conn) {      
      $stmt = $conn->prepare("SELECT * FROM tuser WHERE nickname = ? OR email = ?");
      $stmt->bind_param("ss", $login, $login);
      $stmt->execute();
      $result = $stmt->get_result();
  
      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();

          if (password_verify($password, $row['password'])) {
              session_start();
              $_SESSION['nickname'] = $row['nickname'];
              mysqli_close($conn);
              return true; 
          }
      }
  
      mysqli_close($conn);
      return false; 
      }
?>