        <div class="sidebar-wrapper">
            <ul class="nav">

        {{--<li class="nav-item ">--}}
            {{--<a class="nav-link" href="{{route('operators.index')}}">--}}
                {{--<i class="material-icons">content_paste</i>--}}
                {{--<p>Operators List</p>--}}
            {{--</a>--}}
        {{--</li>--}}
        @if(Auth::guard('admin')->check())

            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Admin List</p>
                </a>
            </li>

        <li class="nav-item ">
            <a class="nav-link" href="{{route('adminAccess.index')}}">
                <i class="material-icons">content_paste</i>
                <p>Operators List</p>
            </a>
        </li>


                    @elseif(Auth::check())

                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('user.show')}}">
                                <i class="material-icons">person</i>
                                <p>User Profile</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('operators.index')}}">
                                <i class="material-icons">content_paste</i>
                                <p>Operators List</p>
                            </a>
                        </li>

        @else

                    <li class="nav-item active  ">
                        <a class="nav-link" href="{{route('admin.login')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('user.login')}}">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('operators.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Operators List</p>
                </a>
            </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('user.register')}}">
                            <i class="material-icons">person</i>
                            <p>Register</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./rtl.html">
                            <i class="material-icons">language</i>
                            <p>RTL Support</p>
                        </a>
                    </li>
                    <li class="nav-item active-pro ">
                        <a class="nav-link" href="./upgrade.html">
                            <i class="material-icons">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
        @endif
        {{--<li class="nav-item ">--}}
            {{--<a class="nav-link" href="{{route('bus.index')}}">--}}
                {{--<i class="material-icons">library_books</i>--}}
                {{--<p>Buses List</p>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item ">--}}
            {{--<a class="nav-link" href="{{route('region.index')}}">--}}
                {{--<i class="material-icons">bubble_chart</i>--}}
                {{--<p>Region List</p>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item ">--}}
            {{--<a class="nav-link" href="{{route('sub-region.index')}}">--}}
                {{--<i class="material-icons">location_ons</i>--}}
                {{--<p>Sub Region List</p>--}}
            {{--</a>--}}
        {{--</li>--}}

    </ul>
</div>