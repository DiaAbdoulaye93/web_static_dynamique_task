<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<? include('menu.php') ?>
<form>
  <div class="form-group col-md-4">
    <label for="val1">Valeur1</label>
    <input type="number" class="form-control" id="val1">
  </div>
  <div class="form-group col-md-4">
    <label for="val1">Valeur1</label>
    <input type="number" class="form-control" id="val1">
  </div>
  <div class="form-group col-md-4">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option option="addition">+</option>
      <option option="soustraction">-</option>
      <option option="multiplication">*</option>
      <option option="division">/</option>
      <option option="exposant">^</option>
    </select>
  </div><br>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>