<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="/">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Rooms</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/room/?status=available">
                        <i class="bi bi-circle"></i><span>Available Rooms</span>
                    </a>
                </li>
                <li>
                    <a href="/room/?status=unavailable">
                        <i class="bi bi-circle"></i><span>Unavailable Rooms</span>
                    </a>
                </li>
                <li>
                    <a href="/room">
                        <i class="bi bi-circle"></i><span>All Rooms</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="/template/#">
                <i class="bi bi-journal-text"></i><span>Booking</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/new-booking"> <i class="bi bi-circle"></i><span>New</span> </a>
                </li>
                <li>
                    <a href="/template/#">
                        <i class="bi bi-circle"></i><span>Grace (tenggang)</span>
                    </a>
                </li>
                <li>
                    <a href="/template/#">
                        <i class="bi bi-circle"></i><span>Late (terlambat)</span>
                    </a>
                </li>
                <li>
                    <a href="/template/#"> <i class="bi bi-circle"></i><span>Normal</span> </a>
                </li>
                <li>
                    <a href="/booking">
                        <i class="bi bi-circle"></i><span>All Booking</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="/billing">
                <i class="bi bi-currency-dollar"></i><span>Billing</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="/necessities">
                <i class="bi bi-layout-text-window-reverse"></i><span>Necessities</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('fasility.index') }}">
                <i class="bi bi-layout-text-window-reverse"></i><span>Fasilities</span>
            </a>
        </li>
        <!-- End Tables Nav -->
        @if (session('user.level') == 'pimpinan')
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="/template/#">
                    <i class="bi bi-bar-chart"></i><span>Report</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/MonthlyReport" target="_blank">
                            <i class="bi bi-circle"></i><span>Monthly report</span>
                        </a>
                    </li>
                    <li>
                        <a href="/YearReport" target="_blank">
                            <i class="bi bi-circle"></i><span>Years report</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif
        <li class="nav-item">
            <a class="nav-link collapsed" href="/customer">
                <i class="bi bi-person"></i>
                <span>Customers</span>
            </a>
        </li>
        <!-- End Icons Nav -->
        @if (session('user.level') == 'pimpinan')
            <li class="nav-heading">Only pimpinan</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin">
                    <i class="bi bi-person"></i>
                    <span>Admin</span>
                </a>
            </li>
        @endif
    </ul>
</aside>
<!-- End Sidebar-->
