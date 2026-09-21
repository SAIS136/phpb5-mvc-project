<?php require APPURL.'/views/layout/header.php' ; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">

        <div class="row">

            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <h3>Edit Article</h3>
                <a href="<?php echo ROOTURL; ?>/articles" class="btn btn-secondary btn-sm rounded-0">Back</a>
            </div>

            <div class="col-md-12">
                <div class="card border-0 rounded-0">
                    <div class="card-body">
                        <form action="<?php echo ROOTURL; ?>/articles/edit/<?php echo $datas['id'] ?>" method="post" enctype="multipart/form-data">

                            <div class="col-md-12 form-group mb-3">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" class="form-control form-control-sm rounded-0 <?php echo(!empty($datas['imageerr'])) ? 'is-invalid' : '' ?>" />
                                    <span class="invalid-feedback"><?php echo ($datas['imageerr'] ?? ''); ?></span>

                                    <input type="hidden" name="old_image" value="<?php echo $datas['image'] ?? ''; ?>">

                            </div>

                            <div class="col-md-12 form-group mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control form-control-sm rounded-0 <?php echo(!empty($datas['titleerr'])) ? 'is-invalid' : '' ?>" value="<?php echo $datas['title'] ?? ''; ?>" />
                                    <span class="invalid-feedback"><?php echo ($datas['titleerr'] ?? ''); ?></span>
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                    <label for="content">Content</label>
                                    <textarea type="text" name="content" id="content" class="form-control form-control-sm rounded-0 <?php echo(!empty($datas['contenterr'])) ? 'is-invalid' : '' ?>" rows="5">
                                        <?php echo $datas['content'] ?? ''; ?>
                                    </textarea>
                                    <span class="invalid-feedback"><?php echo ($datas['contenterr'] ?? ''); ?></span>
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                    <label for="category_id">Category</label>
                                    <select name="category_id" id="category_id" class="form-control form-control-sm rounded-0 <?php echo(!empty($datas['category_iderr'])) ? 'is-invalid' : '' ?>">

                                    <?php foreach($datas['categories'] as $category): ?>

                                        <option value="<?php echo $category->categoryid; ?>"
                                            <?php if($datas['category_id'] == $category->categoryid) : ?>
                                                selected
                                            <?php endif; ?>>
                                            <?php echo $category->originalname; ?>
                                        </option>

                                    <?php endforeach; ?>

                                    </select>
                                    <span class="invalid-feedback"><?php echo ($datas['status_iderr'] ?? ''); ?></span>
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                    <label for="status_id">Status</label>
                                    <select name="status_id" id="status_id" class="form-control form-control-sm rounded-0 <?php echo(!empty($datas['status_iderr'])) ? 'is-invalid' : '' ?>">

                                    <option value="" disabled>Choose Status</option>

                                    <?php foreach($datas['statuses'] as $status): ?>

                                        <option value="<?php echo $status->statusid; ?>"
                                            <?php if($datas['status_id'] == $status->statusid) : ?>
                                                selected
                                            <?php endif; ?>>
                                            <?php echo $status->originalname; ?>
                                        </option>

                                    <?php endforeach; ?>

                                    </select>
                                    <span class="invalid-feedback"><?php echo ($datas['status_iderr'] ?? ''); ?></span>
                            </div>

                            <div class="row">
                                <div class="col text-end">
                                    <button type="reset" class="btn btn-secondary btn-sm rounded-0">Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-sm rounded-0">Update</button>
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
