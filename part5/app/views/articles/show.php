<?php require APPURL.'/views/layout/header.php' ; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">

        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <h3>Articles Show</h3>
                <a href="<?php echo ROOTURL; ?>/articles/" class="btn btn-primary btn-sm rounded-0">Back</a>
            </div>

            <div class="col-md-12">

                <div class="card rounded-0">
                    <div class="card-body">

                        <!-- <h5 class="card-title"><?php echo $datas['article']->title ?? ''; ?></h5> -->
                        <h5 class="card-title"><?php echo $datas['article']['title'] ?? ''; ?></h5>

                        <img src="<?php echo ROOTURL.'/public/assets/images/'.$datas['article']['image'];?>" class="img-thumbnail mb-3">

                        <h5 class="small">created by : <span class="fw-bold"><?php echo $datas['user']['name'] ?? ''; ?></span></h5>
                        <p class="small">created at : <span class="fw-bold"><?php echo $datas['article']['created_at'] ?? ''; ?></span></p>
                        <p class="small">category : <span class="fw-bold"><?php echo $datas['category']['name'] ?? ''; ?></span></p>
                        <p class="small">status : <span class="fw-bold"><?php echo $datas['status']['name'] ?? ''; ?></span></p>

                        <p class="small"><?php echo $datas['article']['content'] ?? ''; ?></p>

                    </div>

                    <div class="card-footer">
                        <div class="d-flex float-end">

                            <?php if($datas['article']['user_id'] === $_SESSION['user_id']) : ?>

                                <div>
                                    <form action="<?php echo ROOTURL; ?>/articles/destroy/<?php echo $datas['article']['id'] ?? ''; ?>" method="post">
                                        <input type="submit" class="btn btn-danger rounded-0" value="Delete">
                                    </form>
                                </div>

                                <div>
                                    <a href="<?php echo ROOTURL; ?>/articles/edit/<?php echo $datas['article']['id'] ?? ''; ?>" class="btn btn-primary rounded-0 mx-3">Edit</a>
                                </div>

                            <?php endif; ?>

                            <div>
                                <a href="<?php echo ROOTURL; ?>/articles/show/<?php echo $datas['article']['id'] ?? ''; ?>" class="btn btn-success rounded-0">Show</a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>


<?php require APPURL.'/views/layout/footer.php' ; ?>
