<section id="content">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">
                    <section class="row m-b-md">
                        <div class="col-sm-6">
                            <h3 class="m-b-xs text-black" style= "color: #672639; font-size:20px; font-family: inherit"><strong>Pandlet B -</strong> Data overview from the last 30 days </h3>
                        </div>
                    </section>
<div class="row bg-light dk m-b">
   <div class="col-md-6 dker">
      <section>
         <header class="font-bold padder-v" style= "text-align: center; font-family: inherit;">
            Air Humidity
         </header>
         <div class="panel-body">
            <div id="flot-sp1ine-air-humi" style="height: 210px; padding: 0px; position: relative;">
            </div>
         </div>
         <div class="row text-center no-gutter">
         </div>
      </section>
   </div>
   <div class="col-md-6">
      <section>
         <header class="font-bold padder-v" style= "text-align: center; font-family: inherit;">
            Soil Humidity
         </header>
         <div class="panel-body">
            <div id="flot-sp1ine-soil-humi" style="height: 210px; padding: 0px; position: relative;">
            </div>
         </div>
         <div class="row text-center no-gutter">
         </div>
      </section>
   </div>
</div>
<div class="row bg-light dk m-b">
   <div class="col-md-6 dker">
      <section>
         <header class="font-bold padder-v" style= "text-align: center; font-family: inherit;">
            Air Temperature
         </header>
         <div class="panel-body">
            <div id="flot-sp1ine-air-temp" style="height: 210px; padding: 0px; position: relative;">
            </div>
         </div>
         <div class="row text-center no-gutter">
         </div>
      </section>
   </div>
   <div class="col-md-6">
      <section>
         <header class="font-bold padder-v" style= "text-align: center; font-family: inherit;">
            Soil Temperature
         </header>
         <div class="panel-body">
            <div id="flot-sp1ine-soil-temp" style="height: 210px; padding: 0px; position: relative;">
            </div>
         </div>
         <div class="row text-center no-gutter">
         </div>
      </section>
   </div>
