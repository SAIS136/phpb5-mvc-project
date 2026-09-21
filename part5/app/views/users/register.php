<?php require APPURL.'/views/layout/header.php' ; ?>

<section class="col-md-4 mx-auto py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 rounded-0">
                <div class="card-body">
                    <h3 class="text-center">Register Form</h3>
                    <form action="<?php echo ROOTURL; ?>/users/register" method="post">

                        <div class="col-md-12 from-group mb-3">
                                <label for="fullname" class="form-label">Full Name</label>
                                <input type="text" name="fullname" id="fullname" class="form-control form-control-sm rounded-0 <?php echo(!empty($datas['fullnameerr'])) ? 'is-invalid' : '' ?>" placeholder="Enter Fullname" value="<?php echo $datas['fullname']; ?>" />
                                <span class="invalid-feedback"><?php echo ($datas['fullnameerr']) ?></span>
                        </div>

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

                        <div class="col-md-12 from-group mb-3">
                                <label for="cfmpassword" class="form-label">Confirm Password</label>
                                <input type="password" name="cfmpassword" id="cfmpassword" class="form-control form-control-sm rounded-0 <?php echo(!empty($datas['cfmpassworderr'])) ? 'is-invalid' : '' ?>" placeholder="Enter Confirm Password" value="<?php echo $datas['cfmpassword']; ?>" />
                                <span class="invalid-feedback"><?php echo ($datas['cfmpassworderr']) ?></span>
                        </div>

                        <div class="row">
                            <div class="col">
                                <a href="<?php echo ROOTURL; ?>/users/login">Have an account ? Login here!!</a>
                            </div>
                            <div class="col text-end">
                                <button type="submit" class="btn btn-primary btn-sm rounded-0">Register</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php require APPURL.'/views/layout/footer.php' ; ?>
