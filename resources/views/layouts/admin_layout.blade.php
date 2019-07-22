<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Preadmin - Bootstrap Admin Template</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/fullcalendar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/plugins/morris/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css')}}">

</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="{{URL::to('backend/assets/img/logo.png')}}" width="40" height="40" alt="">
                </a>
            </div>
            <div class="page-title-box pull-left">
                <h3>SparkTeam</h3>
            </div>
            <a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <ul class="nav navbar-nav navbar-right user-menu pull-right">
                <li class="dropdown hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge bg-primary pull-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="media-list">
                                <li class="media notification-message">
                                    <a href="activities.html">
                                        <div class="media-left">
                                            <span class="avatar">
												<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
											</span>
                                        </div>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                        </div>
                                    </a>
                                </li>
                                <li class="media notification-message">
                                    <a href="activities.html">
                                        <div class="media-left">
                                            <span class="avatar">V</span>
                                        </div>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                            <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                        </div>
                                    </a>
                                </li>
                                <li class="media notification-message">
                                    <a href="activities.html">
                                        <div class="media-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                            <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                        </div>
                                    </a>
                                </li>
                                <li class="media notification-message">
                                    <a href="activities.html">
                                        <div class="media-left">
                                            <span class="avatar">G</span>
                                        </div>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                            <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                        </div>
                                    </a>
                                </li>
                                <li class="media notification-message">
                                    <a href="activities.html">
                                        <div class="media-left">
                                            <span class="avatar">V</span>
                                        </div>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                            <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown hidden-xs">
                    <a href="javascript:;" id="open_msg_box" class="hasnotifications"><i class="fa fa-comment-o"></i> <span class="badge bg-primary pull-right">8</span></a>
                </li>

                <li class="dropdown">
                    <a href="profile.html" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
                        <span class="user-img"><img class="img-circle" src="{{URL::to('backend/assets/img/user.jpg')}}" width="40" alt="Admin">

							<span class="status online"></span></span>
                        <span></span>
                        <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="">My Profile</a></li>
                        <li><a href="edit-profile.html">Edit Profile</a></li>
                        <li><a href="settings.html">Settings</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </li>

            </ul>
            <div class="dropdown mobile-user-menu pull-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <ul class="dropdown-menu pull-right">
                    <li><a href="profile.html">My Profile</a></li>
                    <li><a href="edit-profile.html">Edit Profile</a></li>
                    <li><a href="settings.html">Settings</a></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href=""><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fa fa-retweet " aria-hidden="true"></i> <span>Category</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{route('category.create')}}">Add Category</a></li>
                                <li><a href="{{route('category.index')}}">All Category</a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-globe" aria-hidden="true"></i> <span> Country</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{route('country.create')}}">Add Country</a></li>
                                <li><a href="{{route('country.index')}}">All Country</a></li>

                            </ul>
                        </li>

                        <!-- <li class="submenu">
                            <a href="#"><i class="fa fa-indent" aria-hidden="true"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="blog.html">Add Departments</a></li>
                                <li><a href="blog-details.html">All Departments</a></li>

                            </ul>
                        </li> -->
                        <li class="submenu">
                            <a href="#"><i class="fa fa-indent" aria-hidden="true"></i> <span> Universities</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{route('university.create')}}">Add University</a></li>
                                <li><a href="{{route('university.index')}}">All University</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="settings.html"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
                        </li>


                        <li class="submenu">
                            <a href="#"><i class="fa fa-book" aria-hidden="true"></i> <span> Department</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{route('department.index')}}">All Department</a></li>
                                <li><a href="{{route('department.create')}}">Add Department</a></li>

                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fa fa-book" aria-hidden="true"></i> <span> Course Details</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="">All course details</a></li>
                                <li><a href="">Add course details</a></li>

                            </ul>
                        </li>


                        <li>
                            <a href="calendar.html"><i class="fa fa-calendar" aria-hidden="true"></i> Calendar</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
            <div class="content container-fluid">



               @yield('admin_content')
            </div>


            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script type="text/javascript" src="{{asset('backend/assets/js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/js/jquery.slimscroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/plugins/morris/morris.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/plugins/raphael/raphael-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/js/dataTables.bootstrap.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('backend/assets/css/select2/select2.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('/backend/plugin/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/plugin/tinymce/init-tinymce.js')}}"></script>


    <script type="text/javascript" src="{{asset('backend/assets/js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js')}}">		</script>

		<script type="text/javascript">
		$(document).on('click',"#delete", function(e){
			e.preventDefault();
			var link=$(this).attr("href");
			bootbox.confirm("Are you want to Delete!!",function(confirmed){
				if(confirmed){
					window.location.href = link;
				};
			});
		});

		</script>
    <script type="text/javascript">
    $(document).ready(function(){
          $(".select2").select2();
    });

    </script>
</body>

</html>