<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password vaidation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
<? include('menu.php') ?>
<form action="#" method="post">
<div class="container" style="margin-left: 30%;margin-top:10%">

  <div class="form-group ml-5 mt-5">
    <input type="password" class="form-control  col-md-5" id="pwd" name="pwd" placeholder="entrer le mot de pass" required >
  </div>
  <div class="form-group ml-5">
  <button type="submit"  name="submit" class="btn btn-success ml-5 col-md-4">Soumettre</button>
  </div>
 
  </div>
</form>
<?php
function build_password($password, $minlength=6,$maxlength=15){
    $response="";
    if(strlen($password) <$minlength){
        $response="mot de pass tres court saisir au minimum $minlength lettres";
    }
    else if(strlen($password) > $maxlength){
        $response="mot de pass trop long saisir au maximum $maxlength lettres";
    }
    else{
        
       $pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[#@!&_=])/";
        if(!preg_match($pattern, $password)) {
            $response="Votre mot de pass n'est pas sécurisé: ".$password;
        }
        else{
            $response= "Mot de pass Securisé: ".$password;
        }
    }
    return $response;
}
function regex_pwd($minlength= 8, $maxlength=16, $upper=true, $lower=false, $digit=true, $specialChar= "?=.*[#@!&_=]"){
    $upper =($upper)? "(?=.*[A-Z])": "";
    $lower = ($lower) ?  "(?=.*[a-z])": "";
    $digit = ($digit)?  "(?=.*[0-9])" : "";
    $specialChar = ($specialChar !="")? "(?=.*[$speciaChar])": "";
    $pattern="^".$lower.$upper.$digit.$speciaChar(?=.*[$specialChar]){$minlength, $maxlength};
    return $pattern;
}
if(isset($_POST['submit'])){
  
  echo  '<strong style="margin-left:37%">'.build_password($_POST['pwd']).'</strong>';
  echo regex_pwd($minlength= 8, $maxlength=16, $upper=true, $lower=false, $digit=true, $specialChar= "?=.*[#@!&_=]");
}

?>
</body>
</html>