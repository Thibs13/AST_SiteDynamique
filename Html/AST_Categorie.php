<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/AST_Logoast.png" type="image/x-icon">
    <title>Street AST</title>
    <link rel="stylesheet" href="../style/AST_Categorie.css">
</head>
<body>
    <nav>
        <div class="logo">
              <a href ="AST_index.html">
                <img src="../assets/AST_Logoast.png" width="100" alt="Logo">
              </a>
        </div>
        <div class="choix_sexe">
          <a href ="AST_PageHomme.php">
              <p>Homme</p>
          </a>
          <a href ="AST_PageFemme.php">
              <p>Femme</p>
          </a>
         
      </div>
          <div class="bloc_loupe">
              <input type="search" placeholder="Rechercher un vêtement ..."></input>
              <div class="icon_loupe">
                  <img src="../assets/AST_logo_loupe.png"></img>
              </div>
          </div>
          <div class="logo_account_shop">
        
          <a href ="../Html/AST_Panier.html">
              <img id="logo_panier" src="../assets/AST_icon_panier.png"></img>
          </a>
          <a href ="../Html/AST_Connexion.html">
              <img id="logo_compte_connexion" src="../assets/AST_logo_account.png"></img>
          </a>
          </div>
      </nav>
      <main>
        <?php
        $AST_connexion = mysqli_connect("localhost","root","","streetast");
        #Complément requête SQL pour homme
        if($_GET['cat']=="HH"){
            $AST_ComplementOrdreSQL = "IdSexe = 1 AND IdCategorie = 1";
        }
        if($_GET['cat']=="HB"){
            $AST_ComplementOrdreSQL = "IdSexe = 1 AND IdCategorie = 2";
        }
        if($_GET['cat']=="HA"){
            $AST_ComplementOrdreSQL = "IdSexe = 1 AND IdCategorie = 3";
        }
        if($_GET['cat']=="HS"){
            $AST_ComplementOrdreSQL = "IdSexe = 1 AND IdCategorie = 5";
        }
        if($_GET['cat']=="HC"){
            $AST_ComplementOrdreSQL = "IdSexe = 1 AND IdCategorie = 4";
        }
        #Complément requête SQL pour femme
        if($_GET['cat']=="FH"){
            $AST_ComplementOrdreSQL = "IdSexe = 2 AND IdCategorie = 1";
        }
        if($_GET['cat']=="FB"){
            $AST_ComplementOrdreSQL = "IdSexe = 2 AND IdCategorie = 2";
        }
        if($_GET['cat']=="FA"){
            $AST_ComplementOrdreSQL = "IdSexe = 2 AND IdCategorie = 3";
        }
        if($_GET['cat']=="FS"){
            $AST_ComplementOrdreSQL = "IdSexe = 2 AND IdCategorie = 5";
        }
        if($_GET['cat']=="FC"){
            $AST_ComplementOrdreSQL = "IdSexe = 2 AND IdCategorie = 4";
        }
        $AST_OrdreSQL_ListeVetement = "SELECT idArticles, idCategorie, NomArticle, Prix, LienIMG
                                        FROM t_articles
                                        WHERE ". $AST_ComplementOrdreSQL;
        $AST_ListeVetement = $AST_connexion->query($AST_OrdreSQL_ListeVetement);
        $AST_LigneListeVetement = $AST_ListeVetement->fetch_assoc();
        while($AST_LigneListeVetement){
            echo"<a href ='AST_PresentationVetement.php?idvet=";
            echo $AST_LigneListeVetement['idArticles'];
            echo "'>";
            ?>
            <div class="bloc">
            <?php echo "<img src='".$AST_LigneListeVetement["LienIMG"]."'</img>";
                echo "<p>".$AST_LigneListeVetement['NomArticle']."</p>";
                echo "<h3>".$AST_LigneListeVetement['Prix']."€</h3>";
                echo "</div>";
                echo"</a>";
            $AST_LigneListeVetement = $AST_ListeVetement->fetch_assoc();
        }
        ?>
      </main>
      <?php $AST_connexion->close(); ?>
</body>
</html>