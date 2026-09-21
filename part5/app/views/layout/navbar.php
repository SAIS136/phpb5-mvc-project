 <!-- Start Header Section -->
        <header id="header">
            <!-- Start Nav Bar -->
                <nav class="navbar navbar-expand-lg fixed-top">

                    <a href="inxdex.html" class="navbar-brand text-light mx-3">
                        <img src="<?php echo ROOTURL; ?>/public/assets/img/fav/favicon.png" width="70" alt="favicon">
                        <span class="text-uppercase h2 fw-bold mx-2">Plannco <span class="h3">HOME DECORATION</span></span>
                    </a>


                    <button type="button" class="navbar-toggler navbuttons" data-bs-toggle="collapse" data-bs-target="#nav">
                        <div class="bg-light lines1"></div>
                        <div class="bg-light lines2"></div>
                        <div class="bg-light lines3"></div>
                    </button>


                    <div id="nav" class="navbar-collapse collapse justify-content-end text-uppercase fw-bold">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="<?php echo ROOTURL; ?>/welcomes" class="nav-link mx-2 menuitems">Home</a></li>
                            <li class="nav-item"><a href="<?php echo ROOTURL; ?>/welcomes/about" class="nav-link mx-2 menuitems">About Us</a></li>
                            <li class="nav-item"><a href="<?php echo ROOTURL; ?>/welcomes/property" class="nav-link mx-2 menuitems">Properties</a></li>
                            <li class="nav-item"><a href="<?php echo ROOTURL; ?>/welcomes/service" class="nav-link mx-2 menuitems">Services</a></li>
                            <li class="nav-item"><a href="<?php echo ROOTURL; ?>/welcomes/customer" class="nav-link mx-2 menuitems">Customer</a></li>
                            <li class="nav-item"><a href="<?php echo ROOTURL; ?>/welcomes/furniture" class="nav-link mx-2 menuitems">Furniture</a></li>
                            <li class="nav-item"><a href="<?php echo ROOTURL; ?>/welcomes/contact" class="nav-link mx-2 menuitems">Contact</a></li>

                            <?php if(isset($_SESSION['user_id'])): ?>

                                <li class="nav-item dropdown">

                                    <a href="javascript:void(0);" class="nav-link mx-2 menuitems dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION['user_name']; ?></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo ROOTURL; ?>/articles" class="dropdown-item">Articles</a></li>
                                        <li><a href="<?php echo ROOTURL; ?>/categories" class="dropdown-item">Category</a></li>
                                        <li><a href="<?php echo ROOTURL; ?>/statuses" class="dropdown-item">Status</a></li>
                                        <li><a href="<?php echo ROOTURL; ?>/users/whoisonline" class="dropdown-item">Online Users</a></li>
                                        <li><a href="<?php echo ROOTURL; ?>/users/logout" class="dropdown-item">Logout</a></li>
                                    </ul>

                                </li>

                            <?php else: ?>
                                <li class="nav-item"><a href="<?php echo ROOTURL; ?>/users/login" class="nav-link mx-2 menuitems">Login</a></li>
                                <li class="nav-item"><a href="<?php echo ROOTURL; ?>/users/register" class="nav-link mx-2 menuitems">Register</a></li>
                            <?php endif; ?>

                        </ul>
                    </div>

                </nav>
            <!-- End Nav Bar -->

            <!-- Start Banner -->
                <div class="text-light text-center text-md-end banners">
                    <h1 class="display-4 bannerheaders">Welcome to <span class="display-3 text-uppercase">Plannco</span> Home Decoration Co.,Ltd</h1>
                    <p class="lead bannerparagraphs">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            <!-- End Banner -->
        </header>
        <!-- End Header Section -->
