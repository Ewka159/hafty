<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hafty ludowe - ręczne</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a79ff52c1c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/ikona.ico"> <!-- nie ładuje się  :( -->
<link rel="stylesheet" href="./css/style.css">
<!--font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>

</head>
<body>
    <!--header-->
    <header>
 <div class="container-fluid p-0">
     <h1>Hafty ludowe ręczne</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-blue">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Strona Główna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Onas.php">O nas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Zaloguj się</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Registration.php">Stwórz konto</a>
     
      <li class="nav-item">
        <a class="nav-link" href="Galeria.php">Galeria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Kontakt.php">Kontakt</a>
      </li>
      
    </ul>
  </div>

  

  </div>
</nav>

    </div>
    
    </header> 

    
  
   
    <div class="main">

<div class="container1">
  <div class="row">
    <div class="col-4-lg">
      <!--bootstrap -->
      <div class="card" style="width=18rem;">
      <img src="img/1.jpg" alt="pierwsze" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Spodnie góralskie</h5>
    
        <a class="btn btn-primary" href="Galeria.php" >Zobacz..</a>
      </div>
    </div>
    </div>
    <div class="col-4-lg">
    <div class="card" style="width=18rem;">
      <img src="img/2.jpg" alt="pierwsze" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Kożuchy</h5>
        <a class="btn btn-primary" href="Galeria.php" >Zobacz..</a>

      </div>
    </div>
</div>
    <div class="col-4-lg">
    <div class="card" style="width=18rem;">
      <img src="img/3.jpg" alt="pierwsze" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Koszule</h5>
        <a class="btn btn-primary" href="Galeria.php" >Zobacz..</a>

      </div>
    </div>
</div>
    <div class="col-4-lg">
    <div class="card" style="width=18rem;">
      <img src="img/18.jpg" alt="pierwsze" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Jeansy</h5>
        <a class="btn btn-primary" href="Galeria.php" >Zobacz..</a>
      </div>
    </div>
</div>
    <div class="col-4-lg">
    <div class="card" style="width=18rem;">
      <img src="img/13.jpg" alt="pierwsze" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Gorsety</h5>
        <a class="btn btn-primary" href="Galeria.php" >Zobacz..</a>

      </div>
    </div>
</div>
  </div>
</div>

<script>
  $(document).ready(function()
  {
$(.'col-4-lg').hover(
function()
{
$(this).animate({
  marginTop:"-=1px"
},200)
},
function()
{
$(this).animate({
  marginTop:"0%"
},200);
}
  };
  });
</script>




</div>
<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Menu</h2>
          <ul>
            <a href="index.php">
              <li>Strona Główna</li>
            </a>
            <a href="login.php">
              <li>Zaloguj się </li>
            </a>
        
           
            <a href="Registration.php">
              <li>Stwórz konto</li>
            </a>
          </ul>
        </div>
     
          
        <div class="col">
          <h2>Nasza działalność</h2>
          <ul>
          <a href="Galeria.php">
              <li>Galeria</li>
            </a>
            <a href="Onas.php">
              <li>O nas</li>
            </a>
            
            <a href="Kontakt.php">
              <li>Kontakt</li>
            </a>
          </ul>
        </div>
        <div class="col social">
          <h2>Znajdź nas</h2>
          <ul>
            <li><a href="https://www.facebook.com"><img src="./css/fb.png" width="32" style="width: 32px;"></a></li>
            <li><a href="https://www.instagram.com"><img src="./css/instagram.png" width="32" style="width: 32px;"></a></li>
            
          </ul>
        </div>
        
        </div>
      </div>
    </div>
  </footer>




</body>
</html>