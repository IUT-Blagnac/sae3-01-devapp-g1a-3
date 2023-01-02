<html>
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="include/style.css">
    <link rel="stylesheet" type="text/css" href="include/style-footer.css">
    <link rel="stylesheet" type="text/css" href="include/style-header.css">


</head>
<body>
    
    <?php include_once("./include/header.php"); ?>
    <div class="contentConnexion">
        <?php
            if (isset($_SESSION['acces'])) {
                echo "Vous êtes connecté en tant que ";
                echo $_SESSION['nom'];
            } else {
                ?>
            <div style='padding-bottom: 20px; padding-top: 20px'>
                <span style='font-weight: bold'>Connexion : </span> </br> </br>
                <?php
                    if (isset($_GET['msgErreurConn'])) {
                        echo "<h2>".htmlentities($_GET['msgErreurConn'])."</h2>";
                    }
                ?>
                <form action = "TraitConnexion.php" method = "POST">
                    Identifiant : <input type = 'text' name = 'login'
                    <?php
                        if (isset($_COOKIE['cookIdent'])) {
                            echo "value='".$_COOKIE['cookIdent']."' ";
                        }
                    ?>
                    class="cadreInput" /> </br></br>
                    Mot de passe : <input type = 'password' name = 'password' class="cadreInput"/> </br> </br>
                    Se souvenir de moi : <input type = 'checkbox' name = 'souvenir' /> </br> </br>
                    <input type = 'submit' name = 'Valider' value = 'Valider'/> </br>
                </form>
            </div>
            <div style='padding-bottom: 20px; padding-top: 20px'>
                <span style='font-weight: bold'>Création d'un compte : </span> </br> </br>
                <?php
                    if (isset($_GET['msgErreur'])) {
                        echo "<h2>".htmlentities($_GET['msgErreur'])."</h2>";
                    }
                ?>
                <form action = "TraitCreation.php" method = "POST">
                        Pseudo : <input type = 'text' name = 'username' class="cadreInput"/> </br></br> 
                        Nom : <input type = 'text' name = 'last_name' class="cadreInput"/> </br></br>
                        Prenom : <input type = 'text' name = 'first_name' class="cadreInput"/> </br></br>
                        Date de naissance : <input type = 'date' name = 'date_naiss' class="cadreInput"/> </br></br>
                        Pays :
                        <select name="country" id="country-select" class="cadreInput">
                            <option value="France" class="cadreInput">France</option>
                            <option value="Espagne">Espagne</option>
                            <option value="Angleterre">Belgique</option>
                        </select> </br></br>
                        Département : <input type = 'number' name = 'departement' class="cadreInput" min="0" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null"/> </br> </br>
                        Adresse Mail : <input type = 'email' name = 'mail' class="cadreInput"/> </br></br>
                        Mot de passe : <input type = 'password' name = 'password' class="cadreInput"/> </br> </br>
                        <input type = 'submit' name = 'Valider' value = 'Valider'/> </br>
                </form>
            </div>
            <?php }  ?>
    </div>
    <?php include_once("./include/footer.php"); ?>
</body>
</html>