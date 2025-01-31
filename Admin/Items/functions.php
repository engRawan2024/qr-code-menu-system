	
	
	<?php
function getItemById($pdo, $id) {
    $query = "SELECT * FROM Items WHERE ID = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getCategories($pdo) {
    $query = "SELECT * FROM categories";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>