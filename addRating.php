<?php include "header.php";?>
    <section id="contentMain" class="container-md">
        <br/>
        <h3 style="text-align:center">Leave a review</h3>
        <br/>
        <form class="col-md-10 mx-auto" action="insertReview.php" method="post" id="addRatingForm" name="addRatingForm">            
            <section class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3" style="text-align:center;">
                            <b><label for="movieCover">Selected Show</label></b>
                            <div class="form-floating">
                                <img src="img/moviecoverplaceholder.jpg" id="movieCover" name="movieCover" style="max-width:300px;"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 p-3">
                         <!-- BROWSE SHOW -->
                        <div class="input-group mb-3">
                            <div class="col-md-12 mx-auto">
                                <b><label for="movieCover">Show Title</label></b>
                                <div class="form-floating">
                                    <input class="form-control" autocomplete="false" list="movieOptions" id="showname" name="showname" placeholder="Type to search..." onfocusout="chooseMovie()" validMovieSelection="pass" >
                                    <datalist id="movieOptions">
                                    </datalist>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="showTitle" name="showTitle" value=""/>
                        <input type="hidden" id="showType" name="showType" value=""/>
                        <input type="hidden" id="coverPath" name="coverPath" value=""/>

                        <!-- Define a title -->
                        <div class="mb-3">
                            <div class="form-floating">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Your Title" minlength=3 required>
                            <label for="title">Title for your review</label>
                        </div>
                        <br/>
                        <!-- Write Review -->
                        <div class="mb-3">
                            <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave your review" id="review" name="review" style="height: 157px;resize:none;" minlength="150" required></textarea>
                            <label for="review">Leave your review</label>
                        </div>
                        <br/>
                        <!-- Define Score-->
                        <div class="mb-3">
                            <div class="form-floating">
                            <input type="number" class="form-control" id="score" name="score" placeholder="Your Score" min=1 max=10 required>
                            <label for="score">Define a score (ex: 1 to 10)</label>
                        </div>
                        <!-- Submit -->
                        <button type="submit" class="btn btn-dark btn-lg" style="margin-top:8px;"><i class="fa-regular fa-star"></i> Add Rating</button><br/>
                    </div>
                </div>
            </section>
            
           
        </form>
        <script src="js/omdb.js"></script>
    </section>
<?php include "footer.php";?>