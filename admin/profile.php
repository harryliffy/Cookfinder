<?php
session_start();
include_once('header.php');
include('core/core.php');
//pgae navigation tab tracker
$navigation=new Pagetracker();
$navigation->navTracker('profile');
?>
<?php
//pgae navigation tab tracker
$navigation=new Pagetracker();
$navigation->navTracker('profile');
?>
    <!--Start of Main Container-->
    <div class="main container-fluid profile">
        <div class="content">
            <div class="row">
                <div class="col-md-4 col-xl-4">
                    <div class="card profile-card px-0">
                        <div class="card-profile-header" style="background-image:url(img/personal-desk.jpg);width:100%;height:200px;background-size:cover">
                        </div>
                        <div class="card-block">
                            <img class="profile-picture" src="img/no-image.jpg" alt="Emily Burnt" width="100" height="100">
                            <h4>
        <a href=""><?php echo $row['chef_fullname']; ?></a>
    </h4>
                            <p>Hi, it's been pleasure to meet you. I'm <?php echo $row['chef_fullname']; ?> the Chief Executive Officer at Arkalite. We hope you enjoy our page. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cum sociis natoque penatibus et magnis dis parturient ...</p>
                        </div>
                        <div class="card-footer text-xs-center">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#userModal" class="aku" data-toggle="modal">
                                        Following
                                        <h5 class="ali">0</h5>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#userModal" class="aku" data-toggle="modal">
                                        Friends
                                        <h5 class="ali">0</h5>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#userModal" class="aku" data-toggle="modal">
                                        Favorites
                                        <h5 class="ali">0</h5>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card nice-scroll">
                        <a class="twitter-timeline" data-height="700" href="https://twitter.com/TwitterDev">Tweets by TwitterDev</a>
                        <script async src="../platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-block">
                            <div class="timeline-group">
                                <h4 class="timeline-year mb-1">Today</h4>
                                <div class="media timeline-author">
                                    <textarea class="form-control form-group" rows="5" placeholder="What's on your mind?"></textarea>
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-md-4 mb-1">
                                                <a href="#" class="pr-2">
                                                    <i class="fa fa-camera" aria-hidden="true"></i><span class="fa-icon-info"></span>
                                                </a>
                                                <a href="#" class="pr-2">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i><span class="fa-icon-info"></span>
                                                </a>
                                                <a href="#" class="pr-2">
                                                    <i class="fa fa-video-camera" aria-hidden="true"></i><span class="fa-icon-info"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="button-action form-group text-md-right">
                                                    <button type="submit" class="btn btn-info px-3">Publish</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="nav-tabs-container">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Timeline</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#target" role="tab">Gallery</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="timeline" role="tabpanel">
                                <div class="timeline">
                                    <div class="timeline-group">
                                        <h3 class="timeline-year">2016</h3>
                                        <div class="timeline-item">
                                            <div class="timeline-icon"><i class="material-icons">video_library</i>
                                            </div>
                                            <h4 class="timeline-date">September 11 | 09.11 AM</h4>
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object rounded-circle" src="img/no-image.jpg" alt="Generic placeholder image" style="width:40px;height:40px;">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="media-heading title-timeline-author"><?php echo $row['chef_fullname']; ?></h5><span class="title-timeline-type text-muted">shared a link</span>
                                                            <div class="float-md-right card-header-location">
                                                                <i class="material-icons text-muted title-timeline-location">location_on</i>
                                                                <a href="#" class="text-muted title-timeline-location">San Fransisco</a>
                                                            </div>
                                                            <small class="text-muted title-timeline-active">Active 7 mins ago</small>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="embed-responsive embed-responsive-16by9 mb-1" style="position:relative">
                                                    <div style="width:100%;height:100%;z-index:20;position:absolute;top:0;left:0" onClick="style.pointerEvents='none'"></div>
                                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/aNPkYJOBC3Y" allowfullscreen></iframe>
                                                </div>
                                                <div class="card-block">
                                                    <h4 class="card-title">This Is How I Setup My Desk</h4>
                                                    <div class="card-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </div>
                                                    <a href="#" class="float-xs-right mt-1">Read More</a>
                                                </div>
                                                <div class="card-footer">
                                                    <ul class="list-inline timeline-meta-link mt-1 text-muted">
                                                        <li class="list-inline-item"><i class="icon ion-heart timeline-footer-link"></i><a href="#" class="text-muted timeline-footer-link"> 3465</a>
                                                        </li>
                                                        <li class="list-inline-item"><i class="icon ion-eye timeline-footer-link"></i><a href="#" class="text-muted timeline-footer-link"> 4476</a>
                                                        </li>
                                                        <li class="list-inline-item"><i class="fa fa-user timeline-footer-link" aria-hidden="true"></i><a href="#" class="text-muted timeline-footer-link"> Admin</a>
                                                        </li>
                                                        <li class="list-inline-item"><i class="icon ion-edit timeline-footer-link"></i><a href="#" class="text-muted timeline-footer-link"> Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-icon"><i class="material-icons">mode_comment</i>
                                            </div>
                                            <h4 class="timeline-date">November 09 | 11.09 AM</h4>
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object rounded-circle" src="img/no-image.jpg" alt="Generic placeholder image" style="width:40px;height:40px;">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="media-heading title-timeline-author"><?php echo $row['chef_fullname']; ?></h5><span class="title-timeline-type text-muted">posted an update</span>
                                                            <div class="float-md-right card-header-location">
                                                                <i class="material-icons text-muted title-timeline-location">location_on</i>
                                                                <a href="#" class="text-muted title-timeline-location">Alabama</a>
                                                            </div>
                                                            <small class="text-muted title-timeline-active">Active 7 mins ago</small>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-block">
                                                    <div class="card-text">
                                                        Get ready for announcement of our next event!
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <ul class="list-inline timeline-meta-link mt-1 text-muted">
                                                        <li class="list-inline-item"><i class="icon ion-heart timeline-footer-link"></i><a href="#" class="text-muted timeline-footer-link"> 3465</a>
                                                        </li>
                                                        <li class="list-inline-item"><i class="icon ion-eye timeline-footer-link"></i><a href="#" class="text-muted timeline-footer-link"> 4476</a>
                                                        </li>
                                                        <li class="list-inline-item"><i class="fa fa-user timeline-footer-link" aria-hidden="true"></i><a href="#" class="text-muted timeline-footer-link"> Admin</a>
                                                        </li>
                                                        <li class="list-inline-item"><i class="icon ion-edit timeline-footer-link"></i><a href="#" class="text-muted timeline-footer-link"> Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-icon"><i class="material-icons">image</i>
                                            </div>
                                            <h4 class="timeline-date">January 11 | 12.51 PM</h4>
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object rounded-circle" src="img/no-image.jpg" alt="Generic placeholder image" style="width:40px;height:40px;">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading title-timeline-author"><?php echo $row['chef_fullname']; ?></h4><span class="title-timeline-type text-muted">added new album</span>
                                                            <div class="float-md-right card-header-location">
                                                                <i class="material-icons text-muted title-timeline-location">location_on</i>
                                                                <a href="#" class="text-muted title-timeline-location">San Fransisco</a>
                                                            </div>
                                                            <small class="text-muted title-timeline-active">Active 7 mins ago</small>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="carousel-item active">
                                                            <img src="img/pict1.jpg" alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/pict2.jpg" alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/pict3.jpg" alt="Third slide">
                                                        </div>
                                                    </div>
                                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                        <span class="icon-prev" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                        <span class="icon-next" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                                <div class="card-block">
                                                    <h4 class="card-title">#OfficePhotos</h4>
                                                    <div class="card-text">
                                                        Some random photography taken at my office today.
                                                    </div>
                                                    <a href="#" class="float-md-right mt-1">Read More</a>
                                                </div>
                                                <div class="card-footer">
                                                    <ul class="list-inline timeline-meta-link mt-1 text-muted">
                                                        <li class="list-inline-item"><i class="icon ion-heart timeline-footer-link"></i><a href="#" class="text-muted timeline-footer-link"> 3465</a>
                                                        </li>
                                                        <li class="list-inline-item"><i class="icon ion-eye timeline-footer-link"></i><a href="#" class="text-muted timeline-footer-link"> 4476</a>
                                                        </li>
                                                        <li class="list-inline-item"><i class="fa fa-user timeline-footer-link" aria-hidden="true"></i><a href="#" class="text-muted timeline-footer-link"> Admin</a>
                                                        </li>
                                                        <li class="list-inline-item"><i class="icon ion-edit timeline-footer-link"></i><a href="#" class="text-muted timeline-footer-link"> Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="target" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="#" data-toggle="modal" data-target="#pictOne">
                                            <img src="img/pict1.jpg" alt="" class="mb-1 w-100 img-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" data-toggle="modal" data-target="#pictTwo">
                                            <img src="img/pict11.jpg" alt="" class="mb-1 w-100 img-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" data-toggle="modal" data-target="#pictThree">
                                            <img src="img/pict3.jpg" alt="" class="mb-1 w-100 img-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" data-toggle="modal" data-target="#pictFour">
                                            <img src="img/pict31.jpg" alt="" class="mb-1 w-100 img-thumbnail" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--End of Content-->

    </div>
    <!--End of Main Container-->

    <!-- Modal -->
    <div class="modal fade" id="pictOne" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Picture Title</h4>
                </div>
                <div class="modal-body">
                    <img src="img/pict1.jpg" alt="" class="mb-1 w-100" />
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="pictTwo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Picture Title</h4>
                </div>
                <div class="modal-body">
                    <img src="img/pict11.jpg" alt="" class="mb-1 w-100" />
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="pictThree" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Picture Title</h4>
                </div>
                <div class="modal-body">
                    <img src="img/pict3.jpg" alt="" class="mb-1 w-100" />
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="pictFour" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Picture Title</h4>
                </div>
                <div class="modal-body">
                    <img src="img/pict31.jpg" alt="" class="mb-1 w-100" />
                </div>
            </div>
        </div>
    </div>

    <div class="site-configuration">
        <div class="site-config-control">
            <i class="material-icons">settings</i>
        </div>
        <h5>Skins</h5>
        <ul class="list-inline color-themes">
            <li class="list-inline-item" data-color="danger" data-complementary="primary" data-logo="primary">
                <div class="danger-color"></div>
                <div class="primary-color"></div>
            </li>
            <li class="list-inline-item" data-color="warning" data-complementary="primary" data-logo="primary">
                <div class="warning-color"></div>
                <div class="primary-color"></div>
            </li>
            <li class="list-inline-item" data-color="primary" data-complementary="warning" data-logo="warning">
                <div class="primary-color"></div>
                <div class="warning-color"></div>
            </li>
        </ul>
        <ul class="list-inline color-themes">
            <li class="list-inline-item" data-color="warning" data-complementary="danger" data-logo="primary">
                <div class="warning-color"></div>
                <div class="danger-color"></div>
            </li>
            <li class="list-inline-item" data-color="success" data-complementary="danger" data-logo="primary">
                <div class="success-color"></div>
                <div class="danger-color"></div>
            </li>
            <li class="list-inline-item" data-color="success" data-complementary="primary" data-logo="primary">
                <div class="success-color"></div>
                <div class="primary-color"></div>
            </li>
        </ul>
        <ul class="list-inline color-themes">
            <li class="list-inline-item" data-color="success" data-complementary="warning" data-logo="primary">
                <div class="success-color"></div>
                <div class="warning-color"></div>
            </li>
            <li class="list-inline-item" data-color="info" data-complementary="warning" data-logo="primary">
                <div class="info-color"></div>
                <div class="warning-color"></div>
            </li>

            <li class="list-inline-item" data-color="info" data-complementary="danger" data-logo="primary">
                <div class="info-color"></div>
                <div class="danger-color"></div>
            </li>
        </ul>
        <ul class="list-inline color-themes">
            <li class="list-inline-item" data-color="info" data-complementary="primary" data-logo="primary">
                <div class="info-color"></div>
                <div class="primary-color"></div>
            </li>
            <li class="list-inline-item" data-color="primary" data-complementary="danger" data-logo="danger">
                <div class="primary-color"></div>
                <div class="danger-color"></div>
            </li>

            <li class="list-inline-item" data-color="danger" data-complementary="warning" data-logo="primary">
                <div class="danger-color"></div>
                <div class="warning-color"></div>
            </li>
        </ul>
    </div>


    <script src="../code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="../maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>



    <!-- <script src="js/lib/jquery.min.js"></script> -->
    <!-- <script src="js/lib/tether.min.js"></script> -->    
    <!-- <script src="js/lib/bootstrap.min.js"></script> -->


    <script src="js/lib/chartist.min.js"></script>
    <script src="js/lib/jquery.nicescroll.js"></script>
    <script src="js/lib/jquery.nicescroll.plus.js"></script>
    <script src="js/lib/jquery.scrollUp.min.js"></script>
    <script src="js/lib/js.cookie.js"></script>
    <script src="js/lib/pace.min.js"></script>
    <script src="js/ncms.min.js"></script>
    <script src="js/site-config.js"></script>
</body>



<!-- Mirrored from fazar.bitbucket.io/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2017 11:44:34 GMT -->
</html>