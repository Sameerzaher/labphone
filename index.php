<!DOCTYPE html>
<?php
// if(strlen($_POST['client_name'])>0)
// {
	// $name=$_POST['client_name'];
// }
// else
// {
	// $name="null";
// }
// $option =$_POST['option'];
// $result =$name;

?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Login & Register</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">


		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="styles/bootstrap-rtl.min.css">
		<link rel="stylesheet" href="styles/bootstrap-responsive.min.css">

		<link href="https://fonts.googleapis.com/css?family=Heebo" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
		<link href="style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles/animate.css">

		<script src="js/html5shiv.js"></script>
		<script src="js/respond.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>

        <![endif]>

        <!-- Favicon and touch icons -->


    </head>

    <body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">

			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header">
				<a href="new.html" class="navbar-brand">
					<div class="logo">
						<img src="img/logowhite.png" alt="logo">
					</div>
				</a>
			</div>

			<div class="navbar-collapse collapse" aria-expanded="false" style="height: 0px;">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="prices.html" data-toggle="modal" data-target="#myModal">מחירון</a></li>
					<li><a href="#contact" data-toggle="modal" data-target="#contactModal">צור קשר <i class="fa fa-phone"></i></a></li>
					<li><a href="index.html">הרשמה \ התחברות</a></li>
				</ul>
			</div>

		</div>
	</div>
	<section id="slider" class="text-center">
		<div class="container">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">

				<div class="carousel-inner">
					<div class="item active">
						<h1></h1>
						<h2></h2>
					</div>
				</div>

			</div>
		</div>
	</section>


        <!-- Top content -->
	<div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">

                    </div>
                    
                    <div class="row">
						<div class="col-sm-5">

							<div class="form-box">

								<div class="form-top">
									<div class="form-top-right">
										<i class="fa fa-pencil"></i>
									</div>
									<div class="form-top-left">
										<h3>הירשם עכשיו</h3>
										<p>עליך למלא את הפרטים הבאים כדי שתהיה לך גישה מלאה לאתר</p>
									</div>

								</div>
								<div class="form-bottom">
									<form role="form" action="" method="post" id="registration-form">
									<input type="hidden" name="register" value="0"/>
										<div class="form-group">
											<label class="sr-only" for="form-first-name">שם פרטי</label>
											<input type="text" name="fname" placeholder="שם פרטי..." class="form-first-name form-control" id="form-first-name">
										</div>
										<div class="form-group">
											<label class="sr-only" for="form-last-name">שם משפחה</label>
											<input type="text" name="lname" placeholder="שם משפחה..." class="form-last-name form-control" id="form-last-name">
										</div>
										<div class="form-group">
											<label class="sr-only" for="form-email">Email</label>
											<input type="text" name="email" placeholder="דואר אלקטרוני" class="form-email form-control" id="form-email">
										</div>
										<div class="form-group">
											<label class="sr-only" for="form-about-address">כתובת</label>
											<input type="text" name="address" placeholder="כתובת..." class="form-about-address form-control" id="form-about-address">
										</div>
										<div class="form-group">
											<label class="sr-only" for="form-about-phone">מס טלפון</label>
											<input type="text" name="phone" placeholder="מס טלפון..." class="form-about-phone form-control" id="form-about-phone">
										</div>
										<div class="form-group">
											<label class="sr-only" for="form-about-phone">סיסמא</label>
											<input type="text" name="password" placeholder="סיסמא..." class="form-about-phone form-control" id="form-about-phone">
										</div>
										<button type="submit" class="btn">הרשם</button>
									</form>
								</div>
							</div>

						</div>

                        <div class="col-sm-5">

                        	<div class="form-box">
	                        	<div class="form-top">
									<div class="form-top-right">
										<i class="fa fa-key"></i>
									</div>
	                        		<div class="form-top-left">

	                        			<h3>התחברות למערכת</h3	>
	                            		<p>נא הכנס את כתובת המייל שלך והסיסמה</p>
	                        		</div>

	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="form-username" placeholder="דואר אלקטרוני" class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="סיסמה..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" class="btn">כניסה</button>
				                    </form>
			                    </div>
		                    </div>
		                
		                	<div class="social-login">
	                        	<h3>באפשרותך לבצע כניסה למערכת על ידי אחת מהאפשריות הבאות</h3>
	                        	<div class="social-login-buttons">

		                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
		                        		<i class="fa fa-google-plus"></i> Google Plus
		                        	</a>
									<a class="btn btn-link-1 btn-link-1-facebook" href="#">
										<i class="fa fa-facebook"></i> Facebook
									</a>
	                        	</div>
	                        </div>

                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>

                        <div class="col-sm-1"></div>


                    </div>

                </div>
            </div>

        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script  src="assets/js/placeholder.js"></script>
        <![endif]-->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">מחירון</h4>
				</div>
				<div class="modal-body">
					<!--div class="row">
                        <div class="col-sm-4">
                            <label>בחר\י יצרן</label>
                            <select class="form-control">
                                <option>Apple - iPhone</option>
                                <option>Samsung</option>
                                <option>LG</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>בחר\י דגם</label>
                            <select class="form-control"></select>
                        </div>
                        <div class="col-sm-4">
                            <label>בחר\י תקלה</label>
                            <select class="form-control">
                                <option>מסך שבור</option>
                                <option>נזק מים</option>
                                <option>טעינה לא עובדת</option>
                            </select>
                        </div>
                    </div-->
					<div class="row">
						<div class="col-sm-12">
							<table class="table table-striped table-sm">
								<thead>
								<tr>
									<th></th>
									<th></th>
									<th>LabPhone</th>
									<th>אתרים מתחרים</th>
									<th>חסכון</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<th>iPhone 6S</th>
									<td>מסך שבור</td>
									<td>300₪</td>
									<td>350₪</td>
									<td>50₪</td>
								</tr>
								<tr>
									<th>Samsung Galaxy S7</th>
									<td>נזק מים</td>
									<td>700₪</td>
									<td>1000₪</td>
									<td>300₪</td>
								</tr>
								<tr>
									<th></th>
									<td>טעינה לא עובדת</td>
									<td>100₪</td>
									<td>2000₪</td>
									<td>100₪</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">סגור</button>
				</div>
			</div>

		</div>
	</div>


	<!-- Modal -->
	<div id="contactModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">צור קשר 1234* <i class="fa fa-phone"></i></h4>
				</div>
				<div class="modal-body">
					<form method="GET" action="action.php" id="contact-form">
						<div class="row">
							<input name="contact" value="0" type="hidden"/>
							<div class="col-sm-4">
								<label>שם מלא</label>
								<input type="" class="form-control" name="name"/>
							</div>
							<div class="col-sm-4">
								<label>טלפון נייד</label>
								<input type="number" class="form-control" name="phone"/>
							</div>
							<div class="col-sm-4">
								<label>דואר-אלקטרוני</label>
								<input type="email" class="form-control" name="mail"/>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<label>הערות</label>
								<textarea class="form-control" name="notes"></textarea>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">סגור</button>
							<button type="submit" class="btn btn-primary hardal">שלח</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
    </body>

<script>
	$("#contact-form").submit(function(e){
		e.preventDefault();
		var ser = $(this).serialize();
		$.get("action.php?"+ser).done(function(){
			alert("יצירת קשר בוצעה בהצלחה!");
		});
	});
	
	$("#registration-form").submit(function(e){
		e.preventDefault();
		var ser = $(this).serialize();
		$.get("action.php?"+ser).done(function(){
			alert("ההרשמה בוצעה בהצלחה!");
		});
	});
</script>
	
</html>