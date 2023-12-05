<?php include "header.php";?>
    <section id="contentMain" class="container-md">
        <br/>
        <h3 style="text-align:center;">Create Your Account</h3>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form class="align-items-center needs-validation" action="createaccount.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3 text-center">                    
                        <label for="avatar" class="form-label text-center">Choose a profile picture</label>
                        <div class="row">
                            <div class="col text-center">
                            <image id="avatardisplay" src="img/avatar.png" style="max-width:150px;">
                            </div>
                        </div>
                        <br/>
                        <input class="form-control form-control-sm" id="avatar" name="avatar" type="file"/>
                    </div>  


                    <div class="mb-3">
                        <label for="nickname" class="form-label">Nickname</label>
                        <input type="text" class="form-control" id="nickname" name="nickname" aria-describedby="nicknameHelp" required minlength=4 maxlength=12>
                        <div id="nicknameHelp" class="form-text">How you'll be known.</div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required maxlength=30>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required minlength=8 maxlength=12>
                    </div>

                    <div class="mb-3" id="cfmPassWdGRoup">
                        <label for="confirmpassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required minlength=8 maxlength=12>

                        <div class="invalid-feedback">
                            Passwords Doesn't Match!
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary" id="btnsubmit">Submit</button>
                        </div>
                    </div>

                    
                </form>
            </div>
        </div>

        <script type="text/javascript" src="js/register.js"></script>
    </section>
<?php include "footer.php";?>