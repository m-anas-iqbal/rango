<!-- Header section start -->
<header class="header__area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="header__navbar">
                    <div class="header__navbar__left">
                        <button class="sidebar-toggler">
                            <img src="{{asset('admin/images/icons/header/bars.svg')}}" alt="">
                        </button>
                        <a href="{{route('front')}}" target="_blank" class="btn btn-primary text-white">{{__('Visit Site')}}</a>
                    </div>
                    <div class="header__navbar__left nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-light bg-success badge-xs">{{auth()->user()->unreadNotifications->count()}}</span>
                        </a>
                        <ul class="dropdown-menu">
                                    @if (auth()->user()->unreadNotifications)
                                    <li class="d-flex justify-content-end mx-1 my-2">
                                        <a href="{{route('mark-as-read')}}" class="btn btn-success btn-sm">Mark All as Read</a>
                                    </li>
                                    @endif

                                    @foreach (auth()->user()->unreadNotifications as $notification)
                                    <a href="#" class="text-success"><li class="p-1 text-success"> {{$notification->data['data']}}</li></a>
                                    @endforeach
                        </ul>
                </div>
                    <div class="header__navbar__right">

                        <ul class="header__menu">
                            <li>
                                <a href="#" class="btn btn-dropdown bg-white rounded-circle p-3  lh-1 user-profile text-primary" data-bs-toggle="dropdown">
                                    <i class="fa-solid fa-user fs-6"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{route('admin.profile')}}">
                                            <img src="{{asset('admin/images/icons/user.svg')}}" alt="icon">
                                            <span>{{__('Profile')}}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                            <img src="{{asset('admin/images/icons/logout.svg')}}" alt="icon">
                                            <span>{{__('Logout')}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header section end -->
