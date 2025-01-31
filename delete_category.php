

 <?php
include_once('../../includes/header.php');
// Check if the ID is provided in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Verify if the subcategory exists
    $stmt = $pdo->prepare("SELECT ID FROM categories WHERE ID = :id");
    $stmt->execute(['id' => $id]);
    $category = $stmt->fetch();

    if ($category) {
        // If the subcategory exists, delete it
        $deleteStmt = $pdo->prepare("DELETE FROM categories WHERE ID = :id");
        $deleteStmt->execute(['id' => $id]);

        // Redirect to the list page with a success message
        header("Location: category_list.php?message=category+deleted+successfully");
        exit;
    } else {
        // If no subcategory is found, redirect with an error message
        header("Location: category_list.php?error=category+not+found");
        exit;
    }
} else {
    // If the ID is not valid, redirect with an error message
    header("Location: category_list.php?error=Invalid+category+ID");
    exit;
}
