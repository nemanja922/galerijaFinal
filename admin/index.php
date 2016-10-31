<?php include("includes/bootstrap.php"); ?>
<?php include("includes/header.php"); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            
        <!-- Brand and toggle get grouped for better mobile display -->
         




            <?php include("includes/top_nav.php") ?>






            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">



                <?php include("includes/side_nav.php") ?>




            </div>
            <!-- /.navbar-collapse -->

        </nav>

        <div id="page-wrapper">

            <?php include("includes/admin_content.php") ?>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
