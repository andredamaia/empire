<header class="wow fadeInDown" data-wow-delay=".4s">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-4 col-lg-2">
                <div class="logo">
                    <a href="<?php echo $pageurl; ?>/">
                        <img src="<?php echo $pageurl; ?>/public/images/logo.png" alt="" />
                    </a>
                </div>
            </div>

            <div class="col-8 col-lg-6 text-left d-none d-md-block">
                <ul class="menu-list">
                    <li><a href="<?php echo $pageurl; ?>/#who-are-we" class="button-scroll" data-scroll="who-are-we">Who are we?</a></li>

                    <li><a href="<?php echo $pageurl; ?>/#acm" class="button-scroll" data-scroll="acm">ACM</a></li>

                    <span>
                        <li>
                            Doors
                            <img src="<?php echo $pageurl; ?>/public/images/arrow-down-menu.png" alt="" />
                        </li>

                        <ul class="menu-sublink">
                            <li><a href="<?php echo $pageurl; ?>/xl-door" class="button-scroll">XL Door</a></li>
                            <li><a href="<?php echo $pageurl; ?>/ultra-door" class="button-scroll">Ultra Door</a></li>
                        </ul>
                    </span>

                    <li><a href="<?php echo $pageurl; ?>/contato" class="button-scroll">Contato</a></li>
                    
                </ul>
            </div>

            <div class="col-6 col-lg-1 d-block d-md-none text-right">
                <a href="#" class="open-menu">
                    <svg width="31" height="18" viewBox="0 0 31 18" fill="none">
                        <rect width="31" height="2" rx="1" fill="#000"/>
                        <rect y="8" width="31" height="2" rx="1" fill="#000"/>
                        <rect y="16" width="31" height="2" rx="1" fill="#000"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>


<?php include('components/menu.php'); ?>