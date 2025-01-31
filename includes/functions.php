	
	
	<?php
function getBookById($pdo, $id) {
    $query = "SELECT * FROM Books WHERE ID = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getSubcategories($pdo) {
    $query = "SELECT ID, SubcategoryName FROM subcategories";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>