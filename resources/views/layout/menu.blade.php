<style type="text/css">
    .header_4 .header_top {
        background-color: #910202!important;
    }
</style>
<header class="header_section header_4">
    <div class="header_top">
        <div class="container width_laptop_lg" >
            <div class="content_wrap" >
                <p class="welcome_text text-white">HACEMOS ENVÍOS A TODA LA REPÚBLICA MEXICANA</p>
                <ul class="header_icons_list ul_li">
                    <li>
                        <ul class="social_primary ul_li">
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </li>
                    <!-- <li>
                        <div class="select_option language_select">
                            <select>
                                <option data-display="Select">Choose Your Language</option>
                                <option value="English" selected>English</option>
                                <option value="Bangla">Bangla</option>
                                <option value="Franch" disabled>Franch</option>
                                <option value="Portuguese">Portuguese</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="select_option currency_select">
                            <select>
                                <option data-display="Select">Choose Your Currency</option>
                                <option value="usd" selected>USD</option>
                                <option value="inr" disabled>IRN</option>
                                <option value="bdt">BDT</option>
                                <option value="pkr">PKR</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <a href="order_tracking.html" class="order_track_btn"><i class="fas fa-map-marker-alt"></i> Track My Order</a>
                    </li>
                    <li>
                        <a href="dashboard.html" class="user_account_btn"><i class="fas fa-user"></i> My Account</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>

    <div class="header_bottom" style="margin-top:20px">
        <div class="container width_laptop_lg">
            <div class="content_wrap">
                <div class="menu_wrap">
                    <div class="brand_logo">
                        <a class="brand_link" href="index-2.html">
                            <img src="assets/images/ingusaLogo/ingusa_logo_s.png" srcset="assets/images/logo/logo1_2x.png 2x" alt="logo_not_found">
                        </a>
                    </div>

                    <nav class="main_menu navbar navbar-expand-lg">
                        <button class="mobile_menu_btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fal fa-bars"></i></span>
                        </button>
                        <div class="main_menu_inner collapse navbar-collapse" id="main_menu_dropdown">
                            <ul class="main_menu_list ul_li">
                                <li class="active dropdown">
                                    <a class="nav-link" href="{{route('inicio')}}" id="home_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Inicio
                                        <!-- <span class="menu_badge new_badge">NEW</span> -->
                                    </a>  
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="#" id="shop_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Productos
                                    </a>
                                    <ul class="submenu dropdown-menu" aria-labelledby="blog_submenu">
                                        <li><a href="blog_details.html">Cilindros de Gas</a></li>
                                        <li><a href="blog_details.html">Tanques Estacionarios</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="#" id="contact_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Nosotros
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="#" id="contact_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Contáctanos
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <!-- <ul class="header_icons_group ul_li">
                    <li>
                        <button type="button" class="main_search_btn" data-bs-toggle="collapse" data-bs-target="#main_search_collapse" aria-expanded="false" aria-controls="main_search_collapse">
                            <i class="search_icon far fa-search"></i>
                            <i class="search_close fal fa-times"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="cart_btn">
                            <i class="far fa-shopping-bag"></i>
                            <small class="cart_counter">2</small>
                        </button>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>

    <!-- collapse search - start -->
    <div class="main_search_collapse collapse" id="main_search_collapse">
      <div class="main_search_form card">
        <div class="container width_desktop">
          <form action="#">
            <div class="form_item">
              <input type="search" name="search" placeholder="Search here...">
              <button type="submit" class="submit_btn"><i class="fal fa-search"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- collapse search - end -->
  </header>