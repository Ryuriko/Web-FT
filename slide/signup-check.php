<?php 

// koneksi
session_start(); 
include "function.php";

// Query
if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['repassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['repassword']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;

// Jika table kosong
	if (empty($uname)) {
		header("Location: signup.php?error=Masukkan Username terlebih dahulu yaa! :)&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Masukkan Password terlebih dahulu yaa! :)&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Masukkan Repeat Password terlebih dahulu yaa! :)&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Masukkan Nama terlebih dahulu yaa! :)&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=Pastikan Password yang dimasukkan sama! :)&$user_data");
	    exit();
	}

	else{

// Cek Username sama dengan users lain atau tidak
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE username='$uname' ";
		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=Username dengan nama tersebut sudah tersedia, silahkan coba lagi!&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(username, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($db, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Yay! Akun anda sudah berhasil dibuat (>_<) Selamat Datang!");
	         exit();
           }else {
	           	header("Location: signup.php?error=Error!&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}

?>
