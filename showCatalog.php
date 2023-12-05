<?php include "header.php";?>



    <style>

        #contentMain img {
            max-width: 150px;
            margin:11px 8px 8px 8px;
            border-radius:30px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.60);
            transition: transform 0.3s ease-in-out; 
        }

        #contentMain img:hover {
            transform: translateY(-10px); 
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
        }
    </style>
    <section id="contentMain" class="container-fluid p-2">
        <br/><h3 style="text-align:center;"><?php echo $_GET['cat'] ?></h3>
        <div class="image-container">        

            <?php 
                $filter = "";
                if (isset($_GET['cat'])) {
                    $cat = $_GET['cat'];
                    if($cat === "TV"){
                        $filter = "where SH.Type like 'series';";
                    } else if($cat === "Movies"){
                        $filter = "where SH.Type like 'movie';";
                    }
                }
                $sql = "SELECT showid,title,cover,Type,rating FROM tshow SH {$filter}";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<a href='showPage.php?showid={$row["showid"]}'><img src='{$row["cover"]}'/></a>";
                }
                } else {
                echo "<br/><p>No movie on database</p>";
                }
            ?>
        </div>
    </section>
<?php include "footer.php";?>