<?php require APPURL.'/views/layout/header.php' ; ?>

<section class="col-md-4 mx-auto py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 rounded-0">
                <div class="card-body">
                    <?php flash("register_success"); ?>
                    <h3>Login Form</h3>
                    <form action="<?php echo ROOTURL; ?>/users/login" method="post">

                        <div class="col-md-12 from-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control form-control-sm rounded-0 <?php echo(!empty($datas['emailerr'])) ? 'is-invalid' : '' ?>" placeholder="Enter Email" value="<?php echo $datas['email']; ?>" />
                                <span class="invalid-feedback"><?php echo ($datas['emailerr']) ?></span>
                        </div>

                        <div class="col-md-12 from-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control form-control-sm rounded-0 <?php echo(!empty($datas['passworderr'])) ? 'is-invalid' : '' ?>" placeholder="Enter Password" value="<?php echo $datas['password']; ?>" />
                                <span class="invalid-feedback"><?php echo ($datas['passworderr']) ?></span>
                        </div>

                        <div class="row">
                            <div class="col">
                                <a href="<?php echo ROOTURL; ?>/users/register">Not yet register ? Register here!!</a>
                            </div>
                            <div class="col text-end">
                                <button type="submit" class="btn btn-primary btn-sm rounded-0">Login</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php require APPURL.'/views/layout/footer.php' ; ?>
