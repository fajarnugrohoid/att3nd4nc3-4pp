<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Absensi</title>

	<link href="{{ asset('/adminlte/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/adminlte/dist/css/AdminLTE.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<!-- font awesome -->
    <link href="{{ asset('/adminlte/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

	<link href="{{ asset('/adminlte/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet">
	<!-- iCheck -->
	<link href="{{ asset('/adminlte/plugins/iCheck/flat/blue.css') }}" rel="stylesheet">
	<!-- Morris chart -->
	<link href="{{ asset('/adminlte/plugins/morris/morris.css') }}" rel="stylesheet">
	<!-- jvectormap -->
	<link href="{{ asset('/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
	<!-- Date Picker -->
	<link href="{{ asset('/adminlte/plugins/datepicker/datepicker3.css') }}" rel="stylesheet">
	<!-- Daterange picker -->
	<link href="{{ asset('/adminlte/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
	<!-- bootstrap wysihtml5 - text editor -->
	<link href="{{ asset('/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet">
	
	<link href='{{ asset('/fullcalendar/fullcalendar.css') }}' rel='stylesheet' />
	<link href='{{ asset('/fullcalendar/fullcalendar.print.css') }}' rel='stylesheet' media='print' />
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
  
  <!-- jQuery 2.2.3 -->
  <script src="{{ asset('/adminlte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('/adminlte/plugins/jQuery/jquery-ui.min.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.6 -->
  <script src="{{ asset('/adminlte/bootstrap/js/bootstrap.min.js') }}"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('/adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('/adminlte/dist/img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('/adminlte/dist/img/user4-128x128.jpg') }}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('/adminlte/dist/img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('/adminlte/dist/img/user4-128x128.jpg') }}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('/adminlte/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('/adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('/adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Announcement</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ url('home') }}"><i class="fa fa-circle-o"></i> Announcement</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Attendance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('attendance') }}"><i class="fa fa-circle-o"></i> Attendance</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Paid Leave</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Job Detail</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('employee') }}"><i class="fa fa-circle-o"></i> Employees</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Employees</a></li>
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Salary</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Employees</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Attendance</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Job Detail</a></li>
          </ul>
        </li>
        
      
        {{-- <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a> --}}</li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     	{{-- <div id="datenow">
        {!! Carbon\Carbon::today()->toDateString() !!}
      </div> --}}
      <!-- /.row -->
      <!-- Main row -->
     		@yield('content')
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- Morris.js charts -->
<script src="{{ asset('/adminlte/plugins/raphael/raphael-min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('/adminlte/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('/adminlte/plugins/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('/adminlte/plugins/jQuery/moment.min.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('/adminlte/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('/adminlte/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/adminlte/dist/js/app.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/adminlte/dist/js/demo.js') }}"></script>

<script src="{{ asset('/fullcalendar/lib/moment.min.js') }}"></script>
<!-- <script src='{{ asset('/fullcalendar/lib/jquery.min.js') }}'></script> -->
<script src="{{ asset('/fullcalendar/fullcalendar.min.js') }}"></script>

<script>

	$(document).ready(function() {
		
		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
		});

		

		var datenow = '<?php echo date("Y-m-d"); ?>';
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: datenow,
			navLinks: true, // can click day/week names to navigate views
			selectable: true,
			selectHelper: true,
			select: function(start, end, allDay, event) {
				console.log("start:", start);
				console.log("end:", end);
				console.log("allDay:", allDay);
				console.log("event:", event.type);
				if (event.type=='month'){
					if (start.format()==datenow){
						$.ajax({
				            url: "attendance/attend",
				            type: "post",
				            data: {
				                start: start.format(),
				                end:end.format()
				            },
				            success: function(resp) {
				                console.log("resp:", resp);
				        	
								$("#calendar").fullCalendar('renderEvent',
										{
											title: 'Attend',
											start: start,
											end: end,
											allDay: true
										},
										true
									);
								
								$("#calendar").fullCalendar('unselect');

								
				            },
				            error: function(start, end) {
				                console.log("Request", JSON.stringify(start));
				            }
				        });
					}
					
				}else{
					var title = prompt('Event Title:');
					var eventData = {title: title,
										start: start,
										end: end,
										allDay: false};
					if (title) {
						$.ajax({
				            url: "attendance/addAgendaDay",
				            type: "post",
				            data: {
				            	title: title,
				                start: start.format(),
				                end:end.format()
				            },
				            success: function(resp) {
				                console.log("resp:", resp);
				        		$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
								$("#calendar").fullCalendar('unselect');
				            },
				            error: function(start, end) {
				                console.log("Request", JSON.stringify(start));
				            }
				        });
					}
					
					$('#calendar').fullCalendar('unselect');


				}

				/*console.log("selected from: " + start.format() + ", to: " + end.format());
		        $("#calendar").fullCalendar("unselect");
		        $.ajax({
		            url: "home/attend",
		            type: "post",
		            data: {
		                start: start.format(),
		                end:end.format()
		            },
		            success: function(resp) {
		                console.log("resp:", resp);
		        	
						$("#calendar").fullCalendar('renderEvent',
								{
									title: 'Attend',
									start: start,
									end: end,
									allDay: true
								},
								true
							);
						
						$("#calendar").fullCalendar('unselect');
						
		            },
		            error: function(start, end) {
		                console.log("Request", JSON.stringify(start));
		            }
		        }); */
		        



				/*var title = prompt('Event Title:');
				var eventData;
				if (title) {
					
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
				}
				$('#calendar').fullCalendar('unselect'); */
				
			},
			eventRender: function(event, element, view) { 
				console.log("event:",event);
				console.log("element:",element);
				console.log("view:",view);
				
				if (view.type=='agendaDay'){
			       element.find(".fc-bg").css("pointer-events","none");
			       element.append("<div style='position:absolute;bottom:0px;right:0px' ><button type='button' id='btnDeleteEvent' class='btn btn-block btn-primary btn-flat'>X</button></div>" );
			       element.find("#btnDeleteEvent").click(function(){
			            $('#calendar').fullCalendar('removeEvents',event._id);
			       });
		   		}
			
			},editable: true,
			eventLimit: true, // allow "more" link when too many events
			allDaySlot: false,
			events: [
				{
					title: 'All Day Event',
					start: '2016-09-01',
					end: '2016-09-01',
				},
				{
					title: 'Long Event',
					start: '2016-09-07',
					end: '2016-09-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-09-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-09-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2016-09-11',
					end: '2016-09-13'
				},
				{
					title: 'Meeting',
					start: '2016-09-12T10:30:00',
					end: '2016-09-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2016-09-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2016-09-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2016-09-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2016-09-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2016-09-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2016-09-28'
				}
			]
		});

		

		
	});

	function GetCustomValue()
	{
	    return $('#valueSelect').val();
	}

</script>

</body>
</html>
