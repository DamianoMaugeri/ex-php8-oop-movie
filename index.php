<?php
require_once './Traits/Valutazione.php';
require_once './Models/Genre.php';
require_once './Models/Movie.php';
require_once './db.php';






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <h1 class='text-center'>I tuoi Film</h1>
    <div class="container m-5">
        <div class="row">
        <?php foreach ($movies as $movie): ?>
            <div class="col-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $movie->titolo; ?></h3>
                        <p class="card-text"><strong>Durata:</strong> <?php echo $movie->durata; ?> min</p>
                        <p class="card-text"><strong>Lingua:</strong> <?php echo $movie->lingua; ?></p>
                        <p class="card-text"><strong>Sottotitoli:</strong> <?php echo $movie->isSubtitled() ? "Sì" : "No"; ?></p>
                        
                        <p class="card-text"><strong>Generi:</strong>
                            <?php echo implode(', ', array_map(fn($g) => $g->nome, $movie->generi)); ?>
                        </p>
                        <p class="card-text"><strong>vietato ai minori di:</strong>
                            <?php echo $movie->getMinRequiredAge() . " anni" ?>
                        </p>


                        <p class="card-text"><strong>Media Voti:</strong> 
                            <?php echo $movie->getValutazioneMedia(); ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        </div>
    </div>

    
    
</body>
</html>