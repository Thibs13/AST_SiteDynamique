<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/AST_Logoast.png" type="image/x-icon">
    <title>Street AST</title>
    <link rel="stylesheet" href="../style/AST_Hommestyle.css">
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
    <div class="bloc bloc-haut">
    <a href ="AST_Categorie.php?cat=HH">
      <div class="illustration-bloc">     
        <img src="../assets/AST_illustration_haut.avif"></img></div>
      <div class="texte-bloc">Haut</div>
    </a>
    </div>
    <div class="bloc bloc-pantalon">
    <a href ="AST_Categorie.php?cat=HB">
      <div class="illustration-bloc">
        <img src="../assets/AST_illustration_jean.avif"></img></div>
      <div class="texte-bloc">Bas</div>
    </a>
    </div>
    <div class="bloc bloc-chaussures">
    <a href ="AST_Categorie.php?cat=HC">
      <div class="illustration-bloc">
        <img src="../assets/AST_illustration_chaussure.avif"></img></div>
      <div class="texte-bloc">Chaussures</div>
    </a>
    </div>
    <div class="bloc bloc-accessoires">
    <a href ="AST_Categorie.php?cat=HA">
      <div class="illustration-bloc">
        <img src="../assets/AST_illustration_accessoire.avif"></img></div>
      <div class="texte-bloc">Accessoires</div>
    </a>
    </div>
    <div class="bloc bloc-sports">
      <a href ="AST_Categorie.php?cat=HS">
      <div class="illustration-bloc">
        <img src="../assets/AST_illustration_sport.avif"></img></div>
      <div class="texte-bloc">Sports</div>
    </a>
    </div>
  </main>
</body>
</html>
