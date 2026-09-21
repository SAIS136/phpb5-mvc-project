<?php require APPURL.'/views/layout/header.php' ; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">

        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <h3>Who is Online?</h3>
                <a href="<?php echo ROOTURL; ?>/articles" class="btn btn-primary btn-sm rounded-0">Go to Article</a>
            </div>

            <?php foreach($datas['onlineusers'] as $onlineuser) : ?>

                <div class="card rounded-0">
                    <div class="card-body">

                        <h5 class="card-title"><?php echo $onlineuser['name']; ?></h5>
                        <h5 class="small">last activity : <span class="fw-bold"><?php echo $onlineuser['lastactivity']; ?></span></h5>

                    </div>

                    <div class="card-footer">
                        <div class="d-flex float-end">

                            <div>
                                <span class="btn btn-success btn-sm rounded-0">
                                    <?php echo $onlineuser['status']; ?>
                                </span>
                            </div>

                        </div>
                    </div>

                </div>

            <?php endforeach; ?>

            <hr>

            <?php foreach($datas['offlineusers'] as $offlineuser) : ?>

                <div class="card rounded-0">
                    <div class="card-body">

                        <h5 class="card-title"><?php echo $offlineuser['name']; ?></h5>
                        <h5 class="small">last activity : <span class="fw-bold"><?php echo $offlineuser['lastactivity']; ?></span></h5>

                    </div>

                    <div class="card-footer">
                        <div class="d-flex float-end">

                            <div>
                                <span class="btn btn-secondary btn-sm rounded-0">
                                    <?php echo $offlineuser['status']; ?>
                                </span>
                            </div>

                        </div>
                    </div>

                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>


<?php require APPURL.'/views/layout/footer.php' ; ?>
