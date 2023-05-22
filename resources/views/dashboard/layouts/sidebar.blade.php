<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="active">
                <a class="nav-link has-arrow {{ Request::is('dashboard/') ? 'active' : '' }}"
                    href="{{ route('dashboard') }}"><i class="la la-home">
                    </i><span class="menu-titles" data-i18n="eCommerce Dashboard"> Inventory PAG
                    </span>
                </a>
            </li>
            <li class=" navigation-header">
                <span data-i18n="Ecommerce">
                    Menu
                </span>
                <i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right"
                    data-original-title="Ecommerce">
                </i>
            </li>
            <li class=" nav-item">
                <a class="nav-link has-arrow {{ Request::is('dashboard/insertberita') ? 'active' : '' }}"
                    href="{{ route('insertberita') }}">
                    <i class="fa-regular fa-newspaper"></i>
                    <span class="menu-title" data-i18n="Shop">
                        Insert Berita
                    </span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="nav-link has-arrow {{ Request::is('dashboard/insertvideos') ? 'active' : '' }}"
                    href="{{ route('insertvideos') }}">
                    <i class="fa-regular fa-file-video"></i>
                    <span class="menu-title" data-i18n="Shop">
                        Insert Video
                    </span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="nav-link has-arrow {{ Request::is('dashboard/insertbroadcast') ? 'active' : '' }}"
                    href="{{ route('insertbroadcast') }}">
                    <i class="fa-solid fa-blog"></i>
                    </i>
                    <span class="menu-title" data-i18n="Shop">
                        Insert Broadcast
                    </span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="nav-link has-arrow {{ Request::is('dashboard/insertlivebroadcast') ? 'active' : '' }}"
                    href="{{ route('insertlivebroadcast') }}">
                    <i class="fa-solid fa-bullhorn"></i>
                    </i>
                    <span class="menu-title" data-i18n="Shop">
                        Insert Live Broadcast
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
