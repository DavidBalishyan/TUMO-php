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
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        The Shawshank Redemption (1994)
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       This drama, based on a Stephen King novella, tells the story of Andy Dufresne, a man wrongly imprisoned for murder. Through hope, friendship, and resilience, Andy’s journey inside Shawshank Prison captivates viewers with its powerful message about freedom and the human spirit. The film’s brilliant performances and memorable storytelling have earned it a place as one of the greatest movies ever made.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       The Godfather (1972)
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       Francis Ford Coppola’s masterpiece dives into the world of the Italian-American mafia, exploring themes of family, power, and loyalty. With unforgettable characters like Vito and Michael Corleone, the film is a gripping saga of crime and consequence. Its influence on cinema is monumental, shaping the gangster genre for decades.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       Inception (2010)
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        A mind-bending sci-fi thriller directed by Christopher Nolan, Inception explores the world of dreams within dreams. With stunning visuals and a complex plot, it challenges viewers to question reality and perception. The film’s originality, combined with a stellar cast, makes it a must-watch for fans of thought-provoking storytelling.	
      </div>
    </div>
  </div>
</div>


<?php include "./components/footer.php"; ?>