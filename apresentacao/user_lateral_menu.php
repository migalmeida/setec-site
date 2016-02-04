<?php
?>


<section>
            <section class="hbox stretch">
               <!-- .aside --> 
               <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
                  <section class="vbox">
                     <section class="w-f scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                           <div class="clearfix wrapper dk nav-user hidden-xs">
                              <div class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb avatar pull-left m-r"> <img src="images/a0.png" class="dker" alt="..."> <i class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-t-xs"> <strong class="font-bold text-lt"><?php echo $_SESSION['username']; ?></strong> <b class="caret"></b> </span> <span class="text-muted text-xs block"><?php echo $_SESSION['tipo']; ?></span> </span> </a> 
                                 <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    
                                    <li> <a href="logout.php" >Logout</a> </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- nav --> 
                           <nav class="nav-primary hidden-xs">
                              <ul class="nav nav-main" data-ride="collapse">
                                 <li class="auto"> <a href="user_index.php" class="auto"> <i class="i i-stack icon"> </i> <span class="font-bold">Overview</span> </a> </li>
                                 <li class="">
                                    <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span>  <i class="fa fa-map-marker icon"> </i> <span class="font-bold">Pandlets</span> </a>
                                    <ul class="nav dk" style="display: none;">
                                       <li> <a href="user_pandlets_charts_A.php" class="auto"> <i class="i i-dot"></i> <span>Pandlets A</span> </a> </li>
                                       <li> <a href="user_pandlets_charts_B.php" class="auto"> <i class="i i-dot"></i> <span>Pandlets B</span> </a> </li>
                                       <li> <a href="user_pandlets_charts_C.php" class="auto"> <i class="i i-dot"></i> <span> Pandlets C</span> </a> </li>
                                    </ul>
                                 </li>

                                 <li class="">
                                    <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span>  <i class="i i-graph icon"> </i> <span class="font-bold">Charts</span> </a>
                                    <ul class="nav dk" style="display: none;">
                                       <li> <a href="user_charts_temp_air.php" class="auto"> <i class="i i-dot"></i> <span>Temperature of the air</span> </a> </li>
                                       <li> <a href="user_charts_temp_soil.php" class="auto"> <i class="i i-dot"></i> <span>Temperature of the soil</span> </a> </li>
                                       <li> <a href="user_charts_hum_air.php" class="auto"> <i class="i i-dot"></i> <span> Humidity of the air</span> </a> </li>
                                       <li> <a href="user_charts_hum_soil.php" class="auto"> <i class="i i-dot"></i> <span> Humidity of the soil</span> </a> </li>

                                    </ul>
                                 </li>
                                 <li>
                                    <a href="user_gallery.php" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-grid2 icon"> </i> <span class="font-bold">Gallery</span> </a> 
                                 </li>                              
                              </ul>
                           </nav>
                           <!-- / nav --> 
                        </div>
                     </section>
                     <footer class="footer hidden-xs no-padder text-center-nav-xs"> <a href="logout.php" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a> <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a> </footer>
                  </section>
               </aside>