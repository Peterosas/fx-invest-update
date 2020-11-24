<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
      
    @include('layouts.expiredsession')
      
    <link rel="icon" href="{{ asset('favicon.png') }}">

    <title>{{ $title?? ($site_settings->site_name?? config('company.name')) }}</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{ asset('fxu') }}/css/bootstrap.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="{{ asset('fxu') }}/css/style.css">
	
	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="{{ asset('fxu') }}/css/skins/_all-skins.css">
      
    <link rel="stylesheet" href="{{ asset('magnific') }}/magnific-popup.css">
      
    <link rel="stylesheet" href="{{ asset('alertify') }}/css/themes/default.min.css">
          
    <link rel="stylesheet" href="{{ asset('alertify') }}/css/alertify.min.css">
      
    
      
    <link rel="stylesheet" href="{{ asset('notifier') }}/styles/jquery.notifyBar.css">
    <link rel="stylesheet" href="{{ asset('notifier') }}/styles/metro/notify-metro.css">
      
    <link rel="stylesheet" href="{{ asset('datatable') }}/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('datatable') }}/buttons.bootstrap4.min.css">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <style>
        
        #logo {
            max-width: 65%;    
        }
        
        .font-size-20 {
            font-size: 20px;
        } 
        
        .lds-default {
          display: inline-block;
          position: relative;
          width: 80px;
          height: 80px;
        }
        .lds-default div {
          position: absolute;
          width: 6px;
          height: 6px;
          background: #fff;
          border-radius: 50%;
          animation: lds-default 1.2s linear infinite;
        }
        
        .bgw.lds-default div {
            background: #5e5555;    
        }
        
        .lds-default div:nth-child(1) {
          animation-delay: 0s;
          top: 37px;
          left: 66px;
        }
        .lds-default div:nth-child(2) {
          animation-delay: -0.1s;
          top: 22px;
          left: 62px;
        }
        .lds-default div:nth-child(3) {
          animation-delay: -0.2s;
          top: 11px;
          left: 52px;
        }
        .lds-default div:nth-child(4) {
          animation-delay: -0.3s;
          top: 7px;
          left: 37px;
        }
        .lds-default div:nth-child(5) {
          animation-delay: -0.4s;
          top: 11px;
          left: 22px;
        }
        .lds-default div:nth-child(6) {
          animation-delay: -0.5s;
          top: 22px;
          left: 11px;
        }
        .lds-default div:nth-child(7) {
          animation-delay: -0.6s;
          top: 37px;
          left: 7px;
        }
        .lds-default div:nth-child(8) {
          animation-delay: -0.7s;
          top: 52px;
          left: 11px;
        }
        .lds-default div:nth-child(9) {
          animation-delay: -0.8s;
          top: 62px;
          left: 22px;
        }
        .lds-default div:nth-child(10) {
          animation-delay: -0.9s;
          top: 66px;
          left: 37px;
        }
        .lds-default div:nth-child(11) {
          animation-delay: -1s;
          top: 62px;
          left: 52px;
        }
        .lds-default div:nth-child(12) {
          animation-delay: -1.1s;
          top: 52px;
          left: 62px;
        }
        @keyframes lds-default {
          0%, 20%, 80%, 100% {
            transform: scale(1);
          }
          50% {
            transform: scale(1.5);
          }
        }

    </style>
     
  </head>

