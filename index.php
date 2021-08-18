<?php

include_once("helpers.php");

?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Alin Soaita Portofolio
    </title>
    <link rel="stylesheet" href=<?php echo asset('css/bootstrap.min.css'); ?>>
    <link rel="stylesheet" href=<?php echo asset('css/all.min.css'); ?>>
</head>
<body class="bg-secondary">
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href=<?php echo url(''); ?>>Alin Soaita Portofolio</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="extra/cv.pdf"><button class="btn btn-md btn-warning"><i class="fa fa-file-pdf"></i> View my CV </button></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <br>
    <div class="span12">
        <div class="card bg-dark text-white">
            <div class="card-body">
                <h5 class="card-title">
                    Laravel Applications
                </h5>
            </div>
        </div>
        <div class="card bg-light text-dark">
            <div class="card-body">
                <div class="card-text">
                    <a href="<?php echo UCP_URL; ?>" target="_blank"><img class="float-left" src="<?php echo asset('images/ucp_preview.png'); ?>" alt="Laravel UCP" style="height: 180px; width: 300px; padding-right: 10px"></a>
                    <b>User Control Panel for an online game (SA:MP) - Laravel 5.6.27</b>
                    <br>
                    <b>Description: </b> This is my first Laravel application ever. I started working on it in 2018 and i stopped in 2019 (the last account is created in 2020 because i lost my original DB).
                    The main goal for me was to remake the UCP of the biggest SA:MP server in Romania, only for fun (i have a server too that works with this UCP).<br>
                    This UCP lets SA:MP players and admins to interact with the server from the browser. This application has no real purpose without the SA:MP server alongside. The application is not fully finished, but it is in a pretty advanced state.<br>
                    <br>
                    <a href="<?php echo UCP_URL; ?>" class="btn btn-md btn-success" target="_blank"> <i class="fas fa-play-circle"> </i> Live Demo </a>
                    <a href="https://github.com/alinmihai04/ucp" class="btn btn-md btn-dark"target="_blank"> <i class="fab fa-github"> </i> GitHub Repo </a>
                    <a href="<?php echo url('/dbviewer', 'app=ucp'); ?>" class="btn btn-md btn-warning"> <i class="fas fa-database" target="_blank"> </i> Database Viewer</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src=<?php echo asset("js/jQuery.js"); ?>></script>
<script src=<?php echo asset("js/bootstrap.min.js"); ?>></script>
</html>