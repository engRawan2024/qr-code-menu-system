<?php
 include('includes/customerHeader.php'); 
// Fetch categories
$categoriesQuery = "SELECT * FROM categories";
$categoriesStmt = $pdo->prepare($categoriesQuery);
$categoriesStmt->execute();
$categories = $categoriesStmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch items based on selected category
$categoryID = isset($_GET['category']) ? $_GET['category'] : 'all';
if ($categoryID === 'all') {
    $itemsQuery = "SELECT items.*, categories.CategoryName FROM items 
                   JOIN categories ON items.categoryID = categories.ID";
    $itemsStmt = $pdo->prepare($itemsQuery);
    $itemsStmt->execute();
} else {
    $itemsQuery = "SELECT items.*, categories.CategoryName FROM items 
                   JOIN categories ON items.categoryID = categories.ID 
                   WHERE categories.ID = :categoryID";
    $itemsStmt = $pdo->prepare($itemsQuery);
    $itemsStmt->execute([':categoryID' => $categoryID]);
}
$items = $itemsStmt->fetchAll(PDO::FETCH_ASSOC);
?>



  <!-- Navigation -->
  <nav>
    <ul>
      <a href="?category=all"><li class="<?= $categoryID === 'all' ? 'active' : '' ?>">الكل</li></a>
      <?php foreach ($categories as $category): ?>
        <a href="?category=<?= $category['ID'] ?>">
          <li class="<?= $categoryID == $category['ID'] ? 'active' : '' ?>"><?= $category['CategoryName'] ?></li>
        </a>
      <?php endforeach; ?>
    </ul>
  </nav>

  <!-- Food Items -->
  <div class="food-container">
    <h3><?= $categoryID === 'all' ? 'الكل' : $categories[array_search($categoryID, array_column($categories, 'ID'))]['CategoryName'] ?></h3>
    <?php foreach ($items as $item): ?>
      <div class="food-card">
        <img src="images/<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
        <div class="details">
          <h2><?= $item['name'] ?></h2>
          <p><?= $item['description'] ?></p>
          <div class="price"><?= $item['price'] ?> S.R</div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>