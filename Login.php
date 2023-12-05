<?php include "header.php";?>
    <section id="contentMain" class="container-md">
        <br/>
        <h3 style="text-align:center;">Sign In</h3><br/>
        <div class="row">
            <div class="col-md-4 mx-auto">
                <form class="align-items-center needs-validation" action="createaccount.php" method="post" id="loginForm" name="loginForm">

                    <div class="mb-3">
                        <label for="login" class="form-label">Nickname / Email</label>
                        <input type="text" class="form-control" id="login" name="login" aria-describedby="loginHelp" required minlength=4 maxlength=30>
                        <div id="loginHelp" class="form-text">Enter your nickname or email</div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required minlength=8 maxlength=12>
                    </div>

                    <p id="errMessage" style="color:white;text-align:center"></p>

                    <div class="row">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary" id="btnsubmit">Login</button>
                            <button type="button" class="btn btn-secondary" id="btnCreateAcc">Create Account</button>
                        </div>
                    </div>

                    
                </form>
            </div>
        </div>

        <script type="text/javascript" src="js/login.js"></script>
    </section>
<?php include "footer.php";?>