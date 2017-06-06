<?php
	include_once "header.php";
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-right">
                            בקשות ליצירת קשר
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
                                <h3 class="panel-title text-right"><i class="fa fa-clock-o fa-fw"></i> הודעות אחרונות</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
									<?php
										$sql = "select * from tblcontact";
										$stmt = $pdo->query($sql);
										while ($row = $stmt->fetch()) {
										?>
											<a href="#" class="list-group-item text-right" style="direction:rtl;">
												<span class="badge pull-left"><?php print $row['incoming_date'];?></span>
												יצירת קשר מ-<?php print $row['name'];?>
												<br/>
												<br/>
												<p class="well"><?php print $row['notes'];?></p>	
												טלפון: <?php print $row['phone'];?>, דואר-אלקטרוני: <?php print $row['mail'];?>
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
