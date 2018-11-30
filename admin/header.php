<?php
session_start();
include_once('dbconfig.php');



if(!isset($_SESSION['chef_session']))
{
	header("Location: login.php");
}


$stmt = $db_con->prepare("SELECT * FROM chefs WHERE chef_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['chef_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>CookFinder Chef</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="../cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">


    <link rel="stylesheet" href="styles/lib/bootstrap.min.css">
    <link rel="stylesheet" href="styles/lib/chartist.min.css">
    <link rel="stylesheet" href="styles/ncms.min.css">
    <link rel="stylesheet" href="styles/site.min.css">
    <link rel="icon" sizes="180x180" href="img/favicon.png" type="image/png">
    
    <link rel="stylesheet" href="styles/lib/select2.min.css">
    <link rel="stylesheet" href="styles/lib/select2-skins.css">
    <link rel="stylesheet" href="styles/lib/pace.min.css">
    <link rel="stylesheet" href="styles/lib/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="styles/lib/colorpicker.css">


     <link rel="stylesheet" href="styles/lib/icomoon.css" />
    <link rel="stylesheet" href="styles/lib/jquery.scrollUp.css" />

    <!-- <link rel="stylesheet" href="styles/lib/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="styles/lib/ionicons.min.css"> -->
    <!-- <link rel="stylesheet" href="styles/lib/foundation-icons.css"> -->

</head>

<body class="dashboard warning-theme danger-complement primary-logo-demo using-loader">
    <!-- start of navbar -->
    <nav class="navbar navbar-fixed-top">
        <!-- start of navbar-sidebar -->
        <div class="navbar-sidebar">
            <a class="navbar-brand" href="index.php">
                <img src="img/primary-logo.png" alt="n-cms" class="primary-logo" />
                <img src="img/danger-logo.png" alt="n-cms" class="danger-logo" />
                <img src="img/success-logo.png" alt="n-cms" class="success-logo" />
                <img src="img/warning-logo.png" alt="n-cms" class="warning-logo" />
                <img src="img/info-logo.png" alt="n-cms" class="info-logo" />
                <img src="img/purple-logo.png" alt="n-cms" class="purple-logo" />
                <h1 class="hidden-sm-down">CookFinder</h1>
            </a>
            <a class="sidebar-toggle" href="#" data-toggle="sidebar">&#9776;</a>
        </div>
        <!-- end of navbar-sidebar -->
        <!-- start of main menu -->
        <ul class="nav navbar-nav float-xs-left main-menu">
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
        <!-- end of main menu -->
        <!-- end of primary menu -->
        <div class="float-xs-right secondary-menu">
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link use-icon" id="message" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="tag">1</span><i class="material-icons">mail_outline</i></a>
                    <div class="dropdown-menu dropdown-menu-right notification-list nice-scroll" aria-labelledby="message">
                        <div class="outer-triangle-right"></div>
                        <div class="header">
                            <h4 class="text-xs-center">Messages</h4>
                        </div>
                        <ul class="list-unstyled nice-scroll">
                           
                            <li>
                                <div class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object rounded-circle" src="img/ragnar-avatar.jpg" alt="user2">
                                        </div>
                                        <div class="media-body">
                                            <div class="date"><small class="d-inline text-muted">9 Nov</small>
                                            </div>
                                            <h5>Ragnar Klavan</h5>
                                            <span class="title">Financial Report Q2</span>
                                            <span class="content">Dear Amara, I will be out of town for a while, you can contact me via email </span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                               </ul>
                        <div class="py-1 footer">
                            <a href="#">See All Messages</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link use-icon" id="notification" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="tag">1</span><i class="material-icons">notifications</i></a>

                    <div class="dropdown-menu dropdown-menu-right notification-list nice-scroll" aria-labelledby="notification">
                        <div class="outer-triangle-right"></div>
                        <div class="header">
                            <h4 class="text-xs-center">Notifications</h4>
                        </div>
                        <ul class="list-unstyled">
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <img class="media-object rounded-circle" src="img/no-image.jpg" alt="user2">
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h5 class="d-inline">Paolo Aurelio</h5><span> replied to your comment on his post</span>
                                            <div class="time"><i class="material-icons text-muted">access_time</i> <small class="d-inline text-muted">2 hours ago</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="close">
                                    <a href="#"><i class="material-icons">close</i></a>
                                </div>
                            </li>
                        
                           
                             
                                <div class="close">
                                    <a href="#"><i class="material-icons">close</i></a>
                                </div>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link use-icon" href="#"><i class="material-icons">chat_bubble</i></a>
                </li>
            </ul>
            <div class="dropdown show d-inline user-menu">
                <a class="btn dropdown-toggle" href="index.php" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media d-inline">
                        <div class="media-left">
                            <img class="media-object rounded-circle" src="img/no-image.jpg" alt="Generic placeholder image" width="30" height="30">
                        </div>
                        <div class="media-right hidden-sm-down text-xs-left">
                            <h5 class="media-heading mb-0"><?php echo $row['chef_fullname']; ?></h5>
                            <small>Administrator</small>
                        </div>
                    </div>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#"><i class="material-icons align-middle mr-1">settings</i>Account</a>
                    <a class="dropdown-item" href="#"><i class="material-icons align-middle mr-1">person</i>Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php"><i class="material-icons align-middle mr-1">power_settings_new</i>Logout</a>
                </div>
            </div>
            <a class="main-menu-toggle" href="#" data-toggle="main-menu"><i class="material-icons">view_list</i></a>
        </div>
        <!-- end of secondary menu -->
        <form class="float-md-right navbar-search">
            <div class="float-xs-right input-with-icon mb-1">
                <i class="material-icons">search</i>
                <input type="search" class="form-control" placeholder="Search" />
            </div>
        </form>
    </nav>
    <!-- end of navbar -->
    <!-- start of sidebar -->
    <div class="sidebar" >
        <ul class="nav nav-sidebar">
            <li class="has-submenu" id="dashboard">
                <a href="javascript:;">
                    <i class="material-icons">dashboard</i><span>Dashboard</span>
                </a>
                <ul class="nav sub-menu">
                   
                    <li><a href="index.php">Dashboard </a>
                    </li>
                </ul>
            </li>
            <li class="has-submenu" id="category">
                <a href="javascript:;">
                    <i class="material-icons">restaurant</i><span>Category</span>
                </a>
                <ul class="nav sub-menu">
                    <li><a href="category.php">Select Category</a>
                    </li>
                    <li><a href="add-dish.php">Add dish</a>
                    </li>
                    <li><a href="dishes.php">All dishes</a>
                    </li>
                    
                </ul>
            </li>
            <li class="has-submenu">
                <span class="tag">2</span>
                <a href="javascript:;">
                    <i class="material-icons">mail_outline</i><span>Mailbox</span>
                </a>
                <ul class="nav sub-menu">
                    <li><a href="compose.html">Compose</a>
                    </li>
                    <li><a href="mailbox.html">Inbox</a>
                    </li>
                    <li><a href="mailbox-reply.html">Reply</a>
                    </li>
                    <li><a href="mailbox-detail.html">Detail</a>
                    </li>
                </ul>
            </li>
            <li class="has-submenu" id="orders">
                <a href="javascript:;">
                    <i class="icon-table2"></i><span>Orders</span>
                </a>
                <ul class="nav sub-menu"  >
                  
                    <li><a href="incoming-order.php">Orders</a>
                    </li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="javascript:;">
                    <i class="material-icons">border_color</i><span>Forms</span>
                </a>
                <ul class="nav sub-menu">
                    <li><a href="#">Add settings</a>
                    </li>
            
                </ul>
            </li>
            <li class="has-submenu" id="profile">
                <a href="javascript:;">
                    <i class="material-icons">person_add</i><span>Profile</span>
                </a>
                <ul class="nav sub-menu">
                    <li><a href="profile.php">Profile</a>
                    </li>
            
                </ul>
                <!--ul class="nav sub-menu">
                    <li><a href="login.html">Login</a>
                    </li>
                    <li><a href="register.html">Registration 1</a>
                    </li>
                    <li><a href="register1.html">Registration 2</a>
                    </li>
                    <li><a href="register2.html">Registration 3</a>
                    </li>
                    <li><a href="register3.html">Registration 4</a>
                    </li>
                </ul-->
            </li>
            <!--li class="has-submenu">
                <a href="javascript:;">
                    <i class="material-icons">error</i><span>Error Pages</span>
                </a>
                <ul class="nav sub-menu">
                    <li><a href="404page.html">404 Error</a>
                    </li>
                    <li><a href="500page.html">500 Error</a>
                    </li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="javascript:;">
                    <i class="material-icons">content_copy</i><span>Pages</span>
                </a>
                <ul class="nav sub-menu">
                    <li><a href="timeline.html">Timeline</a>
                    </li>
                    <li><a href="profile.html">Profile</a>
                    </li>
                    <li><a href="comment.html">Comment</a>
                    </li>
                    <li><a href="blank.html">Blank Page</a>
                    </li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="javascript:;">
                    <i class="material-icons">check_box_outline_blank</i><span>Email Template</span>
                </a>
                <ul class="nav sub-menu">
                    <li><a href="email.html">Blog Post</a>
                    </li>
                    <li><a href="email-clean.html">Product Template</a>
                    </li>
                </ul>
            </li-->
            <li>
                <a target="_blank" href="documentation/index.html">
                    <i class="material-icons">library_books</i><span>Documentation</span>
                </a>
            </li>

            <li>
                <a href="logout.php">
                    <i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><span>Log Out</span>
                </a>
            </li>

        </ul>
    </div>
    <!-- end of sidebar -->
