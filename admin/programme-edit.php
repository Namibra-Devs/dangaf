<?php require_once('./inc/header.php'); ?>

<?php
if (isset($_POST['form1'])) {
	$valid = 1;

	if (empty($_POST['programme_title'])) {
		$valid = 0;
		$error_message .= 'programme title can not be empty<br>';
	} else {
		// Duplicate programme_category checking
		// current programme title that is in the database
		$statement = $pdo->prepare("SELECT * FROM tbl_programme WHERE programme_id=?");
		$statement->execute(array($_REQUEST['id']));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach ($result as $row) {
			$current_programme_title = $row['programme_title'];
		}

		$statement = $pdo->prepare("SELECT * FROM tbl_programme WHERE programme_title=? and programme_title!=?");
		$statement->execute(array($_POST['programme_title'], $current_programme_title));
		$total = $statement->rowCount();
		if ($total) {
			$valid = 0;
			$error_message .= 'programme title already exists<br>';
		}
	}

	if (empty($_POST['programme_content'])) {
		$valid = 0;
		$error_message .= 'programme content can not be empty<br>';
	}

	if (empty($_POST['programme_content_short'])) {
		$valid = 0;
		$error_message .= 'programme content (short) can not be empty<br>';
	}

	if (empty($_POST['programme_date'])) {
		$valid = 0;
		$error_message .= 'programme publish date can not be empty<br>';
	}

	if (empty($_POST['programme_category_id'])) {
		$valid = 0;
		$error_message .= 'You must have to select a programme_category<br>';
	}


	$path = $_FILES['photo']['name'];
	$path_tmp = $_FILES['photo']['tmp_name'];

	$previous_photo = $_POST['previous_photo'];

	if ($path != '') {
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		$file_name = basename($path, '.' . $ext);
		if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'JPG' && $ext != 'PNG' && $ext != 'JPEG' && $ext != 'GIF') {
			$valid = 0;
			$error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
		}
	}

	if ($valid == 1) {

		if ($_POST['programme_slug'] == '') {
			// generate slug
			$temp_string = strtolower($_POST['programme_title']);
			$programme_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);;
		} else {
			$temp_string = strtolower($_POST['programme_slug']);
			$programme_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
		}

		// if slug already exists, then rename it
		$statement = $pdo->prepare("SELECT * FROM tbl_programme WHERE programme_slug=? AND programme_title!=?");
		$statement->execute(array($programme_slug, $current_programme_title));
		$total = $statement->rowCount();
		if ($total) {
			$programme_slug = $programme_slug . '-1';
		}

		// If previous image not found and user do not want to change the photo
		if ($previous_photo == '' && $path == '') {
			$statement = $pdo->prepare("UPDATE tbl_programme SET programme_title=?, programme_slug=?, programme_content=?, programme_content_short=?, programme_date=?, programme_category_id=?, meta_title=?, meta_keyword=?, meta_description=? WHERE programme_id=?");
			$statement->execute(array($_POST['programme_title'], $programme_slug, $_POST['programme_content'], $_POST['programme_content_short'], $_POST['programme_date'], $_POST['programme_category_id'], $_POST['meta_title'], $_POST['meta_keyword'], $_POST['meta_description'], $_REQUEST['id']));
		}

		// If previous image found and user do not want to change the photo
		if ($previous_photo != '' && $path == '') {
			$statement = $pdo->prepare("UPDATE tbl_programme SET programme_title=?, programme_slug=?, programme_content=?, programme_content_short=?, programme_date=?, programme_category_id=?, meta_title=?, meta_keyword=?, meta_description=? WHERE programme_id=?");
			$statement->execute(array($_POST['programme_title'], $programme_slug, $_POST['programme_content'], $_POST['programme_content_short'], $_POST['programme_date'], $_POST['programme_category_id'], $_POST['meta_title'], $_POST['meta_keyword'], $_POST['meta_description'], $_REQUEST['id']));
		}


		// If previous image not found and user want to change the photo
		if ($previous_photo == '' && $path != '') {

			$final_name = 'programme-' . $_REQUEST['id'] . '.' . $ext;
			move_uploaded_file($path_tmp, '../assets/uploads/' . $final_name);

			$statement = $pdo->prepare("UPDATE tbl_programme SET programme_title=?, programme_slug=?, programme_content=?, programme_content_short=?, programme_date=?, photo=?, programme_category_id=?, meta_title=?, meta_keyword=?, meta_description=? WHERE programme_id=?");
			$statement->execute(array($_POST['programme_title'], $programme_slug, $_POST['programme_content'], $_POST['programme_content_short'], $_POST['programme_date'], $final_name, $_POST['programme_category_id'], $_POST['meta_title'], $_POST['meta_keyword'], $_POST['meta_description'], $_REQUEST['id']));
		}


		// If previous image found and user want to change the photo
		if ($previous_photo != '' && $path != '') {

			unlink('../assets/uploads/' . $previous_photo);

			$final_name = 'programme-' . $_REQUEST['id'] . '.' . $ext;
			move_uploaded_file($path_tmp, '../assets/uploads/' . $final_name);

			$statement = $pdo->prepare("UPDATE tbl_programme SET programme_title=?, programme_slug=?, programme_content=?, programme_content_short=?, programme_date=?, photo=?, programme_category_id=?, meta_title=?, meta_keyword=?, meta_description=? WHERE programme_id=?");
			$statement->execute(array($_POST['programme_title'], $programme_slug, $_POST['programme_content'], $_POST['programme_content_short'], $_POST['programme_date'], $final_name, $_POST['programme_category_id'], $_POST['meta_title'], $_POST['meta_keyword'], $_POST['meta_description'], $_REQUEST['id']));
		}

		$success_message = 'programme is updated successfully!';
	}
}
?>

