<?php
//sql database

include ('sql/mainSql.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'nav/meta.php'; ?>
        <?php include 'nav/css.php'; ?>
        <!-- Dashboard CSS only-->
        <link href="css/static.css" rel="stylesheet" type='text/css' />
        <link href="css/dashboards.css" rel="stylesheet" type='text/css' />
    </head>
    <body id="page-top" class="keen-dashboard">
        <div class="wrapper">
            <!-- Page Content Holder -->
            <div id="content">
                <?php include 'nav/nav.php'; ?>
                
                <!--Each Settlement goes there -->
                <?php include './views/Dashboard/uk/Dashboard_display_uk.php'; ?>
                <?php include 'nav/footer.php'; ?>
            </div>
        </div>
        <?php include 'nav/script.php'; ?>

        <!-- Chart/Loader.js Google -->
        <?php include 'chart/uk/chart-script-uk.php'; ?>
    </body>
</html>
