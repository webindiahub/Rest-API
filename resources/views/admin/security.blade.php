<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Photoronic</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for buttons extension demos" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ url('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ url('assets/global/css/components-md.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ url('assets/global/css/plugins-md.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ url('assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ url('assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.html">
                            <img src="{{ url('assets/layouts/layout/img/logo.png') }}" alt="logo" class="logo-default" /> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-default"> 7 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">12 pending</span> notifications</h3>
                                        <a href="page_user_profile_1.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">10 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">14 hrs</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">2 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Database overloaded 68%. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">4 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">5 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">9 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-envelope-open"></i>
                                    <span class="badge badge-default"> 4 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>You have
                                            <span class="bold">7 New</span> Messages</h3>
                                        <a href="app_inbox.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="../../../public/assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Lisa Wong </span>
                                                        <span class="time">Just Now </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="../../../public/assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Richard Doe </span>
                                                        <span class="time">16 mins </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="../../../public/assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Bob Nilson </span>
                                                        <span class="time">2 hrs </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="../../../public/assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Lisa Wong </span>
                                                        <span class="time">40 mins </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="../../../public/assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Richard Doe </span>
                                                        <span class="time">46 mins </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END INBOX DROPDOWN -->
                            
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="../../../public/assets/layouts/layout/img/avatar3_small.jpg" />
                                    <span class="username username-hide-on-mobile"> Nick </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="app_calendar.html">
                                            <i class="icon-calendar"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href="app_inbox.html">
                                            <i class="icon-envelope-open"></i> My Inbox
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="app_todo.html">
                                            <i class="icon-rocket"></i> My Tasks
                                            <span class="badge badge-success"> 7 </span>
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="page_user_lock_1.html">
                                            <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href="page_user_login_1.html">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-quick-sidebar-toggler">
                                <a href="javascript:void(0)" class="dropdown-toggle">
                                    <i class="icon-logout"></i>
                                </a>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                            
                            <li class="nav-item start ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item start ">
                                        <a href="index.html" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Dashboard 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item start ">
                                        <a href="dashboard_2.html" class="nav-link ">
                                            <i class="icon-bulb"></i>
                                            <span class="title">Dashboard 2</span>
                                            <span class="badge badge-success">1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item start ">
                                        <a href="dashboard_3.html" class="nav-link ">
                                            <i class="icon-graph"></i>
                                            <span class="title">Dashboard 3</span>
                                            <span class="badge badge-danger">5</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                           
					
                        <!-- 
                            <li class="nav-item  active open">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-briefcase"></i>
                                    <span class="title">Tables</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="table_static_basic.html" class="nav-link ">
                                            <span class="title">Basic Tables</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="table_static_responsive.html" class="nav-link ">
                                            <span class="title">Responsive Tables</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="table_bootstrap.html" class="nav-link ">
                                            <span class="title">Bootstrap Tables</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  active open">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                            <span class="title">Datatables</span>
                                            <span class="selected"></span>
                                            <span class="arrow open"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="nav-item ">
                                                <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                                            </li>
                                            <li class="nav-item active open">
                                                <a href="table_datatables_buttons.html" class="nav-link "> Buttons Extension </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_colreorder.html" class="nav-link "> Colreorder Extension </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_rowreorder.html" class="nav-link "> Rowreorder Extension </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_scroller.html" class="nav-link "> Scroller Extension </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_fixedheader.html" class="nav-link "> FixedHeader Extension </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_responsive.html" class="nav-link "> Responsive Extension </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_editable.html" class="nav-link "> Editable Datatables </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_ajax.html" class="nav-link "> Ajax Datatables </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                        
                     
                          
             
                            
                           
             
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-folder"></i>
                                    <span class="title">Sucurity Module</span>
                                    <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                             Dashboard
                                            <span class="arrow"></span>
                                        </a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                            Sucurity Data
                                            <span class="arrow"></span>
                                        </a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                          Report
                                            <span class="arrow"></span>
                                        </a>
                                        
                                    </li>
                                </ul>
                            </li>
							<li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-folder"></i>
                                    <span class="title">GRN Module</span>
                                    <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                             Dashboard
                                            <span class="arrow"></span>
                                        </a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                           GRN Data
                                            <span class="arrow"></span>
                                        </a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                          Report
                                            <span class="arrow"></span>
                                        </a>
                                        
                                    </li>
                                </ul>
                            </li>
							<li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-folder"></i>
                                    <span class="title">Unloading  Module</span>
                                    <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                             Dashboard
                                            <span class="arrow"></span>
                                        </a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                            Unloading Data
                                            <span class="arrow"></span>
                                        </a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                          Report
                                            <span class="arrow"></span>
                                        </a>
                                        
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Begin: life time stats -->
                                <div class="portlet light portlet-fit portlet-datatable bordered">
                                    <div class="portlet-title">
                                       <!--  <div class="caption">
                                            <i class="icon-settings font-green"></i>
                                            <span class="caption-subject font-green sbold uppercase">Trigger Tools From Dropdown Menu</span>
                                        </div> -->
                                        <div class="actions">
                                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                <label class="btn btn-transparent grey-salsa btn-outline btn-circle btn-sm active">
                                                    <input type="radio" name="options" class="toggle" id="option1">Add</label>
                                               
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn red btn-outline btn-circle" href="javascript:;" data-toggle="dropdown">
                                                    <i class="fa fa-share"></i>
                                                    <span class="hidden-xs">  Tools </span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right" id="sample_3_tools">
                                                    <li>
                                                        <a href="javascript:;" data-action="0" class="tool-action">
                                                            <i class="icon-printer"></i> Print</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="1" class="tool-action">
                                                            <i class="icon-check"></i> Copy</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="2" class="tool-action">
                                                            <i class="icon-doc"></i> PDF</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="3" class="tool-action">
                                                            <i class="icon-paper-clip"></i> Excel</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="4" class="tool-action">
                                                            <i class="icon-cloud-upload"></i> CSV</a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="5" class="tool-action">
                                                            <i class="icon-refresh"></i> Reload</a>
                                                    </li>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-container">
                                            <table class="table table-striped table-bordered table-hover" id="sample_3">
                                                <thead>
                                                    <tr class="poke">
                                                        <th> Rendering engine </th>
                                                        <th> Browser </th>
                                                        <th> Platform(s) </th>
                                                        <th> Engine version </th>
                                                        <th> CSS grade </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td> Trident </td>
                                                        <td> Internet Explorer 4.0 </td>
                                                        <td> Win 95+ </td>
                                                        <td> 4 </td>
                                                        <td> X </td>
                                                    </tr>
                                                    
                                                   
                                                    
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: life time stats -->
                            </div>
                        </div>
						
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
          
            </div>
            <!-- END CONTAINER -->
           
        </div>


        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ url('/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ url('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ url('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ url('assets/pages/scripts/table-datatables-buttons.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{ url('assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>