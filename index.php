<?php include "header.php";?>

<style>
    #reviews{
        min-height: 620px;
    }

    #reviews h5{
        background-color: black;
        width: max-content;
        border-radius: 10px 60px 0px 0px;
        color:white;
        margin: 0;
        padding: 0; 
    }

    .reviewscontent{
        background-color: black;
        color:white;
        border-radius:0px 10px 10px 60px;
        min-height: 620px;
    }

    .highlightscontent{
        background-color:#db3737;
        border-radius:0px 10px 10px 60px;
        color:white;
        min-height: 620px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center; 
        gap: 15px;
    }

    .highlights h5{
        background-color: #db3737;
        width: max-content;
        border-radius: 10px 60px 0px 0px;
        color:white;
        margin: 0;
        padding: 0; 
    }

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
        max-width: 150px;
        border-radius:30px;
    }

    .movieHighlight p{
        margin-top:10px;
    }

    #contentMain,#mainBody{
        background-color:transparent;
    }

    .user_review{
            border: 1px solid grey;
            border-radius: 30px;
    }

    .user_review a{
        color:#db3737;
        text-decoration: none;
    }

    .starIcon{
            max-width: 30px !important;;
            margin-top:-10px;
        }
</style>

<section id="contentMain" class="container-md">        
        <div class="row">
            <div class="highlights col-md-4 col-sm-12 pe-3! ps-0">
                <h5 class="ps-1 pe-3">Highest Ratings</h5>
                <div class=" highlightscontent col-md-12 pt-4">
                    <br/>
                    <?php 
                    $sql = "SELECT * FROM (
                        SELECT 
                            t.title showName,
                            t.cover showCover,
                            t.rating showRating,
                            showReviews.numberOfreviews,
                            showReviews.showid showID
                        FROM (SELECT 
                            sh.showid,count(ur.ratingId) numberOfreviews
                        FROM tshow sh inner join tuserrating ur 
                        on ur.showid = sh.showid 
                        GROUP by showid 
                        ORDER BY sh.rating) showReviews 
                        inner join tshow t where t.showid = showReviews.showid) as qr
                        order by qr.showRating desc,qr.numberOfreviews desc
                        LIMIT 6;";
        
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='image-container'>";
                            echo "<a href='showPage.php?showid={$row["showID"]}'><img src='{$row['showCover']}'/></a>";             
                            echo "<h6 class='rating pt-3'><img src='img/star.png' class='starIcon'/> {$row['showRating']}</h6></div>";                  
                        }
                    }
                    ?>
                </div>
            </div>

            <div id="reviews" class="col-md-8 col-sm-12 pe-0">
                <h5 class="ps-1 pe-3">Lastest Reviews</h5>
                <div class="col-md-12 reviewscontent p-4">
                <?php 
                    $sql = "SELECT 
                    sh.showid showID,
                    sh.title showName,
                    sh.cover showCover,
                    sh.rating showRating,
                    usr.nickname,
                    ur.title reviewTitle,
                    ur.review reviewContent,
                    ur.score reviewScore
                FROM tuserrating ur 
                INNER JOIN tshow sh ON sh.showid = ur.showid
                INNER JOIN tuser usr ON usr.userid = ur.userid
                ORDER BY ur.ratingId DESC
                LIMIT 4;";
        
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='row user_review'>";
                            echo "<div class='col-sm-12 col-md-3 image-container'>";
                            echo "   <img src='img/avatar.png' style='max-width:130px;'/>";
                            echo "</div>";
                            echo "<div class='col-sm-12 col-md-9 pt-3'>";
                            echo "    <h6>{$row['reviewTitle']} <img src='img/star.png' class='starIcon'/>";
                            echo " {$row['reviewScore']} <b> : </b><b style='color:red;'>";
                            echo " <a href='showPage?showid={$row['showID']}'>{$row['showName']}</a></b></h6></b>";
                            echo "    <p>{$row['reviewContent']}</p>  ";                         
                            echo "</div></div><br/>";  
                        }
                    }
                    ?>
                </div>
            </div>
        </div>


<?php include "footer.php";?>