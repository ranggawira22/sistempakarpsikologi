<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="/">Sistem Pakar Psikologi
                        {{-- <img src="mazer/images/logo/logo.png" alt="Logo" srcset=""></a>  --}}
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                    <li class="sidebar-item {{ $title == 'Home' ? 'active' : '' }} ">
                        <a href="/" class='sidebar-link'>
                            <i class="bi bi-house-door-fill"></i>
                            <span>Home</span>
                        </a>
                    </li>
                @if (auth()->check())
                    <li class="sidebar-item {{ $title == 'Dashboard' ? 'active' : '' }} ">
                        <a href="/dashboard" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ ($title == 'Evidences' || $title == 'Hypothesis') ? 'active' : '' }} has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-stack"></i>
                            <span>Management</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item {{ $title == 'Evidences' ? 'active' : '' }} ">
                                <a href="{{ route('evidence.index') }}">Gejala</a>
                            </li>
                            <li class="submenu-item {{ $title == 'Hypothesis' ? 'active' : '' }} ">
                                <a href="{{ route('hypothesis.index') }}">Gangguan</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item {{ $title == 'Rule' ? 'active' : '' }}">
                        <a href="{{ route('rule.index') }}" class='sidebar-link'>
                            <i class="bi bi-gear-wide-connected"></i>
                            <span>Rule</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ $title == 'Expert System' ? 'active' : '' }}">
                        <a href="{{route('expert-system') }}" class='sidebar-link'>
                            <i class="bi bi-list-check"></i>
                            <span>Expert System</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ $title == 'History' ? 'active' : '' }}">
                        <a href="{{route('history.index') }}" class='sidebar-link'>
                            <i class="bi bi-clock-history"></i>
                            <span>History</span>
                        </a>
                    </li>

                    <li class="sidebar-title"><hr></li>

                    <li class="sidebar-item {{ ($title == 'Setting' || $title == 'Users') ? 'active' : '' }} has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-gear"></i>
                            <span>Setting</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item {{ $title == 'Setting' ? 'active' : '' }}">
                                <a href="{{ route('setting.index') }}">Setting</a>
                            </li>
                            @if (auth()->user()->level == 'manager')
                                <li class="submenu-item {{ $title == 'User' ? 'active' : '' }}">
                                    <a href="{{ route('user.index') }}">User data</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @else
                    <li class="sidebar-item {{ $title == 'Login' ? 'active' : '' }} ">
                        <a href="/login" class='sidebar-link'>
                            <i class="bi bi-box-arrow-in-left"></i>
                            <span>Login</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>