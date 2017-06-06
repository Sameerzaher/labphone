<?php
	include_once "header.php";

class PhoneAdmin {
	
	public static function AddPhone($phoneBrand, $phoneName) {
		global $pdo;
		$sql = "insert into tbldevice (brand,name) values ('$phoneBrand','$phoneName')";
		if ($pdo->query($sql)) return true;
		return false;
	}
	
	public static function AddBrand($brandName) {
		global $pdo;
		$sql = "insert into tbldevicebrand (brand) values ('$brandName')";
		$pdo->query($sql);
		return true;		
	}
	
	public static function RemoveBrand($brandName) {
		global $pdo;
		$sql = "delete from tbldevicebrand where brand = '$brandName'";
		$pdo->query($sql);
		return true;		
	}
	
	public static function RemovePhone($phoneBrand, $phoneName) {
		global $pdo;
		$sql = "delete from tbldevice where brand = '$phoneBrand' and name = '$phoneName'";
		$pdo->query($sql);
		return true;
	}
	
	public static function UpdatePhone($oldPhoneBrand, $oldPhoneName, $phoneBrand, $phoneName) {
		global $pdo;
		self::RemovePhone($oldPhoneBrand,$oldPhoneName);
		self::AddPhone($phoneBrand,$phoneName);
		return true;		
	}
	
	public static function UpdateBrand($oldBrandName, $brandName) {
		global $pdo;
		self::RemoveBrand($oldBrandName);
		self::AddBrand($brandName);
		return true;
	}
	
	public static function GetPhones() {
		global $pdo;
		$sql = "select * from tbldevice";
		return $pdo->query($sql);
	}
	
	public static function GetBrands() {
		global $pdo;
		$sql = "select brand from tbldevicebrand";
		return $pdo->query($sql);
	}
	
}

?>