<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bellshade PHP</title>
    <link rel="stylesheet" href="./basics/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./basics/assets/css/all.min.css">
    <link rel="stylesheet" href="./basics/assets/css/markdown-style.css">
    <link rel="icon" href="../assets/images/icon.png">

</head>
<body class="w-100 h-100 d-flex align-items-center">
    <div class="container">
        <div class="row mb-4 justify-content-center">
            <div class="col-auto text-center">
                <div class="mt-4" style="height: 64px; mix-blend-mode: darken">
                    <img class="h-100" src="./basics/assets/images/bellshade-inline.png" alt="Bellshade PHP Logo">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow-lg">
                    <div class="card-header p-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="me-4" style="width: 64px; height: 64px;">
                                    <img src="./basics/assets/images/phplogo.png" class="img-fluid">
                                </div>
                                <div>
                                    <h4 class="mb-0">Bellshade PHP</h4>
                                    <span class="text-muted fst-italic">
                                        Gunakan navigasi berikut untuk berpindah direktori
                                    </span>
                                </div>
                            </div>
                            <nav>
                                <ul class="breadcrumb mb-0">
                                    <li class="breadcrumb-item active">root</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                            $exception = [
                                '',
                                '.',
                                '..',
                                '.git',
                                '.github',
                                'vendor',
                                'tests',
                            ];
                            $directories = scandir(realpath('./'));
                        ?>
                        <div class="list-group">
                            <?php foreach ($directories as $dir) : ?>
                                <?php if (is_dir(realpath($dir)) && array_search($dir, $exception) == '') : ?>
                                    <a href="./<?=$dir?>" class="list-group-item list-group-item-action">
                                        <i class="fas fa-folder me-2"></i>
                                        <?=$dir?>
                                    </a>
                                <?php endif;?>
                            <?php endforeach; ?>
                        </div>
                        
                        <hr class="mt-5 mb-3">
                        
                        <div class="readme-content p-5">
                            <?php
                                require_once './vendor/autoload.php';
                                $parsedown = new Parsedown();
                                echo $parsedown->text(file_get_contents('./README.md'));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="./basics/assets/js/bootstrap.bundle.min.js"></script>
    <script src="./basics/assets/js/all.min.js"></script>
    <script src="./basics/assets/js/markdown.js"></script>
</body>
</html>