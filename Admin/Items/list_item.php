	<?php include('../../includes/header.php');
	 
// Fetch books from the database
$query = "SELECT ID, name, image FROM Items";
$stmt = $pdo->prepare($query);
$stmt->execute();
$Items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
		
	
	?>  
     <body>	
   

		   
<div class="header-form">
   <a href="add_item.php" >  <h1>  إضافة صنف جديد الى قائمة الأصناف</h1>  </a>
	 </div>
	
	
	<div class="menuSection">
	
	
	
 <div class="menu-list" >
            <?php foreach ($Items as $item) : ?>
                <div class="menu-item">
                    <img src="../../images/<?= htmlspecialchars($item['image']) ?>" alt="menu image">
                    <h2><?= htmlspecialchars($item['name']) ?></h2>
                   
                    <div class="actions">
                        <a href="item_details.php?id=<?= $item['ID'] ?>">عرض</a>
						
                        <a href="update_item.php?id=<?= $item['ID'] ?>">تعديل الصنف</a>
						
                        <a href="delete_item.php?id=<?= $item['ID'] ?>"  
                           onclick="return confirm('Are you sure you want to delete this item?');">حذف الصنف</a>
                    </div> 
					
                </div>
            <?php endforeach; ?>
        </div>
	
	
	
	     </div>
	
	
 
 
</body>
	


 <?php include ('../../includes/footer.php'); ?>
	

