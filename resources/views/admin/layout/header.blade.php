<!-- main-header -->
<div class="main-header sticky side-header nav nav-item">
    <div class="container-fluid">
        <div class="main-header-left ">
            <div class="responsive-logo h-auto">
                <a href="{{ route('admin.dashboard') }}" class="text-dark">
                    <h5 class="m-0">{{ config('app.name', 'Laravel') }}</h5>
                </a>
            </div>
            <div class="app-sidebar__toggle" data-toggle="sidebar">
                <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
                <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
            </div>
        </div>
        <div class="main-header-right">
            <div class="nav nav-item  navbar-nav-right ml-auto">
                <div class="dropdown main-profile-menu nav nav-item nav-link">
                    <a class="profile-user d-flex" href=""><img alt=""
                            src="{{ asset('assets/img/faces/6.jpg') }}"></a>
                    <div class="dropdown-menu">
                        <div class="main-header-profile bg-primary p-3">
                            <div class="d-flex wd-100p">
                                <div class="main-img-user"><img alt=""
                                        src="{{ asset('assets/img/faces/6.jpg') }}" class=""></div>
                                <div class="ml-3 my-auto">
                                    <h6>{{ auth()->user()->name }}</h6>
                                </div>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="bx bx-cog"></i> Edit
                            Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logoutForm').submit()"><i
                                class="bx bx-log-out"></i>
                            Sign Out</a>
                        <form action="{{ route('logout') }}" method="post" id="logoutForm" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /main-header -->
