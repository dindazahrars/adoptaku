<div class="vertical-menu" style="background-color: #D6DBDF;  ">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{asset('backend/assets/images/users/avatar-1.png')}}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">
                    @if (Auth::check())
                                        <span class="d-none d-xl-inline-block ms-1">{{Auth::user()->name}}</span>
                                        @endif
                </h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>{{Auth::user()->level}}</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('home')}}" class="waves-effect">
                        <i class="ri-home-heart-line"></i>
                        <span>Home</span>
                    </a>
                </li>

                @if(Auth::user()->level == 'admin')
                <li>
                    <a href="{{route('user.index')}}" class="waves-effect">
                        <i class="ri-spy-fill"></i>
                        <span>Admin</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('pelanggan.index')}}" class="waves-effect">
                        <i class=" ri-parent-fill"></i>
                        <span>User</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('shop.index')}}" class="waves-effect">
                        <i class="ri-store-2-fill"></i>
                        <span>Pet Shop</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('hewan.index')}}" class="waves-effect">
                        <i class="ri-bear-smile-fill"></i>
                        <span>Animal</span>
                    </a>
                </li>

                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="ri-alert-line"></i><span class="badge rounded-pill bg-success float-end">10</span>
                        <span>Laporan</span>
                    </a>
                </li>
@endif

@if(Auth::user()->level == 'pelanggan')
<li>
    <a href="{{route('pelanggan.index')}}" class="waves-effect">
        <i class=" ri-parent-fill"></i>
        <span>User</span>
    </a>
</li>

<li>
    <a href="{{route('shop.index')}}" class="waves-effect">
        <i class="ri-store-2-fill"></i>
        <span>Pet Shop</span>
    </a>
</li>

<li>
    <a href="{{route('hewan.index')}}" class="waves-effect">
        <i class="ri-bear-smile-fill"></i>
        <span>Animal</span>
    </a>
</li>
@endif

@if(Auth::user()->level == 'shop')
<li>
    <a href="{{route('shop.index')}}" class="waves-effect">
        <i class="ri-store-2-fill"></i>
        <span>Pet Shop</span>
    </a>
</li>

<li>
    <a href="{{route('hewan.index')}}" class="waves-effect">
        <i class="ri-bear-smile-fill"></i>
        <span>Animal</span>
    </a>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-profile-line"></i>
        <span>Category</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="pages-starter.html">Accesories</a></li>
        <li><a href="pages-timeline.html">Food & Drink</a></li>
    </ul>
</li>

<li>
    <a href="index.html" class="waves-effect">
        <i class="ri-alert-line"></i><span class="badge rounded-pill bg-success float-end">10</span>
        <span>Laporan</span>
    </a>
</li>
@endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    </div>
