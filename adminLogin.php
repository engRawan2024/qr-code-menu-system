	
<?php 
  include ('includes/configConnect.php');

  
	

if(isset($_POST['loginAdmin'])) {

		$UserName	= ($_POST['UserName']);
		$adminpassword= ($_POST['password']); 
	



     

	
$sql="SELECT * FROM admin WHERE  username =('$UserName') AND password=('$adminpassword')";    
			$statement=$pdo->prepare($sql); 
			$statement->execute();
			$result=$statement->fetchAll();
	if ($result)  { 
	foreach($result as $row){
	$user_id=$result['admin'];
	
	$_SESSION['user_id']=1;
	$_SESSION['username']=$result['Username'];
  	$_SESSION['success']="you are now logged in";
  	header('location:Admin/Items/list_item.php');  
	
	}
} 
 else{  
        
		echo "The UserName/Password not correct";
		
	}

} 
  
  
  

?>

<!DOCTYPE html>
<html dir="rtl">
<head>
	<title>admin</title>
	
	<link rel="stylesheet" type="text/css" href="assets/loginStyle.css">
	
</head>
<body>
	<div class="header-form">
	<h2> دخول إدارة الكافتيريا </h2>
</div>

<form method="post" action="adminLogin.php" name="login"  >

	

	<div class="row">
		<label>اسم المستخدم</label>
		<input type="text" name="UserName" id="name"  placeholder="إدخل اسم المستخدم هنا" required>

	</div>




	<div class="row">
		<label>كلمة المرور</label>
		<input type="Password" name="password" id="" placeholder="أدخل كلمة المرور هنا" required>



	<div class="row">
		<button type="submit" name="loginAdmin" class="btn"> دخول</button>
	</div>


</form>
