<?php
session_start();
error_reporting(0);

if (isset($_POST["submit"])) {
	$_SESSION['age'] = $_POST['age'];
	$_SESSION['situation'] = $_POST['situation'];

	if (!$_POST['age']) {
		$errAge = 'Geef aan of je ouder bent dan 18';
	}

	if (!$_POST['situation']) {
		$errSituation = 'Geef aan of je naar school gaat, een baan hebt of beide doet';
	}

	if (intval($_POST['human']) !== 5) {
		$errHuman = 'Je anti-spam is fout';
	}

	if (!$errAge && !$errSituation && !$errHuman) {
		// Alles is OK, door naar de vragenlijst
		header('Location: questionnaire.php');
		exit();
	}
}

include('inc/header.php');
?>

<div class="row">
	<div class="col-md-12 col-md-offset-3">
		<h2 class="text-center myfont">Algemeen</h2>
		<form class="form-horizontal" role="form" method="post" 
		      action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>

			<div class="form-group">
				<label class="control-label text-warning">Leeftijd</label>
				<div class="custom-control custom-radio">
					<input type="radio" id="under18" name="age" value="under18" 
					       class="custom-control-input" <?php echo ($_POST['age'] == "under18" ? 'checked' : ''); ?>>
					<label class="custom-control-label" for="under18">Ik ben jonger dan 18 jaar</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="over18" name="age" value="over18" 
					       class="custom-control-input" <?php echo ($_POST['age'] == "over18" ? 'checked' : ''); ?>>
					<label class="custom-control-label" for="over18">Ik ben 18 jaar of ouder</label>
				</div>
				<?= "<p class='text-danger'>$errAge</p>"; ?>
			</div>

			<div class="form-group">
				<label class="control-label text-warning">Selecteer wat van toepassing is op jouw situatie</label>
				<div class="custom-control custom-radio">
					<input type="radio" id="school" name="situation" value="school" 
					       class="custom-control-input" <?= ($_POST['situation'] == "school" ? 'checked' : ''); ?>>
					<label class="custom-control-label" for="school">Ik ga full-time naar school</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="job" name="situation" value="job" 
					       class="custom-control-input" <?= ($_POST['situation'] == "job" ? 'checked' : ''); ?>>
					<label class="custom-control-label" for="job">Ik heb een full-time baan</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="jobschool" name="situation" value="jobschool" 
						   class="custom-control-input" <?= ($_POST['situation'] == "jobschool" ? 'checked' : ''); ?>>
					<label class="custom-control-label" for="jobschool">Ik werk en ga naar school</label>
				</div>
				<?= "<p class='text-danger'>$errSituation</p>"; ?>
			</div>

			<div class="form-group">
				<label for="human" class="control-label text-warning">2 + 3 = ?</label>
				<div class="">
					<input type="text" class="form-control" id="human" name="human">
					<?= "<p class='text-danger'>$errHuman</p>"; ?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2">
					<input id="submit" name="submit" type="submit" value="Ga Verder" 
						   class="btn btn-success">
				</div>
			</div>

			<div class="form-group">
				<div><?= $result; ?></div>
			</div>

			<div class="form-group">
				<pre><?php print_r($_POST); ?></pre>
			</div>
		</form> 
	</div>
</div><!-- End row -->

<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 33%" 
  	   aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<?php include('inc/footer.php'); ?>
