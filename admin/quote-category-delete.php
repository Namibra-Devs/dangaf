<?php require_once('./inc/header.php'); ?>

<?php
// quoteing the direct access of this page.
if (!isset($_REQUEST['id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM tbl_quote_category WHERE quote_category_id=?");
	$statement->execute(array($_REQUEST['id']));
	$total = $statement->rowCount();
	if ($total == 0) {
		header('location: logout.php');
		exit;
	}
}
?>

<?php

// Getting photo ID to unlink from folder
$statement = $pdo->prepare("SELECT * FROM tbl_quote_category WHERE quote_category_id=?");
$statement->execute(array($_REQUEST['id']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	unlink('../assets/uploads/' . $row['photo']);
}

// Delete from tbl_quote_category
$statement = $pdo->prepare("DELETE FROM tbl_quote_category WHERE quote_category_id=?");
$statement->execute(array($_REQUEST['id']));

// Delete from tbl_quote_category
$statement = $pdo->prepare("DELETE FROM tbl_quote_category WHERE quote_category_id=?");
$statement->execute(array($_REQUEST['id']));

header('location: quote-category.php');
?>