</div>
<!-- Bootstrap --> <!-- App --> <script src="js/app.v1.js"></script> <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script> <script src="js/charts/sparkline/jquery.sparkline.min.js"></script> <script src="js/charts/flot/jquery.flot.min.js"></script> <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script> <script src="js/charts/flot/jquery.flot.spline.js"></script> <script src="js/charts/flot/jquery.flot.pie.min.js"></script> <script src="js/charts/flot/jquery.flot.resize.js"></script> <script src="js/charts/flot/jquery.flot.grow.js"></script>  <script src="js/calendar/bootstrap_calendar.js"></script> <script src="js/calendar/demo.js"></script> <script src="js/sortable/jquery.sortable.js"></script> <script src="js/app.plugin.js"></script>

 <?php
                                    include_once ("common/query.php");
                                    $query = new query ();
                                    $pandlet='B';
                                    //echo $pandlet;
                                   $result = $query->getMaxMinHumAir($pandlet);
                                    // var_dump($result);
                                    ?>

                                    <script type="text/javascript">
                                            var function1 = function () {
                                            var chart = new CanvasJS.Chart("flot-sp1ine-air-humi", {
                                                theme: "theme1",//theme2
                                                backgroundColor: '#e0e6f0',
                                            
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
                                                    title: "Temperature - Celsius",
                                                    titleFontFamily: "Helvetica",
                                                    labelFontSize: 13,
                                                    titleFontSize: 14,
                                                },

                                                axisX: {
                                                    title: "Days",
                                                    titleFontFamily: "Helvetica",
                                                    labelFontSize: 13,
                                                    titleFontSize: 14,
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
                                                        str2 = "";
                                                        str3 = "<span style = 'color:#003300 '>Maximum temperature variation: </span><strong>" + -des + "</strong><br/>";

                                                        return (str2.concat(str)).concat(str3);
                                                    }

                                                },
                                                data: [
                                                    {
                                                        type: "spline",
                                                        showInLegend: false,
                                                        name: "Maximum",
                                                        color: "#26124B  ",
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
                                                        showInLegend: false,
                                                        name: "Minimum",

                                                        color: "#6D54E7 ",
                                                        dataPoints: [

                                                            <?php
                                                            include_once ("common/query.php");
                                                            $query = new query ();
                                                            $pandlet='B';
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
                                              $(".canvasjs-chart-credit").remove();
                                       }
                                        
                                    </script>

                

                                    <?php
                                    include_once ("common/query.php");
                                    $query = new query ();
                                    $pandlet='B';
                                    //echo $pandlet;
                                   $result = $query->getMaxMinHumSoil($pandlet);
                                    // var_dump($result);
                                    ?>




                                    <script type="text/javascript">
                                        var function2 = function () {
                                            var chart2 = new CanvasJS.Chart("flot-sp1ine-soil-humi", {
                                                theme: "theme1",//theme2
                                                backgroundColor: "#e9edf4",
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
                                                        str2 = "";
                                                        str3 = "<span style = 'color:#003300 '>Maximum temperature variation: </span><strong>" + -des + "</strong><br/>";

                                                        return (str2.concat(str)).concat(str3);
                                                    }

                                                },
                                                data: [
                                                    {
                                                        type: "spline",
                                                        showInLegend: false,
                                                        name: "Maximum",
                                                        color: "#26124B ",
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
                                                        showInLegend: false,
                                                        name: "Minimum",

                                                        color: "#6D54E7 ",
                                                        dataPoints: [

                                                            <?php
                                                            include_once ("common/query.php");
                                                            $query = new query ();
                                                            $pandlet='B';
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
                                                                                          $(".canvasjs-chart-credit").remove();

                                       }
                                        
                                    </script>

                    <?php
                                    include_once ("common/query.php");
                                    $query = new query ();
                                    $pandlet='B';
                                    //echo $pandlet;
                                   $result = $query->getMaxMinTempSoil($pandlet);
                                    // var_dump($result);
                                    ?>




                                    <script type="text/javascript">
                                        var function3 = function () {
                                            var chart5 = new CanvasJS.Chart("flot-sp1ine-soil-temp", {
                                                theme: "theme1",//theme2
                                                backgroundColor: "#e9edf4",
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
                                                        str2 = "";
                                                        str3 = "<span style = 'color:#003300 '>Maximum temperature variation: </span><strong>" + -des + "</strong><br/>";

                                                        return (str2.concat(str)).concat(str3);
                                                    }

                                                },
                                                data: [
                                                    {
                                                        type: "spline",
                                                        showInLegend: false,
                                                        name: "Maximum",
                                                        color: "#26124B  ",
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
                                                        showInLegend: false,
                                                        name: "Minimum",

                                                        color: "#6D54E7 ",
                                                        dataPoints: [

                                                            <?php
                                                            include_once ("common/query.php");
                                                            $query = new query ();
                                                            $pandlet='B';
                                                            $result = $query->getMaxMinTempSoil($pandlet);

                                                            for($j=1; $row = pg_fetch_row($result); $j++){
                                                                echo "{ y:$row[3], label:$j},";}
                                                                clearstatcache();
                                                            ?>

                                                        ]
                                                    },


                                                ]
                                            });
                                            chart5.render();
                                                                                          $(".canvasjs-chart-credit").remove();

                                       }
                                        
                                    </script>

                    
                    

                                    <?php
                                    include_once ("common/query.php");
                                    $query = new query ();
                                    $pandlet='B';
                                    //echo $pandlet;
                                   $result = $query->getMaxMinTempAir($pandlet);
                                    // var_dump($result);
                                    ?>




                                    <script type="text/javascript">
                                        window.onload = function () {
                                            function1();
                                            function2();
                                            function3();
                                            var chart3 = new CanvasJS.Chart("flot-sp1ine-air-temp", {
                                                theme: "theme1",//theme2
                                                                                          backgroundColor: '#e0e6f0',

                                                
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
                                                        str2 = "";
                                                        str3 = "<span style = 'color:#003300 '>Maximum temperature variation: </span><strong>" + -des + "</strong><br/>";

                                                        return (str2.concat(str)).concat(str3);
                                                    }

                                                },
                                                data: [
                                                    {
                                                        type: "spline",
                                                        showInLegend: false,
                                                        name: "Maximum",
                                                        color: "#26124B  ",
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
                                                        showInLegend: false,
                                                        name: "Minimum",

                                                        color: "#6D54E7 ",
                                                        dataPoints: [

                                                            <?php
                                                            include_once ("common/query.php");
                                                            $query = new query ();
                                                            $pandlet='B';
                                                            $result = $query->getMaxMinTempAir($pandlet);

                                                            for($j=1; $row = pg_fetch_row($result); $j++){
                                                                echo "{ y:$row[3], label:$j},";}
                                                                clearstatcache();
                                                            ?>

                                                        ]
                                                    },


                                                ]
                                            });
                                            chart3.render();
                                                                                          $(".canvasjs-chart-credit").remove();

                                       }
                                        
                                    </script>

</body>
</html>
