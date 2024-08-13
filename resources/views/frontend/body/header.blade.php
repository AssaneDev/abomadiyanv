<header class="header">
    <!-- Lower Bar -->
    <div class="header-inner">
        <div class="container-fluid pe-0">
            <div class="d-flex align-items-center justify-content-between">
                <!-- Left Part -->
                <div class="header_left_part d-flex align-items-center">
                    <div class="logo">
                        <a href="index.html" class="light_logo"> <img src=" {{asset('frontend/assets/img/log-removebg-preview.png')}}" style="width: 80px; height: 80px;" alt="img">
                        <a href="index.html" class="dark_logo"><img src=" {{asset('frontend/assets/img/logo-dark.svg')}}" alt="logo"></a>
                    </div>
                </div>

                <!-- Center Part -->
                <div class="header_center_part d-none d-xl-block">
                    <div class="mainnav">
                        <ul class="main-menu">
                            <li class="menu-item "><a href="#">Acceuil</a>
                            </li>
                            <li class="menu-item "><a href="#">Videos</a>
                            </li>  
                            <li class="menu-item"><a href="about.html">Offres</a></li>
                            <li class="menu-item "><a href="#">Contact</a>
                            </li>                         
                            
                            <li class="menu-item "><a href="#">Formations</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Part -->
                <div class="header_right_part d-flex align-items-center">
                    <div class="aside_open wptb-element">
                        <div class="aside-open--inner">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="header_search wptb-element">
                        <a href="#" class="modal_search_icon" data-bs-toggle="modal" data-bs-target="#modalSearch"><i class="bi bi-search"></i></a>
                    </div>

                    <button type="button" class="mr_menu_toggle wptb-element d-xl-none">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>