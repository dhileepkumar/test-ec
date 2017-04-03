<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="Neon Admin Panel" />
      <meta name="author" content="" />
      <link rel="icon" href="assets/images/favicon.ico">
      <title></title>
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="{{asset('public/admin/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/admin/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}">
      <!-- END GLOBAL MANDATORY STYLES -->
      <!-- BEGIN PAGE LEVEL PLUGINS -->
      <link rel="stylesheet" href="{{asset('public/admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/admin/assets/global/plugins/morris/morris.css')}}">
      <link rel="stylesheet" href="{{asset('public/admin/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/admin/assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}">
      <!-- END PAGE LEVEL PLUGINS -->
      <!-- BEGIN THEME GLOBAL STYLES -->
      <link href="{{asset('public/admin/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
      <link href="{{asset('public/admin/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- END THEME GLOBAL STYLES -->
      <!-- BEGIN THEME LAYOUT STYLES -->
      <link href="{{asset('public/admin/assets/layouts/layout/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('public/admin/assets/layouts/layout/css/themes/darkblue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
      <link href="{{asset('public/admin/assets/layouts/layout/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- END THEME LAYOUT STYLES -->
	  <!-- BEGIN CORE PLUGINS -->
      <script src="{{asset('public/admin/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
      <!-- END CORE PLUGINS -->
   </head>
   <link rel="shortcut icon" href="favicon.ico" />
   </head>
   <!-- END HEAD -->
   <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
      <div class="page-wrapper">
         <!-- BEGIN HEADER -->
         <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
               <!-- BEGIN LOGO -->
               <div class="page-logo">
                  <a href="index.html">
                  <img src="{{asset('public/admin/assets/layouts/layout/img/logo.png')}}" alt="logo" class="logo-default" /> </a>
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
                    
                     <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                     <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-envelope-open"></i>
                        <span class="badge badge-default"> 4 </span>
                        </a>
                        <ul class="dropdown-menu">
                           <li class="external">
                              <h3>You have
                                 <span class="bold">7 New</span> Messages
                              </h3>
                              <a href="app_inbox.html">view all</a>
                           </li>
                           <li>
                              <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                 <li>
                                    <a href="#">
                                    <span class="photo">
                                    <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
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
                                    <img src="../assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
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
                                    <img src="../assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>
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
                                    <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
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
                                    <img src="../assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
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
                        <img alt="" class="img-circle" src="../assets/layouts/layout/img/avatar3_small.jpg" />
                        <span class="username username-hide-on-mobile">{{Auth::user()->name}} </span>
                        <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                           <li>
                              <a href="{{url('admin/profile	')}}">
                              <i class="icon-user"></i> My Profile </a>
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
                        <a href="javascript:;" class="dropdown-toggle">
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
               <div class="page-sidebar navbar-collapse collapse">
                  <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                     <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                           <span></span>
                        </div>
                     </li>
                   
                    
					 
					  <li class="nav-item  @if(Route::currentRouteName()=='dashboard.index') active open @endif">
                       	<a href="{{url('superadmin/dashboard')}}">
							<i class="icon-home"></i>
							<span class="title">Dashboard </span>
							
						</a>
                     </li>
                    
					 <li class="nav-item  @if(Route::currentRouteName()=='profile.index') active open @endif">
						<a href="{{url('superadmin/profile')}}">
							<i class="icon-diamond"></i>
							<span class="title">Profile </span>
							
						</a>
					 </li>
					
					
				
				
				
                    
                   
				 </ul>
                  <!-- END SIDEBAR MENU -->
                  <!-- END SIDEBAR MENU -->
               </div>
               <!-- END SIDEBAR -->
            </div>
            @yield('content') 
         </div>
         <!-- END CONTAINER -->
         <!-- BEGIN FOOTER -->
         <div class="page-footer">
            <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
               <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
               <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
            </div>
            <div class="scroll-to-top">
               <i class="icon-arrow-up"></i>
            </div>
         </div>
         <!-- END FOOTER -->
      </div>
      <!-- BEGIN QUICK NAV -->
      <nav class="quick-nav">
         <a class="quick-nav-trigger" href="#0">
         <span aria-hidden="true"></span>
         </a>
         <ul>
            <li>
               <a href="{{url('superadmin/dashboard')}}" target="_blank" class="active">
               <span>Dashboard</span>
               <i class="icon-basket"></i>
               </a>
            </li>
            <li>
               <a href="{{url('superadmin/profile')}}" target="_blank">
               <span>Profile</span>
               <i class="icon-users"></i>
               </a>
            </li>
            <li>
				<a href="{{url('superadmin/experiance')}}" target="_blank">
				   <span>Experiance</span>
				   <i class="icon-user"></i>
				</a>
            </li>
            <li>
              <a href="{{url('superadmin/contact/list')}}" target="_blank">
               <span>Contact List</span>
               <i class="icon-graph"></i>
               </a>
            </li>
         </ul>
         <span aria-hidden="true" class="quick-nav-bg"></span>
      </nav>
      <div class="quick-nav-overlay"></div>
      <!-- END QUICK NAV -->
      <!--[if lt IE 9]>
      <script src="../assets/global/plugins/respond.min.js"></script>
      <script src="../assets/global/plugins/excanvas.min.js"></script> 
      <script src="../assets/global/plugins/ie8.fix.min.js"></script> 
      <![endif]-->
      
      <!-- BEGIN PAGE LEVEL PLUGINS -->
      <script src="{{asset('public/admin/assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/amcharts/amcharts/amcharts.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/amcharts/amcharts/serial.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/amcharts/amcharts/pie.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/amcharts/amcharts/radar.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/amcharts/amcharts/themes/light.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/amcharts/amcharts/themes/patterns.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/amcharts/amcharts/themes/chalk.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/amcharts/ammap/ammap.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/amcharts/amstockcharts/amstock.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/horizontal-timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
      <!-- END PAGE LEVEL PLUGINS -->
      <!-- BEGIN THEME GLOBAL SCRIPTS -->
      <script src="{{asset('public/admin/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
      <!-- END THEME GLOBAL SCRIPTS -->
      <!-- BEGIN PAGE LEVEL SCRIPTS -->
      <script src="{{asset('public/admin/assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
      <!-- END PAGE LEVEL SCRIPTS -->
      <!-- BEGIN THEME LAYOUT SCRIPTS -->
      <script src="{{asset('public/admin/assets/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
	  
      <!-- END THEME LAYOUT SCRIPTS -->
   </body>
</html>