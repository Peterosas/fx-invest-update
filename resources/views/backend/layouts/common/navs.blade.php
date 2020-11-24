<!-- partial:partials/_horizontal-navbar.html -->
      <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="{{ route('home') }}">
                <img src="{{ asset('vxu') }}/images/logo.png" alt="logo" />
                <span class="font-12 d-block font-weight-light"> ...Sure Way to Financial Freedom </span>
              </a>
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('vxu') }}/images/logo-mini.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
              
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                      <img src="{{ asset('vxu') }}/images/users/blank.png" alt="image" />
                    </div>
                    <div class="nav-profile-text">
                      <p class="text-black font-weight-semibold m-0"> {{ Auth::user()->displayName() }} </p>
                      <span class="font-13 online-color">{{ Auth::user()->country }} <i class="mdi mdi-chevron-down"></i></span>
                    </div>
                  </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    @if (Auth::user()->role == getRole('admin'))
                      
                        @if (Str::startsWith(Route::currentRouteName(), 'admin'))
                            <a class="dropdown-item" href="{{ route('dashboard') }}"><i class="mdi mdi-settings mr-2 text-success"></i> Dashboard Mode </a>
                        @else
                        <a class="dropdown-item" href="{{ route('admin.users') }}"><i class="mdi mdi-settings mr-2 text-success"></i> Admin Mode </a>
                        @endif
                    @endif
                      
                    <a class="dropdown-item" href="{{ route('account.settings') }}">
                      <i class="mdi mdi-settings mr-2 text-success"></i> Change PIN </a>
                    <a class="dropdown-item" href="{{ route('profile') }}"><i class="mdi mdi-settings mr-2 text-success"></i> Profile </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item logout-link" href="{{ route('logout') }}">
                      <i class="mdi mdi-logout mr-2 text-primary"></i> Logout </a>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </div>
        </nav>
        <nav class="bottom-navbar">
          <div class="container">
            <ul class="nav page-navigation">
              @if (!Str::startsWith(Route::currentRouteName(), 'admin.'))
              <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'dashboard')? 'active':'' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                  <i class="mdi mdi-compass-outline menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              
              <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'trans.deposit')? 'active':'' }}">
                <a class="nav-link ajax-popup-link" href="{{ route('trans.deposit') }}">
                  <i class="mdi mdi-wallet menu-icon"></i>
                  <span class="menu-title">Doposit Fund</span>
                </a>
              </li>
                
              <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'trans.withdraw')? 'active':'' }}">
                <a class="nav-link" href="{{ route('trans.withdraw') }}">
                  <i class="mdi mdi-wallet menu-icon"></i>
                  <span class="menu-title">Withdraw Fund</span>
                </a>
              </li>
              <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'trans.history')? 'active':'' }}">
                <a class="nav-link" href="{{ route('trans.history') }}">
                  <i class="mdi mdi-history menu-icon"></i>
                  <span class="menu-title">My Transactions</span>
                </a>
              </li>
              <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'invest')? 'active':'' }}">
                <a class="nav-link" href="{{ route('invest.index') }}">
                  <i class="mdi mdi-table-large menu-icon"></i>
                  <span class="menu-title">My Investments</span>
                </a>
              </li>
                
            <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'bill.services')? 'active':'' }}">
                <a class="nav-link biller-nav-service" href="#{{ route('bill.services') }}">
                  <i class="mdi mdi-card menu-icon"></i>
                  <span class="menu-title">Pay Bills</span>
                </a>
            </li>
                
             <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'referral.index')? 'active':'' }}">
                <a class="nav-link" href="{{ route('referral.index') }}">
                  <i class="mdi mdi-link menu-icon"></i>
                  <span class="menu-title">My Downline</span>
                </a>
              </li>
            @else
              <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'admin.messages')? 'active':'' }}">
                <a class="nav-link" href="{{ route('admin.messages') }}">
                  <i class="fa fa-envelope mr-2"></i>
                   <span class="menu-title">Notify Clients</span>
                </a>
              </li>

             <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'admin.users')? 'active':'' }}">
                <a class="nav-link" href="{{ route('admin.users') }}">
                  <i class="fa fa-users mr-2"></i>
                   <span class="menu-title"> All Registered Users</span>
                </a>
              </li>
                
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.requests') }}">
                  <i class="fa fa-history mr-2"></i>
                   <span class="menu-title"> Client Requests</span>
                </a>
              </li>
                
             <li class="nav-item">
                <a class="nav-link ajax-popup-link" href="{{ route('admin.site.settings') }}">
                  <i class="fa fa-cog mr-2"></i>
                   <span class="menu-title"> Site Settings</span>
                </a>
             </li>
                
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.packages') }}">
                  <i class="fa fa-cog mr-2"></i>
                   <span class="menu-title"> Manage Package</span>
                </a>
            </li>
                
            @endif
             
            </ul>
          </div>
        </nav>
      </div>
      <!-- partial -->