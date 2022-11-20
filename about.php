<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $Phone = $_SERVER['HTTP_USER_AGENT'];
    //echo $Phone;
    if (preg_match('/iphone/i', $Phone) || preg_match('/android/i', $Phone) || preg_match('/blackberry/i', $Phone) || preg_match('/symb/i', $Phone) || preg_match('/ipad/i', $Phone) || preg_match('/ipod/i', $Phone) || preg_match('/phone/i', $Phone)) {
        $On_Phone = True;
        echo '<link rel="stylesheet" href="./assets/styles/style_phone.css">';
    } else {
        echo '<link rel="stylesheet" href="./assets/styles/style.css">';
    } ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&amp;family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Cardo:ital,wght@0,400;0,700;1,400&amp;display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/fonts/font-awesome-4.7.0/css/font-awesome.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="./assets/script.js"></script>

    <title>About</title>
</head>

<body>
    <?php include("./menu.php"); ?>
    <div class="container bloc1 d-flex justify-content-center">
        <?php if ($On_Phone)
            echo '<div class="col">';
        else
            echo '<div class="col-5">'; ?>
        <div class="row" id="titre">
            <p>About</p>
        </div>
        <div class="row" id="para">
            <p>Grand passionné d’informatique depuis mon plus jeune âge, je suis étudiant à l’école ESGI à Reims
                pour une première année en Bachelor informatique en alternance à la PUM Plastiques.</p>
        </div>
        <div class="row">
            <a href="./assets/files/CV.pdf" target="_blank" class="shadow-pop-tl"><button type="button"
                    class="btn btn-success">Mon
                    CV</button></a>
        </div>
    </div>
    </div>
    <div class="container bloc2 border-top">
        <div class="row row_map">
            <?php if ($On_Phone)
                echo '<div class="col map">';
            else
                echo '<div class="col-8 map">'; ?>
            <iframe class="slide-in-bck-left"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83334.43979901285!2d3.985068311138648!3d49.253631429281015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e974334a533b09%3A0x40a5fb99a3b45c0!2s51100%20Reims!5e0!3m2!1sfr!2sfr!4v1668118639867!5m2!1sfr!2sfr"
                style="border:0;" allowfullscreen="" loading="lazy" width="100%" height="400px"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col infos">
            <div class="row">
                <span><strong>Âge : </strong> 18 </span>
            </div>
            <div class="row">
                <span><strong>Étude : </strong> Bachelor informatique</span>
            </div>
            <div class="row">
                <span><strong>E-mail : </strong><a href="mailto:contact@enzoquelenis.com" target="_blank">
                        contact@enzoquelenis.com</a></span>
            </div>
            <div class="row">
                <span><strong>Place : </strong><a href="https://goo.gl/maps/KAej3Tm9uiXFmf2o7" target="_blank">
                        Reims</a></span>
            </div>
            <div class="row icons">
                <div class="col">
                    <a id="icon" href="https://www.linkedin.com/in/enzoquelenis/" target="_blank"><i
                            class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
                    <a href="https://github.com/Enzo-Qlns" target="_blank"><i class="fa fa-github-square fa-3x"
                            aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/enzo_qlns/" target="_blank"><i class="fa fa-instagram fa-3x"
                            aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<footer>
    <p> Made by enzo with
        <i class="fa fa-heart" aria-hidden="true"></i>
    </p>
</footer>

</html>