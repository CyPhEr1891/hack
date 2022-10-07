<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <img class="h-100" style="width:140px" src="<?php
                                    echo ASSETS_URL . "/img/logo.png";
                                    ?>" />

            <!-- <span class="demo menu-text fw-bolder h3">FTS</span> -->
        </a>

        <a href="" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <!-- Dashboard -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Dashboard</span></li>
        <li class="menu-item">
            <a href="<?php echo HOST_URL; ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Services -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Services</span></li>

        <li class="menu-item">
            <a href="<?php echo PAGES_URL . "/services/index.php"; ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Services</div>
            </a>
        </li>


        <!-- Services 2-->
        <!-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Services</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link">
                        <div data-i18n="Without menu">Passport Service</div>
                    </a>
                </li>
            </ul>
        </li> -->

        <!-- Misc -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
        <li class="menu-item">
            <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
            </a>
        </li>

    </ul>
</aside>