<!DOCTYPE html>
<?php
require_once 'includes/database.php'
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>The Weather Remote Station</title>
        <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/Styles.css" rel="stylesheet" />

  </head>
  <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">The Weather Remote Station</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">The Experiment</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="real_time_data.php">Real Time Data</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="https://www.youtube.com/">Youtube Videos</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                        <div class="container-fluid">
                            <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                        </div>
                </nav>
                <!-- Page content-->
                <div style="text-align:center" class="container-fluid">
