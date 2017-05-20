<? 
	session_start();
	$users = array("gago"=>123,"maga"=>456);

	function checkUser($username, $password){
		global $users;

		if(isset($users[$username])){
		  return ($users[$username]==$password);
		}

		return false;
	}

	function logInUser($username){
		$_SESSION["username"]=$username;
		header("location: index.php");
	}

	function isLoggedIn(){
		if(isset($_SESSION["username"])){
			return true;
		}
		else{
			return false;
		}

	}

	function redirect(){
		header("location: login.php");
	}

	function logOutUser(){
		session_destroy();
		header("location: login.php");
	}
