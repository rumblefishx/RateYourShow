<?php include "header.php"; ?>

<section id="contentMain" class="container-md">
    <?php 
        $avatar = "";
        $nickname = "";
        $email = "";
        $password = "";

        if(isset($_POST['avatar']))
            $avatar = $_POST['avatar'];

        if(isset($_POST['nickname']))
            $nickname = $_POST['nickname'];

        if(isset($_POST['email']))
            $email = $_POST['email'];

        if(isset($_POST['password']))
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if(isset($_POST['avatar'])){
            $avatar = file_get_contents($_POST['avatar']);
            echo "Carreguei o arquivo!";
        }

        echo "File -> {$avatar}";

        $stmt = $conn->prepare("CALL InsertUser(?, ?, ?, @result)");
        
        $stmt->bind_param("sss", $nickname,$email, $password);

        echo "<br/>";
        echo "<br/>";
        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "<div class='col-sm-12 col-md-6 mx-auto'>";
        if($stmt->execute()) {

                if ($conn->multi_query("SELECT @result AS result")) {
                    do {
                        $result = $conn->store_result();
                        if ($result !== false) {
                            $row = $result->fetch_assoc();
                            
                            if ($row !== null) {

                                if ($row['result'] === '0') {
                                    echo "<h2 style='text-align:center;'>Account Created</h2>";
                                    echo "<h4 style='text-align:center;'>Your account has been successfully created!</h2>";
                                    echo "<img src='img/ok.jpg' alt='' class='mx-auto d-block' style='max-width: 300px;'>";
                                } else {
                                    echo "<h2 style='text-align:center;'>Account Hasn't been created!</h2>";
                                    if($row['result'] === '1')
                                        echo "<h4 style='text-align:center;'>Email already in use.</h2>";
                                    if($row['result'] === '2')
                                        echo "<h4 style='text-align:center;'>Username already in use.</h2>";
                                    echo "<img src='img/err.jpg' alt='' class='mx-auto d-block' style='max-width: 300px;'>";
                                }
                            } else {
                                echo "Error fetching result row: " . $conn->error;
                            }
                        } else {
                            echo "Error getting result set: " . $conn->error;
                        }
                    } while ($conn->more_results() && $conn->next_result());

                } else {
                    echo "Error executing query: " . $conn->error;
                }

        } else {
            echo "<h2 style='text-align:center;'>Account Creation Error</h2>";
            echo "<h4 style='text-align:center;'>A problem has occurred during your account creation</h2>";
            echo "<img src='img/err.jpg' alt='' class='mx-auto d-block' style='max-width: 300px;'>";
            echo "Error executing statement: " . $stmt->error;
        }
        echo "</div>";
        echo "</div>";
        echo "</div>";

        // Close the statement
        $stmt->close();
    ?>
</section>

<?php include "footer.php"; ?>