
<?php include ('../../includes/header.php');


$stmt = $pdo->prepare("
    SELECT s.ID, s.CategoryName, s.CategoryName 
    FROM categories s 
    
");
$stmt->execute();
$categories = $stmt->fetchAll();
?>
<section>
<h2> قائمة التصنيفات</h2>
<p><a href="add_category.php" class="btn1">إضافة تصنيف جديد</a></p>

<table>
    <thead>
        <tr>
            <th>الرقم </th>
            <th>إسم التصنيف</th>
            
            <th>الحدث</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($categories) > 0): ?>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= htmlspecialchars($category['ID']) ?></td>
                    <td><?= htmlspecialchars($category['CategoryName']) ?></td>
                   
                    <td>
                        <a href="update_category.php?id=<?= $category['ID'] ?>"> تعديل </a> |
                        <a href="delete_category.php?id=<?= $category['ID'] ?>" 
                           onclick="return confirm('Are you sure you want to delete this category?');"> حذف </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4">No subcategories found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>
</section>
<?php include '../../includes/footer.php'; ?>
