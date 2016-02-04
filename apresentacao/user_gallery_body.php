<section id="content">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">
                    <section class="row m-b-md">
                        <div class="col-sm-6">
                            <h3 class="m-b-xs text-black">Gallery</h3>
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


                              
																	  

                            
							<head>

							<style type="text/css">
							body {
								background: #222;
								color: #eee;
								margin-top: 20px;
								font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
							}
							a {
								color: #FFF;
							}
							a:hover {
								color: yellow;
								text-decoration: underline;
							}
							.thumbnails img {
								height: 80px;
								border: 4px solid #555;
								padding: 1px;
								margin: 0 10px 10px 0;
							}

							.thumbnails img:hover {
								border: 4px solid #00ccff;
								cursor:pointer;
							}

							.preview img {
								border: 4px solid #444;
								padding:5pxpx;
								width: 800px;
							}
							</style>
							
							         <?php
                                    include_once ("common/query.php");
                                    $query = new query ();
                                    $result = $query->getImages();
                                    ?>
									
								


							</head>
							<body>
							
							<script>if (Galleria) { $("body").text('Galleria works') }</script>
							
							<? if (sizeof($result) > 0) :?>

							<div class="gallery" align="center">
								

								<br />

								<div class="thumbnails">
								
									<?php
										$end = sizeof($result);
										for($i = 0; $i < $end; $i++){
											echo "<img name=\"img".$i."\" onmouseover=\"preview.src='".$result[$i]."'\" src=\"".$result[$i]."\">";
										}
									?>
							
									</div><br/>
								</div><br/>

								<div class="preview" align="center">
									<img name="preview" src="<?php echo $result[0] ?>" alt=""/>
								</div>
								
							<? else : ?>
								<p>Não há imagens</p>
							<? endif; ?>

							</div>


							</body>
							
                                </header>

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
<!-- Bootstrap --> <!-- App --> <script src="js/app.v1.js"></script> <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script> <script src="js/charts/sparkline/jquery.sparkline.min.js"></script> <script src="js/charts/flot/jquery.flot.min.js"></script> <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script> <script src="js/charts/flot/jquery.flot.spline.js"></script> <script src="js/charts/flot/jquery.flot.pie.min.js"></script> <script src="js/charts/flot/jquery.flot.resize.js"></script> <script src="js/charts/flot/jquery.flot.grow.js"></script> <script src="js/charts/flot/demo.js"></script> <script src="js/calendar/bootstrap_calendar.js"></script> <script src="js/calendar/demo.js"></script> <script src="js/sortable/jquery.sortable.js"></script> <script src="js/app.plugin.js"></script> <script src="js/galleria/galleria-1.4.2.min.js"></script>
</body>
</html>

