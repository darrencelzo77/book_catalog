<?php
date_default_timezone_set('Asia/Manila');
function escape_str($db_connection, $str)
{
	if ($str != '') {
		$str = trim($str);
		return mysqli_real_escape_string($db_connection, $str);
	}
}

function GetValue($sql_query)
{
	error_reporting(0);
	global $db_connection;
	$result = mysqli_query($db_connection, $sql_query);
	$row = mysqli_fetch_array($result);
	return $row[0];
}

function Number($float)
{
	//$floatx = number_format($float,2,".","");
	if ($float == 0) {
		return "";
	} else {
		if ($float > 0) {
			return number_format($float, 2, ".", ",");
		} else {
			return '(' . number_format(abs($float), 2, ".", ",") . ')';
		}
	}
}

function secureData($string, $action = 'e')
{
	// you may change these values to your own
	$secret_key = 'monkey.d.luffy';
	$secret_iv = 'monkey.d.garp';
	$output = false;
	$encrypt_method = "AES-256-CBC";
	$key = hash('sha256', $secret_key);
	$iv = substr(hash('sha256', $secret_iv), 0, 16);
	if ($action == 'e') {
		$output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
	} else if ($action == 'd') {
		$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
	}
	return $output;
}


function GetData($sql_query)
{
	global $db_connection;
	$result = $db_connection->query($sql_query);
	if (!$result || $result->num_rows === 0) {
		return false;
	}
	$row = $result->fetch_array(MYSQLI_NUM);
	return $row[0];
}

function GenerateRandomString($length = 5)
{
	//$characters = '2345679ACDEFGHJKLMNPQRSTUVWXYZ';
	$characters = '0123456789ABCDE';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}


function Role($id)
{
	return GetData('Select roletype from tblroles where roleid=' . $id);
}
