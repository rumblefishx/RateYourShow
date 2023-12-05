<?php include "header.php";?>
    <style>
        .image-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; 
        }

        .image-container p{
            color:#db3737;
        }

        .image-container img {
            flex: 0 0 auto; 
            max-width: 300px;
            border-radius:30px;
        }

        .coverDisplay p{
            display:inline;
        }

        #contentMain h3,h4,h5,h6{
            text-align:center;
        }

        .starIcon{
            max-width:30px;
            margin-top:-10px;
        }

        .user_review{
            border: 1px solid grey;
            border-radius: 30px;
        }
    </style>
    <section id="contentMain" class="container-md p-3">        
        <div class="row">
            <div class="coverDisplay col-md-5 col-sm-12">
                <?php 
                    $sql = "Select 
                            sh.title showName,
                            sh.cover showCover,
                            sh.rating showRating	
                        from tshow sh
                        where sh.showid = {$_GET['showid']};";                

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0){
                        $row = $result->fetch_assoc();
                        echo "<h3>{$row["showName"]}</h3>";
                        echo "<h4><p><img src='img/star.png' class='starIcon'/> {$row["showRating"]}</p></h4>";
                        echo "<div class='image-container'>";
                        echo "   <img src='{$row["showCover"]}'/>";
                        echo "</div>";  
                    }
                    else{
                        echo "<br/>No show has been found</br/>";
                    }
                ?>
              
            </div>

            <div class="col-md-7 col-sm-12" style="overflow-y: scroll; height:600px;">
                <h3>User Reviews</h3>
                <div class="container p-1">
                <?php 
                    $sql = "Select 
                        sh.title showName,
                        sh.cover showCover,
                        sh.rating showRating,
                        usr.nickname,
                        ur.title reviewTitle,
                        ur.review reviewContent,
                        ur.score reviewScore	
                    from tuserrating ur 
                    inner join tshow sh on sh.showid = ur.showid
                    inner join tuser usr on usr.userid = ur.userid
                    where sh.showid = {$_GET['showid']}";
        
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='row user_review'>";
                            echo "<div class='col-sm-12 col-md-3 image-container'>";
                            echo "   <img src='img/avatar.png' style='max-width:130px;'/>";
                            echo "   <p><b>User</b></p>";
                            echo "</div>";
                            echo "<div class='col-sm-12 col-md-9 pt-3'>";
                            echo "    <h6>{$row['reviewTitle']} <img src='img/star.png' class='starIcon'/> {$row['reviewScore']}</h6></b>";
                            echo "    <p>{$row['reviewContent']}</p>  ";                         
                            echo "</div></div><br/>";  
                        }
                    }
                    else{
                        echo "<br/><p>No user reviews were found!</p>";
                    }
                ?>

                </div>
            </div>
        </div>

    </section>
<?php include "footer.php";?>