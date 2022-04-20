<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
<? include('menu.php') ?>
    <form action="#" method="post" class="srbno">
        <table>
             <tr>
                <td>Saisir entier 1:</td>
                <td><input type="number" name="int1"></td>
            </tr>
            <tr>
                <td>Saisir entier 2:</td>
                <td><input type="number" name="int2"></td>
            </tr>
        </table>
      <div style="margin-left:6%; margin-top:1%">
                <input type="submit" name="submit" >
                <input type="reset">
                </div>
    </form>
</body>
</html>


<?php
function addition($int1, $int2)
{
    return "La somme de: " . $int1 . " et de: " . $int2 . " fait: " . ($int1 + $int2) . "<br>";
}
function soustraction($int1, $int2)
{
    return "La soustraction de: " . $int1 . " et de: " . $int2 . " fait: " . ($int1 - $int2) . "<br>";
}
function multiplication($int1, $int2)
{
    return "La multiplication de: " . $int1 . " et de: " . $int2 . " fait: " . ($int1 * $int2) . "<br>";
}
function division($int1, $int2)
{
    if ($int2 === '0' || $int2 < 0) {
        return "Un denominateur est toujours positif";
    } else {
        return "La division de: " . $int1 . " et de: " . $int2 . " fait: " . ($int1 / $int2) . "<br>";
    }
}
if (isset($_POST['submit'])) {
    $int1 = $_POST['int1'];
    $int2 = $_POST['int2'];
    echo addition($int1, $int2);
    echo soustraction($int1, $int2);
    echo multiplication($int1, $int2);
    echo division($int1, $int2);
}
?>
 <script>
        ScrollReveal({ reset: true });
        ScrollReveal().reveal('.srbno',
            {
                distance: '150%', 
                origin: 'top',
                rotate: {x: -20,y: 20,z: 20},
                "duration": 1500,
            }
        );

    </script>