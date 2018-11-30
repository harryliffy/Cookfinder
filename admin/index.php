<?php
session_start();
include_once('header.php');
include('core/core.php');

?>
<?php
//pgae navigation tab tracker
$navigation=new Pagetracker();
$navigation->navTracker('dashboard');
?>



    <!-- start of main container -->
    <div class="main container-fluid dashboard-main">
        <!-- start of content header -->
        <div class="content-header">
            <h1>Dashboard</h1>
            <p>Welcome back <a href="#"><?php echo $row['chef_fullname']; ?></a> - Last log in on <?php echo Date('d M Y') ?></p>
            <hr />
        </div>
        <!-- end of content header -->
        <!-- start of content -->
        <div class="content">
            <!-- start of row card -->
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card statistic-card danger">
                        <div class="card-block">
                            <i class="material-icons">feedback</i>
                            <div class="stats-counter">
                                <h1 class="count-number">1</h1>
                                <p>New Feedback</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card statistic-card purple">
                        <div class="card-block">
                            <i class="material-icons">shopping_cart</i>
                            <div class="stats-counter">
                                <h1 class="count-number">2</h1>
                                <p>New Order</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card statistic-card success">
                        <div class="card-block">
                            <i class="material-icons">add</i>
                            <div class="stats-counter">
                                <h1 class="count-number">21.5 &#x20a6;</h1>
                                <p>Profit</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card statistic-card warning">
                        <div class="card-block">
                            <i class="material-icons">show_chart</i>
                            <div class="stats-counter">
                                <h1 class="count-number">2</h1>
                                <p>Sales</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of row card -->
            <!-- start of row chart -->
            <div class="row chart">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header no-border-bottom card-header-descriptive">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="title float-xs-left">
                                        <h4 class="card-title">Revenue</h4>
                                        <p class="card-subtitle">Monthly stats</p>
                                    </div>
                                    <div class="dropdown float-xs-right">
                                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Filter Range</button>
                                        <div class="dropdown-menu-right dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="ct-chart"></div>
                                </div>
                                <div class="col-md-2">
                                    <dl>
                                        <dt>Revenue</dt>
                                        <dd>
                                            &#x20a6;12,450
                                        </dd>
                                        <dt>Tax</dt>
                                        <dd>
                                            &#x20a6;2,122
                                        </dd>
                                        <dt>Shipment</dt>
                                        <dd>
                                        &#x20a6; 1,233
                                        </dd>
                                        <dt>Order</dt>
                                        <dd>
                                            &#x20a6; 2,422
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of row chart -->
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card activity-card">
                        <div class="card-header">
                            <h4>Activity</h4>
                            <span class="tag tag-pill tag-warning">5</span>
                        </div>
                        <div class="card-block">
                            <ul class="list-unstyled mb-0 v-scroll">
                                <li class="mb-2">
                                    <div class="media">
                                        <a class="media-left" href="#">
                                            <img src="img/no-image.jpg" alt="user1" class="rounded-circle" width="42" height="42">
                                        </a>
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <h5><?php echo $row['chef_fullname']; ?></h5>
                                                    <small class="text-muted">1 day ago</small>
                                                </div>
                                                <div class="col-xs-8">
                                                    Assign Project Request
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card tasks-card">
                        <div class="card-header">
                            <h4 class="d-inline">Tasks</h4>
                            <div class="dropdown float-xs-right">
                                <a class="nav-link use-icon  text-primary" id="task-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">settings</i></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="task-action">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-block">
                            <ul class="list-unstyled mb-0 v-scroll">
                                <li class="mb-2">
                                    <div class="media">
                                        <label class="custom-control custom-checkbox media-left">
                                        <input type="checkbox" checked="checked" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                    </label>
                                        <div class="media-body">
                                            <h5>Schedule Meeting</h5>
                                            Opportunity for new customers
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="mb-2">
                                    <div class="media">
                                        <label class="custom-control custom-checkbox media-left">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                    </label>
                                        <div class="media-body">
                                            <h5>Monthly sales report</h5>
                                            As soon as possible
                                        </div>
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-xl-up"></div>
                <div class="col-md-6 col-xl-4">
                    <div class="card comments-card">
                        <div class="card-header">
                            <h4>Comments</h4>
                            <span class="tag tag-pill tag-danger">3</span>
                        </div>
                        <div class="card-block ">
                            <ul class="list-unstyled mb-0 v-scroll">
                                <li class="mb-2">
                                    <div class="media">
                                        <a class="media-left" href="#">
                                            <img src="img/no-image.jpg" alt="user2" class="rounded-circle" width="42" height="42">
                                        </a>
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <h5><?php echo $row['chef_fullname']; ?></h5>
                                                    <small class="text-muted">5 days ago</small>
                                                </div>
                                                <div class="col-xs-8">
                                                    <p>
                                                    I want someone possible and
                                                        give me the report to my email. Thank you very much for your work
                                                        
                                                    </p>
                                                </div>
                                            </div>
                                            <ul class="list-inline float-xs-right">
                                                <li class="list-inline-item"><a href="#" class="text-muted"><i class="icon ion-heart"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="text-muted"><i class="icon-quill"></i></a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </li>
                               
                               
                                <li>
                                    <div class="media">
                                        <a class="media-left" href="#">
                                            <img src="img/simon-avatar.jpg" alt="user2" class="rounded-circle" width="42" height="42">
                                        </a>
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <h5>Simon</h5>
                                                    <small class="text-muted">10 days ago</small>
                                                </div>
                                                <div class="col-xs-8">
                                                    <p>
                                                        You are welcome <?php echo $row['chef_fullname']; ?>, have a nice day. By the way your profile picture looks good.
                                                    </p>
                                                </div>
                                            </div>
                                            <ul class="list-inline float-xs-right">
                                                <li class="list-inline-item"><a href="#" class="text-muted"><i class="icon ion-heart"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="text-muted"><i class="icon-quill"></i></a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-lg-down"></div>
                <div class="col-md-6 col-xl-4">
                    <div class="card chats-card">
                        <div class="card-header">
                            <h4>Support Chats</h4>
                            <span class="tag tag-pill tag-info">2</span>
                        </div>
                        <div class="card-block">
                            <ul class="media-list v-scroll mb-0">
                                <li class="media left-message mb-2">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object rounded-circle" src="img/no-image.jpg" alt="user2" height="42" width="42">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h5><?php echo $row['chef_fullname']; ?> </h5>
                                        <small class="text-muted">1 day ago</small>
                                    </div>
                                    <div class="text-xs-right chat-bubble">
                                        Hi Paolo, could you please arrange me a meeting with technical team. 
                                    </div>
                                </li>
                                <li class="media right-message">
                                    <div class="media-body text-xs-right">
                                        <h5>Paolo Aurelio</h5>
                                        <small class="text-muted">1 day ago</small>
                                    </div>
                                    <div class="media-right">
                                        <a href="#">
                                            <img class="media-object rounded-circle" src="img/paolo-avatar.jpg" alt="user2" height="42" width="42">
                                        </a>
                                    </div>
                                    <div class="text-xs-left chat-bubble">
                                        Hi <?php echo $row['chef_fullname']; ?>, sure why not. I will arrange a meeting between you and technical team 
                                    </div>
                                </li>
                            </ul>
                            <hr class="mt-2 mb-2" />
                            <form name="chat" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="type your message here">
                                    <span class="input-group-btn"><button class="btn btn-info"><i class="fa fa-paper-plane" aria-hidden="true"></i></button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-xl-up"></div>
                <div class="col-md-12 col-xl-8">
                    <div class="card applicants order">
                        <div class="card-header no-border-bottom card-header-descriptive">
                            <h4 class="card-title">Order Review</h4>
                            <p class="card-subtitle">Latest order</p>
                        </div>
                        <div class="card-block v-scroll">
                            <div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th class="text-xs-center">Product</th>
                                                <th>Product Name</th>
                                                <th class="text-xs-right">Price</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $tableCounter=0;
