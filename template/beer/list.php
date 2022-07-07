<h1>Découvrir notre sélection de bière</h1>

<div class="card-container">
    <?php foreach ($data['beers'] as $beer) { ?>
        <div class="card card-beer">
            <h3><?php echo $beer->getName(); ?></h3>
            <img src="<?php echo $beer->getPicture(); ?>" alt="<?php echo $beer->getName(); ?>">
            <p><?php echo $beer->getStyle()->getName(); ?></p>
        </div>
    <?php } ?>
</div>
