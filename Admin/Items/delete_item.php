	<?php

include_once('../../includes/header.php');
// Get book ID from query string
$item_id = $_GET['id'] ?? null;

if (!$item_id) {
    die('ITEM ID is required');
}

// Delete book from database
$query = "DELETE FROM items WHERE ID = :id";
$stmt = $pdo->prepare($query);
$stmt->execute([':id' => $item_id]);

header('Location:list_item.php');
exit;
?>