$chefId=$_SESSION['chef_session'];
$ustatus="1";  // approved order status from chef
$stmt = $db_con->prepare("SELECT DISTINCT transaction_id, chef_id,user_id FROM transaction WHERE chef_id=:chefId AND status=:ustatus");
$stmt->execute(array(":chefId"=>$chefId,":ustatus"=>$ustatus,));
while ($stmtRow = $stmt->fetch(PDO::FETCH_ASSOC))
{
$tableCounter ++;


echo'
<td> '.$tableCounter.'</td>
											
											<td>'; echo $stmtRow['transaction_id']; echo'</td>
											<td>'.$stmtRow['user_id'].'</td>
											<td>'.$stmtRow['chef_id'].'</td>
											
											<td>'.$stmtRow['comment'].'</td>
											<td>2010</td>
';
}
?>
                                        </tbody>
                                    </table>
                                </div>
                                <nav class="text-xs-center">
                                    <ul class="pagination pagination-sm pagination-control mb-0 mt-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript:;" aria-label="Previous">
                                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end of content -->
    </div>
    <!-- end of main container -->

    <!--div class="site-configuration">
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
    </div-->


    <script src="../code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="../maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>



    <!-- <script src="js/lib/jquery.min.js"></script> -->
    <!-- <script src="js/lib/tether.min.js"></script> -->
    <!-- <script src="js/lib/bootstrap.min.js"></script> -->


    <script src="js/lib/chartist.min.js"></script>
    <script src="js/lib/jquery.nicescroll.js"></script>
    <script src="js/lib/jquery.scrollUp.min.js"></script>
    <script src="js/lib/js.cookie.js"></script>
    <script src="js/lib/pace.min.js"></script>
    <script src="js/ncms.min.js"></script>
    <!--script src="js/site-config.js"></script-->
    <script src="js/pages/index1.js"></script>

</body>



</html>

<?php
include_once('footer.php');
?>