<?php
	session_start();
	include "DBconnected.php";
	if(isset($_POST['sign_up'])){
		$email=$_POST['email'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$pass=$_POST['password'];
		$gender=$_POST['gender'];
		$birth=$_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
		$phone=$_POST['phone'];
		$city=$_POST['town'];
		$aboutme=$_POST['aboutme'];
		if(isset($_POST['status']))
			$status=$_POST['status'];
		else
			$status="";	
		if($gender=="male"){
			$profile="images/male.png";
		}
		if($gender=="female"){
			$profile="images/female.png";
		}
		$user_pass_encrypt=sha1($pass);
		$query1="SELECT * FROM USERS WHERE email='$email'";
		$result1=mysqli_query($conn,$query1);
		if(mysqli_num_rows($result1)==0){
			echo $email.$fname.$lname.$pass.$gender.$birth.$phone.$city.$status.$aboutme;	
			$query2="INSERT INTO USERS (`firstname`, `lastname`, `password`, `email`, `phonenumber`, `gender`, `birthdate`, `profile`, `hometown`, `marital_status`, `About_me`)
					VALUES('$fname','$lname','$user_pass_encrypt','$email','$phone','$gender','$birth','$profile','$city','$status','$aboutme')";
			$result2= mysqli_query($conn,$query2);
			if($result2){
				$query3="SELECT user_id FROM USERS WHERE email='$email'";
				$result3=mysqli_query($conn,$query3);
				$res=mysqli_fetch_assoc($result3);
				$_SESSION['id']=$res['user_id'];
				$_SESSION['login']=1;
				header('location:profile.php');
			}
			else{
				$_SESSION['error2']='Error in database connection!';
				header('location:index.php#toregister');
			}
		}
		else{
			$_SESSION['error2']='Invalid Email!';
			header('location:index.php#toregister');
		}	
	}
	else if(isset($_POST['log_in'])){
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$user_pass_encrypt=sha1($pass);
		$query1="SELECT * FROM USERS WHERE email= '$email' AND password='$user_pass_encrypt'";
		$result1= mysqli_query($conn,$query1);
		if(mysqli_num_rows($result1)==1){
			$res=mysqli_fetch_assoc($result1);
			$_SESSION['id']=$res['user_id'];
			$_SESSION['login']=1;
			header('location:profile.php');
		}
		else{
			$_SESSION['error1']='Invalid Email OR Password!';
			header('location:index.php#tologin');
		}
	}
?>