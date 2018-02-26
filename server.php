<?php 
session_start();

$username="";
$email="";
$password1="";
$password2="";
$password="";
$errors=array();



$db=  mysqli_connect('localhost','root','759111167','registration');

if(isset($_POST['register'])){
	
	$username= mysqli_real_escape_string($db,$_POST['username']);
	$password1= mysqli_real_escape_string($db,$_POST['password1']);
	$password2= mysqli_real_escape_string($db,$_POST['password2']);
	$email= mysqli_real_escape_string($db,$_POST['email']);

	if(empty($username)){
		array_push($errors, "Your username is required");
	}

	if(empty($email)){
		array_push($errors, "Your email is required");
	}

	if(empty($password1)){
		array_push($errors, "Your password is required");
	}

	if($password1!=$password2){
		array_push($errors, "Two passwords do not match!");
	}

	if(count($errors)==0){
		$password=md5($password1);//encrypt
		$sql="INSERT INTO users(username,email,password) 
		VALUES ('$username','$email','$password')";
 
		mysqli_query($db,$sql);
		echo "<script>alert('Congratulations! You account has been created!')</script>";
		
	}

	}



	if(isset($_POST['login'])){
		$username= mysqli_real_escape_string($db,$_POST['username']);
	    $password= mysqli_real_escape_string($db,$_POST['password']);

	    if(empty($username)){
		array_push($errors, "Your username is required");
	    }

		if(empty($password)){
		array_push($errors, "Your password is required");
	}

	    if(count($errors)==0){
	    	$password=md5($password);
	    	$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
	    	$result=mysqli_query($db,$query);
	    	if(mysqli_num_rows($result)==1){
	    		$_SESSION['username']=$username;
		       
		        header('location:success.php');
	    	}
	    	else{
	    		array_push($errors,"Wrong username/password");
	    		header('location: index.php');
	    	}
	    }
	}

	

    


     if(isset($_GET['logout'])){
     	session_destroy();
     	unset($_SESSION['username']);
     	header('location:index.php');
     }



?>