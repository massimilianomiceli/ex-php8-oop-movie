<?php

require_once("./db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">
    <div class="container py-5">
        <h1 class="text-center mb-5">Movie Library</h1>
        <div class="row g-4">
            <?php foreach ($movies as $movie) { ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h3 class="card-title">
                                <?= $movie->title; ?>
                            </h3>
                            <h6 class="card-subtitle mb-3 text-body-secondary">
                                Directed by <?= $movie->director; ?>
                            </h6>
                            <p class="card-text">
                                <strong>Year:</strong> <?= $movie->year; ?>
                            </p>
                            <p class="card-text">
                                <strong>Duration:</strong> <?= $movie->duration; ?> minutes
                            </p>
                            <p class="card-text">
                                <strong>Genres:</strong>
                                <?php foreach ($movie->genres as $genre) { ?>
                                    <span class="badge text-bg-primary">
                                        <?= $genre->name; ?>
                                    </span>
                                <?php } ?>
                            </p>
                            <p class="card-text">
                                <strong>Rating:</strong>
                                <span class="badge text-bg-warning">
                                    <?= $movie->getRating(); ?>/10
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


</body>
</html>