
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo APPNAME; ?></title>
        <!-- fav icon -->
        <link href="<?php echo ROOTURL; ?>/public/assets/img/fav/favicon.png" rel="icon" type="image/png" sizes="16x16">
        <!-- bootstrap css1 js1 -->
        <link href="<?php echo ROOTURL; ?>/public/assets/libs/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- fontawesome css1 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- jquery ui css1 js1 -->
        <link href="<?php echo ROOTURL; ?>/public/assets/libs/jquery-ui-1.13.2.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
         <!-- lightbox2 css1 js1 -->
        <link href="<?php echo ROOTURL; ?>/public/assets/libs/lightbox2-dev/dist/css/lightbox.min.css" rel="stylesheet" type="text/css">
        <!-- custom css -->
        <link href="<?php echo ROOTURL; ?>/public/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <!-- Start Back to top -->
        <div class="fixed-bottom">
            <a href="#header" class="btn-backtotops"><i class="fas fa-arrow-up"></i></a>
        </div>
        <!-- End Back to top -->

        <!-- Start Stick Note -->
        <div class="sticknotes">
            <a href="javascript:void(0);" class="about">About</a>
            <a href="javascript:void(0);" class="blog">Blog</a>
            <a href="javascript:void(0);" class="news">News</a>
            <a href="javascript:void(0);" class="contact">Contact</a>
        </div>
        <!-- End Stick Note -->

        <?php require APPURL.'/views/layout/navbar.php'; ?>