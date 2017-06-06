<?php

$host = 'localhost';
$db   = 'labphone';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);
extract($_GET);
extract($_POST);

include_once "phone-admin.class.php";

if (isset($_GET['contact'])) {
	$name = $_GET["name"];
	$phone = $_GET["phone"];
	$email = $_GET["mail"];
	$notes = $_GET["notes"];
	$sql = "insert into tblcontact (name,mail,phone,notes,checked) values ('$name','$email','$phone','$notes',0)";
	$pdo->query($sql);
}

if (isset($_GET['register'])) {
	$fname = $_GET["fname"];
	$lname = $_GET["lname"];
	$email = $_GET["email"];
	$password = $_GET["password"];
	$phone = $_GET["phone"];
	$address = $_GET['address'];
	$sql = "insert into tbluser (fname,lname,email,phone,password,address,permissions) values ('$fname','$lname','$email','$phone','$password','$address',0)";
	$pdo->query($sql);
}

if (isset($_GET['deletePhone'])) {
	if (PhoneAdmin::RemovePhone($phoneBrand,$phoneName))
		header('Location: phone-admin.php');
}

if (isset($_GET['deleteBrand'])) {
	if (PhoneAdmin::RemoveBrand($brandName))
		header('Location: phone-admin.php');
}

if (isset($_GET['addPhone'])) {
	if (PhoneAdmin::AddPhone($phoneBrand,$phoneName))
		header('Location: phone-admin.php');
}

if (isset($_GET['addBrand'])) {
	if (PhoneAdmin::AddBrand($brandName))
		header('Location: phone-admin.php');
}

if (isset($_GET['updatePhone'])) {
	if (PhoneAdmin::UpdatePhone($oldPhoneBrand, $oldPhoneName, $phoneBrand, $phoneName))
		header('Location: phone-admin.php');
}

if (isset($_GET['updateBrand'])) {
	if (PhoneAdmin::UpdateBrand($oldBrandName,$brandName))
		header('Location: phone-admin.php');
}

?>