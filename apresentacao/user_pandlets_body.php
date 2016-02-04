<section id="content">
                  <section class="hbox stretch">
                     <section>
                        <section class="vbox">
                           <section class="scrollable padder">
                              <section class="row m-b-md">
                                 <div class="col-sm-6">
                                    <h3 class="m-b-xs text-black">Pandlets</h3>
                                    <small>Hello, <?php echo $_SESSION['username']; ?></small>
                                 </div>
                              </section>
                              <div class="row">
                                
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
                              <div class="row bg-light dk m-b">
                                
                                 <div class="col-md-6">
                                    <section>
                                       <header class="font-bold padder-v">
                                         
                                         <h1>Pandlets Information </h1>
										   <style>

											   table {
												   width:130%;
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
											   table#t01 th	{
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
										  
										  
										  
                                       </header>
                                       
                                    </section>
                                 </div>
                              </div>
							  
							  <div class="row bg-light dk m-b">
                                
                                 <div class="col-md-6">
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
					<h1>Pandlets Location </h1>
					<div id="map" style="width: 500px; height: 300px"></div>
					</body>
			
				        
                                    </section>
                                 </div>
                              </div>
                              <div class="row">
							 
								
                            
                              </div>
                           </section>
                        </section>
                     </section>
                     <!-- side content --> 
                     
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