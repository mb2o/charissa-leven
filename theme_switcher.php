<?php
session_start();
error_reporting(0);

if (isset($_POST["submit"])) {
    $stylesArr = array('flatly', 'journal', 'sketchy', 'slate', 'superhero');
    if (isset($_POST['theme']) && in_array($_POST['theme'], $stylesArr)) {
        $style = $_POST['theme'];
        setcookie("theme", $style, time() + (60 * 60 * 24 * 30));
    }

    header("Location: index.php");
    exit();
}

include('inc/header.php');
?>

<div class="row">
    <div class="col-md-12 col-md-offset-3">
        <h2 class="myfont">Kies uw eigen stijl</h2>
        <form class="form-inline my-lg-0" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <select class="form-control" id="theme" name="theme">
                <option value="flatly" <?php echo ($_SESSION['theme'] == "flatly" ? 'selected' : ''); ?>>flatly</option>
                <option value="journal" <?php echo ($_SESSION['theme'] == "journal" ? 'selected' : ''); ?>>journal</option>
                <option value="sketchy" <?php echo ($_SESSION['theme'] == "sketchy" ? 'selected' : ''); ?>>sketchy</option>
                <option value="slate" <?php echo ($_SESSION['theme'] == "slate" ? 'selected' : ''); ?>>slate</option>
                <option value="superhero" <?php echo ($_SESSION['theme'] == "superhero" ? 'selected' : ''); ?>>superhero</option>
            </select>
            <button type="submit" id="submit" name="submit" class="btn btn-success">Wijzig</button>
        </form>
    </div>
</div>

<?php include('inc/footer.php'); ?>