<?php
if (!isset($_REQUEST['id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM tbl_programme WHERE programme_id=?");
	$statement->execute(array($_REQUEST['id']));
	$total = $statement->rowCount();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	if ($total == 0) {
		header('location: logout.php');
		exit;
	}
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit programme</h1>
	</div>
	<div class="content-header-right">
		<a href="programme.php" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_programme WHERE programme_id=?");
$statement->execute(array($_REQUEST['id']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$programme_title         = $row['programme_title'];
	$programme_slug          = $row['programme_slug'];
	$programme_content       = $row['programme_content'];
	$programme_content_short = $row['programme_content_short'];
	$programme_venue 		 = $row['programme_venue'];
	$programme_link          = $row['programme_link'];
	$programme_date          = $row['programme_date'];
	$photo               = $row['photo'];
	$programme_category_id   = $row['programme_category_id'];
	$meta_title          = $row['meta_title'];
	$meta_keyword        = $row['meta_keyword'];
	$meta_description    = $row['meta_description'];
}
?>

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

			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">programme Title <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="programme_title" value="<?php echo $programme_title; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">programme Slug</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="programme_slug" value="<?php echo $programme_slug; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">programme Content <span>*</span></label>
							<div class="col-sm-8">
								<textarea class="form-control editor" name="programme_content"><?php echo $programme_content; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">programme Content (Short) <span>*</span></label>
							<div class="col-sm-8">
								<textarea class="form-control" name="programme_content_short" style="height:100px;"><?php echo $programme_content_short; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">programme Venue <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="programme_venue" value="<?php echo $programme_venue; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">programme Link <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="programme_link" value="<?php echo $programme_link; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">programme Date <span>*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="programme_date" id="datepicker" value="<?php echo $programme_date; ?>">(Format: dd-mm-yy)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Existing Featured Photo</label>
							<div class="col-sm-6" style="padding-top:6px;">
								<?php
								if ($photo == '') {
									echo 'No photo found';
								} else {
									echo '<img src="../assets/uploads/' . $photo . '" class="existing-photo" style="width:200px;">';
								}
								?>
								<input type="hidden" name="previous_photo" value="<?php echo $photo; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Change Featured Photo</label>
							<div class="col-sm-6" style="padding-top:6px;">
								<input type="file" name="photo">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Categories <span>*</span></label>
							<div class="col-sm-3">
								<select class="form-control select2" name="programme_category_id">
									<?php
									$i = 0;
									$statement = $pdo->prepare("SELECT * FROM tbl_programme_category ORDER BY programme_category_name ASC");
									$statement->execute();
									$result = $statement->fetchAll(PDO::FETCH_ASSOC);
									foreach ($result as $row) {
									?>
										<option value="<?php echo $row['programme_category_id']; ?>" <?php if ($row['programme_category_id'] == $programme_category_id) {
																											echo 'selected';
																										} ?>><?php echo $row['programme_category_name']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>
						<h3 class="seo-info">SEO Information</h3>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Meta Title </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="meta_title" value="<?php echo $meta_title; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Meta Keywords </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="meta_keyword" value="<?php echo $meta_keyword; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Meta Description </label>
							<div class="col-sm-8">
								<textarea class="form-control" name="meta_description" style="height:200px;"><?php echo $meta_description; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</section>

<?php require_once('./inc/footer.php'); ?>