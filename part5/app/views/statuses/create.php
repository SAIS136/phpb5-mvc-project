<?php require APPURL.'/views/layout/header.php' ; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">

        <div class="row">

            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <h3>Create New Status</h3>
                <a href="<?php echo ROOTURL; ?>/statuses" class="btn btn-secondary btn-sm rounded-0">Back</a>
            </div>

            <div class="col-md-12">
                <div class="card border-0 rounded-0">
                    <div class="card-body">
                        <form action="<?php echo ROOTURL; ?>/statuses/create" method="post">

                            <div class="col-md-12 form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control form-control-sm rounded-0 <?php echo(!empty($datas['nameerr'])) ? 'is-invalid' : '' ?>" value="<?php echo $datas['name'] ?? ''; ?>" />
                                    <span class="invalid-feedback"><?php echo ($datas['nameerr'] ?? ''); ?></span>
                            </div>

                            <div class="row">
                                <div class="col text-end">
                                    <button type="reset" class="btn btn-secondary btn-sm rounded-0">Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-sm rounded-0">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<?php require APPURL.'/views/layout/footer.php' ; ?>
