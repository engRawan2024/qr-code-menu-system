<?php

include_once '../../includes/header.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $catName = $_POST['catName'];


    $stmt = $pdo->prepare("INSERT INTO categories (CategoryName) VALUES (:catName)");
    $stmt->execute(['catName' => '$catName']);
    echo '<p class="message">category added successfully!</p>';
}

?>

<h2>إضافة تصنيف جديد</h2>
<form method="POST">
    <div class="row"> 
    <p><label>إسم التصنيف:</label>
        <input type="text" name="catName" required>
    </p>
	</div>
	
	 <div class="row"> 
    <p><input type="submit" value="Add category"></p>
	</div>
</form>

<?php include '../../includes/footer.php'; ?>
