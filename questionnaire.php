<?php

if (isset($_POST["submit"])) {
    if (1 === 1) {
		// Alles is OK, door naar het resultaat
        header('Location: result.php');
        exit();
    }
}

include('inc/header.php');

?>

<div class="row">
    <div class="col-md-12 col-md-offset-3">
        <h2 class="text-center myfont">Vragenlijst</h2>
            <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="control-label text-warning">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="control-label text-warning">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputAddress" class="control-label text-warning">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>

                <div class="form-group">
                    <label for="inputAddress2" class="control-label text-warning">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity" class="control-label text-warning">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState" class="control-label text-warning">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip" class="control-label text-warning">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label text-warning" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Toon Resultaat" class="btn btn-success">
                    </div>
                </div>

            </form>

            <div class="form-group">
                <pre><?php print_r($_POST); ?></pre>
            </div>
        </form> 
    </div>
</div>

<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<?php include('inc/footer.php'); ?>