<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ route('dashboard') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="{{ asset('fxu') }}/images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="{{ asset('fxu') }}/images/logo-dark.png" alt="logo"></span>
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="{{ asset('fxu') }}/images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="{{ asset('fxu') }}/images/logo-dark-text.png" alt="logo" class="dark-logo">
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('fxu') }}/images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('fxu') }}/images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">

                <p>
                  {{ Auth::user()->displayName() }}
                  <small class="mb-5">{{ Auth::user()->email }}</small>
                  <a href="{{ route('profile') }}" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left">
                    <a href="{{ route('profile') }}"><i class="ion ion-person"></i> My Profile</a>
                    </div>
                 
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="{{ route('account.settings') }}"><i class="fa fa-cog"></i> Account Setting</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="{{ route('logout') }}" class = "logout-link"><i class="fa fa-power-off"></i> Logout</a>
                  </div>				
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
        
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
		 <div class="ulogo">
			 <a href="{{ route('dashboard') }}">
				<img id="logo" class="img-responsive" src="{{ asset('pages') }}/images/logo-dark.png" alt="logo">
             </a>
		</div>
        <div class="image">
          <img src="{{ asset('fxu') }}/images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
        </div>

      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="nav-devider"></li>
        <li class="header nav-small-cap">{{ config('company.name') }}</li>
        <li class="{{ Str::startsWith(Route::currentRouteName(), 'dashboard')? 'active':'' }}">
          <a href="{{ route('dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        
        @if (Auth::user()->role == ($site_settings->admin_role?? config('company.roles.admin.role')))
        <li class="treeview {{ Str::startsWith(Route::currentRouteName(), 'admin')? 'active':'' }}">
            
          <a href="#">
            <i class="icon-user"></i>
            <span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class = "{{ Str::startsWith(Route::currentRouteName(), 'admin.users')? 'active':'' }}"><a href="{{ route('admin.users') }}">All Users</a></li>
            <li class = "{{ Str::startsWith(Route::currentRouteName(), 'admin.requests')? 'active':'' }}"><a href="{{ route('admin.requests') }}">Client Requests</a></li>         
            <li class = "{{ Str::startsWith(Route::currentRouteName(), 'admin.site.settings')? 'active':'' }}"><a href="{{ route('admin.site.settings') }}" class = "ajax-popup-link">Site Settings</a></li>   
          </ul>
        </li>
        @endif
        
        <li class="treeview {{ Str::startsWith(Route::currentRouteName(), 'trans')? 'active':'' }}">
            
          <a href="#">
            <i class="icon-wallet"></i>
            <span>My Transactions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class = "{{ Str::startsWith(Route::currentRouteName(), 'trans.deposit')? 'active':'' }}"><a href="{{ route('trans.deposit') }}">Deposit</a></li>
            <li class = "{{ Str::startsWith(Route::currentRouteName(), 'trans.withdraw')? 'active':'' }}"><a href="{{ route('trans.withdraw') }}">Withdraw</a></li>
            <li class = "{{ Str::startsWith(Route::currentRouteName(), 'trans.history')? 'active':'' }}"><a href="{{ route('trans.history') }}">History</a></li>
            
          </ul>
        </li>

          
        <li class = "{{ Str::startsWith(Route::currentRouteName(), 'invest')? 'active':'' }}">
          <a href="{{ route('invest.index') }}">
            <i class="fa fa-dollar"></i>
            <span>My Investments</span>
          </a>
        </li>
          
        <li class = "{{ Str::startsWith(Route::currentRouteName(), 'referral.index')? 'active':'' }}">
          <a href="{{ route('referral.index') }}">
            <i class="icon-link"></i> <span>My Downline</span>
          </a>
        </li>
          
          
        <li class = "{{ Str::startsWith(Route::currentRouteName(), 'account')? 'active':'' }}">
          <a href="{{ route('account.settings') }}">
            <i class="icon-settings"></i> <span>Account Settings</span>
          </a>
        </li>
          
        <li class = "{{ Str::startsWith(Route::currentRouteName(), 'profile')? 'active':'' }}">
          <a href="{{ route('profile') }}">
            <i class="icon-user"></i> <span>My Profile</span>
          </a>
        </li>
          
      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $page?? 'Default Page' }}
        
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="breadcrumb-item active">{{ $page?? 'Default Page' }}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
        @if (Session::has("status_info"))
            <div class = "notifier" style = "display:none"><span>{!! Session::get("status_info") !!}</span></div>
        @endif
        
        @if(Session::has('error'))
        <p class="alert alert-danger">{{ Session::get('error') }}</p>
        @endif
        
        @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
        @endif
        
		@yield('content')
		
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		</ul>
    </div>
	  &copy; 2019 <a href="#">Greenworld</a>. All Rights Reserved.
  </footer>

 
