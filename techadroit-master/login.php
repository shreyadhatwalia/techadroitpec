 <?php
	include("connection.php");
	session_start();

	if ($_GET["logout"]==1) {session_destroy();}

	if ($_POST['submit']=="Sign Up") {

		if(!$_POST['name']) $error.="<br />Please enter your name";
		else {
			if(strlen($_POST['name'])<3) $error.="<br />Name must contain atleast 3 alphabets";
			if(!preg_match("/^[a-zA-Z ]+$/",$_POST['name'])) $error.="<br />Name should contain only alphabets";
		}

		if(!$_POST['email']) $error ="<br />Please enter your email";
		else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error="<br />Please enter a valid email address";

		if(!$_POST['password']) $error.="<br />Please enter your password";
		else{
			if(strlen($_POST['password'])<8) $error.="<br />Please enter a password of atleast 8 characters";
			if(!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please include atleast one capital letter in your password";
		}

		if(!$_POST['college']) $error.="<br />Please enter your college/school name";

		if(!$_POST['phone']) $error.="<br />Please enter your phone number";
		else {
			if($_POST['phone']<10) $error.="<br />Phone must contain 10 digits";
			if(!preg_match("/^[0-9]+$/",$_POST['phone'])) $error.="<br />Phone should contain only digits";
		}

		if(!$_POST['gender']) $error.="<br />Please enter your gender";

		if($error) $error.= "There were errors in your signup details:".$error;

		else{

			$query="SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($conn, $_POST['email'])."'";

			$result = mysqli_query($conn, $query);
			$results = mysqli_num_rows($result);

			if ($results) $error.= "That email account already exists";

			else{
                $name=sanitize($_POST["name"]);
                $email=sanitize($_POST["email"]);
                $phone=sanitize($_POST["phone"]);
                $college=sanitize($_POST["college"]);
                $gender=sanitize($_POST["gender"]);
                $password=sanitize($_POST["password"]);

				$query="INSERT INTO `users` (`name`,`email`,`password`,`phone`,`college`,`gender`) VALUES('$name','$email','".md5(md5($email).$password)."','$phone','$college','$gender')";

				$result = mysqli_query($conn,$query);
				$row = mysqli_fetch_array($result);

				$_SESSION['id']=$row['id'];
				header("Location:mainpage.php");
			}
		}
	}

	if($_POST['submit']=="Log In") {

		echo "Hello 1";

		$loginemail=sanitize($_POST["loginemail"]);
		$loginpass=sanitize($_POST["loginpassword"]);

		$query="SELECT * FROM users WHERE email='$loginemail' AND password='".md5(md5($loginemail).$loginpass)."'";
		//".md5(md5($loginemail).$loginpass)."

		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);

		echo $row;

		if($row){
			$_SESSION['id']=$row['id'];

			header("Location:mainpage.php");
		}else{
			$error.= "we couldnot find user";
		}
	}

	function sanitize($x){
        $x=stripslashes($x);
        $x=trim($x);
        $x=htmlspecialchars($x);
        return $x;
    }
?>