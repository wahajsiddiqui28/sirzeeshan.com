<?php  $pagetitle="Login"; ?>
<?php include("include/header.php") ?>

<style>
    section.login {
     padding-bottom: 9px;
    }
</style>

<section class="login">
    <div class="container">
        <div class="form-vc login">
                <form>
                    <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label">Username or E-mail</label>
                        <input type="name" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
                    </div>
                    <div class="sdsd row mb-5 pb-4">
                        <div class="col-lg-6 col-md-6 col-6">
                           <button type="button" class="btn btn-primary main" style="        margin: 0;    width: 100%;     padding: 9px 70px;  background: #3ba1da!important; color: #fff; border: 1px solid #3ba1da !important;">Login</button>
                         </div>
                        <div class="col-lg-6 col-md-6 col-6">
                           <button type="button" class="btn btn-primary main" style="      margin: 0;   width: 100%;        padding: 9px 70px;      box-shadow: 0px 1px 2px 1px #0000000f;    background: #eee; color : #666; border: 1px solid #eee !important;">Register</button>
                        </div>
                    </div>
                    <span><a href="#">Forgot your password?</a></span>
                  </form>
        </div>
    </div>
</section>



<?php include("include/footer.php") ?>