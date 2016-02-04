<?php  
?>


<section id="content">
                  <section class="hbox stretch">
                     <section>
                        <section class="vbox">
                           <section class="scrollable padder">
                              <section class="row m-b-md ">
                                 <div class="col-sm-6">
                                    <h3 class="m-b-xs text-black" style= "color: #672639; font-size:20px; font-family: inherit"><strong>Welcome,</strong></h3>
                                 </div>
                              </section>
							  <!---- Primeiro quadrito ---->
                              <!----<div class="row">
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
                              </div>---->
			      <!-- PANDLETS MAP -->
				  
				  
				  
				  
				   <div class="row bg-light dk m-b">
                                
                                 <div class="col-md-7">
                                    <section>
                                       <header class="font-bold padder-v">
                                        
    
						<script src="https://maps.googleapis.com/maps/api/js"></script>
						  <script> 
						    

						    function load() {
						      var map = new google.maps.Map(document.getElementById("map"), {
							center: new google.maps.LatLng( 41.17798272051,  -8.59524071216583),
							zoom: 15,
							mapTypeId: 'roadmap'
						      });
								var infowindow = new google.maps.InfoWindow;
						      // Change this depending on the name of your PHP file
						      downloadUrl("apresentacao/mapa_bd.php", function(data) {
							var xml = data.responseXML;
							var markers = xml.documentElement.getElementsByTagName("pandlets");
							for (var i = 0; i < markers.length ; i++) {
							  var id = markers[i].getAttribute("id");
							  var username = markers[i].getAttribute("username");
							  var name = markers[i].getAttribute("name");
							  var point = new google.maps.LatLng(
							      parseFloat(markers[i].getAttribute("lat")),
							      parseFloat(markers[i].getAttribute("lng")));
							  var battery = markers[i].getAttribute("battery");
							
						       // var contentString = name;

							  
									
								var marker = new google.maps.Marker({
							    position: point
							    //title: username         
							  });

									
							bindInfoWindow(marker, map, infowindow, name);  
							marker.setMap(map);
						    
							
								
							    
							    
							}
							});
							
							
							  
						    }
							

							function bindInfoWindow(marker, map, infoWindow, html) {
							  google.maps.event.addListener(marker, 'mouseover', function() {
								infoWindow.setContent(html);
								infoWindow.open(map, marker);
							  });
							}
							  
							  
						    function downloadUrl(url, callback) {
						      var request = window.ActiveXObject ?
							  new ActiveXObject('Microsoft.XMLHTTP') :
							  new XMLHttpRequest;

						      request.onreadystatechange = function() {
							if (request.readyState == 4) {
							  request.onreadystatechange = doNothing;
							  callback(request, request.status);
							}
						      };

						      request.open('GET', url, true);
						      request.send(null);
						    }

						    function doNothing() {}


						  </script>
											      
					    
					   </header>
					  <body onload="load()">
					<h4 style= "margin-top: 0px">Pandlets Location </h4>
           
					<div id="map" style="width: 650px; height: 400px"></div>
               
					</body>
			

                                    </section>

                                 </div>
                                                                   <div class="col-md-5" style="    padding-left: 3%;
    padding-top: 2%;">
                  <div class="container123 clearfix" style="margin-bottom:18px;">
    <p class="location"></p>
    <p class="temperature"></p>
    <div class="climate_bg"><img src="images/Sun.svg"></div>
    <div class="info_bg">
      <img class="dropicon" src="images/Droplet.svg">
      <p class="humidity"></p>

      <img class="windicon" src="images/Wind.svg">
      <div class="windspeed"></div>
    </div>
  </div>
  <section class="panel b-light" style="width:398px;">
                                       <header class="panel-heading"><strong>Calendar</strong></header>
                                       <div id="calendar" class="bg-light dker m-l-n-xxs m-r-n-xxs"></div>
                                      
                                    </section>
                 </div>
                              </div>
                              <div>
                              <style>

                         table {
                           width:107%;
                           font-size:14px;
                           font-family:Helvetica;
                         }
                         table, th, td {

                           border-collapse: collapse;
                         }
                         th, td {
                           padding: 7px;
                           text-align: center;
                         }
                         table#t01 tr:nth-child(even) {
                           background-color: #e9edf4;
                         }
                         table#t01 tr:nth-child(odd) {
                           background-color:#B2ACAC;
                         }
                         table#t01 th {
                           background-color: #976565;
                           color: white;
                         }
                       </style>
                      
                       <table id="t01">
                      <tr>
                      <th>ID</th>
                      <th>Username</th>   
                      <th>Name</th>
                      <th>Latitude</th>
                      <th>Longitude</th>
                      <th>Status</th>
                      <th>Webcam</th>
                      </tr>
                      <?

                    include("phpsqlajax_dbinfo.php");

                    $conn_string = "host=$host dbname=$database user=$username password=$password" ;
                    $conn = pg_connect($conn_string);  
                    if(!$conn){
                      die ("Could not open connection to database server");
                    }
                    $query = "SELECT * FROM setec.pandlets";
                    $result = pg_query($conn, $query);
                    if(!$result){
                      die('Invalid query : ' . pg_last_error());
                    }



                    $i = 0;


                    while ($row = pg_fetch_row($result)) 
                    {
                      echo '<tr>';
                      $count = count($row);
                      $y = 0;
                      while ($y < $count)
                      {
                        
                        $c_row = current($row);
                        if($c_row == 'f' && $y==5)
                        {
                          echo '<td style="text-align:center;">' . 'Off'. '</td>';
                        }
                        else if($c_row == 't' && $y==5)
                        {
                          echo '<td style="text-align:center;">' . 'On'. '</td>';
                        }
                        else if($c_row == 'f' && $y==6)
                        {
                          echo '<td style="text-align:center;">' . 'No'. '</td>';
                        }
                        else if($c_row == 't' && $y==6)
                        {
                          echo '<td style="text-align:center;">' . 'Yes'. '</td>';
                        }
                        
                      else{
                        echo '<td style="text-align:center;">' . $c_row . '</td>';
                      }
                        
                        next($row);
                        $y = $y + 1;
                      }
                      echo '</tr>';
                      $i = $i + 1;
                    }
                    pg_free_result($result);

                    echo '</table>';
                    ?>
                              </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js">  </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js">  </script>
   <script type="text/javascript">
   $.simpleWeather({
        location:"Oporto",
        woied:"",
        unit:'c',
        success : function(weather){
            city = weather.city;
            temp = weather.temp +'&deg';
            wcode = '<img class="weathericon" src="images/weathericons/'+ weather.code+'.svg">';
            wind = '<p>'+weather.wind.speed + '</p><p>'+weather.units.speed+'</p>';
            humidity = weather.humidity + '%';

            $(".location").text(city);
            $(".temperature").html(temp);
            $(".climate_bg").html(wcode);
            $(".windspeed").html(wind);
            $(".humidity").html(humidity);
        },
        error: function(error){
            $(".error").html('<p>'+ error+ '</p>')
        }
    });
   </script>
							 
					
			      <!-- Calendar -->
                              <div class="row">
                                 <!--<div class="col-md-4">
								 
                                    <section class="panel b-a">
                                       <div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Messages</a> </div>
                                       <ul class="list-group list-group-lg no-bg auto"> <a href="#" class="list-group-item clearfix"> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a4.png" alt="..."> <i class="on b-white bottom"></i> </span> <span class="clear"> <span>Chris Fox</span> <small class="text-muted clear text-ellipsis">What's up, buddy</small> </span> </a> <a href="#" class="list-group-item clearfix"> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a5.png" alt="..."> <i class="on b-white bottom"></i> </span> <span class="clear"> <span>Amanda Conlan</span> <small class="text-muted clear text-ellipsis">Come online and we need talk about the plans that we have discussed</small> </span> </a> <a href="#" class="list-group-item clearfix"> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a6.png" alt="..."> <i class="busy b-white bottom"></i> </span> <span class="clear"> <span>Dan Doorack</span> <small class="text-muted clear text-ellipsis">Hey, Some good news</small> </span> </a> <a href="#" class="list-group-item clearfix"> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a7.png" alt="..."> <i class="away b-white bottom"></i> </span> <span class="clear"> <span>Lauren Taylor</span> <small class="text-muted clear text-ellipsis">Nice to talk with you.</small> </span> </a> </ul>
                                       <div class="clearfix panel-footer">
                                          <div class="input-group"> <input type="text" class="form-control input-sm btn-rounded" placeholder="Search"> <span class="input-group-btn"> <button type="submit" class="btn btn-default btn-sm btn-rounded"><i class="fa fa-search"></i></button> </span> </div>
                                       </div>
                                    </section>
                                 </div>-->
                                 <div class="col-md-4">
                                    
                                 </div>
                              </div>
                           </section>
                        </section>
                     </section>
                     <!-- side content --> 
					 <!--
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
                     </aside> -->
                     <!-- / side content --> 
                  </section>
                  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a> 
               </section>
            </section>
         </section>
      </section>
      <!-- Bootstrap --> <!-- App --> <script src="js/app.v1.js"></script> <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script> <script src="js/charts/sparkline/jquery.sparkline.min.js"></script> <script src="js/charts/flot/jquery.flot.min.js"></script> <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script> <script src="js/charts/flot/jquery.flot.spline.js"></script> <script src="js/charts/flot/jquery.flot.pie.min.js"></script> <script src="js/charts/flot/jquery.flot.resize.js"></script> <script src="js/charts/flot/jquery.flot.grow.js"></script>  <script src="js/calendar/bootstrap_calendar.js"></script> <script src="js/calendar/demo.js"></script> <script src="js/sortable/jquery.sortable.js"></script> <script src="js/app.plugin.js"></script>
   </body>
</html>