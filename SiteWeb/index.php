<?php

$listeValeur = array( 'koi_score', 'koi_fpflag_nt', 'koi_fpflag_ss', 'koi_fpflag_co', 'koi_fpflag_ec', 'koi_period', 'koi_period_err1', 'koi_period_err2', 'koi_time0bk', 'koi_time0bk_err1', 'koi_time0bk_err2', 'koi_impact', 'koi_impact_err1', 'koi_impact_err2', 'koi_duration', 'koi_duration_err1', 'koi_duration_err2', 'koi_depth', 'koi_depth_err1', 'koi_depth_err2', 'koi_prad', 'koi_prad_err1', 'koi_prad_err2', 'koi_teq', 'koi_insol', 'koi_insol_err1', 'koi_insol_err2', 'koi_model_snr', 'koi_tce_plnt_num',  'koi_steff', 'koi_steff_err1', 'koi_steff_err2', 'koi_slogg', 'koi_slogg_err1', 'koi_slogg_err2', 'koi_srad', 'koi_srad_err1', 'koi_srad_err2', 'ra', 'dec', 'koi_kepmag');

$listeErr = array();

if (isset($_POST['isSubmit']) && $_POST['isSubmit']==1) {

    foreach ($listeValeur as $valeur) {
        if (! isset($_POST[$valeur])) {
            $listeErr[$valeur] = 'Il faut renseigner le '.$valeur;
        } else {
            $$valeur = $_POST[$valeur];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./starlearn/SiteWeb/img/imgNav.jpg" type="image/">
    <link rel="stylesheet" type="text/css" href="./starlearn/SiteWeb/css/bootstrap.min.css">
	<link rel="stylesheet" href="./starlearn/SiteWeb/css/style.css" type="text/css" media="screen" /> <!--correspond au css personnel-->
    <!-- Bootstrap CSS et JS (a faire en dernier par défaut scroll déjà doucement)-->
   <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> On ne sens sert pas contenue block notre css-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./starlearn/SiteWeb/js/perso.js"></script>
  </head>
  <body>
  <header>
    <title>Starlearn</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="./starlearn/SiteWeb/img/imgNav.jpg" width="40" height="40" class="d-inline-block align-top" loading="lazy"> <!--Image de la navbar-->
            Starlearn
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#ancre1">Formulaire</a>
                    <a class="nav-link active" href="#ancre2">Résultat</a>
                </div>
            </form>
        </div>
    </nav>
</header>
<div class="jumbotron jumbotron-fluid">
    <div class="premierdiv">
        <h1 class="text1">Starlearn</h1>
    </div>
</div>

<h2 id="ancre1">Formulaire</h2>
<br>
<h3>Entrez vos données</h3>
<br>
<div>
<button type="button" onclick="remplirChamps(0)">
  valeur par defaut 1
</button>
<button type="button" onclick="remplirChamps(4)">
  valeur par defaut 2
</button>
<button type="button" onclick="remplirChamps(1)">
  valeur mediane
</button>
<button type="button" onclick="remplirChamps(2)">
  valeur minimum
</button>
<button type="button" onclick="remplirChamps(3)">
  valeur maximum
</button>
</div>
<article>
    
    <div>
        <form action="index.php" method="POST">
            <?php 
                foreach ($listeValeur as $valeur) {
                    echo '<p>';
                    if (isset($listeErr[$valeur])) {
                        echo '<label for="'.$valeur.'">'.$listeErr[$valeur].'</label><br>';
                    }
                    else {
                        echo '<label for="'.$valeur.'">'.$valeur.'</label><br>';
                    }
                    echo '<input type="text" name="'.$valeur.'" id="'.$valeur.'" placeholder="'.$valeur.'"';
                    if (isset($$valeur)) {
                        echo 'value="'.$$valeur.'"';
                    }
                    echo '>';
                    echo '</p>';
                }
            ?>
            <p>
                <input type="hidden" name="isSubmit" value="1"/>
                <input type="submit" value="Envoi" id="Envoie" class="ButtonPagePrincipal" onclick="getValue();"/>
            </p>
            <p>	<?php if (isset($koi_score) && isset($koi_fpflag_nt) && isset($koi_fpflag_ss) && isset($koi_fpflag_co) && isset($koi_fpflag_ec) && isset($koi_period) && isset($koi_period_err1) && isset($koi_period_err2) && isset($koi_time0bk) && isset($koi_time0bk_err1) && isset($koi_time0bk_err2) && isset($koi_impact) && isset($koi_impact_err1) && isset($koi_impact_err2) && isset($koi_duration) && isset($koi_duration_err1) && isset($koi_duration_err2) && isset($koi_depth) && isset($koi_depth_err1) && isset($koi_depth_err2) && isset($koi_prad) && isset($koi_prad_err1) && isset($koi_prad_err2) && isset($koi_teq) && isset($koi_insol) && isset($koi_insol_err1) && isset($koi_insol_err2) && isset($koi_model_snr) && isset($koi_tce_plnt_num) && isset($koi_steff) && isset($koi_steff_err1) && isset($koi_steff_err2) && isset($koi_slogg) && isset($koi_slogg_err1) && isset($koi_slogg_err2) && isset($koi_srad) && isset($koi_srad_err1) && isset($koi_srad_err2) && isset($ra) && isset($dec) && isset($koi_kepmag)){
                echo "Demande prise en compte";
                // Appel du script Python traitementFormulaire.py
                // avec un argument de 5
                exec("python3 ./starlearn/SiteWeb/ia/traitementFormulaire.py $koi_score $koi_fpflag_nt $koi_fpflag_ss $koi_fpflag_co $koi_fpflag_ec $koi_period $koi_period_err1 $koi_period_err2 $koi_time0bk $koi_time0bk_err1 $koi_time0bk_err2 $koi_impact $koi_impact_err1 $koi_impact_err2 $koi_duration $koi_duration_err1 $koi_duration_err2 $koi_depth $koi_depth_err1 $koi_depth_err2 $koi_prad $koi_prad_err1 $koi_prad_err2 $koi_teq $koi_insol $koi_insol_err1 $koi_insol_err2 $koi_model_snr $koi_tce_plnt_num $koi_steff $koi_steff_err1 $koi_steff_err2 $koi_slogg $koi_slogg_err1 $koi_slogg_err2 $koi_srad $koi_srad_err1 $koi_srad_err2 $ra $dec $koi_kepmag", $output);
                // On affiche les résultats
                // Faire un main en python permettant d'utiliser tout les scripts python pour le php!
                } ?>
            </p>
        </form>		
    </div>
</article>



<h2 id="ancre2">Résultat</h2>
<div class="introEnt card">
  <div class="card-body">
    <blockquote class="introEnt blockquote mb-0">
    <?php   
    echo "<p> Resultat K Plus Proches voisins : ".$output[0]."</p>"; // Affiche le résultat du modèle KNN
    echo "<p> Resultat Random Forest : ".$output[1]."</p>"; // Affiche le résultat du modèle RFC
    echo "<p> Resultat SVM : ".$output[2]."</p>"; // Affiche le résultat du modèle SVM
    ?>
    <br/>
    <!-- Faire un tableau de 6 ligne par 4 colonnes -->
    <table style="table-layout: fixed;width: 100%;">
        <thead>
            <tr>
            <th style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">Modèle</th>
            <th style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">Accuracy</th>
            <th style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">Precision</th>
            <th style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">F1 Score</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">K Plus Proches voisins</td>
                <td style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">86.87%</td>
                <td style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">confirmed : 78.77%<br>
                    candidate : 82.42%<br>
                    false positive : 99.56%<br>
                    modèle : 86.92%</td>
                <td style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">confirmed : 80.95%<br>
                    candidate : 79.88%<br>
                    false positive : 99.71%<br>
                    modèle : 86.85%</td>
            </tr>
            <tr>
                <td style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">Random Forest</td>
                <td style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">92.91%</td>
                <td style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">confirmed : 86.76%<br>
                    candidate : 92.04%<br>
                    false positive : 100.00%<br>
                    modèle : 92.93%</td>
                <td style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">confirmed : 89.67%<br>
                    candidate : 88.85%<br>
                    false positive : 100.00%<br>
                    modèle : 92.81%</td>
            </tr>
            <tr>
                <td style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">SVM</td>
                <td style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">80.48%</td>
                <td style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">confirmed : 67.08%<br>
                    candidate : 77.12%<br>
                    false positive : 99.28%<br>
                    modèle : 81.16%</td>
                <td style="border: 2px solid rgba(0, 45, 150, 0.5) ;   background: rgb(125 148 200 / 50%);">confirmed : 73.71%<br>
                    candidate : 67.27%<br>
                    false positive : 99.64%<br>
                    modèle : 80.21%</td>
            </tr>
        </tbody>
    </table>
    </blockquote>
    <br>
    <blockquote class="introEnt blockquote mb-0">
    <footer class="blockquote-footer">Ceci est le résultat du travail d'équipe de notre groupe (Lucie Bedouret, Nathan Verdier, Tristan Barlet, Noémie Varjabedian) </footer>
    </blockquote>
  </div>



</body>
</html>
