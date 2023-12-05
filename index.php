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
            flex-wrap: wrap;
            justify-content: center; 
            align-items: center; 
            gap: 10px;
        }

    .image-container img {
        flex: 0 0 auto; 
        max-height:200px;
        border-radius:30px;
    }

    .starIcon{
        max-width:30px;
        margin-top:-10px;
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

    .starIcon{
            max-width:30px;
            margin-top:-10px;
        }
</style>

<section id="contentMain" class="container-md">        
        <div class="row">
            <div class="highlights col-md-4 col-sm-12 pe-3! ps-0">
                <h5 class="ps-1 pe-3">Highest Ratings</h5>
                <div class=" highlightscontent col-md-12 p-1">
                    <br/>
                    <div class="image-container">
                        <img src="img/moviecoverplaceholder.jpg"/>                
                        <h6 class="rating"><p><img src='img/star.png' class='starIcon'/> 10.0</p></h6>                    
                    </div>
                </div>
            </div>

            <div id="reviews" class="col-md-8 col-sm-12 pe-0">
                <h5 class="ps-1 pe-3">Last Reviews</h5>
                <div class="col-md-12 reviewscontent p-4">
                <?php 
                    $sql = "SELECT 
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
                            echo "<div class='col-sm-12 col-md-9'>";
                            echo "    <h6>{$row['reviewTitle']}</h6><p style='text-align:center;'><img src='img/star.png' class='starIcon'/> {$row['reviewScore']}</p></b>";
                            echo "    <p>{$row['reviewContent']}</p>  ";                         
                            echo "</div></div><br/>";  
                        }
                    }
                    ?>
                </div>
            </div>
        </div>


<?php include "footer.php";?>