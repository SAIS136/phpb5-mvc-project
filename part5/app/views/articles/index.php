<?php require APPURL.'/views/layout/header.php' ; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">

        <?php flash("article_success"); ?>

        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <h3>Articles</h3>
                <a href="<?php echo ROOTURL; ?>/articles/create" class="btn btn-primary btn-sm rounded-0">Add New</a>
            </div>

            <?php foreach($datas['articles'] as $article) : ?>

                <div class="card rounded-0">
                    <div class="card-body">

                        <h5 class="card-title"><?php echo substr($article['title'],0,50); ?></h5>
                        <h5 class="small">created by : <span class="fw-bold"><?php echo $article['name']; ?></span></h5>
                        <h5 class="small">created at : <span class="fw-bold"><?php echo $article['publicdate']; ?></span></h5>

                    </div>

                    <div class="card-footer">
                        <div class="d-flex float-end">

                            <?php if($article['user_id'] === $_SESSION['user_id']) : ?>

                                <div>
                                    <form action="<?php echo ROOTURL; ?>/articles/destroy/<?php echo $article['articleid']; ?>" method="post">
                                        <input type="submit" class="btn btn-danger rounded-0" value="Delete">
                                    </form>
                                </div>

                                <div>
                                    <a href="<?php echo ROOTURL; ?>/articles/edit/<?php echo $article['articleid']; ?>" class="btn btn-primary rounded-0 mx-3">Edit</a>
                                </div>

                            <?php endif; ?>

                            <div>
                                <a href="<?php echo ROOTURL; ?>/articles/show/<?php echo $article['articleid']; ?>" class="btn btn-success rounded-0">Show</a>
                            </div>

                        </div>
                    </div>

                </div>

            <?php endforeach; ?>

            <!-- start pagination -->
            <nav class="d-flex justify-content-end mt-3">
                <ul class="pagination">

                    <?php if($datas["page"] > 1): ?>
                        <li class="page-item"><a href="?page=<?php echo $datas['page']-1 ; ?>" class="page-link">Previous</a></li>
                    <?php endif; ?>

                    <?php for($x=1;$x <= $datas['totalpages']; $x++) : ?>
                        <li class="page-item">
                            <a href="?page=<?php echo $x; ?>" class="page-link">
                            <?php echo $x; ?>
                        </a></li>
                    <?php endfor; ?>

                    <?php if($datas["page"] < $datas['totalpages']): ?>
                        <li class="page-item"><a href="?page=<?php echo $datas['page']+1 ; ?>" class="page-link">Next</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
            <!-- start pagination -->


        </div>
    </div>
</section>


<?php require APPURL.'/views/layout/footer.php' ; ?>
