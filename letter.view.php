<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Generated Letter</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen">
		<link rel="stylesheet" href="styles.css" media="screen">
	</head>
	<body>
		<div class="container">
			<?php include 'header.php'; ?>

			<main>
				<h2>Generated Letter</h2>
				<p><strong>Date:</strong> <?= date('F d, Y'); ?></p>
				<p>I hereby declare that <strong><?= strtoupper($firstname . ' ' . $lastname); ?></strong>, who is a <strong><?= $yearOfStudy; ?></strong> student in the faculty of <strong><?= $faculty; ?></strong> is a brilliant student and that <?= $gender; ?> will obtain an A+ in the course INFO2180.</p>

				<h4>Additional Comments</h4>
				<p><?= $comments; ?></p>

        <hr>
				<p>Signed:</p>
				<p>_________________</p>
				<p>The Lecturer of the Course</p>
			</main>

      <?php include 'footer.php'; ?>
    </div>
	</body>
</html>
