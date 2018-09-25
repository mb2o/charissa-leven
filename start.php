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
		<form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>

			<div class="form-group">
				<label class="control-label">Leeftijd</label>
				<div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="age" id="under18" value="under18"
						<?php echo ($_POST['age'] == "under18" ? 'checked' : ''); ?>>
						<label class="form-check-label" for="under18">
							Ik ben jonger dan 18 jaar
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="age" id="over18" value="over18"
						<?php echo ($_POST['age'] == "over18" ? 'checked' : ''); ?>>
						<label class="form-check-label" for="over18">
							Ik ben 18 jaar of ouder
						</label>
					</div>
				</div>
				<?php echo "<p class='text-danger'>$errAge</p>"; ?>
			</div>

			<div class="form-group">
				<label class="control-label">Selecteer wat van toepassing is op jouw situatie</label>
				<div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="situation" id="school" value="school"
						<?php echo ($_POST['situation'] == "school" ? 'checked' : ''); ?>>
						<label class="form-check-label" for="school">
							Ik ga full-time naar school
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="situation" id="job" value="job"
						<?php echo ($_POST['situation'] == "job" ? 'checked' : ''); ?>>
						<label class="form-check-label" for="job">
							Ik heb een full-time baan
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="situation" id="jobschool" value="jobschool"
						<?php echo ($_POST['situation'] == "jobschool" ? 'checked' : ''); ?>>
						<label class="form-check-label" for="jobschool">
							Ik werk en ga naar school
						</label>
					</div>
				</div>
				<?php echo "<p class='text-danger'>$errSituation</p>"; ?>
			</div>

			<div class="form-group">
				<label for="human" class="control-label">2 + 3 = ?</label>
				<div class="">
					<input type="text" class="form-control" id="human" name="human">
					<?php echo "<p class='text-danger'>$errHuman</p>"; ?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2">
					<input id="submit" name="submit" type="submit" value="Ga Verder" class="btn btn-primary">
				</div>
			</div>

			<div class="form-group">
				<div><?php echo $result; ?></div>
			</div>

			<div class="form-group">
				<pre><?php print_r($_POST); ?></pre>
			</div>
		</form> 
	</div>
</div><!-- End row -->

<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<?php include('inc/footer.php'); ?>