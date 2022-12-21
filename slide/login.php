<?php 

//login

session_start(); 
include "function.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: signin?error=Masukkan Username terlebih dahulu yaa! :)");
	    exit();
	}else if(empty($pass)){
        header("Location: signin?error=Masukkan Password terlebih dahulu yaa! :)&");
	    exit();
	}else{

		// hashing password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ft.php");
		        exit();
            }else{
				header("Location: signin.php?error=Maaf, tapi terdapat kesalahan pada Username atau Password anda, silahkan coba lagi!");
		        exit();
			}
		}else{
			header("Location: signin.php?error=Maaf, tapi terdapat kesalahan pada Username atau Password anda, silahkan coba lagi!");
	        exit();
		}
	}
	
}else{
	header("Location: signin.php");
	exit();
}

?>
