<?php 
$msg="";

if(isset($_POST['upload'])){
	 //$target="images/".basename($_FILES['image']['name']);

	$db=mysqli_connect('localhost','root','759111167','comments');
	//$image=$_FILES['image']['name'];
	$name=$_POST['name'];
	$comment=$_POST['comment'];
	$sql="INSERT INTO comments(name,comment) VALUES ('$name', '$comment')";
	mysqli_query($db,$sql);

    
}


?>