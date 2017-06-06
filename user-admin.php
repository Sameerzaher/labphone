<?php
	include_once "header.php";
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-right">
                            משתמשים
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading text-right">
                                <h3 class="panel-title text-right"><i class="fa fa-clock-o fa-fw"></i> משתמשים רשומים</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
									<?php
										$sql = "select * from tbluser";
										$stmt = $pdo->query($sql);
										while ($row = $stmt->fetch()) {
										?>
											<a href="#" class="list-group-item text-right" style="direction:rtl;">
												<?php print $row['fname']." ".$row['lname'];?>
												<br/>
												טלפון: <?php print $row['phone'];?>, דואר-אלקטרוני: <?php print $row['email'];?>, כתובת: <?php print $row['address'];?>
											</a>
										<?php
										};
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
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
