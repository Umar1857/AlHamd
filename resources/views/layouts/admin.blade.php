<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/css/admin/bootstrap.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/css/admin/bootstrap-datepicker.min.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/css/admin/bootstrap3-wysihtml5.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/admin/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/css/admin/ionicons.min.css">
    <!-- bootstrap Data Tables -->
    <link rel="stylesheet" href="/css/admin/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/admin/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/css/admin/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/css/admin/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/css/admin/jquery-jvectormap.css">
{{--Custom Admin Panel Stylesheet--}}
<!-- Daterange picker -->
    <link rel="stylesheet" href="/css/admin/daterangepicker.css">
    <link rel="stylesheet" href="/css/admin/custom.css">
    {{--<script  src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    {{--Tiny MCE Editor--}}
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({
            selector:'textarea#PostBody',
            plugins: "lists link wordcount textcolor searchreplace",
        });</script>

@yield('styles')

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="/admin/dashboard" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>AL</b>HAMD</span>
            <!-- logo for regular state and mobile devices -->
            {{--<span class="logo-lg"><b>Admin</b>LTE</span>--}}
            {{--<span class="logo-lg"><img src="{{URL::to('images/logo.png')}}" width="200px"></span>--}}
            <span class="logo-lg logoText"><b>ALHAMD MOVERS</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
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
                                                <img src="/images/admin/user2-160x160.jpg" class="img-circle" alt="User Image">
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
                                                <img src="/images/admin/user3-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Sheetz Design Team
                                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="/images/admin/user4-128x128.jpg" class="img-circle" alt="User Image">
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
                                                <img src="/images/admin/user3-128x128.jpg" class="img-circle" alt="User Image">
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
                                                <img src="/images/admin/user4-128x128.jpg" class="img-circle" alt="User Image">
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
                                @if(Auth::check() && count(Auth::user()->unreadNotifications))
                                    <span class="label label-warning">
                                        {{count(Auth::user()->unreadNotifications)}}
                                    </span>
                                @endif
                        </a>
                        <ul class="dropdown-menu">
                                @if(Auth::check() && count(Auth::user()->unreadNotifications))
                                    <li class="header">You have
                                        {{count(Auth::user()->unreadNotifications)}}
                                        notifications
                                    </li>
                                @endif

                                @if(Auth::check() && count(Auth::user()->unreadNotifications) == 0)
                                    <li class="header">You have no new notification.</li>
                                @endif
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    @if(Auth::check() && count(Auth::user()->unreadNotifications))
                                        @foreach(Auth::user()->unreadNotifications as $key => $notification)
                                            <li>
                                                <a class="notification_links clearfix" notif-id="{{$notification->id}}"
                                                    @if(snake_case(class_basename($notification->type )) == 'contact_query')
                                                        href="/admin/contact"
                                                    @elseif(snake_case(class_basename($notification->type )) == 'quote_query')
                                                        href="/admin/quote"
                                                    @else
                                                        href="/admin/booking"
                                                    @endif>
                                                    <div class="notification_image">
                                                        @if(snake_case(class_basename($notification->type )) == 'contact_query')
                                                            {{--<i class="fa fa-users text-aqua fa-2x"></i>--}}
                                                            <img src="{{URL::to('/images/admin/envelope.png')}}">
                                                        @elseif(snake_case(class_basename($notification->type )) == 'quote_query')
                                                            {{--<i class="fa fa-users text-aqua fa-2x"></i>--}}
                                                            <img src="{{URL::to('/images/admin/quotation.png')}}">
                                                        @else
                                                            <i class="fa fa-users text-aqua fa-2x"></i>
                                                        @endif
                                                    </div>
                                                    <div class="notification_text">
                                                        <div class="notification_msg">
                                                            {{str_limit($notification -> data['message'], 30)}}
                                                        </div>
                                                        <div class=" float-left notification_date">
                                                            {{$notification->created_at->format('d-m-Y h:i')}}
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif

                                </ul>
                            </li>
                            <li class="footer"><a href="{{route('notification')}}">View all</a></li>
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
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
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
                                                <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
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
                                                <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
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
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
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
                            {{--<img src="/images/admin/user2-160x160.jpg" class="user-image" alt="User Image">--}}
                            <span class="hidden-xs">
                                @if(Auth::guest())
                                    Alexander Pierce
                                @else
                                    {{ ucwords(Auth::user()->name) }}
                                @endif
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                {{--<img src="/images/admin/user2-160x160.jpg" class="img-circle" alt="User Image">--}}

                                <p>
                                    @if(Auth::guest())
                                        Alexander Pierce
                                    @else
                                        {{ ucwords(Auth::user()->name) }} - Web Developer
                                    @endif

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
                                    {{--<a href="#" class="btn btn-default btn-flat">Sign out</a>--}}

                                    <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    {{--<li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>--}}
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
                    <img src="/images/admin/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>
                        @if(Auth::guest())
                            Alexander Pierce
                        @else
                            {{ ucwords(Auth::user()->name) }}
                        @endif
                    </p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="{{route('dashboard')}}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/profile/create">
                        <i class="fa fa-user"></i> <span>Profile</span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Admins</span>
                        <span class="pull-right-container">
                          <span class="label label-primary pull-right">4</span>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/administrators/create"><i class="fa fa-circle-o"></i>Create New Admin</a></li>
                        <li><a href="/admin/administrators"><i class="fa fa-circle-o"></i>View Admins</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>Customers</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/customers/create"><i class="fa fa-circle-o"></i>Create New Customer</a></li>
                        <li><a href="/admin/customers"><i class="fa fa-circle-o"></i>View Customers</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('quotes')}}">
                        <i class="fa fa-question"></i> <span>Quotes</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('bookings')}}">
                        <i class="fa fa-book"></i> <span>Bookings</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('contacts')}}">
                        <i class="fa fa-envelope-square"></i> <span>Contact Mails</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>Projects</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/project/create"><i class="fa fa-circle-o"></i>Create New Project</a></li>
                        <li><a href="/admin/project"><i class="fa fa-circle-o"></i>View Projects</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-file"></i>
                        <span>Blog Posts</span>
                        <span class="pull-right-container">
                          <span class="label label-primary pull-right">4</span>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/post/create"><i class="fa fa-circle-o"></i>Create New Post</a></li>
                        <li><a href="/admin/post/"><i class="fa fa-circle-o"></i>View Posts</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-newspaper-o"></i>
                        <span>Services</span>
                        <span class="pull-right-container">
                          <span class="label label-primary pull-right">4</span>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/service/create"><i class="fa fa-circle-o"></i>Create New Service</a></li>
                        <li><a href="/admin/service/"><i class="fa fa-circle-o"></i>View Service</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-newspaper-o"></i>
                        <span>Service Items</span>
                        <span class="pull-right-container">
                          <span class="label label-primary pull-right">4</span>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/item/create"><i class="fa fa-circle-o"></i>Create New Item</a></li>
                        <li><a href="/admin/item/"><i class="fa fa-circle-o"></i>View Items</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('notification')}}">
                        <i class="fa fa-newspaper-o"></i><span>Notifications</span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-file-image-o"></i>
                        <span>Image Gallery</span>
                        <span class="pull-right-container">
                          <span class="label label-primary pull-right">4</span>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i>Create New Gallery</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>View Galleries</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-question"></i>
                        <span>FAQs</span>
                        <span class="pull-right-container">
                          <span class="label label-primary pull-right">4</span>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i>Create New FAQ</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>View FAQs</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        {{--Content Section Starts--}}
        @yield('content')
        {{--Content Section Ends--}}
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2018-2019 ALHAMD MOVERS.</strong> All rights Reserved .
    </footer>
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/js/admin/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/js/admin/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/js/admin/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/js/admin/raphael.min.js"></script>
<script src="/js/admin/morris.min.js"></script>
<!-- Sparkline -->
<script src="/js/admin/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/js/admin/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/js/admin/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/js/admin/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/js/admin/moment.min.js"></script>
<script src="/js/admin/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/js/admin/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/js/admin/bootstrap3-wysihtml5.all.min.js"></script>
<!-- AdminLTE Data tables -->
<script src="/js/admin/jquery.dataTables.min.js"></script>
<script src="/js/admin/dataTables.bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="/js/admin/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/js/admin/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/js/admin/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/js/admin/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/js/admin/demo.js"></script>
<script src="/js/admin/custom.js"></script>

<script>
    $(document).ready(function() {
        $('#posts').DataTable();
        $('#projects').DataTable();
        $('#services').DataTable();
        $('#contacts').DataTable();
        $('#quotes').DataTable();
        $('#notifications').DataTable();
        $('#booking').DataTable();
    });
</script>

@yield('scripts')

</body>
</html>