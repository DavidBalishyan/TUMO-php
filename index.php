<?php include "./data.php" ?>

<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
	<title><?= $title ?></title>
</head>
<body>

<?php  include "./pages/menu.php";?>

<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <?php foreach ($images as $key => $value): ?>
    <div class="carousel-item <?php if ($key == 0) { echo "active"; } ?>" data-bs-interval="10000">
      <img src="<?= $value ?>" class="d-block w-100" alt="...">
    </div>
   <?php endforeach; ?>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	<h1 style="margin-top: 30px">About movies</h1>
<!--Accordion-->
<div class="accordion" id="accordionExample">
  <?php foreach ($data3 as $key => $data): ?>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#<?= $data["a"]?>" aria-expanded="false" aria-controls="<?= $data["a"]?>">
        <?= $data["title"]?> (<?= $data["year"] ?>)
      </button>
    </h2>
    <?php $isShowed = $key === 0 ? "show" : ""?>
    <div id="<?= $data["a"]?>" class="accordion-collapse collapse <?= $isShowed ?>" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <?= $data["description"] ?>
       <br>
       Rating: <?= $data["rating"] ?>
      </div>
    </div>
  </div>
<?php endforeach ?>

<div class="spinner-border" id="spinner" role="status">
  <span class="visually-hidden">Loading...</span>
</div>

</div>  

<script src="./handelers/handleLoading.js"></script>


<?php include "./components/footer.php"; ?>