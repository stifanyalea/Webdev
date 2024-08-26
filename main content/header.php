<header class="site-header">
    <div class="container">
        <div class="header-logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
            </a>
        </div>

        <nav class="main-navigation">
            <ul class="menu">
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="<?php echo home_url('/genre'); ?>">Genre</a></li>
                <li><a href="<?php echo home_url('/jadwal'); ?>">Jadwal</a></li>
                <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
            </ul>
        </nav>

        <div class="header-icons">
            <a href="#" class="search-icon"><i class="fa fa-search"></i></a>
            <a href="<?php echo wp_login_url(); ?>" class="login-button">Login</a>
            <a href="#" class="mobile-menu-icon"><i class="fa fa-bars"></i></a>
        </div>
    </div>

    <div class="search-popup">
        <div class="search-popup-content">
            <form method="get" action="<?php echo home_url('/'); ?>">
                <input type="text" name="s" placeholder="Search...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</header>
