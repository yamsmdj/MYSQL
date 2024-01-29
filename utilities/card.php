<div class="card w-50 m-auto mb-4" >
<img src="<?=$path ?>" alt="<?= $film['title'] ?>">
<div class="card-body text-center ">
  <h5 class="card-title text-uppercase fs-2"><?= $title ?></h5>
  <p class="card-text ">par : <?= $film['director'] ?></p>
  <div class="d-flex justify-content-around">
    <div>
        <p class="card-text">année de réalisation : <?= $film['year_released'] ?></p>
        <p class="card-text">durée : <?= $film['duration'] ?></p>
        <p class="card-text">genre : <?= $film['genre'] ?></p>
        <p class="card-text">languages : <?= $film['languages'] ?></p>
      </div>
      <div>
        <p class="card-text">de : <?= $film['distributeur'] ?></p>
        <p class="card-text">coût de production : <?= $film['budget'] ?></p>
        <p class="card-text">note des spectateurs : <?= $film['rating'] ?></p>
        <?=$film['rating'] ; ?> / 10 &nbsp; 
        <?php getStar($film['rating']); ?>

        <p class="card-text">nbr d'entrés : <?= $film['box_office'] ?></p>
      </div>
  </div>
    <button type="button" class="btn btn-outline-success">Reserver</button>
</div>
</div>
