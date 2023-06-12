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
                    <i class="fa-solid fa-envelope"></i>
                    <span class="menu-title" data-i18n="Shop">
                        Tambah Berita
                    </span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="nav-link has-arrow {{ Request::is('dashboard/insertvideos') ? 'active' : '' }}"
                    href="{{ route('insertvideos') }}">
                    <i class="fa-regular fa-file-video"></i>
                    <span class="menu-title" data-i18n="Shop">
                        Tambah Video
                    </span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="nav-link has-arrow {{ Request::is('dashboard/insertbroadcast') ? 'active' : '' }}"
                    href="{{ route('insertbroadcast') }}">
                    <i class="fa-solid fa-blog"></i>
                    </i>
                    <span class="menu-title" data-i18n="Shop">
                        Tambah Broadcast
                    </span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="nav-link has-arrow {{ Request::is('dashboard/insertlivebroadcast') ? 'active' : '' }}"
                    href="{{ route('insertlivebroadcast') }}">
                    <i class="fa-solid fa-bullhorn"></i>
                    </i>
                    <span class="menu-title" data-i18n="Shop">
                        Tambah Live Broadcast
                    </span>
                </a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-image"></i><span class="menu-title"
                        data-i18n="Gallery">Gallery</span></a>
                <ul class="menu-content">
                    <li><a class="nav-link has-arrow {{ Request::is('dashboard/insertalbum') ? 'active' : '' }}" href="{{ route('addalbum') }}"><span
                                data-i18n="Gallery Grid with Desc">Add Album</span></a>
                    </li>
                    <li><a class="nav-link has-arrow {{ Request::is('dashboard/insertphoto') ? 'active' : '' }}" href="{{ route('insertphoto') }}"><span
                                data-i18n="Gallery Grid with Desc">Tambah Foto</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
