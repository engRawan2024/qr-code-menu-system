<?php   



	include ('../../includes/header.php'); 
	
	
// Fetch subcategories for selection
$query = "SELECT ID, CategoryName FROM categories";
$stmt = $pdo->prepare($query);
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	
	
    $name = $success=$image = "";
    $errors = array("","","","","");
    if(isset($_POST['submit'])){
       
		
		$name= trim($_POST['name']); 
		  if(strlen($name) < 1 ){
            $errors[0] = "MenuItem is required ";
        }
       
	   else{
            $errors[0] ="";
        } 
	   
		
    $category_id = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];
		 
        $image = $_FILES['image']['name'];
	    $image_tmp = $_FILES['image']['tmp_name'];
	     //move uploaded img 
	    move_uploaded_file($image_tmp,"../../images/$image");
		
       
         $postedDate =date("Y/m/d");
       
        
        $valid = true;
        foreach($errors as $error ){
            if($error != "")
                $valid = false;
        }
        if($valid == true){ 
    $query = "INSERT INTO Items (name, categoryID, price, description, image, postedDate) 
	         VALUES (:name, :category_id, :price, :description, :image, :postedDate)";

				$query_run=$pdo->prepare($query);
        $data=[
        ':name' => $name,
        ':category_id' => $category_id,
        ':price' => $price,
        ':description' => $description,
		':image'=> $image,
		':postedDate'=>$postedDate
  		  ];
		  $query_execute=$query_run->execute($data); 
		  if($query_execute) {
		  
            $successInsert = " Menu Item successfully inserted to database";

            			
			}
        else 
       		 $successInsert = "not inserted";
        }
            
    }
?>


    <body>
	
	<html>
<head>
	
</head>


 

<body> 
<center>


  

       <?php if(isset($successInsert)){
	   echo $successInsert;
	   }
	   
	   ?>
	   
<div class="header-form">
     <h2> إضافة صنف جديد الى القائمة </h2>
	 </div>
        <form action="add_item.php" method="POST"    enctype="multipart/form-data"   name="insert" onsubmit="return validateinsert()" >
            <h3 class="success"><?php echo $success;?></h3>
           
			<div class="row"> 
			
                <label> اسم الصنف   </label>
                <input class="inputs" type="text"  name="name" value ="<?php if(isset($name)){ echo $name;}?>" placeholder="اسم الصنف  ">
                <span class="error"><?php echo $errors[0];?></span>
                 </div> 
			 
            
            <div class="row"> 
           
			 <label for="Category"> التصنيف </label>
            <select id="category" name="category" required>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category['ID'] ?>"><?= htmlspecialchars($category['CategoryName']) ?></option>
                <?php endforeach; ?>
            </select>
			</div>
             <div class="row"> 
            <label for="price">السعر :</label>
            <input type="number" id="price" name="price" step="0.01" required>
              </div>
			  
			   
            <div class="row">
                <label> الوصف : </label>
                <textarea  name="description" placeholder="description"><?php if(isset($description))
				                                                            echo $description
																			?></textarea>
              
            </div>
			
			<div class="row">
		<label> صورة الصنف الجديد </label>
		<input type="file" name="image">

	        </div>
            <div class="row">
                <input class="btn" type="submit" value="إضافة" name="submit">
            </div>
            
        </form>
		
		

		<?php include ('../../includes/footer.php'); ?>