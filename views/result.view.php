<div class="row">
    <div class="col-md-12 col-md-offset-3">
        <h2 class="text-center myfont">Resultaat</h2>
        
        <div class="text-center card text-white bg-info mb-3" 
             style="max-width: 36rem; margin: 0 auto;">
            <div class="card-header">Verwachting</div>
            <div class="card-body">
                <h5 class="card-title">81 jaar</h5>
                <p class="card-text">Gefeliciteerd! U heeft nog 37 jaar te leven.</p>
            </div>
        </div>

        <?php if (isset($_SESSION['age'])) : ?>
            <p><span class="badge badge-primary">Leeftijd:</span> <?= $_SESSION['age']; ?></p>   
        <?php endif; ?>

        <?php if (isset($_SESSION['situation'])) : ?>
            <p><span class="badge badge-primary">Situatie:</span> <?= $_SESSION['situation']; ?></p> 
        <?php endif; ?>
        
        <pre><?php print_r($_SESSION); ?></pre> 
    </div>
</div>

<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 100%" 
       aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>