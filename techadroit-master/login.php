<?php
session_start();
	include("connection.php");

	$name1=sanitize($_POST["name1"]);
	$email1=sanitize($_POST["email1"]);
	$phone1=sanitize($_POST["phone1"]);
	$name2=sanitize($_POST["name2"]);
	$email2=sanitize($_POST["email2"]);
	$phone2=sanitize($_POST["phone2"]);
	$name3=sanitize($_POST["name3"]);
	$email3=sanitize($_POST["email3"]);
	$phone3=sanitize($_POST["phone3"]);

	if($_POST['submit']=="Register for Design Mania"){
		if(!verify($name1,$name2,$email1,$email2,$phone1,$phone2)){
			$query="INSERT INTO design_mania (`name1`,`email1`,`phone1`,`name2`,`email2`,`phone2`) VALUES ('$name1','$email1','$phone1','$name2','$email2','$phone2')";
        	mysqli_query($conn, $query);
        	echo '<script language="javascript">';
			echo 'alert("Registered");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("'.verify($name1,$name2,$email1,$email2,$phone1,$phone2).'");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}  
    }
    else if($_POST['submit']=="Register for Rapid Fire"){
    	if(!verify($name1,$name2,$email1,$email2,$phone1,$phone2)){
			$query="INSERT INTO rapid_fire (`name1`,`email1`,`phone1`,`name2`,`email2`,`phone2`) VALUES ('$name1','$email1','$phone1','$name2','$email2','$phone2')";
        	mysqli_query($conn, $query);
        	echo '<script language="javascript">';
			echo 'alert("Registered");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("'.verify($name1,$name2,$email1,$email2,$phone1,$phone2).'");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
    }
    else if($_POST['submit']=="Register for Anatronix"){
    	if(!verify($name1,$name2,$email1,$email2,$phone1,$phone2)){
			$query="INSERT INTO anatronix (`name1`,`email1`,`phone1`,`name2`,`email2`,`phone2`) VALUES ('$name1','$email1','$phone1','$name2','$email2','$phone2')";
        	mysqli_query($conn, $query);
        	echo '<script language="javascript">';
			echo 'alert("Registered");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("'.verify($name1,$name2,$email1,$email2,$phone1,$phone2).'");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
    }
    else if($_POST['submit']=="Register for Gear it Forward"){
    	if(!verify($name1,$name2,$email1,$email2,$phone1,$phone2)){
			$query="INSERT INTO rush_hour (`name1`,`email1`,`phone1`,`name2`,`email2`,`phone2`) VALUES ('$name1','$email1','$phone1','$name2','$email2','$phone2')";
        	mysqli_query($conn, $query);
        	echo '<script language="javascript">';
			echo 'alert("Registered");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("'.verify($name1,$name2,$email1,$email2,$phone1,$phone2).'");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
    }
    else if($_POST['submit']=="Register for CAPTURE and TRIUMPH"){
    	if(!verify($name1,$name2,$email1,$email2,$phone1,$phone2)){
			$query="INSERT INTO capture (`name1`,`email1`,`phone1`,`name2`,`email2`,`phone2`) VALUES ('$name1','$email1','$phone1','$name2','$email2','$phone2')";
        	mysqli_query($conn, $query);
        	echo '<script language="javascript">';
			echo 'alert("Registered");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("'.verify($name1,$name2,$email1,$email2,$phone1,$phone2).'");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
    }
    else if($_POST['submit']=="Register for Pixelate"){
    	if(!verify($name1,$name2,$email1,$email2,$phone1,$phone2)){
			$query="INSERT INTO pixelate (`name1`,`email1`,`phone1`,`name2`,`email2`,`phone2`) VALUES ('$name1','$email1','$phone1','$name2','$email2','$phone2')";
        	mysqli_query($conn, $query);
        	echo '<script language="javascript">';
			echo 'alert("Registered");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("'.verify($name1,$name2,$email1,$email2,$phone1,$phone2).'");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
    }
    else if($_POST['submit']=="Register for Code Strike"){
    	if(!$name1) $error.="* Please enter your name    ";
		else {
			if(strlen($name1)<3) $error.="* Name must contain atleast 3 alphabets    ";
			if(!preg_match("/^[a-zA-Z ]+$/",$name1)) $error.="* Name should contain only alphabets    ";
		}

		if(!$email1) $error ="* Please enter your email";
		else if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) $error="* Please enter a valid email address    ";

		if(!$phone1) $error.="* Please enter your phone number    ";
		else {
			if($phone1<10) $error.="* Phone must contain 10 digits    ";
			if(!preg_match("/^[0-9]+$/",$phone1)) $error.="* Phone should contain only digits    ";
		}
		if(!$error){
			$query="INSERT INTO code_strike (`name1`,`email1`,`phone1`) VALUES ('$name1','$email1','$phone1')";
       		mysqli_query($conn, $query);
       		echo '<script language="javascript">';
			echo 'alert("Registered");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("'.$error.'");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}    
    }
    else if($_POST['submit']=="Register for Techblog"){
    	if(!$name1) $error.="* Please enter your name    ";
		else {
			if(strlen($name1)<3) $error.="* Name must contain atleast 3 alphabets    ";
			if(!preg_match("/^[a-zA-Z ]+$/",$name1)) $error.="* Name should contain only alphabets    ";
		}

		if(!$email1) $error ="* Please enter your email";
		else if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) $error="* Please enter a valid email address    ";

		if(!$phone1) $error.="* Please enter your phone number    ";
		else {
			if($phone1<10) $error.="* Phone must contain 10 digits    ";
			if(!preg_match("/^[0-9]+$/",$phone1)) $error.="* Phone should contain only digits    ";
		}
		if(!$error){
			$query="INSERT INTO techblog (`name1`,`email1`,`phone1`) VALUES ('$name1','$email1','$phone1')";
       		mysqli_query($conn, $query);
       		echo '<script language="javascript">';
			echo 'alert("Registered");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("'.$error.'");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}    
    }
    else if($_POST['submit']=="Register for Hackathon"){
    	if(!$name1) $error.="* Please enter your name    ";
		else {
			if(strlen($name1)<3) $error.="* Name must contain atleast 3 alphabets    ";
			if(!preg_match("/^[a-zA-Z ]+$/",$name1)) $error.="* Name should contain only alphabets    ";
		}

		if(!$email1) $error ="* Please enter your email";
		else if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) $error="* Please enter a valid email address    ";

		if(!$phone1) $error.="* Please enter your phone number    ";
		else {
			if($phone1<10) $error.="* Phone must contain 10 digits    ";
			if(!preg_match("/^[0-9]+$/",$phone1)) $error.="* Phone should contain only digits    ";
		}
		if(!$name2) $error.="* Please enter your name    ";
		else {
			if(strlen($name2)<3) $error.="* Name must contain atleast 3 alphabets    ";
			if(!preg_match("/^[a-zA-Z ]+$/",$name2)) $error.="* Name should contain only alphabets    ";
		}

		if(!$email2) $error ="* Please enter your email";
		else if (!filter_var($email2, FILTER_VALIDATE_EMAIL)) $error="* Please enter a valid email address    ";

		if(!$phone2) $error.="* Please enter your phone number    ";
		else {
			if($phone2<10) $error.="* Phone must contain 10 digits    ";
			if(!preg_match("/^[0-9]+$/",$phone2)) $error.="* Phone should contain only digits    ";
		}
		if(!$name3) $error.="* Please enter your name    ";
		else {
			if(strlen($name3)<3) $error.="* Name must contain atleast 3 alphabets    ";
			if(!preg_match("/^[a-zA-Z ]+$/",$name3)) $error.="* Name should contain only alphabets    ";
		}

		if(!$email3) $error ="* Please enter your email";
		else if (!filter_var($email3, FILTER_VALIDATE_EMAIL)) $error="* Please enter a valid email address    ";

		if(!$phone3) $error.="* Please enter your phone number    ";
		else {
			if($phone3<10) $error.="* Phone must contain 10 digits    ";
			if(!preg_match("/^[0-9]+$/",$phone3)) $error.="* Phone should contain only digits    ";
		}
		if(!$error){
			$query="INSERT INTO hackathon (`name1`,`email1`,`phone1`,`name2`,`email2`,`phone2`,`name3`,`email3`,`phone3`) VALUES ('$name1','$email1','$phone1','$name2','$email2','$phone2','$name3','$email3','$phone3')";
       		mysqli_query($conn, $query);
       		echo '<script language="javascript">';
			echo 'alert("Registered");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("'.$error.'");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}    
    }

    else if($_POST['submit']=="Register for Passenger"){
    	if(!$name1) $error.="* Please enter your name    ";
		else {
			if(strlen($name1)<3) $error.="* Name must contain atleast 3 alphabets    ";
			if(!preg_match("/^[a-zA-Z ]+$/",$name1)) $error.="* Name should contain only alphabets    ";
		}

		if(!$email1) $error ="* Please enter your email";
		else if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) $error="* Please enter a valid email address    ";

		if(!$phone1) $error.="* Please enter your phone number    ";
		else {
			if($phone1<10) $error.="* Phone must contain 10 digits    ";
			if(!preg_match("/^[0-9]+$/",$phone1)) $error.="* Phone should contain only digits    ";
		}
		if(!$name2) $error.="* Please enter your name    ";
		else {
			if(strlen($name2)<3) $error.="* Name must contain atleast 3 alphabets    ";
			if(!preg_match("/^[a-zA-Z ]+$/",$name2)) $error.="* Name should contain only alphabets    ";
		}

		if(!$email2) $error ="* Please enter your email";
		else if (!filter_var($email2, FILTER_VALIDATE_EMAIL)) $error="* Please enter a valid email address    ";

		if(!$phone2) $error.="* Please enter your phone number    ";
		else {
			if($phone2<10) $error.="* Phone must contain 10 digits    ";
			if(!preg_match("/^[0-9]+$/",$phone2)) $error.="* Phone should contain only digits    ";
		}
		if(!$name3) $error.="* Please enter your name    ";
		else {
			if(strlen($name3)<3) $error.="* Name must contain atleast 3 alphabets    ";
			if(!preg_match("/^[a-zA-Z ]+$/",$name3)) $error.="* Name should contain only alphabets    ";
		}

		if(!$email3) $error ="* Please enter your email";
		else if (!filter_var($email3, FILTER_VALIDATE_EMAIL)) $error="* Please enter a valid email address    ";

		if(!$phone3) $error.="* Please enter your phone number    ";
		else {
			if($phone3<10) $error.="* Phone must contain 10 digits    ";
			if(!preg_match("/^[0-9]+$/",$phone3)) $error.="* Phone should contain only digits    ";
		}
		if(!$error){
			$query="INSERT INTO transporter (`name1`,`email1`,`phone1`,`name2`,`email2`,`phone2`,`name3`,`email3`,`phone3`) VALUES ('$name1','$email1','$phone1','$name2','$email2','$phone2','$name3','$email3','$phone3')";
       		mysqli_query($conn, $query);
       		echo '<script language="javascript">';
			echo 'alert("Registered");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("'.$error.'");';
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}    
    }
	
	function sanitize($x){
        $x=stripslashes($x);
        $x=trim($x);
        $x=htmlspecialchars($x);
        return $x;
    }

    function verify($n1,$n2,$e1,$e2,$p1,$p2){
    	if(!$n1) $error.="* Please enter Member 1's name    ";
		else {
			if(strlen($n1)<3) $error.="* Member 1's name must contain atleast 3 alphabets    ";
			if(!preg_match("/^[a-zA-Z ]+$/",$n1)) $error.="* Member 1's name should contain only alphabets    ";
		}

		if(!$e1) $error.="* Please enter Member 1's email    ";
		else if (!filter_var($e1, FILTER_VALIDATE_EMAIL)) $error.="* Please enter Member 1's valid email address    ";

		if(!$p1) $error.="* Please enter Member 1's phone number    ";
		else {
			if($p1<10) $error.="* Member 1's Phone must contain 10 digits    ";
			if(!preg_match("/^[0-9]+$/",$p1)) $error.="* Member 1's Phone should contain only digits    ";
		}

		if(!$n2) $error.="* Please enter Member 2's name    ";
		else {
			if(strlen($n2)<3) $error.="* Member 2's Name must contain atleast 3 alphabets    ";
			if(!preg_match("/^[a-zA-Z ]+$/",$n2)) $error.="* Member 2's Name should contain only alphabets    ";
		}

		if(!$e2) $error.="* Please enter Member 2's email    ";
		else if (!filter_var($e2, FILTER_VALIDATE_EMAIL)) $error.="* Please enter Member 2's valid email address    ";

		if(!$p2) $error.="* Please enter Member 2's phone number    ";
		else {
			if($p2<10) $error.="* Member 2's Phone must contain 10 digits    ";
			if(!preg_match("/^[0-9]+$/",$p2)) $error.="* Member 2's Phone should contain only digits    ";
		}
		return $error;
    }
?>