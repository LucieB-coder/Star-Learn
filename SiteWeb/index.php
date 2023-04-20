<?php

$listeValeur = array( 'koi_score', 'koi_fpflag_nt', 'koi_fpflag_ss', 'koi_fpflag_co', 'koi_fpflag_ec', 'koi_period', 'koi_period_err1', 'koi_period_err2', 'koi_time0bk', 'koi_time0bk_err1', 'koi_time0bk_err2', 'koi_impact', 'koi_impact_err1', 'koi_impact_err2', 'koi_duration', 'koi_duration_err1', 'koi_duration_err2', 'koi_depth', 'koi_depth_err1', 'koi_depth_err2', 'koi_prad', 'koi_prad_err1', 'koi_prad_err2', 'koi_teq', 'koi_teq_err1', 'koi_teq_err2', 'koi_insol', 'koi_insol_err1', 'koi_insol_err2', 'koi_model_snr', 'koi_tce_plnt_num', 'koi_tce_delivname', 'koi_steff', 'koi_steff_err1', 'koi_steff_err2', 'koi_slogg', 'koi_slogg_err1', 'koi_slogg_err2', 'koi_srad', 'koi_srad_err1', 'koi_srad_err2', 'ra', 'dec', 'koi_kepmag');

$listeErr = array();

if (isset($_POST['isSubmit']) && $_POST['isSubmit']==1) {

    foreach ($listeValeur as $valeur) {
        if (empty($_POST[$valeur])) {
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
    <link rel="icon" href="img/imgNav.jpg" type="image/">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" /> <!--correspond au css personnel-->
    <!-- Bootstrap CSS et JS (a faire en dernier par défaut scroll déjà doucement)-->
   <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> On ne sens sert pas contenue block notre css-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
  <header>
    <title>Starlearn</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="img/imgNav.jpg" width="40" height="40" class="d-inline-block align-top" loading="lazy"> <!--Image de la navbar-->
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
            <p>	<?php if (isset($koi_score) && isset($koi_fpflag_nt) && isset($koi_fpflag_ss) && isset($koi_fpflag_co) && isset($koi_fpflag_ec) && isset($koi_period) && isset($koi_period_err1) && isset($koi_period_err2) && isset($koi_time0bk) && isset($koi_time0bk_err1) && isset($koi_time0bk_err2) && isset($koi_impact) && isset($koi_impact_err1) && isset($koi_impact_err2) && isset($koi_duration) && isset($koi_duration_err1) && isset($koi_duration_err2) && isset($koi_depth) && isset($koi_depth_err1) && isset($koi_depth_err2) && isset($koi_prad) && isset($koi_prad_err1) && isset($koi_prad_err2) && isset($koi_teq) && isset($koi_insol) && isset($koi_insol_err1) && isset($koi_insol_err2) && isset($koi_model_snr) && isset($koi_tce_plnt_num) && isset($koi_steff) && isset($koi_steff_err1) && isset($koi_steff_err2) && isset($koi_slogg) && isset($koi_slogg_err1) && isset($koi_slogg_err2) && isset($koi_srad) && isset($koi_srad_err1) && isset($koi_srad_err2) && isset($ra) && isset($dec) && isset($koi_kepmag) && isset($koi_disposition)){
                echo "Demande prise en compte";
                // Appel du script Python traitementFormulaire.py
                // avec un argument de 5
                exec("traitementFormulaire.py $koi_score $koi_fpflag_nt $koi_fpflag_ss $koi_fpflag_co $koi_fpflag_ec $koi_period $koi_period_err1 $koi_period_err2 $koi_time0bk $koi_time0bk_err1 $koi_time0bk_err2 $koi_impact $koi_impact_err1 $koi_impact_err2 $koi_duration $koi_duration_err1 $koi_duration_err2 $koi_depth $koi_depth_err1 $koi_depth_err2 $koi_prad $koi_prad_err1 $koi_prad_err2 $koi_teq $koi_insol $koi_insol_err1 $koi_insol_err2 $koi_model_snr $koi_tce_plnt_num $koi_steff $koi_steff_err1 $koi_steff_err2 $koi_slogg $koi_slogg_err1 $koi_slogg_err2 $koi_srad $koi_srad_err1 $koi_srad_err2 $ra $dec $koi_kepmag $koi_disposition", $output);
                // On affiche les résultats
                echo "Résultat KPPV : "+$output[0]; // Affiche le résultat du modèle KPPV
                echo "Résultat RFC : "+$output[1]; // Affiche le résultat du modèle RFC
                echo "Résultat SVM : "+$output[2]; // Affiche le résultat du modèle SVM
                // Faire un main en python permettant d'utiliser tout les scripts python pour le php!
                } ?>
            </p>
        </form>		
    </div>
</article>



<h2 id="ancre2">Résultat</h2>
<div class="introEnt card">
  <div class="card-header">
  Title
  </div>
  <div class="card-body">
    <blockquote class="introEnt blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, 
        dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim
        est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque 
        congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. 
        Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. 
        Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit. 
      <footer class="blockquote-footer">Ceci est le résultat du travail d'équipe de notre groupe (Lucie Bedouret, Nathan Verdier, Tristan Barlet, Noémie Varjabedian) </footer>
    </blockquote>
  </div>



</body>
</html>