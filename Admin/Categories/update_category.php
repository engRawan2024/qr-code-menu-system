<?php
include ('../../includes/header.php');
// Fetch the subcategory to update
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM categories WHERE ID = :id");
$stmt->execute(['id' => $id]);
$category = $stmt->fetch();

if (!$category) {
    die('category not found.');
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoryName = $_POST['catName'];
   

    $updateStmt = $pdo->prepare("UPDATE categories SET CategoryName = :catName WHERE ID = :id");
    $updateStmt->execute(['catName' => $categoryName, 'id' => $id]);
    echo '<p class="message"> تم تعديل التصنيف بنجاح</p>';
}

?>

<h2>تعديل التصنيف</h2>
<form method="POST">
    <p><input type="hidden" name="id" value="<?= htmlspecialchars($category['ID']) ?>"></p>
	 <div class="row"> 
    <p><label> إسم التصنيف :</label>
        <input type="text" name="catName" value="<?= htmlspecialchars($category['CategoryName']) ?>" required>
    </p>
	</div>
	
	<div class="row"> 
    <p><input type="submit" value="Update category" " 
                           onclick="return confirm('هل تريد ـأكيد التعديل');"></p>
	</div>
</form>

<?php include_once '../../includes/footer.php'; ?>
