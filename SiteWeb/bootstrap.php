<?php

if (isset($_POST['isSubmit']) && $_POST['isSubmit']==1) {

	if (empty($_POST['koi_score'])) {
		$errkoi_score='Il faut renseigné le ';
	} else {
		$koi_score=$_POST['koi_score'];
	}

	if (empty($_POST['koi_fpflag_nt'])) {
		$errkoi_fpflag_nt='Il faut renseigné le ';
	} else {
		$koi_fpflag_nt=$_POST['koi_fpflag_nt'];
	}

	if (empty($_POST['koi_fpflag_ss'])) {
		$errkoi_fpflag_ss='Il faut renseigné le ';
	} else {
		$koi_fpflag_ss=$_POST['koi_fpflag_ss'];
	}

	if (empty($_POST['koi_fpflag_co'])) {
		$errkoi_fpflag_co='Il faut renseigné le ';
	} else {
		$koi_fpflag_co=$_POST['koi_fpflag_co'];
	}

	if (empty($_POST['koi_fpflag_ec'])) {
		$errkoi_fpflag_ec='Il faut renseigné le ';
	} else {
		$koi_fpflag_ec=$_POST['koi_fpflag_ec'];
	}

	if (empty($_POST['koi_period'])) {
		$errkoi_period='Il faut renseigné le ';
	} else {
		$koi_period=$_POST['koi_period'];
	}

	if (empty($_POST['koi_period_err1'])) {
		$errkoi_period_err1='Il faut renseigné le ';
	} else {
		$koi_period_err1=$_POST['koi_period_err1'];
	}

	if (empty($_POST['koi_period_err2'])) {
		$errkoi_period_err2='Il faut renseigné le ';
	} else {
		$koi_period_err2=$_POST['koi_period_err2'];
	}

	if (empty($_POST['koi_time0bk'])) {
		$errkoi_time0bk='Il faut renseigné le ';
	} else {
		$koi_time0bk=$_POST['koi_time0bk'];
	}

	if (empty($_POST['koi_time0bk_err1'])) {
		$errkoi_time0bk_err1='Il faut renseigné le ';
	} else {
		$koi_time0bk_err1=$_POST['koi_time0bk_err1'];
	}

	if (empty($_POST['koi_time0bk_err2'])) {
		$errkoi_time0bk_err2='Il faut renseigné le ';
	} else {
		$koi_time0bk_err2=$_POST['koi_time0bk_err2'];
	}

	if (empty($_POST['koi_impact'])) {
		$errkoi_impact='Il faut renseigné le ';
	} else {
		$koi_impact=$_POST['koi_impact'];
	}

	if (empty($_POST['koi_impact_err1'])) {
		$errkoi_impact_err1='Il faut renseigné le ';
	} else {
		$koi_impact_err1=$_POST['koi_impact_err1'];
	}

	if (empty($_POST['koi_impact_err2'])) {
		$errkoi_impact_err2='Il faut renseigné le ';
	} else {
		$koi_impact_err2=$_POST['koi_impact_err2'];
	}

	if (empty($_POST['koi_duration'])) {
		$errkoi_duration='Il faut renseigné le ';
	} else {
		$koi_duration=$_POST['koi_duration'];
	}

	if (empty($_POST['koi_duration_err1'])) {
		$errkoi_duration_err1='Il faut renseigné le ';
	} else {
		$koi_duration_err1=$_POST['koi_duration_err1'];
	}

	if (empty($_POST['koi_impact_err1'])) {
		$errkoi_impact_err1='Il faut renseigné le ';
	} else {
		$koi_impact_err1=$_POST['koi_impact_err1'];
	}

	if (empty($_POST['koi_duration_err2'])) {
		$errkoi_duration_err2='Il faut renseigné le ';
	} else {
		$koi_duration_err2=$_POST['koi_duration_err2'];
	}

	if (empty($_POST['koi_depth'])) {
		$errkoi_depth='Il faut renseigné le ';
	} else {
		$koi_depth=$_POST['koi_depth'];
	}

	if (empty($_POST['koi_depth_err1'])) {
		$errkoi_depth_err1='Il faut renseigné le ';
	} else {
		$koi_depth_err1=$_POST['koi_depth_err1'];
	}

	if (empty($_POST['koi_depth_err2'])) {
		$errkoi_depth_err2='Il faut renseigné le ';
	} else {
		$koi_depth_err2=$_POST['koi_depth_err2'];
	}

	if (empty($_POST['koi_prad'])) {
		$errkoi_prad='Il faut renseigné le ';
	} else {
		$koi_prad=$_POST['koi_prad'];
	}

	if (empty($_POST['koi_prad_err1'])) {
		$errkoi_prad_err1='Il faut renseigné le ';
	} else {
		$koi_prad_err1=$_POST['koi_prad_err1'];
	}

	if (empty($_POST['koi_prad_err2'])) {
		$koi_prad_err2='Il faut renseigné le ';
	} else {
		$koi_prad_err2=$_POST['koi_prad_err2'];
	}

	if (empty($_POST['koi_teq'])) {
		$errkoi_teq='Il faut renseigné le ';
	} else {
		$koi_teq=$_POST['koi_teq'];
	}

	if (empty($_POST['koi_insol'])) {
		$errkoi_insol='Il faut renseigné le ';
	} else {
		$koi_insol=$_POST['koi_insol'];
	}

	if (empty($_POST['koi_insol_err1'])) {
		$errkoi_insol_err1='Il faut renseigné le ';
	} else {
		$koi_insol_err1=$_POST['koi_insol_err1'];
	}

	if (empty($_POST['koi_insol_err2'])) {
		$errkoi_insol_err2='Il faut renseigné le ';
	} else {
		$koi_insol_err2=$_POST['koi_insol_err2'];
	}

	if (empty($_POST['koi_model_snr'])) {
		$errkoi_model_snr='Il faut renseigné le ';
	} else {
		$koi_model_snr=$_POST['koi_model_snr'];
	}

	if (empty($_POST['koi_tce_plnt_num'])) {
		$errkoi_tce_plnt_num='Il faut renseigné le ';
	} else {
		$koi_tce_plnt_num=$_POST['koi_tce_plnt_num'];
	}

	if (empty($_POST['koi_steff'])) {
		$errkoi_steff='Il faut renseigné le ';
	} else {
		$koi_steff=$_POST['koi_steff'];
	}

	if (empty($_POST['koi_steff_err1'])) {
		$errkoi_steff_err1='Il faut renseigné le ';
	} else {
		$koi_steff_err1=$_POST['koi_steff_err1'];
	}

	if (empty($_POST['koi_steff_err2'])) {
		$errkoi_steff_err2='Il faut renseigné le ';
	} else {
		$koi_steff_err2=$_POST['koi_steff_err2'];
	}

	if (empty($_POST['koi_slogg'])) {
		$errkoi_slogg='Il faut renseigné le ';
	} else {
		$koi_slogg=$_POST['koi_slogg'];
	}

	if (empty($_POST['koi_slogg_err1'])) {
		$errkoi_slogg_err1='Il faut renseigné le ';
	} else {
		$koi_slogg_err1=$_POST['koi_slogg_err1'];
	}

	if (empty($_POST['koi_slogg_err2'])) {
		$errkoi_slogg_err2='Il faut renseigné le ';
	} else {
		$koi_slogg_err2=$_POST['koi_slogg_err2'];
	}

	if (empty($_POST['koi_srad'])) {
		$errkoi_srad='Il faut renseigné le ';
	} else {
		$koi_srad=$_POST['koi_srad'];
	}

	if (empty($_POST['koi_srad_err1'])) {
		$errkoi_srad_err1='Il faut renseigné le ';
	} else {
		$koi_srad_err1=$_POST['koi_srad_err1'];
	}

	if (empty($_POST['koi_srad_err2'])) {
		$errkoi_srad_err2='Il faut renseigné le ';
	} else {
		$koi_srad_err2=$_POST['koi_srad_err2'];
	}

	if (empty($_POST['ra'])) {
		$errra='Il faut renseigné le ';
	} else {
		$ra=$_POST['ra'];
	}

	if (empty($_POST['dec'])) {
		$errdec='Il faut renseigné le ';
	} else {
		$dec=$_POST['dec'];
	}

	if (empty($_POST['koi_kepmag'])) {
		$errkoi_kepmag='Il faut renseigné le ';
	} else {
		$koi_kepmag=$_POST['koi_kepmag'];
	}

	if (empty($_POST['koi_disposition'])) {
		$errkoi_disposition='Il faut renseigné le ';
	} else {
		$koi_disposition=$_POST['koi_disposition'];
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
        <form action="bootstrap.php" method="POST">
            <p>
                <?php if (isset($errkoi_score)) { echo $errkoi_score; } ?>
                <label for="koi_score">Koi_score</label><br>
                <input type="text" name="koi_score" id="koi_score" placeholder="koi_score"<?php if (isset($koi_score)) { echo 'value="'.$koi_score.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_fpflag_nt)) { echo $errkoi_fpflag_nt; } ?>
                <label for="koi_fpflag_nt">Koi_fpflag_nt</label><br>
                <input type="text" name="koi_fpflag_nt" id="koi_fpflag_nt" placeholder="koi_fpflag_nt"<?php if (isset($koi_fpflag_nt)) { echo 'value="'.$koi_fpflag_nt.'"';}  ?>>
            </p>
            <p>
                <?php if (isset($errkoi_fpflag_ss)) { echo $errkoi_fpflag_ss; } ?>
                <label for="koi_fpflag_ss">Koi_fpflag_ss</label><br>
                <input type="text" name="koi_fpflag_ss" id="koi_fpflag_ss" placeholder="koi_fpflag_ss"<?php if (isset($koi_fpflag_ss)) { echo 'value="'.$koi_fpflag_ss.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_fpflag_co)) { echo $errkoi_fpflag_co; } ?>
                <label for="koi_fpflag_co">Koi_fpflag_co</label><br>
                <input type="text" name="koi_fpflag_co" id="koi_fpflag_co" placeholder="koi_fpflag_co"<?php if (isset($koi_fpflag_co)) { echo 'value="'.$koi_fpflag_co.'"';}  ?>>
            </p>
            <p>
                <?php if (isset($errkoi_fpflag_ec)) { echo $errkoi_fpflag_ec; } ?>
                <label for="koi_fpflag_ec">Koi_fpflag_ec</label><br>
                <input type="text" name="koi_fpflag_ec" id="koi_fpflag_ec" placeholder="koi_fpflag_ec"<?php if (isset($koi_fpflag_ec)) { echo 'value="'.$koi_fpflag_ec.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_period_err1)) { echo $errkoi_period_err1; } ?>
                <label for="koi_period_err1">Koi_period_err1</label><br>
                <input type="text" name="koi_period_err1" id="koi_period_err1" placeholder="koi_period_err1"<?php if (isset($koi_period_err1)) { echo 'value="'.$koi_period_err1.'"';}  ?>>
            </p>
            <p>
                <?php if (isset($errkoi_period_err2)) { echo $errkoi_period_err2; } ?>
                <label for="koi_period_err2">Koi_period_err2</label><br>
                <input type="text" name="koi_period_err2" id="koi_period_err2" placeholder="koi_period_err2"<?php if (isset($koi_period_err2)) { echo 'value="'.$koi_period_err2.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_time0bk)) { echo $errkoi_time0bk; } ?>
                <label for="koi_time0bk">Koi_time0bk</label><br>
                <input type="text" name="koi_time0bk" id="koi_time0bk" placeholder="koi_time0bk"<?php if (isset($koi_time0bk)) { echo 'value="'.$koi_time0bk.'"';}  ?>>
            </p>
            <p>
                <?php if (isset($errkoi_time0bk_err1)) { echo $errkoi_time0bk_err1; } ?>
                <label for="koi_time0bk_err1">Koi_time0bk_err1</label><br>
                <input type="text" name="koi_time0bk_err1" id="koi_time0bk_err1" placeholder="koi_time0bk_err1"<?php if (isset($koi_time0bk_err1)) { echo 'value="'.$koi_time0bk_err1.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_time0bk_err2)) { echo $errkoi_time0bk_err2; } ?>
                <label for="koi_time0bk_err2">Koi_time0bk_err2</label><br>
                <input type="text" name="koi_time0bk_err2" id="koi_time0bk_err2" placeholder="koi_time0bk_err2"<?php if (isset($koi_time0bk_err2)) { echo 'value="'.$koi_time0bk_err2.'"';}  ?>>
            </p>
            <p>
                <?php if (isset($errkoi_impact)) { echo $errkoi_impact; } ?>
                <label for="koi_impact">Koi_impact</label><br>
                <input type="text" name="koi_impact" id="koi_impact" placeholder="koi_impact"<?php if (isset($koi_impact)) { echo 'value="'.$koi_impact.'"';}  ?>>
            </p>
            <p><?php if (isset($errPrenom)) { echo $errPrenom; } ?>
                <label for="koi_impact_err1">Koi_impact_err1</label><br>
                <input type="text" name="koi_impact_err1" id="koi_impact_err1" placeholder="koi_impact_err1"<?php if (isset($koi_impact_err1)) { echo 'value="'.$koi_impact_err1.'"';}  ?>>
            </p>
            <p>
                <?php if (isset($errkoi_impact_err2)) { echo $errkoi_impact_err2; } ?>
                <label for="koi_impact_err2">Koi_impact_err2</label><br>
                <input type="text" name="koi_impact_err2" id="koi_impact_err2" placeholder="koi_impact_err2"<?php if (isset($koi_impact_err2)) { echo 'value="'.$koi_impact_err2.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_duration)) { echo $errkoi_duration; } ?>
                <label for="koi_duration">Koi_duration</label><br>
                <input type="text" name="koi_duration" id="koi_duration" placeholder="koi_duration"<?php if (isset($koi_duration)) { echo 'value="'.$koi_duration.'"';}  ?>>
            </p>
            <p>
                <?php if (isset($errkoi_duration_err1)) { echo $errkoi_duration_err1; } ?>
                <label for="koi_duration_err1">Koi_duration_err1</label><br>
                <input type="text" name="koi_duration_err1" id="koi_duration_err1" placeholder="koi_duration_err1"<?php if (isset($koi_duration_err1)) { echo 'value="'.$koi_duration_err1.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_duration_err2)) { echo $errkoi_duration_err2; } ?>
                <label for="koi_duration_err2">koi_duration_err2</label><br>
                <input type="text" name="koi_duration_err2" id="koi_duration_err2" placeholder="koi_duration_err2"<?php if (isset($koi_duration_err2)) { echo 'value="'.$koi_duration_err2.'"';}  ?>>
            </p>
            <p>
                <?php if (isset($errkoi_depth)) { echo $errkoi_depth; } ?>
                <label for="koi_depth">Koi_depth</label><br>
                <input type="text" name="koi_depth" id="koi_depth" placeholder="koi_depth"<?php if (isset($koi_depth)) { echo 'value="'.$koi_depth.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_depth_err1)) { echo $errkoi_depth_err1; } ?>
                <label for="koi_depth_err1">Koi_depth_err1</label><br>
                <input type="text" name="koi_depth_err1" id="koi_depth_err1" placeholder="koi_depth_err1"<?php if (isset($koi_depth_err1)) { echo 'value="'.$koi_depth_err1.'"';}  ?>>
            </p>
            <p>
                <?php if (isset($errkoi_depth_err2)) { echo $errkoi_depth_err2; } ?>
                <label for="koi_depth_err2">Koi_depth_err2</label><br>
                <input type="text" name="koi_depth_err2" id="koi_depth_err2" placeholder="koi_depth_err2"<?php if (isset($koi_depth_err2)) { echo 'value="'.$koi_depth_err2.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_prad)) { echo $errkoi_prad; } ?>
                <label for="koi_prad">Koi_prad</label><br>
                <input type="text" name="koi_prad" id="koi_prad" placeholder="koi_prad"<?php if (isset($koi_prad)) { echo 'value="'.$koi_prad.'"';}  ?>>
            </p>
            <p>
                <?php if (isset($errkoi_prad_err1)) { echo $errkoi_prad_err1; } ?>
                <label for="koi_prad_err1">Koi_prad_err1</label><br>
                <input type="text" name="koi_prad_err1" id="koi_prad_err1" placeholder="koi_prad_err1"<?php if (isset($koi_prad_err1)) { echo 'value="'.$koi_prad_err1.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_prad_err2)) { echo $errkoi_prad_err2; } ?>
                <label for="koi_prad_err2">Koi_prad_err2</label><br>
                <input type="text" name="koi_prad_err2" id="koi_prad_err2" placeholder="koi_prad_err2"<?php if (isset($koi_prad_err2)) { echo 'value="'.$koi_prad_err2.'"';}  ?>>
            </p>
            <p>
                <?php if (isset($errkoi_teq)) { echo $errkoi_teq; } ?>
                <label for="koi_teq">Koi_teq</label><br>
                <input type="text" name="koi_teq" id="koi_teq" placeholder="koi_teq"<?php if (isset($koi_teq)) { echo 'value="'.$koi_teq.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_insol)) { echo $errkoi_insol; } ?>
                <label for="koi_insol">Koi_insol</label><br>
                <input type="text" name="koi_insol" id="koi_insol" placeholder="koi_insol"<?php if (isset($koi_insol)) { echo 'value="'.$koi_insol.'"';}  ?>>
            </p>
            <p>
                <?php if (isset($errkoi_insol_err1)) { echo $errkoi_insol_err1; } ?>
                <label for="koi_insol_err1">Koi_insol_err1</label><br>
                <input type="text" name="koi_insol_err1" id="koi_insol_err1" placeholder="koi_insol_err1"<?php if (isset($koi_insol_err1)) { echo 'value="'.$koi_insol_err1.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_insol_err2)) { echo $errkoi_insol_err2; } ?>
                <label for="koi_insol_err2">Koi_insol_err2</label><br>
                <input type="text" name="koi_insol_err2" id="koi_insol_err2" placeholder="koi_insol_err2"<?php if (isset($koi_insol_err2)) { echo 'value="'.$koi_insol_err2.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_model_snr)) { echo $errkoi_model_snr; } ?>
                <label for="koi_model_snr">Koi_model_snr</label><br>
                <input type="text" name="koi_model_snr" id="koi_model_snr" placeholder="koi_model_snr"<?php if (isset($koi_model_snr)) { echo 'value="'.$koi_model_snr.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_tce_plnt_num)) { echo $errkoi_tce_plnt_num; } ?>
                <label for="koi_tce_plnt_num">Koi_tce_plnt_num</label><br>
                <input type="text" name="koi_tce_plnt_num" id="koi_tce_plnt_num" placeholder="koi_tce_plnt_num"<?php if (isset($koi_tce_plnt_num)) { echo 'value="'.$koi_tce_plnt_num.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_steff)) { echo $errkoi_steff; } ?>
                <label for="koi_steff">Koi_steff</label><br>
                <input type="text" name="koi_steff" id="koi_steff" placeholder="koi_steff"<?php if (isset($koi_steff)) { echo 'value="'.$koi_steff.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_steff_err1)) { echo $errkoi_steff_err1; } ?>
                <label for="koi_steff_err1">Koi_steff_err1</label><br>
                <input type="text" name="koi_steff_err1" id="koi_steff_err1" placeholder="koi_steff_err1"<?php if (isset($koi_steff_err1)) { echo 'value="'.$koi_steff_err1.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_steff_err2)) { echo $errkoi_steff_err2; } ?>
                <label for="koi_steff_err2">Koi_steff_err2</label><br>
                <input type="text" name="koi_steff_err2" id="koi_steff_err2" placeholder="koi_steff_err2"<?php if (isset($koi_steff_err2)) { echo 'value="'.$koi_steff_err2.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_slogg)) { echo $errkoi_slogg; } ?>
                <label for="koi_slogg">Koi_slogg</label><br>
                <input type="text" name="koi_slogg" id="koi_slogg" placeholder="koi_slogg"<?php if (isset($koi_slogg)) { echo 'value="'.$koi_slogg.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_slogg_err1)) { echo $errkoi_slogg_err1; } ?>
                <label for="koi_slogg_err1">koi_slogg_err1</label><br>
                <input type="text" name="koi_slogg_err1" id="koi_slogg_err1" placeholder="koi_slogg_err1"<?php if (isset($koi_slogg_err1)) { echo 'value="'.$koi_slogg_err1.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_slogg_err2)) { echo $errkoi_slogg_err2; } ?>
                <label for="koi_slogg_err2">Koi_slogg_err2</label><br>
                <input type="text" name="koi_slogg_err2" id="koi_slogg_err2" placeholder="koi_slogg_err2"<?php if (isset($koi_slogg_err2)) { echo 'value="'.$koi_slogg_err2.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_srad)) { echo $errkoi_srad; } ?>
                <label for="koi_srad">Koi_srad</label><br>
                <input type="text" name="koi_srad" id="koi_srad" placeholder="koi_srad"<?php if (isset($koi_srad)) { echo 'value="'.$koi_srad.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_srad_err1)) { echo $errkoi_srad_err1; } ?>
                <label for="koi_srad_err1">Koi_srad_err1</label><br>
                <input type="text" name="koi_srad_err1" id="koi_srad_err1" placeholder="koi_srad_err1"<?php if (isset($koi_srad_err1)) { echo 'value="'.$koi_srad_err1.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_srad_err2)) { echo $errkoi_srad_err2; } ?>
                <label for="koi_srad_err2">Koi_srad_err2</label><br>
                <input type="text" name="koi_srad_err2" id="koi_srad_err2" placeholder="koi_srad_err2"<?php if (isset($koi_srad_err2)) { echo 'value="'.$koi_srad_err2.'"';}  ?>>
            </p>
            <p><?php if (isset($errra)) { echo $errra; } ?>
                <label for="ra">Ra</label><br>
                <input type="text" name="ra" id="ra" placeholder="ra"<?php if (isset($ra)) { echo 'value="'.$ra.'"';}  ?>>
            </p>
            <p><?php if (isset($errdec)) { echo $errdec; } ?>
                <label for="dec">Dec</label><br>
                <input type="text" name="dec" id="dec" placeholder="dec"<?php if (isset($dec)) { echo 'value="'.$dec.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_kepmag)) { echo $errkoi_kepmag; } ?>
                <label for="koi_kepmag">Koi_kepmag</label><br>
                <input type="text" name="koi_kepmag" id="koi_kepmag" placeholder="koi_kepmag"<?php if (isset($koi_kepmag)) { echo 'value="'.$koi_kepmag.'"';}  ?>>
            </p>
            <p><?php if (isset($errkoi_disposition)) { echo $errkoi_disposition; } ?>
                <label for="koi_disposition">Koi_disposition</label><br>
                <input type="text" name="koi_disposition" id="koi_disposition" placeholder="koi_disposition"<?php if (isset($koi_disposition)) { echo 'value="'.$koi_disposition.'"';}  ?>>
            </p>
            <p>
                <input type="hidden" name="isSubmit" value="1"/>
                <input type="submit" value="Envoie" id="Envoie" class="ButtonPagePrincipal" onclick="getValue();"/>
            </p>
            <p>	<?php if (isset($koi_score) && isset($koi_fpflag_nt) && isset($koi_fpflag_ss) && isset($koi_fpflag_co) && isset($koi_fpflag_ec) && isset($koi_period) && isset($koi_period_err1) && isset($koi_period_err2) && isset($koi_time0bk) && isset($koi_time0bk_err1) && isset($koi_time0bk_err2) && isset($koi_impact) && isset($koi_impact_err1) && isset($koi_impact_err2) && isset($koi_duration) && isset($koi_duration_err1) && isset($koi_duration_err2) && isset($koi_depth) && isset($koi_depth_err1) && isset($koi_depth_err2) && isset($koi_prad) && isset($koi_prad_err1) && isset($koi_prad_err2) && isset($koi_teq) && isset($koi_insol) && isset($koi_insol_err1) && isset($koi_insol_err2) && isset($koi_model_snr) && isset($koi_tce_plnt_num) && isset($koi_steff) && isset($koi_steff_err1) && isset($koi_steff_err2) && isset($koi_slogg) && isset($koi_slogg_err1) && isset($koi_slogg_err2) && isset($koi_srad) && isset($koi_srad_err1) && isset($koi_srad_err2) && isset($ra) && isset($dec) && isset($koi_kepmag) && isset($koi_disposition)){
                
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
