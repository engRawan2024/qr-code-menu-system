	

<?php
// Include database connection and reusable functions
include_once('../../includes/header.php');
include 'functions.php';

// Get book ID from query string
$item_id = $_GET['id'] ?? null;

if (!$item_id) {
    die('Item ID is required');
}

// Fetch Item and categories
$item = getItemById($pdo, $item_id);
$categories = getCategories($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
   
    $category_id = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
     
	   $image_tmp = $_FILES['image']['tmp_name'];
    // Validate and upload new image if uploaded
    $imagePath = $item['image'];
    if ($image && $image['tmp_name']) {
        $imagePath = "../../images/$image";
        move_uploaded_file($image_tmp, $imagePath);
    }

    // Update item in the database
    $query = "UPDATE Items SET name = :name, categoryID = :category_id, price = :price, description = :description, image = :image WHERE ID = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':name' => $name,
       
        ':category_id' => $category_id,
        ':price' => $price,
        ':description' => $description,
        ':image' => $image,
        ':id' => $item_id,
    ]);

    header('Location:list_item.php');
    exit;
}
?>

<body>
    
    <main>
        <h1>تعديل الصنف</h1>
        <form action="update_item.php?id=<?= $item_id ?>" method="POST" enctype="multipart/form-data">
		    <div class="row"> 
            <label for="name">الإسم</label>
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($item['name']) ?>" required>
             </div> 
			
			   <div class="row"> 
            <label for="category">التصنيف:</label>
            <select id="category" name="category" required>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category['ID'] ?>" <?= $category['ID'] == $item['categoryID'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($category['CategoryName']) ?> 
                    </option>
                <?php endforeach; ?>
            </select>
              </div> 
			    <div class="row"> 
            <label for="price">السعر:</label>
            <input type="number" id="price" name="price" step="1.00" value="<?= htmlspecialchars($item['price']) ?>" required>
               </div> 
			    <div class="row"> 
            <label for="description">الوصف:</label>
            <textarea id="description" name="description" required><?= htmlspecialchars($item['description']) ?></textarea>
              </div> 
			   <div class="row"> 
            <label for="image">الصورة:</label>
            <input type="file" id="image" name="image" value="<? htmlspecialchars($item['image']) ?>">
            <p>الصورة الحالية: <img src="../../images/<?= htmlspecialchars($item['image']) ?>" alt="صورة الصنف" width="100"></p>
			 </div> 
               <div class="row"> 
            <button type="submit" class="btn">تعديل الصنف</button>
			 </div> 
			  
        </form>
    </main>

    <!-- Footer -->
    <?php include_once '../../includes/footer.php'; ?>
</body>

</html>
