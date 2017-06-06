<?php
	include_once "header.php";
	include "phone-admin.class.php";
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-right">
                            ניהול טלפונים
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
                    <div class="col-lg-6 text-right">
                        <div class="panel panel-default">
                            <div class="panel-heading text-right">
                                <h3 class="panel-title text-right"><i class="fa fa-clock-o fa-fw"></i> הוספת טלפון</h3>
                            </div>
                            <div class="panel-body">
								<div class="row" dir="rtl">
									<form class="form-inline" style="padding:10px;" action="action.php" method="GET">
									<input type="hidden" name="addPhone" value="0"/>
									  <div class="form-group">
										<label for="exampleInputName2">מותג</label>
										<select class="form-control" id="phoneBrand" name="phoneBrand" >
											<?php
												$stmt = PhoneAdmin::GetBrands();
												while ($row = $stmt->fetch()) {
												?>
													<option><?=$row['brand'];?></option>
												<?php
												};
											?>
										</select>
									  </div>
									  &nbsp;&nbsp;&nbsp;&nbsp;
									  <div class="form-group">
										<label for="exampleInputEmail2">שם טלפון</label>
										<input type="text" class="form-control" id="phoneName" name="phoneName" placeholder="למשל iPhone 7S">
									  </div>
									  <button type="submit" class="btn btn-default">הוספה</button>
									</form>
								</div>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-6 text-right">
                        <div class="panel panel-default">
                            <div class="panel-heading text-right">
                                <h3 class="panel-title text-right"><i class="fa fa-clock-o fa-fw"></i> הוספת מותג</h3>
                            </div>
                            <div class="panel-body">
								<div class="row" dir="rtl">
									<form class="form-inline" style="padding:10px;" action="action.php" method="GET">
									<input type="hidden" name="addBrand" value="0"/>
									  &nbsp;&nbsp;&nbsp;&nbsp;
									  <div class="form-group">
										<label for="brandName">שם המותג</label>
										<input type="text" class="form-control" id="brandName" name="brandName" placeholder="למשל Apple">
									  </div>
									  <button type="submit" class="btn btn-default">הוספה</button>
									</form>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
				
				<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading text-right">
                                <h3 class="panel-title text-right"><i class="fa fa-clock-o fa-fw"></i> טלפונים במערכת</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
									<?php
										$stmt = PhoneAdmin::GetPhones();
										while ($row = $stmt->fetch()) {
										?>
											<div class="list-group-item text-right" style="direction:rtl;">
												<?=$row['brand']." <strong>".$row['name']."</strong>";?>
												<br />
												<a href="action.php?deletePhone&phoneBrand=<?=$row['brand'];?>&phoneName=<?=$row['name'];?>">מחיקה</a>
												|
												<a href="#" class="update-phone" data-toggle="modal" data-target="#myModal" oldBrand="<?=$row['brand'];?>" oldName="<?=$row['name'];?>">עריכה</a>
											</div>
										<?php
										};
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->			
				
				<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading text-right">
                                <h3 class="panel-title text-right"><i class="fa fa-clock-o fa-fw"></i> מותגים במערכת</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
									<?php
										$stmt = PhoneAdmin::GetBrands();
										while ($row = $stmt->fetch()) {
										?>
											<div class="list-group-item text-right" style="direction:rtl;">
												<?=$row['brand'];?>
												<br />
												<a href="action.php?deleteBrand&brandName=<?=$row['brand'];?>">מחיקה</a>
												|
												<a href="#" class="update-brand" data-toggle="modal" data-target="#updateBrandModal" oldBrand="<?=$row['brand'];?>">עריכה</a>
											</div>
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

	
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-sm">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close pull-left" data-dismiss="modal">&times;</button>
			<h4 class="modal-title text-right">עדכון טלפון</h4>
		  </div>
		  <div class="modal-body" dir="rtl">
			<form action="action.php" method="GET">
			<input type="hidden" name="updatePhone" value="0"/>
			<input type="hidden" name="oldPhoneBrand" id="oldPhoneBrand" value=""/>
			<input type="hidden" name="oldPhoneName"  id="oldPhoneName" value=""/>
			<label>מותג חדש</label>
				<select class="form-control" id="updatePhoneBrand" name="phoneBrand" >
					<?php
						$stmt = PhoneAdmin::GetBrands();
						while ($row = $stmt->fetch()) {
						?>
							<option><?=$row['brand'];?></option>
						<?php
						};
					?>
				</select>
			<label>שם חדש</label>
			<input type="text" class="form-control" name="phoneName" id="updatePhoneName" placeholder="למשל iPhone 7S"/>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">סגירה</button>
			<button type="submit" class="btn btn-primary">עדכון</button>
		  </div>
		  </form>
		</div>

	  </div>
	</div>
	
	<!-- Modal -->
	<div id="updateBrandModal" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-sm">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close pull-left" data-dismiss="modal">&times;</button>
			<h4 class="modal-title text-right">עדכון מותג</h4>
		  </div>
		  <div class="modal-body" dir="rtl">
			<form action="action.php" method="GET">
			<input type="hidden" name="updateBrand" value="0"/>
			<input type="hidden" name="oldBrandName" id="oldBrandName" value=""/>
			<label>שם מותג חדש</label>
			<input type="text" class="form-control" name="brandName" id="updateBrandName" placeholder="למשל Apple"/>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">סגירה</button>
			<button type="submit" class="btn btn-primary">עדכון</button>
		  </div>
		  </form>
		</div>

	  </div>
	</div>
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

	<script>
		$(".update-phone").click(function() {
			var oldName = $(this).attr("oldName");
			var oldBrand = $(this).attr("oldBrand");
			$("#updatePhoneBrand").val(oldBrand);
			$("#updatePhoneName").val(oldName);
			$("#oldPhoneBrand").val(oldBrand);
			$("#oldPhoneName").val(oldName);
		});
		
		$(".update-brand").click(function() {
			var oldBrand = $(this).attr("oldBrand");
			$("#updateBrandName").val(oldBrand);
			$("#oldBrandName").val(oldBrand);
		});
	</script>
	
</body>

</html>
