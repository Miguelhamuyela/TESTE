<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
<header id="masthead" class="site-header">
    <div class="masthead-container full-width-compress header-style1">
        <div class="container-fluid">
            <div class="row no-gutters d-flex align-items-center">
                <div class="col-sm-2 col-xs-12">
                    <div class="site-branding">
                        <a class="dark-logo" href="{{ route('site.home') }}">
                            <img width="360" height="112" src="/site/images/logo/logo-colour.png" alt=""
                                loading="lazy" />
                        </a>
                        <a class="light-logo" href="{{ route('site.home') }}">
                            <img width="360" height="112" src="/site/images/logo/logo.png" loading="lazy" />
                        </a>
                    </div>
                </div>
                <div class="col-sm-8 col-xs-12">

                    <div id="site-navigation" class="main-navigation">
                        <nav class="menu-main-container">
                            <ul id="menu-main" class="menu">

                                <li id="menu-item-553"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                                    <a href="{{ route('site.home') }}">Início</a>
                                </li>
                                <li id="menu-item-553"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                                    <a href="{{ route('site.about.index') }}">Sobre</a>
                                </li>
                                <li id="menu-item-553"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                                    <a href="{{ route('site.schedule') }}">Agenda</a>
                                </li>
                                <li id="menu-item-553"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                                    <a href="{{ route('site.speaker') }}">Oradores</a>
                                </li>
                                <li id="menu-item-553"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                                    <a href="{{ route('site.moderators') }}">Moderadores</a>
                                </li>
                                <li id="menu-item-553"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                                    <a href="{{ route('site.gallery') }}">Galeria</a>
                                </li>

                                <li id="menu-item-553"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                                    <a href="{{ route('site.contact') }}">Contactos</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--
                    <div class="col-lg-2 col-md-2 d-none d-lg-block">
                        <div class="dropdown header-action-items">
                            <button class="btn-fill size-xs color-yellow border-radius-5 gust dropdown-toggle"
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Inscrições
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item text-dark p-4"
                                    style="
                                font-family: Poppins, sans-serif;
                                font-size: 15px;
                                font-weight: 500;
                                line-height: 22px;
                                "
                                    href="#"> Participantes</a>


                                <a class="dropdown-item text-dark p-4"
                                    style="font-family: Poppins, sans-serif;font-size: 15px;font-weight: 500;line-height: 22px;"
                                    href="#">Empresas</a>



                            </div>
                        </div>

                    </div>
                -->
            </div>
        </div>
    </div>
</header>


<div class="rt-header-menu mean-container" id="meanmenu">
    <div class="mean-bar">
        <a href="{{ route('site.home') }}" alt="Fórum">
            <img width="489" height="121" class="logo-small" alt="Fórum"
                src="/site/images/logo/logo-colour.png" />
        </a>
        <span class="sidebarBtn">
            <span class="fa fa-bars"> </span>
        </span>
    </div>

    <div class="rt-slide-nav">
        <div class="offscreen-navigation">
            <nav class="menu-main-container">
                <ul id="menu-main-1" class="menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                        <a href="{{ route('site.home') }}" aria-current="page">Início</a>
                    </li>
                    <li id="menu-item-553"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                        <a href="{{ route('site.about.index') }}">Sobre</a>
                    </li>

                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                        <a href="{{ route('site.schedule') }}">Agenda</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                        <a href="{{ route('site.speaker') }}">Oradores</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                        <a href="{{ route('site.gallery') }}">Galeria</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                        <a href="{{ route('site.contact') }}">Contactos</a>
                    </li>
                    <!--
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                        <a href="#">Inscrição para Participantes</a>
                    </li>

                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                        <a href="#">Patrocinar como Empresa</a>
                    </li>
                    -->
                </ul>
            </nav>
        </div>
    </div>
</div>