</div>
<!-- ./wrapper -->
  	
	 
	  
	<!-- jQuery 3 -->
	<script src="{{ asset('fxu') }}/js/jquery.js"></script>
	
	<!-- popper -->
	<script src="{{ asset('fxu') }}/js/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="{{ asset('fxu') }}/js/bootstrap.js"></script>
	
	<!-- Slimscroll -->
	<script src="{{ asset('fxu') }}/js/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="{{ asset('fxu') }}/js/fastclick.js"></script>
	
	
	<!-- This is data table -->
    <script src="{{ asset('fxu') }}/plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
	
	<!-- Crypto_Admin App -->
	<script src="{{ asset('fxu') }}/js/template.js"></script>
	
	
	<!-- Crypto_Admin for demo purposes -->
	<script src="{{ asset('fxu') }}/js/theme.js"></script>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
    </form>
    
    <script src="{{ asset('magnific') }}/jquery.magnific-popup.js"></script>
    

    <script src="{{ asset('utils') }}/clipboard.min.js"></script>
    
    <script src="{{ asset('notifier') }}/jquery.notifyBar.js"></script>
    <script src="{{ asset('notifier') }}/notify.js"></script>
    
    <script src="{{ asset('notifier') }}/styles/metro/notify-metro.js"></script>
    
    <script src="{{ asset('alertify') }}/js/alertify.min.js"></script>
    <script src="{{ asset('datatable') }}/jquery.dataTables.min.js"></script>
    <script src="{{ asset('datatable') }}/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('datatable') }}/dataTables.buttons.min.js"></script>
    <script src="{{ asset('datatable') }}/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('datatable') }}/jszip.min.js"></script>
    <script src="{{ asset('datatable') }}/pdfmake.min.js"></script>
    <script src="{{ asset('datatable') }}/vfs_fonts.js"></script>
    <script src="{{ asset('datatable') }}/buttons.html5.min.js"></script>
    <script src="{{ asset('datatable') }}/buttons.print.min.js"></script>
    <script src="{{ asset('datatable') }}/buttons.colVis.min.js "></script>  
    
    @stack('expiredsessjs')
    
    <script>
        alertify.set('notifier','delay', 10);
        alertify.set('notifier','position', 'top-center');
        
        $(function() {
            
            $('[data-toggle="tooltip"]').tooltip({
                trigger : 'hover'
            }); 
            
            $('[data-activate-message]').on('click', function() {
                $.notifyBar({
                    html: $(this).data('activate-message'),
                    cssClass: "warning",
                    position: "top",
                    waitingForClose: true,
                    closeOnClick: true,
                    close: true,
                  });
            }).trigger("click");
            
            
            
            var clipboard = new ClipboardJS('.btn-copy-link');
            
            /*clipboard.on("success", function(e) {
               
            });*/
            
             
            $(".logout-link").on("click", function() {
                $("#logout-form").trigger('submit'); 
                return false;
            });
            
            $(".ajax-popup-link").magnificPopup({
              type: 'ajax',
              closeOnBgClick: false,
              enableEscapeKey: false,
            });
            
            $(".btn-action-delete").on("click", function() {
             
                return window.confirm("Can't reversed this action once acted upon. Continue anyway?");
            
            });
            
            $("body").on("click", function(e) { 
                    
                if ($(e.target).hasClass("btn-mf-close")) {
                    $.magnificPopup.close();
                    alertify.error("Operation cancelled");
                    
                    return false;
                }
            }).on("submit", function(e) {
                if ($(e.target).hasClass("form-submit")) {
                    
                    var form = $(e.target);
                    var data = form.serialize();
                    var method = form.prop('method');
                    var url = form.prop('action');
                    var delayedSec = 200;
                    
                    
                    form.slideUp(delayedSec, function() {
                        $(this).parent().find("#loader").slideDown();
                    });
                    
                    
                    $.ajax({url: url, data: data, type: method, dataType: 'JSON', success: function(response) {
                        
                        
                        if ("success" in response) {
                            
                            form.parent().find("#loader").slideUp(delayedSec, function() {
                                
                                refreshData(form, response);
                            });
                        }
                        else if ("errors" in response) {
                            alertify.error(response.message);
                            displayErrors(form, response.errors);
                            form.parent().find("#loader").slideUp(delayedSec, function() {
                                form.slideDown();
                            });
                        }
                        else if ("error" in response) {
                            alertify.error(response.error);
                            form.parent().find("#loader").slideUp(delayedSec, function() {
                                form.slideDown();
                            });
                        }
                        
                    }, error: function(status, response) {
                        alertify.error("Error processing your request. Please try again!");
                        
                        form.parent().find("#loader").slideUp(delayedSec, function() {
                            form.slideDown();
                        });
                        
                        
                    }});
                    
                    return false;
                }
            });
            
            $('table').DataTable();
            
        
            $(".notifier").on("click", function() {
                  $.notifyBar({
                    html: $(this).html(),
                    cssClass: "warning",
                    position: "top",
                    waitingForClose: true,
                    closeOnClick: true,
                    close: true,
                  });
            });
        
            $(".notifier").trigger("click");
            
            $("[data-price-update]").on("change", function() {
                var target_id = $(this).find(':selected').data('target');
                
                var min_amount = $(this).find(':selected').data('min-amount');
                
                
                $(target_id).prop('placeholder', 'Min. Amount: ' + formatAmount(min_amount));
                
                $(target_id).prop('disabled', false);
            });
            
        });
        
        function updateFormToLarge(form) {
            form.parent().removeClass("col-md-4");
            form.parent().removeClass("offset-md-4");
            form.parent().addClass("col-md-8");
            form.parent().addClass("offset-md-2");
        }
        
        var timeoutID = null;
        
        function displayErrors(form, errors) {
            
            if (timeoutID != null) { //reset timer
                clearTimeout(timeoutID);
                form.find(".error").remove();
            }
            
            for (var error in errors) {
                var input = form.find("*[name='" + error + "']");
                var errorElem = $(document.createElement('span'));
                //var errorOutput = "";
                
                
                errorElem.html(errors[error][0]);
                errorElem.addClass('error');
                
                input.attr('title', errors[error][0]);
                errorElem.insertAfter(input);
            }
            
            timeoutID = setTimeout(function() {
                form.find(".error").remove();
            }, 15000);
            
        }
        
        function refreshData(form, response) {
            if ("reload" in response) {
                alertify.success(response.success);
                
                form.trigger("reset");
                
                setTimeout(function() {
                    if ("url" in response) {
                        window.location.href = response.url;
                    }
                    else {
                        window.location.reload();
                    }
                    
                    form.parent().html("<h4 class = 'text-orange text-center'>{{ config('company.name') }} refreshing data for a better experience...</h4>");
                }, 1000);
            }
            else {
                updateFormToLarge(form)
                form.parent().append(response.view);
                form.remove();
            }
        }
        
        function formatAmount(amount) {
            var placement = "{{ getCurrencyPlacement() }}";
            var currency = "{{ getCurrency() }}";
            
            if (placement == "left") {
                return currency + amount.toFixed(2);
            }

            return  amount.toFixed(2) + ' ' . currency;
        }
        
    </script>

    
    @include('layouts.livechat')
	
</body>
</html>
