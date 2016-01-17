<?php
?>

<html lang="en" class="app">
   <head>
      <meta charset="utf-8" />
      <title>SmartVine</title>
      <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
      <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
      <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
   </head>
   <body class="" >
      <section class="vbox">
         <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
            <div class="navbar-header aside-md dk"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a> <a href="#" class="navbar-brand"> <img src="images/logo.png" class="m-r-sm" alt="scale"> <span class="hidden-nav-xs">SmartVine</span> </a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a> </div>
            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/a0.png" alt="..."> </span> <?php echo $_SESSION['username']; ?> <b class="caret"></b> </a> 
                  <ul class="dropdown-menu animated fadeInRight">
                     <li> <a href="profile.html">Profile</a> </li>
                     <li> <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a> </li>
                     <li> <a href="docs.html">Help</a> </li>
                     <li class="divider"></li>
                     <li> <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a> </li>
                  </ul>
               </li>
            </ul>
         </header>