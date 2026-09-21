<?php require APPURL.'/views/layout/header.php' ; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">

        <?php flash("status_success"); ?>

        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <h3>Statuses</h3>
                <a href="<?php echo ROOTURL; ?>/statuses/create" class="btn btn-primary btn-sm rounded-0">Add New</a>
            </div>

            <?php foreach($datas['statuses'] as $status): ?>

                <div class="card rounded-0">
                    <div class="card-body">

                        <h5 class="card-title"><?php echo $status->originalname; ?></h5>
                        <h5 class="small">created by : <span class="fw-bold"><?php echo $status->name; ?></span></h5>
                        <h5 class="small">created at : <span class="fw-bold"><?php echo $status->publicdate; ?></span></h5>

                    </div>

                    <div class="card-footer">
                        <div class="d-flex float-end">

                            <?php if($status->user_id === $_SESSION['user_id']) : ?>

                                <div>
                                    <form action="<?php echo ROOTURL; ?>/statuses/destroy/<?php echo $status->statusid; ?>" method="post">
                                        <input type="submit" class="btn btn-danger rounded-0" value="Delete">
                                    </form>
                                </div>

                                <div>
                                    <a href="<?php echo ROOTURL; ?>/statuses/edit/<?php echo $status->statusid; ?>" class="btn btn-primary rounded-0 mx-3">Edit</a>
                                </div>

                            <?php endif; ?>

                            <div>
                                <a href="<?php echo ROOTURL; ?>/statuses/show/<?php echo $status->statusid; ?>" class="btn btn-success rounded-0">Show</a>
                            </div>

                        </div>
                    </div>

                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>


<?php require APPURL.'/views/layout/footer.php' ; ?>
