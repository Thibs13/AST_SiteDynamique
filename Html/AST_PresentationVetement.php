<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/AST_Logoast.png" type="image/x-icon">
    <title>Street AST</title>
    <link rel="stylesheet" href="../../style/AST_styledescription.css">
</head>
<body>
    <nav>
    <div class="logo">
            <a href ="AST_index.html">
            <img src="../../assets/AST_Logoast.png" width="100" alt="Logo">
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
                <img src="../../assets/AST_logo_loupe.png"></img>
            </div>
        </div>
        <div class="logo_account_shop">
    
        <a href ="../AST_Panier.html">
            <img id="logo_panier" src="../../assets/AST_icon_panier.png"></img>
        </a>
        <a href ="../AST_Connexion.html">
            <img id="logo_compte_connexion" src="../../assets/AST_logo_account.png"></img>
        </a>
            
        </div>
    </nav>
    <main>
        <?php
        $AST_connexion = mysqli_connect("localhost","root","","streetast");
        $AST_OrdreSQL_Vetement = "SELECT Description, NomArticle, Prix, LienImg, LibelleCategorie
                                FROM t_cat AS C INNER JOIN t_articles AS A ON C.IdCategorie = A.IdCategorie
                                WHERE idArticles =".$_GET['idvet'];
        $AST_RecuperationVetement = $AST_connexion->query($AST_OrdreSQL_Vetement);
        $AST_LigneVetement = $AST_RecuperationVetement->fetch_assoc();
        ?>
        <div class="bloc">
            <div class="img_vet">
                <?php
                echo"<img src=".$AST_LigneVetement['LienImg']."></img>";
                ?>  
            </div>
            <div class="txt_vet">
                <?php
                echo"<h3>".$AST_LigneVetement['NomArticle']."</h3>";
                echo "<h4>".$AST_LigneVetement['Prix']."€</h4>";
                echo"<p><b>Description :</b></p>";
                echo "<p>".$AST_LigneVetement['Description']."</p>";
                ?>

                <form action="../AST_Panier.html">
                    <select>
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                        <option>XXL</option>
                    </select>
                    <button>Ajouter au pannier</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>