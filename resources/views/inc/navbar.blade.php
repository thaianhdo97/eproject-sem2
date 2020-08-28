<div class="navbar">
    <div class="navbar-top container">
        <div class="row">
            <!-- nav bar top left info -->
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 navbar-top-left">
                <span>
                    <i class="fa fa-map-marker" aria-hidden="true"></i> số 8 Tôn Thất Thuyết, Hà Nội, Việt Nam
                </span>
                <span>
                    <i class="fa fa-phone" aria-hidden="true"></i> +84 333 237 860
                </span>
            </div>
            <!-- nav bar top right info -->
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 navbar-top-right">
                @if(Auth::check())

                    <div class="dropdown navbar-top-right">
                        <a href ="#"  class="navbar-top-link dropdown-toggle" type="button"
                           data-toggle="dropdown">{{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    {{--if user is guess--}}
                    <a href="/login" class="navbar-top-link">login</a>
                    <a href="/register" class="navbar-top-link">register</a>
                @endif
            </div>
        </div>
    </div>
    <div class="navbar-menu">
        <div class="hamburger-btn-container">
            <span id="hamburger-btn"></span>
        </div>
        <div class="brand">
            <img src="{{asset("img/logo/sky-logo-header.png")}}" alt="" class="img-responsive">
        </div>
        <div class="menu">
            <div class="menu-item"><a href="/" class="menu-link">Home</a></div>
            <div class="menu-item"><a href="#" class="menu-link">Tour guides</a></div>
            <div class="menu-item"><a href="#" class="menu-link">Gallery</a></div>
            <div class="menu-item"><a href="/about" class="menu-link">About</a></div>
            <div class="menu-item"><a href="/contact" class="menu-link">Contact</a></div>
        </div>
    </div>
</div>
