<?php
//include auth.php file on all secure pages
require('config/config.php');
include("auth.php");

?>
    <!DOCTYPE html>

    <html lang="en">

    <head>
        <?php include 'nav/meta.php'; ?>
        <?php include 'nav/css.php'; ?>
    </head>

    <body id="page-top">
        <div class="wrapper">
            <?php include 'nav/sidebar.php'; ?>
            <!-- Page Content Holder -->
            <div id="content">
                <?php include 'nav/home-nav.php'; ?>
                <?php include 'nav/upper-content.php'; ?>
            </div>
        </div>
        <div class="overlay"></div>
        <?php include 'nav/script.php'; ?>
    </body>

    </html>