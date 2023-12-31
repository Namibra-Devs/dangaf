<?php require_once('./inc/header.php'); ?>

<?php
if (isset($_POST['form1'])) {
	$valid = 1;

	if (empty($_POST['quote_category_name'])) {
		$valid = 0;
		$error_message .= "quote_type Name can not be empty<br>";
	} else {
		// Duplicate quote_type checking
		$statement = $pdo->prepare("SELECT * FROM tbl_quote_category WHERE quote_category_name=?");
		$statement->execute(array($_POST['quote_category_name']));
		$total = $statement->rowCount();
		if ($total) {
			$valid = 0;
			$error_message .= "quote_type Name already exists<br>";
		}
	}

	if ($valid == 1) {

		// Getting auto increment id for this quote_type
		$statement = $pdo->prepare("SHOW TABLE STATUS LIKE 'tbl_quote_category'");
		$statement->execute();
		$result = $statement->fetchAll();
		foreach ($result as $row) {
			$ai_id = $row[10];
		}

		if ($_POST['quote_category_slug'] == '') {
			// generate slug
			$temp_string = strtolower($_POST['quote_category_name']);
			$quote_category_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
		} else {
			$temp_string = strtolower($_POST['quote_category_slug']);
			$quote_category_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
		}

		// if slug already exists, then rename it
		$statement = $pdo->prepare("SELECT * FROM tbl_quote_category WHERE quote_category_slug=?");
		$statement->execute(array($quote_category_slug));
		$total = $statement->rowCount();
		if ($total) {
			$quote_category_slug = $quote_category_slug . '-1';
		}

		// Saving data into the main table tbl_quote_category
		$statement = $pdo->prepare("INSERT INTO tbl_quote_category (quote_category_name,quote_category_slug,meta_title,meta_keyword,meta_description) VALUES (?,?,?,?,?)");
		$statement->execute(array($_POST['quote_category_name'], $quote_category_slug, $_POST['meta_title'], $_POST['meta_keyword'], $_POST['meta_description']));

		$success_message = 'quote_category is added successfully.';
	}
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Add quote_type</h1>
	</div>
	<div class="content-header-right">
		<a href="quote-category.php" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if ($error_message) : ?>
				<div class="callout callout-danger">

					<p>
						<?php echo $error_message; ?>
					</p>
				</div>
			<?php endif; ?>

			<?php if ($success_message) : ?>
				<div class="callout callout-success">

					<p><?php echo $success_message; ?></p>
				</div>
			<?php endif; ?>

			<form class="form-horizontal" action="" method="post">

				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">quote_type Name <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="quote_category_name" placeholder="Example: Health Tips">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">quote_type Slug </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="quote_category_slug" placeholder="Example: health-tips">
							</div>
						</div>
						<h3 class="seo-info">SEO Information</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Title </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_title">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Keywords </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_keyword" style="height:100px;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Description </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" style="height:100px;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>

			</form>


		</div>
	</div>

</section>

<?php require_once('./inc/footer.php'); ?>