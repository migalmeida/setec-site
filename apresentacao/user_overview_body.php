<?php  
?>


<section id="content">
                  <section class="hbox stretch">
                     <section>
                        <section class="vbox">
                           <section class="scrollable padder">
                              <section class="row m-b-md">
                                 <div class="col-sm-6">
                                    <h3 class="m-b-xs text-black">Dashboard</h3>
                                    <small>Welcome back, <?php echo $_SESSION['username']; ?></small>
                                 </div>
                              </section>
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="panel b-a">
                                       <div class="row m-n">
                                          <div class="col-md-6 b-b b-r"> <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i> <i class="i i-plus2 i-1x text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-danger">2,000</span> <small class="text-muted text-u-c">New Visits</small> </span> </a> </div>
                                          <div class="col-md-6 b-b"> <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i> <i class="i i-users2 i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-success">75%</span> <small class="text-muted text-u-c">Bounce rate</small> </span> </a> </div>
                                          <div class="col-md-6 b-b b-r"> <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i> <i class="i i-location i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-info">25 <span class="text-sm">m</span></span> <small class="text-muted text-u-c">location</small> </span> </a> </div>
                                          <div class="col-md-6 b-b"> <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i> <i class="i i-alarm i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-primary">9:30</span> <small class="text-muted text-u-c">Meeting</small> </span> </a> </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-3 hide">
                                    <section class="panel b-a">
                                       <header class="panel-heading b-b b-light">
                                          <ul class="nav nav-pills pull-right">
                                             <li> <a href="ajax.pie.html" class="text-muted" data-bjax data-target="#b-c"> <i class="i i-cycle"></i> </a> </li>
                                             <li> <a href="#" class="panel-toggle text-muted"> <i class="i i-plus text-active"></i> <i class="i i-minus text"></i> </a> </li>
                                          </ul>
                                          Connection 
                                       </header>
                                       <div class="panel-body text-center bg-light lter" id="b-c">
                                          <div class="easypiechart inline m-b m-t" data-percent="60" data-line-width="4" data-bar-Color="#23aa8c" data-track-Color="#c5d1da" data-color="#2a3844" data-scale-Color="false" data-size="120" data-line-cap='butt' data-animate="2000">
                                             <div>
                                                <span class="h2 m-l-sm step"></span>% 
                                                <div class="text text-xs">completed</div>
                                             </div>
                                          </div>
                                       </div>
                                    </section>
                                 </div>
                              </div>
			      <!-- Statistics -->
                              <div class="row bg-light dk m-b">
                                 <div class="col-md-6 dker">
                                    <section>
                                       <header class="font-bold padder-v">
                                          <div class="pull-right">
                                             <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-sm btn-rounded btn-default dropdown-toggle"> <span class="dropdown-label">Week</span> <span class="caret"></span> </button> 
                                                <ul class="dropdown-menu dropdown-select">
                                                   <li><a href="#"><input type="radio" name="b">Month</a></li>
                                                   <li><a href="#"><input type="radio" name="b">Week</a></li>
                                                   <li><a href="#"><input type="radio" name="b">Day</a></li>
                                                </ul>
                                             </div>
                                             <a href="#" class="btn btn-default btn-icon btn-rounded btn-sm">Go</a> 
                                          </div>
                                          Statistics 
                                       </header>
                                       <div class="panel-body">
                                          <div id="flot-sp1ine" style="height:210px"></div>
                                       </div>
                                       <div class="row text-center no-gutter">
                                          <div class="col-xs-3"> <span class="h4 font-bold m-t block">5,860</span> <small class="text-muted m-b block">Orders</small> </div>
                                          <div class="col-xs-3"> <span class="h4 font-bold m-t block">10,450</span> <small class="text-muted m-b block">Sellings</small> </div>
                                          <div class="col-xs-3"> <span class="h4 font-bold m-t block">21,230</span> <small class="text-muted m-b block">Items</small> </div>
                                          <div class="col-xs-3"> <span class="h4 font-bold m-t block">7,230</span> <small class="text-muted m-b block">Customers</small> </div>
                                       </div>
                                    </section>
                                 </div>
				 <!-- Analysis -->
                                 <div class="col-md-6">
                                    <section>
                                       <header class="font-bold padder-v">
                                          <div class="btn-group pull-right">
                                             <button data-toggle="dropdown" class="btn btn-sm btn-rounded btn-default dropdown-toggle"> <span class="dropdown-label">Last 24 Hours</span> <span class="caret"></span> </button> 
                                             <ul class="dropdown-menu dropdown-select">
                                                <li><a href="#"><input type="radio" name="a">Today</a></li>
                                                <li><a href="#"><input type="radio" name="a">Yesterday</a></li>
                                                <li><a href="#"><input type="radio" name="a">Last 24 Hours</a></li>
                                                <li><a href="#"><input type="radio" name="a">Last 7 Days</a></li>
                                                <li><a href="#"><input type="radio" name="a">Last 30 days</a></li>
                                                <li><a href="#"><input type="radio" name="a">Last Month</a></li>
                                                <li><a href="#"><input type="radio" name="a">All Time</a></li>
                                             </ul>
                                          </div>
                                          Analysis 
                                       </header>
                                       <div class="panel-body flot-legend">
                                          <div id="flot-pie-donut" style="height:240px"></div>
                                       </div>
                                    </section>
                                 </div>
				 
                              </div>
			      <!-- Calendar -->
                              <div class="row">
                                 <div class="col-md-4">
                                    <section class="panel b-a">
                                       <div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Messages</a> </div>
                                       <ul class="list-group list-group-lg no-bg auto"> <a href="#" class="list-group-item clearfix"> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a4.png" alt="..."> <i class="on b-white bottom"></i> </span> <span class="clear"> <span>Chris Fox</span> <small class="text-muted clear text-ellipsis">What's up, buddy</small> </span> </a> <a href="#" class="list-group-item clearfix"> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a5.png" alt="..."> <i class="on b-white bottom"></i> </span> <span class="clear"> <span>Amanda Conlan</span> <small class="text-muted clear text-ellipsis">Come online and we need talk about the plans that we have discussed</small> </span> </a> <a href="#" class="list-group-item clearfix"> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a6.png" alt="..."> <i class="busy b-white bottom"></i> </span> <span class="clear"> <span>Dan Doorack</span> <small class="text-muted clear text-ellipsis">Hey, Some good news</small> </span> </a> <a href="#" class="list-group-item clearfix"> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a7.png" alt="..."> <i class="away b-white bottom"></i> </span> <span class="clear"> <span>Lauren Taylor</span> <small class="text-muted clear text-ellipsis">Nice to talk with you.</small> </span> </a> </ul>
                                       <div class="clearfix panel-footer">
                                          <div class="input-group"> <input type="text" class="form-control input-sm btn-rounded" placeholder="Search"> <span class="input-group-btn"> <button type="submit" class="btn btn-default btn-sm btn-rounded"><i class="fa fa-search"></i></button> </span> </div>
                                       </div>
                                    </section>
                                 </div>
                                 <div class="col-md-4">
                                    <section class="panel b-light">
                                       <header class="panel-heading"><strong>Calendar</strong></header>
                                       <div id="calendar" class="bg-light dker m-l-n-xxs m-r-n-xxs"></div>
                                       <div class="list-group"> <a href="#" class="list-group-item text-ellipsis"> <span class="badge bg-warning">7:30</span> Meet a friend </a> <a href="#" class="list-group-item text-ellipsis"> <span class="badge bg-success">9:30</span> Have a kick off meeting with .inc company </a> </div>
                                    </section>
                                 </div>
                              </div>
                           </section>
                        </section>
                     </section>
                     <!-- side content --> 
                     <aside class="aside-md bg-black hide" id="sidebar">
                        <section class="vbox animated fadeInRight">
                           <section class="scrollable">
                              <div class="wrapper"><strong>Live feed</strong></div>
                              <ul class="list-group no-bg no-borders auto">
                                 <li class="list-group-item"> <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-success"></i> <i class="fa fa-reply fa-stack-1x text-white"></i> </span> <span class="clear"> <a href="#">Goody@gmail.com</a> sent your email <small class="icon-muted">13 minutes ago</small> </span> </li>
                                 <li class="list-group-item"> <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-danger"></i> <i class="fa fa-file-o fa-stack-1x text-white"></i> </span> <span class="clear"> <a href="#">Mide@live.com</a> invite you to join a meeting <small class="icon-muted">20 minutes ago</small> </span> </li>
                                 <li class="list-group-item"> <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-info"></i> <i class="fa fa-map-marker fa-stack-1x text-white"></i> </span> <span class="clear"> <a href="#">Geoge@yahoo.com</a> is online <small class="icon-muted">1 hour ago</small> </span> </li>
                                 <li class="list-group-item"> <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-primary"></i> <i class="fa fa-info fa-stack-1x text-white"></i> </span> <span class="clear"> <a href="#"><strong>Admin</strong></a> post a info <small class="icon-muted">1 day ago</small> </span> </li>
                              </ul>
                              <div class="wrapper"><strong>Friends</strong></div>
                              <ul class="list-group no-bg no-borders auto">
                                 <li class="list-group-item">
                                    <div class="media">
                                       <span class="pull-left thumb-sm avatar"> <img src="images/a3.png" alt="..." class="img-circle"> <i class="on b-black bottom"></i> </span> 
                                       <div class="media-body">
                                          <div><a href="#">Chris Fox</a></div>
                                          <small class="text-muted">about 2 minutes ago</small> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="list-group-item">
                                    <div class="media">
                                       <span class="pull-left thumb-sm avatar"> <img src="images/a2.png" alt="..."> <i class="on b-black bottom"></i> </span> 
                                       <div class="media-body">
                                          <div><a href="#">Amanda Conlan</a></div>
                                          <small class="text-muted">about 2 hours ago</small> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="list-group-item">
                                    <div class="media">
                                       <span class="pull-left thumb-sm avatar"> <img src="images/a1.png" alt="..."> <i class="busy b-black bottom"></i> </span> 
                                       <div class="media-body">
                                          <div><a href="#">Dan Doorack</a></div>
                                          <small class="text-muted">3 days ago</small> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="list-group-item">
                                    <div class="media">
                                       <span class="pull-left thumb-sm avatar"> <img src="images/a0.png" alt="..."> <i class="away b-black bottom"></i> </span> 
                                       <div class="media-body">
                                          <div><a href="#">Lauren Taylor</a></div>
                                          <small class="text-muted">about 2 minutes ago</small> 
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </section>
                        </section>
                     </aside>
                     <!-- / side content --> 
                  </section>
                  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a> 
               </section>
            </section>
         </section>
      </section>
      <!-- Bootstrap --> <!-- App --> <script src="js/app.v1.js"></script> <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script> <script src="js/charts/sparkline/jquery.sparkline.min.js"></script> <script src="js/charts/flot/jquery.flot.min.js"></script> <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script> <script src="js/charts/flot/jquery.flot.spline.js"></script> <script src="js/charts/flot/jquery.flot.pie.min.js"></script> <script src="js/charts/flot/jquery.flot.resize.js"></script> <script src="js/charts/flot/jquery.flot.grow.js"></script> <script src="js/charts/flot/demo.js"></script> <script src="js/calendar/bootstrap_calendar.js"></script> <script src="js/calendar/demo.js"></script> <script src="js/sortable/jquery.sortable.js"></script> <script src="js/app.plugin.js"></script>
   </body>
</html>