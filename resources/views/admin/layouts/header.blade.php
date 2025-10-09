<div class="app-header-area">
    <header class="app-header" id="header">
        <div class="app-header-inner">
            <div class="app-header-left">
                <div class="d-flex align-center gap-15">
                    <div class="app-header-element">
                        <a class="sidebar-toggle-bar" id="sidebarToggle" href="javascript:void(0);">
                            <div class="sidebar-menu-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                    <div class="app-header-ls-logo">
                        <a class="app-header-ls-dark-logo" href="{{ route('admin.dashboard') }}">
                            <img src="{{ asset('mj_glam_width.png') }}" height="70" alt="image">
                        </a>
                        <a class="app-header-ls-light-logo" href="{{ route('admin.dashboard') }}">
                            <img src="{{ asset('mj_glam_width.png') }}" height="70" alt="image">
                        </a>
                    </div>
                    <div class="app-header-mobile-logo">
                        <a class="app-header-dark-logo" href="{{ route('admin.dashboard') }}">
                            <img src="{{ asset('mj_glam_width.png') }}" height="70" alt="image">
                        </a>
                        <a class="app-header-light-logo" href="{{ route('admin.dashboard') }}">
                            <img src="{{ asset('mj_glam_width.png') }}" height="70" alt="image">
                        </a>
                    </div>
                </div>
                <div class="app-header-search d-none d-lg-block">
                    <form action="#">
                        <input class="form-control" type="text" placeholder="Search...">
                        <button type="submit"><i class="ri-search-line"></i></button>
                    </form>
                </div>
            </div>
            <div class="app-header-right">
                <div class="app-header-search-modal">
                    <button type="button" class="app-header-circle" data-bs-toggle="modal"
                        data-bs-target="#searchModal">
                        <i class="ri-search-line"></i>
                    </button>
                </div>

                <div class="app-header-switcher app-header-circle">
                    <div class="theme-switcher">
                        <i class="ri-sun-line change-theme theme-button"></i>
                    </div>
                </div>

                <div class="app-header-fullscreen app-header-circle cursor-pointer">
                    <div onclick="javascript:toggleFullScreen()">
                        <i class="ri-fullscreen-line"></i>
                    </div>
                </div>

                <div class="app-header-user">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="author">
                                <div class="author-thumb">
                                    <img src="{{ asset('template_admin/images/avatar/avatar-thumb-001.webp') }}"
                                        alt="user">
                                </div>
                                <h6 class="author-name lh-1">{{ Auth::user()->name }}</h6>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="bd-user-info-list"><a href="{{ route('admin.profile') }}"><i
                                        class="ri-user-line"></i>Perfil</a>
                            </li>
                            <li class="bd-user-info-list"><a href="{{ route('admin.profile') }}"><i
                                        class="ri-settings-2-line"></i>Configuración</a></li>
                            <li class="bd-user-info-list"><button type="button"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                        class="ri-logout-circle-line"></i>Cerrar Sesion</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </header>
    <div class="body__overlay"></div>
</div>
