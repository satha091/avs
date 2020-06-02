<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>ஆறு நாட்டு வேளாளர் சங்கம் - திருச்சி மாநகர்</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

       <!-- App favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- Plugins css-->
         <link href='plugins/jquery-ui/jquery-ui.min.css' rel='stylesheet' type='text/css'>
        <script src='plugins/jquery-ui/jquery-ui.min.js' type='text/javascript'></script>
        <link href="plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link rel="stylesheet" href="plugins/switchery/switchery.min.css">
        <link href="plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap.min.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!-- Summernote css -->
        <link href="plugins/summernote/summernote-bs4.css" rel="stylesheet" />

        <!-- App css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/icons.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <script src="js/modernizr.min.js"></script>

        <!--tamil fonts js-->
    <script language=JavaScript src="js/common.js"></script>
    <!--<script language=JavaScript src="js/tamil.js"></script>-->
     <script language=JavaScript src="js/jquery-2.1.1.min.js"></script>


    <!--<script>-->
    <!-- $(document).ready(function(){-->
    <!--                    $('input,textarea').on('keydown',function(event){-->
    <!--                            if(event.which==121){-->
    <!--                                    $(this).toggleClass('tamil');-->
    <!--                                    return false;-->
    <!--                            }-->
    <!--                            if($(this).hasClass('tamil')){-->
    <!--                                    toggleKBMode(event);-->
    <!--                            }else{-->
    <!--                                    return true;-->
    <!--                            }-->
    <!--                    });-->
    <!--                    $('input,textarea').on('keypress',function(event){-->
    <!--                            if($(this).hasClass('tamil')){-->
    <!--                                    convertThis(event);-->
    <!--                            }-->
    <!--                    });-->
    <!--});-->
    <!--</script>-->

    </head>

    <body>

<header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo logodiv">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<span class="logo-small"><i class="mdi mdi-radar"></i></span>-->
                            <!--<span class="logo-large"><i class="mdi mdi-radar"></i> Simple</span>-->
                        <!--</a>-->
                        <!-- Image Logo -->

                        <a href="index.html" class="logo pull-left">
                            {{-- <img src="images/logo_sm.png" alt="" height="26" class="logo-small"> --}}
                            {{-- <img src="images/logo.png" alt="" height="126" class="logo-large pull-left"> --}}

                        </a>
                        <div class="pull-left htext">
                            <h4 class="logotext mt-3 heading"><x-sign>ஆறு நாட்டு வேளாளர் சங்கம் - திருச்சி மாநகர்</x-sign></h4>
                            <p class="small m-0 p-0 hidemob">அலுவலகம் : நெ. 1/10, ஸ்ரீனிவாசபுரம், ஸ்ருதி டவர்,<br>முதல் தளம், தென்னுர்,
                                (ஹிந்தி பிரசார சபா எதிரில்), திருச்சி - 620  017. </p>

                            <!--<p class="small m-0 p-0 hidemob">Cell : 9385320781,9442384781,    Email : nagarajanmanamalai@gmail.com</p>-->
                        </div>
                            {{-- <img src="images/marriage.jpg" class="pull-left m-3 headimg rounded-circle"/> --}}
                    </div>
                    <!-- End Logo container-->


                    <div class="navbar-custom">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">
                                <!-- <li class="has-submenu">-->
                                <!--    <a href="index.html">-->
                                <!--      <span><i class="ti-home"></i></span><span> Dashboard</span> </a>-->
                                <!--</li>-->

                                <!--<li class="has-submenu">-->
                                <!--    <a href="index.html">-->
                                <!--        <span><i class="ti-home"></i></span><span> Address Forms</span> </a>-->
                                <!--          <ul class="submenu">-->
                                <!--        <li><a href="pages-login.html">Add Address Form</a></li>-->
                                <!--        <li><a href="pages-register.html">Manage Address Form</a></li>-->

                                <!--    </ul>-->
                                <!--</li>-->

<!--                                <li class="has-submenu">
                                    <a href="#"> <span><i class="ti-files"></i></span><span> Pages </span> </a>
                                    <ul class="submenu">
                                        <li><a href="pages-login.html">Login</a></li>
                                        <li><a href="pages-register.html">Register</a></li>
                                        <li><a href="pages-forget-password.html">Forget Password</a></li>
                                        <li><a href="pages-lock-screen.html">Lock-screen</a></li>
                                        <li><a href="pages-blank.html">Blank page</a></li>
                                        <li><a href="pages-404.html">Error 404</a></li>
                                        <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                                        <li><a href="pages-session-expired.html">Session Expired</a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><span><i class="ti-spray"></i></span><span> Other </span> </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="ui-elements.html">UI Elements</a>
                                        </li>

                                        <li class="has-submenu">
                                            <a href="#">Components</a>
                                            <ul class="submenu">
                                                <li><a href="components-range-slider.html">Range Slider</a></li>
                                                <li><a href="components-alerts.html">Alerts</a></li>
                                                <li><a href="components-icons.html">Icons</a></li>
                                                <li><a href="components-widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="typography.html"> Typography </a>
                                        </li>

                                        <li class="has-submenu">
                                            <a href="#"> Forms </a>
                                            <ul class="submenu">
                                                <li><a href="forms-general.html">General Elements</a></li>
                                                <li><a href="forms-advanced.html">Advanced Form</a></li>
                                            </ul>
                                        </li>

                                        <li class="has-submenu">
                                            <a href="#"> Tables </a>
                                            <ul class="submenu">
                                                <li><a href="tables-basic.html">Basic tables</a></li>
                                                <li><a href="tables-advanced.html">Advanced tables</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="charts.html"> Charts </a>
                                        </li>

                                        <li>
                                            <a href="maps.html"> Maps </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"> <span><i class="ti-widget"></i></span><span> Extra Pages </span> </a>
                                    <ul class="submenu">
                                        <li><a href="extras-timeline.html">Timeline</a></li>
                                        <li><a href="extras-invoice.html">Invoice</a></li>
                                        <li><a href="extras-profile.html">Profile</a></li>
                                        <li><a href="extras-calendar.html">Calendar</a></li>
                                        <li><a href="extras-faqs.html">FAQs</a></li>
                                        <li><a href="extras-pricing.html">Pricing</a></li>
                                        <li><a href="extras-contacts.html">Contacts</a></li>
                                    </ul>
                                </li>-->

                            </ul>
                            <!-- End navigation menu -->
                        </div> <!-- end #navigation -->
                    </div> <!-- end navbar-custom -->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-bell noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h6>
                                    </div>

                                    <div class="slimscroll" style="max-height: 220px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name">Anderson <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ti-user"></i> <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ti-settings"></i> <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ti-lock"></i> <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ti-power-off"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

        </header>
        <!-- End Navigation Bar-->
