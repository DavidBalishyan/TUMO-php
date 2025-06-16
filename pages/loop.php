<?php
include "../data.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Movies List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<?php include "./menu.php"; ?>

<div class="container mt-5">
  <h2 class="mb-4 text-center">🎥 Movie Gallery</h2>
  <div class="row g-4">
    <?php foreach ($movies as $movie): ?>
      <div class="col-sm-6 col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="<?= $movie['poster'] ?>" class="card-img-top" alt="<?= $movie['title'] ?>">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= $movie['title'] ?></h5>
            <p class="card-text text-muted">Released: <?= $movie['year'] ?></p>
            <a href="#" class="btn btn-outline-primary mt-auto">View More</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
