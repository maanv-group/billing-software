<header>
    <nav class="main-nav navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('user.dashboard', \Auth::user()->username) }}">
                Dashboard
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between w-100" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="searchinputs">
                            <form action="{{ route('user.search', \Auth::user()->username) }}" method="get"
                                class="d-flex">
                                {{-- @csrf --}}
                                <input type="text" class="form-control" placeholder="Search">
                                <button type="submit" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-search feather-14">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" title="Language">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-globe">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path
                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" title="Full Screen">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link icon-link" href="#" title="In Mails">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-mail">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link icon-link" title="Notifications" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item dropdown profile">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ $user->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('user.profile', \Auth::user()->username) }}">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link icon-link text-danger" title="Settings" href="{{ url('/logout') }}">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path
                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                </path>
                            </svg> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="sub-nav navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @if ($user->role == 'Super Admin')
                        <!-- COMPANY -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Company
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Company</a></li>
                                <li><a class="dropdown-item" href="#">Year Create</a></li>
                                <li><a class="dropdown-item" href="#">Balance Transfer</a></li>
                                <li><a class="dropdown-item" href="#">Account Group</a></li>
                                <li><a class="dropdown-item" href="#">User Create</a></li>
                                <li><a class="dropdown-item" href="#">User Rights</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Books</a></li>
                                <li><a class="dropdown-item" href="#">Data Refresh</a></li>
                                <li><a class="dropdown-item" href="#">Data Backup</a></li>
                            </ul>
                        </li>
                    @endif
                    <!-- MASTER -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Master
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Book</a></li>
                            <li><a class="dropdown-item" href="#">Party</a></li>
                            <li><a class="dropdown-item" href="#">Product</a></li>
                            <li><a class="dropdown-item" href="#">Group</a></li>
                            <li><a class="dropdown-item" href="#">Counter</a></li>
                            <li><a class="dropdown-item" href="#">Item</a></li>
                            <li><a class="dropdown-item" href="#">Item</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Party Opening</a></li>
                            <li><a class="dropdown-item" href="#">Item Opening</a></li>
                            <li><a class="dropdown-item" href="#">Tag Opening</a></li>
                        </ul>
                    </li>
                    <!-- TRANSACTION -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Transaction
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Purchase</a></li>
                            <li><a class="dropdown-item" href="#">Other Purchase</a></li>
                            <li><a class="dropdown-item" href="#">Purchase Return</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            {{-- <li><a class="dropdown-item" href="#">Tag Cancel</a></li> --}}
                            <li><a class="dropdown-item" href="#">Wholesale Sales</a></li>
                            <li><a class="dropdown-item" href="#">Sales Order</a></li>
                            <li><a class="dropdown-item" href="#">Sales</a></li>
                            <li><a class="dropdown-item" href="#">Sales Return</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Delivery Challan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            {{-- <li><a class="dropdown-item" href="#">Approval Issue</a></li> --}}
                            {{-- <li><a class="dropdown-item" href="#">Approval Return</a></li> --}}
                            {{-- <li><a class="dropdown-item" href="#">Rate Cut</a></li> --}}
                            {{-- <li><a class="dropdown-item" href="#">Old Item Sales</a></li> --}}
                            {{-- <li><a class="dropdown-item" href="#">Labour Work</a></li> --}}
                            <li><a class="dropdown-item" href="#">Cash Received</a></li>
                            <li><a class="dropdown-item" href="#">Cash Payment</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Bank Received</a></li>
                            <li><a class="dropdown-item" href="#">Bank Payment</a></li>
                            {{-- <li><a class="dropdown-item" href="#">Contra Entry</a></li> --}}
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link disabled dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
