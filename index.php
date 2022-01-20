<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phares difficiles d'accès</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<header>
    <nav class="navbar navbar-dark navbar-expand-lg px-3 py-0">
        <div class="container-fluid">
            <a class="navbar-brand" href=""><img src="https://www.routedesphares.qc.ca/fr/logo/LQMRcrjsmall.png" alt="Logo du site"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Phares
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Liste des phares</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Liste des phares avec activités</a></li>
                            <li><a class="dropdown-item" href="#">Liste des phares sans activités</a></li>
                            <li><a class="dropdown-item" href="#">Liste des phares difficiles d'accès</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">La Corporation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bulletin des Amis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<body>
    <?php
        require 'config.php';
        $mysqli = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die ('Could not connect to the database server' . mysqli_connect_error());
    ?>
    <div class="container py-3">
        <div class="row p-2">
            <h1 class="text-center">Sites de phares à accessibilité restreinte ou difficile</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                $query = "SELECT * FROM phares_difficiles_d_acces";
    
                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <div class="col">
                            <div class="card h-100 cont-img">
                                <img class="rounded-start" src=<?php echo $row['image'] ?> alt="">
                                <div class="card-body">
                                    <div class="card-text">
                                        <?php
                                            if ($row['membre'] === '1') {
                                                ?>
                                                    <small class="card-text text-muted m-0">Membre</small>
                                                <?php
                                            }
                                        ?>
                                        <p class="card-text fw-light m-0"><?php echo $row['localisation'] ?></p>
                                        <h3 class="card-title lh-sm border-bottom border-danger"><?php echo $row['id_phare'] . " " . $row['nom_phare'] ?></h3>
                                        <?php
                                            if ($access = $row['acces_phare']) {
                                                ?>
                                                    <p><?php echo $access ?></p>
                                                <?php
                                            }
                                        ?>
                                        <p class="card-text fw-light m-0"><?php echo $row['creation'] ?></p>
                                        <p class="card-text fw-light m-0"><?php echo $row['etat'] ?></p>
                                        <p class="card-text fw-light m-0"><?php echo $row['fonction'] ?></p>
                                        <?php
                                        
                                            if ($link = $row['lien']) {
                                                ?>
                                                <a href="<?php echo $link ?>"  target="_blank"><i class='fab fa-facebook-f'></i></a>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    $result->close();
                }

                $mysqli->close();
            ?>

        </div>
    </div>
</div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<footer class="px-5 pt-4">
    <div class="row g-5">
        <div class="col-12 col-md-3 d-flex flex-column align-items-center align-items-sm-start">
            <h5 class="border-bottom w-50 text-center text-sm-start">Navigation</h5>
            <ul class="nav flex-column align-items-center align-items-sm-start">
                <li class="nav-item">Accueil</li>
                <li class="nav-item">La Corporation</li>
                <li class="nav-item">Bulletin de Amis des phares</li>
            </ul>
        </div>
        <div class="col-12 col-md-3 d-flex flex-column align-items-center align-items-sm-start">
            <h5 class="border-bottom w-50 text-center text-sm-start">Phares</h5>
            <ul class="nav flex-column align-items-center align-items-sm-start">
                <li class="nav-item">Avec activités</li>
                <li class="nav-item">Sans activités</li>
                <li class="nav-item">Difficiles d'accès</li>
            </ul>
        </div>
    </div>
    <div class="d-flex justify-content-between py-4 my-4 border-top">
        <p>Tous droits réservés © 2019 - CGPEGSL</p>
        <a href="https://www.facebook.com/routedesphares/" target="_blank"><i class="fab fa-facebook-f fs-4"></i></a>
    </div>
</footer>
</html>