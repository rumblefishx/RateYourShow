<?php include("header.php");
    $Title = $_POST["showTitle"];
    $CoverPath = $_POST["coverPath"];
    $ShowType = $_POST["showType"];
    $Review = $_POST["review"];
    $ReviewTitle = $_POST["title"];
    $Score = $_POST["score"];
    $User = $_SESSION['nickname'];

    $proc = "CALL InsertReview(?,?,?,?,?,?,?,@ResultOp)";

    $stmt = $conn->prepare($proc);
        
    $stmt->bind_param("sssssss", $Title,$CoverPath,$ShowType,$Review,$ReviewTitle,$Score,$User);

    
    /*echo "Title	= {$Title}<br/>";
    echo "CoverPath	:{$CoverPath}<br/>";
    echo "ShowType: {$ShowType}<br/>";
    echo "Review: {$Review}<br/>";
    echo "ReviewTitle:{$ReviewTitle}<br/>";
    echo "Score: {$Score}<br/>";
    echo "User: {$User}"; */


    if($stmt->execute()) {
        $stmt->store_result();
        $stmt->free_result();
    
        $stmt->next_result();
        $result = $conn->query("SELECT @ResultOp AS ResultOp");
        $row = $result->fetch_assoc();
        
        $resultOp = $row['ResultOp'];
        echo "<br/>";
        if ($resultOp === "0") {
            echo "<h2 style='text-align:center;'>Review Added!</h2>";
            echo "<h4 style='text-align:center;'>Your review has been successfully submitted!</h2>";
            echo "<img src='img/ok.jpg' alt='' class='mx-auto d-block' style='max-width: 300px;'>";
        } else {
            echo "<h2 style='text-align:center;'>Review Hasn't been created!</h2>";
            echo "<h4 style='text-align:center;'>A technical issue happened. Contact our support.<br/>errCode:{$resultOp}</h2>";
            echo "<img src='img/err.jpg' alt='' class='mx-auto d-block' style='max-width: 300px;'>";
        }
    }
include ("footer.php");?>