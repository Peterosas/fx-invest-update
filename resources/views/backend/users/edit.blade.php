<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('fxu') }}/images/favicon.ico">

    <title>Dashboard :: {{ config('company.name') }}</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{ asset('fxu') }}/css/bootstrap.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="{{ asset('fxu') }}/css/style.css">
	
	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="{{ asset('fxu') }}/css/skins/_all-skins.css">
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <style>
        .font-size-20 {
            font-size: 20px;
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
		  
          <!-- Messages -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-email"></i>
            </a>
            
            <ul class="dropdown-menu scale-up">
              <li class="header">No new message</li>
              <!--
              <li class="header">You have 5 messages</li>
              <li>
               
                <ul class="menu inner-content-div">
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('fxu') }}/images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Lorem Ipsum
                          <small><i class="fa fa-clock-o"></i> 15 mins</small>
                         </h4>
                         <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                      </div>
                    </a>
                  </li>
                  
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('fxu') }}/images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Nullam tempor
                          <small><i class="fa fa-clock-o"></i> 4 hours</small>
                         </h4>
                         <span>Curabitur facilisis erat quis metus congue viverra.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('fxu') }}/images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Proin venenatis
                          <small><i class="fa fa-clock-o"></i> Today</small>
                         </h4>
                         <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('fxu') }}/images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Praesent suscipit
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                         </h4>
                         <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('fxu') }}/images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Donec tempor
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                         </h4>
                         <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See all e-Mails</a></li>
              -->
            </ul>
            
          </li>
          <!-- Notifications -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">No new notification</li>
            <!--
            <li class="header">You have 7 notifications</li>
              <li>
                
                <ul class="menu inner-content-div">
                  <li>
                    
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Curabitur id eros quis nunc suscipit blandit.
                    </a>
                    
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            
            -->
            </ul>
          </li>
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
			  <!-- logo for regular state and mobile devices -->
                <span><b>{{ config('company.name') }}</b></span>
			</a>
		</div>
        <div class="image">
          <img src="{{ asset('fxu') }}/images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <p>Hi {{ Auth::user()->displayName() }}</p>
			<a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
            <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ion ion-android-mail"></i></a>
            <a href="{{ route('logout') }}" class="link logout-link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
        </div>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="nav-devider"></li>
        <li class="header nav-small-cap">{{ config('company.name') }}</li>
        <li class="active">
          <a href="{{ route('dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
      
        <li class="treeview">
          <a href="#">
            <i class="icon-wallet"></i>
            <span>My Transactions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('trans.deposit') }}">Deposit</a></li>
            <li><a href="{{ route('trans.withdraw') }}">Withdraw</a></li>
            <li><a href="{{ route('trans.deposit') }}">History</a></li>
            
          </ul>
        </li>
          
        <li class="treeview">
          <a href="#">
            <i class="icon-link"></i>
            <span>My Referral</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/members/members.html">Member Tree</a></li>
            <li><a href="pages/members/members-list.html">Member Table</a></li>		  
          </ul>
        </li>
          
        <li>
          <a href="{{ route('profile') }}">
            <i class="icon-settings"></i> <span>Account Settings</span>
          </a>
        </li>
          
        <li>
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
        Dashboard
        
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
		<div class="row">

            <div class="col-md-4">
				<div class="box box-body pull-up">
				  <div class="media align-items-center p-0">
					<div class="text-center">
					  <a href="#"><i class="fa fa-money fa-2x" title="Balance"></i></a>
					</div>
					<div>
					  <h2>BALANCE</h2>
					</div>
				  </div>
				  <div class="flexbox align-items-center mt-30">
					<div>
					  <p class="no-margin"><a href = "{{ route('trans.withdraw') }}" class = "btn btn-warning btn-sm">Withdraw</a> </p>
					</div>
					<div class="text-right">
					  <p class="no-margin"><span class="text-black font-size-20">₦0.00</span></p>
					</div>
				  </div>
				</div>
            </div>
              <div class="col-md-4">
				<div class="box box-body pull-up">
				  <div class="media align-items-center p-0">
					<div class="text-center">
					  <a href="#"><i class="fa fa-money fa-2x" title="Balance"></i></a>
					</div>
					<div>
					  <h2>Total Invested</h2>
					</div>
				  </div>
				  <div class="flexbox align-items-center mt-30">
					<div>
					  <p class="no-margin"><a href = "{{ route('trans.deposit') }}" class = "btn btn-warning btn-sm">Deposit</a> </p>
					</div>
					<div class="text-right">
					  <p class="no-margin"><span class="text-black font-size-20">₦0.00</span></p>
					</div>
				  </div>
				</div>
            </div>
            
              <div class="col-md-4">
				<div class="box box-body pull-up">
				  <div class="media align-items-center p-0">
					<div class="text-center">
					  <a href="#"><i class="fa fa-history fa-2x" title="Balance"></i></a>
					</div>
					<div>
					  <h2>Total Transactions</h2>
					</div>
				  </div>
				  <div class="flexbox align-items-center mt-30">
					<div>
					  <p class="no-margin"><a href = "{{ route('trans.history') }}" class = "btn btn-warning btn-sm">See all >></a> </p>
					</div>
					<div class="text-right">
					  <p class="no-margin"><span class="text-black font-size-20">0</span></p>
					</div>
				  </div>
				</div>
            </div>
        </div>
		 
        <div class = "row">
            <div class="col-12">
			<div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Latest Transactions</h3>

				  <div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
							title="Collapse">
					  <i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
					  <i class="fa fa-times"></i></button>
				  </div>
				</div>
				<div class="box-body">
					<div class="table-responsive">
						<table class="table table-bordered no-margin">
						  <thead>					
							<tr class="bg-pale-dark">
							  <th>Transaction Hash</th>
							  <th>BTC</th>
							  <th>Time</th>
							  <th>Miner Preference</th>
							  <th>Status</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  9d2c7b06bfa0
								</a>
								...
							  </td>
							  <td>1.2126281 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:01Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>medium</td>
							  <td><span class="label label-success">Confirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  5de67415bfc6
								</a>
								...
							  </td>
							  <td>0.20522881 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:01Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-warning">Unconfirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  733de15b3cec
								</a>
								...
							  </td>
							  <td>2.02622033 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:01Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-success">Confirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  6793bcfa4f7f
								</a>
								...
							  </td>
							  <td>2.43220578 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:00Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-danger">Canceled</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  2c66087936b5
								</a>
								...
							  </td>
							  <td>14.01099978 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:00Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-danger">Canceled</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  51935e53c294
								</a>
								...
							  </td>
							  <td>0.3024534 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:00Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-warning">Unconfirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  a3976b73cf5e
								</a>
								...
							  </td>
							  <td>0.20518486 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:37:59Z" title="2018-02-01 13:37 GMT">2 minutes ago</time>
							  </td>
							  <td>medium</td>
							  <td><span class="label label-success">Confirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  g011cb48c078
								</a>
								...
							  </td>
							  <td>2.08039395 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:37:59Z" title="2018-02-01 13:37 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-success">Confirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  c6b59368635c
								</a>
								...
							  </td>
							  <td>42.99698306 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:37:58Z" title="2018-02-01 13:37 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-success">Confirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  a261fc1d717d
								</a>
								...
							  </td>
							  <td>1.0281818 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:37:58Z" title="2018-02-01 13:37 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-danger">Canceled</span></td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

		  </div> 
		  
        </div>
		
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
    
    <script>
        $(function() {
            $(".logout-link").on("click", function() {
                $("#logout-form").trigger('submit'); 
                return false;
            });
        });
    </script>
	
</body>
</html>
