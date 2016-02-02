<section id="content">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">
                    <section class="row m-b-md">
                        <div class="col-sm-6">
                            <h3 class="m-b-xs text-black">Graph</h3>
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
									<h1>Air Humidity</h1>


                                    <?php
                                    include_once ("common/query.php");
                                    $query = new query ();
									$pandlet='A1';
									//echo $pandlet;
                                   $result = $query->getMaxMinHumAir($pandlet);
                                    // var_dump($result);
                                    ?>


                                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>


                                    <script type="text/javascript">
											var function1 = function () {
                                            var chart = new CanvasJS.Chart("chartContainer", {
                                                theme: "theme1",//theme2
                                                backgroundColor: "#E4EEF2",
                                                title:{
                                                    text: "Humidity of the Air registered in the last 30 days",
                                                    fontColor: "#2f4f4f",
                                                    fontSize: 20,
                                                    padding: 10,
                                                    margin: 15,
                                                    fontWeight: "bold"

                                                },
                                                animationEnabled: true,   // change to true
                                                legend: {
                                                    cursor:"pointer",
                                                    itemclick : function(e) {
                                                        if (typeof (e.dataSeries.visible) == "undefined" || e.dataSeries.visible) {
                                                            e.dataSeries.visible = false;
                                                        }
                                                        else {
                                                            e.dataSeries.visible = true;
                                                        }
                                                        chart.render();
														
                                                    }
                                                },
                                                axisY: {
                                                    title: "Humidity - kg/m3 (SI)",
                                                    titleFontFamily: "Helvetica",
                                                    labelFontSize: 13,
                                                    titleFontSize: 14
                                                },

                                                axisX: {
                                                    title: "Days",
                                                    titleFontFamily: "Helvetica",
                                                    labelFontSize: 13,
                                                    titleFontSize: 14
                                                },

                                                toolTip: {
                                                    shared: true,
                                                    content: function(e){
                                                        var str = '';
                                                        var des = 0 ;
                                                        var str3;
                                                        var str2 ;
                                                        var day=0;
                                                        var j=1;
                                                        for (var i = 0; i < e.entries.length; i++){
                                                            var  str1 = "<span style= 'color:"+e.entries[i].dataSeries.color + "'> " + e.entries[i].dataSeries.name + "</span>: <strong>"+  e.entries[i].dataPoint.y + "</strong> <br/>" ;
                                                            des =  e.entries[i].dataPoint.y - des;
                                                            str = str.concat(str1);


                                                        }
                                                        str2 = "<span style = 'color:#000000 ; '><strong>"+e.entries[0].dataPoint.label + "</strong></span><br/>";
                                                        str3 = "<span style = 'color:#003300 '>Maximum temperature variation: </span><strong>" + -des + "</strong><br/>";

                                                        return (str2.concat(str)).concat(str3);
                                                    }

                                                },
                                                data: [
                                                    {
                                                        type: "spline",
                                                        showInLegend: true,
                                                        name: "Maximum",
                                                        color: "#009900  ",
                                                        dataPoints:  [


                                                            <?php

                                                            for($i=1; $row = pg_fetch_row($result); $i++) {
                                                                echo "{ y:$row[2]},";
                                                            }
															clearstatcache();
                                                            ?>

                                                        ]
                                                    },
                                                    {
                                                        type: "spline",
                                                        showInLegend: true,
                                                        name: "Minimum",

                                                        color: "#99CC00 ",
                                                        dataPoints: [

                                                            <?php
                                                            include_once ("common/query.php");
                                                            $query = new query ();
															$pandlet='A1';
                                                            $result = $query->getMaxMinHumAir($pandlet);

                                                            for($j=1; $row = pg_fetch_row($result); $j++){
                                                                echo "{ y:$row[3], label:$j},";}
																clearstatcache();
                                                            ?>

                                                        ]
                                                    },


                                                ]
                                            });
                                            chart.render();
	                                   }
										
                                    </script>

                                </header>

                            </section>
                        </div>

                    </div>
					<div class="row bg-light dk m-b">

                        <div class="col-md-6">
                            <section>
                                <header class="font-bold padder-v">
									<h1>Soil Humidity</h1>


                                    <?php
                                    include_once ("common/query.php");
                                    $query = new query ();
									$pandlet='A1';
									//echo $pandlet;
                                   $result = $query->getMaxMinHumSoil($pandlet);
                                    // var_dump($result);
                                    ?>


                                    <div id="chartContainer2" style="height: 300px; width: 100%;"></div>


                                    <script type="text/javascript">
											var function2 = function () {
                                            var chart2 = new CanvasJS.Chart("chartContainer2", {
                                                theme: "theme1",//theme2
                                                backgroundColor: "#E4EEF2",
                                                title:{
                                                    text: "Humidity of the Soil register in the last 30 days",
                                                    fontColor: "#2f4f4f",
                                                    fontSize: 20,
                                                    padding: 10,
                                                    margin: 15,
                                                    fontWeight: "bold"

                                                },
                                                animationEnabled: true,   // change to true
                                                legend: {
                                                    cursor:"pointer",
                                                    itemclick : function(e) {
                                                        if (typeof (e.dataSeries.visible) == "undefined" || e.dataSeries.visible) {
                                                            e.dataSeries.visible = false;
                                                        }
                                                        else {
                                                            e.dataSeries.visible = true;
                                                        }
                                                        chart2.render();
														
                                                    }
                                                },
                                                axisY: {
                                                    title: "Humidity - kg/m3 (SI)",
                                                    titleFontFamily: "Helvetica",
                                                    labelFontSize: 13,
                                                    titleFontSize: 14
                                                },

                                                axisX: {
                                                    title: "Days",
                                                    titleFontFamily: "Helvetica",
                                                    labelFontSize: 13,
                                                    titleFontSize: 14
                                                },

                                                toolTip: {
                                                    shared: true,
                                                    content: function(e){
                                                        var str = '';
                                                        var des = 0 ;
                                                        var str3;
                                                        var str2 ;
                                                        var day=0;
                                                        var j=1;
                                                        for (var i = 0; i < e.entries.length; i++){
                                                            var  str1 = "<span style= 'color:"+e.entries[i].dataSeries.color + "'> " + e.entries[i].dataSeries.name + "</span>: <strong>"+  e.entries[i].dataPoint.y + "</strong> <br/>" ;
                                                            des =  e.entries[i].dataPoint.y - des;
                                                            str = str.concat(str1);


                                                        }
                                                        str2 = "<span style = 'color:#000000 ; '><strong>"+e.entries[0].dataPoint.label + "</strong></span><br/>";
                                                        str3 = "<span style = 'color:#003300 '>Maximum temperature variation: </span><strong>" + -des + "</strong><br/>";

                                                        return (str2.concat(str)).concat(str3);
                                                    }

                                                },
                                                data: [
                                                    {
                                                        type: "spline",
                                                        showInLegend: true,
                                                        name: "Maximum",
                                                        color: "#009900  ",
                                                        dataPoints:  [


                                                            <?php

                                                            for($i=1; $row = pg_fetch_row($result); $i++) {
                                                                echo "{ y:$row[2]},";
                                                            }
															clearstatcache();
                                                            ?>

                                                        ]
                                                    },
                                                    {
                                                        type: "spline",
                                                        showInLegend: true,
                                                        name: "Minimum",

                                                        color: "#99CC00 ",
                                                        dataPoints: [

                                                            <?php
                                                            include_once ("common/query.php");
                                                            $query = new query ();
															$pandlet='A1';
                                                            $result = $query->getMaxMinHumSoil($pandlet);

                                                            for($j=1; $row = pg_fetch_row($result); $j++){
                                                                echo "{ y:$row[3], label:$j},";}
																clearstatcache();
                                                            ?>

                                                        ]
                                                    },


                                                ]
                                            });
                                            chart2.render();
	                                   }
										
                                    </script>

                                </header>

                            </section>
                        </div>

                    </div>
					
					<div class="row bg-light dk m-b">

                        <div class="col-md-6">
                            <section>
                                <header class="font-bold padder-v">
								<h1>Air Temperature</h1>



                                    <?php
                                    include_once ("common/query.php");
                                    $query = new query ();
									$pandlet='A1';
                                    $result = $query->getMaxMinTempAir($pandlet);

                                    ?>


                                    <div id="chartContainer3" style="height: 300px; width: 100%;"></div>


                                    <script type="text/javascript">
                                        var function3 = function () {
                                            var chart3 = new CanvasJS.Chart("chartContainer3", {
                                                theme: "theme1",//theme2
                                                backgroundColor: "#E4EEF2",
                                                title:{
                                                    text: "Temperature of the air register in the last 30 days",
                                                    fontColor: "#2f4f4f",
                                                    fontSize: 20,
                                                    padding: 10,
                                                    margin: 15,
                                                    fontWeight: "bold"

                                                },
                                                animationEnabled: true,   // change to true
                                                legend: {
                                                    cursor:"pointer",
                                                    itemclick : function(e) {
                                                        if (typeof (e.dataSeries.visible) == "undefined" || e.dataSeries.visible) {
                                                            e.dataSeries.visible = false;
                                                        }
                                                        else {
                                                            e.dataSeries.visible = true;
                                                        }
                                                        chart3.render();
                                                    }
                                                },
                                                axisY: {
                                                    title: "Temperature - Celsius",
                                                    titleFontFamily: "Helvetica",
                                                    labelFontSize: 13,
                                                    titleFontSize: 14
                                                },

                                                axisX: {
                                                    title: "Days",
                                                    titleFontFamily: "Helvetica",
                                                    labelFontSize: 13,
                                                    titleFontSize: 14
                                                },

                                                toolTip: {
                                                    shared: true,
                                                    content: function(e){
                                                        var str = '';
                                                        var des = 0 ;
                                                        var str3;
                                                        var str2 ;
                                                        var day=0;
                                                        var j=1;
                                                        for (var i = 0; i < e.entries.length; i++){
                                                            var  str1 = "<span style= 'color:"+e.entries[i].dataSeries.color + "'> " + e.entries[i].dataSeries.name + "</span>: <strong>"+  e.entries[i].dataPoint.y + "</strong> <br/>" ;
                                                            des =  e.entries[i].dataPoint.y - des;
                                                            str = str.concat(str1);


                                                        }
                                                        str2 = "<span style = 'color:#000000 ; '><strong>"+e.entries[0].dataPoint.label + "</strong></span><br/>";
                                                        str3 = "<span style = 'color:#003300 '>Maximum temperature variation: </span><strong>" + -des + "</strong><br/>";

                                                        return (str2.concat(str)).concat(str3);
                                                    }

                                                },
                                                data: [
                                                    {
                                                        type: "spline",
                                                        showInLegend: true,
                                                        name: "Maximum",
                                                        color: "#006666  ",
                                                        dataPoints:  [


                                                            <?php

                                                                for($i=1; $row = pg_fetch_row($result); $i++)
                                                                echo "{ y:$row[2], label: $i},"
                                                            ?>

                                                        ]
                                                    },
                                                    {
                                                        type: "spline",
                                                        showInLegend: true,
                                                        name: "Minimum",
                                                        color: "#6699FF ",
                                                        dataPoints: [

                                                            <?php
                                                               include_once ("common/query.php");
                                                               $query = new query ();
															   $pandlet = "A1";
                                                               $result = $query->getMaxMinTempAir($pandlet);

                                                                for($j=1; $row = pg_fetch_row($result); $j++)
                                                                    echo "{ y:$row[3], label:$j},"
                                                            ?>

                                                        ]
                                                    },


                                                ]
                                            });
                                            chart3.render();
                                        }
                                    </script>

                                </header>

                            </section>
                        </div>
                    </div>
					
					<div class="row bg-light dk m-b">

                        <div class="col-md-6">
                            <section>
                                <header class="font-bold padder-v">
								<h1>Soil Temperature</h1>


                                    <?php
                                    include_once ("common/query.php");
                                    $query = new query ();
									$pandlet='A1';
									
                                    $result = $query->getMaxMinTempSoil($pandlet);
                                    ?>


                                    <div id="chartContainer4" style="height: 300px; width: 100%;"></div>


                                    <script type="text/javascript">
                                        window.onload  = function () {
											function1();
											function2();
											function3();
                                            var chart4 = new CanvasJS.Chart("chartContainer4", {
                                                theme: "theme1",//theme2
                                                backgroundColor: "#E4EEF2",

                                                title:{
                                                    text: "Temperature of the soil register in the last 30 days",
                                                    fontColor: "#2f4f4f",
                                                    fontSize: 20,
                                                    padding: 10,
                                                    margin: 15,
                                                    fontWeight: "bold"

                                                },
                                                animationEnabled: true,   // change to true
                                                legend: {
                                                    cursor:"pointer",
                                                    itemclick : function(e) {
                                                        if (typeof (e.dataSeries.visible) == "undefined" || e.dataSeries.visible) {
                                                            e.dataSeries.visible = false;
                                                        }
                                                        else {
                                                            e.dataSeries.visible = true;
                                                        }
                                                        chart4.render();
                                                    }
                                                },
                                                axisY: {
                                                    title: "Temperature - Celsius",
                                                    titleFontFamily: "Helvetica",
                                                    labelFontSize: 13,
                                                    titleFontSize: 14
                                                },

                                                axisX: {
                                                    title: "Days",
                                                    titleFontFamily: "Helvetica",
                                                    labelFontSize: 13,
                                                    titleFontSize: 14
                                                },

                                                toolTip: {
                                                    shared: true,
                                                    content: function(e){
                                                        var str = '';
                                                        var des = 0 ;
                                                        var str3;
                                                        var str2 ;
                                                        var day=0;
                                                        var j=1;
                                                        for (var i = 0; i < e.entries.length; i++){
                                                            var  str1 = "<span style= 'color:"+e.entries[i].dataSeries.color + "'> " + e.entries[i].dataSeries.name + "</span>: <strong>"+  e.entries[i].dataPoint.y + "</strong> <br/>" ;
                                                            des =  e.entries[i].dataPoint.y - des;
                                                            str = str.concat(str1);


                                                        }
                                                        str2 = "<span style = 'color:#000000 ; '><strong>"+e.entries[0].dataPoint.label + "</strong></span><br/>";
                                                        str3 = "<span style = 'color:#003300 '>Maximum temperature variation: </span><strong>" + -des + "</strong><br/>";

                                                        return (str2.concat(str)).concat(str3);
                                                    }

                                                },
                                                data: [
                                                    {
                                                        type: "spline",
                                                        showInLegend: true,
                                                        name: "Maximum",
                                                        color: "#990000  ",
                                                        dataPoints:  [


                                                            <?php

                                                            for($i=1; $row = pg_fetch_row($result); $i++)
                                                                echo "{ y:$row[2], label: $i},"
                                                            ?>

                                                        ]
                                                    },
                                                    {
                                                        type: "spline",
                                                        showInLegend: true,
                                                        name: "Minimum",
                                                        color: "#FF9900 ",
                                                        dataPoints: [

                                                            <?php

                                                             include_once ("common/query.php");
                                                             $query = new query ();
															 $pandlet='A1';
                                                             $result = $query->getMaxMinTempSoil($pandlet);

                                                            for($j=1; $row = pg_fetch_row($result); $j++)
                                                                echo "{ y:$row[3], label: $j},"
                                                            ?>

                                                        ]
                                                    },


                                                ]
                                            });
                                            chart4.render();
                                        }
                                    </script>

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
<!-- Bootstrap --> <!-- App --> <script src="js/app.v1.js"></script> <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script> <script src="js/charts/sparkline/jquery.sparkline.min.js"></script> <script src="js/charts/flot/jquery.flot.min.js"></script> <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script> <script src="js/charts/flot/jquery.flot.spline.js"></script> <script src="js/charts/flot/jquery.flot.pie.min.js"></script> <script src="js/charts/flot/jquery.flot.resize.js"></script> <script src="js/charts/flot/jquery.flot.grow.js"></script> <script src="js/charts/flot/demo.js"></script> <script src="js/calendar/bootstrap_calendar.js"></script> <script src="js/calendar/demo.js"></script> <script src="js/sortable/jquery.sortable.js"></script> <script src="js/app.plugin.js"></script>
</body>
</html>



