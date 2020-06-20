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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a79ff52c1c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/ikona.ico">  <!-- nie ładuje się  :( -->
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/Registration.css">
<!--font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
       <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
   
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
</head>









<body>


<?php
$urerr=$eerr=$perr=$cperr=$fnerr=$gerr="";
$urname=$email=$passwd=$name=$gender="";
$boolen=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(empty($_POST["urname"])){
    
$urerr="Nazwa użytkownika (wymagana)!";
$boolen=false;

  } else{
    $urname=valide_input($_POST["urname"]);
    $boolen=true;
  }
if(empty($_POST["email"]))
{
 $eerr="Email (wymagany)!";
 $boolen=false;

}elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
{
 $eerr="Niepoprawny email";
 $boolen=false;

}else
{
$email=validate_input($_POST["email"]);
$boolen=true;
}
$lenght=strlenght($_POST["passwd"]);




 $lenght=strlenght($_POST["passwd"]);
 if(empty($_POST["passwd"]))
 {
   $perr="Hasło jest wymagane";
   $boolen=false;

 }elseif($lenght)
 {
$perr=$lenght;
$boolen=true;
 }else
 {
   $passwd=valide_input($_POST["passwd"]);
   $boolen=true;

 }
 if(empty($_POST["cpasswd"]))
 {
   $cperr="Potwierdź hasło(wymagane)!";
   $boolen=false;

 }elseif($_POST["cpasswd"]!=$passwd)
 {
   $cperr=" hasło nie pasuje";
   $boolen=false;
 }
 if(empty($_POST["fname"]) || empty($_POST["lname"] ))
 {
   $fnerr="Imie i nazwisko wymagane";
   $boolen=false;

 }elseif($_POST["cpasswd"]!=$passwd)
 {
   $name=validate_input($_POST["fname"]);
   $boolen=true;
 }
 if(empty($_POST["gender"]))
 {
   $fnerr="Płeć obowiązkwa";
   $boolen=false;
 }else{
   $gender=validate_input($_POST["gender"]);
   $boolen=false;
 }
 if(isset($_POST["ck1"]))
 {
   $boolen=true;

 }
 else{
   $boolen=false;
 }
}
function strlenght($str)
{
 $ln=strlen($str);
 if($ln>15)
 {
   return "Hasło powinno być mniejsze niż 15 znaków";
 }elseif($ln<5 && $ln>=1)
 {
   return "Hasło powinno być większe niż 3 znaki";
   $boolen=true;
 }
 return ;
}
  function validate_input($data)
  {
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchar($data);
    return $data; 
  }


if($boolen)
{
  $dbname="logindb";
  $con=mysqli_connect("localhost","root"," ",$dbname);
  if(!$con)
  {
    die("połączenie się zepsuło:"+mysqli_connet_error());

  }
  function NewUser()
  {
    $sql= "INSERT INTO regi (urname,email,passwd,fname,gender) 
Values('".$_POST["urname"]."','".$_POST["email"]."','".$_POST["passwd"]."','".$_POST["fname"]."','".$_POST["gender"]."')";
    
    
    
    
    $query=mysqli_query($GLOBALS['con'],$sql);
    if($query){
      echo "<script> 
    alert('rekord został wstawiony pomyślnie')
    </script>";
      }
  }
    
function SingUp()
{
 $sql="SELECT*FROM regi WHERE  urname ='".$_POST["urname"]."' AND email ='".$_POST["email"]."'";
 $result=mysqli_query($GLOBALS['con'],$sql);
 if(!$row=mysqli_fetch_array($result))
 {
   NewUser();
 }
 else
 {
   echo "<script>  
      alert(' jesteś już zarejestrowanym użytkownikiem')

      </script>";
 }
}
if(isset($_POST["submit"]))
{
  SingUp();
  mysqli_close($GLOBALS["con"]);
  $boolen=false;

}
}

?>

 <form class="" encytype="multipart/from-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
   <div class="container3">
      <div class="inner">
    <div class="title">
        <h3>Panel rejestracji</h3>
      </div>

<div class="content">
  <div class="txt">
      <input type="text" name="urname" value="" id="txtuser" placeholder="Nazwa">
      <span id="c1" class="glyphicon  glyphicon-user"></span>
  </div> 
<span id="span"></span>
<div class="txt1">
    <input type="text" name="email" value="" id="txtemail" placeholder="Email">
    <span id="c2" class="glyphicon  glyphicon-envelope"> </span>
    </div>
    <span id="span"></span>

<div class="txt1">
    <input type="text" name="passwd" id="txtpass" placeholder="Hasło" value="">
    <span id="c3" class="glyphicon  glyphicon-lock"></span>
</div>
<span id="span"> </span>

<div class="txt1">
    <input type="text" name="cpasswd" id="txtcpass" placeholder="Powtórz hasło" value="">
    <span id="c4" class="glyphicon glyphicon-lock"></span>
</div>
<span id="span"></span>
    <div class="txt1">
      <input type="text" name="fname" id="txtfname" placeholder="Imie" value="">
  </div>
  <div class="txt1">
      <input type="text" name="lname" id="txtlname" placeholder="Nazwisko" value="">         
  </div>
</div>
                      

<span id="span"> </span>
<div class="radios">
  <h4>Płeć :</h4>
  <input type="radio" name="gender" value="Male">  
  <label for="">Mężczyzna</label>
  <input type="radio" name="gender" value="Fmale">  
  <label for="">Kobieta</label>
</div>


<span id="span"></span>
<div class="ckbox">
  <input type="checkbox"  id=" ckbox " name ="ck1" value="">
        <span>Zgadzam się na warunki i usługi</span>
  <br/>
        <input type="checkbox"  id=" ckbox2 " name ="ck2" value="">
  <span>Chce dostawać powiadomienia o nowych usługach</span>
</div>
<span id="span"></span>

<div class="btnsub">
<input type="submit"  id=" btnsub " name ="submit" value="Zatwierdź">
</div> 
                          
      </div>
    </div>
</form>

<script>
$(document).ready(function()
{
  var icon="";
  var $txt1=$("#txtuser");
  var $txt2 =$("txtemail");
  var $txt3=$("txtpass");
  var $txt4=$("txtcpass");



  $("input").focus(function(){
    var id = document.activeElement.id;
    if(id == "txtuser")
    {
      $("#c1").css("color","green");
      icon="#c1";
    }
    if(id == "txtuser")
    {
      $("#c1").css("color","green");
      icon="#c1";
    }
    if(id == "txtpass")
    {
      $("#c3").css("color","green");
      icon="#c3";
    }
    if(id == "txtpass")
    {
      $("#c4").css("color","green");
      icon="#c4";
    }
    
  });
  $("input").blur(function()
  {
    $(icon).css("color","#800080");
    if($txt1.val() !=""){
      $("#c1").css("color","green");
    }
    if($txt1.val() !=""){
      $("#c2").css("color","green");
    }
    if($txt1.val() !=""){
      $("#c3").css("color","green");
    }
    if($txt1.val() !=""){
      $("#c4").css("color","green");
    }
    

  });
  
});

</script>






</body>








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
              <li>Zaloguj się</li>
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
</html>