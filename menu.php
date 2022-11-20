<style>
    .navbar {
        position: fixed;
        width: 100%;
        box-shadow: 0px 2.2px 2.2px rgb(0 0 0 / 5%), 0px 5.4px 5.3px rgb(0 0 0 / 7%), 0px 10.1px 10px rgb(0 0 0 / 8%), 0px 18.1px 17.9px rgb(0 0 0 / 10%), 0px 33.8px 33.4px rgb(0 0 0 / 12%), 0px 81px 80px rgb(0 0 0 / 16%);
        z-index: 9999;
    }

    .bloc-navbar button {
        background-color: azure;
    }

    .navbar-nav a {
        color: rgb(37 37 37) !important;
        font-size: 20px;
        font-weight: 520;
    }

    .navbar-nav .active {
        color: #1a8754 !important;
        font-weight: 500 !important;
    }

    ::-webkit-scrollbar {
        width: 17px;
    }

    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px #062818;
    }

    ::-webkit-scrollbar-thumb {
        background: #0e633b;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #0d4c2f;
    }
</style>

<?php $page = $_SERVER['PHP_SELF']; ?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: 0 auto;">
                <li class="nav-item">
                    <a <?php if ($page == "/portfolio/index.php")
                        echo 'class="nav-link active"';
                    else
                        echo
                            'class="nav-link"'; ?> aria-current="page" href="./index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a <?php if ($page == "/portfolio/about.php")
                        echo 'class="nav-link active"';
                    else
                        echo
                            'class="nav-link"'; ?> aria-current="page" href="./about.php">About</a>
                </li>
                <li class="nav-item">
                    <a <?php if ($page == "/portfolio/projet.php")
                        echo 'class="nav-link active"';
                    else
                        echo
                            'class="nav-link"'; ?> aria-current="page" href="./projet.php">Projets</a>
                </li>
            </ul>
        </div>
    </div>
</nav>