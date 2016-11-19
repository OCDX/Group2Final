<?php
        $user_name = $_POST['username'];
        $user_password = $_POST['userpassword'];
	if(!$user_name or !$user_password){
		header("Location: login.php?error=Invalid username or password");
		exit();
	}
	if(isset($_POST['test'])){
		header("Content-Type: application/json");
	}
	session_start(); // session starts with the help of this function
	require_once "DBConn.php";
	$dbconn = new DBConn();
	if($dbconn->connectToDatabase()){
		$sql = "SELECT username, isadmin, hashedpassword FROM db.user WHERE BINARY username = ? AND activeuserflag = 1;";
		$rows = $dbconn->select($sql, array($user_name));
		$row = $rows[0];
		$errorstring = "";
		if(count($errors = $dbconn->getErrors()) > 0){
			foreach($errors as $error){
				$errorstring .= $error."<br>";
			}
			$errorstring = rtrim($errorstring, "<br>");
		}
		if(isset($row['hashedpassword']) and password_verify($user_password, $row['hashedpassword'])){
			$_SESSION['NAME'] = $user_name;
			$_SESSION['ADMIN'] = $row['isadmin'];
			if(isset($_POST['test'])){
				$passed = false;
				if($_POST['expected'] == true){
					$passed = true;
				}
				echo "{login-success: true,
				login-expected: '".$_POST['expected']."',
				test-passed: '".$passed."',
				name: '".$user_name."',
				isadmin: '".$row['isadmin']."',
				error: 0}";
			} else {
				header("Location: index.php");
			}
			exit();
		} else {
			if(isset($_POST['test'])){
				$passed = false;
				if($_POST['expected'] == false){
					$passed = true;
				}
				echo "{login-success: false,
				login-expected: '".$_POST['expected']."',
				test-passed: '".$passed."',
				name: '".$user_name."',
				error: '".$errorstring."'}";
			} else {
				header("Location: login.php?error=Invalid username or password");
			}
			exit();
		}
	} else {echo "could not connect to DB";}
?>
