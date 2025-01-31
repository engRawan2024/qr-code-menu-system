

<?php include_once('../../includes/header.php'); 

// Get item ID from the query string
$item_id = $_GET['id'] ?? null;

if (!$item_id) {
    die('item ID is required');
}

// Fetch item details from the database
$query = "SELECT items.*, categories.CategoryName FROM items 
          JOIN categories ON items.categoryID = categories.ID
          WHERE items.ID = :id";
$stmt = $pdo->prepare($query);
$stmt->execute([':id' => $item_id]);
$item = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$item) {
    die('item not found');
}
	?>  
	
	
	
	
	
	
<body> 
   <main>
        <h2><?= htmlspecialchars($item['name']) ?></h2>
        <img src="../../images/<?= htmlspecialchars($item['image']) ?>" alt="item image" width="350" height="450">
        <p><strong> إسم الصنف :</strong> <?= htmlspecialchars($item['name']) ?></p>
       
        <p><strong>التصنيف :</strong> <?= htmlspecialchars($item['CategoryName']) ?></p>
        <p><strong>السعر :</strong> SAR<?= htmlspecialchars($item['price']) ?></p>
        <p><strong>الوصف :</strong> <?= htmlspecialchars($item['description']) ?></p>
    </main>

</body>
 <?php include ('../../includes/footer.php'); ?>


