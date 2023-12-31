<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active" style="padding: 0 15px">
        <a class="desktop-logo logo-light active text-dark" style="height: auto" href="{{ route('admin.dashboard') }}">
            <h5 class="m-0">{{ config('app.name', 'Laravel') }}</h5>
        </a>
        <a class="logo-icon mobile-logo icon-light active text-dark h-0" style="height: auto"
            href="{{ route('admin.dashboard') }}">
            <h5 class="m-0">{{ config('app.name_initials', 'Laravel') }}</h5>
        </a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround"
                        src="{{ asset('assets/img/faces/6.jpg') }}"><span
                        class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0">{{ auth()->user()->name }}</h4>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category">Main</li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('admin.dashboard') }}">
                    <i class="fe fe-airplay side-menu__icon"></i>
                    <span class="side-menu__label">Dashboard</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('admin.frontpage.settings.index') }}">
                    <i class="fe fe-settings side-menu__icon"></i>
                    <span class="side-menu__label">Page Settings</span>
                </a>
            </li>
            {{-- <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                        class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"
                            opacity=".3" />
                        <path
                            d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                    </svg><span class="side-menu__label">Ecommerce</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="products.html">Products</a></li>
                    <li><a class="slide-item" href="product-details.html">Product-Details</a></li>
                    <li><a class="slide-item" href="product-cart.html">Cart</a></li>
                </ul>
            </li> --}}
        </ul>
    </div>
</aside>
<!-- main-sidebar -->
