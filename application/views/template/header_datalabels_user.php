<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css styling -->
    <style>
        .badge {
            margin-left: 3px;
        }

        .nav-link {
            color: white;
        }

        .nav-link:hover {
            color: yellow;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?= $title ?></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg" style="background-color: #244282">
        <div class="container">
            <img src="../assets/jti.jpg" alt="logojti" width="250" height="69">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>dosen/index">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= base_url() ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Lainnya
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url() ?>dosen/research">Riset</a>
                            <a class="dropdown-item" href="<?= base_url() ?>dosen/jabatan">Jabatan</a>
                            <a href="<?= base_url() ?>dosen/kontrakkuliah" class="dropdown-item">Kontrak Kuliah</a>
                            <a href="<?= base_url() ?>dosen/rpsfiles" class="dropdown-item">File RPS</a>
                            <a href="<?= base_url() ?>dosen/sapfiles" class="dropdown-item">File SAP</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>login/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>