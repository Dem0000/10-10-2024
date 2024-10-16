<?php include 'data.php'; ?>


<header class="header_section">
    <div class="header_top">
        <div class="container">
            <div class="contact_nav">
                <a href="tel:<?php echo str_replace(' ', '', $contactInfo['phone']); ?>">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>Call : <?php echo $contactInfo['phone']; ?></span>
                </a>
                <a href="mailto:<?php echo $contactInfo['email']; ?>">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>Email : <?php echo $contactInfo['email']; ?></span>
                </a>
                <a href="#">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span><?php echo $contactInfo['location']; ?></span>
                </a>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav">
                            <?php foreach ($navLinks as $link): ?>
                                <li class="nav-item <?php echo (isset($link['active']) && $link['active']) ? 'active' : ''; ?>">
                                    <a class="nav-link" href="<?php echo $link['url']; ?>">
                                        <?php echo $link['label']; ?>
                                        <?php if (isset($link['active']) && $link['active']): ?>
                                            <span class="sr-only">(current)</span>
                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="quote_btn-container">
                        <a href="">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>Login</span>
                        </a>
                        <a href="">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>Sign Up</span>
                        </a>
                        <form class="form-inline">
                            <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>

   
</header>

