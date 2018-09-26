<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Senha segura</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
    <br>
    <div class="row">
        <div class="col-8 offset-2">
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/devices"><h4 style="color: white">Controle dispositivos | </h4></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/ssh"><h4 style="color: white">Integração SSH | </h4></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/encryption"><h4 style="color: white">Criptografia</h4></a>
                        </li>
                    </ul>
                    <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form> -->
                </div>
            </nav>
            <br>
            <div class="row">
                <div class="col-12">
                    <?php require_once $view ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
