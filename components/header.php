<header class="wow fadeInDown" data-wow-delay=".4s">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-6 col-lg-2">
                <div class="logo">
                    <a href="<?php echo $pageurl; ?>/">
                        <img src="<?php echo $pageurl; ?>/public/images/logo.png" alt="" />
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-6 text-right d-none d-md-block">
                <ul class="menu-list">
                    <li><a href="<?php echo $pageurl; ?>/#sobre-nos" class="button-scroll" data-scroll="sobre-nos">Sobre nós</a></li>
                    <li><a href="<?php echo $pageurl; ?>/#aspiracoes" class="button-scroll" data-scroll="aspiracoes">Aspirações</a></li>
                    <li><a href="<?php echo $pageurl; ?>/#contato" class="button-scroll" data-scroll="contato">Contato</a></li>
                    <li><a href="tel:+447446707300">44 7446 707300</a></li>
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