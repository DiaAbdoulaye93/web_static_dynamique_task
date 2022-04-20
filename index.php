<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<!--
    pattern="^([0-9]{1,}[a-z]{1,}[A-Z]{1,}(!|@|#){1,}){8,15}$"
    -->

<body>
    <? include('menu.php') ?>
    <h1 class="srbno" style="width:80%;margin-left:40%">Formulaire d'inscription</h1>
    <form class="srbno" action="traitement.html" method="post">
        <table border style="width:80%;margin-left:10%">

            <tr>
                <td><label for="prenom">Prénom</label></td>
                <td><input required type="text" name="" id="prenom"></td>
            </tr>
            <tr>
                <td><label for="nom">Nom</label></td>
                <td><input required minlength="2" maxlength="30" type="text" name="" id="nom"></td>
            </tr>
            <tr>
                <td><label for="tel">Téléphone</label></td>
                <td>
                    <input required type="tel" name="" id="tel" pattern="^(221|00221|\+221)?(70|75|76|77|78|33)[0-9]{7}$">
                </td>
            </tr>
            <tr>
                <td><label for="email">E-mail</label></td>
                <td><input required type="email" name="" id="email"></td>
            </tr>
            <tr>
                <td><label for="password">Mot de pass</label></td>
                <td><input required type="password" name="" id="password" minlength="8" maxlength="15" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[#@!&_=]).{8,15}$"></td>
            </tr>
            <!--
     ^(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[!@#$%^&*_=+-]).{8,16}$
     -->
            <tr>
                <td><label for="dateNaiss">Date de naissance</label></td>
                <td><input required type="date" name="" id="dateNaiss"></td>
            </tr>
            <tr>
                <td>Sexe</td>
                <td>
                    <input required type="radio" name="sexe" id="masculin">
                    <label for="masculin">Masculin</label>
                    <input required type="radio" name="sexe" id="feminin">
                    <label for="feminin">Féminin</label>
                </td>
            </tr>
            <tr>
                <td><label for="nbrIns">Nombre d'inscription</label></td>
                <td>
                    <input min="1" max=20 type="number" name="" id="nbrIns" value="1">
                </td>
            </tr>
            <tr>
            <tr>
                <td><label for="mntIns">Montant d'inscription</label></td>
                <td>
                    <input value="25000" min="25000" max=75000 step="25000" type="number" name="" id="mntIns">
                </td>
            </tr>
            <tr>
            <tr>
                <td>Adresse</td>
                <td>
                    <select name="" id="">
                        <optgroup label="VIP 1">
                            <option value="">Meckhé</option>
                            <option value="">Dakar</option>
                            <option value="">Thiès</option>
                        </optgroup>
                        <optgroup label="VIP 2">
                            <option value="">Louga</option>
                            <option value="">Mbacké</option>
                        </optgroup>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ci">Centre d'intéré</label>
                </td>
                <td>
                    <input type="checkbox" name="" id="religion">
                    <label for="religion">Religion</label>
                    <input type="checkbox" name="" id="sport">
                    <label for="sport">Sport</label>
                    <br>
                    <input type="checkbox" name="" id="blockchaine">
                    <label for="blockchaine">Blockchaine</label><input type="checkbox" name="" id="blockchaine">
                    <label for="blockchaine">Blockchaine</label>
                </td>
            </tr>
            <td colspan="2">
                <input style="width:100%" type="submit" value="S'inscrire">
            </td>
            </tr>
        </table>
    </form>

    <script>
        ScrollReveal({
            reset: true
        });
        ScrollReveal().reveal('.srbno', {
            distance: '150%',
            origin: 'bottom',
            rotate: {
                x: -20,
                y: 20,
                z: 20
            },
            "duration": 1500,
        }, 3000);
    </script>
</body>

</html>