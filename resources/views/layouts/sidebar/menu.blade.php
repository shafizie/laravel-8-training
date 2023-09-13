<div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                        <div class="sidenav-menu-heading"></div>
                            <!-- Begin::Dashboard -->
                            <a class="nav-link @if($linkactive) active @endif" href="{{ route('home') }}">
                                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                                Dashboard
                            </a>
                            <!-- End::Dashboard -->

                            <!-- Begin::Menu for Vehicle -->
                            <!-- Sidenav Menu Heading (Core)-->
                            <div class="sidenav-menu-heading">Module</div>
                            <!-- Sidenav Accordion (Dashboard)-->
                            <a class="nav-link @if($linkactiveVehicle) active @else collapse @endif " href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards" aria-expanded="@if($linkactiveVehicle) true @else false @endif" aria-controls="collapseDashboards">
                                <div class="nav-link-icon"><i data-feather="truck"></i></div>
                                Vehicle
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse @if($linkactiveVehicle) show @else @endif" id="collapseDashboards" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                    <a class="nav-link @if($linkactiveVehicle) active @else @endif" href="{{ route('vehicle.index') }}">List</a>
                                </nav>
                            </div>
                            <!-- End::Menu for Vehicle -->
                        </div>
                    </div>
                    <!-- Sidenav Footer-->
                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">Logged in as:</div>
                            <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
                        </div>
                    </div>
                </nav>
            </div>
